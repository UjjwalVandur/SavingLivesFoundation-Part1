<?php
    include "a.php";
?>
<?php
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

    <style>
        .container #gallerycontent{
            position: fixed;
            top: 40px;
            left: 200px;
            height: 100%;
            width: 100%;
        }
        #gallery{
            position: fixed;
            top: 60px;
            left: 250px;
            width: 100%;
            height: 30px;
        }
        #gallery form{
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }
        #gallery .form-group{
            background: rgb(240, 70, 98);
            border-radius: 20px;
            height: 30px;
            margin-right: 30px;
        } 
        .form-group textarea{
            position: relative;
            top: 4px;
            width: 200px;
            outline: none;
            background-color: transparent;
            border: none;
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 3px;
            resize: none;
            overflow-y: scroll;
        }
        #FileDescription::placeholder{
            color: black;
        }
        #FileDescription::-webkit-scrollbar{
            width: 3px;
            position: absolute;
        }
        #FileDescription::-webkit-scrollbar-thumb{
            background-color: black;
            border-radius: 50px;
        }

        .form-group .form-control{
            position: relative;
            top: 4px;
            left: 30px;
            cursor: pointer;
            width: fit-content;
        }
        .form-group .btn{
            position: relative;
            top: 4px;
            cursor: pointer;
            width: 100px;
            outline: none;
            background-color: transparent;
            border: none;
        }
        .btn i{
            margin-right: 5px;
            font-size: 15px;
            font-weight: 900;
        }
        #gallerycontent #display-photos{
            position: fixed;
            top: 90px;
            left: 230px;
            background-color: brown;
            height: 81%;
            width: 79%;
            overflow-y: scroll;
            justify-content: center;
            padding: 5px;
            margin: 15px;
            border-radius: 5px;
        }
        #display-photos::-webkit-scrollbar{
            width: 12px;
        }
        #display-photos::-webkit-scrollbar-thumb{
            background-color: black;
            border-radius: 50px;
        }
        .img{
            position: relative;
            display: inline;
        }
        .img img{
            margin: 5px;
            width: 250px;
            height: 150px;
            border: 2px solid black;
        }
        .img #delete{
            display: contents;
        }
        .img button{
            position: absolute;
            background: red;
            outline: none;
            border: none;
            padding: 5px 10px 5px 10px;
            border-radius: 20px;
            top: -25px;
            left: 100px;
            cursor: pointer;
        }
        .img i{
            font-size: 14px;
            margin-right: 5px;
        }
        h3{
            margin-top: 60px;
            margin-left: 950px;
            font-size: 18px;
            width: fit-content;
        }
    </style>
</head>
<body>
<?php
$db = mysqli_connect("localhost", "root", "", "savinglivesfoundation");
error_reporting(0);
 
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    if($_FILES['uploadfile']['error']){
        echo "<h3>No file sent!</h3>";
    }
    else if(file_exists("./image/" .$_FILES["uploadfile"]["name"])){
        echo "<h3>Image Already Uploaded!</h3>";
    }
    else{
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $description = $_POST["FileDescription"];
    $folder = "./image/" . $filename;
 
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO image (filename,description) VALUES ('$filename','$description')";
 
    // Execute query
    mysqli_query($db, $sql);
 
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>Image uploaded successfully!</h3>";
        }
        else {
            echo "<h3>Failed to upload image!</h3>";
        }
    }
}

// For deleting image from gallery panel
if(isset($_POST['delete-button'])){
    $id = $_POST['delete-id'];
    $delimage = $_POST['delete-image'];

    $a = "DELETE FROM `image` WHERE `id` = '$id'";
    $del = mysqli_query($db, $a);
    if($del){
        unlink("./image/".$delimage);
        echo "<h3>Image deleted successfully!</h3>";
    }
    else {
        echo "<h3>Failed to delete image!</h3>";
    }
}

?>

<!-- Start of Gallery Area -->
    <div id="gallerycontent" class="banner">
        <div id="gallery">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <input class="form-control" type="file" name="uploadfile" value="" />
                    </div>
                    <div class="form-group">
                    <textarea id="FileDescription" name="FileDescription" rows="1"  cols="15" wrap="hard" placeholder="Description"></textarea><br>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit" name="upload"><i class='bx bx-upload'></i>Upload</button>
                    </div>
                </form>
                <div id="display-photos">
                    <?php
                    $query = " select * from image";
                    $result = mysqli_query($db, $query);  
                    while ( $data = mysqli_fetch_assoc($result)) {  
                    ?>
                    <div class="img">
                        <img src="./image/<?php echo $data['filename']; ?>">
                        <form action="" method="POST" id="delete">
                            <input type="hidden" name="delete-id" value ="<?php echo $data['id'];?>">
                            <input type="hidden" name="delete-image" value ="<?php echo $data['filename'];?>">
                            <button type="submit" name="delete-button" onclick="checkdelete()">Delete</button>
                        </form>
                    </div>
                    <?php
                    }
                ?>
            </div>
        </div>
    </div>
<!-- End of Gallery Area -->

<script>
    function checkdelete(){
        return confirm('Are you sure you want to delete this image ?');
    }
</script>

</body>
</html>