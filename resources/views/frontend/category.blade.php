@extends('frontend.layout.layout')
{{-- title --}}
@section('title','CODEJ | Danh mục')

{{-- css --}}
@section('css')
@parent
  <link rel="stylesheet" href="{{ asset('css/topic.min.css') }}"/>
@endsection

{{-- main --}}
@section('main')
@include('frontend.layout.include.header',['showSearchBlock'=>false])
<main class="topic-main">
  <div class="container-main">
    <div class="list-cate flex"><a class="card-category" href="#" style="background-color:#1abc9c">Vuejs1</a><a class="card-category" href="#" style="background-color:#1abc9c">Vuejs2</a><a class="card-category" href="#" style="background-color:#1abc9c">Vuejs3</a><a class="card-category" href="#" style="background-color:#1abc9c">Vuejs4</a><a class="card-category" href="#" style="background-color:#1abc9c">Vuejs5</a><a class="card-category" href="#" style="background-color:#1abc9c">Vuejs6</a><a class="card-category" href="#" style="background-color:#1abc9c">Vuejs7</a><a class="card-category" href="#" style="background-color:#1abc9c">Vuejs8</a>
    </div>
    <div class="block-main">
      <div class="article__block">
        <div class="title-block-article">_Bài viết mới_</div>
        <article class="flex"><a class="article__image" href=""><img src="./images/images.jpg" alt=""/></a>
          <div class="article__block">
            <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
            <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
          </div>
        </article>
        <article class="flex"><a class="article__image" href=""><img src="./images/images.jpg" alt=""/></a>
          <div class="article__block">
            <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
            <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
          </div>
        </article>
        <article class="flex"><a class="article__image" href=""><img src="./images/images.jpg" alt=""/></a>
          <div class="article__block">
            <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
            <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
          </div>
        </article>
        <article class="flex"><a class="article__image" href=""><img src="./images/images.jpg" alt=""/></a>
          <div class="article__block">
            <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
            <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
          </div>
        </article>
        <article class="flex"><a class="article__image" href=""><img src="./images/images.jpg" alt=""/></a>
          <div class="article__block">
            <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
            <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
          </div>
        </article>
        <article class="flex"><a class="article__image" href=""><img src="./images/images.jpg" alt=""/></a>
          <div class="article__block">
            <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
            <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
          </div>
        </article>
        <article class="flex"><a class="article__image" href=""><img src="./images/images.jpg" alt=""/></a>
          <div class="article__block">
            <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
            <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
          </div>
        </article>
        <article class="flex"><a class="article__image" href=""><img src="./images/images.jpg" alt=""/></a>
          <div class="article__block">
            <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
            <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
          </div>
        </article>
      </div>
      <div class="article__block">
        <div class="title-block-article">_Bài viết xem nhiều_</div>
        <article class="flex"><a class="article__image" href=""><img src="./images/images.jpg" alt=""/></a>
          <div class="article__block">
            <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
            <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
          </div>
        </article>
        <article class="flex"><a class="article__image" href=""><img src="./images/images.jpg" alt=""/></a>
          <div class="article__block">
            <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
            <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
          </div>
        </article>
        <article class="flex"><a class="article__image" href=""><img src="./images/images.jpg" alt=""/></a>
          <div class="article__block">
            <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
            <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
          </div>
        </article>
        <article class="flex"><a class="article__image" href=""><img src="./images/images.jpg" alt=""/></a>
          <div class="article__block">
            <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
            <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
          </div>
        </article>
        <article class="flex"><a class="article__image" href=""><img src="./images/images.jpg" alt=""/></a>
          <div class="article__block">
            <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
            <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
          </div>
        </article>
        <article class="flex"><a class="article__image" href=""><img src="./images/images.jpg" alt=""/></a>
          <div class="article__block">
            <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
            <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
          </div>
        </article>
        <article class="flex"><a class="article__image" href=""><img src="./images/images.jpg" alt=""/></a>
          <div class="article__block">
            <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
            <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
          </div>
        </article>
        <article class="flex"><a class="article__image" href=""><img src="./images/images.jpg" alt=""/></a>
          <div class="article__block">
            <p class="article__title"><a href="#">20 linux command hữu ích dành cho Data Scientist</a></p><span class="article__author">nguyen the phuc</span><span class="article__time">- 03/05/2020</span>
            <p class="article__content">Bài viết này của CODEJ sẽ trình bày các linux command hữu ích dành cho dân data scientist. Đây là tổng</p>
          </div>
        </article>
      </div>
    </div>
  </div>
</main>
@stop
