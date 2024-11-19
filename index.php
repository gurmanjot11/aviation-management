
<?php
    // this database.php file will not be on git as it contains private details but it essentially 
    // just establishes a connection to the MySQL database
    include("database.php")
?>

<?php
$query = "SELECT * FROM Ticket WHERE TicketNo = 1230043825";

$result = $conn ->query($query);
if ($result->num_rows > 0) {
    // Fetch the single row as an associative array
    $row = $result->fetch_assoc();
    
    // Display the result
    echo "Ticket Number: " . $row["TicketNo"] . "<br>";
    echo "Seat Number: " . $row["SeatNo"] . "<br>";
    echo "Class: " . $row["Class"] . "<br>";
    echo "Flight Number: " . $row["FlightNo"] . "<br>";
    echo "Flight Departure Date: " . $row["FlightDepDate"] . "<br>";
}
else{
    echo "No ticket found with TicketNo: $ticketNo";
}
?>
