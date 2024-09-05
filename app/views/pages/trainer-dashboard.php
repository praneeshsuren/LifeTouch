<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css" />
    <!-- ICONS -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title><?php echo SITENAME; ?></title>
  </head>
  <body>

    <section class="sidebar">
        <?php require APPROOT.'/views/components/trainer-sidebar.php' ?>
    </section>
    
    <main>

      <div class="title">
        <h1>Dashboard</h1>
        <div class="greeting">
          <i class="ph ph-bell notification"></i>
          <h2>Hi, John!</h2>
        </div>
      </div>
      <div class="insights">
        <div class="members">
          <i class="ph ph-users"></i>
          <div class="middle">
            <div class="left">
              <h3>Total Members</h3>
              <h1>1049</h1>
            </div>
            <div class="progress">
              <svg>
                <circle cx="38" cy="38" r="38"></circle>
              </svg>
              <div class="number">
                <p>75%</p>
              </div>
            </div>
          </div>
          <small class="text-muted">Last 30 days</small>
        </div>
        <!-- END OF MEMBERS -->

        <div class="bookings">
          <i class="ph ph-chart-bar"></i>
          <div class="middle">
            <div class="left">
              <h3>Total Bookings</h3>
              <h1>10</h1>
            </div>
            <div class="progress">
              <svg>
                <circle cx="38" cy="38" r="38"></circle>
              </svg>
              <div class="number">
                <p>75%</p>
              </div>
            </div>
          </div>
          <small class="text-muted">Last 24 Hours</small>
        </div>
          <!-- END OF BOOKINGS -->

          <div class="workouts">
            <i class="ph ph-trend-up"></i>
            <div class="middle">
              <div class="left">
                <h3>Workouts Created</h3>
                <h1>59</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle cx="38" cy="38" r="38"></circle>
                </svg>
                <div class="number">
                  <p>75%</p>
                </div>
              </div>
            </div>
            <small class="text-muted">Last 30 days</small>
          </div>
          <!-- END OF WORKOUTS -->
      </div>

      <div class="recent-announcements">
        <h2>Recent Announcements</h2>
        <div class="announcements">

          <div class="announcement">
            <div class="profile-img">
            <img src="<?php echo URLROOT; ?>/public/images/image.png" alt="">
            </div>
            <div class="message">
              <p><b>Mark Anderson</b></br>GYM Renovation Notice for all Members and Trainers</p>
              <small class="text-muted">2 hours ago</small>
            </div>
          </div>

          <div class="announcement">
            <div class="profile-img">
            <img src="<?php echo URLROOT; ?>/public/images/image.png" alt="">
            </div>
            <div class="message">
              <p><b>Mark Anderson</b></br>GYM Renovation Notice for all Members and Trainers</p>
              <small class="text-muted">2 hours ago</small>
            </div>
          </div>

          <div class="announcement">
            <div class="profile-img">
            <img src="<?php echo URLROOT; ?>/public/images/image.png" alt="">
            </div>
            <div class="message">
              <p><b>Mark Anderson</b></br>GYM Renovation Notice for all Members and Trainers</p>
              <small class="text-muted">2 hours ago</small>
            </div>
          </div>

        </div> 
      </div>
    </main>

    <script src="<?php echo URLROOT; ?>/public/js/script.js"></script>

  </body>
</html>

