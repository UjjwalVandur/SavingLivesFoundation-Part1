<?php
session_start();
$user = $_SESSION["username"];
if(isset($_SESSION["username"])){

}
else{
    ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/SavingLivesFoundation/index.php"/>
    <?php
}
?>
<?php
    include 'newnav.php';
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

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Rowdies', 'Acme', cursive;
            box-sizing: border-box;
        }


        .main {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin: 10px;
            margin-top: 70px;
            padding: 10px;
            top: 25px;
        }

        .greet {
            display: flex;
            background-color: yellow;
            width: 100%;
            border-radius: 20px;
            padding: 5px;
            justify-content: center;
            align-items: center;
            box-shadow: 0 0 10px gray;
        }

        .details {
            display: flex;
            flex-direction: column;
            margin-top: 10px;
            height: 100%;
            padding: 30px;
            background-color: rgb(235, 235, 235);
            border-radius: 10px;
        }

        .personalinfo {
            display: flex;
            flex-direction: column;
            border: 2px solid rgb(255, 159, 159);
            padding: 15px;
            border-radius: 10px;
            background-color: mistyrose;
            box-shadow: 0 0 10px gray;
        }

        .info {
            display: flex;
            flex-direction: column;
            margin: 10px;
            padding: 5px;
        }

        .info1 {
            display: flex;
            margin: 10px;
            padding: 10px;
        }

        .info1 label {
            margin: 15px;
            padding: 0px;
        }

        .info1 input {
            margin: 18px;
            padding: 5px;
            border-radius: 20px;
        }

        .info2 {
            display: flex;
            margin: 10px;
            padding: 10px;
        }

        .info2 label {
            margin: 15px;
            padding: 0px;
        }

        .info2 input {
            margin: 18px;
            padding: 5px;
            border-radius: 20px;
        }

        .placeholder {
            padding: 5px;
        }

        .contacts {
            display: flex;
            flex-direction: column;
            border: 2px solid rgb(255, 159, 159);
            padding: 15px;
            border-radius: 10px;
            background-color: mistyrose;
            box-shadow: 0 0 10px gray;
        }

        .info3 {
            display: flex;
            margin: 10px;
            padding: 5px;
        }

        .info3 label {
            margin: 15px;
            padding: 0px;
        }

        .info3 input {
            margin: 18px;
            padding: 5px;
            border-radius: 20px;
        }
        .info4{
            display: flex;
            flex-direction: column;
            border: 2px solid rgb(255, 159, 159);
            padding: 15px;
            border-radius: 10px;
            background-color: mistyrose;
            box-shadow: 0 0 10px gray; 
        }
        .info4 label{
            margin: 15px;
            padding: 0px;
        }
        .info4 textarea{
            margin: 18px;
            padding: 5px;
            border-radius: 20px;
        }
        .button{
            outline: none;
            border: 2px solid black;
            background: #f0bbc3;
            padding: 5px 15px 5px 15px;
            border-radius: 20px;
            font-size: 20px;
            cursor: pointer;
            color: black;
            transition: all 0.5s ease-in;
        }
        .button:hover{
            background-color: rgb(241, 252, 144);
        }

        .popup{
            width: 400px;
            background: palegreen;
            border-radius: 10px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
            padding: 0 30px 30px;
            color: #333;
            border: 5px solid black;
            display: none;
        }
        .popup img{
            width: 100px;
            margin-top: -50px;
            border-radius: 50%;
            border: 4px solid black;
            box-shadow: 0 2px 5px rgba (0,0,0,0.2);
        }
        .popup h2{
            font-size: 38px;
            font-weight: 500;
            margin: 30px 0 10px;
        }
        .popup button{
            width: 100%;
            margin-top: 50px;
            padding:  10px 0;
            background: green;
            color: #fff;
            border: 0;
            outline: none;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 5px 5px rgba(0,0,0,0.2);
        }
    </style>
</head>

<body>

    <div class="main">
        <form action="" method="post">
        <div class="popup" id="popup-success">
            <img src="website_images/tick.png">
            <h2>Thank You !</h2>
            <p>Your details has been successfully submitted. Thanks !</p>
            <button type="submit" name="ok">OK</button>
        </div>
        </form>
        <div class="greet">
            <a>
                <h3> Please Enter Your Personal Details:</h3>
            </a>
        </div>
        <div class="details">
            <div class="personalinfo">
                <a>
                    ENTER YOUR PERSONAL INFORMATION:
                </a>
                <br>
                <br>
                <form action="" class="info" method="POST" onsubmit="onFormSubmit()">
                    <div class="info1">

                        <label for="name">Name :</label>
                        <input type="text" name="name" id="name" placeholder="Name" required>
                        <label for="surname">Surname :</label>
                        <input type="text" name="surname" id="surname" placeholder="Surname" required>
                        <label for="middlename">Middle-name :</label>
                        <input type="text" name="middlename" id="middlename" placeholder="Middle-name" required>
                    </div>
                    <div class="info2">
                        <label for="age">Age :</label>
                        <input type="text" name="age" id="age" placeholder="Age" required>
                        <label for="bldgrp">Blood Group :</label>
                        <input type="text" name="bldgrp" id="bldgrp" placeholder="Enter Blood Group" required>
                        <label for="identity">Identity Proof :</label>
                        <input type="text" name="identity" id="identity" placeholder="Enter Aadhar Card No." required>
                    </div>
            </div>
            <br>
            <br>
            <div class="contacts">
                <a>
                    CONTACT DETAILS:
                </a>
                <br>
                <br>
                <div class="info3">
                    <label for="email">E-mail ID :</label>
                    <input type="email" name="email" id="email" placeholder="Email ID" required>
                    <label for="contact-no">Contact No :</label>
                    <input type="contact-no" name="contact-no" id="contact-no" placeholder="Enter your contact no." required>
                    <label for="alternate-no"> Alternate Contact No :</label>
                    <input type="alternate-no" name="alternate-no" id="alternate-no" placeholder="Enter your alternate contact no." required>
                </div>
            </div>
            <br>
            <br>
            <div class="info4">

                <label for="address">ADDRESS :</label>
                <textarea name="address" id="address" cols="27" rows="10" placeholder="Enter your address ..." wrap="hard" required></textarea>
            </div>
            <button class="button" type="submit" name="submit" >Submit</button>
        </div>
        </form>
    </div>
    

    <?php
$db = mysqli_connect("localhost", "root", "", "savinglivesfoundation");
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $middlename = $_POST['middlename'];
    $age = $_POST['age'];
    $bloodgroup = $_POST['bldgrp'];
    $identity = $_POST['identity'];
    $email = $_POST['email'];
    $contact = $_POST['contact-no'];
    $altcontact = $_POST['alternate-no'];
    $address = $_POST['address'];

    $query = "INSERT INTO `donor` (`name`, `surname`, `middlename`, `age`, `bloodgroup`, `identity`, `email`, `contact`, `altcontact`, `address`) VALUES ('$name', '$surname', '$middlename', '$age', '$bloodgroup', '$identity', '$email', '$contact', '$altcontact', '$address')";
    $data = mysqli_query($db, $query);
    if($data)
    {
        ?>
    <script>
        let popup1 = document.getElementById("popup-success");
        popup1.style.display = "block";
    </script>
<?php
    }
}
if(isset($_POST['ok']))
{
  ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/SavingLivesFoundation/home.php"/>
  <?php 
} 
?>
</body>
</html>