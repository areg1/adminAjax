<?php 
include("../../backToIndex.php");
include('../../conf/connectAdmin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style/meet.css">
    <link rel="stylesheet" href="../../style/table.css">
    <link rel="stylesheet" href="../../style/menu.css">
</head>
<body>
<?php include('../menu.php'); ?>
<div id="work">
        <table id="data_table" cellpadding="5px">
        <tr id="table_categorys">
            <td>Teacher email</td>
            <td>Students emails</td>
            <td>Country</td>
            <td>City</td>
            <td>Street</td>
            <td>Home</td>
            <td>Date</td>
            <td>Subject</td>
            <td>Lesson number</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>

        <?php
        $query = $db->query("SELECT * FROM meet");
        $countLine = mysqli_num_rows($query);
            
        for($i = 1; $i <= $countLine; $i++) {
        ?>
            <tr class="table_fields">
                <?php
                $result = $db->query("SELECT * FROM meet WHERE id=$i");
                $resultArray = mysqli_fetch_assoc($result);
                foreach ($resultArray as $key => $value) {
                    if($key != 'id'){
                        echo '<td><input readonly type="text" class="form-control" value="'.$value.'"></td>';
                    } else {
                        $valueTr = $value;
                    }
                }  
                ?>
                <td value="<?=$valueTr?>" class="change_table edit">
                        <img class="edit_image" src="../../img/admin/edit.png" alt="">
                        <img class="confim_table_changes" src="../../img/admin/confirm.png">
                </td>
                <td class="change_table delete">
                    <img src="../../img/admin/delete.png" alt="">
                    <img class="confim_table_changes" src="../../img/admin/confirm.png">
                </td>
            </tr>
        <?php
        } 
        ?>
    </table>
<div>    

<!-- BEGIN for ajax -->
<?php
$slashCount = substr_count($_SERVER['PHP_SELF'],'/') - 1;

for($i = 0; $i < $slashCount; $i++) {
    $exits .= '../';
}

$updateDbPath = $exits.'updateDb.php';
?>

<input hidden type="text" id="file_name" value="<?=basename($_SERVER["SCRIPT_FILENAME"], '.php')?>">
<input hidden type="text" id="update_db_path" value="<?=$updateDbPath?>">
<!-- END for ajax -->

<!-- Bootsrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- ---- -->

<script type="text/javascript" src="../../js/jquery.js"></script>
<script type="text/javascript" src="../../js/menuHover.js"></script>
<script type="text/javascript" src="../../js/edit_delete.js"></script>
<script type="text/javascript" src="../../js/changeTable.js"></script>
</body>
</html>
