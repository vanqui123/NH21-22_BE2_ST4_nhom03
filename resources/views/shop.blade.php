@extends('layout')
@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
				<h1 class="mb-0 bread">Products</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 mb-5 text-center">
				<ul class="product-category">
					<li><a href="shop" class="active">All</a></li>
					@foreach ($type as $value)
					<li><a href="{{route('productByType', ['id'=>$value->type_id])}}">{{$value->type_name}}</a></li>
					@endforeach
				</ul>

			</div>
		</div>
		<form action="{{route('search')}}" method="get">
			<div class="row justify-content-center mb-5">
				<div class="col-md-8">
					<input type="search" name="keywords" class="form-control" placeholder="Tìm kiếm...">
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-primary btn-block">Tìm Kiếm</button>
				</div>
			</div>
		</form>
		<div class="row">
			@if(isset($data))
			@foreach($data as $value)
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product">
					<a href="#" class="img-prod"><img class="img-fluid" src="images/{{ $value['image']}}" alt="Colorlib Template">
						<span class="status">30%</span>
						<div class="overlay"></div>
					</a>
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="#" style="font-size: 1rem;">{{$value->name}}</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span class="mr-2 price-dc"></span><span class="price-sale">{{number_format($value['price'])}} VND</span></p>
							</div>
						</div>
						<div class="bottom-area d-flex px-3">
							<div class="m-auto d-flex">
								<a href="product-single/{{$value['product_id']}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
									<span><i class="ion-ios-menu"></i></span>
								</a>
								<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
									<span><i class="ion-ios-cart"></i></span>
								</a>
								<a href="#" class="heart d-flex justify-content-center align-items-center ">
									<span><i class="ion-ios-heart"></i></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
			@elseif (isset($_GET['type_id']))

			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product">
					<a href="#" class="img-prod"><img class="img-fluid" src="images/{{ $product_type['image']}}" alt="Colorlib Template">
						<span class="status">30%</span>
						<div class="overlay"></div>
					</a>
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="#" >{{$product_type['name']}}</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span class="mr-2 price-dc"></span><span class="price-sale">{{$product_type['price']}}</span></p>
							</div>
						</div>
						<div class="bottom-area d-flex px-3">
							<div class="m-auto d-flex">
								<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
									<span><i class="ion-ios-m9 vdenu"></i></span>
								</a>
								<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
									<span><i class="ion-ios-cart"></i></span>
								</a>
								<a href="#" class="heart d-flex justify-content-center align-items-center ">
									<span><i class="ion-ios-heart"></i></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			@endif
		</div>
		<div class="row">
			<div class="col md-12 mt-5">
				{{$data->links()}}
			</div>
		</div>

	</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
	<div class="container py-4">
		<div class="row d-flex justify-content-center py-5">
			<div class="col-md-6">
				<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
				<span>Get e-mail updates about our latest shops and special offers</span>
			</div>
			<div class="col-md-6 d-flex align-items-center">
				<form action="#" class="subscribe-form">
					<div class="form-group d-flex">
						<input type="text" class="form-control" placeholder="Enter email address">
						<input type="submit" value="Subscribe" class="submit px-3">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection