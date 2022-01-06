<?php

use app\models\Ingrediente;
use app\models\Tienda;
use app\models\Tiendaoferta;

?>

<body>
<div class="container">
  <h3 class="text-center bg-info rounded py-3"><?= $titulo ?></h3>
  <div class="card">
    <div class="card-body text-center">

        <?php
        if (isset($_GET["id"]))
        {
            foreach ($dataProvider->getModels() as $card)
            {
                if ($_GET["id"]==$card->id)
                { ?>
                <h3 class="text- mb-4 bg-warning"><?php  echo $card->nombre ?></h3>
                    <h3 class="text-center mb-1 btn-verde">Descripción ingrediente: </h3>
                    <p><?php echo $card->descripcion;?></p>
                    <h3 class="text-center mb-1 btn-verde">Info Nutricional: </h3>
                    <p><?php echo $card->datos_nutricion;?></p>

                    <h3 class="text-center mb-5 mt-5 btn-verde">OFERTAS RELACIONADAS: </h3>
                    <div class="row">

                    <?php
                    if ($_GET["id"]==$card->id)
                    {
                        $modeloOfertas=Tiendaoferta::find()->orderBy(['id' => SORT_DESC,])->where(['ingrediente_id' =>  $card->id])->limit(6)->all();
                        ?>

                        <?php foreach ($modeloOfertas as $card3)
                        {
                        $modelTienda=Tienda::find()->where(['id'=>$card3->tienda_id])->one();
                        $modelProducto=Ingrediente::find()->where(['id'=>$card3->ingrediente_id])->one();
                        $tienda=$modelTienda->nombre;
                        $producto=$modelProducto->nombre;

                        ?>

                        <div class="col-lg-4 my-3 border-2 border-danger">
                            <a href="?r=site/vertiendaoferta&id=<?php echo $card3->id ?>" class="w-100">
                                <span class="w-100 btn bg-danger rounded"><?php echo "¡";echo $card3->descripcion;echo "!";?></span>
                                <span class="w-100 btn bg-warning rounded"><?php  echo $producto;echo " ("; echo $tienda; echo ") ";?></span>
                                <span class="w-100 btn bg-success rounded"><?php echo $card3->notas;?></span>
                            </a>
                        </div>

                    <?php }
                }
                ?>
        </div>
              <?php  }
            }
            ?>


        <?php }
        else {?>
            <button class="btn bg-danger w-100">El ingrediente no existe.</button>
        <?php } ?>
    </div>
  </div>
</div>
</body>
