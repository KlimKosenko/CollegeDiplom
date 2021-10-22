<!--movies------------------->
<div class="movies-heading">
            <h2>Фільми</h2>
        </div>
        <section id="movies-list">
            <!--box-1-->
            <?php 
                $showcase = get_mini_showcase_movies();
                foreach($showcase as $sh): ?>
                    <div class="movies-box">
                        <!--img----------->
                        <div class="movie-img">
                            <img src="img_films/<?php echo $sh["main_photo"]?>">
                        </div>
                        <!--text--------->
                        <a href="film_page.php?id=<?php echo $sh["id"] ?>">
                            <?php echo $sh["film_name"]." (".$sh["age"].")"?><br>
                            <?php echo "Жанр: ".$sh["genre"]?>
                        </a>
                    </div>
            <?php endforeach ?>
        </section>