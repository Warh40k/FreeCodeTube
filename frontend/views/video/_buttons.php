<?php
/** @var $model \common\models\Video */

use yii\helpers\Url;
?>
<a href="<?php echo Url::to(['/video/like', 'video_id' => $model->video_id])?>"
   data-method="post" class="btn btn-sm btn-outline-<?php echo $model->IsLikedBy(Yii::$app->user->id) ? 'primary' : 'secondary' ?>"
   data-pjax="1">
    <i class="fa-solid fa-thumbs-up"></i> <?php echo $model->getLikes()->count() ?>
</a>
<a href="<?php echo Url::to(['/video/dislike', 'video_id' => $model->video_id])?>"
   data-method="post" class="btn btn-sm btn-outline-<?php echo $model->IsDislikedBy(Yii::$app->user->id) ? 'primary' : 'secondary' ?>"
   data-pjax="1">
    <i class="fa-solid fa-thumbs-down"></i><?php echo $model->getDislikes()->count() ?>
<!--    --><?php //echo $model->getDisLikes()->count() ?>
</a>
