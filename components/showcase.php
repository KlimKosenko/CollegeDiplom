<section id="main">
        <!--showcase-->
        <!--heading-->
        <h1 class="showcase-heading">Сьогодні у кіно</h1>
        <ul id="autoWidth" class="cs-hidden">
            <?php 
                $showcase = get_showcase_movies();
                foreach($showcase as $sh): ?>
                    <li class="item-<?php echo $sh["id"]?>">
                        <div class="showcase-box">
                            <a href="film_page.php?id=<?php echo $sh["id"] ?>"><img src="img_films/<?php echo $sh["main_photo"]?>"></a>
                        </div>
                    </li>
                
            <?php endforeach ?>
          </ul>