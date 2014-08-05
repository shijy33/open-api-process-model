<?php
namespace User;

class ProfileModel {

	function __construct() {

	}

	function __destruct() {

	}

	public function get($_parameters = []) {
		$_result = FALSE;

		\Core\Rpc::add_client(RPC_USER_PROFILE_URI);
		//$_result = \Core\Rpc::call()->RegisterAccount('17090440005','FFFFFFFFFFFFFFFFFFF', 0, [], '史景烨', '北京', '010', '130xxxxxxxxxx');
		$_result = [
			'name'  =>  'duanChi'
		];

		return $_result;
	}
}