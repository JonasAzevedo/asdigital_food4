<?php 
session_start();
include_once("inc/db_connect.php");
include("inc/config.inc.php"); 
?>

<div class="container"> 
    <h2>Sample</h2>
        <div class="col-md-8 text-right header-box">
            <a href="view_cart.php" class="cart-counter" id="cart-info" title="View Cart">            
                <span class="cart-item" id="cart-container"></span>
            </a>
        </div>
        <div class="col-md-8 text-center">          
            <ul class="products-container">
            <?php           
            $sql_query = "SELECT product_name, product_desc, product_code, product_image, product_price FROM shop_products";    
            $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
            while( $row = mysqli_fetch_assoc($resultset) ) {
            ?>
            <li>
                <form class="product-form">
                    <h4><?php echo $row["product_name"]; ?>Pad Thai</h4>
                    <div><img class="product_image" src="images/padthai.jpg"></div>
                    <div>Price : <?php echo $currency; echo $row["product_price"]; ?> $10</div>
                    <div class="product-box">
                        <div>
                            Color :
                            <select name="product_color">
                            <option value="Black">Black</option>
                            <option value="Gold">Gold</option>
                            <option value="White">White</option>
                            </select>
                        </div>  
                        <div>
                            Qty :
                            <select name="product_qty">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select>
                        </div>                  
                        <input name="product_code" type="" value="<?php echo $row["product_code"]; ?>">
                        <button type="submit">Add to Cart</button>
                    </div>
                </form>
            </li>
            <?php } ?>
            </ul>
        </div> <!-- PRODUCT_MD -->  
</div>



<div class="row orders-section text-center">
    <!-- <div class="col-sm-3">
        <img src="images/padthai.jpg" class="img-responsive" style="border:1px solid #ccc;">
        <div class="order-box">
            <h3>Pad Thai</h3>
            <div class="place-box">
                <p>$ 10</p>                            
                <div class="input-group">
                    <input type='button' value='-' class='qtyminus' />
                    <input type='text' name='quantity[]' value='0' class='qty' />
                    <input type='button' value='+' class='qtyplus' />
                </div>
            </div>                   
        </div>
    </div> -->
    <!-- <div class="col-sm-3">
        <img src="images/mexican.jpg" class="img-responsive" style="border:1px solid #ccc;">
        <div class="order-box">
            <h3>Mexican</h3>
            <div class="place-box">
                <p>$ 10</p>                            
                <div class="input-group">
                    <input type='button' value='-' class='qtyminus' />
                    <input type='text' name='quantity[]' value='0' class='qty' />
                    <input type='button' value='+' class='qtyplus' />
                </div>
            </div>                   
        </div>
    </div> -->
    <!-- <div class="col-sm-3">
        <img src="images/soba.jpg" class="img-responsive" style="border:1px solid #ccc;">
        <div class="order-box">
            <h3>Soba</h3>
            <div class="place-box">
                <p>$ 10</p>                            
                <div class="input-group">
                    <input type='button' value='-' class='qtyminus' />
                    <input type='text' name='quantity[]' value='0' class='qty' />
                    <input type='button' value='+' class='qtyplus' />
                </div>
            </div>                   
        </div>
    </div> -->
    <!-- <div class="col-sm-3">
        <img src="images/carrot.jpg" class="img-responsive" style="border:1px solid #ccc;">
        <div class="order-box">
            <h3>Caarrot Hummus</h3>
            <div class="place-box">
                <p>$ 10</p>                            
                <div class="input-group">                                                              
                    <input type='button' value='-' class='qtyminus' />                                                               
                    <input type='text' name='quantity[]' value='0' class='qty' />
                    <input type='button' value='+' class='qtyplus' />                               
                </div>
            </div>                   
        </div>
    </div> --> <!-- COL-SM-ENDS -->                
</div><!--  ORDERS-SECTION-ROW-ENDS -->
<div class="row text-center place-btn">
    <div class="col-sm-8 col-sm-offset-2">
        <p>Select the meals you would like to order and then click below. Minimum order of 4 meals. </p>
        <form method="post" action="cart.php" >
        	<button type="submit" class="btn-order">ORDER NOW</button>
        </form>
    </div>
</div>