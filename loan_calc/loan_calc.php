<?php
	$p = $_POST['p'];
	$y = $_POST['y'];
	$t = $_POST['t'];
	$i = $_POST['i'];
	$total = number_format($p * pow(1 + ($i / (100*$t)), $t*$y), 2);
?> 
<html>
    <head>
        
    </head>
    <body>
        <h1>Principal: <?php echo $p?></h1>
        <h1>Year: <?php echo $y?></h1>
        <h1>Interest: <?php echo $i?></h1>
        <h1>Compounding/year: <?php echo $t?></h1>
        <h1>Total: <?php echo $total?></h1>
    </body>
</html>