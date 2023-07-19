 <?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "feedback";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Create a table in the db
$sql = "CREATE TABLE `fb_tb` ( `name` VARCHAR(20) NOT NULL  , `contact` INT(11) NOT NULL  ,`email` VARCHAR(30)NOT NULL;
$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table wa…
[19:25, 16/07/2023] Vishal Clg: if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "feedback";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `ab_tb` (`ID`, `name`, `contact`, `email`) VALUES ('1', 'Ajay', '902697949', 'varmaaja182gmailcom');";



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>