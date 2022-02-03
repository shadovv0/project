<?php

namespace backend\controllers;

use common\models\UploadImage;
use Yii;
use common\models\Generation;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;
use yii\db\ActiveRecord;

/**
 * GenerationController implements the CRUD actions for Brand model.
 */
class GenerationController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Generation models.
     * @return mixed
     */
    public function actionIndex()
    {
       $generations = Generation::find()->all();

        return $this->render('index', [
            'generations' => $generations,
        ]);
    }

    /**
     * Displays a single Generation model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($code)
    {
        $generation = Generation::find()
            ->where(['code' => $code])
            ->one();

        return $this->render('view', [
           'generation' => $generation,
        ]);
    }


    /**
     * Finds the Generation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Generation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Generation::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    }