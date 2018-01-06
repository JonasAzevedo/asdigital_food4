<?php include('header.php'); ?>

<!-- SHOPPING CART STARTS HERE -->
<div class="container-fluid order-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 top-order">
                <p>
                    Enjoy TYME delivered direct to your door, anywhere in Manhattan or Brooklyn. <br>
                    Each meal is freshly prepared, using only real food, and comes ready to eat. <br>
                    Perfect for planning for the weeks.
                </p>
            </div>
            <div class="col-sm-6">

            </div>
		</div>
		<div class="row cart">
			<div class="col-sm-6">
				<div class="cart-back">
					<h2 class="text-center"><i class="fa fa-shopping-cart"></i> Your Cart</h2>
					<p class="text-center">Please review your items below</p> 
					<table class="table table-hover forms">
		                <thead>
		                    <tr>
		                        <th>Item Name</th>
		                        <th>Quantity</th>
		                        <th class="text-center">Price</th>
		                        <th class="text-center">Sub Total</th>
		                        <th> Control </th>
		                    </tr>
		                </thead>
		                <tbody>
		                	<?php if (@$items_number >= 1){ // if order have one item or more loop in it and make a list of items in cart
								$n = 1;
								$total = 0;
								while($item = mysqli_fetch_array($cart_data)){
									
								 ?>
				                <tr> <th scope="row"><?=$n?></th> <td><?=$item['item_name']?></td> <td><?=$item['quantity']?></td> <td><?=$item['price']?>$</td> <td><a href="cart.php?do=delete&id=<?=$item['id']?>"><span class="btn btn-danger" >remove </span></a>   <a href="cart.php?do=add_one&id=<?=$item['id']?>"><span class="btn btn-success" >+ </span></a> <a href="cart.php?do=remove_one&id=<?=$item['id']?>"><span class="btn btn-warning" >- </span></a>  </td> </tr>
				                <?php
								$n++;
								$total +=$item['price'];
							}}?>
		                    <!-- <tr class="highlight">
		                        <td class="col-sm-8 col-md-6">
			                        <div class="media">		                     
			                            <div class="media-body">
			                                <h4 class="media-heading">Pad Thai</h4>
			                                <span>SKU: </span><span class="text-success"><strong>0001</strong></span>
			                            </div>
			                        </div>
		                    	</td>
		                        <td class="col-sm-1 col-md-1" style="text-align: center">
		                        <input type="number" class="form-control" id="exampleInputEmail1" value="3">
		                        </td>
		                        <td class="col-sm-1 col-md-1 text-center"><strong>$10</strong></td>
		                        <td class="col-sm-1 col-md-1 text-center"><strong>$10</strong></td>
		                        <td class="col-sm-1 col-md-1">
		                        <button type="button" class="btn btn-danger">
		                            <span class="glyphicon glyphicon-remove"></span> Remove
		                        </button></td>
		                    </tr> -->
		                    <tr class="highlight">
		                        <td class="col-sm-7 col-md-5">
			                        <div class="media">		                     
			                            <div class="media-body">
			                                <h4 class="media-heading">Pad Thai</h4>
			                                <span>SKU: </span><span class="text-success"><strong>0001</strong></span>
			                            </div>
			                        </div>
		                    	</td>
		                        <td class="col-sm-1 col-md-1" style="text-align: center">
		                        <input type="number" class="form-control" id="exampleInputEmail1" value="3">
		                        </td>
		                        <td class="col-sm-1 col-md-1 text-center"><strong>$10</strong></td>
		                        <td class="col-sm-2 col-md-2 text-center"><strong>$10</strong></td>
		                        <td class="col-sm-1 col-md-1">
		                        <button type="button" class="btn btn-danger">
		                            <span class="glyphicon glyphicon-remove"></span> Remove
		                        </button></td>
		                    </tr>
		                </tbody>
		                <tfoot>
		                	<tr> <th>#</th> <th>TOTAL</th> <th></th> <th><?php echo(@$total)?$total:'0'; ?>$</th> <th></th></tr>
		                    <!-- <tr>
		                        <td>   </td>
		                        <td>   </td>
		                        <td>   </td>
		                        <td><h3>Total</h3></td>
		                        <td class="text-right"><h3>$31.53</h3></td>
		                    </tr>
		                    <tr>
		                        <td>   </td>
		                        <td>   </td>
		                        <td>   </td>
		                        <td style="visibility:hidden;">
		                        <button type="button" class="btn btn-default">
		                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
		                        </button></td>
		                        <td style="visibility:hidden;">
		                        <button type="button" class="btn btn-success">
		                            Checkout <span class="glyphicon glyphicon-play"></span>
		                        </button></td>
		                    </tr> -->
		                </tfoot>
		            </table>
				</div>
			</div> <!-- COL_SM_6 -->
			<div class="col-sm-6">
				<div class="cart-back">
					<h2 class="text-center">Create Your Account</h2>
					<p class="text-center"><a href="#">Already have an account? Log in here. </a></p>
					<form class="forms">
						<div class="form-group">
						    <label>First Name</label>
						    <input type="text" class="form-control">
						</div>
						<div class="form-group">
						    <label>Last Name</label>
						    <input type="text" class="form-control">
						</div>
						<div class="form-group">
						    <label>Email Address</label>
						    <input type="text" class="form-control">
						</div>
						<div class="form-group">
						    <label>Password
						    	<span class="help" data-toggle="tooltip" title="" data-original-title="Minimum password requirements: 6 alphanumeric characters.">
									<i class="fa fa-question-circle"></i>
								</span>
						    </label>
						    <input type="password" class="form-control">
						</div>
						<div class="form-group">
						    <label>Phone</label>
						    <input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Country</label>
						    <select class="form-control">
						    	<option>United States</option>
						    	<option>Canada</option>
						    </select>
						</div>
						<div class="form-group">
						    <label>Address</label>
						    <input type="text" class="form-control">
						</div>
						<div class="form-group">
						    <label>City</label>
						    <input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>State</label>
						    <select class="form-control">
						    	<option>United States</option>
						    	<option>Canada</option>
						    </select>
						</div>
						<div class="form-group">
						    <label>Zip Code</label>
						    <input type="text" class="form-control">
						</div>
						<div class="fb-checkbox form-group">
							<input type="checkbox" required="" class="" name="" id="" aria-required="true"> 
							<label for="checkbox-1508358182627" class="fb-checkbox-label">Please confirm your order is of a minimum 4 meals <span class="required">*</span> </label>
						</div>
						<div class="fb-checkbox form-group">
							<input type="checkbox" required="" class="" name="" id="" aria-required="true"> 
							<label for="checkbox-1508358182627" class="fb-checkbox-label"> Please confirm your order is being placed 48 hours in advance <span class="required">*</span> </label>
						</div>
						<div class="form-group">
							<label>Delivery Day (Note: Weekly Deliveries start the following week) </label>
						    <select class="form-control">
						    	<option>Monday</option>
						    	<option>Thursday</option>
						    </select>
						</div>
						<div class="form-group">
						    <label>Date of Delivery</label>
						    <input type="text" class="form-control">
						</div>
						<div class="fb-checkbox form-group">
							<label>Please select the delivery window below. (NOTE: You need to be at the delivery location to recieve the product).</label> <br>
							<input type="checkbox" required="" class="" name="" id="" aria-required="true"> 
							<label for="checkbox-1508358182627" class="fb-checkbox-label"> 6am - 8am <span class="required">*</span> </label> <br>
							<input type="checkbox" required="" class="" name="" id="" aria-required="true"> 
							<label for="checkbox-1508358182627" class="fb-checkbox-label"> 6am - 8am <span class="required">*</span> </label> <br>
							<input type="checkbox" required="" class="" name="" id="" aria-required="true"> 
							<label for="checkbox-1508358182627" class="fb-checkbox-label"> 6am - 8am <span class="required">*</span> </label> <br>
							<input type="checkbox" required="" class="" name="" id="" aria-required="true"> 
							<label for="checkbox-1508358182627" class="fb-checkbox-label"> 6am - 8am <span class="required">*</span> </label>
						</div>
						<div class="form-group">
						    <label>Please let us know if you have any specific delivery instructions for our courier.</label>
						    <input type="text" class="form-control">
						</div>
	                        <a href="orders.php">
	                        	<button type="button" class="btn btn-shop">
		                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
		                        </button>
	                        </a>	                        
	                        <button type="button" class="btn btn-checkout">
	                            <a href="submit_order.php">Submit <span class="glyphicon glyphicon-play"></span></a>
	                        </button>	                    
					</form>
				</div>
			</div> <!-- COL_SM -->
		</div> <!-- ROW_ENDS -->
	</div>
</div>
<!-- SHOPPING CART ENDS HERE -->

<?php include('footer.php'); ?>