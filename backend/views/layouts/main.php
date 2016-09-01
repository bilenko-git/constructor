<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
/*use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;*/
use common\widgets\Alert;

//AppAsset::register($this);
$asset = backend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="fixed">
<?php $this->beginBody() ?>

<div class="wrap">
    <?= $this->render('header.php', ['baseUrl' => $baseUrl]) ?>
    <?= $this->render('leftmenu.php', ['baseUrl' => $baseUrl]) ?>
    <?= $this->render('content.php', ['content' => $content]) ?>
    <?= $this->render('footer.php', ['baseUrl' => $baseUrl]) ?>
    <?= $this->render('rightside.php', ['baseUrl' => $baseUrl]) ?>

    <div class="control-sidebar-bg"></div>
</div>

<!--<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?/*= date('Y') */?></p>

        <p class="pull-right"><?/*= Yii::powered() */?></p>
    </div>
</footer>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
