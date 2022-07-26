<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Video */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="video-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-8">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'tags')->textarea(['rows' => 6]) ?>

        </div>
        <div class="col-sm-4">
            <div class="mb-3">
                <div class="text-muted">Video link</div>
                <a href="<?php echo $model->getVideoLink() ?>">Open Video</a>
            </div>

            <div class="mb-3">
                <div class="text-muted">Video name</div>
                <?php echo $model->video_name ?>
            </div>
            <?= $form->field($model, 'status')->textInput() ?>
        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
