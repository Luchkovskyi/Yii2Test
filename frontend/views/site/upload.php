<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>

<?php $form = ActiveForm::begin() ?>
<?= $form->field($model, 'image')->fileInput() ?>
    <button class="btn btn-primary sm">upload</button>
<?php ActiveForm::end() ?>

<table>
    <tr>
        <th  class="table infoin">picture</th>
        <th  class="table">rotate</th>
        <th  class="table">delete</th>
    </tr>
    <?php

    foreach($data as $item){
    ?>
        <tr class="">
            <td class="table infoin"><img id="<?=$item->id?>" class="pick" src="<?=Url::toRoute( [ "$item->file"]) ?>" /></td>
            <td class="table"><button class="btn btn-warning rotate" id="<?=$item->id?>" >rotate</button></td>
            <td class="table"><button class="btn btn-danger del" id="<?=$item->id?>">delete</button></td>
        </tr>
    <?
        }
    ?>
</table>
