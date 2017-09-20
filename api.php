<?php

$API_KEY = '442324169:AAGqlNhlZovj4bJM9stRAGlpnqPUSWqyYFU';
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
$text = $message->text;
$chat_id = $message->chat->id;
$mid = $message->message_id;
$id = $message->from->id;
$us = $message->from->username;
$n1 = $message->from->first_name;
$n2 = $message->from->last_name;
$type = $message->chat->type;
$gn = $message->chat->title;
$chat_id2 = $update->callback_query->message->chat->id;
$msg_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$admin1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@llteam_beboll&user_id=$id");
$admin = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$id");
$bot_id = 427075194;
$get_link = file_get_contents('bebo/link.txt');
$link = explode("\n", $get_link);
$get_username = file_get_contents('bebo/username.txt');
$user = explode("\n", $get_username);
$get_fwd = file_get_contents('bebo/fwd.txt');
$fwd = explode("\n", $get_fwd);
$get_new = file_get_contents('bebo/new.txt');
$new = explode("\n", $get_new);
$get_photo = file_get_contents('bebo/photo.txt');
$photo = explode("\n", $get_photo);
$get_sticker = file_get_contents('bebo/sticker.txt');
$sticker = explode("\n", $get_sticker);
$get_voice = file_get_contents('bebo/voice.txt');
$voice = explode("\n", $get_voice);
$get_audio = file_get_contents('bebo/audio.txt');
$audio = explode("\n", $get_audio);
$get_gif = file_get_contents('bebo/gif.txt');
$gif = explode("\n", $get_gif);
$get_contact = file_get_contents('bebo/contact.txt');
$contact = explode("\n", $get_contact);
$get_video = file_get_contents('bebo/video.txt');
$video = explode("\n", $get_video);
$get_bad = file_get_contents('bebo/badword.txt');
$bad_word = explode("\n", $get_bad);

if($text == "/start" and strpos($admin1, '"status":"left"') == TRUE and $type == "private"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'Markdown',
'disable_web_page_preview'=>true,
'text'=>"⛔️ ¦ عذرا عزيزي [$n1](t.me/us)
⚠️¦ يجب أن تشترك بقناة البوت اولا
[اضغط هنا للدخول الى قناة البوت 📬](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
'reply_to_message_id'=>$mid,
]);
}

if($text == "/start" and strpos($admin1, '"status":"left"') != TRUE and $type == "private"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"📍| اهلا وسهلا بك عزيزي [$n1](t.me/$us) 
✨ | في بوت *TEAM BEBO* الخاص بحماية الكروبات *10k*
🛡 | البوت لا يتخطى اي رابط او توجيه ابدا ⚠️
⚠️ | قفط قم بأضافة البوت وارسل ( تفعيل ) لتفعيل البوت في المجــ*Group*ـموعة من قبل المدير
📍 | لعرض الاوامر ارسل ( مساعده )
🚪 | لمغادره البوت لمجموعتك ارسل ( غادر ) البوت يغادر فقط بأمر المنشىء
ℹ️ | ارسل ( معلوماتي ) لعرض معلوماتك
📛 | البوت يقوم بحذف 👇👇👇👇 :- 

توجيه ♻️ : روابط ⚠️ : ملصقات 📊 : صور 🖼 : بصمة 🔊 : صوتيات *MP3* 🎶 : فيديو 🎥 : معرفات 🕹 : اشعارات دخول 💡 

ايضا البوت يقوم بـ:- 
تثبيت + الغاء تثبيت الرسائل 📌
تغيير اسم المجــ*Group*ـموعة 📍
 البوت يتعرف تلقائيا على المنشىء والادمنية 
ويعمل بالاوامر مثل بوتات *cli* 💎
البوت لا يتوقف ابدا ⚡️✨ 
[يمكنك متابعة قناة البوت 📬](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
      [['text'=>'اضغط هنا لأضافة البوت الى مجموعتك', 'url'=>"https://t.me/APIBEBOBOT?startgroup=new"]],
]
])
]);
}

