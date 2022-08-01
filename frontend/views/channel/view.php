<?php

/** @var $channel \common\models\User */
/** @var $dataProvider \yii\data\ActiveDataProvider */

use yii\helpers\Url;

?>

<div class="jumbotron">
    <h1 class="display-4"><?php echo $channel->username ?></h1>
    <hr class="my-4">
    <?php \yii\widgets\Pjax::begin() ?>
    <?php echo $this->render('_subscribe', [
            'channel' => $channel
    ]) ?>
    <?php \yii\widgets\Pjax::end() ?>
</div>


<?php echo \yii\widgets\ListView::widget([ // create separate function to avoid dublicating
    'dataProvider' => $dataProvider,
    'itemView' => '@frontend/views/video/_video_item',
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false,
    ]
]);
