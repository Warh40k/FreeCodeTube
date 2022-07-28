<?php

namespace frontend\controllers;

use common\models\Video;
use common\models\VideoLike;
use common\models\VideoView;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class VideoController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['like', 'dislike'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ],
            'verb' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'like' => ['post'],
                    'dislike' => ['post'],
                ]
            ]
        ];
    }

    public function actionIndex()
    {
       $dataProvider = new ActiveDataProvider([
         'query'  => Video::find()->published()->latest()
       ]);
       return $this->render('index', [
           'dataProvider' => $dataProvider
       ]);
    }

    public function actionView($video_id) {
       $this->layout = 'auth';
       $video = $this->findVideo($video_id);

       $videoView = new VideoView();
       $videoView->video_id = $video_id;
       $videoView->user_id = \Yii::$app->user->id;
       $videoView->created_at = time();
       $videoView->save();

       return $this->render('view', [
           'model' => $video
       ]);
    }

    public function actionLike($video_id)
    {
       $video = $this->findVideo($video_id);
       $videoLike = new VideoLike();
       $videoLike->video_id = $video_id;
       $videoLike->user_id = \Yii::$app->user->id;
       $videoLike->created_at = time();
       if ($videoLike->save()) {
           return "success";
       }
    }

    protected function findVideo($video_id){

       $video = Video::findOne($video_id);
       if (!$video){
           throw new NotFoundHttpException('Video does not exist');
       }
       return $video;
    }
}