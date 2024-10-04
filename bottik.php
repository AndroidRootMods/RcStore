<?php
ob_start();
$token = "توكن";
define('API_KEY', $token);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/"
     .$method;
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
$message= $update->message;
$text = $message->text;
$chat_id= $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$a = strtolower($text);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;

$msg = file_get_contents("msg.php");
$forward = file_get_contents("forward.php");
$midea = file_get_contents("midea.php");
$inlin = file_get_contents("inlin.php");
$photoi = file_get_contents("photoi.php");
$upq = file_get_contents("up.php");
$skor = file_get_contents("skor.php");

$admin = 1310747584; #ايديك

mkdir("data");

$channel = file_get_contents("link.php");
$link = file_get_contents("link2.php");
$ch = "$channel"; 
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"
»  عليك الاشتراك في قناة تحديثات البوت اولا 📨
»  ليمكنك استخدام البوت  🔊
»  اشترك ثم ارسل { /start }
»  [اضغط هنا للشتراك في القناة]($link)",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);return false;}

$uuser = file_get_contents("uuser.php");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$uuser&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"
»  عليك الاشتراك في قناة تحديثات البوت اولا 📨
»  ليمكنك استخدام البوت  🔊
»  اشترك ثم ارسل { /start }
»  $uuser",
]);return false;}

$users = explode("\n",file_get_contents("abbas.json"));

if($message){
if(!in_array($from_id,$users)){
file_put_contents("abbas.json",$from_id."\n",FILE_APPEND);}}

$tc = $message->chat->type;
$abbas09 = json_decode(file_get_contents("abbas09.json"),true);
$suodo = $abbas09['sudoarr'];
$al = $abbas09['addmessage'];
$ab = $abbas09['messagee'];
$xll = $al + $ab;
if($message and $from_id !== $admin){
$abbas09['messagee'] = $abbas09['messagee']+1;
file_put_contents("abbas09.json",json_encode($abbas09,32|128|265));
}
if($message and $from_id == $admin){
$abbas09['addmessage'] = $abbas09['addmessage']+1;
file_put_contents("abbas09.json",json_encode($abbas09,32|128|265));
}

$all = count($users)-1;

$adminss = explode("\n",file_get_contents("ad.json"));

$k088 = file_get_contents("data/k088.txt");
$q1 = file_get_contents("data/q1.txt");
$q2 = file_get_contents("q2.txt");
$q3 = file_get_contents("data/q3.txt");
$q4 = file_get_contents("q4.txt");
$q5 = file_get_contents("data/q5.txt");
$aralikan = file_get_contents("q6.txt");


if($message){
if(!in_array($admin,$adminss)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
تم تحديث القائمه /start
",
]);
file_put_contents("ad.json",$admin."\n",FILE_APPEND);
}}

$d = date('D');
$day = explode("\n",file_get_contents($d.".txt"));
$todayuser = count($day);
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wedtxt");
}
if($d == "Fri"){
unlink("Thu.txt");
}
if($message and !in_array($from_id, $day)){ 
file_put_contents($d.".txt",$from_id. "\n",FILE_APPEND);
}

$from_id = $message->from->id;
$name = $message->from->first_name;
$id = $message->from->id;
$user = $message->from->username;
if($user){
$user = "@$user";
}
elseif(!$uaer){
$user = "بلا معرف";
}
if($text =="/start" and !in_array($from_id,$users)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
٭ تم دخول شخص جديد الى البوت الخاص بك 👾
  
• معلومات العضو الجديد .
                 •--•
• الاسم : $name
• المعرف : $user
• الايدي : $id
                  •--•
• عدد الاعضاء الكلي : $all
",
]);
}

$bot = file_get_contents("bot.txt");

