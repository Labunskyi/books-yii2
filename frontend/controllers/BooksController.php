<?php

namespace frontend\controllers;

use Yii;
use common\models\Books;
use frontend\models\BooksModel;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * BooksController implements the CRUD actions for Books model.
 */
class BooksController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Books models.
     * @return mixed
     */
    public function actionIndex()
    {
        $query = Books::find()->with(['authors', 'genres']);
		$pages = new Pagination(['defaultPageSize'=> 3, 'totalCount' => $query->count()]);
		$books = $query->offset($pages->offset)
		->limit($pages->limit)
		->all();
        return $this->render('index', compact('books', 'pages'));
    }

    /**
     * Displays a single Books model.
     * @param integer $id
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
     * Finds the Books model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Books the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Books::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
