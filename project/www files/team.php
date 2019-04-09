<html>
<?php
$connect = mysqli_connect("localhost","root","","cricket");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
    if(isset($_POST['submit'])){
    $one = $_POST["team_id"];
    $two = $_POST["name"];
    $three = $_POST["coach"];
    $four = $_POST["captain"];
    }
    
    $one = $_POST["team_id"];
    $two = $_POST["name"];
    $three = $_POST["coach"];
    $four = $_POST["captain"];
echo "<h1>Connected successfully<br></h1>";
$sql = "INSERT INTO team (team_id,name,coach,captain) VALUES ('$one', '$two','$three','$four')";
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