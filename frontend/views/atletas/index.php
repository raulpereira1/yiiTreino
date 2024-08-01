<?php

use app\models\Atletas;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AtletasModel $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Atletas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atletas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Atletas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'federacao',
            'idade',
            'esporte',
            //'categoria',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Atletas $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
