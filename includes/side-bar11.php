<html>

<head>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:300,400');
    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    body {
        margin: 0;
        background: #ecf1f1;
        color: black;
        font-family: roboto;
        font-weight: 300;
    }

    .content {
        text-align: center;
        margin-top: 120px;
    }

    .sidebar {
        top: 0;
        min-height: 400px;
        height: 100vh;
        min-width: 3px;
        width: 0px;
        background: #de6161;
        text-align: center;
        position: fixed;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
    }

    #sideBarText {
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        height: 100vh;
    }

    .nav-section a {
        transition: 0s;
        opacity: 0;
    }

    .textFadeIn a {
        opacity: 100;
        transition: 1s;
    }

    .sidebar ul {
        color: white;
        list-style-type: none;
        padding-left: 0;
        display: flex;
        flex-direction: row;
        justify-content: center;
        opacity: 0;
    }

    .iconFadeIn ul {
        opacity: 100;
        transition: 1s;
    }

    .nav-section2 li {
        font-size: 36px;
        margin-right: 12px;
        margin-left: 12px;
        cursor: pointer;
    }

    .navSlide {
        animation: slide 0.2s linear forwards;
    }

    .nav-section {
        margin: 0 auto;
        width: 400px;
    }

    @keyframes slide {
        100% {
            width: 100vw;
        }
    }

    .item {
        color: white;
        font-size: 30px;
        margin-top: 11px;
        margin-bottom: 20px;
    }

    a {
        color: white;
        text-decoration: none;
        transition: 0.4s;
    }

    a:hover {
        text-decoration: underline;
        transition: 0.4s;
    }

    .menu-button {
        top: 0;
        margin-left: 20px;
        margin-top: 12px;
        cursor: pointer;
        position: fixed;
        z-index: 100;
    }

    .bar1,
    .bar2,
    .bar3 {
        width: 35px;
        height: 5px;
        background-color: black;
        margin: 6px 0;
        transition: 0.3s;
    }

    .change .bar1 {
        transform: rotate(-45deg) translate(-9px, 6px);
        background-color: white;
    }

    .change .bar2 {
        opacity: 0;
    }

    .change .bar3 {
        transform: rotate(45deg) translate(-8px, -8px);
        background-color: white;
    }
    </style>
</head>

<body>
    <div class="menu-button" onclick="menuAnimation(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
    <div class="sidebar" id="slideNav">
        <div class="nav-section" id="sideBarText">
            <div class="item"><a href="#">Home</a></div>
            <div class="item"><a hrefa="#">Portfolio</a></div>
            <div class="item"><a href="#">About</a></div>
            <div class="item"><a href="#">Blog</a></div>
            <div class="item"><a href="#">Contact</a></div>
        </div>
        <div class="nav-section2" id="socialIcons">
            <ul>
                <li><a href="http://www.twitter.com/illpill" target="_blank"><i class="fa fa-twitter"
                            aria-hidden="true"></i></a></li>
                <li><a href="http://www.instagram.com/illpill" target="_blank"><i class="fa fa-instagram"
                            aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    
    <script>
    function menuAnimation(x) {
      x.classList.toggle("change");
      var element = document.getElementById("slideNav");
      element.classList.toggle("navSlide");
      var textFade = document.getElementById("sideBarText");
      textFade.classList.toggle("textFadeIn");
      var iconFade = document.getElementById("socialIcons");
      iconFade.classList.toggle("iconFadeIn");
    }
</script>
</body>

</html>
