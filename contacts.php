<!DOCTYPE html>
<html lang="bg">

<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="/css.folder/styles.css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body id="body-contacts">
    <main class="main-content-contacts">

        <script src="/js.folder/navbar.js"></script>
        <?php include 'navbar.php' ?>

        <header>
            <div class="div-top-h1 ">
                <h1 class="h1-top">КОНТАКТИ</h1>
            </div>
        </header>

        <section class="contact-details">

            <div class="contacts-container">

                <div class="contact-info">
                    <p><i class="fas fa-phone"></i> 089 588 1182</p>
                    <p><i class="fas fa-envelope"></i> bekolingo.info@gmail.com</p>
                    <p><i class='fas fa-clock'></i> понеделник - петък | 9:00-18:00</p>
                    <p><i class='fas fa-clock'></i> събота - неделя | 10:00-14:00</p>
                </div>

                <div class="image-container">
                    <img src="/images/pexels-olly-789822.jpg" alt="img" />
                </div>

            </div>

            <div class="vertical-line"></div> <!-- Vertical line -->

            <div id="form-container">
                <?php include 'contact-form.php'; ?>
            </div>
            <script src="/js.folder/contacts.js"></script>

        </section>
        </div>
    </main>

</body>

</html>