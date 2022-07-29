<?php
/**@var $model \common\models\Video */

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
                <?php echo Html::a($model->createdBy->username, [
                        '/channel/view', 'username' => $model->createdBy->username
                ]) ?>
            <?php echo Html::encode($model->description)?>
        </div>
    </div>

</div>