if($text == "/start" and strpos($admin1, '"status":"left"') == TRUE and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'Markdown',
'disable_web_page_preview'=>true,
'text'=>"⛔️ ¦ عذرا عزيزي [$n1](t.me/us)
⚠️¦ يجب أن تشترك بقناة البوت اولا
[اضغط هنا للدخول الى قناة البوت 📬](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
'reply_to_message_id'=>$mid,
]);
}

if($text == "/start" and strpos($admin1, '"status":"left"') != TRUE and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"✨¦ اهلا وسهلا بك عزيزي [$n1](t.me/$us)
🔸¦ في مجموعة : $gn 
🔹¦ ايدي المجــGroupـموعة : $chat_id
▪️¦ ارسل ( مساعده ) لعرض الاوامر
◾️¦ ارسل ( غادر ) لمغادرة البوت فقط بأمر ( المنشىء )
[يمكنك متابعة قناة البوت 📬](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
'reply_to_message_id'=>$mid,
]);
}

#pin start

$reply = $message->reply_to_message;

if($reply and $text == "تثبيت" and strpos($admin , '"status":"member"') == FALSE and $type == "supergroup"){
bot('pinChatMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->reply_to_message->message_id
]);
}

if($reply and $text == "الغاء تثبيت" and strpos($admin , '"status":"member"') == FALSE and $type == "supergroup"){
bot('unpinChatMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->reply_to_message->message_id
]);
}

#pin dane
#help list start

if($text == "مساعده" and strpos($admin , '"status":"member"') == FALSE and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"📍¦ اهلا وسهلا بك عزيزي [$n1](t.me/$us)
✨¦ في بوت *TEAM BEBO* الخاص بحماية الكروبات *10k*
🛡¦ البوت لا يتخطى اي رابط او توجيه ابدا ⚠️

📛 ¦ للتحكم بالبوت من قبل المدير والادمنية الاوامر هي  :- 

♻️¦ قفل - فتح ➖ التوجيه  
⚠️¦ قفل - فتح ➖  الروابط  
📊¦ قفل - فتح ➖ الملصقات  
🖼¦ قفل - فتح ➖  الصور 
🔊¦ قفل - فتح ➖ البصمه
🎶¦ قفل - فتح ➖  الصوتيات  
🎥¦ قفل - فتح ➖ الفيديو  
🕹¦ قفل - فتح ➖ المعرفات  
💡¦ قفل - فتح ➖  الاشعارات
©¦ قفل - فتح ➖ جهات الاتصال
🚫¦ قفل - فتح ➖ الفشار

📍¦ اوامر اخرى في المجــ*Group*ـموعة   :-
🚪¦ لمغادره البوت لمجموعتك ارسل ( غادر ) البوت يغادر فقط بأمر المنشىء
📌¦ تثبيت + الغاء تثبيت الرسائل بالرد 📌
🔗¦ ضع اسم ➖ لتغيير اسم المجــ*Group*ـموعة 
ℹ️¦ ارسل ( معلوماتي ) لعرض معلوماتك
🚸¦ ارسل ( صورتي ) لعرض صورت حسابك 
[TEAM BEBO](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"تواصل معنا ✨⭐️", 'url'=>"t.me/llxxdevxxll_bot"]],
        [['text'=>"يمكنك متابعة قناة البوت 📬", 'url'=>"t.me/llteam_beboll"]],
]
])
]);
}

#help list dane 
#setname start

$ex = explode('ضع اسم', $text);
if($ex and strpos($admin , '"status":"member"') == FALSE and $type == "supergroup"){
bot('setChatTitle',[
'chat_id'=>$chat_id,
'title'=>$ex[1]
]);
}

#setname dane
#add start

if($text == "تفعيل" and strpos($admin , '"status":"creator"') == TRUE and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"📍 | اهلا وسهلا بك عزيزي المدير *$n1*
✨ | تم تفعيل البوت في المجموعة بنجاح
 🚸| اسم المجــ*Group*ـموعة  : $gn
⚠️ | ايدي المجــ*Group*ـموعة : $chat_id
📛 | لعرض الاوامر ارسل ( مساعده )
[يمكنك متابعة قناة البوت 📬](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
'reply_to_message_id'=>$mid,
]);
}

