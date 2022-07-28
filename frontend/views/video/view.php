<?php
/**@var $model \common\models\Video */

use yii\helpers\Url;

?>
<div class="row">
    <div class="col-sm-8">
        <div class="mb-3 embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item"
                   src="<?php echo $model->getVideoLink() ?>"
                   poster="<?php echo $model->getThumbnailLink() ?>"
                   type="video/mp4"
                   controls></video>
        </div>
        <h6><?php echo $model->title ?></h6>
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <p><?php echo $model->getViews()->count() ?> views
                    <?php echo Yii::$app->formatter->asDate($model->created_at)?></p>
            </div>
            <div>
                <a href="<?php echo Url::to(['/video/like', 'video_id' => $model->video_id])?>"
                   data-method="post" class="btn btn-sm btn-outline-primary">
                    <i class="fa-solid fa-thumbs-up"></i> 9
                </a>
                <a href="<?php echo Url::to(['/video/like', 'video_id' => $model->video_id])?>"
                   data-method="post" class="btn btn-sm btn-outline-primary">
                    <i class="fa-solid fa-thumbs-down"></i> 2
                </a>
            </div>
        </div>
    </div>

</div>
