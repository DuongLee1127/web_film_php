<!DOCTYPE html>
<html lang="vi-VN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="icon" type="image/x-icon" href="./assets/image/body/mèo đen.png">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alata&family=Montserrat:wght@600&family=Raleway:wght@300;500;600&family=Roboto+Condensed:ital,wght@0,300;0,400;0,600;1,200&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/3191508ed2.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <div class="headercontent">
            <div class="headerhome">
                <button class="btn bars">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <a href="index.php?task=pageHome" class="home">
                    Mèo đen
                </a>
            </div>
            <div class="searchf">
                <input type="text" placeholder="Tìm kiếm" class="search">
                <i class="fa-solid fa-magnifying-glass iconsearch"></i>
                <div class="login">
                    <a href="index.php?task=pageLogin">
                        <button class="btn btnlogin">
                            Đăng nhập
                        </button>
                    </a>

                </div>
            </div>

        </div>
    </div>
    <div class="bodycontainer">
        <section>
            <div class="form-box">
                <div class="form-value">
                    <form action="" method="post">
                        <h2>Đăng ký</h2>
                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input name="email" type="email" required>
                            <label for="">Email</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input name="pass" type="password" required>
                            <label for="">Mật khẩu</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input name="repass" type="password" required>
                            <label for="">Nhập lại mật khẩu</label>
                        </div>
                        <div class="forget">
                            <label for=""><input type="checkbox">Nhớ mật khẩu</label>
                          
                        </div>
                        <button name="sign-up">Đăng ký</button>
                        <div class="register">
                            <p>Bạn đã có tài khoản? Đăng nhập <a href="index.php?task=pageLogin">tại đây</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</body>
</html>