<ul>
<?php
$month = array("januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december");

foreach($birthdays as $birthday) {?>


    <a href="<?= URL ?>Birthday/edit">
       	<ul>
    	   <h1><?=$birthday['person'];?></h1>
       	</ul>
    </a>

    <ul>
    	<h2><?=$birthday['day'];?></h2>
    </ul>

    <ul>
    	<?=$month[$birthday['month'] -1]; ?>
    </ul>
    <h4><a href="<?= URL ?>Birthday/delete">Delete</a></h4>

<?php }?>
</ul>
<a href="<?= URL ?>Birthday/create">Toevoegen</a>