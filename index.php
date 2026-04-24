<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student System</title>
<style>
body {
    font-family: Arial;
    background: #f4f4f4;
    padding: 20px;
}
table {
    border-collapse: collapse;
    width: 100%;
    background: white;
}
th, td {
    padding: 10px;
    border: 1px solid #ddd;
}
th {
    background: #333;
    color: white;
}
a {
    text-decoration: none;
    color: blue;
}
</style>
</head>
<body>

<h2>Student List</h2>
<a href="add.php">Add Student</a>

<table border="1">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM students");

while($row = $result->fetch_assoc()) {
   echo "<tr>
    <td>{$row['name']}</td>
    <td>{$row['email']}</td>
    <td>{$row['course']}</td>
    <td>
    <a href='edit.php?id={$row['id']}'>Edit</a> |
    <a href='delete.php?id={$row['id']}'>Delete</a>
    <a href='logout.php' style='float:right; color:red;'>Logout</a>
</td>
</tr>";
}
?>

</table>

</body>
</html>