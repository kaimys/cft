<?php
	if ( $_SERVER['REQUEST_METHOD'] === 'POST' )
	{
		// Read the input from stdin
		$data = trim(file_get_contents('php://input'));
		$fh = fopen('/tmp/browser_info.txt', 'a');
		fwrite($fh, $data);
		fwrite($fh, ",\n");
		fclose($fh);
		header('Content-type: text/plain');
		echo('ok');
	} else {
		header("HTTP/1.0 501 Not Implemented");
		header('Content-type: text/plain');
		echo('Method not supported');
	}
?>
