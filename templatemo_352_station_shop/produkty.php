<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Station Shop - Products Page</title>
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

<?php



$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'products';


$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// pridat produkt
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_product"])) {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $pocet = $_POST["pocet"];
    $id = $_POST["id"]; // dostanem hodnoty

    // tu sa to pridava
    $sql = "INSERT INTO products (name, price, pocet, id) VALUES ('$name', '$price', '$pocet', '$id')";
    if ($conn->query($sql) === TRUE) {
        echo "New product added successfully.";
    } else {
        echo "Error adding product: " . $conn->error;
    }
}

// update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_product"])) {
    $id = $_POST["update_product"];
    $price = $_POST["price"][$id];
    $pocet = $_POST["pocet"][$id];

    // tu je update
    $sql = "UPDATE products SET price = '$price', pocet = '$pocet' WHERE id = '$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Product updated successfully.";
    } else {
        echo "Error updating product: " . $conn->error;
    }
}

// delete
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_product"])) {
    $id = $_POST["delete_product"];

    // funkcia pre delete
    $sql = "DELETE FROM products WHERE id = '$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Product deleted successfully.";
    } else {
        echo "Error deleting product: " . $conn->error;
    }
}

// Read alebo display
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<form action='' method='post'>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Price (€)</th>";
    echo "<th>Pocet</th>";
    echo "<th>ID</th>";
    echo "<th>Action</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td><input type='number' name='price[" . $row["id"] . "]' value='" . $row["price"] . "'></td>";
        echo "<td><input type='number' name='pocet[" . $row["id"] . "]' value='" . $row["pocet"] . "'></td>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>";
        echo "<button type='submit' name='update_product' value='" . $row["id"] . "'>Update</button>";
        echo "<button type='submit' name='delete_product' value='" . $row["id"] . "'>Delete</button>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</form>";
} else {
    echo "No products found.";
}

// tabulka pre pridanie produktu
echo "<div class='form-container'>";
echo "<form action='' method='post'>";
echo "<label for='name'>Name:</label>";
echo "<input type='text' name='name' required><br>";
echo "<label for='price'>Price:</label>";
echo "<input type='number' name='price' required><br>";
echo "<label for='pocet'>Pocet:</label>";
echo "<input type='number' name='pocet' required><br>";
echo "<label for='id'>ID:</label>";
echo "<input type='number' name='id' required><br>";
echo "<input type='submit' name='add_product' value='Add Product'>";
echo "</form>";
echo "</div>";

// zatvorit databazu
$conn->close();
?>

    
<?php include_once 'partials/footer.php';?>
    
</div> <!-- END of templatemo_wrapper -->

</body>
</html>