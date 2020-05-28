@extends('frontend.layout.layout')
{{-- title --}}
@section('title','Trang chủ CODEJ | chia sẻ kiến thức free')

{{-- css --}}
@section('css')
@parent
  <link rel="stylesheet" href="{{ asset('css/index.min.css') }}"/>
@endsection

{{-- main --}}
@section('main')
@include('frontend.layout.include.header',['showSearchBlock'=>true])
<main>
  <div class="container">
    <div class="topic-list flex"><a class="btn btn--web" href="#">
        <p>LẬP TRÌNH WEB</p></a><a class="btn btn--ios" href="#">
        <p>LẬP TRÌNH MOBILE</p></a><a class="btn btn--winform" href="#">
        <p>LẬP TRÌNH WINFORM</p></a><a class="btn btn--film" href="#">
        <p>PHIM GIẢI TRÍ</p></a></div>
    <div class="topic-update">
      <h3>Bài viết mới</h3>
      <div>
        <ul class="colum-2">
          <li class="new">nội dung1</li>
          <li class="new">nội dung2</li>
          <li class="new">nội dung3</li>
          <li class="new">nội dung4</li>
          <li class="new">nội dung5</li>
        </ul>
      </div>
    </div>
  </div>
</main>
@stop