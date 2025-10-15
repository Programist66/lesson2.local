<?php
$urls = [
    'http://site.com',
    'https://google.com', 
    'ftp://server.org',
    'http://example.com'
];

$filtered = array_filter($urls, function($url) {
    return strpos($url, 'http://') === 0;
});

foreach($filtered as $url)
{
    echo "$url <br/>";
}
?>