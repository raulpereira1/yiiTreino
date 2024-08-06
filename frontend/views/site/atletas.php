<?php
namespace app\site\atletas;
use app\models\Atletas;
use frontend\assets\myAsset\FirstAsset;
FirstAsset::register($this);

/* @var $this yii\web\View */
/* @var $atletas app\models\Atletas */
/* @var $searchModel frontend\models\AtletasModel */
/* @var $dataProvider yii\data\ActiveDataProvider */


?>



<?php    foreach (Atletas::find()->all() as $atletas): {}    ?>
    <div class="CardAthletes">

        <h2><label>Nome:<?= \yii\helpers\Html::encode($atletas->nome)?></label></h2><br>
        <h4><label>Idade: <?= \yii\helpers\Html::encode($atletas->idade)?></label><br></h4>
        <h4><label>Federação: <?= \yii\helpers\Html::encode($atletas->federacao)?></label><br></h4>
        <h4><label>Esporte: <?= \yii\helpers\Html::encode($atletas->esporte)?></label><br></h4>
        <h4><label>Categoria: <?= \yii\helpers\Html::encode($atletas->categoria)?></label><br></h4>

    </div>
<?php endforeach; ?>


<?php
