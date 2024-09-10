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
        <?php require APPROOT . '/views/components/manager_sidebar.php' ?>
    </section>

    <main>

        <div class="add">
            <h1 class='title'>Announcements</h1>
            <button>New Announcement</button>
        </div>
        <ul>
            <li>
                <div>
                    <div class="announcement">
                        <div class="user-img">
                            <img src="<?php echo URLROOT; ?>/public/images/image.png" alt="">
                        </div>
                        <div class="announcement-content">
                            <div class="announcement-title">Gym renovation</div>
                            <p>Admin</p>
                            <div class="announcement-date">Apr 01, 2024</div>
                        </div>
                        <div class="buttons">
                            <button>View</button>
                            <button>Edit</button>
                            <button>Delete</button>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    <div class="announcement">
                        <div class="user-img">
                            <img src="<?php echo URLROOT; ?>/public/images/image.png" alt="">
                        </div>
                        <div class="announcement-content">
                            <div class="announcement-title">Gym renovation</div>
                            <p>Admin</p>
                            <div class="announcement-date">Apr 01, 2024</div>
                        </div>
                        <div class="buttons">
                            <button>View</button>
                            <button>Edit</button>
                            <button>Delete</button>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    <div class="announcement">
                        <div class="user-img">
                            <img src="<?php echo URLROOT; ?>/public/images/image.png" alt="">
                        </div>
                        <div class="announcement-content">
                            <div class="announcement-title">Gym renovation</div>
                            <p>Admin</p>
                            <div class="announcement-date">Apr 01, 2024</div>
                        </div>
                        <div class="buttons">
                            <button>View</button>
                            <button>Edit</button>
                            <button>Delete</button>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

    </main>

</body>

</html>