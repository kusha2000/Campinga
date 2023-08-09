<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_id'])){
    //header('location:login.php');
 }else{
    $user_id = $_SESSION['user_id'];
 }

if(isset($_POST['add_to_wishlist'])){

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];

    $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

    if(mysqli_num_rows($check_wishlist_numbers) > 0){
        $message[] = 'already added to wishlist';
    }elseif(mysqli_num_rows($check_cart_numbers) > 0){
        $message[] = 'already added to cart';
    }else{
        mysqli_query($conn, "INSERT INTO `wishlist`(user_id, pid, name, price, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_image')") or die('query failed');
        $message[] = 'product added to wishlist';
    }

}

if(isset($_POST['add_to_cart'])){

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

    if(mysqli_num_rows($check_cart_numbers) > 0){
        $message[] = 'already added to cart';
    }else{

        $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

        if(mysqli_num_rows($check_wishlist_numbers) > 0){
            mysqli_query($conn, "DELETE FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
        }

        mysqli_query($conn, "INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
        $message[] = 'product added to cart';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shop</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">
   

</head>
<body>
   
<?php

@include 'header_no_top.php'; 
@include 'header_no.php'; 




  if(isset($_GET['tag'])){
    $tag = $_GET['tag'];
  }
  if(isset($_GET['pid'])){
    $pr_id = $_GET['pid'];
  }

  
?>

<section class="locations">
   <div class="flex">
        <div class="left-bar">
            <div class="sub">
                <h3>Choose a Camping Item</h3>
                <?php
                if(isset($_GET['pid'])){
                ?>
                    <a href="items.php?pid=<?php echo $pr_id;?>">All Items&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a><br>
                    <a href="items.php?tag=tent&pid=<?php echo $pr_id;?>">Tents&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a><br>
                    <a href="items.php?tag=sleeping&pid=<?php echo $pr_id;?>">Sleeping bags&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a><br>
                    <a href="items.php?tag=stove&pid=<?php echo $pr_id;?>">Camping stoves&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a><br>
                    <a href="items.php?tag=cooking&pid=<?php echo $pr_id;?>">Cooking utensils&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a><br>
                    <a href="items.php?tag=chairs&pid=<?php echo $pr_id;?>">Camping chairs&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a><br>
                    <a href="items.php?tag=headlamps&pid=<?php echo $pr_id;?>">Headlamps & flashlightsp&nbsp&nbsp&nbsp></a><br>
                    <a href="items.php?tag=backpack&pid=<?php echo $pr_id;?>">Camping backpack&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a><br>
                    <a href="items.php?tag=campire&pid=<?php echo $pr_id;?>">Portable campfire&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a><br>
                    <a href="items.php?tag=other&pid=<?php echo $pr_id;?>">Other Items&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a><br>
                <?php
                }
                ?>
                <?php
                if(!isset($_GET['pid'])){
                ?>
                    <a href="items.php">All Items&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a><br>
                    <a href="items.php?tag=tent">Tents&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a><br>
                    <a href="items.php?tag=sleeping">Sleeping bags&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a><br>
                    <a href="items.php?tag=stove">Camping stoves&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a><br>
                    <a href="items.php?tag=cooking">Cooking utensils&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a><br>
                    <a href="items.php?tag=chairs">Camping chairs&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a><br>
                    <a href="items.php?tag=headlamps">Headlamps & flashlightsp&nbsp&nbsp&nbsp></a><br>
                    <a href="items.php?tag=backpack">Camping backpack&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a><br>
                    <a href="items.php?tag=campire">Portable campfire&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a><br>
                    <a href="items.php?tag=other">Other Items&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a><br>
                <?php
                }
                ?>
                
                

            </div>
        </div>

        <div class="products">
            
        <div class="weather">
        <?php
                if(isset($_GET['pid'])){
                    $select_product_id = mysqli_query($conn, "SELECT * FROM `locations` WHERE id='$pr_id'") or die('query failed');
                    $fetch_product_id = mysqli_fetch_assoc($select_product_id);

                    $status="";
                    $msg="";
                    $city="";

                    $city=$fetch_product_id['district'];
                    //$city="kurunegala";
                    $url="http://api.openweathermap.org/data/2.5/weather?q=$city&appid=49c0bad2c7458f1c76bec9654081a661";
                    $ch=curl_init();
                    curl_setopt($ch,CURLOPT_URL,$url);
                    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                    $result=curl_exec($ch);
                    curl_close($ch);
                    $result=json_decode($result,true);
                    if($result['cod']==200){
                        $status="yes";
                    }else{
                        $msg=$result['message'];
                    }
                ?>
                <h2><?php echo $fetch_product_id['name']; ?></h2>
                    <img src="images/day.png" class="day_image">
                    <img src="images/temperature.png" class="temp_image">
                    <span class="day_text"><?php echo $result['weather'][0]['main']?> Weather</span>
                    <span class="temp_text"><?php echo round($result['main']['temp']-273.15)?>° C</span>
                    <!-- <span class="day_text"><?php echo $result['wind']['speed']?><?php echo $fetch_product_id['district'];?> Weather</span>
                    <span class="temp_text"><?php echo $msg?>° C</span> -->

                    <p>Safe to Travel</p>

                <?php
                }
                
                ?>
                <img src="uploaded_img/weadther.png">
                <h3>Home > Locations > Rentals > 
                    <?php
                        if(isset($_GET['pid'])){
                            echo $city;
                        }
                    ?>
                </h3>

                
                    
                
                

            </div>

            
            <div class="box-container">
                

                <?php
                    if(isset($tag)){
                        $select_products = mysqli_query($conn, "SELECT * FROM `items` WHERE tag='$tag'") or die('query failed');
                    }else{
                        $select_products = mysqli_query($conn, "SELECT * FROM `items`") or die(mysqli_error($conn));
                    }
                ?>

                <?php
                    
                    
                    if(mysqli_num_rows($select_products) > 0){
                        while($fetch_products = mysqli_fetch_assoc($select_products)){
                ?>
                <form action="" method="POST" class="box">
                    
                    
                    <img src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="" class="image">
                    <div class="place">Rs. <?php echo $fetch_products['price']; ?> per day</div>

                    <?php

                    if(isset($_GET['pid'])){
                ?>
                    <a href="view_page.php?pid=<?php echo $fetch_products['id']; ?>&lid=<?php echo $_GET['pid'] ?>" ><div class="name"><?php echo $fetch_products['name']; ?></div></a>
                <?php
                }
                
                    if(!isset($_GET['pid'])){
                ?>
                    <a href="view_page.php?pid=<?php echo $fetch_products['id']; ?>&lid=<?php echo $fetch_products['id']; ?>" ><div class="name"><?php echo $fetch_products['name']; ?></div></a>
                <?php
                }
                ?>
                    
                    <div class="level"><?php echo $fetch_products['small_desc']; ?></div>
                    
                    
                    <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">

                    
                
                </form>
                <?php
                    }
                }else{
                    echo '<p class="empty">no events added yet!</p>';
                }
                ?>

            </div>

        </div>
    </div>
</section>
   






<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>