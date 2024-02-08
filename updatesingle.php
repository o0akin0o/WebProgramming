<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet" />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;1,400;1,600&family=Montserrat:ital,wght@0,300;0,400;0,700;1,500&display=swap" rel="stylesheet">
        <title>Restaurant</title>
    </head>
    <body>
    
    <?php include ('header.php');?>
    <?php
        include 'dbshell.php';
        $a = $_GET['sid'];
        $result = mysqli_query($conn,"SELECT * FROM studentsinfo WHERE id= '$a'");
        $row= mysqli_fetch_array($result);
        ?>
        <!-- FORM -->
        <div class="container">
        <h2 class="mt-4">Edit Your Information Below:</h2>
        <form name="form1" class="md-4" method="post" action="update_info.php">
        <input type="hidden" name="sid" value="<?php echo $a; ?>" id="" />
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="fname">First Name:</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" value="<?php echo $row['first_name'] ?>" required>
                    </div>
                    <div class="col">
                        <label for="lname">Last Name:</label>
                        <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" value="<?php echo $row['last_name'] ?>" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" value="<?php echo $row['city'] ?>"required>
                    </div>
                    <div class="col">
                        <label for="groupid">Group ID:</label>
                        <select class="form-control" id="groupid" name="groupid" value="<?php echo $row['groupId'] ?>">
                            <option value="BBCAP19">BBCAP19</option>
                            <option value="BBCAP20">BBCAP20</option>
                            <option value="BBCAP21">BBCAP21</option>
                            <option value="BBCAP22">BBCAP22</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary m-3" name="submit">Update Record</button>
        </form>
        </div>
    <?php include 'footer.php'; ?>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    </body>
</html>