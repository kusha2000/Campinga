<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_id'])){
  //header('location:login.php');
}else{
  $user_id = $_SESSION['user_id'];
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


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

<div class="slideshow-container">

<div class="mySlides fade">

  <img src="uploaded_img/s1.jpg" style="width:155rem;height:60rem">

</div>

<div class="mySlides fade">

  <img src="uploaded_img/s2.jpg" style="width:155rem;height:60rem">

</div>

<div class="mySlides fade">

  <img src="uploaded_img/s3.jpg" style="width:155rem;height:60rem">

</div>
<div class="mySlides fade">

  <img src="uploaded_img/s4.jpg" style="width:155rem;height:60rem">

</div>
<div class="mySlides fade">

  <img src="uploaded_img/s5.jpg" style="width:155rem;height:60rem">

</div>
<div class="mySlides fade">

  <img src="uploaded_img/s6.jpg" style="width:155rem;height:60rem">

</div>
<div class="mySlides fade">

  <img src="uploaded_img/s7.jpg" style="width:155rem;height:60rem">

</div>


<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
  <span class="dot" onclick="currentSlide(7)"></span> 
</div>

<div class="trend">
  <h3 style="color:var(--left_bar);text-align: center;font-size: 3.5rem;margin:3rem;">Trending Locations</h3>

  <div class="flex">
    <div class="des">
      <h3>Trincomalee Beach Camping</h3>
      <p>Experience the breathtaking beauty of Trincomalee's pristine beaches through our beach camping adventure. Immerse yourself in nature as you camp under the starlit sky, lulled by the soothing sound of waves. Explore the turquoise waters, indulge in beachside bonfires, and savor freshly prepared seafood. Our guided tours ensure a safe and unforgettable experience, allowing you to create cherished memories with loved ones. Join us for a unique coastal escape that rejuvenates mind, body, and soul.</p>
      <br><br><a href="#">-->Check Rentals</a>
    </div>
    <div class="pic">
      <img src="uploaded_img/t1.png">

    </div>
  </div>
  <br><br><br>
  <div class="flex">
    <div class="des">
      <h3>Eli Hatha Falls in Maliboda</h3>
      <p>Escape to the enchanting Eli Hatha Falls in Maliboda for an unforgettable camping experience. Nestled amidst lush forests, this tranquil oasis offers a serene ambiance. Camp near the cascading waterfall, bask in the beauty of untouched nature, and enjoy invigorating treks through picturesque trails. Fall asleep to the symphony of wildlife and wake up to the soothing sound of rushing water. Immerse yourself in nature's embrace and create cherished memories with friends and family at this hidden gem.</p>
      <br><br><a href="#">-->Check Rentals</a>
    </div>
    <div class="pic">
      <img src="uploaded_img/t2.png">

    </div>
  </div>
  <br><br><br>
  <div class="flex">
    <div class="des">
      <h3>Yala Forest Reserve Camping Cabins</h3>
      <p>Embark on an extraordinary adventure at Yala Forest Reserve, where luxury meets wilderness in cozy cabins. Immerse yourself in the untamed beauty of nature while enjoying modern comforts. Surrounded by wildlife and lush landscapes, experience thrilling safaris, birdwatching, and stargazing. Indulge in delectable local cuisine, and unwind around a campfire under the starlit sky. This unforgettable camping experience brings you closer to nature's wonders, providing a perfect balance of adventure and relaxation. Discover the wild heart of Sri Lanka at Yala Forest Reserve.</p>
      <br><br><a href="#">-->Check Rentals</a>
    </div>
    <div class="pic">
      <img src="uploaded_img/t3.png">

    </div>
  </div>
  <br><br><br>
</div>

<div class="reviews">
<h3 style="color:var(--white);text-align: center;font-size: 3.5rem;margin:3rem;">What our cutomers are saying</h3>
<div class="flex">
    <img src="images/r1.jpg">
    <img src="images/r2.jpg">
    <img src="images/r3.jpg">

</div>
</div>



<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>




</body>
</html> 
