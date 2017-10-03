<?php

$API_KEY = '382132129:AAE_gwng_CcxYRJdw9b0GqHsIjJsSgMm0bY';
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
$bot_id = 382132129;
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
$get_edit = file_get_contents('bebo/edit.txt');
$edit = explode("\n", $get_edit);
$get_chat = file_get_contents('bebo/chat.txt');
$chat = explode("\n", $get_chat);


if($text == "/start" and strpos($admin1, '"status":"left"') == TRUE and $type == "private"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'Markdown',
'disable_web_page_preview'=>true,
'text'=>"📛 ¦ عذرا عزيزي $n1
⚠️ ¦ يجب ان تشترك في قناة البوت اولا 
〰〰〰〰
📛 ¦ *Sorry Dear*
⚠️ ¦ *You Must Subscribe To The Channel First*",
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"اضغط هنا للأشتراك ☄️💥", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]],
]
])
]);
}

if($text == "/start" and strpos($admin1, '"status":"left"') != TRUE and $type == "private"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'Markdown',
'disable_web_page_preview'=>true,
'text'=>"✨ ¦ اهلا وسهلا بك عزيزي [$n1](t.me/$us)
⭐️ ¦ في بوت *BEBO* لحماية المجموعات الخارقة *10k*
💥 ¦ البوت لا يتخطى اي توجيه او رابط ابدا ⚡️
☄️ ¦ البوت يتعرف تلقائيا على المدير والادمنية تلقائيا
〰〰〰〰
✨ ¦ *Welcome dear*  [$n1](t.me/$us)
⭐️ ¦ *In the Bebo bot to protect supergroup*
💥 ¦ *The bot does not exceed any direction or link at all*
☄️ ¦ *Bot automatically identifies the generator*",
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"اضغط هنا لعرض مهام البوت ⚡️💥", "callback_data"=>"h7"]],
]
])
]);
}

if($data == "h7"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$msg_id,
'parse_mode'=>'Markdown',
'disable_web_page_preview'=>true,
'text'=>"✨ ¦ اهلا وسهلا بك عزيزي من جديد 
☄️ ¦ في قائمة مهام التي يقوم بها البوت 
💥 ¦ البوت يقوم بــ -: 
توجيه ♻️ : روابط ⚠️ : ملصقات 📊 : صور 🖼 : بصمة 🔊 : صوتيات MP3 🎶 : فيديو 🎥 : معرفات 🕹 : اشعارات دخول 💡 : جهات الاتصال 📞 : الكلمات السيئة ( الفشار ) 🚫
🔅 ¦ البوت يعمل بلاوامر مثل بوتات *CLI*
♨️ ¦ ايضا يقوم ب:- 
♻️ ¦ تغيير اسم المجموعة

〰〰〰〰
✨ ¦ *Hello Dear Again*
☄️ ¦ *In The Task List That The Bot Does*
💥 ¦ *Forward Message ♻️ : Links  : Sticker 📊 : Photo 🖼 : Voice 🔊 : Audio Mp3 🎶 : Video 🎥 : Username 🕹 : Entry Notifications 💡 : contack 📞 : badword 🚫*
🔅 ¦ *The Bot Works Like CLI Bots*
♨️ ¦ *And -:*
♻️ ¦ *Change Chat Title + Pin And Unpin Message In Reply*",
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"اضغط هنا لأضافة البوت لمجموعتك ⚡️💥", 'url'=>"https://t.me/apibeboBOT?startgroup=new"]],
]
])
]);
}


if($text == "الاوامر" and strpos($admin , '"status":"member"') == FALSE and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=> $chat_id,
'parse_mode'=>'Markdown',
'disable_web_page_preview'=>true,
'text'=>"✨ ¦ اهلا وسهلا بك عزيزي [$n1](t.me/$us)
☄️ ¦ اضغط على احدا هذه الخيارات لعرض الاوامر 
〰〰〰〰
✨ ¦ *Welcome dear*  [$n1](t.me/$us)
☄️ ¦ *Click one of these options to display the commands*",
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"اضغط هنا لعرض اوامر القفل والفتح⭐️☄️", "callback_data"=>"h2"]],
    [['text'=>"اضغط هنا لعرض اوامر الاخرى 〽️⚜️", "callback_data"=>"h3"]],
]
])
]);
}
$n = $update->callback_query->from->first_name;

