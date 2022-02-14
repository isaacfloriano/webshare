<?php
$curl = curl_init('http://ipv4.webshare.io/');
curl_setopt($curl, CURLOPT_PROXY, 'socks5://p.webshare.io:80');
curl_setopt($curl, CURLOPT_PROXYUSERPWD, 'riwdjbvl-rotate:pukgal97o7gq');
curl_exec($curl);
