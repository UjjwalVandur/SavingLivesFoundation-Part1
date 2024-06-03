<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saving Lives Foundation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">


    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- JQuery for counter -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Rowdies','Acme', cursive;
            box-sizing: border-box;
        }  
    
        /* Start of Home Page CSS */

        /* Start of Front Page CSS */
        .background {
            position: relative;
            height: 100vh;
            width: 100%;
            background: linear-gradient(225deg, #fffbd5, #f2b4f3);
        }

        .background .home-image{
            position: absolute;
            right: 10px;
            top: 50px;
            height: 400px;
            width: 400px;
            background : url(website_images/home-image.png) no-repeat;
            background-size: cover;
            margin: 80px 60px 80px 0;
            border-radius: 40px; 
            border: 3px solid red;
            box-shadow: 0 0 30px rgba(255, 0, 0, 0.5);
        }
       

        .background .slogans{
            position: absolute;
            top: 0;
            left: 0;
            height: 250px;
            width: 55%;
            margin: 80px 80px 80px 60px;
            z-index: 1;
        }

        .slogans h3{
            padding-top: 15px;
            padding-left: 20px;
            font-size: 35px; 
        }

        .slogans h4{
            padding-left: 20px;
            font-size: 20px; 
        }
        .slogans h4 i{
            transform: translateY(-8px);
            margin: 0 3px 0 3px;
            font-size: 14px;
        }

        .slogans .description{
            padding-top: 7px;
            padding-left: 20px;
            font-size: 15.5px;
        }

        .description a{
            text-decoration: none;
        }

        .slogans .donate{
            margin-left: 20px;
            margin-top: 10px;
            padding: 5px 10px 5px 10px;
            border-radius: 30px;
            background-color: rgba(99, 231, 117, 0.973);
            cursor: pointer;
            font-weight: 700;
            font-size: 12px;
        }

        .donate i{
            padding-right: 2.5px;
            font-size: 12px;
            font-weight: 900;
        }

        .background .image-slider{
            z-index: 1;
            position: absolute;
            top: 240px;
            left: 0;
            height: 260px;
            width: 47.8%;
            margin: 80px 80px 80px 100px;
        }

        .image-slider .images{
            position: absolute;
            top: 30px;
            left: 60px;
            height: 200px;
            width: 75%;
            background-color: yellowgreen;
            overflow: hidden;
            margin-left: 20px;
            border: 3px solid black;
        }

        .images img{
            position: absolute;
            height: 100%;
            width: 60%;
        }

        .images .image-description{
            position: absolute;
            left: 60%;
            height: 100%;
            width: 40%;
            z-index: 10;
            text-align: center;
            padding-top: 15px;
            font-size: 16px;
        }
        /* End of Front Page */

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

        .register-link {
            
            padding: 5px 12px 5px 10px;
            border-radius: 20px;
            background-color: #f98d05;
        }

        .register-link i{
            color: black;
            margin-right: 5px;
            font-size: 15px;
        }

        .register-link a{
            font-size: 15px;
            font-weight: 300;
            text-decoration: none;
            color: black;
            font-weight: 700;
        }
        /* End of Navbar CSS */

        /* Start of Footer CSS */

        .mainfooter{
            position: relative;
            top: 10px;
            left: 0;
            height: 520px;
            width: 100%;
            border-top: 5px solid black;
            background: linear-gradient(45deg, black, #f2b4f3);
        }
        .mainfooter .footer{
            position: absolute;
            top: 95px;
            left: 200px;
            height: 400px;
            width: 83%;
            background-color: #b76e79;
            border-radius: 20px;
            color: whitesmoke;
            border: 3px solid #f0bbc3;
        }
        
        .footer .companyname{
            position: absolute;
            top:-80px;
            left: -180px;
            background-color:   #f0bbc3;
            height: 400px;
            width: 350px;
            border-radius: 20px;
            border: 3px solid #b76e79;
        }
        .companyname img{
            position: relative;
            top: 50px;
            left: 125px;
            width: 90px;
            height: 90px;
            border: 3px solid black;
            border-radius: 50%;
            padding: 5px;
        }
        .companyname h2{
            position: relative;
            font-family: 'Titan One', cursive;
            font-weight: 300;
            left: 20px;
            top: 60px;
            color: #00246B;
        }
        .companyname h4{
            position: relative;
            left: 30px;
            top: 75px;
            color: #000;
        }
        .companyname p{
            color: black;
            position: relative;
            top: 80px;
            left: 15px;
            font-size: 13px;
        }

        .companyname .social-icons{
            position: relative;
            top: 100px;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            font-size: 28px;  
        }
        .social-icons i{
            color: #000;
        }
        .footer .contact {
            position: absolute;
            right: 20px;
            top: 12px;
            height: 94%;
            width: 400px;
            border-radius: 20px;
            border-left: 5px solid black;
        }
        .contact h3{
            position: absolute;
            top: 15px;
            left: 140px;
            font-size: 25px;
            font-weight: 500;
            color: black;
        }
        .contact form{
            position: absolute;
            top: 60px;
            left: 10%;
            
        }
        .contact form label{
            color: black;
        }
        .contact form input{
            position: absolute;
            left: 100px;
            outline: none;
            border: 2px solid black;
            background: #f0bbc3;
            padding: 5px 10px 5px 10px;
            border-radius: 20px;
        }
        .contact form input::placeholder{
            color: black;
        }

        .contact form textarea{
            position: absolute;
            left: 100px;
            outline: none;
            border: 2px solid black;
            background: #f0bbc3;
            padding: 5px 10px 5px 10px;
            border-radius: 5px;
            overflow-y: scroll;
            resize: none;
            color: black;
        }
       
        .contact form textarea::placeholder{
            color: black;
        }

        .contact form textarea::-webkit-scrollbar{
            width: 5px;
        }
        .contact form textarea::-webkit-scrollbar-thumb{
            background-color: black;
            border-radius: 20px;
        }
        .contact #submit-contact{
            position: absolute;
            top: 260px;
            left: 140px;
            outline: none;
            border: 2px solid black;
            background: #f0bbc3;
            padding: 5px 15px 5px 15px;
            border-radius: 20px;
            font-size: 20px;
            cursor: pointer;
            color: black;
        }
        .mainfooter .copyright{
            position: absolute;
            bottom: 10px;
            left: 300px;
            height: 20px;
            width: fit-content;
            color: #000;
        }
        .copyright i{
            margin-left: 5px;
            margin-right: 5px;
        }
        .mainfooter .links{
            position: relative;
            top: 50px;
            left: 190px;
            width: 540px;
            height: 300px;
            display: flex;
            align-items: flex-start;
            justify-content: center;
        }
        .links a{
            color: #00246B;
            text-decoration: none;
        }
        .links-1, .links-2, .links-3{
            height: 300px;
            width: 180px;
            display: flex;
            flex-direction: column;
        }
        .links-1 a{
            margin-top: 10px;
            margin-bottom: 10px;
            padding-left: 20px;
        }
        .links-2 a{
            margin-top: 10px;
            margin-bottom: 10px;
            padding-left: 20px;
        }
        .links-3 a{
            margin-top: 10px;
            margin-bottom: 10px;
            padding-left: 20px;
        }
        /* End of Footer CSS */

        /* CSS for page content */
       .row{
        position: absolute;
        top: 600px;
        left: 0;
        height: 200px;
        width: 100vw;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
       }
       .row .col{
        height: 150px;
        width: 200px;
        background: palegreen;
        border-radius: 20px;
        border: 2px solid black;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
       }
       .col .counter-box{
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        width: 100%;
        height: 100%;
        padding: 20px 0;
    }
    .counter-box i{
        font-size: 28px;
    }
    .counter-box h4{
        font-size: 24px;
    }

    .mva-container{
        position: relative;
        max-width: 90%;
        margin: 50px auto 0;
    }
    .mva-container .mva-block{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        margin-bottom: 50px;
    }
    .mva-container .mva-block .mva-image{
        flex: 0 0 auto;
        width: 400px;
        overflow: hidden;
        border-radius: 5px;
        box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.5);
        line-height: 0;
    }
    .mva-container .mva-block .mva-image img{
        width: 100%;
       
        transition: .3s;
        transform: scale(1);
    }
    .mva-container .mva-block .mva-image:hover img{
        transform: scale(1.05);
    }
    .mva-container .mva-block .mva-content{
        flex: 0 0 auto;
        width: calc(100% - 400px);
        align-self: center;
    }

    .mva-container .mva-block .mva-content h5{
        font-weight: 700;
        font-size: 22px;
        color: blue;
        margin-bottom: 10px;
    }
    .mva-container .mva-block .mva-content p{
        font-size: 15px;
    }
    @media screen and (min-width: 1024px)
    {
        .mva-container .mva-block:nth-child(odd) .mva-image{
            order: 1;
        }
    
        .mva-container .mva-block:nth-child(even) .mva-image{
            order: 2;
        }
        
        .mva-container .mva-block:nth-child(odd) .mva-content{
            order: 2;
            padding-left: 30px;
        }
    
        .mva-container .mva-block:nth-child(even) .mva-content{
            order: 1;
            padding-right: 30px;
        }
    }

    </style>
