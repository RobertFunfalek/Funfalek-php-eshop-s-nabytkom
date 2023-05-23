<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Station Shop - Contact</title>
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

</head>

<body>

<div id="templatemo_wrapper">
<?php include_once 'partials/header.php';?>

<div id="templatemo_main">
        <div id="sidebar" class="float_l">
            <div class="sidebar_box">
                <span class="bottom"></span>
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
            <h1>Contact Us</h1>
            <div class="content_half float_l">
                <h4>Send us a message...</h4>
                <div id="contact_form">
                    <form method="post" name="contact" action="#">
                        <label for="author">Name:</label>
                        <input type="text" id="author" name="author" class="required input_field" />
                        <div class="cleaner h10"></div>
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" class="validate-email required input_field" />
                        <div class="cleaner h10"></div>
                        <label for="subject">Subject:</label>
                        <input type="text" name="subject" id="subject" class="input_field" />
                        <div class="cleaner h10"></div>
                        <label for="text">Message:</label>
                        <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner h10"></div>
                        <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
                        <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
                    </form>
                </div>
            </div>
            <div class="content_half float_r">
                <h4>Mailing Addresses</h4>
                <h6><strong>Location One</strong></h6>
                Trieda Andreja Hlinku 1, 949 74 Nitra-Chrenová<br /><br />
                <strong>Phone:</strong> 0376408111<br />
                <strong>Email:</strong> <a>ukf@ukf.sk</a><br />
                <div class="cleaner h20"></div>
                <h6><strong>Location Two</strong></h6>
                21112, Rastislavova 200, 951 41 Lužianky<br /><br />
                <strong>Phone:</strong> 0940288258<br />
                <strong>Email:</strong> <a>robofu7@centrum.sk</a><br />
            </div>
            <div class="cleaner h40"></div>
            <iframe width="680" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2653.7125546874368!2d18.08886607750265!3d48.30837953925328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8e7514175363%3A0x6e9c3f587d6256!2sLorem%20Ipsum%20Dolor%20Sit%20Amet%2C%20Lorem%20Ipsum%20Dolor%20Sit%20Amet%2C%20Hungary!5e0!3m2!1sen!2sus!4v1614572370440!5m2!1sen!2sus"></iframe>
        </div>
        <div class="cleaner"></div>
    </div> <!-- END of main -->
 
    
    <?php include_once 'partials/footer.php';?>
    
</div> <!-- END of templatemo_wrapper -->

</body>
</html>