<?php
require('customCurl.php');

$curlObj = CustomCurl::init('http://www.w3school.com.cn/example/php/demo_php_global_post.php', 'post')
            ->set('postFields', ['fname' => 'jshensh'])
            ->exec();

if ($curlObj->getStatus()) {
    var_dump($curlObj->getHeader(), $curlObj->getCookies(), $curlObj->getBody(), $curlObj->getInfo());
} else {
    var_dump($curlObj->getCurlErrNo());
}
