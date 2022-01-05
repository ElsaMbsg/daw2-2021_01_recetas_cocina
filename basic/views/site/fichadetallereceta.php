<?php

use app\models\Ingrediente;

?>

<body>
<div class="container">
  <h1 class="text-center bg-info rounded py-3"><?= $titulo ?></h1>
  <div class="card">
    <div class="card-body text-center">

        <?php
        if (isset($_GET["id"]))
        {
            foreach ($dataProvider->getModels() as $card)
            {
                if ($_GET["id"]==$card->id)
                { ?>
                <h2 class="text-center mb-4"><?php echo $card->nombre ?></h2>
                    <h3 class="text-center">Descripción receta: </h3>
                    <p><?php echo $card->descripcion;?></p>
                <?php }
            }?>
            <h3 class="text-center mb-5">Ingredientes receta: </h3>

            <?php
            foreach ($dataProvider2->getModels() as $card2)
            {
                if ($_GET["id"]==$card2->receta_id)
                {

                    $model = Ingrediente::find()->select('nombre')->where(['id' =>  $card2->ingrediente_id])->one();

                    ?>
                    <h5 class="text-center"><?php echo $card2->cantidad;echo " ";echo $card2->medida;echo " de ";echo $model->nombre ?></h5>
                <?php }
            }
        }
        else {?>
            <button class="btn bg-danger w-100">La receta no existe.</button>
        <?php } ?>
    </div>
  </div>
</div>
</body>
