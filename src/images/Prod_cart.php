<?php

    setcookie("Product_Item", "Cart", time()+2*24*60*60);


    if(isset($_COOKIE["Product_Item"])){
    echo "Auction Item is a  " . $_COOKIE["Product_Item"];
    } else{
    echo "No items for auction.";
    }

    session_start(); 
    $db_name = "salon_j";
    $connection = mysqli_connect("localhost","root","",$db_name);

    if(isset($_POST["add"])){
        if(isset($_SESSION["shopping_cart"])){
            $item_array_id = array_column($_SESSION["shopping_cart"],"product_id");
            if(!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'product_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'product_quantity' => $_POST["quantity"],
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
                echo '<script>window.location="Prod_cart.php"</script>';
            }else{
                echo '<script>alert("Product is already in  the cart")</script>';
                echo '<script>window.location="Prod_cart.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'product_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'product_quantity' => $_POST["quantity"],
            );
            $_SESSION["shopping_cart"][0] = $item_array;
        }
    }

    if(isset($_GET["action"])){
        if($_GET["action"] == "delete"){
            foreach($_SESSION["shopping_cart"] as $keys => $value){
                if($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<script>alert("Product has been removed")</script>';
                    echo '<script>window.location="Prod_cart.php"</script>';
                }
            }
        }
    }
?>



<!DOCTYPE html>
<html>
<head>
	
	<title>Product_Page</title>
     <meta charset="UTF-8">
   
    <title>Shopping Cart</title>
    
	<link href="../styles/Home.css" rel="stylesheet"  type="text/css">
	
</head>
<body>
		<header>
			<div class="wrapper">
				<div class="logo">
					<img src="logo.jpg" width="250px" style="border: solid #fff;">
				</div>
				<nav>
					<a href="../Home.html" class="navtab">HOME</a>
					<a href="../Contact Us.php" class="navtab">CONTACT</a>
					<a href="../aboutus.html" class="navtab">ABOUT US</a>
					<a href="../Careers.php" class="navtab">CAREERS</a>
					<a href="../product.html" class="navtab">PRODUCTS</a>
				</nav>
				<a href="User login page.html"><img src="user.png" width="40px" id="user"></a>
				<br>
			

			</div>
		</header>

		<div class="con1">
		<br/><br/><br/><br/><br/><br/>
			
		</div>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		
 <center><h1 style="font-family: sans-serif; color: #fff; font-weight: bold;font-size: 60px;">PRODUCTS</h1></center>
 <br/>
		<br/>
		<br/>
		<br/>
		<br/>



    <div class="container" style="width: 65%">
      
        <?php
            $query = "select * from salonproduct order by id asc";
            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-md-3" style="float: left; " >
                        <form method="post" action="Prod_cart.php?action=add&id=<?php echo $row["id"];?>">
                            <div class="product" style="float: left; margin-left: 170px;" >
                                <img src="<?php echo $row["image"];?>" width="190px" height="200px">
                                <h5  style="color: black;"><?php echo $row["description"];?></h5>
                                <h5 class="text-danger" style="color: black;"><?php echo "Rs.".$row["price"]."/=";?></h5>
                                <input type="text" name="quantity" value="0">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["description"];?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
                                <input type="submit" name="add" style="margin-top: 5px;" id="Submit" class="btn btn-success" value="Add to cart">
                            </div>
                        </form>
                    </div>
        <?php 
                }
            }
        ?>
  
        <div style="clear: both"></div>
        <h3 class="title2" style="margin-left: 470px; font-size: 40px; color: red;">Product boooking list</h3>
        <div class="table-responsive">
          
            <table class="table table-bordered" style="width: 1000px; margin-left: 200px; height: 100px;" border="2px";>
            <tr>
                <th width="50%">Product Description</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>
            <?php
                if(!empty($_SESSION["shopping_cart"])){
                    $total=0;
                    foreach($_SESSION["shopping_cart"] as $key => $value){
                    ?>
                <tr style="color: #fff; font-size: 20px; font-weight: bold;">
                        <td><?php echo $value["product_name"];?></td>
                        <td><?php echo $value["product_quantity"];?></td>
                        <td><?php echo $value["product_price"];?></td>
                        <td><?php echo number_format($value["product_quantity"]*$value["product_price"],2);?></td>
                        <td><a href="Prod_cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-danger"><mark>Remove product</mark></span></a></td>
                </tr>
                <?php
                    $total = $total + ($value["product_quantity"]*$value["product_price"]);
                    }
                ?>
                <tr style="color: #fff; font-size: 20px; font-weight: bold;">
                        <td colspan="3" align="right">Total</td>
                        <td align="right"><?php echo number_format($total,2);?></td>
                        <td><a style="color: #e0774a;" href="../Payment Checkout.php">Pay Here</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
      
       
        </div>

    </div>

</body>

</html>