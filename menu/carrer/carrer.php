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
    <link rel="stylesheet" href="../../style/menu.css">
    <link rel="stylesheet" href="../../style/carrer.css">
    <link rel="stylesheet" href="../../style/table.css">
</head>
<body>
    <?php include('../menu.php'); ?>

    <div id="work">
    <div id="on_table">
    <table id="data_table" cellpadding="5px">
        <tr id="table_categorys">
            <td>Email</td>
            <td>Vocation</td>
            <td>Pracent(%)</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <?php
        $query = $db->query("SELECT * FROM carrer");
        $countLine = mysqli_num_rows($query);
            
        for($i = 1; $i <= $countLine; $i++) {
        ?>
            <tr class="table_fields">
                <?php
                $result = $db->query("SELECT * FROM carrer WHERE id=$i");
                $resultArray = mysqli_fetch_assoc($result);
                foreach ($resultArray as $key => $value) {
                    if($key != 'id'){
                        echo '<td>'.$value.'</td>';
                    }
                }  
                ?>
                <td class="change_table edit"><img src="../../img/admin/edit.png" alt=""><img class="confim_table_changes" src="../../img/admin/confirm.png"></td>
                <td class="change_table delete"><img src="../../img/admin/delete.png" alt=""><img class="confim_table_changes" src="../../img/admin/confirm.png"></td>
            </tr>
        <?php
        } 
        ?>
        </table>
        </div>
    </div>

    <script type="text/javascript" src="../../js/jquery.js"></script>
    <script type="text/javascript" src="../../js/menuHover.js"></script>

</body>
</html>