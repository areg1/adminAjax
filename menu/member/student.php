<?php 
include("../../backToIndex.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../style/menu.css">
    <link rel="stylesheet" href="../../style/human.css">
    <link rel="stylesheet" href="../../style/table.css">
</head>
<body>

    <?php include('../menu.php'); ?>

    <div id="work">
        <div id="on_table">
        <table id="data_table" cellpadding="5px">
        <tr id="table_categorys">
        <td>Name</td>
            <td>LastName</td>
            <td>Phone number</td>
            <td>Email</td>
            <td>Password</td>
            <td>Country</td>
            <td>City</td>
            <td>Birthday</td>
            <td>Sex</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <tr class="table_fields">
            <td>Name</td>
            <td>LastName</td>
            <td>Phone number</td>
            <td>Email</td>
            <td>Password</td>
            <td>Country</td>
            <td>City</td>
            <td>Birthday</td>
            <td>Sex</td>
            <td><img src="../../img/admin/edit.png" alt=""></td>
            <td><img src="../../img/admin/delete.png" alt=""></td>
        </tr>
        </table>
        </div>
    <div>    

<script type="text/javascript" src="../../js/jquery.js"></script>
<script type="text/javascript" src="../../js/menuHover.js"></script>

</body>
</html>