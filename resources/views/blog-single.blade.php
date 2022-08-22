@extends('layout')
@section('content')
@include('sweetalert::alert')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
        <h1 class="mb-0 bread">Blog</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">

      <div class="col-lg-8 ftco-animate">
        <h2 class="mb-3">{{$blog_detail['title']}}</h2>

        <p>
          <img src="../images/{{$blog_detail['image']}}" alt="" class="img-fluid">
        </p>

        <p>{{$blog_detail['slug']}}</p>

        <div class="tag-widget post-tag-container mb-5 mt-5">
          <div class="tagcloud">
            <a href="#" class="tag-cloud-link">Life</a>
            <a href="#" class="tag-cloud-link">Sport</a>
            <a href="#" class="tag-cloud-link">Tech</a>
            <a href="#" class="tag-cloud-link">Travel</a>
          </div>
        </div>

        <form action="{{route('commentblog.store')}}" method="post">
          @csrf
          <div class="card" style="margin-left: 0px;
    margin-right: 0px;">
            <div class="row">
              <div class="col-12">
                <div class="comment-box ml-2">
                  <input type="hidden" value="{{$blog_detail['id']}}" name="blog_id">
                  <h5>Add a comment</h5>
                  <div class="comment-area">
                    <textarea class="form-control" name="text_comment" placeholder="what is your view?"></textarea>
                  </div>
                  <div class="comment-btns mt-2">
                    <div class="row">
                      <div class="col-6">
                        <div class="">
                          @if(Auth::user())
                          <button type="submit" class="btn btn-success send btn-sm">Send </button>
                          @else
                          <button type="submit" class="btn btn-success send btn-sm"><a href="{{route('login')}}" style="color: white;"> Send</a></button>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </form>

        <div class="pt-5 mt-5">

          <ul class="comment-list">
            @foreach ($comment_blog as $comments)
            <li class="comment">
              <div class="vcard bio" style="border-style: solid;">
                <img src="images/person_1.jpg">
              </div>
              <div class="comment-body">
                <h3>{{$comments->users->name}}</h3>
                <p style="border-style: solid;">{{$comments->text_comment}}</p>
              </div>
            </li>
            @endforeach

          </ul>
          <!-- END comment-list -->


        </div>
      </div> <!-- .col-md-8 -->
      <div class="col-lg-4 sidebar ftco-animate">
        <div class="sidebar-box">
          <form action="#" class="search-form">
            <div class="form-group">
              <span class="icon ion-ios-search"></span>
              <input type="text" class="form-control" placeholder="Search...">
            </div>
          </form>
        </div>
        <div class="sidebar-box ftco-animate">
          <h3 class="heading">Categories</h3>
          <ul class="categories">
            <li><a href="#">Vegetables <span>(12)</span></a></li>
            <li><a href="#">Fruits <span>(22)</span></a></li>
            <li><a href="#">Juice <span>(37)</span></a></li>
            <li><a href="#">Dries <span>(42)</span></a></li>
          </ul>
        </div>

        <div class="sidebar-box ftco-animate">
          <h3 class="heading">Recent Blog</h3>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
            <div class="text">
              <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
            <div class="text">
              <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
            <div class="text">
              <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="sidebar-box ftco-animate">
          <h3 class="heading">Tag Cloud</h3>
          <div class="tagcloud">
            <a href="#" class="tag-cloud-link">fruits</a>
            <a href="#" class="tag-cloud-link">tomatoe</a>
            <a href="#" class="tag-cloud-link">mango</a>
            <a href="#" class="tag-cloud-link">apple</a>
            <a href="#" class="tag-cloud-link">carrots</a>
            <a href="#" class="tag-cloud-link">orange</a>
            <a href="#" class="tag-cloud-link">pepper</a>
            <a href="#" class="tag-cloud-link">eggplant</a>
          </div>
        </div>

        <div class="sidebar-box ftco-animate">
          <h3 class="heading">Paragraph</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
        </div>
      </div>

    </div>
  </div>
</section> <!-- .section -->

@endsection