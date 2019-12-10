<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
			header('location:index.php');
		}else{
			$message="Product ID is invalid";
		}
	}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="robots" content="all">

    <title>Goggles Shop</title>


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">


    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/green.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">

    <link href="assets/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/rateit.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="includes/side-bar.css">

    <link rel="stylesheet" href="assets/css/config.css">
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    <!-- <link rel="stylesheet" href="css/style6.css"> -->
    <link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
    <link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
    <link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
    <link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
    <link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>


    <link rel="shortcut icon" href="assets/images/favicon.ico">

</head>

<body class="cnt-home">




    <header class="header-style-1">



        <?php include('includes/main-header.php');?>
        <?php include('includes/menu-bar.php');?>



    </header>

    <div class="body-content outer-top-xs" id="top-banner-and-menu">

        <div class="container">

            <div class="furniture-container homepage-container">

                <div id="hero" class="homepage-slider3">

                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                        <div class="full-width-slider">
                            <div class="item" style="background-image: url(assets/images/sliders/banner2.jpg);">

                            </div>

                        </div>

                        <div class="full-width-slider">
                            <div class="item full-width-slider"
                                style="background-image: url(assets/images/sliders/banner3.jpg);">
                            </div>
                        </div>

                        <div class="full-width-slider">
                            <div class="item full-width-slider"
                                style="background-image: url(assets/images/sliders/banner4.jpg);">
                            </div>
                        </div>

                        <div class="full-width-slider">
                            <div class="item full-width-slider"
                                style="background-image: url(assets/images/sliders/banner5.jpg);">
                            </div>
                        </div>

                        <div class="full-width-slider">
                            <div class="item full-width-slider"
                                style="background-image: url(assets/images/sliders/banner6.jpg);">
                            </div>
                        </div>

            
                        <div class="full-width-slider">
                            <div class="item full-width-slider"
                                style="background-image: url(assets/images/sliders/banner8.jpg);">
                            </div>
                        </div>

                        <div class="full-width-slider">
                            <div class="item full-width-slider"
                                style="background-image: url(assets/images/sliders/banner9.jpg);">
                            </div>
                        </div>
                        
                        <div class="full-width-slider">
                            <div class="item full-width-slider"
                                style="background-image: url(assets/images/sliders/banner10.jpg);">
                            </div>
                        </div>

                        <div class="full-width-slider">
                            <div class="item full-width-slider"
                                style="background-image: url(assets/images/sliders/banner11.jpg);">
                            </div>
                        </div>

                        <div class="full-width-slider">
                            <div class="item full-width-slider"
                                style="background-image: url(assets/images/sliders/banner12.jpg);">
                            </div>
                        </div>
                    </div>

                </div>
               
                
                
                <div class="row">

                    <br>

                    <div class="col-md-3">
                    <h3>RSS Feed <i class="icon fa fa-rss"></i></h3>


                    
                        
                    <div id="widgetmain" style="text-align:left;overflow-y:auto;overflow-x:hidden;width:200px;background-color:#transparent; border:1px solid #333333;"><div id="rsswidget" style="height:500px;"><iframe src="http://us1.rssfeedwidget.com/getrss.php?time=1575797602089&amp;x=https%3A%2F%2Fwww.fashioneyewear.co.uk%2Fblog%2Ffeed&amp;w=200&amp;h=500&amp;bc=333333&amp;bw=1&amp;bgc=transparent&amp;m=20&amp;it=true&amp;t=(default)&amp;tc=333333&amp;ts=15&amp;tb=transparent&amp;il=true&amp;lc=0000FF&amp;ls=14&amp;lb=false&amp;id=true&amp;dc=333333&amp;ds=14&amp;idt=true&amp;dtc=284F2D&amp;dts=12" border="0" hspace="0" vspace="0" frameborder="no" marginwidth="0" marginheight="0" style="border:0; padding:0; margin:0; width:200px; height:500px;" id="rssOutput">Reading RSS Feed ...</iframe></div><div style="text-align:right;margin-bottom:0;border-top:1px solid #333333;" id="widgetbottom"><span style="font-size:70%"><a href="http://www.rssfeedwidget.com">rss feed widget</a>&nbsp;</span><br></div></div>

                        
                    </div>
                    <br>
                    <div class = "col-md-9">
                    <div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs  wow fadeInUp">
                    <div class="more-info-tab clearfix">
                        <h3 class="new-product-title pull-left">Featured Products</h3>
                        <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                            <li class="active"><a href="#all" data-toggle="tab">All</a></li>

                        </ul>
                    </div>

                    <div class="tab-content outer-top-xs">
                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                    <?php
