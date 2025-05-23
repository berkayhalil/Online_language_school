<?php session_start() ?>
<!DOCTYPE html>
<html lang="bg">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <base href="/Online_language_school/">

    <link rel="stylesheet" href="css.folder/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="description"
        content="Научете английски език онлайн с Bekolingo – курсове с реален учител в реално време. Лесно, достъпно, от всяко място.">
    <title>
        Онлайн Езикова Школа Bekolingo | Учи Английски Онлайн с Учител
    </title>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="js.folder/fadeIn.js" defer></script>
</head>

<body id="body-home">

    <!--Nav bar -->
    <header>
        <?php include 'navbar.php'; ?>
    </header>

    <main>
        <section class="home-section" id="home">

            <div id="home-section-div">
                <h2 id="school" class="dontDisplay">
                    Вашата онлайн езикова школа
                </h2>
                <h1 id="h-home" class="dontDisplay">Учи желания език с нас в реално време с учител - бързо и лесно!
                    Онлайн от всяко място, по всяко време.Нужно е само устройство – лаптоп, таблет или телефон и добра
                    интернет връзка.
                </h1>
                <div id="btns-home-section">

                    <div id="gif-and-btn-div">
                        <a onclick="addSelectToContactForm(event); openContactForm();" class="btn-flip course "
                            data-back="Заяви" data-front="Курс"></a>
                    </div>

                    <div id="gif-and-btn-div2">
                        <a onclick="openContactForm()" class="btn-flip dontDisplay" data-back="Заяви"
                            data-front="Безплатна консултация"></a>
                        <img id="row-gif" src="images\Arrow Type Sticker (1).gif" alt="Animated GIF">
                    </div>

                </div>
            </div>


            <div id="myOverlay" class="overlay">

                <div class="overlay-content">
                    <?php include 'contact-form.php'; ?>
                </div>
            </div>


            <div id="home-section-swiper-board">

                <div class="swiper-home-section">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div id="first-swiper-div" class="swiper-slide">
                            <h2 id="school">
                                Вашата онлайн езикова школа
                            </h2>
                            <h1 class="h-home2">Учeте желания език с нас в реално време с учител - лесно, удобно и
                                ефективно! ОНЛАЙН от всяко място, по всяко време.
                                Нужно е само устройство – лаптоп, таблет или телефон и стабилна интернет връзка.
                            </h1>
                            <a onclick="addSelectToContactForm(event); openContactForm();" class="btn-flip course"
                                data-back="Заяви" data-front="Курс"></a>
                        </div>

                        <div id="second-swiper-div" class="swiper-slide">
                            <h2 class="h-home2">
                                Нашите квалифицирани преподаватели ще ти помогнат да овладееш
                                езика уверено и ефективно. Независимо дали си начинаещ или искаш
                                да надградиш знанията си, ние ще ти осигурим подкрепа и мотивация
                                на всяка стъпка от пътя!
                            </h2>
                            <a onclick="addSelectToContactForm(event); openContactForm();" class="btn-flip course"
                                data-back="Заяви" data-front="Курс"></a>
                        </div>

                        <div id="third-swiper-div" class="swiper-slide">
                            <h2 class="h-home2">
                                • Персонализирано обучение, съобразено с твоите нужди<br>
                                • Практически насочени уроци с опитни преподаватели <br>
                                • Гъвкав график, който се адаптира към теб <br>
                                • Онлайн обучение с лесен достъп отвсякъде <br>
                            </h2>
                            <a onclick="addSelectToContactForm(event); openContactForm();" class="btn-flip course"
                                data-back="Заяви" data-front="Курс"></a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

                <div id="main-div-free-consultation">
                    <div class="free-consultation">
                        <span id="free-consultation-span">Безплатна онлайн консултация</span><br>
                        Не сте сигурни на какво ниво са езиковите ви умения? Предлагаме безплатна
                        проверка с индивидуален онлайн тест, воден от преподавател. Така ще намерим най-подходящия
                        курс за вас, за да започнете обучението с увереност.
                    </div>

                    <div id="arrow-and-btn-div">
                        <div id="require-consultation-btn-div">
                            <a onclick="openContactForm()" class="btn-flip" data-back="Заяви"
                                data-front="Безплатна консултация"></a>
                        </div>
                        <div>
                            <img id="row-gif2" src="images\Look Click Sticker (1).gif" alt="Animated GIF">
                        </div>
                    </div>
                </div>

            </div>









        </section>

        <section id="why-us-section">

            <div id="why-us-div" class="h2-div-general">
                <h2 id="why-us-h2" class="h2-general">Защо да изберете нашите курсове?</h2>
            </div>
            <hr class="home-page-hr">



            <div id="filologists-info-div" class="fadeInBottom">
                <p id="filologists-info-p">Нашият екип от опитни филолози е на разположение да ви предложи обучение,
                    което съчетава съвременни методи с доказани практики. Стремим се да създадем
                    уникална учебна атмосфера, в която всеки курсист може да се развива и да постигне
                    напредък. Нашата цел е да отговорим на вашите конкретни нужди, като предложим програма,
                    която е напълно адаптирана към вашите цели и предпочитания. Разчитаме на нашия дългогодишен
                    опит и постоянно обновяваните подходи, за да ви осигурим качествено и ефективно обучение.
                    Свържете се с нас и нека заедно изградим най-добрия път към вашия успех в ученето!
                </p>
            </div>

            <div id="div-container-for-boxes">

                <div class="box fadeInBottom">
                    <img class="box-img" src="images/12742.png" alt="екип от позитивни и опитни преподаватели">
                    <p>ЕКИП ОТ ПОЗИТИВНИ И ОПИТНИ ПРEПОДАВАТЕЛИ</p>
                </div>

                <div class="box fadeInBottom">
                    <img class="box-img" src="images/12741.png" alt="img">
                    <p>ПРОГРАМА, СЪОБРАЗЕНА С ВАШИТЕ НУЖДИ</p>
                </div>

                <div class="box fadeInBottom">
                    <img class="box-img" id="quality-img" src="images/074e51ef65927a0eaf7c68d8e36013b6.png" alt="img">
                    <p>ДОСТЪПНО И ЕФЕКТИВНО ОБУЧЕНИЕ</p>
                </div>

            </div>

        </section>

        <section id="how-we-work-section">

            <div id="how-we-work-div" class="h2-div-general">
                <h2 class="h2-general">Как работим?</h2>
            </div>

            <hr class="home-page-hr">

            <div id="main-div-how-we-work">

                <div class="h4-div-description fadeInBottom">
                    <h4 class="h4-how-we-work-general">1. Определяне на ниво</h4>
                    <p class="p-how-we-work"> Преди да започнем с обучението, ще проведем безплатен тест за
                        определяне
                        на
                        нивото ви по английски език. Това ще ни помогне да изберем най-подходящата програма за вас,
                        съобразена с текущите ви знания.</p>
                </div>

                <div class="h4-div-description fadeInBottom">
                    <h4 class="h4-how-we-work-general">2. Избор на курс</h4>
                    <p class="p-how-we-work">След като определим нивото ви, ще ви предложим подходящ курс или
                        програма,
                        която
                        да отговаря на вашите нужди и цели.</p>
                </div>

                <div class="h4-div-description fadeInBottom">
                    <h4 class="h4-how-we-work-general">3. Обучение</h4>
                    <p class="p-how-we-work">Ще започнете с индивидуални или групови уроци (до 5-8 души),
                        в зависимост от вашето предпочитание, с нашите опитни и мотивирани преподаватели,
                        които ще се адаптират към вашите нужди и темпо, за да ви помогнат да напредвате бързо и
                        уверено,
                        постигайки устойчиви резултати, следвайки европейския стандарт за езиково обучение.</p>
                </div>

            </div>

        </section>

        <section id="faq-section">

            <div class="faq-section-main-div fadeInBottom">
                <div class="h2-div-general">
                    <h2 class="h2-general">Често задавани въпроси</h2>
                </div>
                <hr class="home-page-hr" id="above-collapsible-hr">

                <button type="button" class="collapsible2">Как да започна
                    курс?</button>
                <div class="content">
                    <p class="faq-answer">За да започнете курс, попълнете формата за контакт или се свържете с нас
                        за
                        безплатна консултация.</p>
                </div>

                <button type="button" class="collapsible2">Как ще ми бъде
                    предоставен учебният материал?</button>
                <div class="content">
                    <p class="faq-answer">Учебните материали ще бъдат предоставени в дигитален вариант, включително
                        PDF документи, линкове и видео уроци.</p>
                </div>

                <button type="button" class="collapsible2">Мога ли да получа
                    сертификат след завършване на курс?</button>
                <div class="content">
                    <p class="faq-answer">Да, след успешно завършване на курса ще получите сертификат, който
                        потвърждава
                        нивото на вашето владеене на езика.</p>
                </div>

                <button type="button" class="collapsible2">Колко време траят курсовете?</button>
                <div class="content">
                    <p class="faq-answer">Всеки курс може да бъде адаптиран според вашите нужди, но обикновено трае
                        от 2
                        до 4 месеца, в зависимост от нивото и интензивността.</p>
                </div>
                <button type="button" class="collapsible2">Колко време е продължителността на един учебен
                    час?</button>
                <div class="content">
                    <p class="faq-answer">Продължителността на един учебен час е 40 мин.</p>
                </div>
            </div>


        </section>

        <div class="background-polygon"></div>

        <section id="testimonials-section">

            <div class="container fadeInBottom">
                <div class="board">
                    <h2 class="text-light">Отзиви от курсисти</h2>

                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="flex">
                                    <div class="comments">
                                        "Bekolingo е перфектно решение за заети хора като мен.
                                        Часовете са удобни и гъвкави, а преподавателите са страхотни!
                                        Препоръчвам на всеки, който иска да научи английски!"
                                    </div>

                                    <div class="profile">
                                        <img src="images/pexels-olly-3979152.jpg" alt="img">

                                        <a href="#">Elena Ivanova</a>
                                        <div class="rating">
                                            <!-- Full stars (for rated points) -->
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span></span>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex">
                                    <div class="comments">
                                        "Обучението надмина всичките ми очаквания. Уроците са добре
                                        структурирани, а учителите обясняват всичко ясно и достъпно. Видях резултати
                                        още
                                        след първия месец!"
                                    </div>

                                    <div class="profile">
                                        <img src="images/pexels-danxavier-1121796.jpg" alt="img">

                                        <a href="#">Nikolay Stoyanov</a>
                                        <div class="rating">
                                            <!-- Full stars (for rated points) -->
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i> <!-- Empty star for unfilled rating -->
                                        </div>
                                        <span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex">
                                    <div class="comments">
                                        "Благодаря за професионализма и търпението! Методиката е лесна за разбиране,
                                        а
                                        уроците
                                        са толкова увлекателни, че времето минава неусетно. Отличен избор за всеки,
                                        който
                                        иска да
                                        подобри езиковите си умения!"
                                    </div>

                                    <div class="profile">
                                        <img src="images/pexels-binyaminmellish-585333.jpg" alt="img">

                                        <a href="#">Viktoria Dimitrova</a>
                                        <div class="rating">
                                            <!-- Full stars (for rated points) -->
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i> <!-- Empty star for unfilled rating -->
                                        </div>
                                        <span></span>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="flex">
                                    <div class="comments">
                                        "Обучението беше изключително интересно и ефективно.
                                        Въпреки натовареното ми ежедневие, успях да напредна значително благодарение
                                        на персонализирания подход и подкрепата на преподавателя."
                                    </div>

                                    <div class="profile">
                                        <img src="images/pexels-bymuratisikofficial-19933637.jpg" alt="img">

                                        <a href="#">Georgi Marinov</a>
                                        <div class="rating">
                                            <!-- Full stars (for rated points) -->
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i> <!-- Empty star for unfilled rating -->
                                        </div>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                    </div>

                </div>
            </div>


        </section>
    </main>

    <?php include 'footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js.folder/testimonials-section.js"></script>
    <script src="js.folder/collapsible.js"></script>
    <script src="js.folder/navbar.js"></script>
    <script src="js.folder/swiper-home-section.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>