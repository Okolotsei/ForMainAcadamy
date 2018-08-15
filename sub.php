<?php
/**
 * Created by PhpStorm.
 * User: vgalatin
 * Date: 15.08.2018
 * Time: 0:47
 */
define('EMAIL', 'Okolotsei@gmail.com');
$serch = strpos(EMAIL, '@');
if($serch) {
    $username = substr(EMAIL, 0, $serch);
    $domain = substr(EMAIL, $serch);
    echo $username . PHP_EOL;
    echo $domain . PHP_EOL;
}
?>