if($data == "h"){
if(strpos($admin , '"status":"member"') == FALSE){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$msg_id,
'parse_mode'=>'Markdown',
'disable_web_page_preview'=>true,
'text'=>"✨ ¦ اهلا وسهلا بك عزيزي [$n](t.me/$usser)
☄️ ¦ اضغط على احدا هذه الخيارات لعرض الاوامر 
〰〰〰〰
✨ ¦ *Welcome dear* [$n](t.me/$usser)
☄️ ¦ *Click one of these options to display the commands*",
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"اضغط هنا لعرض اوامر القفل والفتح⭐️☄️", "callback_data"=>"h2"]],
    [['text'=>"اضغط هنا لعرض اوامر الاخرى 〽️⚜️", "callback_data"=>"h3"]],
]
])
]);
}
}

if($data == "h2"){
if(strpos($admin , '"status":"member"') == FALSE){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$msg_id,
'parse_mode'=>'Markdown',
'disable_web_page_preview'=>true,
'text'=>"
📛 ¦ للتحكم بالبوت من قبل المدير والادمنية الاوامر هي  :- 

♻️¦ قفل - فتح ➖ التوجيه  
⚠️¦ قفل - فتح ➖  الروابط  
📊¦ قفل - فتح ➖ الملصقات  
🖼¦ قفل - فتح ➖  الصور 
🔊¦ قفل - فتح ➖ البصمه
🎶¦ قفل - فتح ➖  الصوت  
🎥¦ قفل - فتح ➖ الفيديو  
🕹¦ قفل - فتح ➖ المعرف  
💡¦ قفل - فتح ➖  الاشعارات
©¦ قفل - فتح ➖ جهات الاتصال
🚫¦ قفل - فتح ➖ الفشار
🔂 ¦ قفل - فتح ➖ التعديل",
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"العوده الى الصفحة الرئيسية 🔙", "callback_data"=>"h"]],
]
])
]);
}
}

if($data == "h3"){
if(strpos($admin , '"status":"member"') == FALSE){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'parse_mode'=>'Markdown',
'disable_web_page_preview'=>true,
'message_id'=>$msg_id,
'text'=>"📍¦ اوامر اخرى في المجــ*Group*ـموعة   :-
🚪¦ لمغادره البوت لمجموعتك ارسل ( غادر ) البوت يغادر فقط بأمر المنشىء
🔗¦ ضع اسم ➖ لتغيير اسم المجــ*Group*ـموعة 
ℹ️¦ ارسل ( ايدي ) لعرض معلوماتك",
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"العوده الى الصفحة الرئيسية 🔙", "callback_data"=>"h"]],
]
])
]);
}
}

#more ......

$usser = $update->message->from->username;
$getbio = file_get_contents("https://wathiq.us/api/getbio/$usser");
$json = json_decode($getbio);
$bio = $json->bio;

if($text == 'ايدي'){
$get_progile = file_get_contents("https://api.telegram.org/bot$API_KEY/getUserProfilePhotos?user_id=$id&limit=1");
$json = json_decode($get_progile);
$user_photo = $json->result->photos[0][0]->file_id;
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$user_photo,
'caption'=>"🔅 • اسمك : $n1 $n2
🆔 • ايديك : $id
🔆 • بايو : $bio
🌟 • اسم المجموعة : $gn
☄️ •  ايدي المجموعة : $chat_id
📬 • معرفك :  @$usser",
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"تابعنا 📡📬", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]],
]    
])
]);
}


if($text == "غادر" and strpos($admin , '"status":"creator"') == TRUE and $type == "supergroup"){
bot('kickChatMember',[
'chat_id'=>$chat_id, 
'user_id'=>$bot_id,
]);
}

if($message->new_chat_member and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"اهلاً وسهلاً : [اضغط هنا](https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA)",
'reply_to_message_id'=>$mid,
]);
}

$ex = explode('ضع اسم', $text);
if($ex and strpos($admin , '"status":"member"') == FALSE and $type == "supergroup"){
bot('setChatTitle',[
'chat_id'=>$chat_id,
'title'=>$ex[1]
]);
}

if($text == "المطور"){
bot('sendContact',[
'chat_id'=>$chat_id,
'phone_number'=>"+964 782 496 4001",
'first_name'=>"мσнαмε∂",
'last_name'=>"αℓвιαтү",
]);
}


