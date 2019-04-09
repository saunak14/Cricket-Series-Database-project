<?php
    
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'cricket');
    $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    //$username=stripcslashes($username);
    //$password=stripcslashes($password);
    //$username = mysqli_real_escape_string($db,$_POST['name']);
    //$password = mysqli_real_escape_string($db,$_POST['team_id']);

    $team_id = mysqli_real_escape_string($conn,$_POST['team_id']);



    //mysqli_connect("localhost","root","");
    //mysqli_select_db("cricket");

    //$sql = "SELECT userid,password FROM adminlogin";
    $sql = "SELECT team_id, name, coach, captain from team where team_id='$team_id'";
    //$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Team ID: " . $row["team_id"]. "<br>Name: " . $row["name"]."<br>Coach: ".$row["coach"]."<br>Captain: ".$row["captain"]."<br>";
//"- Time: " . $row["time"]."- FIR Date: " . $row["fir_date"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
