<?php
#ممنوع تغير الحقوق
# من مطور @BBI4BB
#قناة المطور @AMRAKL
ob_start();
$API_KEY = '5666775059:AAEBVbFQRngbtNlXIM-qHVfpCD_Dye0Jo_g'; #التوكن 
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
$amrakl = "مايك"; #اسم البوت
$AMRAKLkey = "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"; #key
$admin = "5220692144"; #ايدي الادمن
$sudo = array("5220692144","5220692144","5220692144"); #ايدهات

if (strpos($text, 'مايك') !== false) {
  $response = "معك الذكاء الاصطناعي كيف يمكنني مساعدتك";
  sendMessage($chatId, $response);
} else {
}
    
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $update->message->from->first_name;
$from_id = $update->message->from->id;
$AMR = file_get_contents("AMR.txt");
$AMR0 = file_get_contents("AMR0.txt");
$AMR1= file_get_contents("AMR1.txt");
$AMR5 = file_get_contents("AMR2.txt");
$AMR6 = file_get_contents("AMR3.txt");
$AMR20 = json_decode(file_get_contents('php://input'));
$AMR18 = $update->message;
$AMR13 = $AMR18->chat->id;
$AMR17 = $AMR18->text;
$AMRD = $AMR20->callback_query->data;
$AMR12 = $AMR20->callback_query->message->chat->id;
$AMR14 =  $AMR20->callback_query->message->message_id;
$AMR15 = $AMR18->from->first_name;
$AMR16 = $AMR18->from->username;
$AMR11 = $AMR18->from->id;
$AMR2 = explode("\n",file_get_contents("AMR4.txt"));
$AMR3 = count($AMR2)-1;
if ($AMR18 && !in_array($AMR11, $AMR2)) {
file_put_contents("AMR4.txt", $AMR11."\n",FILE_APPEND);
  }
$AMR9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$AMR0&user_id=".$AMR11);
$AMR10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$AMR1&user_id=".$AMR11);
if($AMR18 && (strpos($AMR9,'"status":"left"') or strpos($AMR9,'"Bad Request: USER_ID_INVALID"') or strpos($AMR9,'"status":"kicked"') or strpos($AMR10,'"status":"left"') or strpos($AMR10,'"Bad Request: USER_ID_INVALID"') or strpos($AMR10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$AMR13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$AMR0.'
'.$AMR1,
]);return false;}
if($text == "/start" and in_array($from_id,$sudo)){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>"
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا  بعد الاشتراك في القناة @Fzzee
------------------------------------
",
'reply_to_message_id'=>$php_aba->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'قسم الاشتراك الاجباري ⁦⚜️⁩','callback_data'=>"AMR78"]],
[['text'=>'قسم توجيه الرسال من الاعضاء 🔙' ,'callback_data'=>"yfffgh"]],
[['text'=>'قسم الاذاعه 🎉' ,'callback_data'=>"6g77g"],['text'=>'احصائيات البوت 👤' ,'callback_data'=>"AMR7"]],
] 
])
]);
}
if($AMRD == "AMR" ){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
"text"=>"
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'قسم الاشتراك الاجباري ⁦⚜️⁩','callback_data'=>"AMR78"]],
[['text'=>'قسم توجيه الرسال من الاعضاء 🔙' ,'callback_data'=>"yfffgh"]],
[['text'=>'قسم الاذاعه 🎉' ,'callback_data'=>"6g77g"],['text'=>'احصائيات البوت 👤' ,'callback_data'=>"AMR7"]],
] 
])
]);
unlink("AMR.txt");
}
if($AMRD == "AMR0"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك من ثم  قم برفع البوت ادمن في القناة ',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR0");
}
if($AMR17 and $AMR == "AMR0" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'لقد تم وضع القناة بنجاح ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR0.txt","$AMR17");
unlink("AMR.txt");
}
if($AMRD == "delete11"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'~ هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ؟؟؟
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'AMR'],
['text'=>'• نعم ، ✅','callback_data'=>'AMR1'],
]
]])
]);
}
if($AMRD == "AMR1"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- لقد تم حذف القناة  من الإشتراك الإجباري بنجاح 📮',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR0.txt");
}
if($AMRD == "AMR2"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك من ثم  قم برفع البوت ادمن في القناة ',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR1");
}
if($AMR17 and $AMR == "AMR1" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'لقد تم وضع القناة بنجاح ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR1.txt","$AMR17");
unlink("AMR.txt");
}
if($AMRD == "delete22"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'~ هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ؟؟؟',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'AMR'],
['text'=>'• نعم ، ✅','callback_data'=>'AMR3'],
]
]])
]);
}
#ممنوع تغير الحقوق
# من مطور @BBI4BB
#قناة المطور @AMRAKL
#ــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــ
if($AMRD == "AMR78"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"
*مرحبا بك في قسم الاشتراك الاجباري*🌟
اختار القناة الذي تريد التحكم به ⁦🇪🇬⁩
",
                     'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'قناة ¹', 'callback_data'=>'AMR765'],['text'=>'قناة ² ','callback_data'=>'AMR907']],
[['text'=>'عرض قنوات الإشتراك ★»' ,'callback_data'=>"AMR4"]],
[['text'=>'🔙','callback_data'=>'AMR']],
]])
]);
}
#ــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــ
if($AMRD == "AMR765"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"
*مرحبا بك في التحكم ب قناة ¹*✨👇
",
                     'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'وضع قناة  ➕', 'callback_data'=>'AMR0'],['text'=>'حذف قناة 📮','callback_data'=>'delete11']],
[['text'=>'عرض قناة ¹', 'callback_data'=>'AMR987']],
[['text'=>'🔙','callback_data'=>'AMR']],
]])
]);
}
#ــــٓــــــٓــــــٓــــــٓــــــٓــ

  if($data ==  'yfffgh' ){
  bot( 'editMessageText' ,[
     'chat_id' =>$chat_id2,
     'message_id'=>$message_id,
      'text'=>"
*
اختار ماذا تريد الان 🖤 *
",
          'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'تفعيل التوجيه 🔙' ,'callback_data'=>"AMR11"],['text'=>'قفل التوجيه ❎' ,'callback_data'=>"AMR12"]],
]])
]);
}
  if($data ==  '6g77g' ){
  bot( 'editMessageText' ,[
     'chat_id' =>$chat_id2,
     'message_id'=>$message_id,
      'text'=>"
*
اختار نوع الاذاعه الان *
",
          'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'إذاعة توجيه 🔄' ,'callback_data'=>"AMR5"],['text'=>'إذاعة عامه 🔱' ,'callback_data'=>"AMR6"]],
]])
]);
}

