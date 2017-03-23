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

 <div class="header" style="height:130px;width:100%;color:#fff;padding:5px;border-bottom:2px solid #eee">
    <div style="height:40px;width:500px;margin-top:25px;float:right;margin-right:0px;color:#000;text-align:right">
        <form>
          <input type="text" name="srch" placeholder="Search for products....." size="50px" height="20px" >
          <input type="submit" value="search" size="20px" style="border-radius:30px;;color:#000">
        </form>
    </div>
    <div id="login" style="height:50px;width:80px;color:#000;text-align:center;margin-top:25px;float:right">
        <a href="index.php?r=login/login" style="color:#000"> Login </a>
    </div>
    <div id="login" style="height:50px;width:80px;color:#000;text-align:center;margin-top:25px;float:right">
        <a href="index.php?r=register/register" style="color:#000">Signup</a>
    </div>
    <div id="menu" style="height:50px;width:400px;color:#000;text-align:center;margin-top:25px;float:right">
        <ul>
      <li style="display:inline"><div style="height:30px;width:100px;float:left;"><a href="index.php?r=site/category1" style="color:#000">Mobile Phone</a>
      </div></li>
      <li style="display:inline"><div style="height:30px;width:100px;float:left;"><a href="index.php?r=site/category2" style="color:#000">Laptop</a>
      </div></li>
     
    
        </ul>
    </div>
    <div id="logo" style="margin-left:10px;height:80px;width:100px;color:#000;text-align:center;font-size:25px;">
         <img src="logo.png" height="120px" width="120px"/>
    </div>

 </div>
 
 <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="footer" style="height:70px;width:100%;background-color:#fff;color:#000">
    <div class="container">
        <p class="pull-left">&copy; shopco <?= date('Y') ?></p>
         <!--<?= date('D-M-Y') ?> //date picking -->
        <p class="pull-right">CreatedBy: shopco</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
