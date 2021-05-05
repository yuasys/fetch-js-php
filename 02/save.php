<?php


$contents = $_POST['pdata'];
echo $contents;
file_put_contents('json/data.json', $contents);
exit();
