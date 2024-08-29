<?php
    class Model{
        public $conn;
        public function __construct(){
            $this->conn = mysqli_connect('localhost', 'duong1', '12345678','webf');
        }

        public function getDataUser(){
            $sql = "SELECT * FROM `user`";
            return mysqli_query($this->conn,$sql);
        }

        public function signUp($email,$pass){
            $sql = "INSERT INTO `user`(`id`, `email`, `pass`, `level`) VALUES ('','$email','$pass','1')";
            mysqli_query($this->conn,$sql);
        }

        public function addF($ten, $anhbia, $filephim, $mota){
            $sql = "INSERT INTO `phim`(`id`, `tenp`, `anhbia`, `filephim`, `mota`) VALUES ('','$ten','$anhbia','$filephim','$mota')";
            return mysqli_query($this->conn,$sql);
        }

        public function getDataF(){
            $sql = "SELECT * FROM `phim` WHERE 1";
            return mysqli_query($this->conn,$sql);
        }

        public function getDatafilm($id){
            $sql = "SELECT * FROM `phim` WHERE id = $id";
            return mysqli_query($this->conn,$sql);
        }
        public function updateF($ten, $anhbia, $filephim, $mota, $id){
            $sql = "UPDATE `phim` SET `tenp`='$ten',`anhbia`='$anhbia',`filephim`='$filephim',`mota`='$mota' WHERE `id`='$id'";
            return mysqli_query($this->conn,$sql);
        }
    }
?>