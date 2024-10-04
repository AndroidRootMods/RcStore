<?php  
ob_start(); 
$API_KEY = '7009630274:AAFukVLRTMu5EO6OuV3EHpMdqGYkHQrqw2E';  
define('API_KEY',$API_KEY); 
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
$from_id = $message->from->id; 
$chat_id = $message->chat->id; 
$txt = $message->text;
$from_id = $message->from->id;
 
if($txt != "حجرة" && $txt != "ورقة" && $txt != "مقص" && $txt == "/start"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"اختار ( حجرة - ورقة - مقص ) 🚶🏻.",
'parse_mode'=>"markdown", 
]); 
}
$random = array('انت فزت لان اختياري مقص 🌚🤞🏻', 'انا فزت لان اختياري ورقة 🌚🖱', 'نحن متعادلين 🌚✊🏻');
$random1 = array_rand($random, 1);
$rrues = array('انت الفائز لان اختياري حجرة 🌚✊🏻', 'نحن متعادلين 🤝🌚', 'انا فزت لان اختياري مقص 🌚🤞🏻');
$rues = array_rand($rrues);
$ccut = array('نحن متعادلين 🌚🤝 ','انا فزت لان اختياري حجرة 🌚✊🏻', ' انت فزت لان اختياري ورقة 🖱🌚');
$cut = array_rand($ccut);

if($txt == "حجرة"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$random[$random1],
'reply_to_message_id'=>$message->message_id, 
]);
}
if($txt == "مقص"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ccut[$cut],
'reply_to_message_id'=>$message->message_id, 
]);
}
if($txt == "ورقة"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rrues[$rues],
'reply_to_message_id'=>$message->message_id, 
]);
} 
