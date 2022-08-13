<?php

// create curl resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "https://goldspotfx.com/index.php?a=logout");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);


header("Location: index.phtml");