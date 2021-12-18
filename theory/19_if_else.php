<?php

function getTypeOfSentence($sentence)
{
    // простой способ извлечь последний символ
    $lastChar = $sentence[-1];
    if ($lastChar === '?') {
        return 'question';
    }

    return 'normal';
}

// print_r(getTypeOfSentence('Hodor') . "\n");  // normal
// print_r(getTypeOfSentence('Hodor?') . "n"); // question

// BEGIN (write your solution here)
function normalizeUrl($myurl){
  if ( strpos($myurl, 'https') === 0) {
    return $myurl ;
  } elseif (strpos($myurl, 'http') === 0) {
        var_dump( strpos($myurl, 'http') );
        return substr_replace($myurl, 'https',0, 4) ;
  } else {
        return 'https://' . $myurl ;
  }


//    return $secure ;
}
// END

$urla = 'ya.ru';

echo "\n\n\n";
print_r("normalized '$urla' is " . normalizeUrl($urla) . "\n" );

?>

$suggested_solution = <<<EOT
function normalizeUrl($url)
{
    if (strpos($url, 'http://') === 0) {
        $domain = substr($url, 7);
    } elseif (strpos($url, 'https://') === 0) {
        $domain = substr($url, 8);
    } else {
        $domain = $url;
    }

    return "https://{$domain}";
}
EOT;