#add dane
#welcom start

if($message->new_chat_member and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"اهلاً وسهلاً : [اضغط هنا](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
'reply_to_message_id'=>$mid,
]);
}

#welcome dane

#kick start

if($text == "غادر" and strpos($admin , '"status":"creator"') == TRUE and $type == "supergroup"){
bot('kickChatMember',[
'chat_id'=>$chat_id, 
'user_id'=>$bot_id,
]);
}

#kick dane
if(preg_match('/^([Hh]ttp|[Hh]ttps|t.me|telegram.me)(.*)/',$text) and strpos($admin , '"status":"member"') == TRUE and in_array($chat_id, $link) and $type == "supergroup"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}

#info start

if($text == "معلوماتي" and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"ℹ️ | معلومات العضو [$n1](t.me/$us)
🆔 | ايديك : $id
💠 | اسمك الاول  : $n1
🌀 | اسمك الثاني : $n2
❇️ | ايدي المجــGroupـموعة : $chat_id
[اضغط هنا للدخول الى حسابك](t.me/$us)
[يمكنك متابعة قناة البوت 📬](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
'reply_to_message_id'=>$mid,
]);
}

if($text == "صورتي" and $type == "supergroup"){
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/$us",
'caption'=>"صورتك 🚸",
'reply_to_message_id'=>$mid,
]);
}


#ifno dane

if(preg_match('/^(كحبة|كواد|طير|فرخ|فرختي|ابن فرختي|كحبتي|منيوك|تنيج|انيجكمك|كحبه|قحبة|كس|نيج|عيري|انيجك|انيجج|فروخ|كحاب|ابن الكحبة|ابن الكحبه|ابن القحبه|ابن القحبة|ابن التنيج|ابن كحبتي|ابن فرختي|نيجه|نيجة|مصة|مصه)(.*)/',$text) and strpos($admin , '"status":"member"') == TRUE and in_array($chat_id, $bad_word) and $type == "supergroup"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}


if(preg_match('/^(@)(.*)/',$text) and strpos($admin , '"status":"member"') == TRUE and in_array($chat_id, $user) and $type == "supergroup"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}

if($message->forward_from->id and strpos($admin , '"status":"member"') == TRUE and in_array($chat_id, $fwd) and $type == "supergroup"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}

if($message->forward_from_chat->id and strpos($admin , '"status":"member"') == TRUE and in_array($chat_id, $fwd) and $type == "supergroup"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}

if($message->photo and strpos($admin , '"status":"member"') == TRUE and in_array($chat_id, $photo) and $type == "supergroup"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);   
}

if($message->sticker and strpos($admin , '"status":"member"') == TRUE and in_array($chat_id, $sticker) and $type == "supergroup"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);   
}

if($message->voice and strpos($admin , '"status":"member"') == TRUE and in_array($chat_id, $voice) and $type == "supergroup"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid 
]);
}

if($message->audio and strpos($admin , '"status":"member"') == TRUE and in_array($chat_id, $audio) and $type == "supergroup"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid 
]);
}

if($message->new_chat_members and strpos($admin , '"status":"member"') == TRUE and in_array($chat_id, $new) and $type == "supergroup"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid 
]);
}

if($message->document and strpos($admin , '"status":"member"') == TRUE and in_array($chat_id, $gif) and $type == "supergroup"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid 
]);
}

if($message->contact and strpos($admin , '"status":"member"') == TRUE and in_array($chat_id, $contact) and $type == "supergroup"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid 
]);
}

if($message->video and strpos($admin , '"status":"member"') == TRUE and in_array($chat_id, $video) and $type == "supergroup"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid 
]);
}

#Start Command 
#Creat Bay : @xXxDe_iQxXx

if($text == "قفل الروابط" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $link) and $type == "supergroup"){
file_put_contents('bebo/link.txt', "\n" . $chat_id, FILE_APPEND);

bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"⚠️ ¦ تم قـ🔐ـفـ🔐ـل الروابط بنجاح 
📌 ¦ايدي المجــGroupـموعة : $chat_id
[تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
'reply_to_message_id'=>$mid,
]);
}

