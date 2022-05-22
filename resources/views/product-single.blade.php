@extends('layout')
@section('content')

    <div class="hero-wrap hero-bread" style="background-image: url('../images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>Product Single</span></p>
            <h1 class="mb-0 bread">Product Single</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">

    	<div class="container">

    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="" class="image-popup"><img src="../images/{{$product_detail['image'] }}" class="img-fluid" alt="Colorlib Template"></a>
    			</div>

    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>{{$product_detail['name']}}</h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							</p>
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
							</p>
							<p class="text-left">
								<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
							</p>
						</div>
    				<p class="price"><span>{{$product_detail['price']}}</span></p>
    				<p> {{$product_detail['description']}}</p>
						</p>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
		              <div class="select-wrap">
	                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                  <select name="" id="" class="form-control">
	                  	<option value="">Small</option>
	                    <option value="">Medium</option>
	                    <option value="">Large</option>
	                    <option value="">Extra Large</option>
	                  </select>
	                </div>
		            </div>
							</div>
							<div class="w-100"></div>
							
	<form method="POST" action="{{ route('cart.store') }}" enctype="multipart/form-data">
	@csrf
			<div class="input-group col-md-6 d-flex mb-3" style="width: 300px;" >
						<input type="hidden"  value="{{$product_detail['product_id']}}" name="product_id">
	             	<input type="hidden"  value="{{$product_detail['name']}}" name="name">
	             	<input type="hidden"   value="{{$product_detail['price']}}" name="price">
	             	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
					 <input type="hidden"  value="{{$product_detail['image']}}" name="image">	            				
	          	</div>
	          	<div class="w-100"></div>
	          	<div class="col-md-12">
	          		<p style="color: #000;">600 kg available</p>
	          	</div>
          	</div>
			
			  
			   @if(Auth::user())
			   <p  class="btn btn-black py-3 px-5"><button style="cursor: pointer;" type="submit">Add to Cart</button></p>
			@else
			<p  class="btn btn-black py-3 px-5"><button style="cursor: pointer;" ><a href="{{route('register')}}"> Add to Cart</a></button></p>
			@endif 
    			</div>
    		</div>
			</form>
    	</div>
	
    </section>
	<form action="{{route('comment.store')}}" method="post">
		@csrf
	<div class="card">
			   <div class="row">
			
				   <div class="col-12">
					   <div class="comment-box ml-2">
						<input type="hidden"  value="{{$product_detail['product_id']}}" name="product_id">
						   <h5>Add a comment</h5>
						   <div class="rating"> 
							   <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
							   <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> 
							   <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
							   <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
							   <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
</div>						   
						   <div class="comment-area">
							   <textarea class="form-control" name="text_comment" placeholder="what is your view?" ></textarea>
						   </div> 
						   <div class="comment-btns mt-2">  
							   <div class="row"> 
								   <div class="col-6">									   
									   <div class="">	
									   @if(Auth::user())
									   <button type="submit" class="btn btn-success send btn-sm">Send </button>      										   
			@else
			<button type="submit" class="btn btn-success send btn-sm"><a href="{{route('register')}}" style="color: white;"> Send</a></button> 
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
		   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<div class="container">
<div class="row">
    <div class="col-md-12">
		@foreach($comment as $comments)
        <div class="media g-mb-30 media-comment">
            <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Image Description">
            <div class="media-body u-shadow-v18 g-bg-secondary " style="padding: 10px;">
              <div class="g-mb-15">
                <h5 class="h5 g-color-gray-dark-v1 mb-0">{{$comments->users->name}}</h5>
				<p class="g-color-gray-dark-v4 g-font-size-12">
				<div class="rating"> 
				@if($comments->rate == 1)
				<span><i class="fas fa-star" style="color: #ffbc00;"></i></span>
				@elseif($comments->rate == 2)
				<span><i class="fas fa-star" style="color: #ffbc00;"></i></span>
				<span><i class="fas fa-star" style="color: #ffbc00;"></i></span>
				@elseif($comments->rate == 3)
				<span><i class="fas fa-star" style="color: #ffbc00;"></i></span>
				<span><i class="fas fa-star" style="color: #ffbc00;"></i></span>
				<span><i class="fas fa-star" style="color: #ffbc00;"></i></span>

				@elseif($comments->rate == 4)
				<span><i class="fas fa-star" style="color: #ffbc00;"></i></span>
				<span><i class="fas fa-star" style="color: #ffbc00;"></i></span>
					<span><i class="fas fa-star" style="color: #ffbc00;"></i></span>
				<span><i class="fas fa-star" style="color: #ffbc00;"></i></span>
				@elseif($comments->rate == 5 )
				<span><i class="fas fa-star" style="color: #ffbc00;"></i></span>
				<span><i class="fas fa-star" style="color: #ffbc00;"></i></span>
					<span><i class="fas fa-star" style="color: #ffbc00;"></i></span>
				<span><i class="fas fa-star" style="color: #ffbc00;"></i></span>
				<span><i class="fas fa-star" style="color: #ffbc00;"></i></span>


				@endif
				</div><br>
				</p>
              </div>

              <p>{{$comments->text_comment}}</p>
            </div>
        </div>
		@endforeach
    </div>
</div>
</div>
    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Products</span>
            <h2 class="mb-4">Related Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
			@foreach ($type_products as $value)
    			<div class="col-md-6 col-lg-3 ftco-animate">
				
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="../images/{{$value->image}}" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{$value->name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-sale">{{$value->price}}</span><span class="price-dc">$80.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
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
 
  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
@endsection