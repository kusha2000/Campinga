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

    if(!isset($_SESSION['user_id'])){
        $message[] = 'You have to login first';
        header('location:login.php');
     }else{

        $user_id = $_SESSION['user_id'];
        $product_id = $_GET['pid'];
        $quantity=$_POST['quan'];
        $from=$_POST['from'];
        $to=$_POST['to'];
        $deliver=$_POST['check'];

        $select_price = mysqli_query($conn, "SELECT * FROM `items` WHERE id = '$product_id' ") or die('query failed');
        $fetch_price = mysqli_fetch_assoc($select_price);
        $price=$fetch_price['price'];

        $total_price = $price*$quantity;

        $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE pid = '$product_id' AND user_id = '$user_id'") or die('query failed-48');

        if(mysqli_num_rows($check_cart_numbers) > 0){
            $message[] = 'already added to cart';
        }else{

            $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE pid = '$product_id' AND user_id = '$user_id'") or die('query failed-54');

            if(mysqli_num_rows($check_wishlist_numbers) > 0){
                mysqli_query($conn, "DELETE FROM `wishlist` WHERE pid = '$product_id' AND user_id = '$user_id'") or die('query failed');
            }

            mysqli_query($conn, "INSERT INTO `cart`(user_id,pid ,quantity,from_d,to_d,deliver,total) VALUES('$user_id', '$product_id','$quantity','$from','$to','$deliver','$total_price')") or die(mysqli_error($conn));
            $message[] = 'product added to cart';
            
        }

     }

}
if(isset($_POST['buy_now'])){

    if(!isset($_SESSION['user_id'])){
        $message[] = 'You have to login first';
        header('location:login.php');
     }else{

        $user_id = $_SESSION['user_id'];
        $product_id = $_GET['pid'];
        $quantity=$_POST['quan'];
        $from=$_POST['from'];
        $to=$_POST['to'];
        $deliver=$_POST['check'];

        $select_price = mysqli_query($conn, "SELECT * FROM `items` WHERE id = '$product_id' ") or die('query failed');
        $fetch_price = mysqli_fetch_assoc($select_price);
        $price=$fetch_price['price'];

        $total_price = $price*$quantity;

        $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE pid = '$product_id' AND user_id = '$user_id'") or die('query failed-48');

        if(mysqli_num_rows($check_cart_numbers) > 0){
            $message[] = 'already added to cart';
        }else{

            $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE pid = '$product_id' AND user_id = '$user_id'") or die('query failed-54');

            if(mysqli_num_rows($check_wishlist_numbers) > 0){
                mysqli_query($conn, "DELETE FROM `wishlist` WHERE pid = '$product_id' AND user_id = '$user_id'") or die('query failed');
            }

            mysqli_query($conn, "INSERT INTO `cart`(user_id,pid ,quantity,from_d,to_d,deliver,total) VALUES('$user_id', '$product_id','$quantity','$from','$to','$deliver','$total_price')") or die(mysqli_error($conn));
            $message[] = 'product added to cart';
            header('location:before_checkout.php');
            
        }

     }

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>quick view</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   

<?php

   @include 'header_no_top.php'; 
   @include 'header_no.php'; 

 ?>

<section class="quick-view">

    

    <?php  
        if(isset($_GET['pid'])){
            $pid = $_GET['pid'];
            $select_products = mysqli_query($conn, "SELECT * FROM `items` WHERE id = '$pid'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
    ?>
    <div class="p-details">
        <div class="second-sec">
            <div class="item">
                <h1 class="name"><?php echo $fetch_products['name']; ?></h1>
                <div class="second-line" >
                    <div class="stars">
                        <i class="fas fa-star" style="color:yellow"></i>    
                        <i class="fas fa-star" style="color:yellow"></i>    
                        <i class="fas fa-star" style="color:yellow"></i>    
                        <i class="fas fa-star" style="color:yellow"></i>    
                        <i class="fas fa-star" ></i>    
                    </div>
                    <div class="reviews">
                        <span>81 reviews</span>
                    </div>
                    <?php
                        $event_planner_id=$fetch_products['planner_id'];
                        $select_event_planners = mysqli_query($conn, "SELECT * FROM `users` WHERE id='$event_planner_id'") or die('query failed');
                        $fetch_planner = mysqli_fetch_assoc($select_event_planners);
                    ?>
                    <div class="planner">
                        <img src="uploaded_img/<?php echo $fetch_planner['img'] ?>" alt="" class="e-image">
                        <div class="e-name"><?php echo $fetch_planner['name']; ?></div>
                    </div>
                    <div class="wishlist">
                        <a href="view_page.php?pid=<?=$pid?>&wish=1"><i class="fas fa-heart" ></i></a>
                    </div>
                    
                </div>
                <div class="pics">
                    <div class="pic1">

                        <div class="showing1">
                        <button class="button1" onclick="document.querySelector('.quick-view .p-details .second-sec .item  .pics .pic1 .showing1').style.display = 'none';
  document.querySelector('.quick-view .p-details .second-sec .item  .pics .pic1 .showing2').style.display = 'block';">Location <i class="fa-sharp fa-solid fa-location-dot" style="color: #ff0000;"></i></button>
                        <img src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="" class="image">
                        </div>
                        <div class="showing2">
                        <button class="button2" onclick="document.querySelector('.quick-view .p-details .second-sec .item  .pics .pic1 .showing1').style.display = 'block';
  document.querySelector('.quick-view .p-details .second-sec .item  .pics .pic1 .showing2').style.display = 'none';">Back <i class="fa-solid fa-rotate-left" style="color: #ffffff;"></i></i></button>

                            <?php 

                                if(isset($_GET['lid'])){
                                    $lid = $_GET['lid'];
                                }
                            $select_location = mysqli_query($conn, "SELECT * FROM `locations` WHERE id = '$lid'") or die('query failed');
                            $fetch_location = mysqli_fetch_assoc($select_location);
                            $address = $fetch_location["district"];
                            $address = str_replace(" ", "+", $address);
                            ?>

                            <iframe class="image" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>

                            
                        
                        <!-- <img src="uploaded_img/location1.png" alt="" class="image"> -->
                        </div>

                        
                        
                        <div class="small_desc"><?php echo $fetch_products['small_desc']; ?></div>
                    </div>
                    
                </div>
            </div>

            <div class="packs">
                    
                    
                    <form action="" method="POST">
                        
                        <div class="flex">
                            <span>From</span>
                            <span>To</span>
                        </div>
                        <div class="flex">
                            <input type="date" name="from" class="in">
                            <input type="date" name="to" class="in">
                        </div>
                        <div class="normal">
                            <span>No of Pieces<span><br>
                            <select name="quan" id>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="normal">
                            <span>Do we have to deliver to location?<span><br>
                            <div class="flex">
                                <div class="box">
                                    <input type="radio" id="yes" name="check" value="Yes">
                                    <label>Yes</label>
                                </div>
                                <div class="box">
                                    <input type="radio" id="no" name="check" value="No" CHECKED>
                                    <label>No</label>
                                </div>
                            </div>
                            
                        </div>
                        <div class="normal">
                            <p>Total Price<p>
                            <div class="price">Rs <?php echo $fetch_products['price']; ?></div>
                        </div>
                       
                        
                        
                        
                        
                        
                        
                        <input type="submit" value="add to cart" name="add_to_cart" class="btn cart-button">
                        
                        <input type="submit" value="BUY NOW" name="buy_now" class="btn buy-button">
                        <a href="real_chat/index.php?pid=<?php echo $pid?>" class="btn contact-button">contact the Render</a>
                        <!-- <input type="submit" value="contact the Render" name="add_to_cart" class="btn contact-button"> -->
                    </form>
                    <?php
                        }
                    }else{
                        echo '<p class="empty">no products details available!</p>';
                    }
                }
                    ?>
            </div>
        
    
         </div>


        <div class="third-sec">
            <div class="about">
                <span>Product Description</span>
                <div class="des">
                <?php
                    $select_product_details = mysqli_query($conn, "SELECT * FROM `items` WHERE id='$pid' ") or die('query failed');
                    $fetch_product_details = mysqli_fetch_assoc($select_product_details);
                    echo $fetch_product_details['description'];
                ?>
                    
                </div>
            </div>
            
            <div class="qw">
            </div>
        </div>
    </div>

    
    
    
