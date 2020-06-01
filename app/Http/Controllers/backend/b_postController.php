<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\{post,category};

class b_postController extends Controller
{
    function uploadContentBase64($text){
        $arrayTxt=explode('"',$text);
        $arrayNew=array();
        foreach($arrayTxt as $value)
        {
            if(strpos($value, 'data:image') !== false){
               
                $imgName=Str::random(8).'.jpg';
                base64ToImage($value,'upload/'.$imgName);
                $arrayNew[]=asset('upload/'.$imgName);
            } 
            else{
                $arrayNew[]=$value;
            }
    
        }
        return implode('"',$arrayNew);
    }

    public function index()
    {
        $data['posts']=post::orderBy('id','DESC')->paginate(8);
       return view('backend.post.post-list',$data);
    }

    public function create()
    {
        return view('backend.post.post-create');
    }


    public function store(Request $request)
    {
       
    //  data
        $slug         =   str::of( $request->input('title_input') ) -> slug( '-' );
        $image_name   =   $slug. '.'. $request->file( 'image_input' )->extension();
        $title        =   $request->input('title_input','');
        $describe     =   $request->input('describe_input','');
        $image        =   $request->image_input->storeAs('upload', $image_name, 'upload');
        $content      =   $this->uploadContentBase64($request->input('content_input',''));
        $tags         =   $request->input('tag_input','');
        $user_id      =   1;
        $array_cate   =   $request->input('category_input',[]);

    // create
        $post=new post;
        $post->post_image=$image;
        $post->post_title=$title;
        $post->post_slug=$slug;
        $post->post_describe=$describe;
        $post->post_content=$content;
        $post->post_tag=$tags;
        $post->user_id=$user_id;
        $post->save();
        $post->category()->attach($array_cate);
      return redirect()->route('backend.post.index');


    }




    public function edit($id)
    {
        $post=post::findOrFail($id);
        $arrayIdChecked=[];
        foreach ($post->category as$value) {
            $arrayIdChecked[]=$value['id'];
        }
        return view('backend.post.post-edit',compact('post','arrayIdChecked'));
    }


    public function update(Request $request, $id)
    {
        //  data
        $slug         =   str::of( $request->input('title_input') ) -> slug( '-' );
        $title        =   $request->input('title_input','');
        $describe     =   $request->input('describe_input','');
        $content      =   $this->uploadContentBase64($request->input('content_input',''));
        $tags         =   $request->input('tag_input','');
        $user_id      =   1;
        $array_cate   =   $request->input('category_input',[]);

    // create
        $post=post::findOrFail($id);
      
        if ($request->hasFile('image_input')) {
            // delete file exios
            Storage::disk('upload')->delete($post->post_image);
            $image_name   =   $slug. '.'. $request->file( 'image_input' )->extension();
            $post->post_image=$request->file('image_input')->storeAs('upload',$image_name,'upload');
            
        }
        $post->post_title=$title;
        $post->post_slug=$slug;
        $post->post_describe=$describe;
        $post->post_content=$content;
        $post->post_tag=$tags;
        $post->user_id=$user_id;
        $post->save();
        $post->category()->sync($array_cate);
      return redirect()->route('backend.post.index');
    }


    public function destroy($id)
    {
        // remove image
    //     $post=post::find($id);
    //     $post->category()->detach();
    //     Storage::disk('upload')->delete($post->post_image);
    //     post::destroy($id);
    //   return redirect()->back();
    }
}
