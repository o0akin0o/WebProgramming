<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 4</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <h1>If-Else</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];

        if ($age >= 18) {
            echo "<p>Hi $name, you are eligible for voting.</p>";
        } else {
            echo "<p>Hi $name, you are not eligible for voting.</p>";
        }
    }
    ?>

    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <button type="submit">Check Eligibility</button>
    </form>
    <h1>Switch Case</h1>
    <form>
        <?php
        $month = date("F");

        switch ($month) {
            case "August":
                echo "It's August, so it's still holiday.";
                break;
            default:
                echo "Not August, this is $month so I don't have any holidays.";
        }
        ?>
    </form>
    <h1>For Loop</h1>
    <form>
        <?php
        $n = 5; 
        echo "<p>Multiplication table for $n:</p>";

        for ($i = 1; $i <= 10; $i++) {
            echo "$n x $i = " . ($n * $i) . "<br>";
        }
        ?>
    </form>
    <h1>While Loop</h1>
    <form>
        <?php
        $n = 5;
        echo "<p>Numbers from 1 to $n:</p>";

        $i = 1;
        while ($i <= $n) {
            echo "$i ";
            $i++;
        }
        ?>
    </form>
    <h1>Foreach Loop</h1>
    <form>
        <?php
            $car = array("Ford", "Toyota", "BMW", "Lexus");
            echo "<p>The array:</p>";
            foreach ($car as $car) {
                echo "$car<br>";
            }
        ?>
    </form>
    <?php include 'footer.php'; ?>
</body>
</html>
