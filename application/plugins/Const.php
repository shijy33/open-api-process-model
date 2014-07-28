<?php
/**
 * File    application\plugin\Process.php
 * Desc    请求预处理插件模块
 * Manual  svn://svn.vop.com/api/manual/plugin/Process
 * version 1.0.0
 * User    duanchi <http://weibo.com/shijingye>
 * Date    2013-11-22
 * Time    20:36
 */

class ConstPlugin extends Yaf\Plugin_Abstract {

	function __construct() {
		//parse constant config
		$_conf = get_yaf_config('constant.ini');

		foreach ($_conf as $_property => $_value) {
			define($_property, $_value);
		}


		unset($_conf);
	}

	public function routerStartup(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
	}

	public function routerShutdown(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
	}

	public function dispatchLoopStartup(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {

	}

	public function preDispatch(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {

	}

	public function postDispatch(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {

	}

	public function dispatchLoopShutdown(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {

	}

	public function preResponse(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {

	}

	function __destruct() {
	}

	private function _app_define($_array = []) {
		foreach ($_array as $k => $v) define('API_'.strtoupper($k), $v);
	}
} 