$ret=mysqli_query($con,"select * from products");
while ($row=mysqli_fetch_array($ret)) 
{
	


?>


                                    <div class="item item-carousel">
                                        <div class="products" style = "padding-top: 70px;">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                                            <img src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"
                                                                data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"
                                                                width="180" height="180" alt=""></a>
                                                    </div>
                                                    </div> <div class="product-info text-left">
                                                        <h3 class="name"><a
                                                                href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>

                                                        <div class="product-price">
                                                            <span class="price">
                                                                Php.<?php echo htmlentities($row['productPrice']);?>
                                                            </span>
                                                            <span
                                                                class="price-before-discount">Php.<?php echo htmlentities($row['productPriceBeforeDiscount']);?>
                                                            </span>

                                                        </div>

                                                </div>
                                                <div class="action"><a
                                                        href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"
                                                        class="lnk btn btn-primary">Add to Cart</a></div>
                                            </div>

                                        </div>
                                    </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>




                        <div class="tab-pane" id="books">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                    <?php
$ret=mysqli_query($con,"select * from products where category=3");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>


                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a
                                                            href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                                            <img src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"
                                                                data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"
                                                                width="180" height="300" alt=""></a>
                                                    </div>


                                                </div>


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                            href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            Php. <?php echo htmlentities($row['productPrice']);?>
                                                        </span>
                                                        <span
                                                            class="price-before-discount">Php.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>

                                                    </div>

                                                </div>
                                                <div class="action"><a
                                                        href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"
                                                        class="lnk btn btn-primary">Add to Cart</a></div>
                                            </div>

                                        </div>
                                    </div>
                                    <?php } ?>


                                </div>
                            </div>
                        </div>






                        <div class="tab-pane" id="furniture">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                    <?php
$ret=mysqli_query($con,"select * from products where category=5");
while ($row=mysqli_fetch_array($ret)) 
{
?>


                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a
                                                            href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                                            <img src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"
                                                                data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"
                                                                width="180" height="300" alt=""></a>
                                                    </div>


                                                </div>


                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                            href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            Php.<?php echo htmlentities($row['productPrice']);?> </span>
                                                        <span
                                                            class="price-before-discount">Php.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>

                                                    </div>

                                                </div>
                                                <div class="action"><a
                                                        href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"
                                                        class="lnk btn btn-primary">Add to Cart</a></div>
                                            </div>

                                        </div>
                                    </div>
                                    <?php } ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    </div>

                </div>

         
               



                <?php include('includes/brands-slider.php');?>
            </div>
            
        </div>



        <?php include('includes/footer.php');?>

        <script src="assets/js/jquery-1.11.1.min.js"></script>

        <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>

        <script src="assets/js/echo.min.js"></script>
        <script src="assets/js/jquery.easing-1.3.min.js"></script>
        <script src="assets/js/bootstrap-slider.min.js"></script>
        <script src="assets/js/jquery.rateit.min.js"></script>
        <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>



        <script src="switchstylesheet/switchstylesheet.js"></script>

        <script>
        $(document).ready(function() {
            $(".changecolor").switchstylesheet({
                seperator: "color"
            });
            $('.show-theme-options').click(function() {
                $(this).parent().toggleClass('open');
                return false;
            });
        });

        $(window).bind("load", function() {
            $('.show-theme-options').delay(2000).trigger('click');
        });
        </script>



</body>

</html>