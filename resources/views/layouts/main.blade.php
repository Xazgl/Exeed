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

    <title>@yield('title')</title>
</head>
<body>

@yield('content')
<section class="background">

<div class = "main">

 <div class = "main_margin">

      <div class ="first-colum">
        <div class ="logo-left">
            <img src="https://avtograd-exeed.ru/wp-content/uploads/exeed-color-brand.svg"  alt="АВТОГРАД EXEED" style="max-width: 128px">
        </div>
        <div class="space"></div>
        <div class="spaceJ"></div>
        <div class="logo-right">
           <b><h7>EXEED АРКОНТ</h7></b> <br>
              <h7>Официальный дилер</h7>
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



<video class="mainVideo" id="video" muted="muted" src="/video/main2.mp4"></video>








<div class ="twoModel">



    <div class ="ColumCard">
        <div class ="titleCard">TXL</div>
        <div class ="miniTitleCard">Среднеразмерный внедорожник</div>
        <div class="carImg1"></div>

        <div class ="twoROW">
            <div class ="twoColumCard">
                <div class="inColum">
                    <div class ="row3"> <img  class ="mini" src="/images/y.png"> </div>
                    <div class ="row">186</div>
                    <div class ="row1">Мощность</div>
                </div>
                <div class="inColum">
                    <div class="space"></div>
                    <div class="spaceJ"></div>
                </div>
                <div class="inColum">
                    <div class ="row3"> <img  class ="mini" src="/images/d.png"> </div>
                    <div class ="row">275</div>
                    <div class ="row1">Крутящий Момент,Н-м</div>
                </div>
            </div>



            <div class ="twoColumCard">
                <div class="inColum1">
                    <div class ="row3"> <img  class ="mini" src="/images/t.png"> </div>
                    <div class ="row">9,8</div>
                    <div class ="row1">Разгон до 100км/ч,с</div>
                </div>

                <div class="inColum1">
                  <div class="space"></div>
                  <div class="spaceJ"></div>
                </div>

                <div class="inColum1">
                    <div class ="row3"> <img  class ="mini" src="/images/u.png"> </div>
                    <div class ="row">7,6</div>
                    <div class ="row1">Расход топлива,л/100км</div>
                </div>
            </div>

        </div>

        <div class ="btnCard">
            <form method="get" action="{{ route('TXL') }}" target="_blank">
            <button class="btn"  type="submit">Узнать больше</button>
            </form>
        </div>
    </div>

    <div class ="ColumCard">
        <div class ="titleCard">VX</div>
        <div class ="miniTitleCard">Полноразмерный внедорожник</div>
        <div class="carImg"></div>



        <div class ="twoROW">
        <div class ="twoColumCard">
            <div class="inColum">
                <div class ="row3"> <img  class ="mini" src="/images/y.png"> </div>
              <div class ="row">249</div>
              <div class ="row1">Мощность</div>
            </div>
            <div class="inColum">
                <div class="space"></div>
                <div class="spaceJ"></div>
            </div>
            <div class="inColum">
               <div class ="row3"> <img  class ="mini" src="/images/d.png"> </div>
               <div class ="row">385</div>
               <div class ="row1">Крутящий Момент,Н-м</div>
            </div>
        </div>

        <div class ="twoColumCard">
            <div class="inColum1">
                <div class ="row3"> <img  class ="mini" src="/images/t.png"> </div>
                <div class ="row">8,5</div>
                <div class ="row1">Разгон до 100км/ч,с</div>
            </div>
            <div class="inColum1">
                <div class="space"></div>
                <div class="spaceJ"></div>
            </div>
            <div class="inColum1">
                <div class ="row3"> <img  class ="mini" src="/images/u.png"> </div>
                <div class ="row">9,5</div>
                <div class ="row1">Расход топлива,л/100км</div>
            </div>
        </div>

    </div>
        <div class ="btnCard">
            <form method="get" action="{{ route('VX') }}" target="_blank">
                <button class="btn">Узнать больше</button>
            </form>
        </div>
