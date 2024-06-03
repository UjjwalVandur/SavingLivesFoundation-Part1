<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saving Lives Foundation</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Rowdies','Acme', cursive;
            box-sizing: border-box;
        }  
        /* Start of Navbar CSS */
        .header{
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(225deg, #fffbd5, #b20a2c);
            background-color: transparent;
            color: black;
            width: 100%;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-left: 20px;
            padding-right: 20px;
            z-index: 100;
            border-bottom: 3px solid black;
        }
        .header .title{
            position: relative;
            top: 0;
            left: 0;
            display:flex;
            justify-content:left;
            align-items: center;
            color: black;
        }
        .title h2{
            font-family: 'Titan One', cursive;
            font-size: 20px;
            font-weight: 500;
            margin-left: 10px;
        }
        .title img{
            position: relative;
            top: 0;
            left: 0;
            height: 45px;
            width: 45px;
            background-color: transparent;
            padding: 5px;
            border-radius: 50%;
            border: 3px solid black;
        }
        .navbar ul{
            list-style: none;
            display: flex; 
        }
        .navbar ul li{
            position: relative;
            margin-left: 10px;
            margin-right: 10px;
        }
        .navbar ul li:hover > ul{
            display: initial;
        }
        .navbar ul li ul{
            position: absolute;
            left: 0;
            top: 25px;
            background:#f2b4f3;
            display: block;
            width: 210px;
            display: none;
            border-radius: 10px;
        }
        .navbar ul li ul li{
            width: 100%;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .navbar ul li ul li ul{
            left: 180px;
            top: -15px;
        }
        .navbar ul li a{
            text-decoration: none;
            color: black;
            padding: 3px 13px 3px 13px;
            border-radius: 50px;
            font-weight: 700;
        }
        .navbar ul li a i{
            font-size: 14px;
            margin-left: 5px;
        }
        .navbar a:hover{
            background-color: green;
        }

        .navbar #active{
            background-color: green;
        }
        .header .search-register{
            position: relative;
            top: 0;
            right: 0;
        }
        .register-search{
            display: flex;
            align-items: center;
        }
        .search input{
            
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            font-size: 14px;
            padding: 3px 5px 5px 10px;
            border: 2px solid black;
            border-right: none;
            color: black;
            outline: none;
            font-family: 'Rowdies', cursive;
            font-weight: 900;
        }
        .search button {
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            padding: 3px 10px 5px 5px;
            border: 2px solid black;
            border-left: none;
            cursor: pointer;
            font-size: 14px;
            margin-right: 15px;
        }
        .search i{
            color: black;
        }

        .profile-link{
            height: 60px;
            width: 100px;
        }
       
        .profile img{
            position: relative;
            height: 46px;
            width: 46px;
            top: 7px;
            left: 12px;
        }
        .profile button{
            position: relative;
            top: -5px;
            left: 12px;
            font-weight: 900;
            color: black;
            font-size: 28px;
            background: transparent;
            border: none;
            outline: none;
            cursor: pointer;
        }
       
        .profile div{
            position: absolute;
            top: 60px;
            right: 0;
            height: 60px;
            width: 100px;
            background: violet;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            display: none;
        }
        .profile div ul{
            list-style: none;
        }
        .profile div ul li{
            position: relative;
            top: 4px;
            left: 30px;
            margin-bottom: 5px;
        }
        .profile div ul li button{
            text-decoration: none;
            color: black;
            font-size: 14px;
        }
       
        /* End of Navbar CSS */
    </style>
</head>
<body>
    <!-- Start of Navbar -->
    <header class="header">
        <div class="title">
            <img src="website_images/logo.png">
            <h2>Saving Lives Foundation</h2>
        </div>
        <div>
            <nav class="navbar">
                <ul>
                    <li><a href="home.php" id="active">Home</a></li>
                    <li><a href="#">Programs<i class='bx bxs-down-arrow'></i></a>
                        <ul>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Alerts</a></li>
                            <li><a href="#">Blood Donation Camps</a></li>
                            <li><a href="#">Awareness Camps</a></li>
                        </ul>
                    </li>
                    <li><a href="user_gallery.php">Gallery</a></li>
                    <li><a href="#">Blood Banks</a></li>
                    <li><a href="#">About<i class='bx bxs-down-arrow'></i></a>
                        <ul>
                            <li><a href="#">About Us<i class='bx bxs-right-arrow'></i></a>
                                <ul>
                                    <li><a href="#">What we do</a></li>
                                    <li><a href="#">Vision</a></li>
                                    <li><a href="#">Mission</a></li>
                                    <li><a href="#">Our Committee</a></li>
                                    <li><a href="#">Annual Report</a></li>
                                    <li><a href="FAQs.php">FAQs</a></li>
                                </ul>
                            </li>
                            <li><a href="#">About Blood Donation</a></li>  
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="register-search">
            <div class="search">
                <input type="search" placeholder="Search..."><button><i class='bx bx-search-alt-2'></i></button>
            </div>
            <div class="profile-link">
               <div class="profile">
                <img src="website_images/profile.png" alt="">
                <button type="submit" onclick="show()"><i class='bx bx-chevron-down'></i></button>
                <div id="profile">
                    <ul>
                        <form action="" method="POST">
                            <li><button type="submit" name="profile">Profile</button></li>
                            <li><button type="submit" name="logout">Logout</button></li>
                        </form>
                    </ul>
                </div>
               </div>
            </div>
    </header>
    <?php
    if(isset($_POST['logout'])){
        session_destroy();
        ?>
        <meta http-equiv = "refresh" content = "0; url = http://localhost/SavingLivesFoundation/index.php"/>
        <?php
    }
?>
    <!-- End of Navbar -->

    <script>
        var a1 = document.getElementById('profile');
        display = 0;
        function show(){
            if(display == 0){
                a1.style.display = "block";
                display = 1;
            }
            else{
                a1.style.display = "none";
                display = 0;
            }
        } 
    </script>
</body>
</html>