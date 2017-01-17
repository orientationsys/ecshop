<?php 
include_once(dirname(__FILE__)."/lianlian.config.php");

function zh_encode($matchs){
	return iconv('UCS-2BE', 'UTF-8', pack('H4', $matchs[1]));
}

class LianLianCommon{
    public function lianlianPayCard($postData,$isIframe,$isWap) {
		$lianlianData['version']=LianLianConfig::VERSION;//版本号
		$lianlianData['merchant_id']=LianLianConfig::MERCHANT_ID;//商户号
		$lianlianData['biz_code']=LianLianConfig::BIZ_CODE;//业务编码
		$lianlianData['trans_cur']='CNY';//币种
		//是否采用内嵌模式,只有pc端才可以
		if(!$isWap){
			$lianlianData['iframe']=$isIframe;
			$lianlianData['redirect_webbank']='1';
			$lianlianData['pay_type']="0";
		}
		$lianlianData['req_ip']=$_SERVER['REMOTE_ADDR'];
		$lianlianData['url_notify']=LianLianConfig::URL_NOTIFY;
		$lianlianData['url_return']=LianLianConfig::URL_RETURN;

		//以下为必填信息
		$lianlianData['merchant_userid']=$postData['merchant_userid'];//用户id（用户在商户平台上的唯一标识，由商户提供，且唯一）
		$lianlianData['merchant_orderno']=$postData['merchant_orderno'];//商户订单号
		$lianlianData['merchant_trans_date']=$postData['merchant_trans_date'];//商户订单交易日期(格式：YYYYMMDD24hhmmss）
		$lianlianData['trans_amt']=$postData['trans_amt']*10;//交易金额，最小单位厘，trans_amt为正整数
		$lianlianData['goods_name']=$postData['goods_name'];//商品名称
        $lianlianData['goods_type']=$postData['goods_type'];//商品类别
		
		// 风控参数 另外加的
		$lianlianData['delivery_addr_province']=$postData['delivery_addr_province']; // 编码见国家统计局：http://www.stats.gov.cn/tjsj/tjbz/xzqhdm最新县及县以上行政区划代码(截止2013年8月31日)
		$lianlianData['delivery_addr_city']=$postData['delivery_addr_city']; //深圳
		$lianlianData['delivery_addr_district']=$postData['delivery_addr_district']; // 南山
		$lianlianData['delivery_phone']=$postData['delivery_phone']; // 球先生手机
		$lianlianData['logistics_mode']=$postData['logistics_mode']; //  
		$lianlianData['delivery_cycle']=$postData['delivery_cycle']; //  				
		$lianlianData['extend_field1']=$postData['extend_field1']; //  		
		
		$lianlianData['risk_request_json']=$this->lianlianRisk($postData);//连连风控参数，json格式

		$src_sign =$lianlianData['version'].$lianlianData['merchant_id'].$lianlianData['merchant_userid'].$lianlianData['biz_code'].$lianlianData['url_notify'].$lianlianData['req_ip'].$lianlianData['goods_type'].$lianlianData['merchant_orderno'].$lianlianData['merchant_trans_date'].$lianlianData['trans_amt'].$lianlianData['trans_cur'].LianLianConfig::MD5_KEY;//签名原串
		$lianlianData['sign'] = md5($src_sign);//md5 加密
		return $lianlianData;
	}
    //不同的行业所传的风控参数也不同
    public function lianlianRisk($postData){
		$lianlianRisk['frms_ware_category']=$postData['goods_type'];
		$lianlianRisk['user_info_mercht_userno']=$postData['merchant_userid'];
		$lianlianRisk['user_info_dt_register']=$postData['merchant_trans_date'];
		$lianlianRisk['user_info_full_name']=$postData['user_name'];
		$lianlianRisk['user_info_id_no']=$postData['ID_card'];
		$lianlianRisk['user_info_identify_type']='3'; //1：银行卡认证2：现场认证3：身份证远程认证4：其它认证
		
		
		// 风控参数 另外加的
		$lianlianRisk['delivery_addr_province']=$postData['delivery_addr_province']; // 编码见国家统计局：http://www.stats.gov.cn/tjsj/tjbz/xzqhdm最新县及县以上行政区划代码(截止2013年8月31日)
		$lianlianRisk['delivery_addr_city']=$postData['delivery_addr_city']; //深圳
		$lianlianRisk['delivery_addr_district']=$postData['delivery_addr_district']; // 南山
		$lianlianRisk['delivery_phone']=$postData['delivery_phone']; // 球先生手机
		$lianlianRisk['logistics_mode']=$postData['logistics_mode']; //  
		$lianlianRisk['delivery_cycle']=$postData['delivery_cycle']; //  		
		
		
        return $this->json_encode_ex($lianlianRisk);
	}
    //异步通知验签
    public function lianlianNotify($postData){
		$notify=new Notify_pub();
		$notify->checkSign($postData,LianLianConfig::MD5_KEY);
		return $notify;
	}
    
    
    //转json格式时 中文不转码
    function json_encode_ex($data){
        if (version_compare(PHP_VERSION,'5.4.0','<')){
            $str = json_encode($data);
            $str = preg_replace_callback( "#\\\u([0-9a-f]{4})#i",'zh_encode',$str);
            return $str;
        }
        else{
            return json_encode($data, JSON_UNESCAPED_UNICODE);
        }
    }
}
class Notify_pub
{
	public $checkSign=FALSE;
	public $data='';
	public function checkSign($postData,$md5_key)
	{
		$data=json_decode($postData,true);
		//电话号码和身份证号没有的就不要加进去了，空字符串不参与验签
		$src_sign=$data['merchant_id'].$data['merchant_orderno'].$data['merchant_trans_date'].$data['oid_billno'].$data['pay_status'].$data['pay_create_date'].$data['pay_finish_date'].$data['date_acct'].$data['trans_amt'].$data['trans_cur'].$data['user_name'].$data['idno'].$md5_key;
		if(md5($src_sign)==$data['sign']){
			$this->checkSign=TRUE;
		}
		$this->data=$data;
	}
}

?>