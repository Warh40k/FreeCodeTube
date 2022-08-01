<?php
/** @var $channel \common\models\User */

use yii\helpers\Url;
?>

<a class="btn btn-<?php echo $channel->isSubscribed(Yii::$app->user->id) ? "secondary" : "danger" ?>"
       href="<?php echo Url::to(['channel/subscribe', 'username' => $channel->username]) ?>"
       data-method="post" data-pjax="1"
       role="button">
           Subscribe
        <i class="fa-regular fa-bell"></i>
    </a> <?php echo $channel->getSubscribers()->count() ?>
