
<?php
    // this database.php file will not be on git as it contains private details but it essentially 
    // just establishes a connection to the MySQL database
    include("database.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Ticket</title>
</head>

<body>
    <!-- This part will display the frontend buttons, etc to run queries,etc-->
    
    <!-- Uses a form to input the ticket number, then passes it to searchTicketByNo.php file to run -->
    <h2>Search Ticket by Number</h2>
    <form action="queries/searchTicketByNo.php" method="GET">
        <label for="ticket_no">Ticket Number:</label>
        <input type="text" id="ticket_no" name="ticket_no" required>
        <button type="submit">Search</button>
    </form>

</body>
</html>
