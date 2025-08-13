<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Dashboard || EvokeDrive</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="10">

  <!-- Boxicons link -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../dashboard/user_dashboard/style.css">
</head>
<body>
  <!-- Sidebar -->
  <section id="sidebar">
    <a href="../dashboard/user_dashboard/user_page.php" class="brand">
      <i class='bx bxl-mongodb'></i>
      <span class="text">EvokeDrive</span>
    </a>
    <ul class="side-menu top">
      <li><a href="../dashboard/user_dashboard/user_page.php"><i class='bx bxs-dashboard'></i><span class="text">Dashboard</span></a></li>
      <li class="active"><a href="test-drive.php"><i class='bx bx-car'></i><span class="text">Test Drive</span></a></li>
      <li><a href="../review-and-rating/review_and _rating.php"><i class='bx bxs-star-half'></i><span class="text">Review & Rating</span></a></li>  
    </ul>
    <ul class="side-menu">
      <li><a href="logout.php" class="logout"><i class='bx bx-log-out'></i><span class="text">Logout</span></a></li>
    </ul>
  </section>

  <!-- Content -->
  <section id="content">
    <nav>
      <i class='bx bx-menu'></i>
      <a href="#" class="nav-link">Categories</a>
      <form action="#">
        <div class="form-input">
          <input type="search" placeholder="Search...">
          <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
        </div>
      </form>
      <a href="#" class="notifaction"><i class='bx bx-bell'></i><span class="num">8</span></a>
      <a href="#" class="profile"><img src="../home-page/image/avactor.jpg"></a>
    </nav>

    <main>
      <div class="head-title">
        <div class="left">
          <h1>Test Drive</h1>
          <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li><a href="#" class="active">Test Drive</a></li>
          </ul>
        </div>
        <a href="#" class="btn-download"><i class='bx bx-cloud-download'></i><span class="text">Download PDF</span></a>
      </div>

      <div class="table-data">
        <div class="order">
          <div class="head">
            <h3>Recent Bookings</h3>
            <i class='bx bx-search'></i>
            <i class='bx bx-filter'></i>
          </div>
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Model</th>
                <th>Date</th>
                <th>Time</th>
                <th>Location</th>
                <th>Driving License No.</th>
                <th>Notes</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $conn = new mysqli("localhost", "root", "", "evokedrive");
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              $sql = "SELECT * FROM test_drive_bookings ORDER BY id DESC";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>" . htmlspecialchars($row['id']) . "</td>
                          <td>" . htmlspecialchars($row['full_name']) . "</td>
                          <td>" . htmlspecialchars($row['email']) . "</td>
                          <td>" . htmlspecialchars($row['phone']) . "</td>
                          <td>" . htmlspecialchars($row['model']) . "</td>
                          <td>" . htmlspecialchars($row['preferred_date']) . "</td>
                          <td>" . htmlspecialchars($row['preferred_time']) . "</td>
                          <td>" . htmlspecialchars($row['location']) . "</td>
                          <td>" . htmlspecialchars($row['driver_license']) . "</td>
                          <td>" . htmlspecialchars($row['notes']) . "</td>
                        </tr>";
                }
              } else {
                echo "<tr><td colspan='10'>No bookings found.</td></tr>";
              }

              $conn->close();
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </section>

  <script src="../dashboard/user_dashboard/script.js"></script>
</body>
</html>