<?php
    include_once(__DIR__ . '/partials/header.php');
    var_dump($_POST);
    // $number_x = $_POST['number_x'];
    // $number_y = $_POST['number_y'];
    // $power_number = pow($number_x, $number_y);

    $radius = $_POST['radius'];
    $circumference = null;
    $area = null;
    $volume = null;
    
    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);
    
    $area = pi() * pow($radius, 2);
    $area = round($area, 2);
    
    $volume = (4/3) * pi() * pow($radius, 3);
    $volume = round($volume, 2);

?>
<body>
    <div class="header-container">
        <header class="container header-items">
            <div class="logo-container">
                <a href="/">
                    <img 
                        src = "/content/images/mansmezslogo.png"
                        alt = "Mans mežš miskastē logo"
                        width = "200"
                    >
                </a>
            </div>
            <div class="main-menu-container">
                    <ul class="main-menu">
                        <li class="menu-item">
                            <a href="#" class="menu-item__link">
                                Home
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-item__link">
                                Map
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-item__link">
                                About us
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-item__link">
                                Contact us
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-item__link">
                                Upload
                            </a>
                        </li>
                    </ul>
            </div>
        </header>
    </div>
    <main>
        <div class="container">
            <!-- <button>Order pizza</button> -->
            <?php include(__DIR__ . '/partials/form.php'); ?>
            <pre><?php 
            if(!empty($_POST)) {

                // echo "wassup! \n";
                
                // echo "{$number_x} to the power of {$number_y} is {$power_number}";

                echo "Circumference = {$circumference}cm\n";
                echo "Area = {$area}cm\n";
                echo "Volume = {$volume}cm\n";
            }
                ?>
            </pre>
        </div>
    </main>
</body>
<?php 
    include(__DIR__ . '/partials/footer.php');
    