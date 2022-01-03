
<body>
<div class="container">
  <h3 class="text-center bg-info rounded py-3"><?= $titulo ?></h3>
  <div class="card">
    <div class="card-body text-center">

        <?php
        if (isset($_GET["id"]))
        {
            $existe=0;

            foreach ($dataProvider->getModels() as $card)
            {
                if ($_GET["id"]==$card->id)
                {
                    $existe=1;

                ?>
                <h3 class="text-center"><?php  echo $card->descripcion ?></h3>
                <h3 class="text-center">Envase: </h3>
                <p><?php echo $card->envase;?></p>
                <h3 class="text-center">Cantidad: </h3>
                <p><?php echo $card->cantidad;echo " "; echo $card->medida ?></p>
                <h3 class="text-center">Precio: </h3>
                <p><?php echo $card->notas;?></p>


            <?php }
            }
            if ($existe==0)
            { ?>
                <button class="btn bg-danger w-100">La oferta no existe.</button>
             <?php }

        }
        else {?>
            <button class="btn bg-danger w-100">La tienda no existe.</button>
        <?php } ?>
    </div>
  </div>
</div>
</body>
