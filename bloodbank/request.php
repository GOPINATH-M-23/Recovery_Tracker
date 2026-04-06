<?php include 'db.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_id = $_POST['patient_id'];
    $bank_id = $_POST['bank_id'];
    $units = $_POST['units'];

    $sql = "INSERT INTO Request (patient_id, bank_id, request_date, units_required, status)
            VALUES ('$patient_id', '$bank_id', CURDATE(), '$units', 'Pending')";

    $conn->query($sql);
    echo "Blood Request Sent!";
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Request Blood</h2>
<form method="POST">
<input type="number" name="patient_id" placeholder="Patient ID" required>
<input type="number" name="bank_id" placeholder="Blood Bank ID" required>
<input type="number" name="units" placeholder="Units Required" required>

<button type="submit">Request</button>
</form>
</div>

</body>
</html>
