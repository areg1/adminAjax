<?php
include('conf/connectAdmin.php');

$fieldValue = json_decode(stripslashes($_POST['fieldValueJSON']));
$fieldCategory = json_decode(stripslashes($_POST['fieldCategoryJSON']));
$table = $_POST['fileName'];
$lineId = $_POST['lineId'];

foreach ($fieldCategory as $key => $value) {
    $query = $db->query("UPDATE `$table` SET `$value`='$fieldValue[$key]' WHERE `id`='$lineId'");
}

echo "Table $table updated .";

?>