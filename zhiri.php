<?php
date_default_timezone_set('PRC');//中国时区
function zhiri($n)
{
    $old_time = 1494518400;//程序制作时间
    $new_time = time();//目前的时间
    $day = ceil(($new_time-$old_time)/86400); //60s*60min*24h 距离今天真实的天数
    $day = $day + $n + 4;//测试的真实天数
    $new_day = (int)($day / 7) * 5 + $day % 7;//距离今天的有效天数
    $user = array('刘晓艺','刘业兴','胡蓬蓬','韩亭亭','李金妍','潘德公','耿振兴','郑权');
    $user_log = count($user);//人员长度
    $number = $new_day % $user_log;//指定人员
    //如果是周六和周天
    if ($day % 7 == 6 || $day % 7 == 0) {
        return '无';
    } else {
        return $user[$number];
    }
}
// echo '<br>';
// echo '<br>';
// echo '<br>';
// echo '<br>';
// echo '<br>';
//测试值日表
// for ($i = 0; $i < 30; $i++) {
//     echo '天数：'.$i.'  ';
//     echo zhiri($i);
//     echo '<br>';
// }
// echo '今日值日生：';
// echo zhiri(0);
//时间
$date = date('Y-m-d');
//星期
$weekarray=array("su","mo","tu","we","th","fr","sa"); //先定义一个数组
