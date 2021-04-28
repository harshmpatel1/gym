<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/payment.css">
    <title>Power GYM</title>
</head>
<style>
    .mid::before {
        content: "";
        background: url("./img/img4.jpg");
        background-size: cover;
        background-blend-mode: soft-light;
        background-repeat: no-repeat;
        position: absolute;
        opacity: 0.5;
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
                    <li class="active"><a href="../gym/index.php">Home</a></li>
                    <li><a href="../gym/about.php">About</a></li>
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
    <section class="mid">
        <h1>A Safer Simple Way to Exercise</h1>
        <div class="para">An Exercise system keep you safe,make things simple and gives you support so you feel
            capable and confident.Fitness websites help you reach a bigger audience,maintain a portfolio.</div>
        <div class="buttons">
            <button class="btn-mid">About Us</button>
            <button class="btn-mid">Subscribe</button>
        </div>
    </section>
    <section class="cards">
        <div class="card">
            <img src="./img/img5.jpg" alt="image">
            <h3>For Best Trainer </h3>
            <p>Fitness websites help you reach a bigger audience,maintain a portfolio, and help the user join your
                classes easily.</p>
            <button class="btn-card">Get Trainer</button>
        </div>
        <div class="card">
            <img src="./img/img7.jpg" alt="image">
            <h3>Power GYM</h3>
            <p>Fitness websites help you reach a bigger audience,maintain a portfolio, and help the user join your
                classes easily</p>
            <button class="btn-card">About GYM</button>
        </div>
        <div class="card">
            <img src="./img/img2.jpg" alt="image">
            <h3>For Any Query</h3>
            <p>Fitness websites help you reach a bigger audience,maintain a portfolio, and help the user join your
                classes easily</p>
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