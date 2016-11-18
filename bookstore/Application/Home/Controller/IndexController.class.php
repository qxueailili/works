<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

    	// $data['name'] = 'ThinkPHP';
    	// $data['email'] = 'thinkphp@qq.com';
    	// $this->assign('data',$data);
    	$this->display();
    }
    public function child(){
    	$this->display();
    }
}