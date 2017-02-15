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

	public function likeAction() {
		$request = $this->request;
    	$fields = array(
			'id' => array('notnull', '120')
		);
		$request->validation($fields);
		$id = $request->request->get('id');
		$DatabaseAPI = new \Lib\DatabaseAPI();

	}
}