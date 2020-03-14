<?php
/**
 * Created by PhpStorm.
 * User: jinchunguang
 * Date: 20-3-14
 * Time: 下午10:22
 */


require_once "./vendor/autoload.php";
require_once "GoogleAuthenticator.php";

$ga = new \GoogleAuthenticator();
$secret = $ga->createSecret();
echo "安全密匙: " . $secret . "<br><br>";


//第一个参数是"标识",第二个参数为"安全密匙SecretKey" 生成二维码信息
$qrCode = $ga->getQRCodeGoogleImage('www.xxx.com', $secret);
echo '<img src="data:' . $qrCode->getContentType() . ';base64,' . $qrCode->generate() . '" />';



/*//第一个参数是"标识",第二个参数为"安全密匙SecretKey" 生成二维码信息
$qrCodeUrl = $ga->getQRCodeGoogleUrlByQrserver('www.xxx.com', $secret);
//Google Charts接口 生成的二维码图片,方便手机端扫描绑定安全密匙SecretKey,第三方有点慢
echo "Qrserver: " . $qrCodeUrl . "<br>";*/