</head>
<body>
    <?php
        $db = mysqli_connect("localhost", "root", "", "savinglivesfoundation");
        $query = "SELECT * FROM `quotes` ORDER BY rand() LIMIT 1";
        $result = mysqli_query($db, $query);  
        $data = mysqli_fetch_assoc($result);
       ?>


    <!-- Start of Home Page -->

    <!-- Start of front page -->
    <div class="background">
        <div class="slogans">
            <h3>WELCOME !</h3>
            <?php echo "<h4><i class='bx bxs-quote-alt-left'></i><span>".$data['quote']."</span><i class='bx bxs-quote-alt-right'></i></h4>"; ?>
            <p class="description">Our organization works to promote and facilitate blood donation. We organize blood drives, provide information about blood donation, and recruit blood donors. We also work to raise awareness of the importance of blood donation and dispel  some common myths about it. Also, we ensure that there is a safe and adequate supply of blood available for patients who need it. <a href="#">Read More...</a></p>
            <button type="submit" class="donate" onclick="showAlert()"><i class='bx bxs-droplet'></i>DONATE BLOOD</button>
            <button type="submit" class="donate"><i class='bx bx-check-double'></i>CHECK BLOOD AVAILABLITIY</button>
            <button type="submit" class="donate"><i class='bx bxs-user'></i>BECOME A MEMBER</button>
            
        </div>
        <div class="image-slider">
            <div class="images">
                    <img src="website_images/blooddonation1.jpg">
                    <p class="image-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nam vero veniam rerum, ducimus architecto nostrum eaque earum? Odit, iusto. Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="home-image"></div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 50 1440 170" ><path fill="url(#grad1)" fill-opacity="1" d="M0,128L48,117.3C96,107,192,85,288,112C384,139,480,213,576,208C672,203,768,117,864,117.3C960,117,1056,203,1152,208C1248,213,1344,139,1392,101.3L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    <defs>
    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="80%">
      <stop offset="10%" style="stop-color:rgb(242,180,243);stop-opacity:1" />
      <stop offset="100%" style="stop-color:rgb(255,251,213);stop-opacity:1" />
    </linearGradient>
  </defs>
