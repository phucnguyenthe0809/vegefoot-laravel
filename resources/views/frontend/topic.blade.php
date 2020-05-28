@extends('frontend.layout.layout')
{{-- title --}}
@section('title','CODEJ | Chủ đề')

{{-- css --}}
@section('css')
@parent
<link rel="stylesheet" href="{{ asset('css/single.min.css') }}"/>
@endsection

{{-- main --}}
@section('main')
@include('frontend.layout.include.header',['showSearchBlock'=>false])
<main class="single-main">
  <div class="title-block-article">_VUEJS_</div>
  <article class="flex"><a class="article__image" href=""><img src="{{ asset('./images/images.jpg') }}" alt=""/></a>
    <div class="article__block">
      <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
      <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
    </div>
  </article>
  <article class="flex"><a class="article__image" href=""><img src="{{ asset('./images/images.jpg') }}" alt=""/></a>
    <div class="article__block">
      <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
      <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
    </div>
  </article>
  <article class="flex"><a class="article__image" href=""><img src="{{ asset('./images/images.jpg') }}" alt=""/></a>
    <div class="article__block">
      <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
      <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
    </div>
  </article>
  <article class="flex"><a class="article__image" href=""><img src="{{ asset('./images/images.jpg') }}" alt=""/></a>
    <div class="article__block">
      <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
      <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
    </div>
  </article>
  <article class="flex"><a class="article__image" href=""><img src="{{ asset('./images/images.jpg') }}" alt=""/></a>
    <div class="article__block">
      <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
      <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
    </div>
  </article>
  <article class="flex"><a class="article__image" href=""><img src="{{ asset('./images/images.jpg') }}" alt=""/></a>
    <div class="article__block">
      <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
      <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
    </div>
  </article>
  <article class="flex"><a class="article__image" href=""><img src="{{ asset('./images/images.jpg') }}" alt=""/></a>
    <div class="article__block">
      <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
      <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
    </div>
  </article>
  <article class="flex"><a class="article__image" href=""><img src="{{ asset('./images/images.jpg') }}" alt=""/></a>
    <div class="article__block">
      <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
      <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
    </div>
  </article>
</main>
@stop
