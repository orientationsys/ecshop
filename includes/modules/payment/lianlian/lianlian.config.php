<?php
class LianLianConfig
{
    //=======【基本信息设置】=====================================
    const VERSION = "1.0";                      //版本号
    //const MERCHANT_ID = "201403172000003706";   //银通给商户提供的商户号，上线时需重新分配
	const MERCHANT_ID = "201502041000205502";   //银通给商户提供的商户号，上线时需重新分配
	
    const BIZ_CODE = "111002";                  //业务编号：银通提供的业务编号，固定值
    //const MD5_KEY = 'yangguanghaitao';          //md5秘钥，由连连提供给商户
	const MD5_KEY = 'sCf4HrmA';          //md5秘钥，由连连提供给商户
	
	//const MD5_KEY = '';          //md5秘钥，由连连提供给商户
    //const LLPAY_URL = 'http://test.yintong.com.cn/lcpay_web/cashier/securityCashier.htm';  //测试环境地址
    const LLPAY_URL = 'https://yintong.com.cn/globalpay/cashier/securityCashier.htm';  //正式环境地址
    
    //=======【异步通知url设置】=================================
    const URL_NOTIFY = "http://www.jke.hk/respond.php?code=lianlian&t=url_notify";      //商户接收通知的地址   
    //=======【通步通知url设置】=================================
    const URL_RETURN = "http://www.jke.hk/respond.php?code=lianlian&t=url_return";       //跳转到商户完成页面
	
//    const URL_NOTIFY = "http://www.jke.com/respond.php?code=lianlian";      //商户接收通知的地址   
    //=======【通步通知url设置】=================================
//    const URL_RETURN = "http://www.jke.com/respond.php?code=lianlian";       //跳转到商户完成页面
	
}
?>