if($text == "قفل الروابط" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $link) and $type == "supergroup"){
    
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"⚠️ ¦ الروابط بالفعل مقفولة ✨🔐
📌 ¦ايدي المجــGroupـموعة : $chat_id
[تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
'reply_to_message_id'=>$mid,
]);
}

if($text == "فتح الروابط" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $link) and $type == "supergroup"){

$open = file_get_contents("bebo/link.txt");
$str = str_replace($chat_id, "", $open);
file_put_contents("bebo/link.txt", $str);

bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"⚠️ ¦ تم فـ🔓ـتـ🔓ـح الروابط بنجاح 
📌 ¦ايدي المجــGroupـموعة : $chat_id
[تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
'reply_to_message_id'=>$mid,
]);
} 

if($text == "فتح الروابط" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $link) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"⚠️ ¦ الروابط بالفعل مفتوحة ✨🔓
📌 ¦ايدي المجــGroupـموعة : $chat_id
[تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
'reply_to_message_id'=>$mid,
]);
}

#link dane

if($text == "قفل المعرف" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $user) and $type == "supergroup"){
    file_put_contents('bebo/username.txt', "\n" . $chat_id, FILE_APPEND);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم قـ🔐ـفـ🔐ـل المعرفات بنجاح 
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "قفل المعرف" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $user) and $type == "supergroup"){
        
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ المعرفات بالفعل مقفولة ✨🔐
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "فتح المعرف" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $user) and $type == "supergroup"){
    
    $open = file_get_contents("bebo/username.txt");
    $str = str_replace($chat_id, "", $open);
    file_put_contents("bebo/username.txt", $str);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم فـ🔓ـتـ🔓ـح المعرفات بنجاح 
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    } 
    
    if($text == "فتح المعرف" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $user) and $type == "supergroup"){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ المعرفات بالفعل مفتوحة ✨🔓
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }

#username dane

if($text == "قفل التوجيه" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $fwd) and $type == "supergroup"){
    file_put_contents('bebo/fwd.txt', "\n" . $chat_id, FILE_APPEND);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم قـ🔐ـفـ🔐ـل التوجيه بنجاح 
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "قفل التوجيه" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $fwd) and $type == "supergroup"){
        
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ التوجيه بالفعل مقفول ✨🔐
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "فتح التوجيه" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $fwd) and $type == "supergroup"){
    
    $open = file_get_contents("bebo/fwd.txt");
    $str = str_replace($chat_id, "", $open);
    file_put_contents("bebo/fwd.txt", $str);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم فـ🔓ـتـ🔓ـح التوجيه بنجاح 
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    } 
    
    if($text == "فتح التوجيه" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $fwd) and $type == "supergroup"){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ التوجيه بالفعل مفتوح ✨🔓
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }

#forword dand

if($text == "قفل الاشعارات" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $new) and $type == "supergroup"){
    file_put_contents('bebo/new.txt', "\n" . $chat_id, FILE_APPEND);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم قـ🔐ـفـ🔐ـل الاشعارات بنجاح 
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "قفل الاشعارات" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $new) and $type == "supergroup"){
        
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ الاشعارات بالفعل مقفولة ✨🔐
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "فتح الاشعارات" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $new) and $type == "supergroup"){
    
    $open = file_get_contents("bebo/new.txt");
    $str = str_replace($chat_id, "", $open);
    file_put_contents("bebo/new.txt", $str);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم فـ🔓ـتـ🔓ـح الاشعارات بنجاح 
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    } 
    
    if($text == "فتح الاشعارات" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $new) and $type == "supergroup"){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ الاشعارات بالفعل مفتوحة ✨🔓
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }

#new chat memebers dane

