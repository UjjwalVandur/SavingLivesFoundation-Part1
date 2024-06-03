<?php  include 'a.php'; ?>
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
    <title>Quotes</title>

    <style>
        .quotes{
            position: fixed;
            top: 40px;
            left: 200px;
            height: 100%;
            width: 100%;
        }
        .quotes form{
            position: fixed;
            top: 60px;
            left: 250px;
            width: 100%;
            height: 30px;
        }
        .quotes form input{
            background: rgb(240, 70, 98);
            border-radius: 20px;
            height: 30px;
            width: 600px; 
            margin-right: 30px;
            padding: 10px;
            border: none;
            outline: none;
        }
        .quotes form input::placeholder{
            color: black;
        }
        .quotes form button{
            background: rgb(240, 70, 98);
            border-radius: 20px;
            height: 30px;
            padding-left: 10px;
            padding-right: 10px;
            border: none;
            outline: none;
            cursor:pointer;
        }
        .quotes table{
            position: fixed;
            top: 90px;
            left: 230px;
            height: 81%;
            width: 79%;
            justify-content: center;
            padding: 5px;
            margin: 15px;
            border-collapse: collapse;
           
        }
        .quotes table thead{
            position:absolute;
        }
        .quotes table thead tr {
            position: relative; 
            top: 0;
            left: 0;
            background: palegreen;
        }
        .quotes table thead tr th{
            height: 30px;
            border: 2px solid black;
            border-collapse: collapse;
            text-align: center;
        }
        .quotes table thead tr .srno{
            width: 77px;
        }
        .quotes table thead tr .quote{
            width: 916px;
        }
        .quotes table thead tr .delete{
            width: 79px;
        }
        .quotes table tbody{
            position: absolute;
            top: 30px;
            left: 0;
            height: 90%;
            overflow-y: scroll;
            
        }
        .quotes table tbody::-webkit-scrollbar{
            width: 5px;
        }
        .quotes table tbody::-webkit-scrollbar-thumb{
            background-color: black;
            border-radius: 20px;
        }
        .quotes table tbody tr{
            position: relative;
            height : 30px;
            background: pink;
        }
        .quotes table tbody tr td{
            height: 30px;
            border: 2px solid black;
            border-collapse: collapse;
            text-align: center;
        }
        .quotes table tbody tr .srno{
            width: 80px;
        }
        .quotes table tbody tr .quote{
            width: 950px;
        }
        .quotes table tbody tr .delete{
            width: 80px;
        }
        .quotes table tbody tr .delete button{
            background: transparent;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }
        h3{
            position:fixed;
            top: 65px;
            left: 1000px;
            font-size: 16px;
        }
        
        
    </style>
</head>
<body>

<?php
    $db = mysqli_connect("localhost", "root", "", "savinglivesfoundation");
    if(isset($_POST['submit'])){
        $quote = $_POST['quote'];

        $query = "INSERT INTO `quotes` (`quote`, `datetime`) VALUES ('$quote', current_timestamp())";
        $data = mysqli_query($db, $query);
        if($data){
            echo "<h3>Uploaded Successfully ! </h3>";
        }
        else{
            echo "<h3>Not Uploaded Successfully !</h3>";
        }

    }
?>
    <div class="quotes">
        <form action="" method="POST">
            <input type="text" id="quote" placeholder="Type your quote ..." required name="quote">
            <button type="submit" name="submit" id="submit">Upload</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th class="srno">Sr.No</th>
                    <th class ="quote">Quote</th>
                    <th class="delete">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $a = "SELECT * FROM `quotes`";
                    $result = mysqli_query($db, $a);
                    while($b = mysqli_fetch_assoc($result)){
                ?>
                
                <tr>
                    <td class="srno"><?php echo $b['id']; ?></td>
                    <td class ="quote"><?php echo $b['quote']; ?></td>
                    <form action="" method="POST">
                    <input type="hidden" name="delete-id" value ="<?php echo $b['id'];?>">
                            <input type="hidden" name="delete-quote" value ="<?php echo $b['quote'];?>">
                        <td class="delete"><button type="submit" name="delete-button" onclick="checkdelete()"><i class='bx bxs-trash-alt' ></i></button></td>   
                    </form>
                </tr>
                
                <?php
                    echo "<br>";
                        }
                    ?> 
                
                
            </tbody>
            
        </table>
    </div>

<?php
if(isset($_POST['delete-button'])){
    $id = $_POST['delete-id'];
    $delimage = $_POST['delete-quote'];

    $c = "DELETE FROM `quotes` WHERE `id` = '$id'";
    $del = mysqli_query($db, $c);
    if($del){
        echo "<h3>Quote deleted successfully!</h3>";
        ?>
         <meta http-equiv = "refresh" content = "0; url = http://localhost/SavingLivesFoundation/quote.php"/>
        <?php
    }
    else {
        echo "<h3>Failed to delete Quote!</h3>";
    }
}
?>


<script>
    function checkdelete(){
        return confirm('Are you sure you want to delete this image ?');
    }
</script>
</body>
</html>