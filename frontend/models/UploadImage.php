<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadImage extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;
    public $imagePath;


    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {

        $this->imagePath = 'uploads/' . $this->imageFile->baseName . time() .  '.' . $this->imageFile->extension;
        if ($this->validate()) {
            $this->imageFile->saveAs($this->imagePath);
            return true;
        } else {
            return false;
        }
    }
}