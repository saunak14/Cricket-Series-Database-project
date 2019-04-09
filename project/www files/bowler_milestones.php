<html>
<?php
$connect = mysqli_connect("localhost","root","","cricket");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
    if(isset($_POST['submit'])){
    $one = $_POST["bowler_id"];
    $two = $_POST["five_wicket_hauls"];
    $three = $_POST["maiden_overs"];
    }
    

    $one = $_POST["bowler_id"];
    $two = $_POST["five_wicket_hauls"];
    $three = $_POST["maiden_overs"];
echo "<h1>Connected successfully<br></h1>";
$sql = "INSERT INTO bowler_milestones (bowler_id,five_wicket_hauls,maiden_overs) VALUES ('$one', '$two','$three')";
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