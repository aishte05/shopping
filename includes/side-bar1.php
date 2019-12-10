<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        font-family: "Lato", sans-serif;
    }

    .sidebar1 {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: white;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidebar1 a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;

    }

    .sidebar1 a:hover {
        color: #f1f1f1;
    }

    .sidebar1 .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }



    .openbtn {
        margin-top: -10px;
        font-size: 20px;
        cursor: pointer;
        background-color: #111;
        color: white;
        padding: 5px 10px;
        border: none;
    }

    .openbtn:hover {
        background-color: #444;
    }

    #main {
        transition: margin-left .5s;
        padding: 16px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
        .sidebar1 {
            padding-top: 15px;
        }

        .sidebar1 a {
            font-size: 18px;
        }
    }
    </style>
</head>

<body>

    <div id="mySidebar1" class="sidebar1">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <div class="cnt-account">
            <ul class="list-unstyled">

                <?php if(strlen($_SESSION['login']))
    {   ?>
                <li><a href="#"><i class="icon fa fa-user"></i>Welcome
                        <br><?php echo htmlentities($_SESSION['username']);?></a></li>
                <?php } ?>
                
                <li><a href="my-account.php"><i class="icon fa fa-user"></i>My Account</a></li>
                <br><br><br><br><br>
                <li><a href="my-wishlist.php"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                <br><br><br><br><br>
                <li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                <br><br><br><br><br>
                <li><a href="#"><i class="icon fa fa-key"></i>Checkout</a></li>
                <?php if(strlen($_SESSION['login'])==0)
    {   ?>
                <br><br><br><br><br>
                <li><a href="login.php"><i class="icon fa fa-sign-in"></i>Login</a></li>
                <?php }
else{ ?>
                <br><br><br><br><br>
                <li><a href="logout.php"><i class="icon fa fa-sign-out"></i>Logout</a></li>
                <?php } ?>
            </ul>
        </div>
        <br><br><br><br><br>
        <div class="cnt-block">
            <ul class="list-unstyled list-inline">
                <li class="dropdown dropdown-small">
                    <a href="track-orders.php" class="dropdown-toggle"><span class="key">Track Order</b></a>

                </li>


            </ul>
        </div>
    </div>

    <div id="main">
        <button class="openbtn" onclick="openNav()">☰</button>

    </div>

    <script>
    function openNav() {
        document.getElementById("mySidebar1").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidebar1").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
    </script>

</body>

</html>