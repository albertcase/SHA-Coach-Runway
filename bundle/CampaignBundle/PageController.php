<?php
namespace CampaignBundle;

use Core\Controller;

class PageController extends Controller {

	public function teasingAction() {
		$this->render('teasing');
	}

	public function clearCookieAction() {
		setcookie('_user', json_encode($user), time(), '/');
		$this->statusPrint('success');
	}

	public function markAction() {
		$request = $this->request;
    	$fields = array(
			'mark' => array('notnull', '120')
		);
		$request->validation($fields);
		$mark = $request->request->get('mark');
		$marks = explode(",", $mark);
		$DatabaseAPI = new \Lib\DatabaseAPI();
		for ($i = 0; $i < count($marks); $i++ ) {
			$DatabaseAPI->saveMark($marks[$i]);
		}
		$this->statusPrint('success');
	}

	public function getmarkAction() {
		$DatabaseAPI = new \Lib\DatabaseAPI();
		$marks = $DatabaseAPI->getMark();
		$list = array("1"=>0, "2"=>0, "3"=>0, "4"=>0, "5"=>0);
		foreach ($marks as $key => $value) {
			$list[$value['pid']] = $value['num'];
		}
		$this->dataPrint(array("status"=>1, "msg"=>$list));
	}

	public function sendAction() {
		ini_set("display_errors", 1);
		$ok=0;
		$total = 0;
		$curiowechatapi = new \Lib\CurioWechatAPI();
	    $DatabaseAPI = new \Lib\DatabaseAPI();
		$marks = $DatabaseAPI->getOpenid();
		foreach ($marks as $key => $value) {
			$total++;
			$rs= $curiowechatapi->sendTemplate($value['openid']);
			if ($rs) {
				$DatabaseAPI->sendover($value['uid']);
				$ok++;
			}
		}
		$this->statusPrint($total."|".$ok);
	}
}