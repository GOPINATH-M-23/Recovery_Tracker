<?php include 'db.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $blood_group = $_POST['blood_group'];

    $sql = "INSERT INTO Donor (name, age, blood_group)
            VALUES ('$name', '$age', '$blood_group')";

    $conn->query($sql);
    echo "Donor Added Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Add Donor</h2>
<form method="POST">
<input type="text" name="name" placeholder="Name" required>
<input type="number" name="age" placeholder="Age" required>

<select name="blood_group">
<option>A+</option>
<option>B+</option>
<option>O+</option>
<option>AB+</option>
<option>A-</option>
<option>B-</option>
<option>O-</option>
<option>AB-</option>
</select>

<button type="submit">Add Donor</button>
</form>
</div>

</body>
</html>
