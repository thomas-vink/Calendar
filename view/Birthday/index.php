<ul>
<?php
$month = array("januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december");
$vorigemaand = '';
$VorigeDag = '';

foreach($birthdays as $birthday) {

    if ($vorigemaand != $birthday['month']) {
        echo '<ul>';
        echo '<h1>' . $month[$birthday['month']-1] .'</h1>';
        echo '</ul>';
    }


    if ($VorigeDag != $birthday['day']) {
        echo '<ul>';
        echo '<h2>' . $birthday['day'] .'</h2>';
        echo '</ul>';
    }
     ?>
   <h5><a href="<?= URL ?>Birthday/edit/<?= $birthday['id'];?>">
        
           <?=$birthday['person'];?>
        
    </a></h5>

    

    

    <h4><a href="<?= URL ?>Birthday/delete/<?= $birthday['id'];?>" onclick="return confirm('weet u zeker dat u deze verjaardag wilt verwijderen?');">Delete</a></h4>

<?php  
    $vorigemaand = $birthday['month'];
    
    $VorigeDag = $birthday['day'];
   }
 ?>
<a href="<?= URL ?>Birthday/create">Toevoegen</a>
</ul>