<?php 
	namespace Home\Model;
	use Think\Model;
	class UserModel extends Model{
		protected $_validate = array(
		    array('user','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
		    array('user_email','email','邮箱格式不正确'),
		    array('repassword','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
		);

		public function LoginCheck($username,$password){
			$row = $this->where("user='$username' and password='$password'")->select();
			if ($row) {
				return true;
			}else{
				return false;
			}
		}
		protected $_auto = array(array());
	}

 ?>