<?php include('header.php'); ?>

<?php 
session_start();
include("inc/config.inc.php");
setlocale(LC_MONETARY,"en_US");
?>

<div class="container">	
<h3 style="text-align:left">Review Your Cart Before Buying</h3>
<?php
if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){
	$total = 0;
	$list_tax = '';
	?>	
	<table class="table" id="shopping-cart-results">
	<thead>
	<tr>
	<th>Product</th>
	<th>Price</th>
	<th>Quantity</th>
	<th>Subtotal</th>		
	<th>&nbsp;</th>				
	</tr>
	</thead>
	<tbody>				
	<?php			
	$cart_box = '';
	foreach($_SESSION["products"] as $product){
		$product_name = $product["product_name"];
		$product_qty = $product["product_qty"];
		$product_price = $product["product_price"];
		$product_code = $product["product_code"];
		$product_color = $product["product_color"];			
		$item_price = sprintf("%01.2f",($product_price * $product_qty)); 		
		?>
		<tr>
		<td><?php echo $product_name; echo "&mdash;"; echo $product_color; ?></td>
		<td><?php echo $product_price; ?></td>
		<td><?php echo $product_qty; ?></td>
		<td><?php echo $currency; echo sprintf("%01.2f", ($product_price * $product_qty)); ?></td>
		<td>&nbsp;</td>
		</tr>				
		<?php		
		$subtotal = ($product_price * $product_qty);
		$total = ($total + $subtotal);
	}	
	$grand_total = $total + $shipping_cost;
	foreach($taxes as $key => $value){
			$tax_amount = round($total * ($value / 100));
			$tax_item[$key] = $tax_amount;
			$grand_total = $grand_total + $tax_amount; 
	}	
	foreach($tax_item as $key => $value){
		$list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
	}	
	$shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';	
	$cart_box .= "<span>$shipping_cost  $list_tax <hr>Payable Amount : $currency ".sprintf("%01.2f", $grand_total)."</span>";	
	?>
	<tfoot>
	<tr>
	<td><br><br><br><br><br><br><a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td class="text-center view-cart-total"><strong><?php echo $cart_box; ?></strong></td>	
	<td><br><br><br><br><br><br><a href="success.php" class="btn btn-success btn-block">Place Order <i class="glyphicon glyphicon-menu-right"></i></a></td>
	</tr>
	</tfoot>	
	<?php	
} else {
	echo "Your Cart is empty";
}
?>
</tbody>
</table>
</div>

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
		                        <th>Product Name</th>
		                        <th>Quantity</th>
		                        <th class="text-center">Price</th>
		                        <th class="text-center">Sub Total</th>
		                        <th> </th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr class="highlight">
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
		                        <!-- <button type="button" class="btn btn-danger">
		                            <span class="glyphicon glyphicon-remove"></span> Remove
		                        </button> --></td>
		                    </tr>
		                    <tr class="highlight">
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
		                        <!-- <button type="button" class="btn btn-danger">
		                            <span class="glyphicon glyphicon-remove"></span> Remove
		                        </button> --></td>
		                    </tr>
		                </tbody>
		                <tfoot>
		                    <tr>
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
		                    </tr>
		                </tfoot>
		            </table>
				</div>
			</div> <!-- COL_SM_6 -->
			<div class="col-sm-6">
				<div class="check-back">
					<h2 class="text-center">Add a Card</h2>
					<p class="text-center"><a href="#"><!-- Already have an account? Log in here. --> </a></p>
					<div class="secure clearfix">
						<span class="lock pull-left">
							<i class="fa fa-lock"></i>
							Secure
						</span>
						<div class="accepted-cards pull-right">
							<img alt="Credit card types" src="images/credit_card_types.gif">
						</div>
					</div>
					<hr>
					<form class="forms">
						<div class="form-group">
						    <label class="col-sm-3"></label>
						    <div class="col-sm-9">
						    	<input type="checkbox" required="" class="" name="" id="" aria-required="true">
						    	<label for="checkbox" class="fb-checkbox-label"> Same as shipping address </label>
						    </div>
						</div> <!-- FORM_GROUP_ENDS_HERE -->
						<div class="form-group">
						    <label class="col-sm-3">Name on Card</label>
						    <div class="col-sm-9">
						    	<input type="text" class="form-control" placeholder="Your full name">
						    </div>
						</div> <!-- FORM_GROUP_ENDS_HERE -->
						<div class="form-group">
						    <label class="col-sm-3">Address</label>
						    <div class="col-sm-9">
						    	<input type="text" class="form-control" placeholder="Address">
						    </div>
						</div> <!-- FORM_GROUP_ENDS_HERE -->
						<div class="form-group">
						    <label class="col-sm-3"></label>
						    <div class="col-sm-5"><input type="text" class="form-control" placeholder="city"></div>
						    <div class="col-sm-4"><input type="text" class="form-control" placeholder="pincode"></div>
						</div> <!-- FORM_GROUP_ENDS_HERE -->
						<div class="form-group">
						    <label class="col-sm-3"></label>
						    <div class="col-sm-5">
						    	<select class="form-control">
							    	<option>Select a country</option>
							    	<option>Canada</option>
							    </select>
						    </div>
						    <div class="col-sm-4">
						    	<select class="form-control">
							    	<option>Select a state</option>
							    	<option>Canada</option>
							    </select>
						    </div>	
						</div> <!-- FORM_GROUP_ENDS_HERE -->
						<div class="form-group">
						    <label class="col-sm-3">Card Number</label>
						    <div class="col-sm-9">
						    	<input type="tel" class="form-control" placeholder="">
						    </div>
						</div> <!-- FORM_GROUP_ENDS_HERE -->
						<div class="form-group">
						    <label class="col-sm-3">Expiration & CVC</label>
						    <div class="col-sm-5">
						    	<input type="tel" class="form-control" placeholder="MM / YY">
						    </div>
						    <div class="col-sm-4">
						    	<input type="tel" class="form-control" placeholder="CVC">
						    </div>
						</div> <!-- FORM_GROUP_ENDS_HERE -->
						<div class="form-group">
						    <label class="col-sm-3"></label>
						    <div class="col-sm-9">
						    	<label style="font-weight:400;">Click the button below to add this card.</label>
						    </div>
						</div> <!-- FORM_GROUP_ENDS_HERE -->					                                              
                        <div class="form-group">
                        	<label class="col-sm-3"></label>
                        	<div class="col-sm-9">
                        		<a href="#">
                        			<button type="button" class="btn btn-cont">Continue</button>
                        		</a>
                        	</div>
                        </div> <!-- FORM_GROUP -->                                                          
					</form>
				</div>
			</div> <!-- COL_SM -->
		</div> <!-- ROW_ENDS -->
	</div>
</div>
<!-- SHOPPING CART ENDS HERE -->

<?php include('footer.php'); ?>