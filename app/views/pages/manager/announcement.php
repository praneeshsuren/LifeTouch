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
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/manager.css" />
    <!-- ICONS -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title><?php echo SITENAME; ?></title>
  </head>
  <body>

    <section class="sidebar">
        <?php require APPROOT.'/views/components/manager_sidebar.php' ?>
    </section>
    
    <main>

      <h1 class='title'>Announcements</h1>
      <form action="" method="POST">

        <label>Subject</label>
        <input type="text" name="subject" placeholder="Announcement Subject">

        <label>Write your announcement</label>
        <textarea name="announcemt" placeholder="Write your announcement here..." ></textarea>
        
        <label>Send Options</label>
        <div class="send-options">
                <label>
                    <input type="radio" name="send_option" value="now"> Send now
                </label>
                <label>
                    <input type="radio" name="send_option" value="later"> Schedule later
                </label>
            </div>

            <label for="date">Date</label>
            <input type="date" id="date" name="date">

            <label for="time">Time</label>
            <input type="time" id="time" name="time" value="12:00">

            <button type="submit" class="send-button">Send</button>

      </form>
    </main>

  </body>
</html>

