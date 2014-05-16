<?php

	class CheckAction extends Action{

		public function checkauth(){

			if(isset( $_SESSION )){

				if(session('authname') == 'admin318'){

					session( array('expire'=>1440) );
					return true;
				}

			}

			return false;
		}
	}
?>