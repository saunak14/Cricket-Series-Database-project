<html>
<?php
$connect = mysqli_connect("localhost","root","","cricket");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
    if(isset($_POST['submit'])){
    $one = $_POST["stadium_id"];
    $two = $_POST["match_id"];
    $three = $_POST["name"];
    $four = $_POST["venue"];
    $five = $_POST["capacity"];
    }
    

    $one = $_POST["stadium_id"];
    $two = $_POST["match_id"];
    $three = $_POST["name"];
    $four = $_POST["venue"];
    $five = $_POST["capacity"];
echo "<h1>Connected successfully<br></h1>";
$sql = "INSERT INTO stadium (stadium_id,match_id,name,venue,capacity) VALUES ('$one', '$two','$three','$four','$five')";
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