if($text == "قفل الملصقات" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $sticker) and $type == "supergroup"){
    file_put_contents('bebo/sticker.txt', "\n" . $chat_id, FILE_APPEND);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم قـ🔐ـفـ🔐ـل الملصقات بنجاح 
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "قفل المصقات" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $sticker) and $type == "supergroup"){
        
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ الملصقات بالفعل مقفولة ✨🔐
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "فتح الملصقات" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $sticker) and $type == "supergroup"){
    
    $open = file_get_contents("bebo/sticker.txt");
    $str = str_replace($chat_id, "", $open);
    file_put_contents("bebo/sticker.txt", $str);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم فـ🔓ـتـ🔓ـح الملصقات بنجاح 
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    } 
    
    if($text == "فتح الملصقات" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $sticker) and $type == "supergroup"){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ الملصقات بالفعل مفتوحة ✨🔓
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }

#sticker dane

if($text == "قفل البصمه" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $voice) and $type == "supergroup"){
    file_put_contents('bebo/voice.txt', "\n" . $chat_id, FILE_APPEND);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم قـ🔐ـفـ🔐ـل البصمة الصوتية بنجاح 
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "قفل البصمه" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $voice) and $type == "supergroup"){
        
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ البصمة الصوتية بالفعل مقفولة ✨🔐
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "فتح البصمه" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $voice) and $type == "supergroup"){
    
    $open = file_get_contents("bebo/voice.txt");
    $str = str_replace($chat_id, "", $open);
    file_put_contents("bebo/voice.txt", $str);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم فـ🔓ـتـ🔓ـح البصمة الصوتية بنجاح 
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    } 
    
    if($text == "فتح البصمه" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $voice) and $type == "supergroup"){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ البصمة الصوتية بالفعل مفتوحة ✨🔓
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }

#voice dane

if($text == "قفل الصوتيات" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $audio) and $type == "supergroup"){
    file_put_contents('bebo/audio.txt', "\n" . $chat_id, FILE_APPEND);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم قـ🔐ـفـ🔐ـل الصوتيات بنجاح 
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "قفل الصوتيات" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $audio) and $type == "supergroup"){
        
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ الصوتيات بالفعل مقفولة ✨🔐
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "فتح الصوتيات" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $audio) and $type == "supergroup"){
    
    $open = file_get_contents("bebo/audio.txt");
    $str = str_replace($chat_id, "", $open);
    file_put_contents("bebo/audio.txt", $str);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم فـ🔓ـتـ🔓ـح الصوتيات بنجاح 
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    } 
    
    if($text == "فتح الصوتيات" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $audio) and $type == "supergroup"){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ الصوتيات بالفعل مفتوحة ✨🔓
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }

#audio dane 

if($text == "قفل الصور" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $photo) and $type == "supergroup"){
    file_put_contents('bebo/photo.txt', "\n" . $chat_id, FILE_APPEND);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم قـ🔐ـفـ🔐ـل الصور بنجاح 
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "قفل الصور" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $photo) and $type == "supergroup"){
        
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ الصور بالفعل مقفولة ✨🔐
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "فتح الصور" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $photo) and $type == "supergroup"){
    
    $open = file_get_contents("bebo/photo.txt");
    $str = str_replace($chat_id, "", $open);
    file_put_contents("bebo/photo.txt", $str);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم فـ🔓ـتـ🔓ـح الصور بنجاح 
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    } 
    
    if($text == "فتح الصور" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $photo) and $type == "supergroup"){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ الصور بالفعل مفتوحة ✨🔓
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }

#photo dane

if($text == "قفل المتحركه" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $gif) and $type == "supergroup"){
    file_put_contents('bebo/gif.txt', "\n" . $chat_id, FILE_APPEND);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم قـ🔐ـفـ🔐ـل الصور المتحركة بنجاح 
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "قفل المتحركه" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $gif) and $type == "supergroup"){
        
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ الصور المتحركة بالفعل مقفولة ✨🔐
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "فتح المتحركه" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $gif) and $type == "supergroup"){
    
    $open = file_get_contents("bebo/gif.txt");
    $str = str_replace($chat_id, "", $open);
    file_put_contents("bebo/gif.txt", $str);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم فتح الصور المتحركة بنجاح ✨🔓
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    } 
    
    if($text == "فتح المتحركه" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $gif) and $type == "supergroup"){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ الصور المتحركة بالفعل مفتوحة ✨🔓
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }

