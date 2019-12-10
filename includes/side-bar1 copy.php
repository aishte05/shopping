<link rel="stylesheet" href="includes/side-bar.css">
<nav>
    <!-- <a href="#">About</a>
    <a href="#">Help</a>
    <a href="#">Blog</a> -->
    <div class="cnt-account">
        <ul class="list-unstyled">

            <?php if(strlen($_SESSION['login']))
    {   ?>
            <li><a href="#"><i class="icon fa fa-user"></i>Welcome
                    <br><?php echo htmlentities($_SESSION['username']);?></a></li>
            <?php } ?>
            <br>
            <li><a href="my-account.php"><i class="icon fa fa-user"></i>My Account</a></li>
            <br>
            <li><a href="my-wishlist.php"><i class="icon fa fa-heart"></i>Wishlist</a></li>
            <br>
            <li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
            <br>
            <li><a href="#"><i class="icon fa fa-key"></i>Checkout</a></li>
            <?php if(strlen($_SESSION['login'])==0)
    {   ?>
            <br>
            <li><a href="login.php"><i class="icon fa fa-sign-in"></i>Login</a></li>
            <?php }
else{ ?>
            <br>
            <li><a href="logout.php"><i class="icon fa fa-sign-out"></i>Logout</a></li>
            <?php } ?>
        </ul>
    </div>
    <br>
    <div class="cnt-block">
                <ul class="list-unstyled list-inline">
                    <li class="dropdown dropdown-small">
                        <a href="track-orders.php" class="dropdown-toggle"><span class="key">Track Order</b></a>

                    </li>


                </ul>
            </div>
            <br>
            <a href="index.php">Return</a>
</nav>


<main>
    <a href="#" class="toggle-nav" >
        <svg style="width: 24px; height: 24px;" viewBox="0 0 24 24">
            <path fill="#000000" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg> Menu
    </a>
    
    <!-- Section yung lalagyan ko -->
    <section>



    </section>
</main>
<script>
    // side bar
    const toggleTag = document.querySelector('a.toggle-nav')
        const mainTag = document.querySelector('main')
        const navTag = document.querySelector('nav')
        
        
        
        toggleTag.addEventListener('click', function() {
            mainTag.classList.toggle('close')
            navTag.classList.toggle('open')
            
            if (mainTag.classList.contains('close')) {
                
                toggleTag.innerHTML = `<svg style="width: 24px; height: 24px;" viewBox="0 0 24 24">
            <path fill="#000000" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg> Close`
            } else {
                toggleTag.innerHTML = `<svg style="width: 24px; height: 24px;" viewBox="0 0 24 24">
            <path fill="#000000" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg> Open`
            }
        })


    </script>