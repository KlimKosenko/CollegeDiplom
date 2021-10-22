<section id="main">
        <!--showcase-->
        <!--heading-->
        <h1 class="showcase-heading">Сьогодні у кіно</h1>
        <ul id="autoWidth" class="cs-hidden">
            <?php 
                $showcase = get_showcase_movies();
                foreach($showcase as $sh): ?>
                    <li class="item-a">
                        <div class="showcase-box">
                            <img src="img_films/godzila.jpg">
                        </div>
                    </li>
                
            <?php endforeach ?>
            
            <li class="item-b">
                <div class="showcase-box">
                    <img src="img_films/vend.jpg">
                </div>
            </li>
            <li class="item-c">
                <div class="showcase-box">
                    <img src="img_films/angel.jpg">
                </div>
            </li>
            <li class="item-d">
                <div class="showcase-box">
                    <img src="img_films/nothing.jpg">
                </div>
            </li>
            <li class="item-e">
                <div class="showcase-box">
                    <img src="img_films/light.jpg">
                </div>
            </li>
          </ul>