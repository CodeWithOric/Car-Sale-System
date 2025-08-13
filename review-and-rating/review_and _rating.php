<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard || EvokeDrive</title>

  <!-- Boxicons link -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- Main css -->
  <link rel="stylesheet" href="../dashboard/user_dashboard/style.css">
</head>

<body>
  <!-- Sider Nav Start-->
  <section id="sidebar">
    <a href="../dashboard/user_dashboard/user_page.php" class="brand">
      <i class='bx bxl-mongodb'></i>
      <span class="text">EvokeDrive</span>
    </a>
    <ul class="side-menu top">
      <li>
        <a href="../dashboard/user_dashboard/user_page.php">
          <i class='bx bxs-dashboard'></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="../testdrive-booking/test-drive.php">
          <i class='bx bx-car'></i>
          <span class="text">Test Drive</span>
        </a>
      </li>
      <li class="active">
        <a href="../review-and-rating/review_and _rating.php">
          <i class='bx bxs-star-half'></i>
          <span class="text">Review & Rating</span>
        </a>
      </li>
    </ul>

    <ul class="side-menu">
      <li>
        <a href="../authantication/auth.php" class="logout">
          <i class='bx bx-log-out'></i>
          <span class="text">Logout</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- Sider Nav End-->

  <!-- Content Start  -->
  <section id="content">
    <!-- Nav Bar -->
    <nav>
      <i class='bx bx-menu'></i>
      <a href="#" class="nav-link">Categories</a>
      <form action="#">
        <div class="form-input">
          <input type="search" placeholder="Search...">
          <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
        </div>
      </form>
      <a href="#" class="notifaction">
        <i class='bx bx-bell'></i>
        <span class="num">8</span>
      </a>
      <a href="#" class="profile">
        <img src="../home-page/image/avactor.jpg">
      </a>
    </nav>
    <!-- Navbar -->

    <!-- Main -->
    <main>
      <div class="head-title">

        <div class="left">
          <h1>Review & Rating</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#">Dashboard</a>
            </li>
            <li>
              <i class='bx bx-chevron-right'></i>
            </li>
            <li>
              <a href="#" class="active">Review & Rating</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Testimonials  -->
      <section id="testimonials">
        <!-- heading  -->
        <div class="testimonial-heading">
          <span>Comments</span>
          <h1>Clients Says</h1>
        </div>
      </section>

      <!-- testimonials-box-container -->
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
              <img src='$profile' alt='Profile'>
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

    </main>
    <!-- Main -->
  </section>
  <!-- Content End  -->

  <script src="../dashboard/user_dashboard/script.js"></script>
</body>

</html>