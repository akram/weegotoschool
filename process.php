<?php
include 'common.php';

$json = json_encode($_POST);
echo $json;
$collection = get_collection(ROUTES_COLLECTION);
$collection->insert($json);

echo $collection;
echo "Collection inseree";
$collection = get_collection(ROUTES_COLLECTION);
echo $collection;



?>
