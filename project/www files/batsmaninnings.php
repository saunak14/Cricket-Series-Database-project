<html>
<?php
$connect = mysqli_connect("localhost","root","","cricket");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
    if(isset($_POST['submit'])){
    $one = $_POST["batsman_id"];
    $two = $_POST["match_id"];
    $three = $_POST["runs"];
    $four = $_POST["balls"];
    $five = $_POST["boundaries"];
    }
    

    $one = $_POST["batsman_id"];
    $two = $_POST["match_id"];
    $three = $_POST["runs"];
    $four = $_POST["balls"];
    $five = $_POST["boundaries"];
echo "<h1>Connected successfully<br></h1>";
$sql = "INSERT INTO batsman_innings (batsman_id,match_id,runs,balls,boundaries) VALUES ('$one', '$two','$three','$four','$five')";
    if(mysqli_query($connect,$sql)){
        echo "<h1><b>inserted</b><br></h1>";
    }
    else{
        echo "<h1><b>something went wrong</b><br></h1>";
    }
if ($connect->query($sql) === TRUE) {
    echo "<h1>New record created successfully<br></h1>";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

?>
</html>