

<?php
$user = $_GET['user'];
$pzid = $_GET['pzid'];
$pzz="./user/".$user."/".$pzid."/index.php";
include($pzz);
$json = '';
$data = array();
class User 
{

}// 创建连接
$user = new User();
$user->top=$appset['top'];//第一行文字
$user->bottom=$appset['bottom'];//第二行文字
$user->one=$appset['one'];//按钮1文字
$user->two=$appset['two'];//按钮2文字
 $user->three=$appset['three'];//按钮3文字
 $user->isOpen=$appset['isOpen'];//是否开启弹参数是true/false
 $user->isShare=$appset['isShare'];//是否开启分享参数是true/false
 $user->isNeverShow=$appset['isNeverShow'];//未知参数
 $user->shareMsg=$appset['shareMsg'];//分享内容
 $user->shareNum=$appset['shareNum'];//分享次数123456
 $user->oneType=$appset['oneType'];//按钮事件1是加群2是分享或者直接进入3是跳转链接
 $user->oneLink=$appset['oneLink'];//按钮1点击跳转的链接/没选事件3可以不填
 $user->oneGroup=$appset['oneGroup'];//按钮1key也就是加群的key
 $user->twoType=$appset['twoType'];//按钮2事件 事件类型和按钮1一样
 $user->twoLink=$appset['twoLink'];//按钮2跳转链接
 $user->twoGroup=$appset['twoGroup'];//按钮2群key
 $user->threeType=$appset['threeType'];//按钮3事件也是按钮1一样
 $user->threeLink=$appset['threeLink'];//按钮3跳转链接
 $user->threeGroup=$appset['threeGroup'];//按钮3群key
 $user->oneVisible=$appset['oneVisible'];//按钮1是否可见参数是true/false
 $user->twoVisible=$appset['twoVisible'];//按钮2是否可见参数是true/false
 $user->threeVisible=$appset['threeVisible'];//按钮3是否可见参数是true/false

//$data[]=$user;
$json = json_encode($user);//把数据转换为JSON数据.

echo $json;
?>


