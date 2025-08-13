<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard || EvokeDrive</title>

  <!-- Boxicons link -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- Main css -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Sider Nav Start-->
  <section id="sidebar">
    <a href="../user_dashboard/user_page.php" class="brand">
      <i class='bx bxl-mongodb'></i>
      <span class="text">EvokeDrive</span>
    </a>
    <ul class="side-menu top">
      <li class="active">
        <a href="user_page.php">
          <i class='bx bxs-dashboard'></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="../../testdrive-booking/test-drive.php">
          <i class='bx bx-car'></i>
          <span class="text">Test Drive</span>
        </a>
      </li>
      <li>
        <a href="../../review-and-rating/review_and _rating.php">
          <i class='bx bxs-star-half'></i>
          <span class="text">Review & Rating</span>
        </a>
      </li>
    </ul>

    <ul class="side-menu">
      <li>
        <a href="../../authantication/auth.php" class="logout">
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
        <img src="../../home-page/image/avactor.jpg">
      </a>
    </nav>
    <!-- Navbar -->

    <!-- Main -->
    <main>
      <div class="head-title">
        <div class="left">
          <h1>Dashboard</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#">Dashboard</a>
            </li>
            <li>
              <i class='bx bx-chevron-right'></i>
            </li>
            <li>
              <a href="#" class="active">Home</a>
            </li>
          </ul>
        </div>
        <a href="#" class="btn-download">
          <i class='bx bx-cloud-download'></i>
          <span class="text">Download PDF</span>
        </a>
      </div>
      <ul class="box-info">
        <li>
          <i class='bx bxs-calendar-check'></i>
          <a href="../../testdrive-booking/test-drive.php">
            <span class="text">
            <?php
            $conn = new mysqli("localhost", "root", "", "evokedrive");
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

            $sql = "SELECT COUNT(*) as total_bookings FROM test_drive_bookings";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo "<h3>" . htmlspecialchars($row['total_bookings']) . "</h3>
                        <p>Total Bookings</p>";
                }
              } else {
                echo "<tr><td colspan='3'>No recent bookings found.</td></tr>";
              }
            ?>
          </span>
          </a>
          
          
        </li>
        <li>
          <i class='bx bx-car'></i>
          <a href="../../review-and-rating/review_and _rating.php">
            <span class="text">
            <?php
            $conn = new mysqli("localhost", "root", "", "evokedrive");
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

            $sql = "SELECT COUNT(*) as total_bookings FROM reviews";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo "<h3>" . htmlspecialchars($row['total_bookings']) . "</h3>
                        <p>Total Reviews & Ratings</p>";
                }
              } else {
                echo "<tr><td colspan='3'>No recent bookings found.</td></tr>";
              }
            ?>
          </a>
            
          </span>
        </li>
        <li>
          <i class='bx bx-dollar-circle'></i>
          <span class="text">
            <h3>$1020</h3>
            <p>Total Sale</p>
          </span>
        </li>
      </ul>

      <div class="table-data">
        <div class="order">
          <div class="head">
            <h3>Recent Booking</h3>
            <i class='bx bx-search'></i>
            <i class='bx bx-filter'></i>
          </div>
          <table>
            <thead>
              <tr>
                <th>User</th>
                <th>Date Order</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $conn = new mysqli("localhost", "root", "", "evokedrive");
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              $sql = "SELECT full_name, preferred_date FROM test_drive_bookings ORDER BY id DESC LIMIT 5";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>" . htmlspecialchars($row['full_name']) . "</td>
                          <td>" . htmlspecialchars($row['preferred_date']) . "</td>
                          <td><span class='status completed'>Completed</span></td>
                        </tr>";
                }
              } else {
                echo "<tr><td colspan='3'>No recent bookings found.</td></tr>";
              }
              
              ?>
            </tbody>
          </table>
        </div>

      </div>
    </main>
    <!-- Main -->
  </section>
  <!-- Content End  -->

  <script src="script.js"></script>
</body>

</html>