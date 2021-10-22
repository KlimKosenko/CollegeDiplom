<?php session_start()?>
<div class="main_cabinet">
<h2>Мій кабінет</h2>
<p>Добрий день, <?php echo $_SESSION["userlogin"]["login"]?></p>
<div class="cabinet">
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'change_data')" id="defaultOpen">Змінити дані</button>
        <button class="tablinks" onclick="openCity(event, 'my_tickets')">Мої білети</button>
    </div>

    <div id="change_data" class="tabcontent">
                <form action="#" method="POST" id="update_form">
                    <div class="data">
                        <label>email</label>
                        <input type="email" id="emailr1" name="emailr1" value="<?php echo $_SESSION["userlogin"]["email"]?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title ="qwerty@gmail.com" required>
                    </div>
                    <div class="data">
                        <label>Дата народження</label>
                        <input type="date" id="birthdayr1" name="birthdayr1" value="<?php echo $_SESSION["userlogin"]["birthday"]?>" required>
                    </div>
                    <div class="data">
                        <label>Номер телефона</label>
                        <input type="tel" id="telr1" name="telr1" value="<?php echo $_SESSION["userlogin"]["telephone"]?>" pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" title ="065-764-65-14" required>
                    </div>
                    <div class="data">
                        <label>Логін</label>
                        <input type="text" id="loginr1" name="loginr1" value="<?php echo $_SESSION["userlogin"]["login"]?>" required>
                    </div>
                    <div class="data">
                        <label>Пароль</label>
                        <input type="password" id="passr1" name="passr1" pattern=".{8,}" title="8 і більше символів" value="">
                    </div>
                    <div class="data">
                        <label>Для підтвердження введіть старий пароль</label>
                        <input type="password" id="lastpassr" name="lastpassr" value="" required>
                    </div>
                    <div class="btn">
                        <div class="inner"></div>
                        <button type="submit" id="update" name="update_info">Оновити</button>
                    </div>
                </form>
    </div>

    <div id="my_tickets" class="tabcontent">
    <table>
            <tr id="header_t">
                <td>Назва фільму</td>
                <td>Час</td>
                <td>Дата</td>
                <td>Ціна</td>
                <td>Місця</td>
                <td></td>
            </tr>
            <?php 
                $tickets = get_user_tickets($_SESSION['userlogin']['id']);
                foreach($tickets as $t): ?>
                    <tr id="<?php echo $t['seats']?>">
                        <td><?php echo $t['film_name']?></td>
                        <td><?php echo $t['mtime']?></td>
                        <td><?php echo $t['mdate']?></td>
                        <td><?php echo $t['cost']." ₴"?></td>
                        <td><?php echo $t['seats']?></td>
                        <td><i id="del_btn" class="fas fa-times-circle"></i></td>
                    </tr>
                <?php endforeach ?>         
           
        </table>
    </div>
</div>
</div>
<script>
function openCity(evt, Name) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(Name).style.display = "flex";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>