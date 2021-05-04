<?
if (is_file('log/' . PATH_LOG)) {
	$log = file('log/' . PATH_LOG);
	echo "<ol>";

	foreach ($log as $line) {
		list($dt, $ref, $page) = explode("|", $line);
		$dt = date('d:m:Y H:i:s', $dt);
		echo  '<li>' . $dt . '- ' . $ref . '--> ' . $page . '</li>';
	}
	echo "</ol>";
}
