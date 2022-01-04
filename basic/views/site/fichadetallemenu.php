<?php
    use app\models\Receta;
    use app\models\Menureceta;
    use yii\helpers\ArrayHelper;
?>
<body>
<div class="container">
  <h3 class="text-center bg-info rounded py-3"><?= $titulo ?></h3>
  <div class="card">
    <div class="card-body text-center">

        <?php
        if (isset($_GET["id"]))
        {
            $id = $_GET["id"];
            foreach ($dataProvider->getModels() as $card)
            {
                if ($_GET["id"]==$card->id)
                { ?>
                <h1 class="text-center"><b><?php echo strtoupper($card->titulo) ?></b></h1>
                    <h3 class="text-center">Descripción menú: </h3>
                    <p><?php echo $card->descripcion;?></p>
                    <h3 class="text-center">ID Usuario: </h3>
                    <p><?php echo $card->usuario_id;?></p>
                    <h3 class="text-center"> RECETAS DEL MENÚ: </h3>
                <?php }
            }

            //hacer consulta para coger todos las recetas de ese menú.

        }
        else {?>
            <button class="btn bg-danger w-100">El menú no existe.</button>
        <?php } ?>
    </div>
  </div>

  <?php
        //hacer consulta para coger todos las recetas de ese menú.
        $recetas=Receta::find()->all();
        $menurecetas=Menureceta::find()->all();
    ?>

    <div class="body-content">

        <div class="row">

            <?php foreach ($recetas as $card){ 
                foreach($menurecetas as $mr){
                    if(($mr->menu_id==$id) && ($card->id==$mr->receta_id)){
                    ?>
                        <div class="card col-lg-4 my-3 text-center">
                    
                            <h2 class="text-center"><b><?php echo strtoupper($card->nombre) ?></b></h2>

                            <p><?php echo substr($card->descripcion, 0, 200).'...';?></p>
                
                            <p><a class="btn btn-outline-secondary" href="?r=site/verreceta&id=<?php echo $card->id?>">Ficha detallada &raquo;</a></p> 

                        </div>
                
            <?php }}}?>

        </div>

    </div>          

</div>
</body>
