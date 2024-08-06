<?php
use app\models\Atletas;
use frontend\assets\myAsset\FirstAsset;
FirstAsset::register($this);

/* @var $this yii\web\View */
/* @var $atletas app\models\Atletas */
/* @var $searchModel frontend\models\AtletasModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$atletasSkate = Atletas::find()->where(['esporte' => 'Skate'])->all();

?>

<div class="Competicao">
    <div class="Competicao-Name"><h1>Competição</h1></div>


    <?php \yii\widgets\Pjax::begin(['id' => 'pjax-container'])?>


    <?php foreach (Atletas::find()->where(['esporte' => 'skate'])->all() as $atletasSkate): ?>

        <h6><label>Atleta: <?= \yii\helpers\Html::encode($atletasSkate->nome)?><br>
                <?= \yii\helpers\Html::encode($atletasSkate->esporte)?><br>
                <?= \yii\helpers\Html::encode($atletasSkate->federacao)?></label></h6>



    <?php endforeach;?>
    <?php \yii\widgets\Pjax::end()?>
</div>
<button type="button" class="btn btn-dark"  onclick="$.pjax.reload({container: '#pjax-container'})">Reload</button>
