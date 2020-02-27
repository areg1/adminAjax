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
    <link rel="stylesheet" href="../../style/table.css">
    <link rel="stylesheet" href="../../style/question.css">
</head>
<body>

    <?php include('../menu.php'); ?>

    <div id="work">
    <div id="on_table">
    <table id="data_table" cellpadding="5px">
        <tr id="table_categorys">
            <td>Name</td>
            <td>LastName</td>
            <td>Email</td>
            <td class="question">Question</td>
            <td>Delete</td>
        </tr>
        <tr class="table_fields">
            <td>Example</td>
            <td>Example</td>
            <td>example@gmail.com</td>
            <td class="question">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error suscipit nostrum, doloribus nobis ipsum voluptate magnam quae rem quisquam laboriosam. Error assumenda suscipit cupiditate sed earum doloribus magni unde alias!</td>
            <td><img src="../../img/admin/delete.png" alt=""></td>
        </tr>
        <tr class="table_fields">
            <td>Example</td>
            <td>Example</td>
            <td>example@gmail.com</td>
            <td class="question">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione ad cum beatae dolor animi vero ut. Corporis consectetur velit distinctio quae nemo, nostrum excepturi architecto quidem porro vero? Similique, ratione. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos commodi officiis praesentium cumque aut! Sint est, reprehenderit, natus tempora dignissimos, provident quidem officiis quod rerum facilis quo iure aperiam voluptatibus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error suscipit nostrum, doloribus nobis ipsum voluptate magnam quae rem quisquam laboriosam. Error assumenda suscipit cupiditate sed earum doloribus magni unde alias!</td>
            <td><img src="../../img/admin/delete.png" alt=""></td>
        </tr>
        <tr class="table_fields">
            <td>Example</td>
            <td>Example</td>
            <td>example@gmail.com</td>
            <td class="question">lorem Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum laboriosam sint possimus enim. Quod praesentium repudiandae fugiat, eum blanditiis quam perspiciatis error harum molestiae, assumenda, nulla at optio accusamus asperiores.   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error suscipit nostrum, doloribus nobis ipsum voluptate magnam quae rem quisquam laboriosam. Error assumenda suscipit cupiditate sed earum doloribus magni unde alias!</td>
            <td><img src="../../img/admin/delete.png" alt=""></td>
        </tr>
        </table>
        </div>
    </div>

    <script type="text/javascript" src="../../js/jquery.js"></script>
    <script type="text/javascript" src="../../js/menuHover.js"></script>

</body>
</html>