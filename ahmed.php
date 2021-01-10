<?php 
/* 
بوت الباحث القرآني 
الإصدار الثالث 
 
فضلا اترك حقوق القناة 
@hjhjfjhfj 
*/ 
 
ob_start(); 
 
$API_KEY = 
"1576689046:AAHB5zVo78Mk7iYbJxy_wg61yqcuBj-Ij5E";
 
define 
("API_KEY",$API_KEY);
function bot 
($method,$str=[]){
        
$http_build_query= 
http_build_query($str); 
        $api = 
"https://api.telegram.org/bot".API_KEY."/".$method."?$http_build_query";
        
$http_build_query= 
file_get_contents($api); 
        return 
json_decode
($http_build_query);
} 
 
$update = json_decode 
(file_get_contents
("php://input"));
$message = $update- 
>message;
$from_id = $message- 
>from->id; 
$chat_id = $message- 
>chat->id; 
$text = $message->text; 
$message_id = $message- 
>message_id;
 
 
if($text == "/start"){ 
bot("sendMessage",[ 
"chat_id"=>$chat_id, 
"text"=>" 
حياك الله في خدمة الباحث 
القرآني
 
اكتب ما تذكره من الآية 
القرآنيةحتى أقوم بالبحث 
فيالقرآن الكريم وجلب 
جميعالنتائج المطابقة 
 
مثال: 
الله نور السماوات والأرض 
 
لتفسير آية يوجد نوعين من 
التفسيرتفسير الميسر 
والجلالين: 
 
مثال: 
الميسر الله نور السماوات 
والأرض
الجلالين الله نور 
السماواتوالأرض 
 
 
لشرح آية باللغة 
الإنجليزية
إنجليزي الله نور 
السماواتوالأرض 
 
خدمة الباحث القرآني على 
الانترنت: 
www.api-quran.cf 
", 

reply_to_message_id=>$message_id,
]); 
} 
 
$txt = str_replace 
("الميسر","",$text); 
$json = json_decode 
(file_get_contents
("https://api-islamic.cf/quransql/?text=".urlencode
($txt)."&type=tafser2"))-
>result;
$count = count($json); 
if(preg_match('/الميسر 
/',$text)){
if ( $text && $text != 
"/start") { 
bot("sendMessage",[ 
"chat_id"=>$chat_id, 
"text"=>"تم العثور على 
$countمن النتائج", 

reply_to_message_id=>$message_id,
]); 
for( $i=0; $i <= 10; 
$i++){
bot("sendMessage",[ 
"chat_id"=>$chat_id, 
"text"=>$json[$i], 
]); 
} 
die("hi"); 
} 
} 
 
$txt = str_replace 
("الجلالين","",$text); 
$json = json_decode 
(file_get_contents
("https://api-islamic.cf/quransql/?text=".urlencode
($txt)."&type=tafser1"))-
>result;
$count = count($json); 
if(preg_match 
('/الجلالين/',$text)){ 
if ( $text && $text != 
"/start") { 
bot("sendMessage",[ 
"chat_id"=>$chat_id, 
"text"=>"تم العثور على 
$countمن النتائج", 

reply_to_message_id=>$message_id,
]); 
for( $i=0; $i <= 10; 
$i++){
bot("sendMessage",[ 
"chat_id"=>$chat_id, 
"text"=>$json[$i], 
]);} 
die(""); 
} 
} 
 
$txt = str_replace 
("انجليزي","",$text); 
$txt = str_replace 
("إنجليزي","",$txt);
$json = json_decode 
(file_get_contents
("https://api-islamic.cf/quransql/?text=".urlencode
($txt)."&type=english"))-
>result;
$count = count($json); 
if(preg_match 
('/انجليزي/',$text) or 
preg_match('/إنجليزي 
/',$text)){
if ( $text && $text != 
"/start") { 
bot("sendMessage",[ 
"chat_id"=>$chat_id, 
"text"=>"تم العثور على 
$countمن النتائج", 

reply_to_message_id=>$message_id,
]); 
for( $i=0; $i <= 10; 
$i++){
bot("sendMessage",[ 
"chat_id"=>$chat_id, 
"text"=>$json[$i], 
]);} 
die(""); 
} 
} 
 
 
 
$json = json_decode 
(file_get_contents
("https://api-islamic.cf/quransql/?text=".urlencode
($txt)."&type=search"))-
>result;
$count = count($json); 
if ( $text && $text != 
"/start") { 
bot("sendMessage",[ 
"chat_id"=>$chat_id, 
"text"=>"تم العثور على 
$countمن النتائج", 

reply_to_message_id=>$message_id,
]); 
for( $i=0; $i <= 10; 
$i++){
bot("sendMessage",[ 
"chat_id"=>$chat_id, 
"text"=>$json[$i], 
]); 
} 
} 
?> 
 
/* 
بوت الباحث القرآني 
الإصدار الثالث 
 
فضلا اترك حقوق القناة 
@hjhjfjhfj 
*/ 
