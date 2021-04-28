<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/payment.css">
</head>
<style>
    .cards-about::before {
        content: "";
        background: url("./img/img5.jpg");
        background-size: cover;
        background-blend-mode: soft-light;
        background-repeat: no-repeat;
        position: absolute;
        opacity: 0.4;
        top: 0px;
        left: 0px;
        z-index: -1;
        height: 100vh;
        width: 100vw;
    }
</style>
<body>
    <header class="h-nav ">
        <div class="left v-class">
            <div class="logo"><img src="./img/logo1.jpg" alt="Logo" srcset=""></div>
            <div class="nav">
                <ul class="navlist">
                    <li><a href="../gym/index.php">Home</a></li>
                    <li><a href="../gym/about.php" class="active">About</a></li>
                    <li><a href="../gym/payment.php">Payment</a></li>
                    <li><a href="../gym/contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="right v-class">
            <input type="text" placeholder="Search">
            <button class="btn">Search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </header>
    <section class="cards-about">
        <div class="card-about">
            <img src="./img/aa.jpg" alt="image">
            <h3> Manager a.k.shah </h3>
            <p class="title">Head trainer</p>
            <p>Our experienced head trainer </p>
            <p>jane@example.com</p>
            <button class="btn-card">Contact Me</button>
        </div>
        <div class="card-about">
            <img src="./img/bb.jpg" alt="image">
            <h3>Trainer k.l.sing</h3>
            <p class="title">Manager of gym</p>
            <p>Managing about instuments,payment etc </p>
            <p>ak1111@gmail.com</p>
            <button class="btn-card">Contact Me</button>
        </div>
        <div class="card-about">
            <img src="./img/cc.jpg" alt="image">
            <h3>Co-trainer m.s.mishra</h3>
            <p class="title"></p>
            <p>co trainer of gym </p>
            <p>ms@gmail.com</p>
            <button class="btn-card">Contact Me</button>
        </div>
    </section>
    <footer>
        <div class="footer">
            <span>Copyright &copy; Power Gym 2020-21</span>
            <span>Privacy | Terms</span>
        </div>
    </footer>
</body>
<script src="./js/index.js"></script>

</html>