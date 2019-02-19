<?php

	$jitta_html = file_get_contents('input.html');
	
	//Use regular expression to match all the information needed. Ticker name, Jitta score, percentage to line, above or below, loss chance
	preg_match_all('/<div class="Text__TextXS-gbmmix-3 hSAwcI">(\w+:\w+)<\/div>/', $jitta_html, $arr_ticker);
	preg_match_all('/<h2 class="Heading__HeadingLG-s1sfefz4-1 ebinVn" color="#ffffff">(.+)<\/h2>/U', $jitta_html, $arr_jitta_score);
	preg_match_all('/<div class="Text-gbmmix-1 (ciqyXm|evKeBE)" color="#\w{6}">(.+)<\/div>/U', $jitta_html, $arr_percentage_to_line);
	preg_match_all('/<div class="Text__TextXS-gbmmix-3 \w{5}" color="#\w{6}">(Below|Above) Jitta Line<\/div>/U', $jitta_html, $arr_above_below_line);
	preg_match_all('/<div class="Text-gbmmix-1 fDxapP" color="#6c7172">(\d+.\d%)<\/div>/U', $jitta_html, $arr_loss_chance);
	
	//Get the length of all the arrays
	$ticker_len = count($arr_ticker[1]);
	$jitta_score_len = count($arr_jitta_score[1]);
	$percentage_to_line_len = count($arr_percentage_to_line[2]);
	$above_or_below_len = count($arr_above_below_line[1]);
	$arr_loss_chance_len = count($arr_loss_chance[1]);
	
	
	//Out put it to csv if all the arrays are the same. 
	if( $ticker_len == $jitta_score_len && $jitta_score_len == $percentage_to_line_len && $percentage_to_line_len == $above_or_below_len && $above_or_below_len == $arr_loss_chance_len){
		$myfile = fopen("output.csv", "w") or die("Unable to open file!");
		for($i=0;$i<$ticker_len;$i++){
			fwrite($myfile, $arr_ticker[1][$i].','.$arr_jitta_score[1][$i].','.$arr_percentage_to_line[2][$i].','.$arr_above_below_line[1][$i].','.$arr_loss_chance[1][$i]."\n");
		}
		
		fclose($myfile);
		$path = realpath('output.csv');
		echo "Path to file : ".$path;
	}
	else{
		echo 'Something went wrong. The array lengths are not the same';
	}
	
?>