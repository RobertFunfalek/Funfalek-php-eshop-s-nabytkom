<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<div id="templatemo_header">
    	
    	<div id="site_title">
        	<h1><a href="index.php">funniture</a></h1>
        </div>
        
        <div id="header_right">
	    <button id="loginBtn">Login</button>

<div id="popup" class="popup" style="display: none;">
    <div class="popup-content">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
        <button id="closeBtn">Close</button>
    </div>
</div>

<script>
    const loginBtn = document.getElementById("loginBtn");
const popup = document.getElementById("popup");
const closeBtn = document.getElementById("closeBtn");


loginBtn.addEventListener("click", function() {
    
    popup.style.display = "flex";
});


closeBtn.addEventListener("click", function() {
    
    popup.style.display = "none";
});
</script>     
		</div>
        
        <div class="cleaner"></div>
    </div>
    <div id="templatemo_menu">
    	<div id="top_nav" class="ddsmoothmenu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="produkty.php">Products</a></li>
            <li><a href="about.php" >About</a></li>
            <li><a href="faqs.php">FAQs</a></li>

            <li><a href="contact.php">Contact</a></li>
        </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
    
    </div>