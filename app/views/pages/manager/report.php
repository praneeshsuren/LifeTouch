<?php
$reportTypes = ['Type 01', 'Type 02', 'Type 03', 'Type 04'];
$dataRange = ['Range 01', 'Range 02', 'Range 03', 'Range 04'];
?>
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
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css" />
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/manager.css" />
    <!-- ICONS -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title><?php echo SITENAME; ?></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

    <section class="sidebar">
        <?php require APPROOT . '/views/components/manager_sidebar.php' ?>
    </section>

    <main>

        <div class="top">
            <h1 class="title">Reports</h1>
            <div class="bell">
                <i class="ph ph-bell"></i>
                <p>Hi, John!</p>
            </div>
        </div>

        <?php
        $reportTypes = ['Type 01', 'Type 02', 'Type 03', 'Type 04'];
        $dataRange = ['Range 01', 'Range 02', 'Range 03', 'Range 04'];

        ?>

        <div class="dropdown-container">
            <div class="heading">
                <h2>View Report</h2>
                <a href="report_main" class="btn">New Report</a>
            </div>

            <div class="row">
                <label for="type-list">Report Types</label><br>
                <select name="type" id="type-list" class="input-boxes">
                    <option value disabled selected>Select a report type</option>
                    <?php foreach ($reportTypes as $type): ?>
                        <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="row">
                <label for="type-list">Data Range</label><br>
                <select name="type" id="type-list" class="input-boxes">
                    <option value disabled selected>Select a data range</option>
                    <?php foreach ($dataRange as $type): ?>
                        <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="heading">
                <h3>Revenue by membership type</h3>
            </div>
            <!--chart-->
            <div class="chart">
                <ul class="numbers">
                    <li><span>100%</span></li>
                    <li><span>50%</span></li>
                    <li><span>0%</span></li>
                </ul>
                <ul class="bars">
                    <li>
                        <div class="bar" data-percentage="60"><span>Monthly</span></div>
                    </li>
                    <li>
                        <div class="bar" data-percentage="80"><span>Drop-In</span></div>
                    </li>
                    <li>
                        <div class="bar" data-percentage="30"><span>Annual</span></div>
                    </li>
                </ul>
            </div>

            <div class="heading1">
                <h3>Members age category</h3>
            </div>
            <!--chart-->
            <div class="chart">
                <ul class="numbers">
                    <li><span>100%</span></li>
                    <li><span>50%</span></li>
                    <li><span>0%</span></li>
                </ul>
                <ul class="bars">
                    <li>
                        <div class="bar" data-percentage="20"><span>Adult</span></div>
                    </li>
                    <li>
                        <div class="bar" data-percentage="60"><span>Kids</span></div>
                    </li>
                    <li>
                        <div class="bar" data-percentage="80"><span>Elder</span></div>
                    </li>
                </ul>
            </div>
        </div>



    </main>
    <script type="text/javascript">
        $(function() {
            $('.bars li .bar').each(function() {
                var percentage = $(this).data('percentage');
                $(this).animate({
                    height: percentage + '%'
                }, 1000);
            });
        });
    </script>
    <script src="<?php echo URLROOT; ?>/public/js/script.js"></script>
</body>

</html>