<?php
class AddsoftAction extends Action {

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

	public function addsoft() {

		if ($_POST) {
			var_dump($_POST);
			$staff_data = $_POST['right_staff'];
			$staff_data = array_reverse($staff_data, TRUE); //post时数据会反转,所以在此要反转回来
			foreach ($staff_data as $k => $v) {

				$rsid = $v . ";" . $rsid; //用;把sid分开
			}
			print $rsid;
		}
	}

	public function soft_to_staff($rsid, $rid) {
		/*
		 * 将新添加的软件著作权记录到所属作者的“相关软件著作权中”;
		 */
		$arr_sid = split(";", $rsid);

		$dbstaff = M('staff');

		foreach ($arr_sid as $v) {

			$staff = $dbstaff->where("sid=" . $v)->select();
			$srid = split(";", $staff['srid']);
			//判断此软件是否已被录入
			if (!in_array($rid, $srid)) {
				$staff['srid'] = $staff['srid'] . $rid . ";";
				$dbstaff->where("sid=" . $v)->save($staff);
			}
		}
	}

}
?>