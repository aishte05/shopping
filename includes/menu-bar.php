<style>
* {
    box-sizing: border-box;
    margin-bottom: -5px;
    
}

body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    
}

#navbar {
    overflow: hidden;
    background-color: #f1f1f1;
    padding: 1px 1px;
    transition: 0.4s;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 99;
    
    
}

#navbar a {
    float: left;
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
    border-radius: 4px;
}

#navbar #logo {
    font-size: 35px;
    font-weight: bold;
    transition: 0.4s;
}

#navbar a:hover {
    background-color: #ddd;
    color: black;
}

#navbar a.active {
    background-color: dodgerblue;
    color: white;
}

#navbar-right {
    float: right;
}

@media screen and (max-width: 580px) {
    #navbar {
        padding: 20px 10px !important;
        
        
    }

    #navbar a {
        float: none;
        display: block;
        text-align: left;
    }

    #navbar-right {
        float: none;
    }
    
}
</style>


<div id="navbar" >

    <!-- <a class="active" href="javascript:void(0)">Home</a>
    <a href="javascript:void(0)">News</a>
    <a href="javascript:void(0)">Contact</a> -->
    <div class="header-nav animate-dropdown" style = "background-color: #5bc0de;">

        <div class="container" >
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                <span><?php include('side-bar1.php');?></span>
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                        class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                               
                                <li class="active dropdown yamm-fw">


                                    <a href="index.php" data-hover="dropdown" class="dropdown-toggle" style = "background-color: #5bc0de;">Home</a>

                                </li>


                                <?php $sql=mysqli_query($con,"select id,categoryName  from category limit 6");
while($row=mysqli_fetch_array($sql))
{
    ?>

                                <li class="dropdown yamm">
                                    <a href="category.php?cid=<?php echo $row['id'];?>" style = "color: #2a2a2a;">
                                        <?php echo $row['categoryName'];?></a>

                                </li>
                                <?php } ?>


                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<script>
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style.padding = "1px 1px";
        document.getElementById("logo").style.fontSize = "25px";
    } else {
        document.getElementById("navbar").style.padding = "1px 1px";
        document.getElementById("logo").style.fontSize = "35px";
    }
}
</script>