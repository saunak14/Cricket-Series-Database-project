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

    $bowler_id = mysqli_real_escape_string($conn,$_POST['bowler_id']);



    //mysqli_connect("localhost","root","");
    //mysqli_select_db("cricket");

    //$sql = "SELECT userid,password FROM adminlogin";
    $sql = "SELECT bowler_id,five_wicket_hauls,maiden_overs from bowler_milestones where bowler_id='$bowler_id'";
    //$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "BowlerID: " . $row["bowler_id"].
" <br>5 wicket hauls: " . $row["five_wicket_hauls"].
"<br>maiden overs: " . $row["maiden_overs"].
"<br><br><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
