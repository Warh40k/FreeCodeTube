<?php
/**@var $model \common\models\Video */
/**@var $similarVideos \common\models\Video[] */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

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
                <?php Pjax::begin() ?>
                    <?php echo $this->render('_buttons', [
                            'model' => $model
                    ]) ?>
                <?php Pjax::end() ?>
            </div>
        </div>
        <div>
            <p>
                <?php echo \common\helpers\Html::channelLink($model->createdBy, false) ?>
            </p>
            <?php echo Html::encode($model->description)?>
        </div>
    </div>
    <div class="col-sm-4">
        <?php foreach ($similarVideos as $similarVideo): ?>
            <div class="media mb-3">
                <a href="<?php echo Url::to(['/video/view', 'video_id' => $similarVideo->video_id]) ?>">
                    <div class="embed-responsive embed-responsive-16by9 mr-2" style="width: 160px">
                        <video class="embed-responsive-item"
                               src="<?php echo $similarVideo->getVideoLink() ?>"
                               poster="<?php echo $similarVideo->getThumbnailLink() ?>"
                               type="video/mp4"></video>
                    </div>
                </a>
                <div class ="media-body ml-2 mr-2">
                    <h6 class="mt-0"><?php echo $similarVideo->title ?></h6>
                    <div class="text-muted">
                        <p class="m-0">
                            <?php echo \common\helpers\Html::channelLink($similarVideo->createdBy) ?>
                        <small>
                            <?php echo $similarVideo->getViews()->count() ?> views .
                            <?php echo Yii::$app->formatter->asRelativeTime($similarVideo->created_at)?>
                        </small>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
