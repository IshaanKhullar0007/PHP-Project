<!--Navigation bar start-->
<nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color: rgba(255, 165, 0, 0.9);">
    <div class="container">
        <a href="index.php" class="navbar-brand text-dark" style="font-family: 'Delius Swash Caps'">Fancy Garments</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle text-dark" id="navbar-drop" data-toggle="dropdown">
                        Products
                    </a>
                    <div class="dropdown-menu">
                        <a href="products.php#watch" class="dropdown-item text-dark">Watches</a>
                        <a href="products.php#shirt" class="dropdown-item text-dark">T-Shirts</a>
                        <a href="products.php#shoes" class="dropdown-item text-dark">Shoes</a>
                        <a href="products.php#headphones" class="dropdown-item text-dark">Headphones/Speakers</a>
                    </div>
                </li>
                <li class="nav-item"><a href="index.php" class="nav-link text-dark">Offers</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link text-dark">About Us</a></li>
                <?php if (isset($_SESSION['email'])) { ?>
                <li class="nav-item"><a href="cart.php" class="nav-link text-dark">Cart</a></li>
                <?php } ?>
            </ul>
            <?php if (isset($_SESSION['email'])) { ?>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a href="logout_script.php" class="nav-link text-dark"><i class="fa fa-sign-out"></i> Logout</a></li>
                <li class="nav-item"><a class="nav-link text-dark" data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="<?php echo $_SESSION['email'] ?>"><i class="fa fa-user-circle "></i></a></li>
            </ul>
            <?php } else { ?>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a href="#signup" class="nav-link text-dark" data-toggle="modal"><i class="fa fa-user"></i> Sign In</a></li>
                <li class="nav-item"><a href="#login" class="nav-link text-dark" data-toggle="modal"><i class="fa fa-sign-in"></i> Login</a></li>
            </ul>
            <?php } ?>
        </div>
    </div>
</nav>
<!--Navigation bar end-->
