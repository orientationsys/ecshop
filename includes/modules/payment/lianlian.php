<?php
/**
 * ECSHOP 连连支付插件
 * ============================================================================
 */

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

$payment_lang = ROOT_PATH . 'languages/' .$GLOBALS['_CFG']['lang']. '/payment/lianlian.php';

if (file_exists($payment_lang))
{
    global $_LANG;

    include_once($payment_lang);
}

/* 模块的基本信息 */
if (isset($set_modules) && $set_modules == TRUE)
{
    $i = isset($modules) ? count($modules) : 0;

    /* 代码 */
    $modules[$i]['code']    = basename(__FILE__, '.php');

    /* 描述对应的语言项 */
    $modules[$i]['desc']    = 'lianlian_desc';

    /* 是否支持货到付款 */
    $modules[$i]['is_cod']  = '0';

    /* 是否支持在线支付 */
    $modules[$i]['is_online']  = '1';

    /* 作者 */
    $modules[$i]['author']  = 'my lianlian';

    /* 网址 */
    $modules[$i]['website'] = 'http://www.lianlianpay.com';

    /* 版本号 */
    $modules[$i]['version'] = '1.0';

    /* 配置信息 */
    $modules[$i]['config']  = array(
       // array('name' => 'lianlian_account',           'type' => 'text',   'value' => ''),
       // array('name' => 'lianlian_key',               'type' => 'text',   'value' => ''),                
    );

    return;
}

/**
 * 类
 */
class lianlian
{

    /**
     * 构造函数
     *
     * @access  public
     * @param
     *
     * @return void
     */


    function __construct()
    {
        $this->lianlian();
    }
    function lianlian()
    {
    }
    /**
     * 生成支付代码
     * @param   array   $order      订单信息
     * @param   array   $payment    支付方式信息
     */
    function get_code($order, $payment)
    {
        if (!defined('EC_CHARSET'))
        {
            $charset = 'utf-8';
        }
        else
        {
            $charset = EC_CHARSET;
        }    
	
	//ini_set('display_errors',1);ini_set('error_reporting',E_ALL);
	include_once(ROOT_PATH."includes/modules/payment/lianlian/lianlianPay.common.php");
	//include_once(dirname(__FILE__)."/lianlian/lianlianPay.common.php");
	
    $lianlianPay = new LianLianCommon();
    //print_r($_SESSION);
	
    $postData['merchant_userid']=$_SESSION['user_id'];//用户再商户系统的唯一标识 应该是用户id
	$postData['merchant_orderno']=$order['order_sn'];//."_".$order['log_id']; // 商户订单号
	$postData['merchant_trans_date']=date("YmdHis");
    $postData['trans_amt']=$order['order_amount'] * 100; //订单金额
	$postData['goods_name']='进口易商城'; 
	$postData['goods_type']='4999';
	// 广东 深圳
	//print_r($order);
	include_once(ROOT_PATH."includes/modules/payment/lianlian/delivery_addr_config.php");
	
    $province2 = $GLOBALS['db']->getOne("SELECT region_name FROM   `ecs_region` WHERE region_id = {$order['province']} ");
	$city2 = $GLOBALS['db']->getOne("SELECT region_name FROM   `ecs_region` WHERE region_id = {$order['city']} ");
	$district2 = $GLOBALS['db']->getOne("SELECT region_name FROM   `ecs_region` WHERE region_id = {$order['district']} ");

	$postData['delivery_addr_province']=$delivery_addr[$province2.'省']; // 编码见国家统计局：http://www.stats.gov.cn/tjsj/tjbz/xzqhdm最新县及县以上行政区划代码(截止2013年8月31日)
	$postData['delivery_addr_city']=$delivery_addr[$city2.'市']; //深圳
	$postData['delivery_addr_district']=$delivery_addr[$district2]; // 南山
	$postData['delivery_phone']=$order['tel']; // 球先生手机
	$postData['logistics_mode']='2'; //  普通快递
	$postData['delivery_cycle']='12h'; //  
	/*
		没有推送，1.支付时eport_code没有传。2.请提供在广州口岸的备案号
		广州亚晋国际货运代理有限公司  海关备案号：PTE51411410310000001	
	*/
	
	$postData['extend_field1']='Gzeport';
	//$postData['eport_code']='PTE51411410310000001';
	
	
	
	//$postData['user_name']='姓名'; // 付款人姓名 可以为空
	//$postData['ID_card']='440301195612154875';
    $payData=$lianlianPay->lianlianPayCard($postData,'false',false);	
		/*
        $parameter = array(
            'extend_param'      => $extend_param,
            'service'           => $service,
            'partner'           => $payment['alipay_partner'],
            //'partner'           => ALIPAY_ID,
            '_input_charset'    => $charset,
            'notify_url'        => return_url(basename(__FILE__, '.php')),
            'return_url'        => return_url(basename(__FILE__, '.php')),
            // 业务参数 
            'subject'           => $order['order_sn'],
            'out_trade_no'      => $order['order_sn'] . $order['log_id'],
            'price'             => $order['order_amount'],
            'quantity'          => 1,
            'payment_type'      => 1,
            // 物流参数 
            'logistics_type'    => 'EXPRESS',
            'logistics_fee'     => 0,
            'logistics_payment' => 'BUYER_PAY_AFTER_RECEIVE',
            //买卖双方信息 
            'seller_email'      => $payment['alipay_account']
        );
		*/
      //  ksort($parameter);
      //  reset($parameter);
		//reset($payData);
		//$payData['url_notify'] = return_url(basename(__FILE__, '.php'))."&t=notify";
		//$payData['url_return'] = return_url(basename(__FILE__, '.php'))."&t=return";
 
//		$payData['url_notify'] = return_url(basename(__FILE__, '.php'));
//		$payData['url_return'] = return_url(basename(__FILE__, '.php'));
 		include_once(ROOT_PATH."includes/modules/payment/lianlian.config.php");
		$action  =  LianLianConfig::LLPAY_URL;
		//$action  = "http://test.yintong.com.cn/lcpay_web/cashier/securityCashier.htm"; //测试环境
		//$action  = "https://yintong.com.cn/globalpay/cashier/securityCashier.htm";  //正式环境地址
		//target="_blank"
        $button  = '<br />
		<form style="text-align:center;" action="'.$action.'"  method="post"  style="margin:0px;padding:0px" >';

        foreach ($payData AS $key=>$val)
        {
            $button  .= "<input type='hidden' name='$key' value='$val' />";
        }

        $button  .= '<input type="button" onclick="this.form.submit();" value="' .$GLOBALS['_LANG']['pay_button']. '" /></form><br />';

        return $button;
    }

