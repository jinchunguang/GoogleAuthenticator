<?php

require_once "./vendor/autoload.php";

require_once "GoogleAuthenticator.php";

$ga = new GoogleAuthenticator();

// $secret 服务端的 "安全密匙SecretKey"
$secret = '5XM6ULWH5M4WZ5N7';

// $oneCode 手机上看到的 "一次性验证码"
$oneCode = '328050';

//  把提交的验证码和服务端上生成的验证码做对比,最后一个参数 为容差时间,这里是2 那么就是 2 * 30 sec 一分钟.
$checkResult = $ga->verifyCode($secret, $oneCode, 1);


if ($checkResult) {
    //这里添加自定义逻辑
    echo '成功';
} else {
    echo '失败';
}
