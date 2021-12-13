<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat&family=Montserrat:ital,wght@1,500&family=Roboto:ital,wght@0,100;1,100;1,300&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="/style/style.css" rel="stylesheet">
    <link href="/style/styleVX.css" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body>

@yield('content')
<section class="background">

    <div class = "main">

        <div class = "main_margin">

            <div class ="first-colum">
                <div class ="logo-left">
                    <img src="https://avtograd-exeed.ru/wp-content/uploads/exeed-color-brand.svg "  alt="АВТОГРАД EXEED" style="max-width: 128px"></div>
                <div class="space"></div>
                <div class="spaceJ"></div>
                <div class="logo-right">
                    <a class="href" href="{{ route('index') }}"><b><h7>АРКОНТ EXEED</h7></b> <br>
                        <h7>Официальный дилер</h7></a>
                </div>
            </div>

            <div class ="second-colum">
                <div class="mainModel"><a class="href" href="{{ route('TXL') }}"><b><h7>TXL</h7></b></a></div>
                <div class="mainModel"><a  class="href" href="{{ route('VX') }}"><b><h7 >VX</h7></b></a></div>
            </div>

            <div class ="three-colum">
                <div class="mainModel"> <b><h5> +7 (8442) 22-70-77</h5></b> </div>
                <div class="space"></div>
                <div class="spaceJ"></div>
            </div>

            <div class ="four-colum">
                <div><buttom class="btn-main">Запись на тест-драйв &#9658;</buttom></div>
            </div>

        </div>

    </div>

    <div class="columnMiniMain">
        <div class ="rowMiniMain"><img src="https://avtograd-exeed.ru/wp-content/uploads/exeed-color-brand.svg "  alt="АВТОГРАД EXEED" style="max-width: 128px"></div>
        <div class ="rowMiniMain"> <b><h7>АРКОНТ EXEED Официальный дилер</h7></div>
        <div class ="rowMiniMain"><h7> +7 (8442) 22-70-77</h7></div>
    </div>




    <video class="mainVideo" id="video" src="/video/vx.mp4"></video>

    <div class="img">
        <div class="imgWords">
            <div class="imgTitle">BORN FOR MORE</div>
            <div class="miniTitle">EXEED VX</div>
        </div>
    </div>




    <div class ="ColumCard">
        <div class ="miniTitleCard" id="miniTitle">Полноразмерный внедорожник</div>
        <div class ="titleCard"  id="title">Exeed VX</div>
        <div class="carImg" id="carImg"></div>


        <div class ="flexrow">

            <div class="inColum">
                <div class ="row3"> <img  class ="mini" src="/images/y.png"> </div>
                <div class ="row" id="row">249</div>
                <div class ="row1"  id="row1">Мощность</div>
            </div>

            <div class="inColum">
                <div class ="row3"> <img  class ="mini" src="/images/d.png"> </div>
                <div class ="row" id="row">385</div>
                <div class ="row1"  id="row1">Крутящий Момент,Н-м</div>
            </div>

            <div class="inColum">
                <div class ="row3"> <img  class ="mini" src="/images/t.png"> </div>
                <div class ="row" id="row">8,5</div>
                <div class ="row1"  id="row1">Разгон до 100км/ч,с</div>
            </div>


            <div class="inColum">
                <div class ="row3"> <img  class ="mini" src="/images/u.png"> </div>
                <div class ="row" id="row">9,5</div>
                <div class ="row1"  id="row1">Расход топлива,л/100км</div>
            </div>
        </div>
    </div>







    <div class="containerWithColumn">

        <div  class = "column" id = "leftColumn">

        </div>

        <div  class = "column" id = "rightColumn">
            <div class ="titleColumn">БЕЗУПРЕЧНЫЙ ДИЗАЙН</div>
            <div class ="titleul">
                <ul>
                    <li id="titleLi"><button class="accordion">LED-Оптика</button>
                        <div class="panel">Полностью светодиодная головная оптика обеспечивает безупречное освещение всех участков дороги, делая каждую поездку в темное время суток максимально комфортной и безопасной.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Панорамный люк</button>
                        <div class="panel">Площадь панорамного люка внедорожника VX – внушительные 1,12 квадратных метра, а толщина теплоизоляционного стекла – 5 мм. Помимо клавиши в салоне, управлять сдвижной секцией можно с помощью пульта. Предусмотрено автоматическое закрывание люка на случай дождя.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Диски диаметром 20 дюймов</button>
                        <div class="panel">Дизайн двухцветных легкосплавных дисков диаметром 20 дюймов разработан специально для модели VX. Все исполнения внедорожника комплектуются шинами Continental.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Стиль и аэродинамика</button>
                        <div class="panel">Обновленный TXL – это не только выверенные пропорции и безупречный стиль в каждой детали, но и тщательно проработанная аэродинамика. Коэффициент воздушного сопротивления Cx=0,33 – один из лучших в классе. Это положительно влияет на топливную экономичность, акустический комфорт и управляемость.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Габаритные размеры</button>
                        <div class="panel">
                            <ul>
                                <li>Длина - 4 970 мм</li>
                                <li>Ширина - 1 940 мм</li>
                                <li>Высота - 1 788 мм</li>
                                <li>Колесная база - 2 900 мм</li>
                                <li>Клиренс - 200 мм</li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </div>










    <div class="containerWithColumn">


        <div  class = "column" id = "rightColumn1">
            <div class ="titleColumn">ФЛАГМАНСКИЕ ТЕХНОЛОГИИ</div>
            <div class ="titleul">
                <ul>
                    <li id="titleLi"><button class="accordion">Цифровой кокпит высокой четкости</button>
                        <div class="panel">Цифровой кокпит внедорожника VX включает два цветных дисплея диагональю 12,3 каждый. Разрешение экранов (правый – сенсорный) – 1920*720 пикселей. Широкие возможности персонализации позволяют выбрать один из трех вариантов дизайна и графики.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Проекционный экран</button>
                        <div class="panel">Проекционный дисплей – история не только про удобство, но и про безопасность. Вся необходимая информация буквально «парит над капотом» внедорожника VX, позволяя не отвлекаться от дороги.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Трёхзонный климат-контроль</button>
                        <div class="panel">Пассажирам второго ряда сидений внедорожника VX полагается собственный климатический блок с возможностью регулировки температуры. За качество салонного воздуха отвечает фирменная система очистки.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Парящая центральная консоль</button>
                        <div class="panel">«Парящая» центральная консоль придает интерьеру VX визуальную легкость, подчеркивая премиальный статус автомобиля.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Премиум-аудиосистема Arkamys и акустика Sony</button>
                        <div class="panel">12 динамиков премиальной акустической системы, созданной с привлечением лучших представителей музыкальной индустрии – компаний Arkamys и Sony обеспечивают мощное, чистое и детальное звучание в каждом уголке салона.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Контурная подсветка салона</button>
                        <div class="panel">Создать настроение в салоне внедорожника VX поможет атмосферная подсветка с множеством доступных оттенков.</div>
                    </li>



                </ul>
            </div>
        </div>

        <div  class = "column" id = "leftColumn2"></div>

    </div>





    <div class="containerWithColumn">

        <div  class = "column" id = "leftColumn3">

        </div>

        <div  class = "column" id = "rightColumn">
            <div class ="titleColumn">ПЕРВОКЛАССНЫЙ КОМФОРТ</div>
            <div class ="titleul">
                <ul>
                    <li id="titleLi"><button class="accordion">Семиместный салон</button>
                        <div class="panel">Габариты внедорожника VX позволили разместить в салоне три ряда сидений. При этом каждое из семи мест – полноценное. Взрослым пассажирам будет комфортно даже на последнем ряду.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Эргономичные сиденья с электрорегулировками</button>
                        <div class="panel">Электрорегулировки анатомических передних кресел VX помогают быстро найти оптимальную посадку людям любого роста и комплекции. Угол наклона спинок сидений второго ряда достигает 42°, позволяя принять полулежачее положение.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Зимний пакет</button>
                        <div class="panel">Зимний пакет – это дистанционный запуск двигателя, подогревы ветрового стекла, форсунок, боковых зеркал и стекла пятой двери. В салоне VX подогреваются руль, а также первый и второй ряды сидений. Собственные дефлекторы обдува установлены даже на третьем.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Трансформация салона</button>
                        <div class="panel">Широкие возможности трансформации и огромный багажник позволяют подготовить салонное пространство для решения любых задач</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Функциональный багажник</button>
                        <div class="panel">Объем багажника VX в пятиместной конфигурации составляет 520 литров. А максимальная глубина при сложенном втором ряде сидений превышает 2 метра: перевозка длинномеров не станет проблемой. Сервопривод с возможностью управления с ключа поможет сохранить руки чистыми. Угол открывания пятой двери можно настроить.</div>
                    </li>

                </ul>
            </div>

        </div>
    </div>





    <div class="containerWithColumn">


        <div  class = "column" id = "rightColumn1">
            <div class ="titleColumn">ПОЛНАЯ БЕЗОПАСНОСТЬ</div>
            <div class ="titleul">
                <ul>
                    <li id="titleLi"><button class="accordion">4WD от BorgWarner® Smart</button>
                        <div class="panel">За распределение крутящего момента между осями VX отвечает многодисковая муфта BorgWarner. Благодаря сверхкороткому времени срабатывания (0,07 секунды) и интеллектуальной системе управления приводом, покорение бездорожья станет легкой и приятной прогулкой.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Мощный двигатель</button>
                        <div class="panel">В конфигураторе флагманского EXEED VX мотор 2.0 с отдачей в 249 л.с., обеспечивающий большому внедорожнику достойную динамику разгона. Мотор относится к современному семейству Acteco. Умеет отключать часть цилиндров для экономии топлива при равномерной езде и без замечаний прошел 2 миллиона километров. Это эквивалентно десятилетней эксплуатации при высоких нагрузках.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Система безопасного выхода</button>
                        <div class="panel">Заботясь о безопасности, VX следит за окружающей обстановкой. При обнаружении помехи в виде другого автомобиля или велосипедиста, система безопасного выхода подаст звуковой сигнал при открывании двери.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Ассистент движения в полосе</button>
                        <div class="panel">Ассистент слежения за разметкой полосе (LKA) – часть комплекса систем активной безопасности внедорожника VX. Он поможет избежать нежелательных перестроений и не позволит съехать с дороги.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Система предотвращения фронтального столкновения</button>
                        <div class="panel">Внедорожник VX всегда готов подстраховать водителя, предупредив звуковым зуммером об опасном сближении с впереди идущей машиной или другим объектом и применив принудительное торможение в случае его бездействия.</div>
                    </li>

                </ul>
            </div>
        </div>

        <div  class = "column" id = "leftColumn4"></div>

    </div>




    <div class="containerWithColumn">
        <div  class = "column" id = "leftColumn5"></div>
        <div  class = "column" id = "leftColumn6"></div>
    </div>


    <div class="testDrive" id="testDriveTXL">
        <b>ПРОЙДИТЕ ТЕСТ-ДРАЙВ</b>
        <button class="btn2">Записаться &#8250;</button>
    </div>


    <div class="footer">

        <div class ="first-colum">
            <div class ="logo-left">
                <img src="https://avtograd-exeed.ru/wp-content/uploads/exeed-color-brand.svg "  alt="АВТОГРАД EXEED" style="max-width: 128px"></div>
            <div class="space"></div>
            <div class="spaceJ-footer"></div>
            <div class="logo-right"><b>АРКОНТ EXEED</b><br>
                Официальный дилер
            </div>
        </div>


        <div class ="three-colum" id="footerRightWords">
            <ul>
                <li class="footerLi"><b>+7 (8442) 22-70-77</b></li>
                <li class="footerLi">г. Волгоград, ул. им. Землячки, 19Г</li>
            </ul>
        </div>

    </div>




    <div  class="modalBackground" id="modalBackground">

        <div  class = "modalWindow" id="modalWindow">
            <div class="mb-3"><h3 id="modalTitle">ЗАПИСЬ НА ТЕСТ-ДРАЙВ</h3></div>
            <div class ="modalEl">
                <form method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label"></label>
                        <input type="text" class="name" id="name" name="name"  placeholder="Имя">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label"></label>
                        <input type="text" class="name" id="surname" name="surname"  placeholder="+7(***)-***-**-**">
                    </div>
                    <div class="mb-3">
                        <button class="btn-modal" type ="submit">Записаться</button>
                    </div>
                </form>
            </div>

            <div class ="modalEl">
                <button class="btn-modal" id="close-modal">Закрыть</button>
            </div>
        </div>

    </div>









    <script>

        const acc = document.getElementsByClassName("accordion");

        for (let i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                Array.prototype.map.call(acc, e => (e.setAttribute('class', e.getAttribute('class').replace(' active', ''))));
                this.classList.toggle("active");
                const panel = this.nextElementSibling;
                if (panel.style.maxHeight){
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }



    </script>



    <script>
        const video =document.getElementById('video')
        let play = false
        video.addEventListener('mouseenter', event => {
            video.play()
        })
        video.addEventListener('mouseleave', event => {
            video.pause()
        })
    </script>

    <script>

        function $(selector) {
            return document.querySelector(selector) // $ заместо document.querySelector(selector)
        }


        EventTarget.prototype.on = function (eventName, callback) {
            this.addEventListener(eventName, callback) // теперь пишется on заместо EventTarget
        }



        const body = document.querySelector('body')
        const btnBegin= $('.btn-main')
        const modalBackground= $('.modalBackground');
        const modalWindow = $('.modalWindow');


        btnBegin.on('click' , () => {
            modalBackground.classList.add('modalBackground_show')
            body.classList.add('disable-scroll')
        })

        function closeModal() {

            modalBackground.classList.add('modalBackground_close-starting'); // повеси лкласс закрытия анимации

            function animationRemove() {
                modalBackground.classList.remove('modalBackground_close-starting');
                modalBackground.classList.remove('modalBackground_show');
                body.classList.remove('disable-scroll')
                // Удаляем слушатель (нужно передать именно ту же функцию, что и в addEventListenter)
                modalBackground.removeEventListener('animationend',animationRemove)
            }
            // Вешаем слушатель через addEventListenter
            modalBackground.on('animationend',animationRemove);
        }


        $('#close-modal').on('click',closeModal)
        modalBackground.on('click', (event) => {
            if(event.target ===  modalBackground) closeModal()
        })


        const btnBegin2= $('.btn2')



        btnBegin2.on('click' , () => {
            modalBackground.classList.add('modalBackground_show')
            body.classList.add('disable-scroll')
        })

        function closeModal() {

            modalBackground.classList.add('modalBackground_close-starting'); // повеси лкласс закрытия анимации

            function animationRemove() {
                modalBackground.classList.remove('modalBackground_close-starting');
                modalBackground.classList.remove('modalBackground_show');
                body.classList.remove('disable-scroll')
                // Удаляем слушатель (нужно передать именно ту же функцию, что и в addEventListenter)
                modalBackground.removeEventListener('animationend',animationRemove)
            }
            // Вешаем слушатель через addEventListenter
            modalBackground.on('animationend',animationRemove);
        }


        $('#close-modal').on('click',closeModal)
        modalBackground.on('click', (event) => {
            if(event.target ===  modalBackground) closeModal()
        })

    </script>
