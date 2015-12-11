<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\web\Session;
$session = new Session();
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

    <link rel="stylesheet" type="text/css" href="css/Mytheme.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
     <!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
     <link rel="stylesheet" type="text/css" href="css/style.css" >
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/georgia.js"></script>
    <script type="text/javascript" src="js/cuf_run.js"></script>
    <!-- CuFon ends -->
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php /*
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    if($session['usr']!="") {
        $welcome =  $session['usr'];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => '<span class="glyphicon glyphicon-home">  </span>  Home', 'url' => ['/site/index']],
            ['label' => '<span class="glyphicon glyphicon-signal"></span>  Statistic', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => '<span class="glyphicon glyphicon-off">  </span>  Logout','url' => ['/user/logout']] ,
            ['label' =>  '<span class="glyphicon glyphicon-user">  </span> '.$welcome],    
        ],
        'encodeLabels' => false,   
    ]);
}
    NavBar::end();
    */?>

 <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="index.php">Funky Times</a></h1></div>
    </div>
  </div>
  <div class="menu_nav">
    <div class="menu_nav_resize">
     <?php
  if($session['usr']!="")
  {
    $welcome =  $session['usr'];
 ?>
      <ul>
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
        <li><a href="blog.html"><span class="glyphicon glyphicon-signal"></span>  Statistic</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="index.php?r=user/logout"><span class="glyphicon glyphicon-off">  </span> Logout</a></li>
        <li><a hred="#"><span class="glyphicon glyphicon-user"> <?=$welcome?>  </span></a> </li>
      </ul>
      <?php }?>
    </div>
  </div>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
