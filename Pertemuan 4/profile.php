<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $hobbies = isset($_POST['hobby']) ? implode(', ', $_POST['hobby']) : 'None';

        echo "<div class='container mt-4'>";
        echo "<h3>Data yang Dikirim:</h3>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Gender: $gender</p>";
        echo "<p>Hobbies: $hobbies</p>";
        echo "</div>";
    }
?>