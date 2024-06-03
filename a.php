<?php
    session_start();
    if(isset($_SESSION["admin"])){

    }
    else{
        ?>
        <meta http-equiv = "refresh" content = "0; url = http://localhost/SavingLivesFoundation/index.php"/>
        <?php
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - 2</title>

    <!-- Boxicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">

   
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto',sans-serif;
            text-decoration: none;
            color: black;
            font-family: 'Rowdies',sans-serif;
        }
        .container{
            position: fixed;
            height: 100vh;
            width: 100vw;
        }
        .container .top-container{
            position: fixed;
            top: 0;
            left: 0;
            height: 40px;
            width: 100%;
            background: yellowgreen;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 30px 0 30px;
            border-bottom: 4px solid black;
        }
        .top-container h4{
            font-size: 18px;
        }
        .top-container button{
            height: 30px;
            width: 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 18px;
            font-weight: 600;
            background: rgb(228, 81, 81);
            padding-top: -10px;
            padding-bottom: -10px;
            border-radius: 20px;
            cursor: pointer;
        }
        .top-container i{
            padding-left: 10px;
        }
        .top-container button{
            padding-right: 10px;
        }
        .container .left-container{
            position: fixed;
            top: 40px;
            left: 0;
            height: 100%;
            width: 200px;
            background: rgb(165, 99, 226);
            border-right: 4px solid black;
            overflow-y:scroll;
        }
        .left-container::-webkit-scrollbar{
            width: 8px;
        }
        .left-container::-webkit-scrollbar-thumb{
            background-color: black;
        }
        .left-container a{
            display: block;
            width: 100%;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            padding: 10px 0 10px 30px;
            font-weight: bold;
            font-size: 20px;
            cursor: pointer;
           
        }
        .left-container i{
            padding-right: 10px;
            font-size: 20px;
        }
        .left-container a:hover{
            background-color: blueviolet;
        }
    </style>

</head>
<body>



<?php
    if(isset($_POST['logout'])){
        session_destroy();
        ?>
        <meta http-equiv = "refresh" content = "0; url = http://localhost/SavingLivesFoundation/index.php"/>
        <?php
    }
?>
    <div class="container">
        <div class="top-container">
            <h4>Saving Lives Foundation(Admin Panel)</h4>
            <div>
                <form action="" method="POST">
                    <button type="submit "name="logout"><i class='bx bx-power-off'></i>Logout</button>
                </form>
            </div>
        </div>
        <div class="left-container">
            <a href = ""><i class="bx bxs-dashboard"></i>Dashboard</a>
            <a href = ""><i class='bx bxs-user-plus'></i>Teams</a>
            <a href = ""><i class='bx bx-calendar-event'></i>Events</a>
            <a href = ""><i class='bx bx-buildings'></i>Hospitals</a>
            <a href = "gallery.php"><i class='bx bxs-photo-album'></i>Gallery</a>
            <a href="quote.php"><i class='bx bxs-quote-left'></i>Add Quotes</a>
        </div>
    </div>

   
</body>
</html>