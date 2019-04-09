<html>
<?php
$connect = mysqli_connect("localhost","root","","cricket");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
    if(isset($_POST['submit'])){
    $one = $_POST["batsman_id"];
    $two = $_POST["fifties"];
    $three = $_POST["hundreds"];
    }
    

    $one = $_POST["batsman_id"];
    $two = $_POST["fifties"];
    $three = $_POST["hundreds"];
echo "<h1>Connected successfully<br></h1>";
$sql = "INSERT INTO batsman_milestones (batsman_id,fifties,hundreds) VALUES ('$one', '$two','$three')";
    if(mysqli_query($connect,$sql)){
        echo "<h1><b>inserted</b><br></h1>";
    }
    else{
        echo "<h1><b>something went wrong</b><br></h1>";
    }
if ($connect->query($sql) === TRUE) {
    echo "<h1>New record created successfully<br></h1>";
}
?>
</html>