</div>


</div>






<div class = "containerWithiTwoRow">


     <div class="columCAR" id="left_Carcolumn">
         <h3 id="miniTitle">НАШИ ПРЕИМУЩЕСТВА</h3>
         <p class="p7">Официальный дилер  EXEED АРКОНТ в Волгограде предлагает выгодные условия на автомобили марки EXEED и
                 предоставляет полный спектр высококачественных финансовых, технических и сервисных услугах</p>

                 <ul>
                     <li> <img  class ="mini1" src="/images/like.png">
                         Лучшие цены на новый модельный ряд EXEED</li>

                     <li><img  class ="mini1" src="/images/chat.png">
                         Бесплатные консультации и тест-драйв</li>

                     <li><img  class ="mini1" src="/images/spical.png">
                         Акции и специальные предложения</li>

                     <li><img  class ="mini1" src="/images/credit.png">
                         Кредитование, страхование и Trade-in</li>

                     <li><img  class ="mini1" src="/images/chat.png">
                         Послепродажная поддержка, гарантия и сервис</li>
                 </ul>
     </div>


    <div class="columCAR2" id="backgroundRow">

        <ul>
            <li id="li2">Арконт - это автомобильная компания, успешно развивающаяся на территории Волгоградского региона.</li>
            <li id="li2"> В активе холдинга 16 известных мировых брендов.</li>
            <li id="li2">Вот уже почти 30 лет Арконт является успешным игроком на автомобильном рынке.</li>
            <li id="li2">Компания обеспечивает оперативное и эффективное решение вопросов, связанных с приобретением и обслуживанием автомобилей.</li>
        </ul>

    </div>


</div>


<div class="footer1">
    <p class="mapName">Как нас найти</p>
</div>
<div class="myMap">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8057e2e519b6217195c894e50af7f91cf54b3ef3f5a3fd760aacfc865bdfa73e&amp;width=100%25&amp;height=609&amp;lang=ru_RU&amp;scroll=true"></script>
</div>


<div class="testDrive">
    <b>ПРОЙТИ ТЕСТ-ДРАЙВ</b>
    <button class="btn2">Записаться &#8250;</button>
</div>



<div class="news">
    <h3 id="Title">НОВОСТИ И СОБЫТИЯ</h3>
    <div class ="Card3">

        <div class ="newsCard" id="card1">
            <p class="pCard">Расширение модельного ряда<br>
            Exeed в России</p>
        </div>

        <div class ="newsCard"  id="card2">
            <p class="pCard">Колличество диллерских центров<br>
            в России увеличено до 60</p>
        </div>

        <div class ="newsCard"  id="card3">
            <p class="pCard">Exeed раскрывает дизайн<br>
            флагманского внедорожника VX</p>
        </div>

    </div>
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




    </div>


</div>













    <div  class="modalBackground" id="modalBackground">

        <div  class = "modalWindow" id="modalWindow">
            <div class="mb-3"><h3 id="modalTitle">ЗАПИСЬ НА ТЕСТ-ДРАЙВ</h3></div>
         <div class ="modalEl">

            <form method="post"  enctype="multipart/form-data">>
                <div class="mb-3">
                    <label for="name" class="form-label"></label>
                    <input type="text" class="name" id="name" name="name"  placeholder="Имя"  value="{{ old ('name') }}">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label"></label>
                    <input type="text" class="name" id="phone" name="phone"  placeholder="+7(***)-***-**-**"  value="{{ old ('phone') }}">
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












</section>



            </div>
            @section('scripts')

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



                <script src="https://js.cx/libs/animate.js"></script>
                <script type="text/javascript" src="js/jquery.js"></script>
                <script type="text/javascript" src="js/main.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>



                <script src="https://code.jquery.com/jquery-3.6.0.js"
                        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
                        crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
                        crossorigin="anonymous"></script>


                <script>
                    $(".footer").fadeIn(3000);
                </script>


@show
</body>



</html>
