<?php
namespace Lib;

use Core\Response;

class CurioWechatAPI {
	
	public function wechatAuthorize() {
    	$response = new Response();
    	$response->redirect(CURIO_AUTH_URL);  
  	}

  	public function getUserInfo($openid) {
	  	$api_url = "http://coach.samesamechina.com/v2/wx/users/no_cache/" . $openid . "?access_token=" . CURIO_TOKEN;
	    $ch = curl_init();
	    // print_r($ch);
	    curl_setopt ($ch, CURLOPT_URL, $api_url);
	    //curl_setopt($ch, CURLOPT_POST, 1);
	    curl_setopt ($ch, CURLOPT_HEADER, 0);
	    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	    //curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
	    $info = curl_exec($ch);
	    curl_close($ch);
	    $rs = json_decode($info, true);
	    return $rs;
	}

	public function isSubscribed($openid) {
	    $info = $this->getUserInfo($openid);
	    if(isset($info['subscribe']) && $info['subscribe'] == 1)
	      return TRUE;
	    else
	      return FALSE;
	}

	public function sendTemplate($openid) {
		$arr = array();
	    $arr['touser'] = $openid;
	    $arr['template_id'] = 'WndD3kOmw-_OvtTPg0yfs0qziEWoHirCnsyXF8IiPns';
	    $arr['url'] = '';
	    $arr['topcolor'] = '#FFFFFF';
	    $arr['data']['first']['value'] = 'COACH 2017秋季即看即买大秀即将开始';
	    $arr['data']['first']['color'] = '#FFFFFF';
	    $arr['data']['keyword1']['value'] = '尊贵嘉宾';
	    $arr['data']['keyword1']['color'] = '#FFFFFF';
	    $arr['data']['keyword2']['value'] = '2017-02-19';
	    $arr['data']['keyword2']['color'] = '#FFFFFF';
	    $arr['data']['remark']['value'] = '请您尽快入场，耐心等候';
	    $arr['data']['remark']['color'] = '#FFFFFF';
	    $arr = json_encode(urldecode($arr));

	    $api_url = "http://coach.samesamechina.com/v2/wx/template/send?access_token=" . TOKEN;
	    $ch = curl_init();
	    // print_r($ch);
	    curl_setopt ($ch, CURLOPT_URL, $api_url);
	    //curl_setopt($ch, CURLOPT_POST, 1);
	    curl_setopt ($ch, CURLOPT_HEADER, 0);
	    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	    //curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
	    $info = curl_exec($ch);
	    curl_close($ch);
	    $rs = json_decode($info, true);
	    return $rs;
	}
}