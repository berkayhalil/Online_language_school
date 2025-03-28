<?php session_start() ?>
<!DOCTYPE html>
<html lang="bg">

<head>
    <meta name="format-detection" content="telephone=no">
    <base href="/Online_language_school/">
    <link rel="stylesheet" href="css.folder\styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Онлайн курсове по немски език</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>


<body>
    <header>
        <?php include 'navbar.php' ?>
        <div class="div-top-h1">
            <h1 class="h1-top">Онлайн курсове по немски език</h1>
        </div>
    </header>

    <main>
        <section class="courses-section">
            <div class="courses-div">
                <p class="courses-p">
                    Немският език не е просто още един език – той е ключ към нови възможности,
                    култура и бизнес перспективи. В „Беколинго“ ще получите обучение, което отговаря
                    на всички ваши нужди, независимо дали сте напълно начинаещ или вече имате опит.
                    Нашите курсове не са просто за изучаване на граматика, те ще ви потопят в реални
                    ситуации, които ще ви помогнат да усвоите езика по естествен начин.
                </p>

                <ul class="ul-general">
                    <li>
                        Практически ориентирани курсове: Ще учите не само как да пишете и четете на
                        немски, но и как да комуникирате ефективно в ежедневни и професионални ситуации.
                    </li>
                    <li>
                        Персонализирано обучение: Всеки курс е създаден така, че да отговаря на вашето ниво и
                        стил на учене. Нашите преподаватели ще ви водят стъпка по стъпка през всяко ниво.
                    </li>

                    <li>
                        Интерактивни уроци, които включват видео материали, разговорни практики и работни листове,
                        за да ви помогнат да усъвършенствате своите говорни и слушателни умения.
                    </li>

                    <li>
                        Подготовка за сертификати: Търсите работа в Германия или Австрия? Ние предлагаме подготовка за
                        международно признатите сертификати Goethe-Zertifikat и ÖSD,
                        които ще открият нови професионални възможности за вас.
                    </li>

                    <li>
                        Гъвкави часове: Участвате в курс, който се вписва в натоварения ви график и ви позволява да
                        учите от
                        всяка точка на света.
                    </li>
                </ul>

                <span class="span-bold">Нашите курсове са идеални за:</span>

                <ul class="ul-general">
                    <li>
                        Хора, които искат да изследват нови култури и възможности за работа в немскоговорящи страни.
                    </li>
                    <li>
                        Студенти и специалисти, които търсят нови хоризонти в кариерата си.
                    </li>
                    <li>
                        Всеки, който иска да надгради езиковите си умения в динамична и стимулираща среда.
                    </li>
                </ul>
                <p class="en-courses-p"></p>
                <img id="england-flag-img" src="images/pexels-luna-groothedde-3862519-12782140.jpg">
            </div>
        </section>

    </main>
    <script src="js.folder/navbar.js"></script>
    <script src="js.folder/collapsible.js"></script>
    <script src="js.folder/fadeIn.js"></script>
</body>

</html>