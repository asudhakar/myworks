<?php 



$user_question = $_POST['name'];
if(isset($user_question)){
	echo play_song('http://d3.mymp3song.com:85/files/sfd70/34840/Tera%20Ishq%20Jee%20Paaun%20-%20Aditya%20Narayan(MyMp3Song.Com).mp3');
}


function play_song($url){
	return '<h1>A song is playing &#128521;</h1><audio controls autoplay>
        <source src="'.$url.'" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>';
}