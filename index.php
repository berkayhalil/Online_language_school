<!DOCTYPE html>
<html lang="bg">

<head>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Онлайн Езикова Школа Bekolingo
    </title>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body id="body-home">

    <!--Nav bar -->
    <?php include 'navbar.php'; ?>

    <section class="home-section" id="home">

        <a onclick="addSelectToContactForm(event); openContactForm();" class="btn-flip course" data-back="Заяви"
            data-front="Курс"></a>
        <a onclick="openContactForm()" class="btn-flip" data-back="Заяви" data-front="Безплатна консултация"></a>

        <div id="school">
            Вашата онлайн езикова школа
        </div>
        <h1 id="h-home">Учи английски език с нас в реално време с учител - бързо и лесно! Онлайн от всяко място, по
            всяко време.
            Нужно е само устройство – лаптоп, таблет или телефон и добра интернет връзка.</h1>


        <!--contact Form and overlay -->
        <div id="myOverlay" class="overlay">
            <span class="closebtn" onclick="closeContactForm()" title="Close Overlay">×</span>
            <div class="overlay-content">
                <?php include 'contact-form.php'; ?>
            </div>
        </div>

        <script src="navbar.js"></script>
    </section>

    <section id="why-us-section">

        <div id="why-us-div">
            <h1 id="why-us-h1">Защо да изберете нашите курсове?</h1>
        </div>
        <hr>

        <div id="filologists-info-div">
            <p id="filologists-info-p">Нашият екип от опитни филолози е на разположение да ви предложи обучение,
                което съчетава съвременни методи с доказани практики. Стремим се да създадем
                уникална учебна атмосфера, в която всеки курсист може да се развива и да постигне
                напредък. Нашата цел е да отговорим на вашите конкретни нужди, като предложим програма,
                която е напълно адаптирана към вашите цели и предпочитания. Разчитаме на нашия дългогодишен
                опит и постоянно обновяваните подходи, за да ви осигурим качествено и ефективно обучение.
                Свържете се с нас и нека заедно изградим най-добрия път към вашия успех в ученето!
            </p>
        </div>



    </section>

</body>

</html>