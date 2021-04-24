<?php

namespace app\models;
//use yii\base\Model;
use yii\db\ActiveRecord;

class TestForm extends ActiveRecord {

  public static function tableName() {
    return 'posts';
  }
  //public $text; // объявлять не обязательно, нужно когда наследуемся от Model

  public function attributeLabels() {
    return [
      'text'=> 'Текст сообщения',
    ];
  }

  public function rules() {
    return [
      ['text', 'required'],
      ['text', 'trim'],
    ];
  }
}
