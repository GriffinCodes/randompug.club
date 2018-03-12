<?php
header('Content-Type: application/json');

$PUG_NUM = (int)file_get_contents('../script/script.js', NULL, NULL, 16, 3);
$random_pug_index = rand(1, $PUG_NUM);

$image_path = 'http://randompug.club/images/'.$random_pug_index.'.jpg';
$link = 'http://randompug.club/?i='.$random_pug_index;
$data = ['image' => $image_path, 'link' => $link];

echo json_encode($data);