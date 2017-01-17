/**
*�̻����Ը����Լ���ʵ�����ȥ�������ҳ�棬����Ҳ�����Լ���ƣ���demoֻ���ṩһ������
*
*/
<?php 
    //include_once("lianlian.common.php");
	include_once("lianlianPay.common.php");
	
    $lianlianPay = new LianLianCommon();
    
    $postData['merchant_userid']=md5('����');
	$postData['merchant_orderno']='orderNo'.time();
	$postData['merchant_trans_date']=date("YmdHis");
    $postData['trans_amt']=1;
	$postData['goods_name']='��Ʒ����';
	$postData['goods_type']='2001';
	$postData['user_name']='����';
	$postData['ID_card']='440301195612154875';
    
	$payIframeData=$lianlianPay->lianlianPayCard($postData,'true',false);   //iframeģʽ
    $payData=$lianlianPay->lianlianPayCard($postData,'false',false);
    
    echo '<pre>';
    print_r($payIframeData);
    echo '</pre>';
    
    echo '<pre>';
    print_r($payData);
    echo '</pre>';
    
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
    <title>����֧��demo</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
   <div align="center">

   </div>
   <div id="paydiv" style="display:"></div>
   
</body>
	<script>
        var postForm = document.createElement("form");
        var payData=<?php echo $lianlianPay->json_encode_ex($payData)?>;
        postForm.method="post" ;
        //postForm.action = 'https://yintong.com.cn/globalpay/wap/gateway/securityCashier.htm';
        postForm.action = 'https://yintong.com.cn/globalpay/cashier/securityCashier.htm' ;
       
        for(var key in payData)
        {
            var input = document.createElement("input");
            input.setAttribute("name", key) ;
            input.setAttribute("value", parent.payData[key]);
            postForm.appendChild(input) ;
        }
        document.getElementById("paydiv").appendChild(postForm) ;
      //  postForm.submit() ;
	</script>
</html>