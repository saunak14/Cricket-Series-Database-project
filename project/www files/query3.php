<?php
    
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'cricket');
    $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    //$username=stripcslashes($username);
    //$password=stripcslashes($password);
    //$username = mysqli_real_escape_string($db,$_POST['name']);
    //$password = mysqli_real_escape_string($db,$_POST['player_id']);

    $match_id = mysqli_real_escape_string($conn,$_POST['match_id']);



    //mysqli_connect("localhost","root","");
    //mysqli_select_db("cricket");

    //$sql = "SELECT userid,password FROM adminlogin";
    $sql = "SELECT match_id, team1_id, team2_id, outcome, playing_date from matches where match_id='$match_id'";
    //$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Match ID: " . $row["match_id"]. "<br>First Team's ID: " . $row["team1_id"]."<br>Second Team's ID: " . $row["team2_id"]."<br>Outcome: ".$row["outcome"]."<br>Date: ".$row["playing_date"]."<br>";
//"- Time: " . $row["time"]."- FIR Date: " . $row["fir_date"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
