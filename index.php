<?php
ini_set('display_errors', 0);

$poem_file = $_GET['poem_file'] ?? '/var/www/html/poem.ini';
$config = parse_ini_file($poem_file, true);
echo "Poem: " . $config['POEM'] . "\n";
?>
<br/><br />
Download the Code: <a href="https://github.com/darkforge-labs/ctf-poem-web">https://github.com/darkforge-labs/ctf-poem-web</a><br/>
Submit the flag to enter the draw <a href="mailto:ctf@darkforge.io">ctf@darkforge.io</a>
