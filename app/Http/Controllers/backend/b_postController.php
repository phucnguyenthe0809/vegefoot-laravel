<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\post;

class b_postController extends Controller
{
 
    public function index()
    {
       return view('backend.postList');
    }

    public function create()
    {
        return view('backend.createPost');
    }


    public function store(Request $request)
    {
      $slug=str::of( $request->input('title_input') ) -> slug( '-' );
      $image_name = $slug. '.'. $request->file( 'image_input' )->extension();
      $data=[
        'title'     => $request->input('title_input',''),
        'describe'  => $request->input('describe_input',''),
        'slug'      => $slug,
        'image'     => $request->image_input->storeAs('upload', $image_name, 'upload'),
        'content'   => $request->input('content_input',''),
        'tags'      => $request->input('tag_input',''),
        'users_id'  => 1
      ];
      


     post::create($data);

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
