<!DOCTYPE html>
<html lang="bg">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css.folder/styles.css">
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
    <script src="/js.folder/home-section.js" defer></script>
</head>

<body id="body-home">

    <!--Nav bar -->
    <?php include 'navbar.php'; ?>

    <section class="home-section" id="home">

        <a onclick="addSelectToContactForm(event); openContactForm();" class="btn-flip course" data-back="Заяви"
            data-front="Курс"></a>
        <a onclick="openContactForm()" class="btn-flip" data-back="Заяви" data-front="Безплатна консултация"></a>

        <h2 id="school">
            Вашата онлайн езикова школа
        </h2>
        <h1 id="h-home">Учи английски език с нас в реално време с учител - бързо и лесно! Онлайн от всяко място, по
            всяко време.
            Нужно е само устройство – лаптоп, таблет или телефон и добра интернет връзка.</h1>


        <!--contact Form and overlay -->
        <div id="myOverlay" class="overlay">

            <div class="overlay-content">
                <?php include 'contact-form.php'; ?>
            </div>
        </div>

        <script src="/js.folder/navbar.js"></script>
    </section>

    <section id="why-us-section">

        <div id="why-us-div" class="h2-div-general">
            <h2 id="why-us-h2" class="h2-general">Защо да изберете нашите курсове?</h2>
        </div>
        <hr class="home-page-hr">

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

        <div id="div-container-for-boxes">

            <div class="box">
                <img class="box-img" src="/images/12742.png" alt="екип от позитивни и опитни преподаватели">
                <p>ЕКИП ОТ ПОЗИТИВНИ И ОПИТНИ ПРEПОДАВАТЕЛИ</p>
            </div>

            <div class="box">
                <img class="box-img" src="/images/12741.png" alt="img">
                <p>ПРОГРАМА, СЪОБРАЗЕНА С ВАШИТЕ НУЖДИ</p>
            </div>

            <div class="box">
                <img class="box-img" id="quality-img" src="/images/074e51ef65927a0eaf7c68d8e36013b6.png" alt="img">
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

            <div class="h4-div-description">
                <h4 class="h4-how-we-work-general">1. Определяне на ниво</h4>
                <p class="p-how-we-work"> Преди да започнем с обучението, ще проведем безплатен тест за определяне на
                    нивото ви по английски език. Това ще ни помогне да изберем най-подходящата програма за вас,
                    съобразена с текущите ви знания.</p>
            </div>

            <div class="h4-div-description">
                <h4 class="h4-how-we-work-general">2. Избор на курс</h4>
                <p class="p-how-we-work">След като определим нивото ви, ще ви предложим подходящ курс или програма,
                    която
                    да отговаря на вашите нужди и цели.</p>
            </div>

            <div class="h4-div-description">
                <h4 class="h4-how-we-work-general">3. Обучение</h4>
                <p class="p-how-we-work">Ще започнете с индивидуални или групови уроци (до 5-8 души),
                    в зависимост от вашето предпочитание, с нашите опитни и мотивирани преподаватели,
                    които ще се адаптират към вашите нужди и темпо, за да ви помогнат да напредвате бързо и уверено,
                    постигайки устойчиви резултати, следвайки европейския стандарт за езиково обучение.</p>
            </div>

        </div>

    </section>

    <section id="testimonials-section">

        <div class="container">
            <div class="board">
                <h2 class="text-light">Word from our customers</h2>
                <p class="text-light">Some of the fulfilled customers review</p>

                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="flex">
                                <div class="comments">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas varius ac erat eget mattis. Ut lacinia pretium
                                </div>

                                <div class="profile">
                                    <img src="data:image/jpeg;base64,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"
                                        alt="img">
                                    <div class="rating">
                                        <!-- Full stars (for rated points) -->
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i> <!-- Empty star for unfilled rating -->
                                    </div>
                                    <a href="#">Berkay Halil</a>
                                    <span>Founder $ CEO</span>
                                </div>

                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex">
                                <div class="comments">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas varius ac erat eget mattis. Ut lacinia pretium
                                </div>

                                <div class="profile">
                                    <img src="data:image/jpeg;base64,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"
                                        alt="img">
                                    <div class="rating">
                                        <!-- Full stars (for rated points) -->
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i> <!-- Empty star for unfilled rating -->
                                    </div>
                                    <a href="#">Berkay Halil</a>
                                    <span>Founder $ CEO</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex">
                                <div class="comments">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas varius ac erat eget mattis. Ut lacinia pretium
                                </div>

                                <div class="profile">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAbxLFQV-czLC8EIyE7-XELkRxB7NuHx9XxQ&s"
                                        alt="img">
                                    <div class="rating">
                                        <!-- Full stars (for rated points) -->
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i> <!-- Empty star for unfilled rating -->
                                    </div>
                                    <a href="#">Berkay Halil</a>
                                    <span>Founder $ CEO</span>
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

    <?php include 'footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/js.folder/testimonials-section.js"></script>
</body>

</html>