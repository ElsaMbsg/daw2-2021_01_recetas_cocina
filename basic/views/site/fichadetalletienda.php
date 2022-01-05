
<body>
<div class="container">
  <h3 class="text-center bg-info rounded py-3"><?= $titulo ?></h3>
  <div class="card">
    <div class="card-body text-center">

        <?php
        if (isset($_GET["id"]))
        {
            $existe=0;
            $visible=1;
            foreach ($dataProvider->getModels() as $card)
            {
                if ($_GET["id"]==$card->id)
                {
                    $existe=1;
                    if ($card->visible==1 && $card->activa==1){?>

                <h1 class="text-center mb-4 bg-warning"><?php  echo $card->nombre ?></h1>

                    <h3 class="text-center btn-verde">Domicilio: </h3>
                    <p><?php echo $card->domicilio;?></p>
                    <h3 class="text-center btn-verde">Población: </h3>
                    <p><?php echo $card->poblacion;?></p>
                    <h3 class="text-center btn-verde">Provincia: </h3>
                    <p><?php echo $card->provincia;?></p>

                    <?php $direccionCompleta=$card->nombre.", ".$card->domicilio.", ".$card->poblacion.", ".$card->provincia; ?>
                    <?php echo $this->render('mapa', ['direccion' => $direccionCompleta]); ?>

                <?php }
                    else{
                        $visible=0;
                    }
            }
            }
            if ($existe==0)
            { ?>
                <button class="btn bg-danger w-100">La tienda no existe.</button>
             <?php }
            else
             {
                if ($visible==0)
                { ?>
                    <button class="btn bg-warning w-100">La tienda esta inactiva.</button>
                <?php }

            }
        }
        else {?>
            <button class="btn bg-danger w-100">La tienda no existe.</button>
        <?php } ?>
    </div>
  </div>
</div>
</body>