#gif dane 

if($text == "قفل جهات الاتصال" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $contact) and $type == "supergroup"){
    file_put_contents('bebo/contact.txt', "\n" . $chat_id, FILE_APPEND);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم قـ🔐ـفـ🔐ـل جهات الاتصال بنجاح 
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "قفل جهات الاتصال" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $contact) and $type == "supergroup"){
        
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦  جهات الاتصال بالفعل مقفولة ✨🔐
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "فتح جهات الاتصال" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $contact) and $type == "supergroup"){
    
    $open = file_get_contents("bebo/contact.txt");
    $str = str_replace($chat_id, "", $open);
    file_put_contents("bebo/contact.txt", $str);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم فتح جهات الاتصال بنجاح ✨🔓
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    } 
    
    if($text == "فتح جهات الاتصال" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $contact) and $type == "supergroup"){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ جهات الاتصال  بالفعل مفتوحة ✨🔓
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }

#contact dane
#video start

if($text == "قفل الفيديو" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $video) and $type == "supergroup"){
    file_put_contents('bebo/video.txt', "\n" . $chat_id, FILE_APPEND);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم قـ🔐ـفـ🔐ـل الفيديوهات بنجاح 
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "قفل الفيديو" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $video) and $type == "supergroup"){
        
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦   الفيديوهات بالفعل مقفولة ✨🔐
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "فتح الفيديو" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $video) and $type == "supergroup"){
    
    $open = file_get_contents("bebo/video.txt");
    $str = str_replace($chat_id, "", $open);
    file_put_contents("bebo/video.txt", $str);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦تم فتح الفيديوهات بنجاح  ✨🔓
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    } 
    
    if($text == "فتح الفيديو" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $video) and $type == "supergroup"){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦الفيديوهات بالفعل مفتوحة ✨🔓
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }

#video dane
#bad word start

if($text == "قفل الفشار" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $bad_word) and $type == "supergroup"){
    file_put_contents('bebo/badword.txt', "\n" . $chat_id, FILE_APPEND);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ تم قـ🔐ـفـ🔐ـل الكلمات السيئة بنجاح 
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "قفل الفشار" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $bad_word) and $type == "supergroup"){
        
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦ الكلمات السيئة بالفعل مقفولة ✨🔐
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }
    
    if($text == "فتح الفشار" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $bad_word) and $type == "supergroup"){
    
    $open = file_get_contents("bebo/badword.txt");
    $str = str_replace($chat_id, "", $open);
    file_put_contents("bebo/badword.txt", $str);
    
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ ¦تم فتح الكلمات السيئة بنجاح  ✨🔓
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    } 
    
    if($text == "فتح الفشار" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $bad_word) and $type == "supergroup"){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'text'=>"⚠️ الكلمات السيئة بالفعل مفتوحة ✨🔓
    📌 ¦ايدي المجــGroupـموعة : $chat_id
    [تابعنا ✨](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
    'reply_to_message_id'=>$mid,
    ]);
    }

#bad word dane
$sudo = 369155273;
$get1 = file_get_contents('memberbot.txt');
$ex2 = explode("\n",$get1);
$count = count($ex2);
if($text == '/start'and !in_array($chat_id, $ex2)){
file_put_contents('memberbot.txt',"\n".$chat_id,FILE_APPEND);
  
}
if($text == '/users' and $id == $sudo){
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'text'=>"Your Bot Member : $count",
  ]);
  }
$bc = explode("/bc", $text);
if($bc and $id == $sudo){
$real = file_get_contents("memberbot.txt");
$ex_real = explode("\n", $real);
for($y=0;$y<count($ex_real); $y++){
bot('sendMessage', [
'chat_id'=>$ex_real[$y],
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>$bc[1],
]);
}
}

#sudo contack start

if($text == "المطور"){
bot('sendContact',[
'chat_id'=>$chat_id,
'phone_number'=>"+964 782 496 4001",
'first_name'=>"мσнαмε∂",
'last_name'=>"αℓвιαтү",
]);
}

#sudo contack dane
