<?php

$routers = array();
$routers['/wechat/oauth2'] = array('WechatBundle\Wechat', 'oauth');
$routers['/wechat/callback'] = array('WechatBundle\Wechat', 'callback');
$routers['/wechat/curio/callback'] = array('WechatBundle\Curio', 'callback');
$routers['/wechat/curio/receive'] = array('WechatBundle\Curio', 'receiveUserInfo');
$routers['/wechat/ws/jssdk/config/webservice'] = array('WechatBundle\WebService', 'jssdkConfigWebService');
$routers['/wechat/ws/jssdk/config/js'] = array('WechatBundle\WebService', 'jssdkConfigJs');
$routers['/ajax/post'] = array('CampaignBundle\Api', 'form');
$routers['/teasing'] = array('CampaignBundle\Page', 'teasing');
$routers['/clear'] = array('CampaignBundle\Page', 'clearCookie');
$routers['/api/mark'] = array('CampaignBundle\Page', 'mark');
$routers['/api/getmark'] = array('CampaignBundle\Page', 'getmark');
$routers['/api/send'] = array('CampaignBundle\Page', 'send');