<?php

namespace frontend\controllers;

use common\models\Video;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class VideoController extends Controller
{
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
       $video = Video::findOne($video_id);
       if (!$video){
           throw new NotFoundHttpException('Video does not exist');
       }

       return $this->render('view', [
           'model' => $video
       ]);
   }
}