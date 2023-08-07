<?php
   include_once 'lib/session.php';
   session::checkSession();
?>
<?php  require_once 'inc/header.php'; 

?>
<?php
   if(isset($_GET['pid'])){
         $pid=$_GET['pid'];
   }


?>


 <section class="container">
  <div class="main-wrapper">
  <div class="row">
   <div class="col-xl-3">
   <!-- Dynamic Sidebar -->
   <?php include_once 'inc/sidebar.php' ?>

   <!-- Dynamic Sidebar -->
   </div>
   <div class="col-xl-6">
    <div class="right-panel mb-4">
     <div class="card">
      <div class="card-header">
       <strong><i class="fa fa-comments"></i> Welcome to Chatbox</strong>
      </div>
      <div class="card-body">
       <h1 class="startup-txt display-6 text-center"><i class="fa fa-commenting"></i> Start Chatting</h1>
      </div>
     </div>
    </div>
   </div>
   <div class="item col-xl-3">
     <h3>About</h3>
     <div class="cols">
        <?php
            @include '../config.php';
            $select_products = mysqli_query($conn, "SELECT * FROM `items` WHERE id='$pid' ") or die(mysqli_error($conn));
            $fetch_products = mysqli_fetch_assoc($select_products);
            $planner_id=$fetch_products['planner_id'];
            $select_render = mysqli_query($conn, "SELECT * FROM `users` WHERE id='$planner_id' ") or die(mysqli_error($conn));
            $fetch_render = mysqli_fetch_assoc($select_render);

        ?>
        <center><img src="../uploaded_img/<?php echo $fetch_render['img']; ?>"> </center>
     </div>
     <div class="cols">
          <h5><?php echo $fetch_render['f_name']; ?> <?php echo $fetch_render['l_name']; ?></h5>
     </div>
     <div class="flex">
      <h2>Rating</h2>
      <div class="stars">
          <i class="fas fa-star" style="color:yellow"></i>    
          <i class="fas fa-star" style="color:yellow"></i>    
          <i class="fas fa-star" style="color:yellow"></i>    
          <i class="fas fa-star" style="color:yellow"></i>    
          <i class="fas fa-star" ></i>    
        </div>
      </div>
     <div class="flex">
        <h2>Response Time</h2>
        <h3>1 hr</h3>
     </div>
     <div class="flex">
        <h2>Language</h2>
        <h3>English</h3>
     </div>
     <div class="flex">
        <h2>Orders</h2>
     </div>
     
     <div class="itemss">
     <?php  
        if(isset($_GET['pid'])){
            $pid = $_GET['pid'];
            @include '../config.php';
            $select_products = mysqli_query($conn, "SELECT * FROM `items` WHERE id = '$pid'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
              echo $fetch_products['name']; 
            }
            }
        }else{
          echo '<p class="empty">no products details available!</p>';
        }
      ?>
      </div>
      
   </div>
  </div>
  </div>
 </section>

<?php  require_once 'inc/footer.php'; ?>