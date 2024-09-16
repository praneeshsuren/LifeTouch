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

        <div class="top">
            <h1 class="title">Create new announcement</h1>
            <div class="bell">
                <i class="ph ph-bell"></i>
                <p>Hi, John!</p>
            </div>
        </div>
        <div class="announcement">
            <div class="ann">
                <section class="container">
                    <div class="search">
                        <input type="text" name="search" placeholder="search here">
                        <label for="search"><i class="ph ph-magnifying-glass"></i></label>
                    </div>

                    <div class="tables">
                        <div class="last-announcement">
                            <div class="heading">
                                <h2>Announcements</h2>
                                <a href="announcement" class="btn">New Announcement</a>
                            </div>
                            <table class="list">
                                <thead>
                                    <tr>
                                        <td>Person</td>
                                        <td>Title</td>
                                        <td>Date</td>
                                        <td>Actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="person">
                                                <img class="preview-image" src="<?php echo URLROOT; ?>/public/images/image.png" alt="">
                                                <div class="person-info">
                                                    <h4>John Doe</h4>
                                                    <small class="email">john@gmail.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Gym renovation</td>
                                        <td>Apr 01 2024</td>
                                        <td>
                                            <i class="ph ph-eye"></i>
                                            <i class="ph ph-pen"></i>
                                            <i class="ph ph-trash"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="person">
                                                <img class="preview-image" src="<?php echo URLROOT; ?>/public/images/image.png" alt="">
                                                <div class="person-info">
                                                    <h4>John Doe</h4>
                                                    <small class="email">john@gmail.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Gym renovation</td>
                                        <td>Apr 01 2024</td>
                                        <td>
                                            <i class="ph ph-eye"></i>
                                            <i class="ph ph-pen"></i>
                                            <i class="ph ph-trash"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="person">
                                                <img class="preview-image" src="<?php echo URLROOT; ?>/public/images/image.png" alt="">
                                                <div class="person-info">
                                                    <h4>John Doe</h4>
                                                    <small class="email">john@gmail.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Gym renovation</td>
                                        <td>Apr 01 2024</td>
                                        <td>
                                            <i class="ph ph-eye"></i>
                                            <i class="ph ph-pen"></i>
                                            <i class="ph ph-trash"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="person">
                                                <img class="preview-image" src="<?php echo URLROOT; ?>/public/images/image.png" alt="">
                                                <div class="person-info">
                                                    <h4>John Doe</h4>
                                                    <small class="email">john@gmail.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Gym renovation</td>
                                        <td>Apr 01 2024</td>
                                        <td>
                                            <i class="ph ph-eye"></i>
                                            <i class="ph ph-pen"></i>
                                            <i class="ph ph-trash"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="person">
                                                <img class="preview-image" src="<?php echo URLROOT; ?>/public/images/image.png" alt="">
                                                <div class="person-info">
                                                    <h4>John Doe</h4>
                                                    <small class="email">john@gmail.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Gym renovation</td>
                                        <td>Apr 01 2024</td>
                                        <td>
                                            <i class="ph ph-eye"></i>
                                            <i class="ph ph-pen"></i>
                                            <i class="ph ph-trash"></i>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
        </div>

    </main>

    <script src="<?php echo URLROOT; ?>/public/js/script.js"></script>
</body>

</html>