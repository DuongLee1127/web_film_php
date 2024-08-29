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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alata&family=Montserrat:wght@600&family=Raleway:wght@300;500;600&family=Roboto+Condensed:ital,wght@0,300;0,400;0,600;1,200&display=swap"
        rel="stylesheet">
</head>

<body>
    <div id="container">
        <div class="header">
            <div class="headercontent">
                <div class="headerhome">
                    <button class="btn bars">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <a href="#" class="home">
                        Mèo đen
                    </a>
                </div>
                <div class="searchf">
                    <input type="text" placeholder="Tìm kiếm" class="search">
                    <i class="fa-solid fa-magnifying-glass iconsearch"></i>
                    <div class="login">
                        <a href="index.php?task=pageHome">
                            <button class="btn btnlogin">
                                Đăng xuất
                            </button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="bodycontainer">
            <div class="toplist">
                <div class="filmcontent">
                    <a href="index.php?task=pageChitiet">
                        <i class="fa-sharp fa-solid fa-play"></i>
                        <img src="./assets/image/top/animevsub-bGw5lnUHTC.webp" alt="">
                        <span>
                            Lorem ipsum dolor sit amet lorem ipsum dolor sit.
                        </span>

                    </a>
                </div>
                <div class="filmcontent">
                    <a href="#">
                        <i class="fa-sharp fa-solid fa-play"></i><img src="./assets/image/body/animevsub-F9AdsrNyfW.jpg"
                            alt="">
                        <span>
                            Lorem ipsum dolor sit
                        </span>
                    </a>
                </div>
                <div class="filmcontent">
                    <a href="#">
                        <i class="fa-sharp fa-solid fa-play"></i><img
                            src="./assets/image/body/animevsub-FOe4SHTVt4.webp" alt="">
                        <span>
                            Lorem ipsum dolor sit amet lorem, ipsum
                        </span>
                    </a>
                </div>
                <div class="filmcontent">
                    <a href="#">
                        <i class="fa-sharp fa-solid fa-play"></i><img src="./assets/image/body/animevsub-fvsZEMFGz3.jpg"
                            alt="">
                        <span>
                            Lorem ipsum dolor consectetur elit. Inventore, eveniet?
                        </span>
                    </a>
                </div>
                <div class="filmcontent">
                    <a href="#">
                        <i class="fa-sharp fa-solid fa-play"></i><img src="./assets/image/top/animevsub-BvIgqp9yZV.jpg"
                            alt="">
                        <span>
                            Lorem ipsum dolor sit amet
                        </span>
                    </a>
                </div>
                <div class="filmcontent">
                    <a href="#">
                        <i class="fa-sharp fa-solid fa-play"></i><img
                            src="./assets/image/body/animevsub-cMVp0Ge46x.webp" alt="">
                        <span>
                            Lorem ipsum dolor sit amet
                        </span>
                    </a>
                </div>
                <!-- <div class="filmcontent"><a href="#"><img src="./assets/image/body/animevsub-F9AdsrNyfW.jpg" alt=""></a></div>
                <div class="filmcontent"><a href="#"><img src="./assets/image/body/animevsub-FOe4SHTVt4.webp" alt=""></a></div>-->
                <div class="filmcontent">
                    <a href="#">
                        <i class="fa-sharp fa-solid fa-play"></i><img src="./assets/image/body/animevsub-fvsZEMFGz3.jpg"
                            alt="">
                        <span>
                            Lorem ipsum dolor sit amet
                        </span>
                    </a>
                </div>
                <div class="filmcontent">
                    <a href="#">
                        <i class="fa-sharp fa-solid fa-play"></i><img src="./assets/image/top/animevsub-uA7yO5hnuT.jpg"
                            alt="">
                        <span>
                            Lorem ipsum dolor sit amet
                        </span>
                    </a>
                </div>
            </div>
            <div class="bdlist">
                <div class="lbd">
                    <div class="genre">
                        <h1>MỚI CẬP NHẬT <i class="fa fa-angle-right"></i></h1>
                        <a href="" class="STPb Current" data-tag="anime-new" title="Anime mới cập nhật">Tất cả</a>
                        <a href="" class="STPb" data-tag="anime-season" title="Anime mùa">Mùa Đông - 2024</a>
                        <a href="" class="STPb" data-tag="anime-series" title="Anime bộ">Anime bộ</a>
                        <a href="" class="STPb" data-tag="anime-single" title="Anime lẻ">Anime lẻ</a>
                        <a href="" class="STPb" data-tag="hh-trungquoc" title="Hoạt hình Trung quốc">HH Trung Quốc</a>
                    </div>
                    <ul class="filmcontainer">
                        <?php
                        $control = new Admin();
                        $result = $control->getDataF();
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <li class="filmcontent">
                                <a href="index.php?task=pageChitiet&id=<?php echo $row['id']?>">
                                    <i class="fa-sharp fa-solid fa-play"></i><img src="./assets/image/body/<?php echo $row['anhbia']?>"
                                        alt="">
                                    <h2><?php echo $row['tenp']?></h2>
                                    <div>
                                        <h3>Lượt xem: 999.999.999</h3>
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                    <a href="#" class="more">Xem thêm..</a>
                    <div class="genre">
                        <h1>ĐỀ CỬ <i class="fa fa-angle-right"></i></h1>
                        <a href="" class="STPb Current" data-tag="anime-new" title="Anime mới cập nhật">Xem nhiều hôm
                            nay</a>
                        <a href="" class="STPb" data-tag="anime-season" title="Anime mùa">Xem nhiều trong mùa</a>
                        <a href="" class="STPb" data-tag="anime-series" title="Anime bộ">Yêu thích</a>
                        <a href="" class="STPb" data-tag="anime-single" title="Anime lẻ">Tháng</a>
                    </div>
                    <ul class="filmcontainer">
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i>
                                <img src="./assets/image/body/135162.jpg" alt="">
                                <h2>Lorem ipsum dolor sit amet.</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>
                                <div class="filminfor"></div>
                            </a>
                        </li>
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img src="./assets/image/body/139539.jpg"
                                    alt="">
                                <h2>Lorem ipsum dolor sit amet.</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>

                            </a>
                        </li>
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img src="./assets/image/body/140224.jpg"
                                    alt="">
                                <h2>Lorem ipsum</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>
                            </a>
                        </li>
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img
                                    src="./assets/image/body/animevsub-0PY6DPdY7W.jpg" alt="">
                                <h2>Lorem ipsum</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>
                            </a>
                        </li>
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img
                                    src="./assets/image/body/animevsub-0SyyBVHJLI.webp" alt="">
                                <h2>Lorem ipsum dolor</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>
                            </a>
                        </li>
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img
                                    src="./assets/image/body/animevsub-8CW3l6FGUR.jpg" alt="">
                                <h2>Lorem ipsum dolor sit</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>
                            </a>
                        </li>
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img
                                    src="./assets/image/body/animevsub-4c3AEMjYfT.webp" alt="">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>
                            </a>
                        </li>
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img
                                    src="./assets/image/body/animevsub-atiCXNS4vO.jpg" alt="">
                                <h2>Lorem ipsum dolor sit amet.</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>
                            </a>
                        </li>
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img
                                    src="./assets/image/body/animevsub-bakcDrPuF4.jpg" alt="">
                                <h2>Lorem ipsum</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>
                            </a>
                        </li>
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img
                                    src="./assets/image/body/animevsub-CLgSVIagmk.webp" alt="">
                                <h2>Lorem ipsum dolor</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="more">Xem thêm..</a>
                    <div class="genre">
                        <h1>SẮP CHIẾU <i class="fa fa-angle-right"></i></h1>
                    </div>
                    <ul class="filmcontainer">
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img src="./assets/image/body/135162.jpg"
                                    alt="">
                                <h2>Lorem ipsum dolor sit amet.</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>
                            </a>
                        </li>
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img src="./assets/image/body/139539.jpg"
                                    alt="">
                                <h2>Lorem ipsum dolor sit amet.</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>

                            </a>
                        </li>
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img src="./assets/image/body/140224.jpg"
                                    alt="">
                                <h2>Lorem ipsum</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>
                            </a>
                        </li>
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img
                                    src="./assets/image/body/animevsub-0PY6DPdY7W.jpg" alt="">
                                <h2>Lorem ipsum</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>
                            </a>
                        </li>
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img
                                    src="./assets/image/body/animevsub-0SyyBVHJLI.webp" alt="">
                                <h2>Lorem ipsum dolor</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>
                            </a>
                        </li>
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img
                                    src="./assets/image/body/animevsub-8CW3l6FGUR.jpg" alt="">
                                <h2>Lorem ipsum dolor sit</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>
                            </a>
                        </li>
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img
                                    src="./assets/image/body/animevsub-4c3AEMjYfT.webp" alt="">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>
                            </a>
                        </li>
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img
                                    src="./assets/image/body/animevsub-atiCXNS4vO.jpg" alt="">
                                <h2>Lorem ipsum dolor sit amet.</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>
                            </a>
                        </li>
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img
                                    src="./assets/image/body/animevsub-bakcDrPuF4.jpg" alt="">
                                <h2>Lorem ipsum</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>
                            </a>
                        </li>
                        <li class="filmcontent">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-play"></i><img
                                    src="./assets/image/body/animevsub-CLgSVIagmk.webp" alt="">
                                <h2>Lorem ipsum dolor</h2>
                                <div>
                                    <h3>Lượt xem: 999.999.999</h3>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="more">Xem thêm..</a>
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