@extends('layout')
@section('content')
@include('sweetalert::alert')
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
		<form action="{{route('user_order.add')}}" method="post">
			@csrf
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
						<form action="#" class="billing-form">
							<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Full Name</label>
	                  <input name="fullname" type="text" class="form-control" placeholder="">
	                </div>
	              </div>
               
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress"> Address</label>
	                  <input type="text" name="address" class="form-control" placeholder="House number and street name">
	                </div>
		            </div>

		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" name="phone" class="form-control" placeholder="">
	                </div>
				
				
	              </div>
				  
				  <div class="col-md-6">
				  <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" name="email" class="form-control" placeholder="">
	                </div>
					</div>
	             
	           
	          </form>
			  <div class="col-lg-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Coupon Code</h3>
    					<p>Enter your coupon code if you have one</p>
  						<form action="{{route('voucher.adduser')}}" method="post" enctype="multipart/form"  class="info">
	              		@csrf
						  <div class="form-group">
	              	<label for="">Coupon code</label>
	                <input type="text" class="form-control text-left px-3" name="voucher_name" placeholder="">
	              </div>
	     
    				</div>
    				<p><button type="submit" class="btn btn-primary py-3 px-4">Apply Coupon</button></p>
					</form>
    			</div>
        
                </div> 
			  <!-- END -->
					</div>
					<div class="col-xl-5">
					@php $sum  =0; @endphp
				@foreach   ($data as $value)
				@php
				$total =$value->price * $value->quanity;
								$sum += $total;
				 @endphp
			
				<input type="hidden"  value="{{$value->user_id}} " name="user_id">
				@endforeach
	          <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cart Total</h3>
	          			<p class="d-flex">
		    						<span>Subtotal</span>
		    						<span>{{$sum}} vnđ</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Delivery</span>
		    						<span>$0.00</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Discount</span>
		    						<span>{{number_format($voucher['voucher_price'])}}</span>
		    					</p>
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Total</span>
		    						<span>	@if($sum - $voucher['voucher_price'] >= 0)
								{{
									number_format($sum -  $voucher['voucher_price'])							
								}}
								@else
							
								{{number_format($sum)}}
								@endif vnđ</span>
		    					</p>
								</div>
	          	</div>
	          	<div class="col-md-12">
	          		<div class="cart-detail p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Payment Method</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="payment_status" value="Direct" class="mr-2"> Direct Bank Tranfer</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="payment_status" value="Payment" class="mr-2"> Check Payment</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="payment_status" value="Paypal" class="mr-2"> Paypal</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
											   <label><input type="checkbox" name="payment_status" value="" class="mr-2"> I have read and accept the terms and conditions</label>
											</div>
										</div>
									</div>
									<label><input type="hidden" name="voucher_id" value="{{ $voucher['id']}}" class="mr-2"> Direct Bank Tranfer</label>
									<p><button type="submit" class="btn btn-primary py-3 px-4">Place an order</button></p>
								</div>
	          	</div>
	          </div>
		
          </div> <!-- .col-md-8 -->
		
      </div>
	  </form>
    </section> <!-- .section -->

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