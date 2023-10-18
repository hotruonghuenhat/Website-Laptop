<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Giới thiệu</title>
   <link rel="shortcut icon" href="./imgs/icon.png" type="image/x-icon">
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->
   <?php include 'components/user_header.php'; ?>
   <!-- header section ends -->

   <div class="heading">
      <h3>Về chúng tôi</h3>
      <p><a href="home.php">Trang chủ</a> <span> / Giới thiệu</span></p>
   </div>

   <!-- about section starts  -->

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="./imgs/laptop.svg" alt="">
         </div>

         <div class="content">
            <h3>Hồ sơ của chúng tôi</h3>
            <p>Giao hàng toàn quốc, quý khách hàng vui lòng thanh toán tiền trước, phí ship vui lòng thanh toán cho nhân viên bưu điện lúc nhận hàng. Miễn phí ship khu vực nội thành Đà Lạt. Chúng tôi luôn đặt sự hài lòng của quý khách hàng lên hàng đầu và cam kết cung cấp dịch vụ giao hàng chất lượng và đáng tin cậy. Nếu có bất kỳ câu hỏi hoặc yêu cầu đặc biệt nào, xin vui lòng liên hệ với chúng tôi qua số điện thoại hoặc email để được hỗ trợ tốt nhất.</p>
            <a href="./product.php" class="btn">Sản phẩm</a>
         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- steps section starts  -->

   <section class="steps">

      <h1 class="title">Các bước mua hàng</h1>

      <div class="box-container">

         <div class="box">
            <img src="imgs/step-1.png" alt="">
            <h3>Chọn sản phẩm</h3>
            <p>Nhấn vào sản phẩm muốn mua, thêm vào giỏ hàng và điền thông tin thanh toán.</p>
         </div>

         <div class="box">
            <img src="imgs/step-2.png" alt="">
            <h3>Giao hàng nhanh</h3>
            <p>Giao hàng toàn quốc trong vòng 3 ngày, quý khách vui lòng thanh toán khi nhận hàng.</p>
         </div>

         <div class="box">
            <img src="imgs/step-3.png" alt="">
            <h3>Đập hộp thôi</h3>
            <p>Chúc quý khách sử dụng sản phẩm tốt lành, đừng quên giới thiệu cho bạn bè biết.</p>
         </div>

      </div>

   </section>

   <!-- steps section ends -->

   <!-- reviews section starts  -->

   <section class="reviews">

      <h1 class="title">Đánh giá</h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">
            <div class="swiper-slide slide">
               <img src="imgs/goodboy.jpg" alt="">
               <h3>Hồ Trương Huệ Nhật</h3>
               <p>
               Nhân viên thân thiện, nhiệt tình, hổ trợ khách hàng rất tốt, chính sách ưu đãi tốt! sẽ còn quay lại!
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>

            

            <div class="swiper-slide slide">
               <img src="imgs/trapboy.jpg" alt="">
               <h3>Phan Minh Nhân</h3>
               <p>
               Dịch vụ chăm sóc khách hàng ở shop này rất tốt luôn mọi người ạ, sản phẩm lại còn ổn áp nữa chứ.
               </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="imgs/HarryPotter.jpg" alt="">
               <h3>Vũ Huy Ngữ</h3>
               <p>
               Sản phẩm tốt, ổn áp trong tầm giá như vậy, mình đã mua ở rất nhiều nơi rồi mà không nơi nào làm mình hài lòng như nơi này cả.
               </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>

            

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   <!-- reviews section ends -->




   <!-- footer section starts  -->
   <?php include 'components/footer.php'; ?>
   <!-- footer section ends -->=






   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".reviews-slider", {
         loop: true,
         grabCursor: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
            },
            700: {
               slidesPerView: 2,
            },
            1024: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>