<?php
class AddpaperAction extends Action {

	public function index() {

		$dbstaff = M('staff');

		$staff = $dbstaff->select();

		//var_dump($staff);

		foreach ($staff as $n => $v) {

			$data[$n]['name'] = $v['name'];
			$data[$n]['sid'] = $v['sid'];
		}

		//var_dump($data);

		$this->assign('staff_list', $data);

		$this->show();
	}

	public function addpaper() {

		if ($_POST) {
			var_dump($_POST);
			$staff_data = $_POST['right_staff'];
			$staff_data = array_reverse($staff_data, TRUE); //post时数据会反转,所以在此要反转回来
			foreach ($staff_data as $k => $v) {

				$lsid = $v . ";" . $lsid; //用;把sid分开
			}
			print $lsid;
		}
	}

	public function paper_to_staff($lsid, $lid) {
	/*
	 * 将新添加的论文记录到所属作者的“相关论文中”;
	 */
		$arr_sid = split(";", $lsid);

		$dbstaff = M('staff');

		foreach ($arr_sid as $v) {

			$staff = $dbstaff->where("sid=" . $v)->select();
			$staff['slid'] = $staff['slid'] . $lid . ";";
			$dbstaff->where("sid=" . $v)->save($staff);

		}
	}

}
?>