<!DOCTYPE html>
<html lang="vi-VN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mèo đen</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="./assets/image/body/mèo đen.png">
    <script src="https://kit.fontawesome.com/3191508ed2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alata&family=Montserrat:wght@600&family=Raleway:wght@300;500;600&family=Roboto+Condensed:ital,wght@0,300;0,400;0,600;1,200&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
        .toplist {
            background-color: #2D2D2D;
            width: 97%;
            border-radius: 5px;
            margin: 20px auto 20px;
        }

        .toplist li {
            list-style: disc;
            margin: auto 40px;
            color: #F3DD3D;
            font-size: 19px;
        }

        .toplist ul {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .ctbd {

            width: 70%;
            height: 435px;
            background-color: #21121F;
            z-index: 0;
            margin: 0 5px 0 20px;
            display: flex;
            align-items: center;
        }

        .filmcont {
            display: flex;
            width: 100%;
        }

        .filmcont h2 {
            font-size: 16px;
            border-bottom: 2px solid #ccc;
            padding-bottom: 30px;
        }

        .filmcont h1 {
            color: #B5E745;
            font-size: 30px;
            margin: 20px auto;
        }

        .imgf {
            position: relative;
            margin: auto 20px;
        }

        .imgf i {
            position: absolute;
            width: 70px;
            height: 70px;
            top: 43%;
            left: 36.5%;
            font-size: 1.6rem;
            display: none;
            border: 2px solid #fff;
            border-radius: 50%;
            color: #fff;
            justify-content: center;
            align-items: center;
        }

        .imgf:hover i {
            display: flex;
        }

        .rate {
            display: flex;
            width: 50%;
            border-right: 2px solid #ccc;

        }

        .mt {
            display: flex;
            margin-top: 30px;
        }

        .rate i {
            color: #FFC107;
            font-size: 13px;
        }

        .rate span {
            display: flex;
            border: 3px solid #B5E745;
            border-radius: 999px;
            width: 40px;
            height: 40px;
            justify-content: center;
            align-items: center;
            font-size: 14px;
            color: #fff;
        }
        .ttt {
            display: flex;
        }

        .rate .cstar {
            margin-left: 10px;
        }
        .ttt .time {
            display: flex;
            align-items: center;
            margin: 5px;
        }

        .ttt *{
            font-size: 12.5px;
            color: #fff;
        }

        .ttt .time span, .ttt .time .bx:first-child{
            color: #4f4f4f;
            font-size: 14px;
            margin: 5px;
        }
        .cstar *{
            font-size: 13px;
            color: #fff;
        }
        
    </style>
</head>

<body>
    <div id="container">
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
            <div class="toplist">
                <ul>
                    <li>Để cái này ở đây cho đỡ trống chứ chưa biết thêm chữ gì vào. kakaka</li><br>
                    <li>Để cái này ở đây cho đỡ trống chứ chưa biết thêm chữ gì vào. hehe</li><br>
                    <li>Để cái này ở đây cho đỡ trống chứ chưa biết thêm chữ gì vào. hahahahah</li>
                </ul>
            </div>
            <div class="bdlist">
                <div class="ctbd">
                    <div class="filmcont">
                        <div class="imgf">
                            <a href="index.php?task=pageFilm&id=<?php echo $_GET['id']?>" width="100%" height="100%">
                                <img style="display: inline;" width="250px"
                                    src="./assets/image/body/animevsub-iDvWCparAc.jpg" alt="film">
                                <i class="fa-sharp fa-solid fa-play"></i>
                            </a>
                        </div>
                        <div class="mtf">
                            <h1>Tên phim</h1>
                            <h2>Mô tả: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, fugit? Libero
                                tempore animi eius iure architecto a itaque impedit! Nihil molestias perferendis
                                inventore ipsa eveniet, odio doloremque accusamus nulla itaque
                            </h2>
                            <div>
                                <div class="mt">
                                    <div class="rate">
                                        <span>98%</span>
                                        <div class="cstar">
                                            <div>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                            </div>
                                            <div>(mô tả khong chi tiet lam)</div>
                                        </div>
                                    </div>
                                    <div class="ttt">
                                        <div class="time">
                                            <i class='bx bx-time-five'></i>
                                            <label>12/12</label>
                                        </div>
                                        <div class="time">
                                            <i class='bx bxs-calendar'></i>
                                            <label>2022</label>
                                        </div>
                                        <div class="time">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                            <label for="">123.032.400</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="comment">
                    <div class="Hnxg">
                        <h2 class="tHnxg">Hôm nay xem gì?</h2>
                        <p>Nếu bạn buồn phiền không biết xem gì hôm nay. Hãy để chúng tôi chọn cho bạn</p>
                        <button class="btn randomanime">
                            <i class="fa-solid fa-play"></i>Xem Anime <B>Ngẫu Nhiên</B>
                        </button>
                    </div>
                    <div class="gifabc">
                        <img src="./assets/image/body/unnamed.gif" alt="">
                    </div>

                    <div class="pmcn">
                        <h2 class="tHnxg">Phim mới cập nhật</h2>
                        <ul>
                            <li class="nnn"><a href="#">
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae aliquam
                                        reiciendis aliquid numquam ab dolores amet, temporibus eaque rerum praesentium
                                        quia
                                    </span>
                                    <span>
                                        tập 01
                                    </span></a></li>
                            <li class="nnn"><a href="#">
                                    <span>
                                        Lorem, ipsum.
                                    </span>
                                    <span>
                                        Tập 12
                                    </span></a></li>
                            <li class="nnn"><a href="#">
                                    <span>
                                        Lorem, ipsum dolor.
                                    </span>
                                    <span>
                                        Tập 153
                                    </span></a></li>
                            <li class="nnn"><a href="#">
                                    <span>
                                        Lorem.
                                    </span>
                                    <span>
                                        Tập 32
                                    </span></a></li>
                            <li class="nnn"><a href="#">
                                    <span>
                                        Lorem ipsum dolor sit.
                                    </span>
                                    <span>
                                        Tập 24
                                    </span></a></li>
                            <li class="nnn"><a href="#">
                                    <span>
                                        Lorem, ipsum.
                                    </span>
                                    <span>
                                        Tập 456
                                    </span></a></li>
                            <li class="nnn"><a href="#">
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, unde.
                                    </span>
                                    <span>
                                        Tập 1222
                                    </span></a></li>
                            <li class="nnn"><a href="#">
                                    <span>
                                        Lorem, ipsum dolor.
                                    </span>
                                    <span>
                                        Tập 04
                                    </span></a></li>
                            <li class="nnn"><a href="#">
                                    <span>
                                        Lorem.
                                    </span>
                                    <span>
                                        Tập 12
                                    </span></a></li>
                            <li class="nnn"><a href="#">
                                    <span>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, quibusdam enim!
                                    </span>
                                    <span>
                                        Tập 10
                                    </span></a></li>
                            <li class="nnn"><a href="#"><span style="color: #ccc;">Xem thêm..</span><span></span></a>
                            </li>
                        </ul>
                    </div>

                </div>


            </div>
        </div>
        <div class="footer">
            <div class="footer-bar">
                <div class="fleft">
                    <div><a href="#"><img src="./assets/image/body/meoden.jpg" alt=""></a></div>
                    <ul>
                        <li class="ft"></li>
                        <li class="ft"></li>
                        <li class="ft"></li>
                        <li class="ft"></li>
                        <li class="ft"></li>
                    </ul>
                </div>
                <div class="fright">
                    <ul>
                        <li><a href="https://www.facebook.com/profile.php?id=100037273352073" target="_blank"><i
                                    class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/le_dugon/" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UClhqmwVZq39Bi5id5hVjeug" target="_blank"><i
                                    class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</body>

</html>