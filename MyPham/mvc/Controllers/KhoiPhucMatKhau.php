<?php
class KhoiPhucMatKhau extends controller
{
    private $model;
    
    function __construct()
    {
        $this->model = $this->model("TaiKhoanModel");
    }
    
    function show()
    {
        if(isset($_SESSION["logined"]))
        {
            header("location: TrangChu");
        }
        
        self::view("master",[
            "page" => "KhoiPhucMatKhau",
        ]);
    }

    // Hàm để tạo mã xác nhận ngẫu nhiên
    function generateRandomString($length = 6) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }

    function recovery()
    {
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $newPassWord = "";

        //tạo mật khẩu mới random
        for($i = 0; $i < 5; $i++)
        {
            $newPassWord = $newPassWord .random_int(1,9);
        }

        // Gửi email
        $to = "$email";
        $subject = "Quên mật khẩu";
        $message = 
            "Quên mật khẩu

            Xin chào $email,

            Đây là mã xác thực để đặt lại mật khẩu của bạn:

            Mã xác thực: $newPassWord

            Vui lòng sử dụng mã xác thực trên để thiết lập mật khẩu mới cho tài khoản của bạn.

            Xin hãy bảo quản mã xác thực này cẩn thận để tránh rủi ro về an ninh thông tin.

            Nếu bạn có bất kỳ câu hỏi nào, vui lòng liên hệ với chúng tôi để được hỗ trợ.

            Chân thành cảm ơn!
            "; 

        $headers = "From: myphamskincares@gmail.com";
        if (mail($to, $subject, $message, $headers)) {
            // Gửi email thành công
            echo $newPassWord;
        } else {
            // Gửi email không thành công
            echo "Lỗi trong quá trình gửi email.";
        }
    }

    function checkEmail()
    {
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $result = $this->model->checkEmail($email);

        echo $result;
    }

    function recoveryPassword()
    {
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $newPassWord = isset($_POST['newPassword']) ? $_POST['newPassword'] : null;

        $this->model->recovery($email,password_hash($newPassWord, PASSWORD_DEFAULT, ['cost' => 12]));
    }
}
?>
