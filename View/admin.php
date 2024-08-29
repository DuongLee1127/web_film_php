<!DOCTYPE html>
<html lang="vi-VN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Admin
    </title>
    <link rel="icon" type="image/x-icon" href="./assets/image/body/mèo đen.png">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital@0;1&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/fonts/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alata&family=Montserrat:wght@600&family=Raleway:wght@300;500;600&family=Roboto+Condensed:ital,wght@0,300;0,400;0,600;1,200&display=swap"
        rel="stylesheet">
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
        <div class="content">
            <a id="hien" class="content-add js-add">Thêm sản phẩm</a>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên phim</th>
                        <th>Ảnh bìa</th>
                        <th>Video</th>
                        <th>Mô tả</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $control = new Admin();
                    $result = $control->getDataF();

                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <th>
                                <?php echo $row['id'] ?>
                            </th>
                            <td>
                                <?php echo $row['tenp'] ?>
                            </td>
                            <td><img src="./assets/image/body/<?php echo $row['anhbia'] ?>" alt="ảnh bìa"></td>
                            <td><img src="./assets/image/body/<?php echo $row['filephim'] ?>" alt="phim"></td>
                            <td>
                                <?php echo $row['mota'] ?>
                            </td>
                            <td><a class="td-setting js-fix" href="admin.php?id=<?php echo $row['id']; ?>">Sửa</a>, <a
                                    href="admin.php?id=<?php echo $row['id'] ?>">Xóa</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div id="hien2" class="modal js-modal">
            <div class="modal-container js-modal-container">
                <div class="modal-close js-modal-close">
                    <i class='bx bxs-x-square'></i>
                </div>
                <div class="model-header">
                    <h3 class="header-text">Thêm phim</h3>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <label for="" class="modal-label">
                            Tên phim
                        </label>
                        <input name="tenp" type="text" class="modal-input" placeholder="Điền tên phim">

                        <label for="" class="modal-label">
                            Ảnh bìa
                        </label>
                        <input name="anhbia" type="file" class="modal-file">

                        <label for="" class="modal-label">;
                            Phim
                        </label>
                        <input name="filephim" type="file" class="modal-file">

                        <label for="" class="modal-label">
                            Mô tả phim
                        </label>
                        <input name="mota" type="text" class="modal-input" placeholder="Mô tả chi tiết phim">

                        <input name="add" type="submit" class="modal-add" value="Thêm phim">
                    </form>
                </div>
            </div>
        </div>

        <div class="modal-fix js-modal-fix">
            <div class="modal-container js-modal-container-fix">
                <div class="modal-close js-modal-close-fix">
                    <i class='bx bxs-x-square'></i>
                </div>
                <div class="modal-header">
                    <h3 class="header-text">Sửa phim</h3>
                </div>
                <div class="modal-body">
                    <div class="box-fix">
                        <?php
                        $getid = isset($_SESSION['id']) ? $_SESSION['id'] : "";
                        $fixf = mysqli_fetch_assoc($control->getDatafilm($getid)); ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <label for="" class="modal-label">
                                Tên phim
                            </label>
                            <input type="text" value="<?php echo $fixf['tenp'] ?>" name="tenp" class="modal-input">

                            <label for="" class="modal-label">
                                Chọn ảnh bìa
                            </label>
                            <input type="file" class="modal-file" name="anhbia">

                            <label for="" class="modal-label">
                                Chọn phim
                            </label>
                            <input type="file" class="modal-file" name="filephim">

                            <label for="" class="modal-label">
                                Mô tả
                            </label>
                            <input type="text" value="<?php echo $fixf['mota'] ?>" class="modal-input" name="mota">
                            <input name="update" type="submit" class="fix-input" value="Sửa mẫu">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        console.log("1")
        const hien = document.getElementById('hien')
        const hien2 = document.getElementById('hien2')
        const btn = document.getElementById('nut1')

        hien.addEventListener("onclick", () => {
            hien2.classList.add("open")
        })

        btn.addEventListener("onclick", () => {
            console.log("1")
        })
    </script>
    <!-- <script>
        const addBtn = document.querySelector('.js-add')
        const modal = document.querySelector('.js-modal')
        const modalClose = document.getElementById("hien")
        const modalContainer = document.querySelector('.js-modal-container')

        function showFormAdd() {
            modalClose.classList.add('open');
        } 
        // const logerror = () =>{
        //     console.log(modalClose)
        // }
        // logerror()
        // function hideFormAdd() {
        //     modal.classList.remove('open')
        // }

        // addBtn.addEventListener('click', showFormAdd)

        // modalClose.addEventListener('onclick', showFormAdd)

        // modal.addEventListener('click', hideFormAdd)

        modalContainer.addEventListener('click', function (event) {
            event.stopPropagation();
        })
    </script>
    <script>
        const btnFix = document.querySelectorAll('.js-fix')
        const modalFix = document.querySelector('.js-modal-fix')
        const modalCloseFix = document.querySelector('.js-modal-close-fix')
        const modalContainerFix = document.querySelector('.js-modal-container-fix')

        function showFormFix() {
            modalFix.classList.add('open')
        }

        function hideFormFix() {
            modalFix.classList.remove('open')
        }

        for (const btnFixs of btnFix) {
            btnFixs.addEventListener('click', showFormFix)
        }

        modalCloseFix.addEventListener('click', hideFormFix)

        modalFix.addEventListener('click', hideFormFix)

        modalContainerFix.addEventListener('click', function (event) {
            event.stopPropagation();
        })
    </script> -->
</body>

</html>
<!-- <script src="/js/addevent.js"></script> -->