<?php
session_start();
$user = $_SESSION["username"];
if(isset($_SESSION["username"])){
    include 'newnav.php';
}
else{
    include 'navbar.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Rowdies','Acme', cursive;
            box-sizing: border-box;
        }  
        #display-photos{
            position: relative;
            top: 50px;
            left: 30px;
            height: auto;
            width: 95%;
            justify-content: center;
            padding: 5px;
            margin: 12px;
            border-radius: 5px;
        }
        .img{
            position: relative;
            display: inline;
        }
        .img img{
            margin: 5px;
            width: fit-content;
            height: fit-content;
            max-height: 250px;
            max-width: 300px;
            border: 3px solid black;
        }
        .popup{
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            width: 80%;
            max-width: 1600px;
            height: 90vh;
            max-height: 800px;
            border-radius: 20px;
            background: rgba(0, 0, 0, 0.75);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 100;
            overflow: hidden;
            transition: 1s;
            opacity: 0;
        }
        .popup.active{
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }

        .popup.active .close-btn,
        .popup.active .image-name,
        .popup.active .index,
        .popup.active .large-image,
        .popup.active .arrow-btn{
            opacity: 1;
            transition: opacity .5s;
            transition-delay: 1s;
        }
        .top-bar{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 30px;
            background: #000;
            color: #fff;
            text-align: center;
            line-height: 50px;
            font-weight: 300;
        }
        .close-btn{
            opacity: 0;
            position: absolute;
            top: -10px;
            right: 20px;
            font-size: 36px;
            border-radius: 50%;
            cursor: pointer;
        }
        .large-image{
            margin-top: 5%;
            width: 90%;
            height: 80%;
            object-fit: contain;
            opacity: 0;
        }
        .description p{
            color: white;
        }

    </style>
</head>
<body>
    <?php
    $db = mysqli_connect("localhost", "root", "", "savinglivesfoundation");
    $query = "SELECT * FROM `image`";
    $result = mysqli_query($db, $query);  
    ?>
    <!-- popup -->
    <div class="popup">
        <!-- top bar -->
        <div class="top-bar">
            <span class="close-btn">&times;</span>
        </div>
        <!-- image -->
            <img src="./image/<?php echo $data['filename']; ?>" class="large-image" alt="">
    </div>
    <div id="display-photos">
        <?php
            while ( $data = mysqli_fetch_assoc($result)) {  
        ?>
        <div class="img">
            <img src="./image/<?php echo $data['filename']; ?>" class="image">
        </div>
        <?php
            }
        ?>
    </div>

    <script>
        document.querySelectorAll('.image').forEach(image =>{
            image.onclick = () => {
                document.querySelector('.popup').classList.toggle('active');
                document.querySelector('.large-image').src = image.getAttribute('src');
            }
        });

        document.querySelector('.close-btn').onclick = () => {
            document.querySelector('.popup').classList.toggle('active');
        }
    </script>
</body>
</html>