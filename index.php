<h1>Frontend</h1>
<pre>
<?
  echo "env: ${_ENV['env']}\n";
  echo "version: ${_ENV['version']}\n";
  echo "ip: ${_SERVER['SERVER_ADDR']}\n";
  $backend = $_ENV['backend'];
  echo "backend: $backend\n"; 
  $backend_info = file_get_contents($backend);
  echo $backend_info;
?>


