<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

 <div class="header" style="height:70px;width:100%;color:#fff;padding:10px">
    <div style="height:50px;width:800px;margin-top:10px;float:right;margin-right:200px;color:#000">
        <form>
          <input type="text" name="srch" placeholder="Search for products....." size="50px" height="20px" >
          <input type="submit" value="search" size="20px" style="border-radius:30px;;color:#000">
        </form>
    </div>
    <div id="logo" style="margin-left:100px;height:50px;width:200px;color:#000;text-align:center;font-size:25px">
         OnlineShopping
    </div>

 </div>
 <div class="navigation" style="height:30px;width:100%;color:#000;text-align:center;border-bottom:2px solid #eee">
  <div style="height:30px;width:100px;float:right;">Login</div>
    <div style="height:30px;width:100px;float:right;"></div>

  <ul>
      <li style="display:inline"><div style="height:30px;width:100px;float:left;">category1</div></li>
      <li style="display:inline"><div style="height:30px;width:100px;float:left;">category2</div></li>
      <li style="display:inline"><div style="height:30px;width:100px;float:left;">category3</div></li>
      <li style="display:inline"><div style="height:30px;width:100px;float:left;">category4</div></li>
 </ul>

 </div>
 <div class="container" style="border:1px dashed #00f">
    
        <?= $content ?>
    </div>
</div>

<footer class="footer" style="height:70px;width:100%;background-color:#fff;color:#000">
    <div class="container">
        <p class="pull-left">&copy; OnlineShopping <?= date('Y') ?></p>
         <!--<?= date('D-M-Y') ?> //date picking -->
        <p class="pull-right">CreatedBy: OnlineShopping</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
