<?php
class LoginAction extends Action {

	public function index() {

		$this->show();
	}

	public function login() {

		if ($_POST) {

			if ($_SESSION['verify'] && $_POST['auth'] && $_POST['pass']) {

				if ($_SESSION['verify'] == md5($_POST['verify'])) {

					if ($_POST['auth'] == "admin318" && md5($_POST['pass']) == "2240824eca096536467bb46e314c62f2") {

						session('authname','admin318');
						session('expire','1440');

						$this->assign("jumpUrl", "__APP__/Addstaff");
						$this->success("</br></br></br><center>登陆成功,跳转中 :) 。。。</center>");

					} else {
						$this->error('用户信息有误');
					}
				} else {
					$this->error('验证码有误');
				}
			} else {
				$this->error('登陆信息不完整');
			}
		}
	}

	public function verify() {

		import('ORG.Util.Image');
		Image :: buildImageVerify();

	}
}
?>
