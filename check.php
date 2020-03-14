<?php

require_once "./vendor/autoload.php";

require_once "GoogleAuthenticator.php";
$ga = new GoogleAuthenticator();

// 服务端安全密匙
$secret = 'TP2LXK34TBE35HMD';
// 客户端一次性验证码
$safetCode = '022256';

//  把提交的验证码和服务端上生成的验证码做对比,最后一个参数 为容差时间,这里是2 那么就是 2 * 30 sec 一分钟.
$checkResult = $ga->verifyCode($secret, $safetCode, 1);
if ($checkResult) {
    echo '成功';
} else {
    echo '失败';
}