    /**
     * 响应操作
     */
    function respond()
    {
	
	
	   // ini_set('display_errors',1);ini_set('error_reporting',E_ALL);	 				
		include_once(ROOT_PATH."includes/modules/payment/lianlian/lianlianPay.common.php");
		include_once(ROOT_PATH."includes/modules/payment/lianlian.config.php");
		$lianlianPay = new LianLianCommon();
		$md5_key = LianLianConfig::MD5_KEY;
		
		
		file_put_contents(dirname(__FILE__).'/a.text','------'.print_r($_REQUEST,true).'-----------',FILE_APPEND);	
		file_put_contents(dirname(__FILE__).'/a.text','====='.print_r(json_decode($GLOBALS['HTTP_RAW_POST_DATA'],true),true).'=======',FILE_APPEND);			
		//file_put_contents(dirname(__FILE__).'/a.text',$md5_key.'===========',FILE_APPEND);	
		
		$data = $_REQUEST;
		//$data = $GLOBALS['HTTP_RAW_POST_DATA']; 		
		//电话号码和身份证号没有的就不要加进去了，空字符串不参与验签
		$src_sign=$data['merchant_id'].$data['merchant_orderno'].$data['merchant_trans_date'].$data['oid_billno'].$data['pay_status'].$data['pay_create_date'].$data['pay_finish_date'].$data['date_acct'].$data['trans_amt'].$data['trans_cur'].$data['user_name'].$data['idno'].$md5_key;
		if(md5($src_sign)!=$data['sign']){
			//return false;
		}
		//file_put_contents(dirname(__FILE__).'/a.text',md5($src_sign).'=='.$data['sign'].'*************',FILE_APPEND);					
		//file_put_contents(dirname(__FILE__).'/a.text',"php://input".'&&&&&&&&&&',FILE_APPEND);	
		
			
			 $url_notify = json_decode($GLOBALS['HTTP_RAW_POST_DATA'],true);
			 // 如果是服务器点对点返回
			 if($url_notify['pay_status'] === '0' && (!empty($url_notify['merchant_orderno'])))
			 {      /* 改变订单状态 */
					//$log_id = explode('_',$url_notify['merchant_orderno']);
					//$log_id = end($log_id);
					$log_id = $GLOBALS['db']->getOne("SELECT log_id FROM  ecs_pay_log WHERE order_id = (SELECT order_id FROM ecs_order_info WHERE order_sn = '{$url_notify['merchant_orderno']}')");					
					order_paid($log_id,2);
					//file_put_contents(dirname(__FILE__).'/a.text',"=======order_paid({$_REQUEST['merchant_orderno']});=============",FILE_APPEND);				 
					//成功之后的响应
					$retdata['retcode']='0000';
					$retdata['retmsg']='Success';
					echo json_encode($retdata);
					exit;  								 
			 }
			 
		    //  浏览器同步返回 SUCCESS 成功 PROCESSING  支付上未处理完成
			if($_REQUEST["pay_status"]=='SUCCESS' || $_REQUEST['pay_status'] == 'PROCESSING')
			{
				//支付成功 商户自行加相应流程
				//返回数据
				return true;				
			}else{
				//支付失败 商户自行加相应流程				
				return false;
			}
			 
 		
			
		}

}
?>