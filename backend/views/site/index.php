<?php
/** @var $latestVideo \common\models\Video */
/** @var $numberOfViews integer */
/** @var $numberOfSubscribers integer */
/** @var $subscribers \common\models\Subscriber[] */
/** @var yii\web\View $this */

$this->title = 'FreeCodeTube';
?>
<div class="site-index d-flex flex-wrap">
    <?php if ($latestVideo): ?>
    <div class="card m-2" style="width: 18rem;">
        <div class="mb-3 embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item"
                   src="<?php echo $latestVideo->getVideoLink() ?>"
                   poster="<?php echo $latestVideo->getThumbnailLink() ?>"
                   type="video/mp4"></video>
        </div>
        <div class="card-body">
            <h6 class="card-title">Latest uploaded video:</h6>
                <p class="text-primary"><?php echo $latestVideo->title ?></p>
            <p class="card-text">
                Likes: <?php echo $latestVideo->getLikes()->count() ?><br>
                Views: <?php echo $latestVideo->getViews()->count() ?>
            </p>
            <a href="<?php echo \yii\helpers\Url::to(['/video/update',
                'video_id' => $latestVideo->video_id]) ?>"
               class="btn btn-primary">Edit</a>
        </div>
    </div>
    <?php else: ?>
    <div class="card m-2" style="width: 18rem;">
        <div class="card-body">
            <h6>You don't have any videos yet</h6>
        </div>
    </div>
    <?php endif; ?>
    <div class="card m-2" style="width: 18rem;">
        <h3 class="text-primary"></h3>
        <div class="card-body">
            <h6 class="card-title">Total views</h6>
            <p class="card-text" style="font-size: 72px">
                <?php echo $numberOfViews ?>
            </p>
        </div>
    </div>
    <div class="card m-2" style="width: 18rem;">
        <h3 class="text-primary"></h3>
        <div class="card-body">
            <h6 class="card-title">Total subscribers</h6>
            <p class="card-text" style="font-size: 72px">
                <?php echo $numberOfSubscribers ?>
            </p>
        </div>
    </div>
    <div class="card m-2" style="width: 18rem;">
        <h3 class="text-primary"></h3>
        <div class="card-body">
            <h6 class="card-title">Latest subscribers</h6>
            <?php foreach ($subscribers as $subscriber): ?>
                <div><?php echo $subscriber->user->username ?></div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
