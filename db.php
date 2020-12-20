<?php
$servername = "localhost";
$username = "root";
$password = "00zomifi";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. "<br>";
    }
} else {
    echo "adding some values";
    $insert_query = "INSERT INTO users (first_name, last_name, password, id_role) 
            VALUES ('kirill', 'ikumapai','danilovich', 1);";
    $conn->query($insert_query);
}
$conn->close();
?>