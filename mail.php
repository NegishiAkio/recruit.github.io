<?php
mb_language("japanese");
mb_internal_encoding("utf-8");

if(!empty($_POST['mail'])){
    $to = $_POST['mail'];
    $body = $_POST['textarea'];
    $from = mb_encode_mimeheader(mb_convert_encoding("根岸明男", "JIS","UTF-8"))."<akio.genkidama@gmail.com>";

    $success = mb_send_mail($to,$body."From:".$from);
}
?>
<?php
if(success){
    print("送信しました");
}else{
    print("送信失敗");
}
?>
