@extends('frontend.layout.layout')
{{-- title --}}
@section('title','Bài viêt')

{{-- css --}}
@section('css')
@parent
  <link rel="stylesheet" href="{{ asset('css/post.min.css') }}"/>
@endsection

{{-- main --}}
@section('main')
@include('frontend.layout.include.header',['showSearchBlock'=>false])
<main class="main-post">
  <div class="post-block-left">
    <h1 class="title-block-article">Học lập trình để làm gì?</h1>
    <p class="post-content">Hà Nội là thủ đô của nước Cộng hòa Xã hội chủ nghĩa Việt Nam, cũng là kinh đô của hầu hết các vương triều phong kiến tại Việt Nam trước đây. Do đó, lịch sử Hà Nội gắn liền với sự thăng trầm của lịch sử Việt Nam qua các thời kỳ.[5] Hà Nội là thành phố trực thuộc trung ương có diện tích lớn nhất cả nước từ khi tỉnh Hà Tây sáp nhập vào, đồng thời cũng là địa phương đứng thứ nhì về dân số với hơn 8 triệu người (năm 2019), tuy nhiên, nếu tính những người cư trú không đăng ký thì dân số thực tế của thành phố này năm 2019 là gần 10 triệu người. Mật độ dân số của Hà Nội là 2.398 người/km², mật độ giao thông là 105,2 xe/km² mặt đường. Hiện nay, Hà Nội là một đô thị loại đặc biệt của Việt Nam.</p>
  </div>
  <div class="post-block-right">
    <p class="title-block-article">Bài viết mới?</p>
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
</main>
@stop
