<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        ГОЛОВНА
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>


@if (Auth::guest())
@else
<section class="section_admin">
  <div class="container">
    <div class="row">
      <div class="col-md-4" style="">
        <h2 style="color: #646262; text-align: center;">НАВІГАЦІЯ</h2>
        <ul type="none" class="nav_admin">
          <li><h3>ФОТОСЕСІЯ</h3>
            <ul type="none" class="nav_admin_photo">
                <li><a href="/admin/wedding_one/">весільна</a></li>
                <li><a href="/admin/ceremony_one/">розписка чи церемонія</a></li>
                <li><a href="/admin/lovestory_one/">love story</a></li>
                <li><a href="/admin/family_one/">сімейна</a></li>
                <li><a href="/admin/individual_one/">індивідуальна</a></li>
            </ul>

          </li>
          <li><a class="" href="/admin/price">ПОСЛУГИ</a></li>
          <li><a href="/admin/blog/">БЛОГ</a></li>
          <li><a href="/admin/feedback/">ВІДГУКИ КЛІЄНТІВ</a></li>

        </ul>
      </div>
   
     <div class="col-md-5 col-md-offset-2">
    
          <h4>Інструкція для роботи з текстом</h4>
          <p style="color: red;">Для переносу рядка:<br>
            <xmp>Тег -  <br> - ставимо в кінець рядка</xmp>
          </p>
          <p style="color: red;">Для абзіців використовуємо комбінацію:
            <xmp>Тег -  <p> - ставимо на початок абзацу</xmp>
            <xmp>Тег -  </p> - ставимо на кінець абзацу</xmp>
          </p>
          <P style="color: red;">
              ПРИКЛАД <br>
              <strong style="background-color: #f8f35e; display: block;">
                <xmp><p>  абзац статі  </p></xmp>
              </strong>
              
              
            </P>
               <p>
            <span style="color: red;">Щоб додати фото в середиту статті потрібно:</span><br>
            <span>перейти у меню на кнопки<br> 
              <strong>"БЛОГ"-> "Додаткові фото для статті" </strong>
              <br> загрузити потрібні фото для статті, у таблиці скопіювати ссилку на фотогріфію (зразок) </span><br>
            <br>
            <<strong>img src="http://fotograf.com.ua/public/images/1511561678.png" </strong>>
            
              
      
            <span style="padding-bottom:100px; ">та додати її в середину статті між абзацами</span>
            
          </p><br>



            <p><strong>ОДНА ФОТОГРАФІЯ НА ШИРИНУ СТАТТІ</strong></p>
            <div style="display: block; background-color: #f5f74b;">
              <span style="color: red;">ЗРАЗОК</span><br>
              <strong>
                <xmp><p>  абзац статі  </p></xmp>
              </strong>
              <<strong>img src="http://fotograf.com.ua/public/images/1511561678.png" </strong>>
              <strong>
                <xmp><p>  абзац статі  </p></xmp><br>
              </strong>
            </div>
            <p><strong>ДВІ ФОТОГРАФІЇ НА ШИРИНУ СТАТТІ ПО ГОРИЗОНТАЛІ</strong>
              <br> потрібно дві фотографії обгорнути:<br>
              перед першим фото: <xmp><div></xmp>
              після другого фото: <xmp></div></xmp></p>
            <div style="display: block; background-color: #f5f74b;">
              <span style="color: red;">ЗРАЗОК</span><br>
              <strong>
                <xmp><p>  абзац статі  </p></xmp>
              </strong>
              <strong>
                <xmp style="color: red;"><div></xmp>
              </strong>
              <<strong>img src="http://fotograf.com.ua/public/images/1511561678.png" </strong>><br>
              <<strong>img src="http://fotograf.com.ua/public/images/1511561678.png" </strong>>
              <strong>
                <xmp style="color: red;"></div></xmp>
              </strong>
              <strong>
                <xmp><p>  абзац статі  </p></xmp><br>
              </strong>
            </div><br>




          <p style="color: red;">Для виділення тексту жирним:<br>
            <xmp>Тег -  <strong> - ставимо на початок рядка/слова</xmp><br>
            <xmp>Тег -  </strong> - ставимо на кінець рядка/слова</xmp><br>
          </p>
          <p style="color: red;">Зробити більший текст від поточного<br>
            <xmp>Тег -  <big> - ставимо на початок рядка/слова</xmp><br>
            <xmp>Тег -  </big> - ставимо на кінець рядка/слова</xmp><br>
          </p>
          <p style="color: red;">Зробити менший текст від поточного<br>
            <xmp>Тег -  <small> - ставимо на початок рядка/слова</xmp><br>
            <xmp>Тег -  </small> - ставимо на кінець рядка/слова</xmp><br>
          </p>
          <p style="color: red;">Для створення посилання:<br>
            <xmp>Тег -  <a href="URL ссилка куди потрібно перенаправити"></xmp>
            <xmp>назва ссилки куди потрібно перенарпавити</a></xmp><br>
            <strong>Приклад посилання</strong>  
            <xmp><a href="http://fotograf.com.ua/">Сайт фотографа</a></xmp><br>
          </p>
          <p><span style="color: red;">Для роботи з кольором</span><br>
            <span>Можем використовувати для всіх вищенаведених Тегів</span>
            <br><br>

            <span>Зразок:</span><br>
            <xmp><strong style="color: red;">Робота з кольором</strong></xmp>
            <span>Результат:</span><br>
            <strong style="color: red;">Робота з кольором</strong>
            <br><br>

            <span>Зразок:</span><br>
            <xmp><i style="color: green;">Робота з кольором</i></xmp>
            <span>Результат:</span><br>
            <i style="color: green;">Робота з кольором</i>
            
          </p><br><br>
          <p ><span style="color: red;">Для підключення відео з YouTube:</span><br>
            <strong>Знайти відео в YouTube</strong><br>
            <span>Натиснути кнопку "ПОДІЛИТИСЬ"</span>
            <img style="width: 350px;" src="{{asset("public/img/share.png")}}" alt=""><br>
            <span> У випадаючому вікні натискаємо кнопку "ВСТАВИТИ"</span><br>
            <span>У наступномі випадаючому вікні "Embed Video"</span><img style="width: 450px;" src="{{asset("public/img/codvideo.png")}}" alt=""><br>
            <span>Копіюємо код відео <span style="color: red;">"iframe"</span> і всталяєто в середину стаття між абзацами</span><br>
          </p><br>
          <p>
            <span style="color: red;">Щоб додати фото в середиту статті потрібно:</span><br>
            <span>перейти у меню на кнопки<br> 
              <strong>"БЛОГ"-> "Додаткові фото для статті" </strong>
              <br> загрузити потрібні фото для статті, у таблиці скопіювати ссилку на фотогріфію (зразок) </span><br>
            <br>
            <<strong>img src="http://fotograf.com.ua/public/images/1511561678.png" </strong>>
            <br>
              
          <br>
            <span style="padding-bottom:100px; ">та додати її в середину статті між абзацами</span>
            
          </p>
        </div>
    </div>
  </div>
</section>

@endif

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
