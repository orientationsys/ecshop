//异步通知
<?php 
    include_once("lianlian.common.php");
    $postData='';
	if(empty($GLOBALS['HTTP_RAW_POST_DATA'])){
		return;
	}else{
		$postData = $GLOBALS['HTTP_RAW_POST_DATA'];
	}
    $lianlianPay = new LianLianCommon();
    $notify=$lianlianPay->llPayNotify($postData);
	if($notify->checkSign == TRUE){
		if($notify->data["pay_status"]=='0'){
            //支付成功 商户自行加相应流程
			$notify->data;//返回数据
		}else{
            //支付失败 商户自行加相应流程
		}
	}
	//成功之后的响应
	$retdata['retcode']='0000';
	$retdata['retmsg']='Success';
	echo json_encode($retdata);
?>