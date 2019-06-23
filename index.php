<?php
    $co=file_get_contents("php://input");
    $mes=json_decode($co,true);
    $text=$mes["message"]["text"];
    $id=$mes["message"]["from"]["id"];
    $name=$mes["message"]["from"]["first_name"];
    $kirim="https://api.telegram.org/bot888926393:AAFDdDZ_BQmWfqZ4EZwCGDo9xo9_DkJuNog/sendMessage";
    if (preg_match("/hello/",$text) ==1){
        $f=array("iya","kenapa","napa anjing","kontol");
        file_get_contents("$kirim?chat_id=$id&text=".$f[rand(0,3)]."");
    }elseif(preg_match("/he(.*?)o/",$text) !=0){
    	file_get_contents("$kirim?chat_id=$id&text=kenapa tod?");
    }elseif(preg_match("/lagi(.*?)a/",$text) !=0){
    	file_get_contents("$kirim?chat_id=$id&text=perhatian banget sih hehe");
    }elseif(preg_match("/h(.*?)i/",$text) !=0){
        $g=array("hai kontol","hai memek","hai orang kafir","apa?aku cuek ya,jgn bales panjang panjang aku males ketik!!","hai,nama kamu $name ya?");
    	file_get_contents("$kirim?chat_id=$id&text=".$g[rand(0,4)]."");
    }elseif(preg_match("/kok t(.*?)u/",$text) !=0){
        $b=array("tau dong,aku kan peramal","tau dong,aku kan dukun","tau dong,aku kan teman terbaikmu");
    	file_get_contents("$kirim?chat_id=$id&text=".$b[rand(0,2)]."");
    }elseif(preg_match("/ngentot|ngn(.*?)t|ng(.*?)ot/",$text) !=0){
        $fi=array("ih kasar,jorok","kok jorok","ih jorok","hehh gabole gtu","astagfirullah akhi","kasar sekali :(","ah males kasar ga temen","yuk","yuk,tapi kamu duluan yg aku gituin ya");
    	file_get_contents("$kirim?chat_id=$id&text=".$fi[rand(0,9)]."");
    }elseif(preg_match("/nama kamu siapa|nam(.*?)a?|nama kamu?|tinggal dimana?/",$text) !=0){
    	file_get_contents("$kirim?chat_id=$id&text=nama aku raybotz,aku dibuat oleh deray untuk mengisi kekosongan mu :)) aowkaowk dasar jones");
    }elseif(preg_match("/hah(.*?)a|haha|wk(.*?)k|wwk(.*?)w|hhh(.*?)h|h(.*?)he/",$text) !=0){
        $t=array("hehe","haha","hihi","np ketawa?gila?wkwk","gila?wkwk","hahahaha");
    	file_get_contents("$kirim?chat_id=$id&text=".$t[rand(0,5)]."");
    }else{
        file_get_contents("$kirim?chat_id=$id&text=hmm");
    }
    
?>

