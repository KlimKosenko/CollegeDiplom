<?php 
        $movie = get_film_info_by_id($_GET['id']);
?>
<div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "img_films\<?php echo $movie["main_photo"] ?>" alt = "film image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "img_films\photo_gallery\<?php echo $movie["photo1"] ?>" data-lightbox = "roadtrip">
                <img src = "img_films\photo_gallery\<?php echo $movie["photo1"] ?>" alt = "film image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "img_films\photo_gallery\<?php echo $movie["photo2"] ?>" data-lightbox = "roadtrip">
                <img src = "img_films\photo_gallery\<?php echo $movie["photo2"] ?>" alt = "film image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "img_films\photo_gallery\<?php echo $movie["photo3"] ?>" data-lightbox = "roadtrip">
                <img src = "img_films\photo_gallery\<?php echo $movie["photo3"] ?>" alt = "film image">
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title"><?php echo $movie["film_name"] ?></h2>

          <div class = "product-detail">
            <h2>Інформація про фільм: </h2>
            <p><?php echo $movie["description"] ?></p>
            <ul>
              <li>Вікові обмеження: <span><?php echo $movie["age"] ?></span></li>
              <li>Жанр: <span><?php echo $movie["genre"] ?></span></li>
            </ul>
          </div>

          <div class = "purchase-info">
            <div class="btn_buy">
            <?php
                if(isset($_SESSION['userlogin'])){?>
                     <input type="button" value="Купити Білет" onClick='location.href="buy_tickets.php?id=<?php echo $_GET['id']?>"'>
                    <?php
                }
                else{
                    echo"<strong>Для придбання білета потрібно увійти</strong>";
                }
            ?>
            </div>
        </div>
      </div>
    </div>

</div>