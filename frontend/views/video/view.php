<?php
/**@var $model \common\models\Video */
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
    </div>

</div>
