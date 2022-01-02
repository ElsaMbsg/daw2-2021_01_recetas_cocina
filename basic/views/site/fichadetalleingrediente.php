
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
                <h3 class="text-center"><?php echo $card->id; echo ". "; echo $card->nombre ?></h3>
                    <h3 class="text-center">Descripción ingrediente: </h3>
                    <p><?php echo $card->descripcion;?></p>
                    <h3 class="text-center">Info Nutricional: </h3>
                    <p><?php echo $card->datos_nutricion;?></p>
                <?php }
            }
        }
        else {?>
            <button class="btn bg-danger w-100">El ingrediente no existe.</button>
        <?php } ?>
    </div>
  </div>
</div>
</body>