#dane 
#delete
$New_member = $message->new_chat_member;
$usser1 = $New_member->username;
$id = $New_member->id; 
$id_bot = 382132129;
if(preg_match('/^(.*)([Bb][Oo][Tt])/',$usser1) and $New_member and $id != $id_bot and strpos($admin , '"status":"member"') == TRUE){
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
}

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
    
    if($message->forward_from_chat->id and strpos($admin , '"status":"member"') == TRUE and in_array($chat_id, $fwd) and $type == "supergroup"){
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

    if(preg_match('/^([Hh]ttp|[Hh]ttps|t.me|telegram.me)(.*)/',$text) and strpos($admin , '"status":"member"') == TRUE and in_array($chat_id, $link) and $type == "supergroup"){
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid
    ]);
    }

    if($update->edited_message and strpos($admin , '"status":"member"') == TRUE and in_array($chat_id, $edit) and $type == "supergroup"){
    bot('deletemessage',[
    'chat_id'=>$update->edited_message->chat->id,
    'message_id'=>$update->edited_message->message_id,
    ]);
    }

#dane

if($text == "قفل الروابط" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $link) and $type == "supergroup"){
file_put_contents('bebo/link.txt', "\n" . $chat_id, FILE_APPEND);
        
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"📛 ¦ تم قفل الروابط بنجاح 🔐
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
]
])
]);
}
        
if($text == "قفل الروابط" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $link) and $type == "supergroup"){
            
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"⚠️ ¦ الروابط بالفعل مقفولة 🔒
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
   [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
]
])
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
'text'=>"🔓 ¦ تم فتح الروابط بنجاح 
 🔆 ¦ مرسل الامر [$n1](t.me/$us)", 
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
]
])
]);
} 
        
if($text == "فتح الروابط" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $link) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"🛑 ¦ الروابط بالفعل مفتوحة🔓
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
]
])
]);
}

if($text == "قفل التوجيه" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $fwd) and $type == "supergroup"){
file_put_contents('bebo/fwd.txt', "\n" . $chat_id, FILE_APPEND);
            
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"📛 ¦ تم قفل التوجيه بنجاح 🔐
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }
            
if($text == "قفل التوجيه" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $fwd) and $type == "supergroup"){
                
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"⚠️ ¦ التوجيه بالفعل مقفول 🔒
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
    'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
       [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
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
'text'=>"🔓 ¦ تم فتح التوجيه بنجاح 
🔆 ¦ مرسل الامر [$n1](t.me/$us)", 
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    } 
            
if($text == "فتح التوجيه" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $fwd) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"🛑 ¦ التوجيه بالفعل مفتوح🔓
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }

if($text == "قفل المعرف" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $user) and $type == "supergroup"){
file_put_contents('bebo/username.txt', "\n" . $chat_id, FILE_APPEND);
            
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"📛 ¦ تم قفل المعرف (@) بنجاح 🔐
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }
            
if($text == "قفل المعرف" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $user) and $type == "supergroup"){
                
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"⚠️ ¦ المعرف (@) بالفعل مقفول 🔒
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
    'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
       [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
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
'text'=>"🔓 ¦ تم فتح المعرف (@) بنجاح 
🔆 ¦ مرسل الامر [$n1](t.me/$us)", 
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    } 
            
if($text == "فتح المعرف" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $user) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"🛑 ¦ المعرف (@) بالفعل مفتوح🔓
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }

if($text == "قفل الاشعارات" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $new) and $type == "supergroup"){
file_put_contents('bebo/new.txt', "\n" . $chat_id, FILE_APPEND);
            
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"📛 ¦ تم قفل اشعارات الدخول بنجاح 🔐
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }
            
if($text == "قفل الاشعارات" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $new) and $type == "supergroup"){
                
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"⚠️ ¦ اشعارات الدخول بالفعل مقفولة 🔒
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
    'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
       [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
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
'text'=>"🔓 ¦ تم فتح اشعارات الدخول بنجاح 
🔆 ¦ مرسل الامر [$n1](t.me/$us)", 
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    } 
            
if($text == "فتح الاشعارات" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $new) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"🛑 ¦ اشعارات الدخول بالفعل مفتوحة🔓
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }
    
