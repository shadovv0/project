<?php

namespace backend\controllers;

use common\models\UploadImage;
use Yii;
use common\models\Model;
use common\models\ModelSearch;
use common\models\Generation;
use common\models\GenerationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;

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
        $searchModel = new GenerationSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        $dropdownModels = Model::getDropdownArray();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dropdownModels' => $dropdownModels,
        ]);
    }

    /**
     * Displays a single Generation model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Generation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Generation();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {

                $file = new UploadImage();
                $file->imageFile = UploadedFile::getInstance($model, 'avatar');

                try {
                    if (!$file->upload()) {
                        throw new \Exception($file->getErrors());
                    }
                } catch (\Exception $e) {
                    $model->addError('avatar', $file->errors);
                    return;
                }

                $model->avatar = $file->imagePath;

                if ($model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }


            }
        } else {
            $model->loadDefaultValues();
        }

        $dropdownModels = Model::getDropdownArray();

        return $this->render('create', [
            'model' => $model,
            'dropdownModels' => $dropdownModels,
        ]);
    }

    /**
     * Updates an existing Generation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post())) {
            $file = new UploadImage();
            $file->imageFile = UploadedFile::getInstance($model, 'avatar');

            try {
                if (!$file->validate() || !$file->upload()) {
                    throw new \Exception(json_encode($file->getErrors()));
                }
            } catch (\Exception $e) {
                $model->addError('avatar', $file->errors);
            }

            $model->avatar = $file->imagePath;

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Generation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
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