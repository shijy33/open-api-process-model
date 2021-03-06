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

class AuthorizePlugin extends Yaf\Plugin_Abstract {

	public function routerStartup(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
	}

	public function routerShutdown(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
		$_result = FALSE;
		if (($request->controller != 'Error' || $request->controller != 'Test') && $request->method == 'GET') {
			$_result = $this->__authorize($_SERVER['QUERY_STRING'], $request, \Yaf\Registry::get('_SERVICE'));
		} else {
			$_result = TRUE;
		}

		if ($_result == FALSE) {
			header('HTTP/1.1 401 Unauthorized');
			exit();
		}
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
		//\LOG::record();
	}

	private function __authorize($_query_string, $_request, $_conf) {
		$_result = FALSE;
		if ($_conf->{strtolower($_request->controller)}->{strtolower($_request->action)}->secret
			==
			explode('&', $_query_string)[1]) {
			$_result = TRUE;
		}

		return $_result;
	}
} 