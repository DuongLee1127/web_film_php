<?php
require_once "model/model.php";
class Control
{
    protected $model;
    public function __construct()
    {

        $this->model = new Model();
    }

    public function getPageHome()
    {
        require_once "View/index.php";
    }

    public function getPageLogin()
    {
        require_once "View/login.php";
    }

    public function getPageUser()
    {
        require_once "View/user.php";
    }


    public function getPageSignup()
    {
        require_once "View/signup.php";
    }

    public function getPageChitiet(){
        require_once "View/chitiet.php";
    }

    public function getPageFilm(){
        require_once "View/pageFilm.php";
    }

    public function getAdmin()
    {
        header('location:admin.php');
    }


    public function login()
    {
        $kt = false;
        $dt = $this->model->getDataUser();
        
        while($data = mysqli_fetch_array($dt)){
            if($_POST['email'] == $data['email'] && $_POST['pass'] == $data['pass']) {
                $kt= true;
                $dataP = $data;
            }
        }
        if ($kt ){ 
            if ($dataP['level'] == 1) {
                //echo "<script>alert('user')</script>";
                header('location:index.php?task=pageUser');
            } elseif ($dataP['level'] == 0) {
                // echo "<script>alert('admin')</script>";
                header('location:index.php?task=pageAdmin');
            }
        } else {
            echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu')</script>";
        }
    }

    public function signUp()
    {
        $data = $this->model->getDataUser();
        $email = empty($_POST['email']) ? 'true' : null;
        $pass = empty($_POST['pass']) ? 'true' : null;
        $repass = empty($_POST['repass']) ? 'true' : null;
        $kt = false;
        while($row = mysqli_fetch_assoc($data)){
            if($_POST['email'] == $row['email'])
            $kt = true;
        }
        if ($email || $pass || $repass) {
            echo "<script>alert('Không được để trống')</script>";
        } else {
            if ($kt) {
                echo "<script>alert('Email đã tồn tại')</script>";
            } else {
                if ($_POST['pass'] == $_POST['repass']) {
                    $this->model->signUp($_POST['email'], $_POST['pass']);
                    echo "<script>alert('Đăng ký thành công')</script>";
                } else {
                    echo "<script>alert('Mật khẩu không trùng nhau')</script>";
                }
            }

        }

    }

    
}