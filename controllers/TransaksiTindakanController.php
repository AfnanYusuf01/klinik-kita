<?php

namespace app\controllers;

use app\models\TransaksiTindakan;
use app\models\TransaksiTindakanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TransaksiTindakanController implements the CRUD actions for TransaksiTindakan model.
 */
class TransaksiTindakanController extends Controller
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
     * Lists all TransaksiTindakan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TransaksiTindakanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TransaksiTindakan model.
     * @param int $id_transaksi_tindakan Id Transaksi Tindakan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_transaksi_tindakan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_transaksi_tindakan),
        ]);
    }

    /**
     * Creates a new TransaksiTindakan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TransaksiTindakan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_transaksi_tindakan' => $model->id_transaksi_tindakan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TransaksiTindakan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_transaksi_tindakan Id Transaksi Tindakan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_transaksi_tindakan)
    {
        $model = $this->findModel($id_transaksi_tindakan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_transaksi_tindakan' => $model->id_transaksi_tindakan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TransaksiTindakan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_transaksi_tindakan Id Transaksi Tindakan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_transaksi_tindakan)
    {
        $this->findModel($id_transaksi_tindakan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TransaksiTindakan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_transaksi_tindakan Id Transaksi Tindakan
     * @return TransaksiTindakan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_transaksi_tindakan)
    {
        if (($model = TransaksiTindakan::findOne(['id_transaksi_tindakan' => $id_transaksi_tindakan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
