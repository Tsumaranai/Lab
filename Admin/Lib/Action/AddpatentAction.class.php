<?php
class AddpatentAction extends Action {

	public function index() {

		$dbstaff = M('staff');

		$staff = $dbstaff->select();

		foreach ($staff as $n => $v) {

			$data[$n]['name'] = $v['name'];
			$data[$n]['sid'] = $v['sid'];
		}

		$this->assign('staff_list', $data);

		$this->show();
	}

	public function addpatent() {

		if ($_POST) {
			var_dump($_POST);
			$staff_data = $_POST['right_staff'];
			$staff_data = array_reverse($staff_data, TRUE); //post时数据会反转,所以在此要反转回来
			foreach ($staff_data as $k => $v) {

				$zsid = $v . ";" . $zsid; //用;把sid分开
			}
			print $zsid;
		}

	}

	public function patent_to_staff($zsid, $zid) {
	/*
	 * 将新添加的论文记录到所属作者的“相关专利中”;
	 */
		$arr_sid = split(";", $zsid);

		$dbstaff = M('staff');

		foreach ($arr_sid as $v) {

			$staff = $dbstaff->where("sid=" . $v)->select();
			$srid = split(";", $staff['szid']);
			//判断此软件是否已被录入
			if (!in_array($zid, $srid)) {
				$staff['szid'] = $staff['szid'] . $zid . ";";
				$dbstaff->where("sid=" . $v)->save($staff);
			}
		}
	}
}
?>