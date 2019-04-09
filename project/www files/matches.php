<html>
<?php
$connect = mysqli_connect("localhost","root","","cricket");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
    if(isset($_POST['submit'])){
    $one = $_POST["match_id"];
    $two = $_POST["team1_id"];
    $three = $_POST["team2_id"];
    $four = $_POST["outcome"];
    $five = $_POST["playing_date"];
    }
    

    $one = $_POST["match_id"];
    $two = $_POST["team1_id"];
    $three = $_POST["team2_id"];
    $four = $_POST["outcome"];
    $five = $_POST["playing_date"];
echo "<h1>Connected successfully<br></h1>";
$sql = "INSERT INTO matches (match_id,team1_id,team2_id,outcome,playing_date) VALUES ('$one', '$two','$three','$four','$five')";
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