<?php
// ˢ������һ�������˺ŵ���Ϣ  2015��10��7��10:15:47 �޸���΢���ĵ���bug ͬ���˶�ά��  �������õ�һ������
class SyncaWeixinpublicJob {
	public function perform($r) {
		$sp_uid=$r['sp_uid'];
		$public_uid = $r['uid'];
		$authorizer_appid = $r['app_id'];
		$ret_query_auth='';
		$ret_authorizer_info=ComponentMod::get_authorizer_info($authorizer_appid);
		Weixin::weixin_log('ret_authorizer_info  ===== '.json_encode($ret_authorizer_info));
		$public_uid=ComponentMod::add_or_edit_weixin_public($ret_query_auth,$ret_authorizer_info,$sp_uid);
		var_dump($public_uid);
	}

}

