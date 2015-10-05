<?php
function url_origin($s, $use_forwarded_host=false)
{
    $ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? true:false;
    $sp = strtolower($s['SERVER_PROTOCOL']);
    $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
    $port = $s['SERVER_PORT'];
    $port = ((!$ssl && $port=='80') || ($ssl && $port=='443')) ? '' : ':'.$port;
    $host = ($use_forwarded_host && isset($s['HTTP_X_FORWARDED_HOST'])) ? $s['HTTP_X_FORWARDED_HOST'] : (isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : null);
    $host = isset($host) ? $host : $s['SERVER_NAME'] . $port;
    return $protocol . '://' . $host;
}

function full_url($s, $use_forwarded_host=false)
{
    return url_origin($s, $use_forwarded_host) . $s['REQUEST_URI'];
}

$absolute_url = full_url($_SERVER);

$url_parse = parse_url($absolute_url, PHP_URL_QUERY);

preg_match("/id=\d+\z/", $url_parse, $output_array);

if(!empty($output_array[0])){
  $id = filter_var($output_array[0], FILTER_SANITIZE_NUMBER_INT);

  header("Location: https://munispace.muni.cz/index.php/munispace/catalog/book/".$id);
  die("Page not found");
}else{
  header("Location: https://munispace.muni.cz/index.php/munispace/");
  die();
}
?>
