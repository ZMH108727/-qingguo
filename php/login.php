<?php
date_default_timezone_set('GMT');
$cookie_file = dirname(__FILE__)."/../cookie/tmp.cookie";
$__VIEWSTATE=@$_SESSION['__VIEWSTATE'];
//$cookie=@$_SESSION['cookie'];
$url = 'http://kmustjwcxk4.kmust.edu.cn/jwweb/_data/index_LOGIN.aspx';
$exampleInputPassword1=$_POST['txt_pewerwedsdfsdff'];
$id=$_POST['txt_asmcdefsddsd'];
$a=strtoupper(substr(md5($exampleInputPassword1),0,30));
$dsdsdsdsdxcxdfgfg=strtoupper(substr(md5($id.$a."10674"),0,30));
$code=$_POST['validatessss'];
$b=strtoupper(substr(md5(strtoupper($code)),0,30));
$fgfggfdgtyuuyyuuckjg=strtoupper(substr(md5($b."10674"),0,30));
$post =  [
    '__VIEWSTATE' =>$__VIEWSTATE,
    'pcInfo' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36undefined5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36 SN:NULL',
    'typeName' =>'(unable to decode value)',
    'dsdsdsdsdxcxdfgfg' =>$dsdsdsdsdxcxdfgfg,
    'fgfggfdgtyuuyyuuckjg' => $fgfggfdgtyuuyyuuckjg,
    'Sel_Type' => 'STU',
    'txt_asmcdefsddsd' => $_POST['txt_asmcdefsddsd'],
    'txt_pewerwedsdfsdff'=> '',
    'txt_sdertfgsadscxcadsads' => '',
    'sbtState' => '',
];
$post = http_build_query($post);
$headers = array(
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
    'Accept-Encoding: gzip, deflate',
    'Accept-Language: zh-CN,zh;q=0.9',
    'Cache-Control: max-age=0',
    'Connection: keep-alive',
    'Content-Type: application/x-www-form-urlencoded',
    'Host: kmustjwcxk4.kmust.edu.cn',
    'Origin: http://kmustjwcxk4.kmust.edu.cn',
    'Referer: http://kmustjwcxk4.kmust.edu.cn/jwweb/_data/index_LOGIN.aspx',
    'Upgrade-Insecure-Requests: 1',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36',
);
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl,CURLOPT_HTTPHEADER,$headers);
curl_setopt ($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HEADER, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($curl, CURLOPT_AUTOREFERER,true);
curl_setopt($curl, CURLOPT_COOKIEFILE, $cookie_file);
curl_setopt ( $curl, CURLOPT_POSTFIELDS, $post );
curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1);
$filecontent=curl_exec($curl);
$file = dirname(__FILE__)."/../html/erro.html";
$fp = fopen($file,"w");
fwrite($fp,$filecontent);
fclose($fp);
curl_close($curl);

echo '<script>';  
echo 'alert("登录成功成功");window.open("/../qingguo/view/index.html","_self")';  
echo '</script>';
//$file = dirname(__FILE__)."/../html/test.html";

//$fp = fopen($file,"wb");
//fwrite($fp,$result);
//fclose($fp);