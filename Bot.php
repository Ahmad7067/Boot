<?php

ob_start();

$API_KEY ='1077054507:AAHHC3cLRA081xsIEn7ZIfAV828CK3K4Qik';
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
$update = json_decode(file_get_contents( 'php://input' ));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id=$message->from->id;
$id=$message->from->id;
$get=file_get_contents('file.txt');
$ex=explode("\n",$get);
$count=count($ex);
$get1=file_get_contents('user.txt');
$ex1=explode("\n",$get1);
$ex2=explode("/aa",$text);
$data=$update->callback_query->data;
$chat_id2=$update->callback_query->message->chat->id;
$mid=$update->callback_query->message>message_id;
$raa=array_rand($ex,1);
$admine=773612305;
$fatema=array(1076999173,773612305,870220483);
if($text=="/start"){
if(!in_array($id,$ex1)){
file_put_contents('user.txt',"\n".$id,FILE_APPEND);};

bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"أهلا وسهلا انسة فاطمة",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"إلى فاطمة"]]
/*[['text'=>"❤"]]
*/]])
]);
};
if($text=='العودة للقائمة الرئيسية')
{
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"أهلا وسهلا انسة فاطمة",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"إلى فاطمة"]]
/*[['text'=>"❤"]]
*/]])
]);
};


if($text=="إلى فاطمة"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> 'نور البوت انسة فطوم',
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"رومنسيات🙊"]],
[['text'=>"فيديو"]],
[['text'=>"لعبة حجر ورقة مقص"]],
/*[['text'=>"🎉🎁🎉"]]*/
[['text'=>"العودة للقائمة الرئيسية"]]

] ])
]);


};
/*if($text=="❤"){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>'إضغطي هون👇',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'😉🙊🙊', 'url'=>"https://t.me/AhmadRh094"]]

]
])

]);
};*/
if($text=='فيديو'){
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>"https://ahmadrh994.000webhostapp.com/V.mp4"


]);

};
if($text=='رومنسيات🙊'){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$ex[$raa]
]);
};
for($i=0;$i<count($ex);$i++){
if($text=='/m'){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$ex[$i]
]);

};
}

if($text=='U'){
if(!in_array($id,$ex1)){
file_put_contents('user.txt',"\n".$id,FILE_APPEND);};
}
if($text=='لعبة حجر ورقة مقص'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'لنلعب معا',
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"حجرة"]],
[['text'=>"ورقة"]],
[['text'=>"مقص"]],
[['text'=>"العودة للقائمة الرئيسية"]]



] ])

]);
}

$random = array('انت فزت لان اختياري مقص 🌝🤞🏻', 'انا فزت لان اختياري ورقة 🌝🖱', 'نحن متعادلين 🌝✊🏻');
$random1 = array_rand($random, 1);
$rrues = array('انت الفائز لان اختياري حجرة 🌝✊🏻', 'نحن متعادلين 🤝🌝', 'انا فزت لان اختياري مقص 🌝🤞🏻');
$rues = array_rand($rrues);
$ccut = array('نحن متعادلين 🌝🤝 ','انا فزت لان اختياري حجرة 🌝✊🏻', ' انت فزت لان اختياري ورقة 🖱🌝');
$cut = array_rand($ccut);

if($text == "حجرة"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$random[$random1],
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مقص"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ccut[$cut],
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ورقة"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rrues[$rues],
'reply_to_message_id'=>$message->message_id, 
]);
} 
/*if($text=='🎉🎁🎉'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'ام عيون حلوة'
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'ام قلب طيب'
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'ام روح مرحة'
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'ام الاستفزاز😂😂'
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'كل عام وانتي بالف الف خير يا احلا فطوووم😘❤❤'
]);
bot( 'sendMessage' ,[
'chat_id' =>$chat_id,
'text' =>'❤'
]);
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>'https://ahmadrh994.000webhostapp.com/Voice 007-mc.mp3'
]);

bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>'https://ahmadrh994.000webhostapp.com/720_30_3.78_Mar212020.mp4'
]);
}*/

for($j=0;$j<count($ex1);$j++)
{
if($ex2){
bot('sendMessage',[
'chat_id'=>$ex1[$j],
'text'=>$ex2[1]
]);
}
}

