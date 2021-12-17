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
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Montserrat:ital,wght@1,500&family=Roboto:ital,wght@0,100;1,100;1,300&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Montserrat&family=Roboto:ital,wght@0,100;1,100;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Montserrat:wght@100&family=Roboto:ital,wght@0,100;1,100;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="icon" href="/favicon/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="/style/style.css" rel="stylesheet">
    <link href="/style/styleTXL.css" rel="stylesheet">


    <title>@yield('title')</title>
</head>
<body>

@yield('content')
<div class="background">

    <div class = "main">

        <div class = "main_margin">

            <div class ="first-colum">
                <div class ="logo-left">
                    <a href="{{ route('index') }}"> <img src="https://avtograd-exeed.ru/wp-content/uploads/exeed-color-brand.svg"  alt="АВТОГРАД EXEED" style="max-width: 128px">  </a>
                </div>
                <div class="space"></div>
                <div class="spaceJ"></div>
                <div class="logo-right">
                    <a class="href" href="{{ route('index') }}">
                     <b><h7>EXEED АРКОНТ</h7></b> <br>
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
        <div class ="rowMiniMain"> <img src="https://avtograd-exeed.ru/wp-content/uploads/exeed-color-brand.svg "  alt="АВТОГРАД EXEED" style="max-width: 128px"> </div>
        <div class ="rowMiniMain"> <b><h7>АРКОНТ EXEED Официальный дилер</h7></b></div>
        <div class ="rowMiniMain"><h7> +7 (8442) 22-70-77</h7></div>
    </div>





    <!--гамбургер под маленькие экраны-->
    <nav class="navbar navbar-light navbar-1 ">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="{{ route('index') }}">    <img src="https://avtograd-exeed.ru/wp-content/uploads/exeed-color-brand.svg"  alt="АВТОГРАД EXEED" style="max-width: 128px;margin-left: 25px"></a>


        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
                aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent15">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active" id="nav-item">
                    <a class="nav-link" id="nav-link" href="{{ route('index') }}">На главную</a>
                </li>
                <li class="nav-item" id="nav-item">
                    <a class="nav-link"  id="nav-link" href="{{ route('TXL') }}">TX</a>
                </li>
                <li class="nav-item" id="nav-item">
                    <a class="nav-link" id="nav-link"  href="{{ route('VX') }}">VX</a>
                </li>
            </ul>
            <!-- Links -->

        </div>
        <!-- Collapsible content -->

    </nav>
    <!--/конец гамбургера-->












<video class="mainVideo" id="video"  muted="muted" src="/video/main.mp4"></video>

<div class="img">
   <div class="imgWords">
       <div class="imgTitle">BORN FOR MORE</div>
       <div class="miniTitle">EXEED TXL</div>
   </div>
</div>




    <div class ="ColumCard">
        <div class ="miniTitleCard" id="miniTitle">Среднеразмерный внедорожник</div>
        <div class ="titleCard"  id="title">EXEED TXL</div>
        <div class="carImg1" id="carImg"></div>


        <div class ="flexrow">

                <div class="inColum"  id="inColum">
                    <div class ="row3"> <img  class ="mini" src="/images/y.png"> </div>
                    <div class ="row" id="row">186</div>
                    <div class ="row1"  id="row1">Мощность</div>
                </div>

                <div class="inColum" id="inColum">
                    <div class ="row3"> <img  class ="mini" src="/images/d.png"> </div>
                    <div class ="row" id="row">275</div>
                    <div class ="row1"  id="row1">Крутящий Момент,Н-м</div>
                </div>

                <div class="inColum"  id="inColum">
                    <div class ="row3"> <img  class ="mini" src="/images/t.png"> </div>
                    <div class ="row" id="row">9,8</div>
                    <div class ="row1"  id="row1">Разгон до 100км/ч,с</div>
                </div>


                <div class="inColum"  id="inColum">
                    <div class ="row3"> <img  class ="mini" src="/images/u.png"> </div>
                    <div class ="row" id="row">7,6</div>
                    <div class ="row1"  id="row1">Расход топлива,л/100км</div>
                </div>
    </div>
</div>