if($text =="/start" and in_array($from_id,$adminss)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"-•
🤍 | اهلا بك
🤍 | اليك قائمه الاوامر

dev: @qqqqbqq  || 🇮🇶 
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- قفل البوت .","callback_data"=>"abcd"],["text"=>"- فتح البوت .","callback_data"=>"abcde"]],
[["text"=>"- اعضاء البوت .","callback_data"=>"userd"]],
[["text"=>"- تفعيل التنبيه .","callback_data"=>"ont"],["text"=>"- تعطيل التنبيه .","callback_data"=>"oft"]],
[["text"=>"- قسم الاذاعةه .","callback_data"=>"for"]],
[['text' => "- قائمةه الاشتراك .", 'callback_data' => "channel"],['text' => "- الاشتراك ($skor) .", "callback_data" => "off"]],
[['text' => "- نسخة احتياطيةه .", 'callback_data' => "file"],['text' => "- رفع النسخةه .", 'callback_data' => "up"]],
[['text' => "- الاحصائيات .", 'callback_data' => "pannel"],['text' => "- قسم الادمن .", 'callback_data' => "lIllabbas"]],
[['text' => "- التعديلات .", 'callback_data' => "xxxtentacionllllo"]],
[['text' => "- كليشةه /start .", 'callback_data' => "editstart"]],
]])
]);   
}

//
if($data =="lIllabbas"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"اهلا", 
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- رفع ادمن.","callback_data"=>"adl"]],
[["text"=>"- اخر الادمن.","callback_data"=>"addmin"]],
[["text"=>"- حذف الادمنيه.","callback_data"=>"delateaddmin"]],
]])
]);   
}

if($data == "adl"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
قم بارسال ايدي العضو
 ",
]); 
file_put_contents("data/k088.txt","k088");
}
if($text !="/start" and $k088 == "k088" and !in_array($text,$adminss)){
file_put_contents("data/k088.txt","none");
file_put_contents("ad.json",$text."\n",FILE_APPEND);} 

if($text != "/start" and $k088 == "k088" and !in_array($text,$adminss)){
file_put_contents("data/k088.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم رفع العضو", 
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"تم رفعك ادمن في البوت", 
]);
}
if($text !="/start" and $k088 == "k088" and in_array($text,$adminss)){
file_put_contents("data/k088.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"العضو ادمن بالفعل", 
]);
}
if($data =="addmin"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"اخر خمس ادمنيه :
 1 - ".$adminss[count($adminss)-2]."
 2 - ️".$adminss[count($adminss)-3]."
 3 - ️".$adminss[count($adminss)-4]."
 4 - ️".$adminss[count($adminss)-5]."
 5 - ️".$adminss[count($adminss)-6]."
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- الصفحه الرئيسيه.","callback_data"=>"bak"]],
]])
]);   
}
if($data =="delateaddmin" and $chat_id2 =="$admin"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
هل انت متاكد من الحذف
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'لا' ,'callback_data'=>"bak"]],
[['text'=>'نعم' ,'callback_data'=>"yesaarsslan"]],
]])
]);
}
if($data =="yesaarsslan"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
تم حذف الادمنيه
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
unlink("ad.json");
}

if($data =="abcde"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اهلا بك عزيزي
- تم فتح البوت 
- /start",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
file_put_contents("bot.txt","مفتوح");
} 
if($data =="abcd"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اهلا بك عزيزي
- تم قفل البوت
- /start ",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]); 
file_put_contents("bot.txt","متوقف");
} 

if($text =="/start" and $bot =="متوقف" and $chat_id != "$admin"){
 bot("sendmessage",[
 "chat_id"=>$chat_id,
 "text"=>"عذرا البوت يخضع للتحديث الان",]);
}

if($data =="userd"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 اهلا بك عزيزي الادمن
 عدد الاعضاء : ( $all )",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
}

