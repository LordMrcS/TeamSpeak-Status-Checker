<?PHP

$ts_ip = "Add IP of TS-Server here"; // Server IP / Hostname

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
