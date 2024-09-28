<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .navbar {
            background-color: rgb(38, 47, 69);
        }
        .navbar-nav .nav-link {
            color: rgb(255, 255, 255);
        }
        .navbar-nav .nav-link:hover:not(.active) {
            background-color: #111;
        }
        .active {
            background-color: rgb(136, 172, 240);
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center">Kontak Kami</h2>
        <form method="POST" action="profile.php">
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder=""/>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="example@mail.com"/>
            </div>
            <p>Jenis Kelamin</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="Laki-Laki" id="Laki-Laki"/>
                <label class="form-check-label" for="Laki-Laki"> Laki-Laki </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="Perempuan" id="Perempuan"/>
                <label class="form-check-label" for="Perempuan"> Perempuan </label>
            </div>
            <p class="mt-3">Hobby</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hobby[]" value="Coding" id="Coding"/>
                <label class="form-check-label" for="Coding"> Coding </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hobby[]" value="Bermain Basket" id="Bermain-Basket"/>
                <label class="form-check-label" for="Bermain-Basket"> Bermain Basket </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hobby[]" value="Bermain Game" id="Bermain-Game"/>
                <label class="form-check-label" for="Bermain-Game"> Bermain Game </label>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-4">Submit</button>
            <button type="reset" class="btn btn-danger w-100 mt-4">Reset</button>
        </form>
    </div>
</body>
</html>
