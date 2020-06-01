<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\category;
class b_categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categorys']=category::where('id_parent',0)->get();
       return view('backend.category.cat_list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // data
    $cat_name=$request->input('cat_name','');
    $cat_slug=Str::of($cat_name)->slug('-');
    $id_parent=$request->input('id_parent',0);

    // create
      $cat=new category;
      $cat->cat_name=$cat_name;
      $cat->cat_slug=$cat_slug;
      $cat->id_parent=$id_parent;
      
      if( $cat->save())
      {
        return redirect()->back()->with('message','đã thêm thành công');
      }
  

     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cat_name=$request->input('cat_name','');
        $cat_slug=Str::of($cat_name)->slug('-');
        $id_parent=$request->input('id_parent',0);



        $cat=category::find($id);
        $cat->cat_name=$cat_name;
        $cat->cat_slug=$cat_slug;
        $cat->id_parent=$id_parent;
        
        if( $cat->save())
        {
          return response()->json(['message'=>'success'], 200);
        }
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        category::destroy($id);
        return redirect()->back()->with('message','đã xoá thành công!');
    }
}
