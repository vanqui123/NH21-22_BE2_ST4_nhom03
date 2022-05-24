@extends('layout')
@section('content')
@include('sweetalert::alert')
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>order</span></p>
            <h1 class="mb-0 bread">My order</h1>
          </div>
        </div>
      </div>
    </div>
  
    <section class="ftco-section ftco-order">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="order-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						      
						        <th>&nbsp;</th>
						        <th>Image</th>
						        <th>Product name</th>
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
								@foreach ($data as $order)
							@php	
							

								$total =$order->price * $order->quanity;
								$sum += $total;
							@endphp
					
							<tr class="text-center">
							<td>
						      
						        <td class="image-prod"><div class="img" style="background-image:url(images/{{$order->product->image}});"></div></td>
						        
						        <td class="product-name">
						        	<h3>{{$order->product->name}}</h3>
						        </td>
						      
								<td class="price">{{number_format($order->price)}} vnđ</td>
						        <td class="quantity">
						        	
					             	<span type="text" name="quantity" class="quantity " >{{$order->quanity}} </span>
					        
					          </td>
						   
							  <td class="total">{{number_format($total)  }} vnđ</td>
								@endforeach
						
						      </tr><!-- END TR-->
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    		
    			<div class="col-lg-4 mt-5 order-wrap ftco-animate">
	              </div>
				
	            </form>
    				
    			<div class="col-lg-4 mt-5 order-wrap ftco-animate">
    				<div class="order-total mb-3">
    					<h3>Totals</h3>

    				
    					<hr>
    					<p class="d-flex total-price">
				
    						
    						<span>
							{{number_format($sum)}} vnđ	
							</span>
    					</p>
    				</div>
					
    			
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
		var order_id = [];
		var token=document.getElementById('token').value;
		jQuery('input[name="select_product[]"]:checkbox:checked').each(function(i){
				order_id[i] = $(this).attr('order-id');
		});
		if(order_id.length == 0)
		{
			alert('Please select atleast one product');
		}else{
			
			$.ajax({	
			url:'{{route("product")}}',
			type:'GET',
			data:{
				'order_id':order_id,
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