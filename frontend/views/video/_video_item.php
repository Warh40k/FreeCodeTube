<?php
/** @var $model \common\models\Video */
?>

<div class="card m-1" style="width: 17rem;">
    <div class="card-body p-2">
        <a href="<?php echo \yii\helpers\Url::to(['/video/view', 'video_id' => $model->video_id]) ?>">
            <div class="mr-3 embed-responsive embed-responsive-16by9"
                 style = "width: 16rem" >
                <video class="embed-responsive-item"
                       src="<?php echo $model->getVideoLink() ?>"
                       poster="<?php echo $model->getThumbnailLink() ?>">
                </video>
            </div>
        </a>
        <h6 class="card-title m-0"><?php echo $model->title?></h6>
        <p class="text-muted card-text m-0"><?php echo $model->createdBy->username ?></p>
        <p class="text-muted card-text m-0">
            140 views <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?>
        </p>
    </div>
</div>
