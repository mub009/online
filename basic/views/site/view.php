<?php
$this->title = 'My Yii Application';
?>
<html>
<head>
<style type="text/css">
    p {
    display: block;
    cursor: pointer;
    color: #282c3f;
}
.button-size{
    display: block; 
    overflow: auto; 
    margin: 5px 0; 
    font-size: 13px;
}
.button-style{
    background-color: #fff; border: 1px solid #282c3f; border-radius: 50px; padding: 0; min-width: 44px; height: 44px; text-align: center; margin-top: 10px; margin-right: 10px; cursor: pointer; color: #282c3f;    margin: 0; font-weight: 500;
}
p.buttonsize{
    font-size: 14px; position: relative; margin: 0;
    font-weight: 500;
}
.addbag{
    padding: 0 0 0 20px;
    z-index: 0;
    width: 180px;
    padding: 20px;
    padding-left: 30px;
}
.add-to-bag{
    border-radius: 0;
    padding: 10px 15px;
    width: 10px;
    font-weight: 500;
    background-color: #20bd99;
    border: 1px solid #20bd99;
    color: #fff;
    
    text-align: center;
    width: 100%;
}



</style>

<script type="text/javascript" language="javascript">

      window.onload = function() {
          document.getElementById("btn1").onmouseover = function()
          {
              this.style.backgroundColor = "black";
          }

          document.getElementById("btn1").onclick = function()
          {
              this.style.backgroundColor = "black";
          }
      }


  </script>
</head>
<div style="width: 100%; height: 500px; background-color:#eee ">
<div class="container">
  <div class="row">
    <div class="col-sm-6" style="float: left;width: 200px;height: 250px;padding-left: 10px;">
            <img src="<?= $data[0]['vchr_pic'];?>" width="400px" height="450px"> 
    </div>
    
    <div class="col-sm-6" style="float: right;">
        <h4><?= $data[0]['vchr_product_name'];?></h4><br>
        <h4>Rs.<?= $data[0]['int_price'];?></h4><hr>
        <h4>SELECT SIZE</h4>
        <div class="button-size">
        <button class="button-style" id="btn1"><p class="buttonsize">S</p></button>
        <button class="button-style"><p class="buttonsize">M</p></button>
        <button class="button-style"><p class="buttonsize">L</p></button>
        <button class="button-style"><p class="buttonsize">XL</p></button>
        <button class="button-style"><p class="buttonsize">XXL</p></button>
        </div>
    <div class="addbag"><button class="add-to-bag"><span>ADD TO BAG</span></button></div>

</div>


</div>
</div>
</div>
</html>
