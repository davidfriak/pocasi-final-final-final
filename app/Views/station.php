
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css');?>">
    <title>Document</title>
    
</head>
<body>
    <?= $this->include("layout/navbar");?>
    <div class="container">
    <h1>
        Přehled meteorologických stanic ve spolkové zemi 
        <?php 
            $img_vlajka = array(
                'src' => 'obrazky/vlajky/'.$stat->flag,
                'alt' => 'vlajka',
                'class' => 'img-fluid'
            );

            foreach($bundesland as $row) {
                echo $row->name;            
            }
        ?>

    </h1>
        <div class="row">

        <?php
            foreach($station as $row) {
            ?>
            <div class="card col-lg-4">
                <div class="card-body"> <h3>Stanice:</h3><?= anchor ("mereni/".$row->S_ID ,$row->place)."<p> "?> <?= $row->geo_latitude. "°<p> ".$row->geo_longtitude."°<p> ".$row->height." m "?> <?php echo img($img_vlajka);?></div>
            </div>
            <?php    
            }
        ?> 
        </div>
    </div>
</body>

</html>