if($data == 'ont'){
file_put_contents("ont.php", "on");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 مرحبا عزيزي
 تم تفعيل الاشعارات في البوت
➖➖➖➖➖➖➖➖
",
'show_alert'=>true
]);
}
if($data == 'oft'){
file_put_contents("ont.php", "off");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 مرحبا عزيزي
⚠ تم تعطيل الاشعارات في البوت
➖➖➖➖➖➖➖➖
",
'show_alert'=>true
]);
}
$ont = file_get_contents("ont.php");
if($ont == "on"){
if($from_id != $admin){
if($message){
bot('ForwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}}}

if($data == "for"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم باختيار ما يناسبك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اذاعه صورة ",'callback_data'=>"photoi"]],
[['text' => "اذاعه رسالة ", 'callback_data' => "msg"],['text' => "اذاعه توجيه ", 'callback_data' => "forward"]],
[['text' => "اذاعه ميديا ", 'callback_data' => "midea"],['text' => "اذاعه انلاين ", 'callback_data' => "inline"]],
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
if($data == "msg"){
file_put_contents("msg.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال رسالتك لتحويلها لجميع المشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
if($msg == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('sendmessage',[
'chat_id'=>$users[$i],
'text'=>"$text",
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم عمل اذاعه بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("msg.php");
}}
if($data == "forward"){
file_put_contents("forward.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال رسالتك لتحويلها لجميع المشتركين على شكل توجيه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ",'callback_data'=>"bak"]],
]])
]);
}
if($forward == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('ForwardMessage',[
'chat_id'=>$users[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم عمل اذاعه توجيه بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"bak"]],
]])
]);
unlink("forward.php");
}}
if($data == "midea"){
file_put_contents("midea.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 يمكنك استخدام جميع انوع الميديا ماعدى الصوره
 (ملصق - فيديو - بصمه - ملف صوتي - ملف - متحركه - جهة اتصال )",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
$up = json_decode(file_get_contents('php://input'),true);
if(!isset($message->text)){
$types = ['voice','audio','video','photo','contact','document','sticker'];
foreach($up['message'] as $key => $val){
if(in_array($key,$types) and $midea == "on"){
for($i=0;$i<count($users); $i++){
bot('send'.$key,[
'chat_id'=>$users[$i],
'caption'=>$message->caption,
$key=>$val['file_id']]);
unlink("midea.php");
}
}
}}
if($data == "photoi"){
file_put_contents("photoi.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال الصورة لنشرها لجميع المشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ",'callback_data'=>"bak"]],
]])
]);
}
if($photoi == "on"){
if($message->photo){
for($i=0;$i<count($users); $i++){
bot('sendphoto',[
'chat_id'=>$users[$i],
'photo'=>$message->photo[0]->file_id,
'caption'=>$message->caption,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم نشر الصورة بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("photoi.php");
}}
if($data == "inline"){
file_put_contents("inlin.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بتوجيه نص الانلاين لاقوم بنشره للمشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
if($inlin == "on"){
if($message->forward_from or $message->forward_from_chat){
for($i=0;$i<count($users); $i++){
bot('forwardmessage',[
'chat_id'=>$users[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم نشر الانلاين بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("inlin.php");
}}

if($data == "channel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بتحديد الامر لأتمكن من تنفيذه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"قناة خاصة ",'callback_data'=>"link"]],
[['text'=>"قناة عامة ",'callback_data'=>"user"]],
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
if($data == "link"){
file_put_contents("link.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم برفع البوت ادمن في القناة
 ثم ارسل توجيه من القناة الى هنا",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
$channel_id = $message->forward_from_chat->id;
if($channel == "on"){
if($message->forward_from_chat){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 قم الان بأرسال رابط القناة هنا",
]);
file_put_contents("link.php", $channel_id);
file_put_contents("link2.php", "on");
}}
if($link == "on"){
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me|(.*)telesco.me|telesco.me(.*)/i',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم تفعيل الاشتراك بنجاح",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اتمام العملية",'callback_data'=>"bak"]],
]])
]);
file_put_contents("link2.php", $text);
file_put_contents("skor.php", "مفعل ✅");
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 عذرا عزيزي
 قم بأرسال الرابط بصورة صحيحه",
]);
}
}

if($data == "user"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم برفع البوت ادمن في القناة
 ثم ارسل يوزر القناة لتفعيل الاشتراك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
file_put_contents("uuser.php", "on");
}
if($uuser == "on"){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم تفعيل الاشتراك بنجاح",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اتمام العملية ⏱",'callback_data'=>"bak"]],
]])
]);
file_put_contents("skor.php", "مفعل ✅");
file_put_contents("uuser.php", $text);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 عذرا عزيزي
 قم بأرسال يوزر بصورة صحيحه",
]);
}
}

