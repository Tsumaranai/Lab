<?php
class AddstaffAction extends Action {

	public function index() {

		$check = new CheckAction();//跨类引用

		if ( $check->checkauth() ){

			$db_data = M('Staff');

			$data = $db_data->select();

			$this->assign('list', $data);

			$this->show();
		}else{

			$this->assign("jumpUrl", "__APP__/Login");
			$this->error("</br></br></br><center>session过期,重新登陆 。。。</center>");
		}
	}

	public function staff_table() {

		if ($_POST) {

			$data['name'] = $_POST['name'];
			$data['pos'] = $_POST['pos'];
			var_dump($data);
			$db_data = M('Staff');

			$db_data->add($data);
		}
		$this->success('成功', 'index');
	}
}
?>