<?php
require_once './Includes/header.php' ?>
<h1>register Page</h1>
<div class="mainregclass">
    <form action="./BackEnd/product/addproduct.php" method="POST" id="form1" enctype="multipart/form-data" style="margin-left: auto; margin-right: auto;">
        <label for="Name">Product Name :</label><br>
        <input type="text" name="nameTxt" id="nameTxt" placeholder="Product Name">
        <br><br>
        <label for="">Description :</label><br>
        <textarea name="" id="" cols="30" rows="10" name="descriptionTxt" id="descriptionTxt" placeholder=""></textarea>
        <br><br>
        <label for="Name">Price :</label><br>
        <input type="text" name="priceTxt" id="priceTxt" placeholder="price">
        <br><br>
        <label for="Name">Stock :</label><br>
        <input type="text" name="stockTxt" id="stockTxt" placeholder="stock">
        <br><br>
        <label for="Name">Image Upload :</label><br>
        <input type="file" name="file[]" id="multiImage_file" multiple>
        <br>
        <input type="submit" name="SubmitBtn" id="SubmitBtn" value="Submit Order">
    </form>

</div>



<script src="./custom/js/register.js"></script>
<?php require_once './Includes/footer.php' ?>