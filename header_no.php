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

<header class="header">

    <div class="flex">


        <a href="indexx.php" ><img src="images/logo.png" class="logo"></a>

        <nav class="navbar">
            <ul>
                <li><a href="#">RV RENTALS</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="items.php">SHOP</a></li>
                <li><a href="locations.php">LOCATIONS</a></li>
            </ul>
        </nav>
        <div class="navbar">
            <ul>
                <form action="" method="POST" >
                <input type="text" class="box" name="search" placeholder="Search Location">
                </form>
            </ul>
        </div>   
            

        

        

    </div>

</header>