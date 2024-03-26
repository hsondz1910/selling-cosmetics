<?php
    class CaNhan extends controller
    {
        function show()
        {
            $IDKH = isset($_SESSION["logined"][0]["IDTK"]) ? $_SESSION["logined"][0]["IDTK"] : null;
            $model = $this->model("TaiKhoanModel");
            $result = json_decode($model->loadAccount($IDKH),true);

            self::view("master",[
                "page" => "CaNhan",
                "Account" => $result,
                "title" => "Cá nhân"
            ]);
        }

        function taiKhoan()
        {
            $IDKH = isset($_SESSION["logined"][0]["IDTK"]) ? $_SESSION["logined"][0]["IDTK"] : null;
            $model = $this->model("TaiKhoanModel");
            $result = json_decode($model->loadAccount($IDKH),true);

            self::view("TaiKhoan",["Account" => $result]);
        }

        function changeAccount(){
            $IDKH = isset($_SESSION["logined"][0]["IDTK"]) ? $_SESSION["logined"][0]["IDTK"] : null;
            $Name = isseT($_POST["Name"]) ? $_POST["Name"] : null;
            $Gender = isseT($_POST["Gender"]) ? $_POST["Gender"] : null;
            $birthDate = isseT($_POST["birthDate"]) ? $_POST["birthDate"] : null;
            $Phone = isseT($_POST["Phone"]) ? $_POST["Phone"] : null;
            $Address = isseT($_POST["Address"]) ? $_POST["Address"] : null;
            $oldPassword = isseT($_POST["oldPasswords"]) ? $_POST["oldPasswords"] : null;
            $newPassword = isseT($_POST["newPasswords"]) ? $_POST["newPasswords"] : null;
            $confirmPassword = isseT($_POST["confirmPasswords"]) ? $_POST["confirmPasswords"] : null;

            $model = $this->model("TaiKhoanModel");

            $pass_hash = $model->checkOldPass($IDKH);

            if(strlen($newPassword) > 0 && strlen($newPassword) < 6)
            {
                echo "Mật khẩu mới phải có độ dài từ 6 trở lên";
                return;
            }

            if(strlen($oldPassword) > 0 && password_verify($oldPassword, $pass_hash) == false)
            {
                echo "Mật khẩu hiện tại không chính xác!!!";
                return;
            }

            if(strlen($newPassword) > 0 && strlen($confirmPassword) > 0 && $newPassword !== $confirmPassword)
            {
                echo "Mật khẩu xác nhận không khớp mật khẩu mới!!!";
                return;
            }

            if(password_verify($oldPassword, $pass_hash) == true && $newPassword == $confirmPassword)
            {
                $model->changedPassword($IDKH,password_hash($newPassword, PASSWORD_DEFAULT));
            }

            $model->changedAccount($IDKH,$Name,$Gender,$birthDate,$Phone,$Address);

            $infor = $model->getInforAccount($_SESSION["email"],$_SESSION["passwords"]);
            $_SESSION["logined"][0]["hoTen"] = $infor[0]["hoTen"];

            echo "Đổi thông tin thành công.";
        }

       
    }
