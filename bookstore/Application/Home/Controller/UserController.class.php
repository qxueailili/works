<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
        $this->display();
    }
    public function reg(){
        if (IS_POST) {
            $code = I("post.verify");
            if (!$this->check_verify($code)) {
                    $this->error("验证码错误");
                }

            if ($_POST["user"]!=null){
                $data['user_name']       = $_POST['user'];
                $data['user_password']   = $_POST['password'];
                $data['user_phone']      = $_POST['user_phone'];
                $data['user_email']      = $_POST['user_email'];
                $data['user_date']       = NOW_TIME;

                
                $UserModel = D("User");

                if($UserModel->create()){
                    $UserModel->add();
                    $this->redirect("User/login");
                }else{
                    echo $UserModel->getError();
                }
            }else{
                echo "请输入用户名";
            }           
        }else{
            $this->display();
        }
    }
    public function LoginCheck(){
    	if (isset($_POST["user"])&&isset($_POST["password"])) {
			$username = I("post.user");
			$password = I("post.password");
			$code = I("post.verify");

			$User = D("User");
			$flag=$User->LoginCheck($username,$password);
			if ($flag) {
                if (!$this->check_verify($code)) {
                    $this->error("验证码错误");
                }else{
                    $_SESSION["user"]=$username;
                    $this->redirect("Index/index");
                }
			}else{
				echo "账户名或密码错误";
			}
    	}else{
    		echo "请输入用户名或密码";
    	}
    }

    public function logoff(){
        unset($_SESSION["user"]);
        $this->redirect("Index/index");
    }


    public function verify(){
        $Verify = new \Think\Verify();
        $Verify->expire = 60;
        $Verify->imageW = 100;
        $Verify->imageH = 30;
        $Verify->fontSize = 15;
        $Verify->length   = 3;
        $Verify->useNoise = true;
        $Verify->entry();
    }
    public function check_verify($code, $id = ''){
            // 检测输入的验证码是否正确，$code为用户输入的验证码字符串
            $verify = new \Think\Verify();
            return $verify->check($code, $id);
    }
}