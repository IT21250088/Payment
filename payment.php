<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $paymentMethod = $_POST["paymentMethod"];
    $amount = $_POST["amount"];
    $Cname = $_POST["Cname"];
    $cardNumber = $_POST["cardNumber"];
    $expiryDate = $_POST["expiryDate"];
    $cvv = $_POST["cvv"];
    $reason = $_POST["reason"];

    // SQL query to insert data into the table
    $sql = "INSERT INTO your_table_name (paymentMethod, amount, Cname, cardNumber, expiryDate, cvv, reason)
    VALUES ('$paymentMethod', '$amount', '$Cname', '$cardNumber', '$expiryDate', '$cvv', '$reason')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