if($skor == "معطل ⚠️"){
if($data == 'off'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'
 مرحبا عزيزي
 حالة الاشتراك الاجباري معطل
 قم بختيار - قائمةه الاشتراك .وقم بتفعيله
',
 'show_alert'=>true
 ]); 
}}
if($skor == "مفعل ✅"){
if($data == 'off'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
 حسنا عزيزي
 حالت الاشتراك الخاص بك مفعل
 هل انت متأكد من رغبتك في تعطيل الاشتراك
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'نعم ', 'callback_data'=>'yesde2'],
['text'=>'لا ','callback_data'=>'bak'],
]
]])
]);
}}

if($data == "yesde2"){
unlink("uuser.php");
unlink("link.php");
file_put_contents("skor.php", "معطل ⚠️");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 تم تعطيل الاشتراك في جميع القنواة
 يمكنك تفعيل الاشتراك لقناتك في مابعد",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"bak"]],
]])
]);
}

$bloktime = date('h:i:s A');
if($data == "file"){
$path = realpath("abbas.json");
bot('senddocument',[
'chat_id'=>$chat_id2,
'document'=>new CURLFile($path),
'caption'=>"
 نسخة لمشتركينك
 وقت الارسال : ( $bloktime )
 عدد المشتركين : ( $all )
",
]);
}

if($data == "up"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال ملف الاعضاء الان
 ارسل الملف بأسم : abbas.json",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
file_put_contents("up.php", "on");
}
$rep = $message->document->file_name;
if($upq == "on"){
if($message->document and $message->document->file_name == "abbas.json" ){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->reply_to_message->document->file_id])->result->file_path;
file_put_contents($message->reply_to_message->document->file_name,file_get_contents($file));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* تم رفع الملف  : $rep*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
unlink("up.php");
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* لايمكن رفع الملف  : $rep*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
}

if($data =="pannel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*اهلا بك في قسم - الاحصائيات . 📊
--------------------------
 عدد اعضاء بوتك : $all
 المتفاعلين اليوم  : $todayuser
 عدد الرسائل المرسله : ".$abbas09['addmessage']."
 عدد الرسائل المستلمه : ".$abbas09['messagee']."
 مجموع الرسائل : $xll
--------------------------
 اخر خمس مشتركين :
▫️ 1- ".$users[count($users)-2]."
▫️ 2- ️".$users[count($users)-3]."
▫️ 3- ️".$users[count($users)-4]."
▫️ 4- ️".$users[count($users)-5]."
▫️ 5- ️".$users[count($users)-6]."
--------------------------*",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
}

if($data == "editstart"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
قم بارسال رسالة الاستارت الان
 ",
]); 
file_put_contents("data/q1.txt","q1");
}
if($text != "/start" and $q1 == "q1"){
file_put_contents("data/q1.txt","none");
file_put_contents("q2.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم التعين بنجاح", 
]);
}

