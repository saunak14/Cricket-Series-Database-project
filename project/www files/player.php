<html>
<?php
$connect = mysqli_connect("localhost","root","","cricket");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
    if(isset($_POST['submit'])){
    $one = $_POST["player_id"];
    $two = $_POST["name"];
    $three = $_POST["dob"];
    $four = $_POST["role"];
    $five = $_POST["team_id"];
    }
    

    $one = $_POST["player_id"];
    $two = $_POST["name"];
    $three = $_POST["dob"];
    $four = $_POST["role"];
    $five = $_POST["team_id"];
echo "<h1>Connected successfully<br></h1>";
$sql = "INSERT INTO player (player_id,name,dob,role,team_id) VALUES ('$one', '$two','$three','$four','$five')";
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