<!DOCTYPE html>
<html lang="bg">
<head>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body id="body-contacts">
<main class="main-content-contacts">

    <header>
        <div id="div-h1-con">
            <h1 id="h1-contacts">КОНТАКТИ</h1>
        </div>
    </header>

    <div class="contact-sections">

    <section class="contact-details">

    <div class="contacts-container">
        <p>Address:</p>
        <p>Phone: 089 588 1182</p>
        <p>Email: bekolingo.info@gmail.com</p>
    </div>

    <div class="vertical-line"></div> <!-- Vertical line -->

    <div id="form-container">
        <?php include 'contact-form.php'; ?>
    </div>

         <script src="contacts.js"></script>

    </section>
    </div>

<script src="navbar.js"></script>
<?php include 'navbar.php'?>

</main>

</body>
</html>