<div class="sidebar-wrapper mb-4">
      <div class="card">
       <div class="card-header">
       <div class="message-to d-flex">
          <?php 
             $sql = "SELECT *FROM users WHERE unique_id='$id'";
             $res = $db->select($sql);
             if($res){
             foreach($res as $user){ ?>
             <img src="../uploaded_img/<?php echo $user['img']; ?>"> 
             <i class="fa fa-circle"></i>
             <h6><?php echo $user['username']; ?></h6>
             <p>
                <?php
                 if($user['status'] == "Active"){
                     echo "Active Now";
                 }else{
                     echo "Offline";
                 } 
                ?> 
             </p>
          <?php } } ?>
       </div>
       <!-- <a href="?action=logout"><i class="fa fa-sign-out"></i> Logout</a> -->
       <div class="dropdown">
        <button class="btn dropdown-toggle" data-bs-toggle="dropdown">
         <i class="fa fa-ellipsis-v"></i>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
            <li><a class="dropdown-item" href="#">Change Password</a></li>
            <li><a class="dropdown-item" href="?action=logout"><i class="fa fa-sign-out"></i> Log Out</a></li>
        </ul>
        </div>

       </div>
       <div class="card-body">
       <div class="user-list-box">
            <ul>
              <?php 
              
              if(isset($_GET['pid'])){
                $pid=$_GET['pid'];
              }


                @include '../config.php';
                $select_products = mysqli_query($conn, "SELECT * FROM `items` WHERE id='$pid' ") or die(mysqli_error($conn));
                $fetch_products = mysqli_fetch_assoc($select_products);
                $planner_id=$fetch_products['planner_id'];
             
               $query  = "SELECT * FROM users WHERE unique_id != '$id' AND id='$planner_id'";
               $result = $db->select($query);
               if($result){
               foreach($result as $list){ ?>
                <li>
                    <a href="chat.php?sender=<?php echo $id; ?>&receiver=<?php echo $list['unique_id']; ?>&pid=<?php echo $pid ?>&plid=<?php echo $planner_id ?>" class="d-flex align-items-center">
                        <img src="../uploaded_img/<?php echo $list['img']; ?>">
                        <?php 
                         if($list['status'] == "Active"){
                            echo "<i class='fa fa-circle'></i>";
                         }else{
                             echo "<i class='fa fa-circle offline'></i>";
                         }
                        ?>
                        <h6><?php echo $list['username']; ?></h6>
                    </a>
                </li>
                <?php } } ?>   
            </ul>   
        </div>
       </div>
      </div>
    </div>