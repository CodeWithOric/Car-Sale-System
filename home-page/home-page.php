<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>EvokeDrive || homepage</title>

  <!-- import css file -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Font Awesome (for arrow icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

</head>


<body>

  <!-- header section starts -->
  <header class="header">

    <div id="menubar" class="fa-solid fa-bars"></div>

    <a href="#" class="logo">Evoke<span>Drive</span></a>

    <!-- navbar selection-->
    <nav class="navbar">

      <a href="#home">home</a>
      <a href="#vehical">vehical</a>
      <a href="#services">service</a>
      <a href="#featured">featured</a>
      <a href="#review">reviews</a>
      <a href="#contact">contant</a>

    </nav>
    <!-- login button -->

    <div id="login-btn">
      <a href="../authantication/auth.php">
        <button type="button" class="btn">login</button>
      </a>
      <i class="fa-solid fa-user"></i>
    </div>

  </header>
  <!-- header section end --> 



  <!--home section starts-->
  <section class="home" id="home">
    <h1 class="home-parallax" data-speed="-2">find your car</h1>
    <img class="home-parallax" data-speed="5" src="./image/car-group.jpg" alt="">
    <a class="btn home-parallax" data-speed="7" href="../testdrive-booking/testdrive.html">Book To TestDrive</a>
  </section>
  <!--home section end-->

  <!--icon section start-->
  <section>

    <div class="icon-container">
      <div class="icons">
        <i class="fa-solid fa-house"></i>
        <div class="content">
          <h3>100+</h3>
          <p>branches</p>
        </div>
      </div>

      <div class="icons">
        <i class="fa-solid fa-car"></i>
        <div class="content">
          <h3>3100+</h3>
          <p>cars sold</p>
        </div>
      </div>

      <div class="icons">
        <i class="fa-solid fa-users"></i>
        <div class="content">
          <h3>500+</h3>
          <p>happy clients</p>
        </div>
      </div>

      <div class="icons">
        <i class="fa-solid fa-car"></i>
        <div class="content">
          <h3>300+</h3>
          <p>new cars</p>
        </div>
      </div>

    </div>

  </section>
  <!--icon section end-->

  <!-- vehicales section start -->
  <section class="vehical" id="vehical">
    <h1 class="heading">Popular <span>Vehicals</span></h1>

    <section class="models-section">
      <div class="models-grid">
        <!-- Car Card -->
        <div class="model-card">
          <img src="./image/vahical1.jpg">
          <h2>MG IM5</h2>
          <p>Price: $60,990</p>
          <div class="actions">
            <a href="../testdrive-booking/testdrive.html">Test drive</a>
            <a href="../payment/payment.html">Order</a>
          </div>
        </div>

        <div class="model-card">
          <img src="./image/vahical2.jpg">
          <h2>Tesla Model 3</h2>
          <p>Price: $42,490</p>
          <div class="actions">
            <a href="../testdrive-booking/testdrive.html">Test drive</a>
            
            <a href="../payment/payment.html">Order</a>
          </div>
        </div>

        <div class="model-card">
          <img src="./image/vehical3.jpg">
          <h2>Volo EX30</h2>
          <p>Price: £31,560 </p>
          <div class="actions">
            <a href="../testdrive-booking/testdrive.html">Test drive</a>
            <a href="../payment/payment.html">Order</a>
          </div>
        </div>

        <div class="model-card">
          <img src="./image/vehical4.jpg">
          <h2>MG ZS EV</h2>
          <p>Price: $41,990 AUD</p>
          <div class="actions">
            <a href="../testdrive-booking/testdrive.html">Test drive</a>
            <a href="../payment/payment.html">Order</a>
          </div>
        </div>

        <div class="model-card">
          <img src="./image/vehical5.jpg">
          <h2>Chevrolet Equinox EV</h2>
          <p>Price: $33,600</p>
          <div class="actions">
            <a href="../testdrive-booking/testdrive.html">Test drive</a>
            <a href="../payment/payment.html">Order</a>
          </div>
        </div>

        <div class="model-card">
          <img src="./image/vehical6.jpg">
          <h2>Audi A6 Sportback e-tron</h2>
          <p>Price: $65,900</p>
          <div class="actions">
            <a href="../testdrive-booking/testdrive.html">Test drive</a>
            <a href="../payment/payment.html">Order</a>
          </div>
        </div>
      </div>
    </section>
  </section>
  <!-- vehicales section end -->

  <!-- service section start -->
  <section class="services" id="services">

    <h1 class="heading">Our <span>services</span></h1>

    <div class="box-container">

      <div class="box">
        <i class="fa-solid fa-car"></i>
        <h3>car selling</h3>
        <p>Lore ipsum dolor siit amet consectetur adipising elit. Dicta</p>
        <a href="" class="btn">Read More</a>
      </div>

      <div class="box">
        <i class="fa-solid fa-screwdriver-wrench"></i>
        <h3>Part sepair</h3>
        <p>Lore ipsum dolor siit amet consectetur adipising elit. Dicta</p>
        <a href="" class="btn">Read More</a>
      </div>

      <div class="box">
        <i class="fa-solid fa-car-burst"></i>
        <h3>car insurance</h3>
        <p>Lore ipsum dolor siit amet consectetur adipising elit. Dicta</p>
        <a href="" class="btn">Read More</a>
      </div>

      <div class="box">
        <i class="fa-solid fa-car-battery"></i>
        <h3>battery replacement</h3>
        <p>Lore ipsum dolor siit amet consectetur adipising elit. Dicta</p>
        <a href="" class="btn">Read More</a>
      </div>

      <div class="box">
        <i class="fa-solid fa-gas-pump"></i>
        <h3>oil change</h3>
        <p>Lore ipsum dolor siit amet consectetur adipising elit. Dicta</p>
        <a href="" class="btn">Read More</a>
      </div>

      <div class="box">
        <i class="fa-solid fa-headset"></i>
        <h3>24/7 support</h3>
        <p>Lore ipsum dolor siit amet consectetur adipising elit. Dicta</p>
        <a href="" class="btn">Read More</a>
      </div>
    </div>

  </section>
  <!-- service section end -->

  <!-- feature section start -->
  <section class="featured" id="featured">
    <h1 class="heading"><span>Featured</span> Car</h1>

    <section class="models-section">
      <div class="models-grid">
        <!-- Car Card -->
        <div class="model-card">
          <img src="../home-page/image/vahical1.jpg">
          <h2>MG IM5</h2>
          <p>Price: $60,990</p>
          <div class="actions">
            <a href="../testdrive-booking/testdrive.html">Test drive</a>
          </div>
        </div>

        <div class="model-card">
          <img src="../home-page/image/vahical2.jpg">
          <h2>Tesla Model 3</h2>
          <p>Price: $42,490</p>
          <div class="actions">
            <a href="../testdrive-booking/testdrive.html">Test drive</a>
          </div>
        </div>

        <div class="model-card">
          <img src="../home-page/image/vehical3.jpg">
          <h2>Volo EX30</h2>
          <p>Price: £31,560 </p>
          <div class="actions">
            <a href="../testdrive-booking/testdrive.html">Test drive</a>
          </div>
        </div>

        <div class="model-card">
          <img src="../home-page/image/vehical4.jpg">
          <h2>MG ZS EV</h2>
          <p>Price: $41,990 AUD</p>
          <div class="actions">
            <a href="../testdrive-booking/testdrive.html">Test drive</a>
          </div>
        </div>

        <div class="model-card">
          <img src="../home-page/image/vehical5.jpg">
          <h2>Chevrolet Equinox EV</h2>
          <p>Price: $33,600</p>
          <div class="actions">
            <a href="../testdrive-booking/testdrive.html">Test drive</a>
          </div>
        </div>

        <div class="model-card">
          <img src="../home-page/image/vehical6.jpg">
          <h2>Audi A6 Sportback e-tron</h2>
          <p>Price: $65,900</p>
          <div class="actions">
            <a href="../testdrive-booking/testdrive.html">Test drive</a>
          </div>
        </div>
      </div>
    </section>

  </section>
  <!-- feature section end -->

  <!-- Subscribe section start -->
  <section class="subscribe">

    <h3>Subscribe for last updates</h3>
    <p>Hello Everyone</p>

    <form action="">

      <input type="email" placeholder="enter your email">
      <input type="submit" placeholder="submit">

    </form>

  </section>
  <!-- Subscribe section end -->

  <!-- Review  section start -->
  <section class="review" id="review">
    <h1 class="heading">Client's <span>Review</span></h1>

    <!-- Testimonials  -->
    <section id="testimonials">
      <!-- heading  -->
      <div class="testimonial-heading">
        <span>Comments</span>
        <h1>Clients Says</h1>
      </div>
    </section>

    <div class="testimonials-box-container">
        <?php
        $conn = new mysqli("localhost", "root", "", "evokedrive");
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query("SELECT * FROM reviews ORDER BY created_at DESC");

        while ($row = $result->fetch_assoc()) {
          $username = htmlspecialchars($row['username']);
          $profile = trim($row['profile']); // e.g., "uploads/zoro.jpg"
          $rating = intval($row['rating']);
          $opinion = nl2br(htmlspecialchars($row['opinion']));

          // Generate stars (★ = filled, ☆ = empty)
          $stars = "";
          for ($i = 1; $i <= 5; $i++) {
            if ($i <= $rating) {
              $stars .= "<i class='bx bxs-star'></i>";
            } else {
              $stars .= "<i class='bx bx-star'></i>";
            }
          }

          echo "
        <div class='testimonial-box'>
        <div class='box-top'>
          <div class='profile'>
            <div class='profile-img'>
              <img src='../review-and-rating/$profile' alt='Profile'>
            </div>
            <div class='name-user'>
              <strong>$username</strong>
              <span>@$username</span>
            </div>
          </div>
          <div class='reviews'>
            $stars
          </div>
        </div>
        <div class='client-comment'>
          <p>$opinion</p>
        </div>
        </div>
        ";
          }

          $conn->close();
          ?>
      </div>
  </section>
  <!-- Review  section start -->

  <!-- content section start -->
  <section class="contact" id="contact">
    <h1 class="heading"><span>contact</span> us</h1>

    <div class="row">

      <iframe class="map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.153120445092!2d96.2092344!3d16.917737499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c19145a6a37dd5%3A0xf52016f4bcb6cfb2!2sDagon%20University!5e0!3m2!1sen!2smm!4v1753516790962!5m2!1sen!2smm"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

      <form action="">
        <h3>get in touch</h3>
        <input type="text" placeholder="name" class="box">
        <input type="email" placeholder="email" class="box">
        <input type="number" placeholder="number" class="box">
        <textarea placeholder="messsage" class="box" cols="30" rows="10"></textarea>
        <input type="submit" value="send messsage" class="btn">
      </form>

    </div>
  </section>
  <!-- content section end -->

  <!-- footer section start -->
  <section class="footer">
    <div class="box-container">

      <div class="box">
        <h3>our branches</h3>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Yangon</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Mandalay</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Naypyitaw</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Bago</a>
      </div>

      <div class="box">
        <h3>Categories</h3>
        <a href="#home"><i class="fas fa-arrow-right"></i>home</a>
        <a href="#vehical"><i class="fas fa-arrow-right"></i>vehical</a>
        <a href="#service"><i class="fas fa-arrow-right"></i>service</a>
        <a href="#"><i class="fas fa-arrow-right"></i>featured</a>
        <a href="#"><i class="fas fa-arrow-right"></i>review</a>
        <a href="#"><i class="fas fa-arrow-right"></i>contant</a>
      </div>

      <div class="box">
        <h3>content us</h3>
        <a href="#"><i class="fas fa-phone"></i>+95 9678627112</a>
        <a href="#"><i class="fas fa-phone"></i>+95 9881418612</a>
        <a href="#"><i class="fas fa-envelope"></i>yahto@gmail.com</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i>Yangon, Dagon University</a>
      </div>

      <div class="box">
        <h3>Social Media links</h3>
        <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>instagram</a>
        <a href="#"><i class="fab fa-telegram"></i>telegram</a>  
      </div>

    </div>

    <div class="credit">create by Ye Naing Oo | all rights reserved!</div>
  </section>
  <!-- footer section end -->


  <!-- fonr awesome link-->
  <script src="https://kit.fontawesome.com/3c6acda95a.js" crossorigin="anonymous"></script>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Your custom JS -->
  <script src="./js/script.js"></script>
</body>

</html>