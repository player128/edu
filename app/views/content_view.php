<?php
$data = explode('=', $data);
// print_r($data);
$path = "http://localhost/edu/contents/$data[0]/".$data[1].".txt";
$text = file_get_contents($path);
echo $text;