if($text == "قفل الصور" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $photo) and $type == "supergroup"){
file_put_contents('bebo/photo.txt', "\n" . $chat_id, FILE_APPEND);
            
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"📛 ¦ تم قفل الصور بنجاح 🔐
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }
            
if($text == "قفل الصور" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $photo) and $type == "supergroup"){
                
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"⚠️ ¦ الصور بالفعل مقفولة 🔒
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
    'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
       [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
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
'text'=>"🔓 ¦ تم فتح الصور بنجاح 
🔆 ¦ مرسل الامر [$n1](t.me/$us)", 
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    } 
            
if($text == "فتح الصور" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $photo) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"🛑 ¦ الصور بالفعل مفتوحة🔓
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }

if($text == "قفل الملصقات" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $sticker) and $type == "supergroup"){
file_put_contents('bebo/sticker.txt', "\n" . $chat_id, FILE_APPEND);
            
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"📛 ¦ تم قفل الملصقات بنجاح 🔐
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }
            
if($text == "قفل الملصقات" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $sticker) and $type == "supergroup"){
                
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"⚠️ ¦ الملصقات بالفعل مقفولة 🔒
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
    'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
       [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
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
'text'=>"🔓 ¦ تم فتح الملصقات بنجاح 
🔆 ¦ مرسل الامر [$n1](t.me/$us)", 
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    } 
            
if($text == "فتح الملصقات" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $sticker) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"🛑 ¦ الملصقات بالفعل مفتوحة🔓
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }

if($text == "قفل البصمه" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $voice) and $type == "supergroup"){
file_put_contents('bebo/voice.txt', "\n" . $chat_id, FILE_APPEND);
            
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"📛 ¦ تم قفل البصمه بنجاح 🔐
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }
            
if($text == "قفل البصمه" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $voice) and $type == "supergroup"){
                
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"⚠️ ¦ البصمه بالفعل مقفولة 🔒
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
    'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
       [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
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
'text'=>"🔓 ¦ تم فتح البصمه بنجاح 
🔆 ¦ مرسل الامر [$n1](t.me/$us)", 
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    } 
            
if($text == "فتح البصمه" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $voice) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"🛑 ¦ البصمه بالفعل مفتوحة🔓
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }

if($text == "قفل الصوت" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $audio) and $type == "supergroup"){
file_put_contents('bebo/audio.txt', "\n" . $chat_id, FILE_APPEND);
            
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"📛 ¦ تم قفل الصوتيات بنجاح 🔐
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }
            
if($text == "قفل الصوت" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $audio) and $type == "supergroup"){
                
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"⚠️ ¦ الصوتيات بالفعل مقفولة 🔒
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
    'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
       [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }
            
if($text == "فتح الصوت" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $audio) and $type == "supergroup"){
            
    $open = file_get_contents("bebo/audio.txt");
    $str = str_replace($chat_id, "", $open);
    file_put_contents("bebo/audio.txt", $str);
            
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"🔓 ¦ تم فتح الصوتيات بنجاح 
🔆 ¦ مرسل الامر [$n1](t.me/$us)", 
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    } 
            
if($text == "فتح الصوت" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $audio) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"🛑 ¦ الصوتيات بالفعل مفتوحة🔓
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }

if($text == "قفل المتحركه" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $gif) and $type == "supergroup"){
file_put_contents('bebo/gif.txt', "\n" . $chat_id, FILE_APPEND);
            
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"📛 ¦ تم قفل الصور المتحركة بنجاح 🔐
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }
            
if($text == "قفل المتحركه" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $gif) and $type == "supergroup"){
                
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"⚠️ ¦ الصور المتحركة بالفعل مقفولة 🔒
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
    'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
       [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
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
'text'=>"🔓 ¦ تم فتح الصور المتحركة بنجاح 
🔆 ¦ مرسل الامر [$n1](t.me/$us)", 
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    } 
            
if($text == "فتح المتحركه" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $gif) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"🛑 ¦ الصور المتحركة بالفعل مفتوحة🔓
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }

if($text == "قفل جهات الاتصال" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $contact) and $type == "supergroup"){
file_put_contents('bebo/contact.txt', "\n" . $chat_id, FILE_APPEND);
            
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"📛 ¦ تم قفل جهات الاتصال بنجاح 🔐
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }
            