<div class="containerWithColumn"  id="acc">

        <div  class = "column" id = "leftColumn">

        </div>

        <div  class = "column" id = "rightColumn">
            <div class ="titleColumn">ВЫРАЗИТЕЛЬНЫЙ ДИЗАЙН</div>
            <div class ="titleul" id="ul">
                <ul>
                    <li id="titleLi"><h3 class="accordion"  data-id=1>LED-Оптика</h3>
                        <div class="panel">Полностью светодиодная головная оптика обеспечивает безупречное освещение всех участков дороги, делая каждую поездку в темное время суток максимально комфортной и безопасной.</div>
                    </li>

                    <li id="titleLi"><h3 class="accordion"  data-id=2>Пульсирующий логотип</h3>
                        <div class="panel">Стильный логотип EXEED на радиаторной решетке обновленного TXL стал частью схемы приветственного освещения. Подойдите к машине на расстояние трех метров – и буквы заиграют пульсирующим бело-лунным оттенком. То же самое произойдет, если разблокировать двери с ключа.</div>
                    </li>

                    <li id="titleLi"><h3 class="accordion"  data-id=3>Диски диаметром 19 дюймов</h3>
                        <div class="panel">Колеса EXEED изготовлены из алюминиевого сплава и окрашены методом порошкового напыления – самым передовым из возможных. Размерность в 19 дюймов обеспечивает идеальный баланс эстетики и ездового комфорта.</div>
                    </li>


                    <li id="titleLi"><h3 class="accordion"  data-id=4>Габаритные размеры</h3>
                        <div class="panel">
                            <ul >
                                <li class="Mini">Длина - 4780 мм</li>
                                <li class="Mini">Ширина - 1885 мм</li>
                                <li class="Mini">Высота - 1730 мм</li>
                                <li class="Mini">Колесная база - 2800 мм</li>
                                <li class="Mini">Клиренс - 210 мм</li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
 </div>










    <div class="containerWithColumn"  id="acc2">


        <div  class = "column" id = "rightColumn1">
            <div class ="titleColumn">СОВРЕМЕННЫЕ ТЕХНОЛОГИИ</div>
            <div class ="titleul" id="ul">
                <ul>
                    <li id="titleLi"><h3 class="accordion" data-id=5>Широкоформатная мультимедийная панель</h3>
                        <div class="panel">Безусловная доминанта передней части салона – мультимедийный кластер, состоящий из двух широкоформатных дисплеев (правый – сенсорный). Диагональ каждого составляет 12,3 дюйма, а разрешение 1920*720 пикселей.</div>
                    </li>

                    <li id="titleLi"><h3 class="accordion" data-id=6>Аудиосистема класса премиум</h3>
                        <div class="panel">Ощущения премиальности интерьера дополняет акустика на компонентах Arkamys и Sony из 8 динамиков. Вне зависимости от выбранной комплектации аудиосистема обновленного TXL подарит обитателем салона чистый и детальный звук.</div>
                    </li>

                    <li id="titleLi"><h3 class="accordion" data-id=7>Беспроводная зарядка</h3>
                        <div class="panel">С обновленным TXL можно навсегда забыть о зарядных кабелях. Индукционная зарядка на центральном тоннеле быстро подпитает гаджет: отныне вы всегда будете онлайн.</div>
                    </li>

                    <li id="titleLi"><h3 class="accordion" data-id=8>Датчик качества воздуха</h3>
                        <div class="panel">Двухзонный климат-контроль обновленного EXEED TXL оснащен функцией ионизации кислорода и позволяет водителю и переднему пассажиру выбирать максимально комфортную температуру не оглядываясь друг на друга. А также с помощью цветовой индикацией уведомляет о высоком содержании вредных примесей.</div>
                    </li>


                </ul>
            </div>
        </div>

        <div  class = "column" id = "leftColumn2"></div>

    </div>





    <div class="containerWithColumn"  id="acc3">

        <div  class = "column" id = "leftColumn3">

        </div>

        <div  class = "column" id = "rightColumn">
            <div class ="titleColumn">ПОВЫШЕННЫЙ КОМФОРТ</div>
            <div class ="titleul" id="ul">
                <ul>
                    <li id="titleLi"><h3 class="accordion" data-id=9>Панорамный люк</h3>
                        <div class="panel">Технологичная панорамная крыша. Управлять сдвижной секцией можно с помощью пульта дистанционного управления, а на случай дождя предусмотрено ее автоматическое закрывание. Бонусом – теплоизоляционное стекло толщиной в 5 мм.</div>
                    </li>

                    <li id="titleLi"><h3 class="accordion" data-id=10>Зимний пакет</h3>
                        <div class="panel">Какой бы холодной ни оказалась зима, обновленный TXL готов к ее встрече. В зимний пакет входит в стандартное оснащение и включает дистанционный запуск двигателя, обогрев лобового и заднего стекла, форсунок стеклоомывателя, боковых зеркал, руля, а также сидений первого и второго ряда. Функция запуска двигателя позволяет активировать дистанционно климат-контроль.</div>
                    </li>

                    <li id="titleLi"><h3 class="accordion" data-id=11>Сиденья с микроклиматом и памятью положения</h3>
                        <div class="panel">Сиденья разработаны профильной американской корпорацией Lear и предоставляют максимум комфорта людям любого роста и комплекции. Передние кресла всех исполнений оснащены сервоприводом и функцией памяти. В версии Flagship добавляется вентиляция.</div>
                    </li>


                    <li id="titleLi"><h3 class="accordion" data-id=12>Просторный салон</h3>
                        <div class="panel">Колесная база – 2800 мм. Это один из лучших показателей в классе, позволивший обеспечить пассажирам заднего ряда рекордный простор для коленей.</div>
                    </li>

                </ul>
            </div>

        </div>
    </div>




    <div class="containerWithColumn"  id="acc4">


        <div  class = "column" id = "rightColumn1">
            <div class ="titleColumn">КОМПЛЕКСНАЯ БЕЗОПАСНОСТЬ</div>
            <div class ="titleul" id="ul">
                <ul>
                    <li id="titleLi"><h3 class="accordion" data-id=13>Полный привод</h3>
                        <div class="panel">За распределение крутящего момента между осями обновленного TXL отвечает многодисковая муфта производства BorgWarner. Благодаря сверхкороткому времени срабатывания (0,07 секунды) и интеллектуальной системе управления приводом, покорение бездорожья станет легкой и приятной прогулкой.</div>
                    </li>

                    <li id="titleLi"><h3 class="accordion" data-id=14>Ассистент движения в полосе</h3>
                        <div class="panel">Обновленный TXL с системой удержания в полосе (LKA) всегда готов подстраховать в опасной ситуации.</div>
                    </li>

                    <li id="titleLi"><h3 class="accordion" data-id=15>Система безопасного выхода</h3>
                        <div class="panel">В оживленном мегаполисе опасность может поджидать на каждом углу. Так что мы научили обновленный TXL следить за окружающей обстановкой даже в статике. При обнаружении помехи в виде другого автомобиля или велосипедиста, система безопасного выхода подаст звуковой сигнал при открывании двери.</div>
                    </li>

                    <li id="titleLi"><h3 class="accordion" data-id=16>Помощь при спуске и на подъеме</h3>
                        <div class="panel">Дополнительную уверенность на бездорожье придадут системы помощи при подъеме и спуске. Первая поможет тронуться с места, не откатившись назад. Вторая возьмет на себя управление тормозами при движении под гору.</div>
                    </li>


                </ul>
            </div>
        </div>

        <div  class = "column" id = "leftColumn4"></div>

    </div>

</div>

    <div class="containerWithColumn">
        <div  class = "column" id = "leftColumn5"></div>
        <div  class = "column" id = "leftColumn6"></div>
    </div>


    <div class="testDrive" id="testDriveTXL">
        <b>ПРОЙДИТЕ ТЕСТ-ДРАЙВ</b>
        <button class="btn2">Записаться &#8250;</button>
    </div>

    <div class="footer1">
        <p class="mapName">Как нас найти</p>
    </div>
    <div class="myMap">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8057e2e519b6217195c894e50af7f91cf54b3ef3f5a3fd760aacfc865bdfa73e&amp;width=100%25&amp;height=609&amp;lang=ru_RU&amp;scroll=true"></script>
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









    <script src="/Js/txl.js"> </script>
