<?php
session_start();
$cookie_file = dirname(__FILE__)."/../cookie/tmp.cookie";
if(!file_exists($cookie_file)) {
    $myfile = fopen($cookie_file, "w");
    fclose($myfile);
}
$t = isset($_GET['t'])?$_GET['t']:0;
$verify_code_url = "http://kmustjwcxk4.kmust.edu.cn/JWWEB/sys/ValidateCode.aspx?t=".$t;
$header=[
    'Accept:image/webp,image/apng,image/*,*/*;q=0.8',
    'Accept-Encoding:gzip, deflate',
    'Accept-Language:zh-CN,zh;q=0.9',
    'Cache-Control:private',
    'Content-Type: text/html; charset=gb2312',
    'Connection:keep-alive',
    'Host:kmustjwcxk4.kmust.edu.cn',  //修改名称
    'Pragma:no-cache',
    'Referer:http://kmustjwcxk4.kmust.edu.cn/JWWEB/_data/index_LOGIN.aspx',//修改名称
    'User-Agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36',
];
$curl = curl_init();
curl_setopt($curl,CURLOPT_HTTPHEADER,$header);  //设置表头
curl_setopt($curl, CURLOPT_URL, $verify_code_url); // 设置请求地址
curl_setopt($curl,CURLOPT_COOKIEJAR,$cookie_file); //获取COOKIE并存储
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$img = curl_exec($curl);
preg_match('/<input type=\"hidden\" name=\"__VIEWSTATE\" value=\"(.*)\"/iU',$img,$str);  
$__VIEWSTATE=$str[1];  
$_SESSION['__VIEWSTATE']=$str[1];
curl_close($curl);

//输出图片到html
echo $img;