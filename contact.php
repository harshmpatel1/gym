<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power Gym</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/payment.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<style>
    .container::before {
        content: "";
        background: url("./img/img12.jpg");
        background-size: cover;
        background-blend-mode: darken;
        background-repeat: no-repeat;
        position: absolute;
        opacity: 0.5;
        top: 0px;
        left: 0px;
        z-index: -1;
        height: 124vh;
        width: 100vw;
    }
</style>

<body>
    <header class="h-nav ">
        <div class="left v-class">
            <div class="logo"><img src="./img/logo.jpg" alt="Logo" srcset=""></div>
            <div class="nav">
                <ul class="navlist">
                    <li><a href="../gym/index.php">Home</a></li>
                    <li><a href="../gym/about.php">About</a></li>
                    <li><a href="../gym/payment.php">Payment</a></li>
                    <li><a href="../gym/contact.php" class="active">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="right v-class">
            <input type="text" placeholder="Search">
            <button class="btn btn-info btn-sm">Search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </header>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];


        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "contact";

        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Die if connection was not successful
        if (!$conn) {
            die("Sorry we failed to connect: " . mysqli_connect_error());
        } else {
            // Submit these to a database
            // Sql query to be executed 
            $sql = "INSERT INTO `data`(`name`, `phone`, `age`, `email`, `concern`, `dt`) VALUES ('$name','$phone','$age','$email','$desc', current_timestamp())";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
            } else {
                // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
            }
        }
    }


    ?>
    <div class="container">
        <h1>Contact Us</h1>
        <form action="./contact.php" method="post" class="form">
            <input type="text" name="name" id="" placeholder="Enter your name" class="form-input">
            <input type="number" name="phone" id="" placeholder="Enter your number" class="form-input">
            <input type="number" name="age" id="" placeholder="Enter your age" class="form-input">
            <input type="email" name="email" id="" placeholder="Enter your email" class="form-input">
            <textarea name="desc" id="" cols="30" rows="5" placeholder="Write a concern" class="form-input"></textarea>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <footer>
        <div class="footer">
            <span>Copyright &copy; Power Gym 2020-21</span>
            <span>Privacy | Terms</span>
        </div>
    </footer>
</body>
<script src="./js/index.js"></script>

</html>