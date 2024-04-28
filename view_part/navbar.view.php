<html>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <style>
        .logo_img{
            width: 120px;
            /*height: 50px;*/
        }
        .main_navbar{
            display: flex;
            flex-direction: row;
            padding: 10px;
            background-color: #333388;
            /*position: fixed;*/
            /*width: 100%;*/
            /*justify-content: space-between;*/
        }
        .main ul{
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            gap: 40px;
            list-style: none;
        }
        .main ul li a{
            text-decoration: none;
            color: #FFFFFF;
            font-weight: bold;
        }
        .icons_notify_profile {
            display: flex;
            flex-direction: row;
            margin-left: 400px;
            align-items: center;
            gap: 10px;
            color: #FFFFFF;
        }
    </style>
</head>
<body>
<div class="main_navbar">
    <div class="logo">
        <img src="./Assests/logo_img.png" class="logo_img">
    </div>
    <div class="main">
        <ul>
            <li><a href="./index.php">Dashboard</a></li>
            <li><a href="./about.php">About</a></li>
            <li><a href="./contact_us.php">Contact Us</a></li>
            <li><a href="./terms_condition.php">Terms and Condition</a></li>
            <li><a href="./blog.php">Blog</a></li>
        </ul>
    </div>
    <div class="icons_notify_profile">
        <div class="notification">
            <i class="fa-regular fa-bell icon"></i>
        </div>
        <div class="profile">
<!--            <i  id="profile_icon" class="fa-regular fa-circle-user icon profile_icon"></i>-->
            <button class="btn_signin">Sign In</button>
        </div>
    </div>
</div>
<script>
    <?php
            require "/home/dckap/phpproject/Navbar_Task/view_part/profile.js";
    ?>
</script>
</body>
</html>