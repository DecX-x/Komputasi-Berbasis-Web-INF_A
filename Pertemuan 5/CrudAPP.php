<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM MyGuests WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-success" role="alert">Record deleted successfully</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error deleting record: ' . mysqli_error($conn) . '</div>';
    }
}

// Operasi INsert
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['insert'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-success" role="alert">New record created successfully</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . mysqli_error($conn) . '</div>';
    }
}

// operasi Update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql = "UPDATE MyGuests SET ";
    $updates = [];
    if (!empty($firstname)) {
        $updates[] = "firstname='$firstname'";
    }
    if (!empty($lastname)) {
        $updates[] = "lastname='$lastname'";
    }
    if (!empty($email)) {
        $updates[] = "email='$email'";
    }
    $sql .= implode(", ", $updates);
    $sql .= " WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-success" role="alert">Record updated successfully</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error updating record: ' . mysqli_error($conn) . '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        
        <h2>Insert User Baru</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" name="insert" class="btn btn-primary w-100">Submit</button>
            <button type="reset" class="btn btn-danger w-100 mt-2">Reset</button>
        </form>

        
        <h2 class="mt-5">List User</h2>
        <?php
        $sql = "SELECT id, firstname, lastname, email FROM MyGuests";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo '<table class="table table-striped">';
            echo '<thead><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Actions</th></tr></thead>';
            echo '<tbody>';
            while($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row["id"] . '</td>';
                echo '<td>' . $row["firstname"] . '</td>';
                echo '<td>' . $row["lastname"] . '</td>';
                echo '<td>' . $row["email"] . '</td>';
                echo '<td>';
                echo '<div class="d-flex gap-2">'; 
                
                echo '<form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" class="flex-grow-1">';
                echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
                echo '<div class="mb-2"><input type="text" class="form-control" name="firstname" placeholder="New First Name"></div>';
                echo '<div class="mb-2"><input type="text" class="form-control" name="lastname" placeholder="New Last Name"></div>';
                echo '<div class="mb-2"><input type="email" class="form-control" name="email" placeholder="New Email"></div>';
                echo '<button type="submit" name="update" class="btn btn-primary btn-sm w-100">Update</button>';
                echo '</form>';
                
                echo '<form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" style="align-self: flex-end;">';
                echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
                echo '<button type="submit" name="delete" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this record?\')">Delete</button>';
                echo '</form>';
                echo '</div>';
                echo '</td>';
                echo '</tr>';
            }
            echo '</tbody></table>';
        } else {
            echo '<div class="alert alert-warning" role="alert">0 results</div>';
        }

        mysqli_close($conn);
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>