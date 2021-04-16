<?php
    $request = curl_init("https://t.me/s/mathias_love_dogs");
    curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($request, CURLOPT_COOKIE, "");
    $reponce = curl_exec($request);
    preg_match_all('!<span class="counter_value">(.*?)</span>!', $reponce, $count);
	preg_match_all('!<a class="tgme_widget_message_date" href="https://t.me/mathias_love_dogs/(.*?)">!', $reponce, $photocount);
	
    // print_r($photocount);
    $jsoncountresponce["members"] = (isset($count[1][0])) ? intval($count[1][0]) : 0;
    $jsoncountresponce["photos"] = (isset($photocount[1][count($photocount) - 1])) ? intval($photocount[1][count($photocount) - 1]) : 0;
    // $jsoncountresponce["videos"] = (isset($count[1][2])) ? intval($count[1][2]) : 0;
    // $jsoncountresponce["links"] = (isset($count[1][3])) ? intval($count[1][3]) : 0;
    echo json_encode($jsoncountresponce);
?>