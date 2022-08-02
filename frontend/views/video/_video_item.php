<?php
/** @var $model \common\models\Video */

use yii\helpers\Html;

?>

<div class="card m-1" style="width: 17rem;">
    <div class="card-body p-2">
        <a href="<?php echo \yii\helpers\Url::to(['/video/view', 'video_id' => $model->video_id]) ?>">
            <div class="mr-3 embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item"
                       src="<?php echo $model->getVideoLink() ?>"
                       poster="<?php echo $model->getThumbnailLink() ?>">
                </video>
            </div>
        </a>
        <h6 class="text-muted card-text m-0"><?php echo $model->title?></h6>
        <p class="mb-0">
            <?php if ($model->createdBy) {
            echo Html::a($model->createdBy->username, [
                '/channel/view', 'username' => $model->createdBy->username
            ]);} ?>


        </p>
        <p class="text-muted card-text m-0">
            <?php echo $model->getViews()->count()?> views . <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?>
        </p>
    </div>
</div>
