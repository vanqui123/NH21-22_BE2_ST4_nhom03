@extends('layout')
@section('content')
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
			
				<div class="row">
					@foreach($data as $value)
					<div class="col-md-12 d-flex ftco-animate">
					<form action="{{route('blogsingle.show')}}" method="get">
						<div class="blog-entry align-self-stretch d-md-flex">
							<a href="blog-single/{{$value->id}}" class="block-20" style="background-image: url('images/{{$value->image}}');">
							</a>
							<div class="text d-block pl-md-4">
								<div class="meta mb-3">
									<div><a href="#">{{ $value->created_at}}</a></div>
									<div><a href="#">Admin</a></div>
									<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
								</div>
								<h3 class="heading"><a href="#">{{$value->title}}</a></h3>
								<p style="  	display: block;
							display: -webkit-box;
							height: 16px*1.3*3;
							font-size: 16px;
							line-height: 1.3;
							-webkit-line-clamp: 3;  /* số dòng hiển thị */
							-webkit-box-orient: vertical;
							overflow: hidden;
							text-overflow: ellipsis;
							margin-top:10px;">{{$value->slug}}</p>
							<input type="hidden" name="id" value="{{$value->id}}">
								<button style="border: 1px solid #82ae46;background: #82ae46;border-radius: 20px;" type="submit" ><a  class="btn btn-primary py-2 px-3">Read more</a></button>
							</div>
					
						</div>
						</form>
					</div>
					@endforeach
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