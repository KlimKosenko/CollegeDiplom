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
                    <input type="password" id="pass" name="pass" >
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
            <form action="#" method="POST" id="register_form">
                <div class="data">
                    <label>email</label>
                    <input type="email" id="emailr" name="emailr" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title ="qwerty@gmail.com" required>
                </div>
                <div class="data">
                    <label>Дата народження</label>
                    <input type="date" id="birthdayr" name="birthdayr" required>
                </div>
                <div class="data">
                    <label>Номер телефона</label>
                    <input type="tel" id="telr" name="telr" pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" title ="065-764-65-14" required>
                </div>
                <div class="data">
                    <label>Логін</label>
                    <input type="text" id="loginr" name="loginr" required>
                </div>
                <div class="data">
                    <label>Пароль</label>
                    <input type="password" id="passr" name="passr" pattern=".{8,}" title="8 і більше символів" required>
                </div>
                <div class="forgot-pass"><a href="">Забули пароль?</a></div>
                <div class="btn">
                    <div class="inner"></div>
                    <button type="submit" id="register" name="create">Зареєструватися</button>
                </div>
            </form>
        </div>
    </div>