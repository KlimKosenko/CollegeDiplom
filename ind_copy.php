<?php
    session_start();
    if(isset($_SESSION['userlogin'])){

    }
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION);
    }
    
    require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Головна сторінка</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightslider.css">
    <script src="js/jQuery 3.6.0.js"></script>
    <script src="js/lightslider.js"></script>
    <!--tiitle-icon-->
    <link rel="shortcut icon" href="img/title_logo.jpg">
    <script src="https://kit.fontawesome.com/411f9d1d4e.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--navigation-->
    <nav>
        <!--logo-->
        <a href="#" class="logo">
            <img src = "img/logo1_2.png">
       </a>
       <!--menu--btn-->
       <input type="checkbox" class="menu-btn" id="menu-btn">
       <label class="menu-icon" for="menu-btn">
           <span class="nav-icon"></span>
       </label>
       <!--menu-->
       <ul class="menu">
           <li><a href="#">Головна</a></li>
           <li><a href="#">Меню_2</a></li>
           <li><a href="#">Меню_3</a></li>
           <li><a href="#">Контакти</a></li>
           <li><a href="#">Меню_5</a></li>
       </ul>
       <!--login buttons-->
       <?php
        if(!isset($_SESSION["userlogin"])){
       ?>
        <ul class="signup">
            <li><label for="show" class="show-btn">Увійти</label></li>
            <li><label for="show_registr" class="show-btn">Реєстрація</label></li>
        </ul>
        <?php
        }
        else{
            echo"<a href='index.php?logout=true'>Вийти</a>";
        }
        ?>
       <!--search-->
       <div class="search">
           <input type="text" placeholder="Введіть назву фільма">
           <!--search-icon-->
           <i class="fas fa-search"></i>
       </div>
    </nav>
    <!--modalvikno-->
    <div class="center">
        <input type="checkbox" id="show">
        <div class="container">
            <label for="show" class="close-btn fas fa-times"></label>
            <div class="text">Форма входу</div>
            <form action="#" method="POST">
                <div class="data">
                    <label>Логін</label>
                    <input type="text" id="login" name="login" required>
                </div>
                <div class="data">
                    <label>Пароль</label>
                    <input type="password" id="pass" name="pass" required>
                </div>
                <div class="forgot-pass"><a href="">Забули пароль?</a></div>
                <div class="btn">
                    <div class="inner"></div>
                    <button type="submit" name="button" id="log_in">Увійти</button>
                </div>
            </form>
        </div>
    </div>
    <div class="center">
        <input type="checkbox" id="show_registr">
        <div class="container">
            <label for="show_registr" class="close-btn fas fa-times"></label>
            <div class="text">Форма реєстрації</div>
            <form action="#" method="POST">
                <div class="data">
                    <label>email</label>
                    <input type="email" id="emailr" name="emailr" required>
                </div>
                <div class="data">
                    <label>Дата народження</label>
                    <input type="date" id="birthdayr" name="birthdayr" required>
                </div>
                <div class="data">
                    <label>Номер телефона</label>
                    <input type="tel" id="telr" name="telr" required>
                </div>
                <div class="data">
                    <label>Логін</label>
                    <input type="text" id="loginr" name="loginr" required>
                </div>
                <div class="data">
                    <label>Пароль</label>
                    <input type="password" id="passr" name="passr" required>
                </div>
                <div class="forgot-pass"><a href="">Забули пароль?</a></div>
                <div class="btn">
                    <div class="inner"></div>
                    <button type="submit" id="register" name="create">Зареєструватися</button>
                </div>
            </form>
        </div>
    </div>
    <section id="main">
        <!--showcase-->
        <!--heading-->
        <h1 class="showcase-heading">Сьогодні у кіно</h1>
        <ul id="autoWidth" class="cs-hidden">
            <li class="item-a">
                <div class="showcase-box">
                    <img src="img_films/godzila.jpg">
                </div>
            </li>
            <li class="item-b">
                <div class="showcase-box">
                    <img src="img_films/godzila.jpg">
                </div>
            </li>
            <li class="item-c">
                <div class="showcase-box">
                    <img src="img_films/godzila.jpg">
                </div>
            </li>
            <li class="item-d">
                <div class="showcase-box">
                    <img src="img_films/godzila.jpg">
                </div>
            </li>
            <li class="item-e">
                <div class="showcase-box">
                    <img src="img_films/godzila.jpg">
                </div>
            </li>
          </ul>
          <!--latest-movies-->
        <section id="latest">
            <h2 class="latest-heading">Latest movie</h2>
            <!--slider-->
            <ul id="autoWidtw2" class="cs-hidden">
                <!--slide-box-1-->
                <li class="item-a">
                    <div class="latest-box">
                        <!--img-->
                        <div class="latest-b-img">
                            <img src="img_films/godzila.jpg">
                        </div>
                        <!--text-->
                        <div class="latest-b-text">
                            <strong>Kin 2021</strong>
                            <p>Action Movie</p>
                        </div>
                    </div>
                </li>
                <!--slide-box-2-->
                <li class="item-a">
                    <div class="latest-box">
                        <!--img-->
                        <div class="latest-b-img">
                            <img src="img_films/godzila.jpg">
                        </div>
                        <!--text-->
                        <div class="latest-b-text">
                            <strong>Kin 2021</strong>
                            <p>Action Movie</p>
                        </div>
                    </div>
                </li>
                <!--slide-box-3-->
                <li class="item-a">
                    <div class="latest-box">
                        <!--img-->
                        <div class="latest-b-img">
                            <img src="img_films/godzila.jpg">
                        </div>
                        <!--text-->
                        <div class="latest-b-text">
                            <strong>Kin 2021</strong>
                            <p>Action Movie</p>
                        </div>
                    </div>
                </li>
                <!--slide-box-4-->
                <li class="item-a">
                    <div class="latest-box">
                        <!--img-->
                        <div class="latest-b-img">
                            <img src="img_films/godzila.jpg">
                        </div>
                        <!--text-->
                        <div class="latest-b-text">
                            <strong>Kin 2021</strong>
                            <p>Action Movie</p>
                        </div>
                    </div>
                </li>
                <!--slide-box-5-->
                <li class="item-a">
                    <div class="latest-box">
                        <!--img-->
                        <div class="latest-b-img">
                            <img src="img_films/godzila.jpg">
                        </div>
                        <!--text-->
                        <div class="latest-b-text">
                            <strong>Kin 2021</strong>
                            <p>Action Movie</p>
                        </div>
                    </div>
                </li>
                <!--slide-box-6-->
                <li class="item-a">
                    <div class="latest-box">
                        <!--img-->
                        <div class="latest-b-img">
                            <img src="img_films/godzila.jpg">
                        </div>
                        <!--text-->
                        <div class="latest-b-text">
                            <strong>Kin 2021</strong>
                            <p>Action Movie</p>
                        </div>
                    </div>
                </li>
                <!--slide-box-7-->
                <li class="item-a">
                    <div class="latest-box">
                        <!--img-->
                        <div class="latest-b-img">
                            <img src="img_films/godzila.jpg">
                        </div>
                        <!--text-->
                        <div class="latest-b-text">
                            <strong>Kin 2021</strong>
                            <p>Action Movie</p>
                        </div>
                    </div>
                </li>
                <!--slide-box-8-->
                <li class="item-a">
                    <div class="latest-box">
                        <!--img-->
                        <div class="latest-b-img">
                            <img src="img_films/godzila.jpg">
                        </div>
                        <!--text-->
                        <div class="latest-b-text">
                            <strong>Kin 2021</strong>
                            <p>Action Movie</p>
                        </div>
                    </div>
                </li>
                <!--slide-box-9-->
                <li class="item-a">
                    <div class="latest-box">
                        <!--img-->
                        <div class="latest-b-img">
                            <img src="img_films/godzila.jpg">
                        </div>
                        <!--text-->
                        <div class="latest-b-text">
                            <strong>Kin 2021</strong>
                            <p>Action Movie</p>
                        </div>
                    </div>
                </li>
                <!--slide-box-10-->
                <li class="item-a">
                    <div class="latest-box">
                        <!--img-->
                        <div class="latest-b-img">
                            <img src="img_films/godzila.jpg">
                        </div>
                        <!--text-->
                        <div class="latest-b-text">
                            <strong>Kin 2021</strong>
                            <p>Action Movie</p>
                        </div>
                    </div>
                </li>
              </ul>
        </section>
        <!--movies------------------->
        <div class="movies-heading">
            <h2>Movies</h2>
        </div>
        <section id="movies-list">
            <!--box-1-->
            <div class="movies-box">
                <!--img----------->
                <div class="movie-img">
                    <img src="img_films/godzila.jpg">
                </div>
                <!--text--------->
                <a href="#">
                    Ґодзілла проти Конґа (16+)
                    Жанр: фантастика, бойовик, пригоди
                </a>
            </div>
            <!--box-2-->
            <div class="movies-box">
                <!--img----------->
                <div class="movie-img">
                    <img src="img_films/godzila.jpg">
                </div>
                <!--text--------->
                <a href="#">
                    Ґодзілла проти Конґа (16+)
                    Жанр: фантастика, бойовик, пригоди
                </a>
            </div>
            <!--box-3-->
            <div class="movies-box">
                <!--img----------->
                <div class="movie-img">
                    <img src="img_films/godzila.jpg">
                </div>
                <!--text--------->
                <a href="#">
                    Ґодзілла проти Конґа (16+)
                    Жанр: фантастика, бойовик, пригоди
                </a>
            </div>
            <!--box-4-->
            <div class="movies-box">
                <!--img----------->
                <div class="movie-img">
                    <img src="img_films/godzila.jpg">
                </div>
                <!--text--------->
                <a href="#">
                    Ґодзілла проти Конґа (16+)
                    Жанр: фантастика, бойовик, пригоди
                </a>
            </div>
            <!--box-5-->
            <div class="movies-box">
                <!--img----------->
                <div class="movie-img">
                    <img src="img_films/godzila.jpg">
                </div>
                <!--text--------->
                <a href="#">
                    Ґодзілла проти Конґа (16+)
                    Жанр: фантастика, бойовик, пригоди
                </a>
            </div>
            <!--box-6-->
            <div class="movies-box">
                <!--img----------->
                <div class="movie-img">
                    <img src="img_films/godzila.jpg">
                </div>
                <!--text--------->
                <a href="#">
                    Ґодзілла проти Конґа (16+)
                    Жанр: фантастика, бойовик, пригоди
                </a>
            </div>
            <!--box-7-->
            <div class="movies-box">
                <!--img----------->
                <div class="movie-img">
                    <img src="img_films/godzila.jpg">
                </div>
                <!--text--------->
                <a href="#">
                    Ґодзілла проти Конґа (16+)
                    Жанр: фантастика, бойовик, пригоди
                </a>
            </div>
            <!--box-8-->
            <div class="movies-box">
                <!--img----------->
                <div class="movie-img">
                    <img src="img_films/godzila.jpg">
                </div>
                <!--text--------->
                <a href="#">
                    Ґодзілла проти Конґа (16+)
                    Жанр: фантастика, бойовик, пригоди
                </a>
            </div>
            <!--box-9-->
            <div class="movies-box">
                <!--img----------->
                <div class="movie-img">
                    <img src="img_films/godzila.jpg">
                </div>
                <!--text--------->
                <a href="#">
                    Ґодзілла проти Конґа (16+)
                    Жанр: фантастика, бойовик, пригоди
                </a>
            </div>
            <!--box-10-->
            <div class="movies-box">
                <!--img----------->
                <div class="movie-img">
                    <img src="img_films/godzila.jpg">
                </div>
                <!--text--------->
                <a href="#">
                    Ґодзілла проти Конґа (16+)
                    Жанр: фантастика, бойовик, пригоди
                </a>
            </div>
        </section>
        <!--footer---------------->
        <footer>
            <p>Austria cinema, м. Київ</p>
            <p>Copyright 2021 - Austria cinema</p>
        </footer>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript">
              $(function(){
                $('#register').click(function(e){

                    var valid = this.form.checkValidity();
                    if(valid){

                        var email = $('#emailr').val();
                        var birthday = $('#birthdayr').val();
                        var tel = $('#telr').val();
                        var login = $('#loginr').val();
                        var pass = $('#passr').val();

                        e.preventDefault();
                        $.ajax({
                            type: 'POST',
                            url: 'process.php',
                            data: {email:email,birthday:birthday,tel:tel,login:login,pass:pass},
                            success: function(data){
                                swal.fire({
                                    icon:'success',
                                    title:'Успіх',
                                    text: data,
                                })
                            },
                            error: function(data){
                                swal.fire({
                                    icon:'error',
                                    title:'Помилка',
                                    text: 'Перевірте коректність введених даних'
                                })
                            }
                        });
                    }else{
                        
                    }
                })
              });
              $(function(){
                    $('#log_in').click(function(e){
                        var valid = this.form.checkValidity();
                        if(valid){
                            var ulogin = $('#login').val();
                            var upass = $('#pass').val();

                            e.preventDefault();
                            $.ajax({
                                type:'POST',
                                url:"jslogin.php",
                                data:{login:ulogin, pass:upass},
                                success: function(data){
                                    swal.fire({
                                        icon:'info',
                                        title:'Увага!',
                                        text: data,
                                    })
                                    if($.trim(data)==="1"){
                                        setTimeout('window.location.href = "index.php"', 2000);
                                    }
                                },
                                error: function(data){
                                    swal.fire({
                                    icon:'error',
                                    title:'Помилка',
                                    text: 'Перевірте коректність введених даних'
                                })
                                }
                            });
                        }else{

                        }
                        
                    });
              });

                $(document).ready(function() {
                        $('#autoWidth,#autoWidtw2').lightSlider({
                            autoWidth:true,
                            loop:true,
                            onSliderLoad: function() {
                                $('#autoWidth,#autoWidtw2').removeClass('cS-hidden');
                            } 
                        });  
                });
          </script>
    </section>
</body>
</html>