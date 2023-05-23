<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Station Shop Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- templatemo 352 station shop -->
<!-- 
Station Shop Template 
http://www.templatemo.com/preview/templatemo_352_station_shop 
-->
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css" />

<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.timers-1.2.js" type="text/javascript"></script>
<script src="js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>

<script type="text/javascript">
    
    $(document).ready(function() {
        
        $(".carousel").dualSlider({
            auto:true,
            autoDelay: 6000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        
    });
    
</script>

</head>

<body>

<div id="templatemo_wrapper">
<?php include_once 'partials/header.php';?>
    

    
    <div id="templatemo_middle" class="carousel">
    	<div class="panel">
				
				<div class="details_wrapper">
					
					<div class="details">
					
						<div class="detail">
							<h2><a href="#">Station Shop</a></h2>
                            <p>Station Shop is free website template by templatemo for ecommerce websites or online stores. Sed aliquam arcu. Donec urna massa, cursus et mattis at, mattis quis lectus. </p>
							<a href="#" title="Read more" class="more">Read more</a>
						</div><!-- /detail -->
						
						<div class="detail">
							<h2><a href="#">Fusce hendrerit</a></h2>
                            <p>Duis dignissim tincidunt turpis eget pellentesque. Nulla consectetur accumsan facilisis. Suspendisse et est lectus, at consectetur sem.</p>
							<a href="#" title="Read more" class="more">Read more</a>
						</div><!-- /detail -->
						
						<div class="detail">
							<h2><a href="#">Aenean massa cum</a></h2>
                            <p>Sed vel interdum sapien. Aliquam consequat, diam sit amet iaculis ultrices, diam erat faucibus dolor, quis auctor metus libero vel mi.</p>
							<a href="#" title="Read more" class="more">Read more</a>
						</div><!-- /detail -->
						
					</div><!-- /details -->
					
				</div><!-- /details_wrapper -->
				
				<div class="paging">
					<div id="numbers"></div>
					<a href="javascript:void(0);" class="previous" title="Previous" >Previous</a>
					<a href="javascript:void(0);" class="next" title="Next">Next</a>
				</div><!-- /paging -->
				
				<a href="javascript:void(0);" class="play" title="Turn on autoplay">Play</a>
				<a href="javascript:void(0);" class="pause" title="Turn off autoplay">Pause</a>
				
			</div><!-- /panel -->
	
			<div class="backgrounds">
				
				<div class="item item_1">
					<img src="images/slider/02.jpg" alt="Slider 01" />
				</div><!-- /item -->
				
				<div class="item item_2">
					<img src="images/slider/03.jpg" alt="Slider 02" />
				</div><!-- /item -->
				
				<div class="item item_3">
					<img src="images/slider/01.jpg" alt="Slider 03" />
				</div><!-- /item -->
				
			</div><!-- /backgrounds -->
    </div> <!-- END of templatemo_middle -->
    
    <div id="templatemo_main">
    <div id="sidebar" class="float_l">
    <div class="sidebar_box"><span class="bottom"></span>
        <h3>In Stock</h3>
        <div class="content">
            <?php
            $host = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'products';
            $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT name, pocet FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="bs_box">';
                    echo '<h4><a href="#">' . $row["name"] . '</a></h4>';
                    echo '<p class="stock-count">In Stock: ' . $row["pocet"] . '</p>';
                    echo '</div>';
                }
            } else {
                echo "No products found.";
            }
            $conn->close();
            ?>
        </div>
    </div>
</div>
        <div id="content" class="float_r">
        	<h1>Products</h1>
            
            <div class="product_box">
            	<a href="produkty.php"><img src="images/product/01.jpg" alt="Image 01" class="productimg"/></a>
                <h3>Integer eleifend sed</h3>
                <p class="product_price">65€</p>
                <a href="contact.php" class="add_to_card">Add to Cart</a>
                <a href="produkty.php" class="detail">Detail</a>
            </div>        	
            <div class="product_box">
            	<a href="produkty.php"><img src="images/product/02.jpg" alt="Image 02" class="productimg"/></a>
                <h3>Nam cursus facilisis</h3>
                <p class="product_price">250€</p>
                <a href="contact.php" class="add_to_card">Add to Cart</a>
                <a href="produkty.php" class="detail">Detail</a>
            </div>        	
            <div class="product_box no_margin_right">
            	<a href="produkty.php"><img src="images/product/03.jpg" alt="Image 03" class="productimg"/></a>
                <h3>Mauris consectetur</h3>
                <p class="product_price">700€</p>
                <a href="contact.php" class="add_to_card">Add to Cart</a>
                <a href="produkty.php" class="detail">Detail</a>
            </div>        	
            <div class="product_box">
            	<a href="produkty.php"><img src="images/product/04.jpg" alt="Image 04" class="productimg"/></a>
                <h3>Proin volutpat</h3>
                <p class="product_price">25€</p>
                <a href="contact.php" class="add_to_card">Add to Cart</a>
                <a href="produkty.php" class="detail">Detail</a>
            </div>        	
            
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
    <?php include_once 'partials/footer.php';?>
    
</div> <!-- END of templatemo_wrapper -->

</body>
</html>