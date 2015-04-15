<?php

namespace aquy\setting\module\models;

use Yii;

class Setting extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'setting';
    }

    public function rules()
    {
        return [
            [['value'], 'string'],
            [['key'], 'string', 'max' => 255]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'key' => 'ключ',
            'value' => 'значение',
        ];
    }
}
