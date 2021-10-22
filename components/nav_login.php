<body>
    <!--navigation-->
    <nav>
        <!--logo-->
        <a href="index_login.php" class="logo">
            <img src = "img/logo1_2.png">
       </a>
       <!--menu--btn-->
       <input type="checkbox" class="menu-btn" id="menu-btn">
       <label class="menu-icon" for="menu-btn">
           <span class="nav-icon"></span>
       </label>
       <!--menu-->
       <ul class="menu">
           <li><a href="index_login.php">Головна</a></li>
           <li><a href="#">Про кінотеатр</a></li>
           <li><a href="contact.php">Контакти</a></li>
       </ul>
       <!--login buttons-->
       <?php
        if(isset($_SESSION["userlogin"])){
        echo"<ul class='user_btn'>";
        echo"<li><a href='index_login.php?logout=true'><i class='fas fa-sign-out-alt'></i> Вийти</a></li>";
        echo"<li><a href='my_cabinet.php'><i class='fas fa-user'></i> Мій кабінет, ".$_SESSION["userlogin"]["login"]."</a></li>";
        echo"</ul>";
        }
        ?>
       <!--search-->
       <div class="search">
           <input type="text" placeholder="Введіть назву фільма">
           <!--search-icon-->
           <i class="fas fa-search"></i>
       </div>
    </nav>