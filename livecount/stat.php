<?php
    $request = curl_init("https://t.me/s/mathias444");
    curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($request, CURLOPT_COOKIE, "");
    $reponce = curl_exec($request);
    preg_match_all('!<span class="counter_value">(.*?)</span>!', $reponce, $count);
	preg_match_all('!<a class="tgme_widget_message_date" href="https://t.me/mathias444/(.*?)">!', $reponce, $photocount);
	
    // print_r($photocount);
    $jsoncountresponce["total_members"] = (isset($count[1][0])) ? intval($count[1][0]) : 0;
    $jsoncountresponce["total_messages"] = (isset($photocount[1][count($photocount) - 1])) ? intval($photocount[1][count($photocount) - 1]) : 0;
    $jsoncountresponce["total_videos"] = (isset($count[1][2])) ? intval($count[1][2]) : 0;
    $jsoncountresponce["total_links"] = (isset($count[1][3])) ? intval($count[1][3]) : 0;
    $jsoncountresponce["total_files"] = (isset($count[1][4])) ? intval($count[1][4]) : 0;
    $jsoncountresponce["total_photos"] = (isset($count[1][5])) ? intval($count[1][5]) : 0;
    echo json_encode($jsoncountresponce);
?>