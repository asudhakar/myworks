<?php 



$user_question = trim($_POST['name']);
if(!empty($user_question)){
	$url_slug = make_it_url($user_question);
	$total_url = 'http://localhost:5000/'.$url_slug;
	$json = file_get_contents($total_url);
	print_r($json);
}

function make_it_url($user_question){
	$omited_spaces = explode(" ", $user_question);
	if(count($omited_spaces)!=0){
		$make_url = implode("%20", $omited_spaces);
	}
	return $make_url;
}
function play_song($url){
	return '<h1>A song is playing &#128521;</h1><audio controls autoplay>
        <source src="'.$url.'" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>';
}

function show_default(){
	return '<h1>sorry, we are working on all things &#128577;</h1>';
}


// if($user_question == "song"){
	// 	echo play_song('http://d3.mymp3song.com:85/files/sfd70/34840/Tera%20Ishq%20Jee%20Paaun%20-%20Aditya%20Narayan(MyMp3Song.Com).mp3');
	// }else{
	// 	echo show_default();
	// }