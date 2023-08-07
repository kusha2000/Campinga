<?php


@include 'config.php';

session_start();

if(!isset($_SESSION['user_id'])){
    //header('location:login.php');
 }else{
    $user_id = $_SESSION['user_id'];
 }

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE pid = '$delete_id'") or die('query failed');
    header('location:cart.php');
}

if(isset($_GET['delete_all'])){
    mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
    header('location:cart.php');
};

if(isset($_POST['update_quantity'])){
    $cart_id = $_POST['cart_id'];
    $cart_quantity = $_POST['cart_quantity'];
    mysqli_query($conn, "UPDATE `cart` SET quantity = '$cart_quantity' WHERE id = '$cart_id'") or die('query failed');
    $message[] = 'cart quantity updated!';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- css file -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header_no_top.php'; ?>
<?php @include 'header_no.php'; ?>

<section class="heading">
    <h3>Shopping Cart</h3>
    <p> <a href="home.php">Home</a> / Cart </p>
</section>

<section class="slider-card" style="margin-top:2rem">
           
            <?php
                $grand_total = 0;
                $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');

                if(mysqli_num_rows($select_cart) > 0){
                    while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                        $product_id=$fetch_cart['pid'];
                        $select_product = mysqli_query($conn, "SELECT * FROM `items` WHERE id = '$product_id' ") or die('query failed');
                        $fetch_product = mysqli_fetch_assoc($select_product);

            ?> 
            <div  class="card">
                <div class="card-content">
                    <a href="cart.php?delete=<?php echo $fetch_product['id'];?>" class="fas fa-times del-cart" onclick="return confirm('delete this from wishlist?');"></a>
                    <!-- <span class="category-value-cart"><?php echo $fetch_product['category']; ?></span> -->
                    <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="" class="card-img">
                    <h1 class="card-title"><a><?php echo $fetch_product['name']; ?></a></h1>
                    <p class="card-title2">Rs.<?php echo $sub_total = $fetch_cart['total'];?></p>
        
               </div>
                
                
            </div> 
               
    
               </div>
               </form>
               <?php
               $grand_total += $sub_total;
                   }
               }else{
                    echo '<p class="empty">your cart is empty</p>';
               
               }
           ?>

        
            
       </section>

       <div class="more-btn">
            <a href="cart.php?delete_all" style="margin-left:45%;" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled' ?>" onclick="return confirm('delete all from cart?');">delete all</a>
        </div>


       <div class="wishlist-total">
            <p>Total : <span>Rs<?php echo $grand_total; ?>/-</span></p>
            <a href="items.php" class="op-btn">Continue Shopping</a>
            <a href="before_checkout.php?" class="blue-btn <?php echo($grand_total>1)?'':'disabled' ?>" >Proceed to Checkout</a>
        </div>






<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>