<section class="locations" style="margin-left:10rem">
   <div class="flex">
        

        <div class="products">
            

            <div class="eve_name" style="border-bottom:0.3rem solid #666;margin-bottom:2rem">
                <h3 style="color:var(--black)">
                    Related Items
                </h3>
            </div>
            
            <div class="box-container">
                

                <?php
                    $select_related = mysqli_query($conn, "SELECT * FROM `items` WHERE id='$pid' ") or die('query failed');
                    $fetch_related = mysqli_fetch_assoc($select_related);
                    $tag=$fetch_related['tag'];
                    $select_products = mysqli_query($conn, "SELECT * FROM `items` WHERE tag='$tag'") or die('query failed');
                ?>

                <?php
                    
                    
                    if(mysqli_num_rows($select_products) > 0){
                        while($fetch_products = mysqli_fetch_assoc($select_products)){
                ?>
                <form action="" method="POST" class="box">
                    
                    
                    <img src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="" class="image">
                    <div class="place">Rs. <?php echo $fetch_products['price']; ?> per day</div>
                    
                    <a href="view_page.php?pid=<?php echo $fetch_products['id']; ?>" ><div class="name"><?php echo $fetch_products['name']; ?></div></a>
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

   
    
    
  

    <div class="more-btn">
        <a href="indexx.php" class="option-btn">go to home page</a>
    </div>

</section>



<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>