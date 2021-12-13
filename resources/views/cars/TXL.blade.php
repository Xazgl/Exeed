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
    <link href="/style/styleTXL.css" rel="stylesheet">

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




<video class="mainVideo" id="video" src="/video/main.mp4"></video>

<div class="img">
   <div class="imgWords">
       <div class="imgTitle">BORN FOR MORE</div>
       <div class="miniTitle">EXEED TXL</div>
   </div>
</div>




    <div class ="ColumCard">
        <div class ="miniTitleCard" id="miniTitle">Среднеразмерный внедорожник</div>
        <div class ="titleCard"  id="title">Exeed TXL</div>
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







<div class="containerWithColumn">

        <div  class = "column" id = "leftColumn">

        </div>

        <div  class = "column" id = "rightColumn">
            <div class ="titleColumn">ВЫРАЗИТЕЛЬНЫЙ ДИЗАЙН</div>
            <div class ="titleul">
                <ul>
                    <li id="titleLi"><button class="accordion">LED-Оптика</button>
                        <div class="panel">Полностью светодиодная головная оптика обеспечивает безупречное освещение всех участков дороги, делая каждую поездку в темное время суток максимально комфортной и безопасной.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Пульсирующий логотип</button>
                        <div class="panel">Стильный логотип EXEED на радиаторной решетке обновленного TXL стал частью схемы приветственного освещения. Подойдите к машине на расстояние трех метров – и буквы заиграют пульсирующим бело-лунным оттенком. То же самое произойдет, если разблокировать двери с ключа.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Диски диаметром 19 дюймов</button>
                        <div class="panel">Колеса EXEED изготовлены из алюминиевого сплава и окрашены методом порошкового напыления – самым передовым из возможных. Размерность в 19 дюймов обеспечивает идеальный баланс эстетики и ездового комфорта.</div>
                    </li>


                    <li id="titleLi"><button class="accordion">Габаритные размеры</button>
                        <div class="panel">
                            <ul>
                                <li>Длина - 4780 мм</li>
                                <li>Ширина - 1885 мм</li>
                                <li>Высота - 1730 мм</li>
                                <li>Колесная база - 2800 мм</li>
                                <li>Клиренс - 210 мм</li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
 </div>










    <div class="containerWithColumn">


        <div  class = "column" id = "rightColumn1">
            <div class ="titleColumn">СОВРЕМЕННЫЕ ТЕХНОЛОГИИ</div>
            <div class ="titleul">
                <ul>
                    <li id="titleLi"><button class="accordion">Широкоформатная мультимедийная панель</button>
                        <div class="panel">Безусловная доминанта передней части салона – мультимедийный кластер, состоящий из двух широкоформатных дисплеев (правый – сенсорный). Диагональ каждого составляет 12,3 дюйма, а разрешение 1920*720 пикселей.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Аудиосистема класса премиум</button>
                        <div class="panel">Ощущения премиальности интерьера дополняет акустика на компонентах Arkamys и Sony из 8 динамиков. Вне зависимости от выбранной комплектации аудиосистема обновленного TXL подарит обитателем салона чистый и детальный звук.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Беспроводная зарядка</button>
                        <div class="panel">С обновленным TXL можно навсегда забыть о зарядных кабелях. Индукционная зарядка на центральном тоннеле быстро подпитает гаджет: отныне вы всегда будете онлайн.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Датчик качества воздуха</button>
                        <div class="panel">Двухзонный климат-контроль обновленного EXEED TXL оснащен функцией ионизации кислорода и позволяет водителю и переднему пассажиру выбирать максимально комфортную температуру не оглядываясь друг на друга. А также с помощью цветовой индикацией уведомляет о высоком содержании вредных примесей.</div>
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
            <div class ="titleColumn">ПОВЫШЕННЫЙ КОМФОРТ</div>
            <div class ="titleul">
                <ul>
                    <li id="titleLi"><button class="accordion">Панорамный люк</button>
                        <div class="panel">Технологичная панорамная крыша. Управлять сдвижной секцией можно с помощью пульта дистанционного управления, а на случай дождя предусмотрено ее автоматическое закрывание. Бонусом – теплоизоляционное стекло толщиной в 5 мм.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Зимний пакет</button>
                        <div class="panel">Какой бы холодной ни оказалась зима, обновленный TXL готов к ее встрече. В зимний пакет входит в стандартное оснащение и включает дистанционный запуск двигателя, обогрев лобового и заднего стекла, форсунок стеклоомывателя, боковых зеркал, руля, а также сидений первого и второго ряда. Функция запуска двигателя позволяет активировать дистанционно климат-контроль.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Сиденья с микроклиматом и памятью положения</button>
                        <div class="panel">Сиденья разработаны профильной американской корпорацией Lear и предоставляют максимум комфорта людям любого роста и комплекции. Передние кресла всех исполнений оснащены сервоприводом и функцией памяти. В версии Flagship добавляется вентиляция.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Функциональный багажник</button>
                        <div class="panel">Объем багажника обновленного TXL в пятиместной конфигурации составляет 461 литр, а стоит сложить раздельные спинки дивана получим 1 908 литров в сложенном виде. Пятая дверь оснащена электроприводом с возможностью регулировки высоты поднятия.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Просторный салон</button>
                        <div class="panel">Колесная база – 2800 мм. Это один из лучших показателей в классе, позволивший обеспечить пассажирам заднего ряда рекордный простор для коленей.</div>
                    </li>

                </ul>
            </div>

        </div>
    </div>




    <div class="containerWithColumn">


        <div  class = "column" id = "rightColumn1">
            <div class ="titleColumn">КОМПЛЕКСНАЯ БЕЗОПАСНОСТЬ</div>
            <div class ="titleul">
                <ul>
                    <li id="titleLi"><button class="accordion">Полный привод</button>
                        <div class="panel">За распределение крутящего момента между осями обновленного TXL отвечает многодисковая муфта производства BorgWarner. Благодаря сверхкороткому времени срабатывания (0,07 секунды) и интеллектуальной системе управления приводом, покорение бездорожья станет легкой и приятной прогулкой.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Ассистент движения в полосе</button>
                        <div class="panel">Обновленный TXL с системой удержания в полосе (LKA) всегда готов подстраховать в опасной ситуации.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Система безопасного выхода</button>
                        <div class="panel">В оживленном мегаполисе опасность может поджидать на каждом углу. Так что мы научили обновленный TXL следить за окружающей обстановкой даже в статике. При обнаружении помехи в виде другого автомобиля или велосипедиста, система безопасного выхода подаст звуковой сигнал при открывании двери.</div>
                    </li>

                    <li id="titleLi"><button class="accordion">Помощь при спуске и на подъеме</button>
                        <div class="panel">Дополнительную уверенность на бездорожье придадут системы помощи при подъеме и спуске. Первая поможет тронуться с места, не откатившись назад. Вторая возьмет на себя управление тормозами при движении под гору.</div>
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
        <b>ПРОЙТИ ТЕСТ-ДРАЙВ</b>
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

