<?php session_start() ?>
<!DOCTYPE html>
<html lang="bg">

<head>
    <base href="/Online_language_school/">
    <link rel="stylesheet" href="css.folder/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body id="body-contacts">

    <header>
        <?php include 'navbar.php' ?>
        <div class="div-top-h1 ">
            <h1 class="h1-top">КОНТАКТИ</h1>
        </div>
    </header>

    <main class="main-content-contacts">

        <section class="contact-details">

            <div class="contacts-container">
                <p id="contatcs-p">Можете да се свържете с нас директно по телефон или да ни изпратите вашите контакти.
                    Нашият екип ще
                    се свърже с вас възможно най-скоро.</p>
                <div class="contact-info">
                    <p><i class="fas fa-phone"></i> 089 588 1182</p>
                    <p><i class="fas fa-envelope"></i> info.bekolingo@gmail.com</p>
                    <p><i class='fas fa-clock'></i> понеделник - петък | 9:00-18:00</p>
                    <p><i class='fas fa-clock'></i> събота - неделя | 10:00-14:00</p>
                </div>

                <div class="image-container">
                    <img src="images/pexels-olly-789822.jpg" alt="img" />
                </div>

            </div>

            <div class="vertical-line"></div> <!-- Vertical line -->

            <div id="form-container">
                <?php include 'contact-form.php'; ?>
            </div>
            <script src="js.folder/contacts.js"></script>

        </section>
        </div>
    </main>

    <?php include 'footer.php'; ?>
    <script src="js.folder/navbar.js"></script>
</body>

</html>