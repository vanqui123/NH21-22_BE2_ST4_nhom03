@extends('layout')
@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product name</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
						
						      </tr><!-- END TR-->
							  @php $sum  =0;@endphp
								@foreach ($carts as $cart)
							@php	$sum += $cart->price @endphp
						      <tr class="text-center">
							<td>
								{{$cart->order_id}}
                                  <button class="px-4 py-2 text-white bg-red-600 btn-remove" data-id="{{$cart->id}}">x</button>
                           </td>        
						        <td class="image-prod"><div class="img" style="background-image:url(images/{{ $cart->image}});"></div></td>
						        
						        <td class="product-name">
						        	<h3>{{$cart->product_name}}</h3>
						        </td>
						        
						        <td><input type="checkbox" name="select_product[]"></td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="{{$cart->quanity}}" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">{{$cart->price}}</td>
								@endforeach
								<form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="px-6 py-2 text-red-800 bg-red-300">Remove All Cart</button>
                          </form>
						      </tr><!-- END TR-->
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Coupon Code</h3>
    					<p>Enter your coupon code if you have one</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Coupon code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Estimate shipping and tax</h3>
    					<p>Enter your destination to get a shipping estimate</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Country</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">State/Province</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">Zip/Postal Code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>0</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>$0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>0</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>{{$sum}}</span>
    					</p>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
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
 
  <script>
	//   const btnClose = document.querySelector('.btn-close')
	  



	// 	$(document).ready(function(){

	// 	var quantitiy=0;
	// 	   $('.quantity-right-plus').click(function(e){
		        
	// 	        // Stop acting like a button
	// 	        e.preventDefault();
	// 	        // Get the field name
	// 	        var quantity = parseInt($('#quantity').val());
		        
	// 	        // If is not undefined
		            
	// 	            $('#quantity').val(quantity + 1);

		          
	// 	            // Increment
		        
	// 	    });

	// 	     $('.quantity-left-minus').click(function(e){
	// 	        // Stop acting like a button
	// 	        e.preventDefault();
	// 	        // Get the field name
	// 	        var quantity = parseInt($('#quantity').val());
		        
	// 	        // If is not undefined
		      
	// 	            // Increment
	// 	            if(quantity>0){
	// 	            $('#quantity').val(quantity - 1);
	// 	            }
	// 	    });
		    
	// 	});



	</script>
    
@endsection
@push('footer-script')
<script>
$('.btn-remove').on('click', function() {
	if(confirm('Are you sure you want to remove')){
		var id = $(this).data('id');
		$.ajax({
			url:'{{route("cart.delete")}}',
			data:{'id':id},
			success: function(data){
				location.reload(); 
			}
			
		})
	}
});

</script>
@endpush