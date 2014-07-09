<?PHP

$ts_ip = "speedy.a40gaming.de"; // Server IP / Hostname

$ts_port = "10011"; // Port

$output = @fsockopen("$ts_ip", $ts_port, $errno, $errstr, 2);

if (!$output) {

echo "Offline";
die();
}

socket_set_timeout($output, 000002);

echo "Online";

@fclose($output);

?>