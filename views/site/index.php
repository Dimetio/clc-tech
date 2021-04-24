<?php

/* @var $this yii\web\View */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'My Yii Application';
?>

<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <?php if(Yii::$app->session->hasFlash('success')): ?>
                    <?php echo Yii::$app->session->getFlash('success') ;?>
                <?php endif; ?>

                <?php if(Yii::$app->session->hasFlash('error')): ?>
                    <?php echo Yii::$app->session->getFlash('error') ;?>
                <?php endif; ?>
                <?php $form = ActiveForm::begin(['options' => ['id' => 'testForm']]); ?>
                    <?= $form->field($model, 'text')->textarea(['rows'=> 5]); ?>
                    <?= Html::submitButton('Отправить',['class' => 'btn btn-success']); ?>
                <?php $form = ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