</svg>
   
    
       
    <!-- End of front page --> 
    
    <!-- Start of Navbar -->
    <header class="header">
        <div class="title">
            <img src="website_images/logo.png">
            <h2>Saving Lives Foundation</h2>
        </div>
        <div>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php" id="active">Home</a></li>
                    <li><a href="#">Programs<i class='bx bxs-down-arrow'></i></a>
                        <ul id="drop-down-1">
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
                        <ul id="drop-down-1">
                            <li><a href="#">About Us<i class='bx bxs-right-arrow'></i></a>
                                <ul id="drop-down-2">
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
            <div class="register-link">
                <a href="register.php"><i class='bx bxs-user'></i>Register</a>
            </div>
    </header>
    
    <!-- End of Navbar -->

    <!-- Start of Home Page Contents -->
    
   
    <div class="row">
        <div class="col">
            <div class="counter-box">
                <i class='bx bxs-droplet'></i>
                <h2 class="counter">3256</h2>
                <h4>Blood Units</h4>
            </div>
        </div>
        <div class="col">
            <div class="counter-box">
                <i class='bx bxs-user'></i>
                <h2 class="counter">154</h2>
                <h4>Donors</h4>
            </div>
        </div>
        <div class="col">
            <div class="counter-box">
                <i class='bx bx-plus-medical'></i>
                <h2 class="counter">35</h2>
                <h4>Blood Camps</h4>
            </div>
        </div>
        <div class="col">
            <div class="counter-box">
                <i class='bx bx-buildings'></i>
                <h2 class="counter">12</h2>
                <h4>Hospitals</h4>
            </div>
        </div>
    </div>
    <!-- Script for counter -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="jquery.counterup.min.js"></script>
    <script>
        jQuery(document).ready(function($){
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>

    <div class="mva-container">
        <div class="mva-block">
            <div class="mva-image">
                <img src="website_images/mission.jpg">
            </div>
            <div class="mva-content">
                <h5>Our Mission</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime rem tempora nulla eum corporis omnis, neque rerum obcaecati aperiam modi recusandae nisi explicabo ad, dolore autem quasi adipisci culpa quos hic quisquam maiores? Deleniti ut provident nisi voluptas deserunt tenetur?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores, sapiente! Deserunt nesciunt sed quasi dolorem ab quos eaque pariatur labore eum! Maxime voluptatibus sequi quibusdam dolorem iste maiores voluptatem architecto?</p>
            </div>
        </div>
        <div class="mva-block">
            <div class="mva-image">
                <img src="website_images/vision.jpg">
            </div>
            <div class="mva-content">
                <h5>Our Vision</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime rem tempora nulla eum corporis omnis, neque rerum obcaecati aperiam modi recusandae nisi explicabo ad, dolore autem quasi adipisci culpa quos hic quisquam maiores? Deleniti ut provident nisi voluptas deserunt tenetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea commodi molestias dolorem odit. Veniam nihil, pariatur quod architecto qui a odio vitae eos! Totam earum quidem eveniet pariatur exercitationem dolorum!</p>
            </div>
        </div>
        <div class="mva-block">
            <div class="mva-image">
                <img src="website_images/aboutus.jpg">
            </div>
            <div class="mva-content">
                <h5>About us</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime rem tempora nulla eum corporis omnis, neque rerum obcaecati aperiam modi recusandae nisi explicabo ad, dolore autem quasi adipisci culpa quos hic quisquam maiores? Deleniti ut provident nisi voluptas deserunt tenetur?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, tempore quia eum reiciendis quaerat accusamus natus, amet, corrupti temporibus ex cumque rem expedita velit. Qui exercitationem illum eius obcaecati aperiam.</p>
            </div>
        </div>
    </div>

    <!-- End of Home Page Contents -->

    <!-- Start of Footer -->
    <!-- End of Footer -->
    <div class="mainfooter">
    <div class="footer">
        <div class="companyname">
            <img src="website_images/logo.png" alt="">
            <h2>Saving Lives Foundation</h2>
            <h4>Be a saviour just by donating your blood.</h4>
            <p>Our organization works to promote and facilitate blood donation. We organize blood drives, provide information about blood donation, and recruit blood donors. </p>
            <div class="social-icons">
                <a href="#"><i class='bx bxl-whatsapp'></i></a>
                <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
            </div>
        </div>
        <div class="links">
            <div class="links-1">
                <a href="index.php">Home</a>
                <a href="donor.php">Donate Blood</a>
                <a href="#">Check Blood Availablitiy</a>
                <a href="#">Become a Member</a>
                <a href="#">Blood Banks</a>
                <a href="#">Vision</a>
            </div>
            <div class="links-2">
                <a href="#">Mission</a>
                <a href="#">Awareness Camps</a>
                <a href="#">Blood Donation Camps</a>
                <a href="user_gallery.php">Gallery</a>
                <a href="#">Events</a>
                <a href="#">News</a>
            </div>
            <div class="links-3">
                <a href="#">Alerts</a>
                <a href="#">What we do</a>
                <a href="#">Committees</a>
                <a href="#">Annual Reports</a>
                <a href="FAQs.php">FAQs</a>
            </div>
        </div>
        <div class="contact">
            <h3>Contact Form</h3>
            <form action="" method="POST">
                <label for="name">Name :</label>
                <input type="text" name="name" id="name" placeholder="Name" required>
                <br>
                <br>
                <label for="email">E-mail ID :</label>
                <input type="email" name="email" id="email" placeholder="Email ID" required>
                <br>
                <br>
                <label for="message">Message :</label>
                <textarea name="message" id="message" cols="27" rows="10" placeholder="Write your message ..." wrap="hard" required></textarea>
                <button type="submit" name="submit" id="submit-contact">Submit</button>
            </form>
        </div>
        <div class="copyright">
            <p>Copyright<i class='bx bx-copyright'></i>2023</p>
        </div>
    </div>
    </div>
    <!-- End of Home Page -->
    <script>
        function showAlert(){
            alert(' Please register first to see this page !');
        }
    </script>

<?php
$db = mysqli_connect("localhost", "root", "", "savinglivesfoundation");
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $query = "INSERT INTO `contact` (`name`, `email`, `message`, `datetime`) VALUES ('$name', '$email', '$message', current_timestamp())";
        $data = mysqli_query($db, $query);

        if($data){
            echo "<script> alert('Your form has been submiitted successfully.'); </script>"; 
        }
    }
?>

</body>
</html>