if($AMRD == "AMR987"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"
القناة => $AMR0 √
",
                     'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙','callback_data'=>'AMR']],
]])
]);
}
#ــــٓــــــٓــــــٓــــــٓــ
if($AMRD == "AMR907"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"
*مرحبا بك في التحكم ب قناة ²*✨👇
",
                     'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'وضع قناة  ➕', 'callback_data'=>'AMR2'],['text'=>'حذف قناة 📮','callback_data'=>'delete22']],
[['text'=>'عرض قناة ¹', 'callback_data'=>'AMR9887']],
[['text'=>'🔙','callback_data'=>'AMR']],
]])
]);
}
#ــــٓــــــٓــــــٓــــــٓــ
if($AMRD == "AMR9887"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"
القناة => $AMR1 √
",
                     'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙','callback_data'=>'AMR']],
]])
]);
}
#ــــٓــــــٓــــــٓــ
if($AMRD == "AMR3"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- لقد تم حذف القناة  من الإشتراك الإجباري بنجاح 📮',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR1.txt");
}
if($AMRD == "AMR4"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"
هلا بك عزيزي 
قنوات الاشتراك الاجباري
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــ
قناة ¹ => $AMR0 √
قناة ² => $AMR1 √
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــ
",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
}
if($AMRD == "AMR5"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"قم برسال التوجيه الان 💚",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR2");
}
if($AMR18 and $AMR == "AMR2" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>"تم توجيه الرساله ",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
for($i=0;$i<count($AMR2); $i++){
bot('forwardMessage', [
'chat_id'=>$AMR2[$i],
'from_chat_id'=>$AMR11,
'message_id'=>$AMR18->message_id
]);
unlink("AMR.txt");
}
}
if($AMRD == "AMR6"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"قم برسال المراد الاذاعه له الان 💛",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR3");
}
if($AMR17 and $AMR == "AMR3" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'تم النشر بنجاح  ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
for($i=0;$i<count($AMR2); $i++){
bot('sendMessage', [
'chat_id'=>$AMR2[$i],
'text'=>$AMR17
]);
unlink("AMR.txt");
}
}
if($AMRD == "AMR7"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"هلا بك في قسم الاحصايات  💛
ــــــــــــــــــــ؍.َِ⇣𖤍🖤ء͡⇣ــــــــــــــــــ

 عدد مشتركين البوت  [ $AMR3 ]

حاله سرعه البوت -: 100%
ــــــــــــــــــــ؍.َِ⇣𖤍🖤ء͡⇣ــــــــــــــــــ",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
}

#ممنوع تغير الحقوق
# من مطور @BBI4BB
#قناة المطور @AMRAKL

if($AMRD == "AMR10"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ❎',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR2.txt");
}
if($AMRD == "AMR11"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR3.txt","AMR");
}
if($AMR18 and $AMR6 == "AMR" and $AMR11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$AMR11,
'message_id'=>$AMR18->message_id
]);
}
if($AMR18 and $AMR6 == "AMR" and $AMR11 == $admin){
bot('sendMessage',[
'chat_id'=>$AMR18->reply_to_message->forward_from->id,
'text'=>$AMR17,
]);
}
if($AMRD == "AMR12"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ❎',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR3.txt");
} 
if($text == "/start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*هلا بك عزيزي 👋 

في بوت الذكاء الاصطناعي

كل ما عليك هوا قول $amrakl طلبك*",
        'parse_mode'=>"markdown",
                'reply_to_message_id'=>$message->message_id,
        'disable_web_page_preview'=>true,
]); return false;
}
$amr = str_replace("$amrakl ","",$text);
if($text == "$amrakl $amr"){
$mramr=bot("SendMessage",[
"chat_id"=>$chat_id,
"text"=>"*آنََتِٰـِۢظِٰـِۢر جِٰـِۢآريِٰ آلِٰـِۢتِٰـِۢحِٰـِۢمِٰـِۢيِٰـِۢلِٰ*",
'parse_mode'=>"MARKDOWN",
"reply_to_message_id"=>$message_id,
])->result->message_id;
bot('deletemessage',[
'chat_id'=>$chat_id, 
'message_id'=>$mramr,
]);
 $api = json_decode(file_get_contents("https://api.dlyar-dev.tk/open-ai.json?key=$AMRAKLkey&text=".urlencode($text)),1)["choices"][0]["text"];
bot('sendmessage',[
"chat_id"=>$chat_id,
         'text'=>"$api",
'reply_to_message_id'=>$message->message_id,
 ]);  return false;
 } 
