<?php
include ("../database.php");

$ticketNo = $_GET['ticket_no'];

$query = "SELECT * FROM Ticket WHERE TicketNo = $ticketNo";

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
$conn->close();
?>
