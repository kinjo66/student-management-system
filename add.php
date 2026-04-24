<?php include 'db.php'; ?>

<form method="POST">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    Course: <input type="text" name="course"><br>
    <button type="submit">Save</button>
</form>

<?php
if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $conn->query("INSERT INTO students (name,email,course)
    VALUES ('$name','$email','$course')");

    echo "Student added!";
}
?>