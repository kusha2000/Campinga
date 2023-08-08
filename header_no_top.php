<?php
@include 'config.php';
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header_top">

    <div class="flex">

        <nav class="navbar" style="margin-left:2rem">
            <i class="fa-solid fa-moon" id="icon-dark"></i>
        </nav>

        <nav class="navbar">
            <span>20% DISCOUNT</span> on Campinga Shop
        </nav>
        
        <div class="navbar">
            <ul>
                <li><a href="locations.php"><h5>VISIT CAMPINGA</h5></a></li>
                <li><a href="login.php"><h6>Log in</h5></a></li>
                <li><a href="cart.php"><i class="fas fa-shopping-cart"></i><span>
                <?php
                $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                echo mysqli_num_rows($select_cart) ;
                ?>
                </span></a></li>
            </ul>
        </div>   
        
    </div>

</header>