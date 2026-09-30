
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
        <h1>Info o spolkové zemi:</h1>
    <?php
        $img_mapa = array(
            'src' => 'obrazky/mapy/'.$stat->map,
            'alt' => 'mapa',
            'class' => 'img-fluid'
        );
        $img_vlajka = array(
            'src' => 'obrazky/vlajky/'.$stat->flag,
            'alt' => 'vlajka',
            'class' => 'img-fluid'
        );
    ?>
    
        <h1>Mapka: <?php  echo img($img_mapa); ?> </h1>
        <h1>Vlajka: <?php  echo img($img_vlajka); ?> </h1> 
    </div>
</body>

</html>