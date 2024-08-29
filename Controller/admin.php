<?php
require_once "model/model.php";
require_once "Controller/control.php";
class Admin extends Control{

    public function getPageAdmin()
    {
        require_once "View/admin1.php";
    }

    public function addF()
    {
        $ten = empty($_POST['tenp']) ? 'true' : null;
        $anh = empty($_FILES['anhbia']['name']) ? 'true' : null;
        $phim = empty($_FILES['filephim']['name']) ? 'true' : null;
        $mota = empty($_POST['tenp']) ? 'true' : null;

        if ($ten || $anh || $phim || $mota) {
            echo "<script>alert('Dữ liệu thêm không được bỏ trống')</script>";
        } else {
            if ($this->model->addF($_POST['tenp'], $_FILES['anhbia']['name'], $_FILES['filephim']['name'], $_POST['mota'])) {
                echo "<script>alert('Thêm thành công')</script>";
            } else {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }


    }

    public function getDataF(){
        return $this->model->getDataF();
    }
    
    public function getDatafilm($id){
        return $this->model->getDatafilm($id);
    }

    public function updateF($id){
        $ten = empty($_POST['tenp']) ? 'true' : null;
        $anh = empty($_FILES['anhbia']['name']) ? 'true' : null;
        $phim = empty($_FILES['filephim']['name']) ? 'true' : null;
        $mota = empty($_POST['tenp']) ? 'true' : null;

        if ($ten || $anh || $phim || $mota) {
            echo "<script>alert('Dữ liệu thêm không được bỏ trống')</script>";
        } else {
            if ($this->model->updateF($_POST['tenp'], $_FILES['anhbia']['name'], $_FILES['filephim']['name'], $_POST['mota'], $id) ) {
                echo "<script>alert('Sửa thành công')</script>";
            } else {
                echo "<script>alert('Sửa không thành công')</script>";
            }
        }
    }
}