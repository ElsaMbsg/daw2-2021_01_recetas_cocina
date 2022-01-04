
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
                <h3 class="text-center"><?php echo $card->id; echo ". "; echo $card->titulo ?></h3>
                    <h3 class="text-center">Descripción menú: </h3>
                    <p><?php echo $card->descripcion;?></p>
                    <h3 class="text-center">ID Usuario: </h3>
                    <p><?php echo $card->usuario_id;?></p>
                <?php }
            }
        }
        else {?>
            <button class="btn bg-danger w-100">El menú no existe.</button>
        <?php } ?>
    </div>
  </div>
</div>
</body>
