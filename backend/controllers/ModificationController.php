<?php

namespace backend\controllers;

use common\models\Modification;
use common\models\ModificationSearch;
use common\models\Generation;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ModificationController implements the CRUD actions for Modification model.
 */
class ModificationController extends Controller
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
     * Lists all Modification models.
     * @return mixed
     */
    public function actionIndex()
    {
         $modifications = Modification::find()->all();

        return $this->render('index', [
           'modifications' => $modifications,
            ]);
    }

    /**
     * Displays a single Modification model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($code)
    {
        $modification = Modification::find()
            ->where(['code' => $code])
            ->one();

        return $this->render('view', [
            'modification' => $modification,
        ]);
    }


    /**
     * Finds the Modification model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Modification the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Modification::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}