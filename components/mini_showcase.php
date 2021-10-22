  <!--latest-movies-->
  <section id="latest">
            <h2 class="latest-heading">Останні фільми</h2>
            <!--slider-->
            <ul id="autoWidtw2" class="cs-hidden">
                <?php 
                $showcase = get_mini_showcase_movies();
                foreach($showcase as $sh): ?>
                    <li class="item-a">
                        <div class="latest-box">
                            <!--img-->
                            <div class="latest-b-img">
                                <a href="film_page.php?id=<?php echo $sh["id"] ?>"><img src="img_films/<?php echo $sh["main_photo"]?>"></a>
                            </div>
                            <!--text-->
                            <div class="latest-b-text">
                                <a href="film_page.php?id=<?php echo $sh["id"] ?>"><strong><?php echo $sh["film_name"]?></strong>
                                <p><?php echo $sh["age"]?></p></a>
                            </div>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </section>