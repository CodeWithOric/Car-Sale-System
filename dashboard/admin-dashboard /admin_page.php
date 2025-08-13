<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AdminPro Dashboard</title>

  <!-- Font Awesome -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    rel="stylesheet"
    crossorigin="anonymous"
  />

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Main CSS -->
  <link rel="stylesheet" href="Style.css" />
</head>
<body>
  <div class="layout">
    <aside class="sidebar">
      <div class="logo">AdminPro</div>
      <nav class="menu">
        <a href="index.html" class="active"><i class="fas fa-home"></i> Dashboard</a>
        <a href="Manage-Cars.html"><i class="fas fa-car"></i> Manage Cars</a>
        <a href="order.html"><i class="fas fa-clipboard-list"></i> Orders</a>
        <a href="User.html"><i class="fas fa-users-cog"></i> Users</a>
        <a href="review.html"><i class="fas fa-chart-line"></i> Review Ratings</a>
         <a href="report.html"><i class="fa-solid fa-file-lines"></i></i> Reports</a>
        <a href="messages.html"><i class="fas fa-envelope"></i> Messages</a>
        <a href="settings.html"><i class="fas fa-cog"></i> Settings</a>
        <a href="#" class="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </nav>
    </aside>

    <main class="main">
      <div class="topnav">
        <div class="left"><h1>Dashboard</h1></div>
        <div class="right">
          <input type="text" placeholder="Search..." />
          <a href="#" class="noti-bell" title="Notifications">
            🔔<span class="badge">3</span>
          </a>
          <a href="profile.html" class="profile-link">👤 Profile</a>
          <button id="theme-toggle" title="Toggle Theme">🌙</button>
        </div>
      </div>

      <section class="cards">
        <div class="card">
          <i class="fas fa-dollar-sign"></i>
          <div><h3>Total Revenue</h3><p>$45,000</p></div>
        </div>
        <div class="card">
          <i class="fas fa-coins"></i>
          <div><h3>Net Profit</h3><p>$13,200</p></div>
        </div>
        <div class="card">
          <i class="fas fa-clock"></i>
          <div><h3>Time Sold</h3><p>1,100 hrs</p></div>
        </div>
        <div class="card">
          <i class="fas fa-chart-line"></i>
          <div><h3>Growth</h3><p>+15% this month</p></div>
        </div>
      </section>

      <section class="charts">
        <div class="chart-box">
          <h3>Sales Over Time</h3>
          <canvas id="salesChart"></canvas>
        </div>
        <div class="chart-box">
          <h3>Orders Distribution</h3>
          <canvas id="ordersChart"></canvas>
        </div>
      </section>

      <section class="extras">
        <div class="extra-box">
          <h3>🔥 Top Selling Products</h3>
          <ul class="product-list">
            <li><strong>Sport Car X7</strong> – 112 orders</li>
            <li><strong>Luxury SUV</strong> – 95 orders</li>
            <li><strong>Electric E-Pro</strong> – 78 orders</li>
          </ul>
        </div>

        <div class="extra-box">
          <h3>💰 Earnings</h3>
          <ul class="earning-list">
            <li><strong>Today:</strong> $1,250</li>
            <li><strong>This Week:</strong> $7,890</li>
            <li><strong>This Month:</strong> $32,300</li>
          </ul>
        </div>
      </section>
    </main>
  </div>

  <script>
    const toggleBtn = document.getElementById("theme-toggle");

    if (localStorage.getItem("theme") === "dark") {
      document.body.classList.add("dark-mode");
      toggleBtn.textContent = "☀️";
    } else {
      toggleBtn.textContent = "🌙";
    }

    toggleBtn.addEventListener("click", () => {
      document.body.classList.toggle("dark-mode");
      const isDark = document.body.classList.contains("dark-mode");
      toggleBtn.textContent = isDark ? "☀️" : "🌙";
      localStorage.setItem("theme", isDark ? "dark" : "light");
    });

    const getTextColor = () =>
      document.body.classList.contains("dark-mode") ? "#eee" : "#222";

    new Chart(document.getElementById("salesChart"), {
      type: "line",
      data: {
        labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
        datasets: [
          {
            label: "Sales ($)",
            data: [120, 190, 300, 150, 220, 90, 300],
            borderColor: "#4a90e2",
            backgroundColor: "rgba(74, 144, 226, 0.2)",
            tension: 0.3,
            fill: true,
          },
        ],
      },
      options: {
        plugins: { legend: { labels: { color: getTextColor() } } },
        scales: {
          x: { ticks: { color: getTextColor() } },
          y: { ticks: { color: getTextColor() }, beginAtZero: true },
        },
      },
    });

    new Chart(document.getElementById("ordersChart"), {
      type: "bar",
      data: {
        labels: ["Cars", "Parts", "Services"],
        datasets: [
          {
            label: "Orders",
            data: [65, 59, 80],
            backgroundColor: ["#4a90e2", "#67b168", "#f5a623"],
          },
        ],
      },
      options: {
        plugins: { legend: { labels: { color: getTextColor() } } },
        scales: {
          x: { ticks: { color: getTextColor() } },
          y: { ticks: { color: getTextColor() }, beginAtZero: true },
        },
      },
    });

    const badge = document.querySelector(".noti-bell .badge");
    badge.textContent = "5"; // example update
  </script>
</body>
</html>
