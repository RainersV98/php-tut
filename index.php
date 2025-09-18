<?php
    include_once(__DIR__ . '/partials/header.php');
    var_dump($_POST);
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;
    $total = $quantity * $price;
?>
<body>
    <div class="header-container">
        <header class="container header-items">
            <div class="logo-container">
                <img 
                    src = "/content/images/mansmezslogo.png"
                    alt = "Mans mežš miskastē logo"
                    width = "200"
                >
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
            <button>Order pizza</button>
            <?php include(__DIR__ . '/partials/form.php'); ?>
            <pre><?php 
                    echo 'wassup!';
                    
                    echo "You have ordered {$quantity} x {$item}/s\n";
                    echo "Your total is \${$total}";
                ?>
            </pre>
        </div>
    </main>
</body>
<?php 
    include(__DIR__ . '/partials/footer.php');
    