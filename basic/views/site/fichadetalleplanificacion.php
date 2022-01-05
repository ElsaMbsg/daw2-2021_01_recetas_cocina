<?php
    use app\models\Menu;
    use app\models\Planificacionmenu;
    use yii\helpers\ArrayHelper;
?>
<body>
<div class="container">
  <h3 class="text-center bg-info rounded py-3"><?= $nombre ?></h3>
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
                <h1 class="text-center"><b><?php echo strtoupper($card->nombre) ?></b></h1>
                    <h4>(<?php echo $card->periodo;?> días)</h4>
                    <p><?php echo $card->notas;?></p>
                    <h3 class="text-center"> MENÚS DE LA PLANIFICACIÓN: </h3>
                <?php }
            }

        }
        else {?>
            <button class="btn bg-danger w-100">La planificación no existe.</button>
        <?php } ?>
    </div>
  </div>

  <?php
        //hacer consulta para coger todos los menús de esa planificacion.
        $menus=Menu::find()->all();
        $planifmenus=Planificacionmenu::find()->orderBy(['numero_dia'=>SORT_ASC])->all();
    ?>

    <div class="body-content">

        <div class="row">

            <?php foreach ($planifmenus as $pm){ 
                foreach($menus as $card){
                    if(($pm->planificacion_id==$id) && ($card->id==$pm->menu_id)){
                    ?>
                        <div class="card col-lg-4 my-3 text-center">

                            <h4 class="text-center">DÍA <?php echo strtoupper($pm->numero_dia) ?></h4s>

                            <h2 class="text-center"><b><?php echo strtoupper($card->titulo) ?></b></h2>

                            <p><?php echo substr($card->descripcion, 0, 200).'...';?></p>
                
                            <p><a class="btn btn-outline-secondary" href="?r=site/vermenu&id=<?php echo $card->id?>">Ficha detallada &raquo;</a></p> 

                        </div>
                
            <?php }}}?>

        </div>

    </div>          

</div>
</body>
