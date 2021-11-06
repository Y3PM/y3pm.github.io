<?php
    $txt = urldecode($_SERVER[ 'QUERY_STRING' ]) . "\n";
    $myfile = fopen("list_so.txt", "a+");
    // fwrite($myfile, $txt);
    fclose($myfile);
	echo iconv("utf-8", "gbk", file_get_contents("so_json.txt"));
?>