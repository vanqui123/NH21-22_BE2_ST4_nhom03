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
						        <th>Slect</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
						
						      </tr><!-- END TR-->
							  @php $sum  =0;
							 	$total = 0; 
							  @endphp
								@foreach ($carts as $cart)
							@php	
							
								
								$total =$cart->price * $cart->quanity;
								$sum += $total;
							@endphp
					
							<tr class="text-center">
							<td>
						
								<form action="{{route('cart.delete')}}" method="get" enctype="multipart/form">
									@csrf
                                  <button class="px-4 py-2 text-white bg-red-600 btn-remove" >x</button>
								  <input type="hidden" value="{{$cart->id}}" name="id"/>
								  </form>
                           </td>        
						        <td class="image-prod"><div class="img" style="background-image:url(images/{{$cart->image}});"></div></td>
						        
						        <td class="product-name">
						        	<h3>{{$cart->product_name}}</h3>
						        </td>
							
								<td><input type="checkbox" name="select_product[]" cart-id="{{$cart->id}}"></td>
						        <input type="hidden" id="token" value="{{ csrf_token() }}">
						        <input type="hidden" name="user_id" value="{{$cart->user_id}}">

								<td class="price">{{number_format($cart->price)}} vnđ</td>
						       
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
							<form action="{{route('cart.decrease')}}" method="get">
								@csrf
									<span class="input-group-btn mr-2">
										<input type="hidden" value="{{$cart->id}}" name="id"/>
										<button  type="submit" class="quantity-left-minus btn btn_left"  data-type="minus" data-field="">
									<i class="ion-ios-remove"></i>
										</button>
										</span>
										</form>
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="{{$cart->quanity}}" min="1" max="100">
									 <form action="{{route('cart.increase')}}" method="get">
								@csrf
									 <span class="input-group-btn ml-2">
									 <input type="hidden" value="{{$cart->id}}" name="id"/>
									<button  type="submit" class="quantity-right-plus btn btn_right" data-type="plus" data-field="">
									<i class="ion-ios-add"></i>
								</button>
	           			  	</span>
								 </form>
					          	</div>
					          </td>
						   
							  <td class="total">{{number_format($total)  }} vnđ</td>
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
	              </div>
				
	            </form>
    				
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>

    				
    					<hr>
    					<p class="d-flex total-price">
				
    						<span>Total</span>
    						<span>
							{{number_format($sum)}} vnđ	
							</span>
    					</p>
    				</div>
					
    				<p class="btn btn-primary py-3 px-4 buy_product"> Proceed to Checkout </s></p>
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
	
	$('.buy_product').on('click', function(){
		var cart_id = [];
		var token=document.getElementById('token').value;
		jQuery('input[name="select_product[]"]:checkbox:checked').each(function(i){
				cart_id[i] = $(this).attr('cart-id');
		});
		if(cart_id.length == 0)
		{
			alert('Please select atleast one product');
		}else{
			
			$.ajax({	
			url:'{{route("product")}}',
			type:'GET',
			data:{
				'cart_id':cart_id,
				'_token':token
			},
			success: function(data){
				alert('Add checkout success!');
				location.reload();
			}
		});
		}
		
	});

</script>
@endpush