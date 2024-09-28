<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $gender = $_POST['gender'];
                $hobbies = isset($_POST['hobby']) ? implode(', ', $_POST['hobby']) : 'None';

                echo "<div class='card'>";
                echo "<div class='card-header bg-primary text-white'><h3><i class='fas fa-user'></i> Profile<br></h3></div>";
                echo "<div class='card-body'>";
                echo "<p><strong><i class='fas fa-user'></i> Name:</strong> $name</p>";
                echo "<p><strong><i class='fas fa-envelope'></i> Email:</strong> $email</p>";
                echo "<p><strong><i class='fas fa-venus-mars'></i> Gender:</strong> $gender</p>";
                echo "<p><strong><i class='fas fa-heart'></i> Hobbies:</strong> $hobbies</p>";
                echo "</div>";
                echo "</div>";
            }
        ?>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>