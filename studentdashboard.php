

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
</head>
<body>
    <h1>Welcome User</h1>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="studentdashboard.css" />
    <title>On_A.ment</title>
  </head>

  <body>
    <!-- Sidebar -->
    <div class="sidebar">
      <a href="" class="logo">
        <i class="bx bx-code-alt"></i>
        <div class="logo-name"><span>On_</span>A.ment</div>
      </a>
      <ul class="side-menu">
        <li>
          <a href="#"><i class="bx bxs-dashboard"></i>Dashboard</a>
        </li>
        <li>
          <a href="#"><i class='bx bxs-folder'></i></i>Request</a>
        </li>
        <li>
          <a href="#"><i class='bx bxs-phone'></i>Appointment</a>
        </li>
        <li>
          <a href="#"><i class="bx bx-group"></i>Registrar</a>
        </li>
      </ul>
      <ul class="side-menu">
        <li>
          <a href="index.php" class="logout">
            <i class="bx bx-log-out-circle"></i>
            Logout
          </a>
        </li>
      </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
      <!-- Dark Theme Toggle -->
      <nav>
        <i class="bx bx-menu"></i>
        <input type="checkbox" id="theme-toggle" hidden />
        <label for="theme-toggle" class="theme-toggle"></label>
      </nav>
      <!-- End of Dark Theme Toggle-->

      <main>
        <div class="header">
          <h1>Student Dashboard</h1>
        </div>

        <div class="bottom-data">
          <div class="orders">
            <div class="header">
              <i class="bx bx-receipt"></i>
              <h3>Recent Requests</h3>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Document</th>
                  <th>Request Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                </tr>

                <tr>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Appointments -->
          <div class="reminders">
            <div class="header">
              <i class="bx bx-note"></i>
              <h3>Appointments</h3>
            </div>
            <ul class="task-list">
              <li>
                <div class="task-title"></div>
              </li>
              <li>
                <div class="task-title"></div>
              </li>
              <li>
                <div class="task-title"></div>
              </li>
            </ul>
          </div>

          <!-- End of Reminders-->
        </div>
      </main>
    </div>

    <script src="studentdashboard.js"></script>
  </body>
</html>
