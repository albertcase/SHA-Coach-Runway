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
}