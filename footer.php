<!-- FOOTER STARTS HERE -->
<div class="container-fluid footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="order-now.php">ORDERS</a></li>
                    <li><a href="product.php">PRODUCTS</a></li>
                    <li><a href="index.php">CONTACT US</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul>
                    <li><a href="order-now.php">ORDER NOW</a></li>
                    <li><a href="index.php">LOGIN</a></li> <br>
                    <li><a href="index.php">FACEBOOK</a></li>
                    <li><a href="index.php">INSTAGRAM</a></li>
                    <li><a href="index.php">INFO@COMPANY.COM</a></li>
                </ul>
            </div>
            <div class="col-sm-4 f-last">
                <input type="text" placeholder="Email Address"> <br>
                <a href="order-now.php"><button class="btn btn-order">ORDER NOW</button></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid copyright">
    <div class="container">
        <div class="row copy">
            
        </div>
    </div>
</div>
<!-- FOOTER ENDS HERE -->

<!-- JQUERY -->
<script type="text/javascript">
    $('.qtyminus').click(function() {
        qty = $(this).next('input');
        var currentVal = parseInt(qty.val());
        var newVal = (!isNaN(currentVal) && currentVal > 0) ? currentVal - 1 : 0;
        qty.val(newVal).trigger('change');
    });

    $('.qtyplus').click(function() {
        qty = $(this).prev('input');
        var currentVal = parseInt(qty.val());
        var newVal = (!isNaN(currentVal)) ? currentVal + 1 : 0;
        qty.val(newVal).trigger('change');
    });

    $('.qty').change(function() {
        var total = 0;
        $('.qty').each(function(i, qty) {
            total += isNaN(qty.value) ? 0 : parseInt(qty.value);
        });
        $('#total span').text(total);
    });
</script>
<!-- JQUERY -->

</body>
</html>