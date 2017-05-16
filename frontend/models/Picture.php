<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Picture".
 *
 * @property integer $id
 * @property string $file
 */
class Picture extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Picture';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['id'], 'integer'],
            [['file'], 'string'],
            [['file'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file' => 'File',
        ];
    }

    /**
     * @inheritdoc
     * @return PictureQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PictureQuery(get_called_class());
    }
}
