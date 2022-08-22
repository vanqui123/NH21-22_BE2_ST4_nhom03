@extends('layout')
@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('../images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Product</a></span> <span>Search</span></p>
                <h1 class="mb-0 bread">Results</h1>
            </div>
        </div>
    </div>
</div>
    
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mb-5 text-center">
                <ul class="product-category">
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
            @isset($products)
            @foreach ($products as $product)
            @php $photo = explode(',',$product->photo); @endphp
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod">
                        <img class="img-fluid" src="../images/{{$product->image}}" alt="Colorlib Template">
                        <span class="status">{{$product->product_quanity}}</span>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{$product->name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price-dc"></span><span class="price-sale">{{number_format($product->price)}} VND</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
              <div class="m-auto d-flex">
                <a href="product-single/{{$product->product_id}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                  <span><i class="ion-ios-menu"></i></span>
                </a>
                <form method="POST" action="{{ route('cart.store') }}" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" value="{{$product->product_id}}" name="product_id">
                  <input type="hidden" value="{{$product->name}}" name="name">
                  <input type="hidden" value="{{$product->price}}" name="price">
                  <input type="hidden" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                  <input type="hidden" value="{{$product->image}}" name="image">
                  @if(Auth::user())
                  <button type="submit" style="border-radius: 50px;padding: 5px 13px;color: white;background: #82ae46;border: 1px solid #82ae46;cursor: pointer;" class="buy-now d-flex justify-content-center align-items-center mx-1">
                    <span><i class="ion-ios-cart"></i></span>
                  </button>
                  @else
                  <button type="submit" style="border-radius: 50px;color: white; padding: 0px 0px;background: #82ae46;border: 1px solid #82ae46;cursor: pointer;">
                    <a class="buy-now d-flex justify-content-center align-items-center " href="{{route('login')}}"><i class="ion-ios-cart"></i></a>
                  </button>
                  @endif
                </form>

                <form action="{{route('wishlist.store')}}" method="post">
                  @csrf
                  <input type="hidden" name="product_id" value="{{$product->product_id}}" />
                  @if(Auth::user())
                  <button style="border-radius: 50px;padding: 5px 13px;color: white;background: #82ae46;border: 1px solid #82ae46;cursor: pointer;" type="submit" class="heart d-flex justify-content-center align-items-center ">
                    <span><i class="ion-ios-heart"></i></span>
                  </button>
                  @else
                  <button style="border-radius: 50px;color: white;background: #82ae46;border: 1px solid #82ae46; padding: 0px 0px;cursor: pointer;" type="submit">
                    <a class="heart d-flex justify-content-center align-items-center " href="{{route('register')}}"> <i class="ion-ios-heart"></i> </a>
                  </button>
                  @endif
                </form>
              </div>
            </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endisset
        </div>
        <div class="col-md-12">
                {{ $products->links() }}
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