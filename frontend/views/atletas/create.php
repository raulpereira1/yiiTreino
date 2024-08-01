<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Atletas $model */

$this->title = 'Create Atletas';
$this->params['breadcrumbs'][] = ['label' => 'Atletas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atletas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
