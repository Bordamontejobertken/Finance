<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/edd0240440.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="finance.js"></script>
    <title>Finance Dashboard</title>
</head>

<body>
<div id="sidebar">
    <h2>Financial Dashboard</h2>
    <ul>
      <li><a href="adminHome.php"><i class="fas fa-home"></i> Home</a></li>
      <li><a href="adminAnalytics.php"><i class="fas fa-chart-line"></i> Analytics</a></li>
      <li><a href="adminUser.php"><i class="fas fa-user-cog"></i> Customer Management</a></li>
      <li><a href="adminAM.php"><i class="fas fa-user-circle"></i> Account Management</a>
      <li><a href="signup.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a></li> 
    </ul>
  </div>
  <div id="content">
  <button id="menu-btn" onclick="toggleSidebar()"><i class="fas fa-bars"></i></button>

<div id="content">
    <h1>Admin Dashboard - Home</h1>
    <p>Welcome to the Admin Dashboard Home section. Here, you can access key information about your website, including the number of pages, posts, and comments. You'll also find notifications about site health and other important updates.</p>
    <p>Feel free to explore the various tools and options available in the sidebar to manage and customize your website.</p>
    <p>For more details, <a href="adminAnalytics.php">click here</a> to view the Analytics section.</p>

    <h2>Important Statistics</h2>
    <ul>
      <li>Total Pages: 50</li>
      <li>Total Posts: 200</li>
      <li>Total Comments: 1000</li>
    </ul>
    <h2>Recent Notifications</h2>
    <p>1. Site maintenance scheduled for next week.</p>
    <p>2. New user registration: John Doe</p>
    <p>3. High traffic alert: Consider scaling servers</p>
    <p>For more details, <a href="adminAnalytics.php">click here</a> to view the Analytics section.</p>
    

</div>
</div>
<footer>
      <p>&copy; 2024 Financial Department | All rights reserved</p>
</footer>
</body>

</html>