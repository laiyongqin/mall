<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	function _initialize(){
        $catalogs = A('Catalog')->getAllCatalog();
        $this->assign('catalogs', $catalogs);
    }
	public function index(){
		$user = session('user');
		$this->assign('user', $user);
		$this->display();
	}
}
