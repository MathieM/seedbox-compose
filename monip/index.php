<?php

function get_ip($url) {
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);

    if (preg_match('#(\d*(\.\d*){3})#', $data, $matches)) {
        return $matches[0];
    } else {
        return null;
    }
}

$urls = [
    '216.146.43.71', // checkip.dyndns.com ip (other doesn't works under vpn)
    'http://ipecho.net/plain',
    'http://checkip.dyndns.com/',
];

$ips = [];

foreach ($urls as $url) {
    if ($ip = get_ip($url)) {
        $ips[$ip] = $ip;
    }
}

$ips = array_unique($ips);

if (1 == count($ips)) {
    echo reset($ips);
} else if (0 == count($ips)) {
    echo "There are problems, we do not found any ip";
} else {
    echo "There are problems, we found more than one ip";
    echo "<br>";
    print_r($ips);
}