if ($data == 'bak'){
$msg = unlink("msg.php");
unlink("forward.php");
unlink("midea.php");
unlink("inlin.php");
unlink("photoi.php");
unlink("up.php");
unlink("up.php");
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"-•
🤍 | اهلا بك
🤍 | اليك قائمه الاوامر

dev: @qqqqbqq  || 🇮🇶 
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- قفل البوت .","callback_data"=>"abcd"],["text"=>"- فتح البوت .","callback_data"=>"abcde"]],
[["text"=>"- اعضاء البوت .","callback_data"=>"userd"]],
[["text"=>"- تفعيل التنبيه .","callback_data"=>"ont"],["text"=>"- تعطيل التنبيه .","callback_data"=>"oft"]],
[["text"=>"- قسم الاذاعةه .","callback_data"=>"for"]],
[['text' => "- قائمةه الاشتراك .", 'callback_data' => "channel"],['text' => "- الاشتراك ($skor) .", "callback_data" => "off"]],
[['text' => "- نسخة احتياطيةه .", 'callback_data' => "file"],['text' => "- رفع النسخةه .", 'callback_data' => "up"]],
[['text' => "- الاحصائيات .", 'callback_data' => "pannel"],['text' => "- قسم الادمن .", 'callback_data' => "lIllabbas"]],
[['text' => "- التعديلات .", 'callback_data' => "xxxtentacionllllo"]],
[['text' => "- كليشةه /start .", 'callback_data' => "editstart"]],
]])
]);   
}
function tik($py_php){
header("Content-Type: application/json; charset=utf-8");
error_reporting(0);
$abs = array(
'origin: https://lovetik.com',
'referer: https://lovetik.com/',
'user-agent: Mozilla/5.0 (Linux; Android 11; SAMSUNG SM-A105F) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/18.0 Chrome/99.0.4844.88 Mobile Safari/537.36',
'cookie: _ga_30X9VRGZQ4=GS1.1.1662950739.1.0.1662950739.0.0.0',
);
$curl = curl_init();
 $config = array(
 CURLOPT_URL => "https://lovetik.com/api/ajax/search",
 CURLOPT_POST => true,
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_HTTPHEADER => $abs,
 CURLOPT_POSTFIELDS => array(
 'query'=>$py_php
 )
 );
 curl_setopt_array($curl, $config);
 $response = curl_exec($curl);
 curl_close($curl);
$json = json_decode($response);
return $json;
}
if($text == "/start"){
	bot("sendmessage",[
	"chat_id"=>$chat_id,
	"text"=>"• اهلا بك اخي في بوت تحميل من تيك توك 🐿️.
• فقط ارسل الرابط وسيتم ارسال المقطع بدون علامةه مائيةه 🤍.
. — — — — — — — — — — .
• Tele : @OoOoO2oO | @T3bsBoT .
",
	"reply_markup"=>json_encode(["inline_keyboard"=>[[['text'=>'• المطور .' ,'url'=>"https://t.me/qqqqbqq"]]]])
	]);
}
if(preg_match("#tik#",$text)){
	$api = tik($text);
	$url1 = $api->links[0]->a;
	file_put_contents($from_id.".mp4",file_get_contents($url1));
	bot("sendvideo",[
	"chat_id"=>$chat_id,
	"video"=>new CURLFile($from_id.".mp4"),
	"caption"=>"العنوان : ".$api->desc."\nمعرف الشخص : ".$api->author."\nاسم الشخص : ".$api->author_name."\n نوع الفيديو : بدون علامةه .
. — — — — — — — — — — .
• Tele : @OoOoO2oO | @T3bsBoT .
"
	]);
	$url2 = $api->links[3]->a;
	file_put_contents($from_id.".mp4",file_get_contents($url2));
	bot("sendvideo",[
	"chat_id"=>$chat_id,
	"video"=>new CURLFile($from_id.".mp4"),
	"caption"=>"العنوان : ".$api->desc."\nمعرف الشخص : ".$api->author."\nاسم الشخص : ".$api->author_name."\n نوع الفيديو : مع علامةه .
. — — — — — — — — — — .
• Tele : @OoOoO2oO | @T3bsBoT .
"
	]);
	$url3 = $api->links[0]->a;
	file_put_contents($from_id.".mp3",file_get_contents($url3));
	bot("sendaudio",[
	"chat_id"=>$chat_id,
	"audio"=>new CURLFile($from_id.".mp3"),
	"caption"=>"العنوان : ".$api->desc."\nمعرف الشخص : ".$api->author."\nاسم الشخص : ".$api->author_name."\n نوع : mp3 .
. — — — — — — — — — — .
• Tele : @OoOoO2oO | @T3bsBoT .
"
	]);
	unlike(from_id.".mp4");
	unlike(from_id.".mp3");
}
?>