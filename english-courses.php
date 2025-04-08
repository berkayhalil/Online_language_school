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
    <title>Курсове по английски</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body id="body-english-courses">
    <header>
        <?php include 'navbar.php' ?>
        <div class="div-top-h1">
            <h1 class="h1-top">Онлайн курсове по английски език</h1>
        </div>
    </header>

    <main>
        <section class="courses-section">
            <div class="courses-div">
                <p class="courses-p">
                    Ако искате да научите или да усъвършенствате английския си език, УЧЕБЕН ЦЕНТЪР „БЕКОЛИНГО“ е вашето
                    място!
                    Предлагаме качествено онлайн обучение, което се адаптира към нуждите на всеки ученик. С повече от 10
                    години
                    опит в обучението по езици, нашият екип от специалисти предлага иновативни и забавни методи за
                    учене.
                    Нашите курсове по английски език са подходящи както за начинаещи, така и за напреднали. Ние
                    предлагаме:
                </p>

                <ul class="ul-general">
                    <li>
                        Онлайн групови курсове с преподавател, които ще ви помогнат да подобрите комуникативните си
                        умения
                    </li>
                    <li>
                        Индивидуални уроци с преподавател, който се фокусира върху вашите нужди и прогрес
                    </li>

                    <li>
                        Гъвкав график на курсовете, подходящ за хора с натоварен работен ден
                    </li>

                    <li>
                        Специализирани курсове по бизнес английски и английски за професионални нужди
                    </li>

                    <li>
                        Подготовка за международни сертификати по английски език (IELTS, TOEFL)
                    </li>

                    <li>
                        Разговорен курс по английски, който ще ви помогне да говорите свободно и уверено
                    </li>
                </ul>
                <p class="courses-p">Независимо дали искате да научите основите на езика или да развиете
                    напреднали умения, нашето онлайн обучение е идеалният избор за вас. Присъединете се
                    към нас и развийте своите умения по английски език в удобна и гъвкава среда!</p>
                <img id="england-flag-img" src="images/pexels-photo-21070602.jpg">
            </div>
        </section>

        <section class="courses-section">
            <div class="courses-div">

                <button type="button" class="collapsible"><span class="fa fa-group icons"></span>Групово онлайн
                    обучение</button>
                <div class="content">
                    <p>Езиковите курсове в Bekolingo са съобразени с Общата Европейска
                        Езикова Рамка (ОЕЕР) и се водят по учебната система на <span class="span-bold">Oxford University
                            Press, English File 3rd издание</span>. Тази система е много популярна сред нашите
                        ученици заради леснотата и ефективността на материала.<br><br>
                        Онлайн уроците ни по английски са организирани в нива:<span class="span-bold"> А1.1, А1.2,
                            А2.1,
                            А2.2, В1.1 и В1.2, B2.1, B2.2</span>
                        като всяко ниво включва <span class="span-bold">60 учебни часа (по 40 минути
                            всеки)</span>.<br><br>
                        Групите са с <span class="span-bold"> максимален брой от 6-8 ученици</span>, за да осигурим
                        персонализирано внимание на всеки.
                    </p>
                </div>

                <button type="button" class="collapsible"><span class="fa fa-user icons"></span>Индивидуално онлайн
                    обучение</button>
                <div class="content">
                    <p>Езиков център „Bekolingo“ предлага индивидуално обучение с три различни пакета от учебни
                        часове (един учебен час е с продължителност 40 минути):
                    <ul class="en-courses-ul">
                        <li>10 учебни часа – курсът трябва да бъде завършен в рамките на 1 месец.</li>
                        <li>24 учебни часа – обучението може да продължи до 3 месеца.</li>
                        <li>48 учебни часа – срокът за завършване е до 6 месеца.</li>
                    </ul>

                    <span class="span-bold">График на уроците:</span>
                    Индивидуалното обучение започва в рамките на десет работни дни след записване. Учениците сами
                    определят удобните за тях дни и часове за провеждане на онлайн занятията в езиков център
                    „Bekolingo“.
                    </p>
                </div>
            </div>
        </section>

        <section class="courses-cards-section">
            <div id="main-div-courses-cards">
                <div class="courses-card fadeInLeft">
                    <span class="card-headings">Пакет 1</span>
                    <ul class="pricing-ul">
                        <li>
                            10 уч.ч. с преподавател
                        </li>
                        <li>
                            Уроци в реално време
                        </li>
                        <li>
                            Индивидуално обучение
                        </li>
                        <li>
                            Виртуална класна стая
                        </li>
                        <li>
                            Електронни учебници
                        </li>
                        <li>
                            Избор на ниво (A1 – C1)
                        </li>
                    </ul>
                    <button class="enroll-btn"><span>Заяви</span></button>
                </div>
                <div class="courses-card fadeInBottom">
                    <span class="card-headings">Пакет 2</span>
                    <ul class="pricing-ul">
                        <li>
                            24 уч.ч. с преподавател
                        </li>
                        <li>
                            Уроци в реално време
                        </li>
                        <li>
                            Индивидуално обучение
                        </li>
                        <li>
                            Виртуална класна стая
                        </li>
                        <li>
                            Електронни учебници
                        </li>
                        <li>
                            Избор на ниво (A1 – C1)
                        </li>
                    </ul>
                    <button class="enroll-btn"><span>Заяви</span></button>
                </div>
                <div class="courses-card fadeInRight">
                    <span class="card-headings">Пакет 3</span>
                    <ul class="pricing-ul">
                        <li>
                            48 уч.ч. с преподавател
                        </li>
                        <li>
                            Уроци в реално време
                        </li>
                        <li>
                            Индивидуално обучение
                        </li>
                        <li>
                            Виртуална класна стая
                        </li>
                        <li>
                            Електронни учебници
                        </li>
                        <li>
                            Избор на ниво (A1 – C1)
                        </li>
                    </ul>
                    <button class="enroll-btn"><span>Заяви</span></button>
                </div>
            </div>
        </section>

        <section id="en-courses-price-table-section" class="courses-section">
            <div class="courses-priceTable-div">
                <div class="price-h2-div">
                    <h2 class="price-h2">Цени за индивидуално онлайн обучение:</h2>
                </div>
                <div class="main-div-table-prices">
                    <table class="price-table-general">
                        <thead>
                            <tr>
                                <th>Ниво</th>
                                <th>10 уч.ч.</th>
                                <th>24 уч.ч.</th>
                                <th>48 уч.ч.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Ниво"><span class="course-span">A1</span></td>
                                <td data-label="10 уч.ч">280 лв.</td>
                                <td data-label="24 уч.ч">600 лв.</td>
                                <td data-label="48 уч.ч">1140 лв.</td>
                            </tr>
                            <tr>
                                <td data-label="Ниво"><span class="course-span">A2</span></td>
                                <td data-label="10 уч.ч">280 лв.</td>
                                <td data-label="24 уч.ч">600 лв.</td>
                                <td data-label="48 уч.ч">1140 лв.</td>
                            </tr>
                            <tr>
                                <td data-label="Ниво"><span class="course-span">B1</span></td>
                                <td data-label="10 уч.ч">340 лв.</td>
                                <td data-label="24 уч.ч">720 лв.</td>
                                <td data-label="48 уч.ч">1360 лв.</td>
                            </tr>
                            <tr>
                                <td data-label="Ниво"><span class="course-span">B2</span></td>
                                <td data-label="10 уч.ч">340 лв.</td>
                                <td data-label="24 уч.ч">720 лв.</td>
                                <td data-label="48 уч.ч">1360 лв.</td>
                            </tr>
                            <tr>
                                <td data-label="Ниво"><span class="course-span">C1</span></td>
                                <td data-label="10 уч.ч">380 лв.</td>
                                <td data-label="24 уч.ч">840 лв.</td>
                                <td data-label="48 уч.ч">1600 лв.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="courses-section">
            <?php include 'contact-form.php' ?>
        </section>

    </main>

    <?php include 'footer.php' ?>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("main-div-courses-cards").addEventListener("click", function (event) {
                if (event.target.closest(".enroll-btn")) {
                    let form = document.getElementById("form");
                    let offset = 100; // Adjust if needed
                    let formPosition = form.getBoundingClientRect().top + window.scrollY - offset;

                    window.scrollTo({ top: formPosition, behavior: "smooth" });
                }
            });
        });
    </script>

    <script src="js.folder/navbar.js"></script>
    <script src="js.folder/collapsible.js"></script>
    <script src="js.folder/fadeIn.js"></script>
</body>

</html>