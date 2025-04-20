<?php
    namespace Src\Model;

    use Src\Core\Database;
    class UserModel extends Database{
        protected $table = "tbl_user";
        public function GetUser()
        {
            echo "oki";
        }
    }