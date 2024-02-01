<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Exercise 3</title>
</head>
<body>
<?php include 'header.php'; ?>

<div class="container mt-5">
    <form class="mb-4" method="post" action="">
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required>
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        echo '<h3>Hello ' . htmlspecialchars($firstname) . ' ' . htmlspecialchars($lastname) . ', You are welcome to my site.</h3>';
    }
    ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Quan</td>
            <td>Le</td>
        </tr>
        
        </tbody>
    </table>
    <?php
    $str1 = "Hello";
    $str2 = "World";
    echo "<p>Joined String: $str1 $str2</p>";
    echo "<p>Length of the String: " . strlen($str1 . $str2) . "</p>";
    ?>

    <?php
    $num1 = 298;
    $num2 = 234;
    $num3 = 46;
    $sum = $num1 + $num2 + $num3;
    echo "<p>Sum of the numbers: $sum</p>";
    ?>

    <?php
    $browser = $_SERVER['HTTP_USER_AGENT'];
    echo "<p>Your browser: $browser</p>";
    ?>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
