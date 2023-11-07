if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$name = $conn->real_escape_string($_POST['name']);
$age = (int)$_POST['age'];

// SQL to insert data into the table
$sql = "INSERT INTO your_table (name, age) VALUES ('$name', $age)";

if ($conn->query($sql) === TRUE) {
echo "Data inserted successfully!";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
</body>
</html>
