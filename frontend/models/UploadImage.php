<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;
use app\models\Picture;


class UploadImage extends Model{

    public $image;

    public function rules(){
        return[
            [['image'], 'file', 'extensions' => 'png, jpg', 'skipOnEmpty' => false],
        ];
    }

    public function upload(){
        if($this->validate()){
            $this->image->saveAs("uploads/{$this->image->baseName}.{$this->image->extension}");
            $saveData = new Picture();
            $saveData->file= "uploads/{$this->image->baseName}.{$this->image->extension}";
            $saveData -> save();
        }else{
            return false;
        }
    }

}