if($text == "قفل جهات الاتصال" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $contact) and $type == "supergroup"){
                
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"⚠️ ¦ جهات الاتصال بالفعل مقفولة 🔒
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
    'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
       [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
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
'text'=>"🔓 ¦ تم فتح جهات الاتصال بنجاح 
🔆 ¦ مرسل الامر [$n1](t.me/$us)", 
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    } 
            
if($text == "فتح جهات الاتصال" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $contact) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"🛑 ¦ جهات الاتصال بالفعل مفتوحة🔓
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }

if($text == "قفل الفيديو" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $video) and $type == "supergroup"){
file_put_contents('bebo/video.txt', "\n" . $chat_id, FILE_APPEND);
            
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"📛 ¦ تم قفل الفيديوهات بنجاح 🔐
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }
            
if($text == "قفل الفيديو" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $video) and $type == "supergroup"){
                
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"⚠️ ¦ الفيديوهات بالفعل مقفولة 🔒
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
    'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
       [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
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
'text'=>"🔓 ¦ تم فتح الفيديو بنجاح 
🔆 ¦ مرسل الامر [$n1](t.me/$us)", 
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    } 
            
if($text == "فتح الفيديو" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $video) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"🛑 ¦ الفيديوهات بالفعل مفتوحة🔓
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }

if($text == "قفل الفشار" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $bad_word) and $type == "supergroup"){
file_put_contents('bebo/bad_word.txt', "\n" . $chat_id, FILE_APPEND);
            
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"📛 ¦ تم قفل الفشار بنجاح 🔐
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }
            
if($text == "قفل الفشار" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $bad_word) and $type == "supergroup"){
                
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"⚠️ ¦ الفشار بالفعل مقفول 🔒
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
    'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
       [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }
            
if($text == "فتح الفشار" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $bad_word) and $type == "supergroup"){
            
    $open = file_get_contents("bebo/bad_word.txt");
    $str = str_replace($chat_id, "", $open);
    file_put_contents("bebo/bad_word.txt", $str);
            
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"🔓 ¦ تم فتح الشفار بنجاح 
🔆 ¦ مرسل الامر [$n1](t.me/$us)", 
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    } 
            
if($text == "فتح الفشار" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $bad_word) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"🛑 ¦ الفشار بالفعل مفتوح
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
    ]
    ])
    ]);
    }

if($text == "قفل التعديل" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $edit) and $type == "supergroup"){
file_put_contents('bebo/edit.txt', "\n" . $chat_id, FILE_APPEND);
        
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"📛 ¦ تم قفل التعديل بنجاح 🔐
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
]
])
]);
}
        
if($text == "قفل التعديل" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $edit) and $type == "supergroup"){
            
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"⚠️ ¦ التعديل بالفعل مقفول 🔒
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
   [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
]
])
]);
}
        
if($text == "فتح التعديل" and strpos($admin , '"status":"member"') == FALSE and in_array($chat_id, $edit) and $type == "supergroup"){
        
$open = file_get_contents("bebo/edit.txt");
$str = str_replace($chat_id, "", $open);
file_put_contents("bebo/edit.txt", $str);
        
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"🔓 ¦ تم فتح التعديل بنجاح 
 🔆 ¦ مرسل الامر [$n1](t.me/$us)", 
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
]
])
]);
} 
        
if($text == "فتح التعديل" and strpos($admin , '"status":"member"') == FALSE and !in_array($chat_id, $edit) and $type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"🔓 ¦ التعديل بالفعل مفتوح 
🔆 ¦ مرسل الامر [$n1](t.me/$us)",
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"اضغط هنا ☄️🌟", 'url'=>"https://t.me/joinchat/AAAAAEOsH7MIf7kAMLNisA"]]
]
])
]);
}


$sudo = 369155273;
$get = explode("\n", file_get_contents('memberbot.txt'));
if($text == '/start' and !in_array($chat_id, $get)){
file_put_contents('memberbot.txt',"\n" . $chat_id, FILE_APPEND);
}
if($text == '/users'){
 $count = count($get);
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"Your Bot Member : $count",
  ]);
  }
$bc = explode("/bc", $text);
if($bc){
for($y=0;$y<count($get); $y++){
bot('sendMessage', [
'chat_id'=>$get[$y],
'text'=>"$bc[1]",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
}
}
