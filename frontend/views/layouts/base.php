<?php

/** @var \yii\web\View $this */
/** @var string $content */

use yii\bootstrap4\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);

$this->beginPage(); ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap h-100 d-flex flex-column">
    <?php echo $this->render('_header') ?>
    <?php echo $content ?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
