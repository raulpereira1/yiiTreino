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
<!--    --><?php //   foreach (Atletas::find()->all() as $atletas): {}    ?>
<!--    <div class="CardAthletes">-->
<!--        <h2><label>Nome:--><?php //= \yii\helpers\Html::encode($atletas->nome)?><!--</label></h2><br>-->
<!--        <h4><label>Idade: --><?php //= \yii\helpers\Html::encode($atletas->idade)?><!--</label><br></h4>-->
<!--        <h4><label>Federação: --><?php //= \yii\helpers\Html::encode($atletas->federacao)?><!--</label><br></h4>-->
<!--        <h4><label>Esporte: --><?php //= \yii\helpers\Html::encode($atletas->esporte)?><!--</label><br></h4>-->
<!--        <h4><label>Categoria: --><?php //= \yii\helpers\Html::encode($atletas->categoria)?><!--</label><br></h4>-->
<!--    </div>-->
<!--    --><?php //endforeach; ?>


