<?php
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

        <nav class="navbar">
            
        </nav>

        <nav class="navbar">
            <span>20% DISCOUNT</span> on Campinga Shop
        </nav>
        
        <div class="navbar">
            <ul>
                <li><a href="#"><h5>VISIT CAMPINGA</h5></a></li>
                <li><a href="#"><h6>Log in</h5></a></li>
                <li><a href="cart.php"><i class="fas fa-shopping-cart"></i><span>0</span></a></li>
            </ul>
        </div>   
        
    </div>

</header>