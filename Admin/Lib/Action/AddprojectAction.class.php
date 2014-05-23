<?php

class AddprojectAction extends Action {

	public function index(){

		$dbstaff = M('staff');
		$dbpaper = M('paper');
		$dbsoft = M('software');
		$dbpatent = M('patent');


		$staff = $dbstaff->select();
		$paper = $dbpaper->select();
		$soft = $dbsoft->select();
		$patent = $dbsoft->select();


		$this->show();
		}

	}


?>