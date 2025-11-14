<?php
session_start();

if (!isset($_SESSION['form_submitted']) || $_SESSION['form_submitted'] !== true) {
    header("Location: index.php");
    exit();
}

unset($_SESSION['form_submitted']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <title>Skoda Hyderabad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=2.0">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .thank-you-message {
            text-align: center;
        }

        .btn-success{
            background-color: #4ba82e;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div class="logo">
                    <a href="/" title="Logo">
                        <img src="assets/images/logo/logo.png" alt="Logo" style="width: 200px">
                    </a>
                </div>
                <div class="right">
                    <a href="tel:7799250000">7799250000</a>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="thank-you-message">
                <h2>Thank You!</h2>
                <p>Thanks a bunch for filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for being you.</p>
                <a href="/index.php" class="btn btn-success">Return to Home</a>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> <a href="https://modygroup.co.in/" target="_blank">Mody Group</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>