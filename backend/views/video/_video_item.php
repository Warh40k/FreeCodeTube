<?php
/** @var $model \common\models\Video */
?>

<div class="media">
<!--    <div class="mr-3 embed-responsive embed-responsive-16by9">
        <video class="embed-responsive-item"
               src="<?php /*echo $model->getVideoLink() */?>"
               poster="<?php /*echo $model->getThumbnailLink() */?>">
        </video>
    </div> -->
    <a href="<?php echo \yii\helpers\Url::to(['/video/update', 'video_id' => $model->video_id]) ?>">
        <img src="<?php echo $model->getThumbnailLink() ?>" class="mr-2" alt="<?php echo $model->title ?>" width="120px">
    </a>
    <div class="media-body">
        <h6 class="mt-0"><?php echo $model->title ?></h6>
        <?php echo \yii\helpers\StringHelper::truncateWords($model->description, 10) ?>
    </div>
</div>