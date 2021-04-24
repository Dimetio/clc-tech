<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\TestForm;
use app\models\Post;

class SiteController extends Controller
{

    public $enableCsrfValidation = false;
    //echo '<pre>'.print_r($arr, true).'</pre>';
 
    public function actionIndex() {    

        $chat_id = 147541090;

        $post = TestForm::findOne(2);
        // $post->text = 'Ручное изменение';
        // $post->save(); //TestForm::updateAll()

        //$post->delete();// TestForm::deleteAll() + можно добавить условие deleteAll(['>', 'id, 3])

        $model = new TestForm();

        if($model->load(Yii::$app->request->post())) {
            if($model->save()) {
                Yii::$app->session->setFlash('success', 'Данные приняты');

                $res = Yii::$app->telegram->sendMessage([
                    'chat_id' => $chat_id,
                    'text' => $model->text,
                ]);
                
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

        return $this->render('index', compact('model'));
    }

    public function actionPost() {
       // $posts = Post::find()->orderBy(['id' => SORT_DESC])->all();
        $posts = Post::find()->orderBy(['id' => SORT_DESC])->asArray()->all();

        return $this->render('post', compact('posts'));
    }
    
}
 