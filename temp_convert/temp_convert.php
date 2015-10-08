<?php
    $error = 0;

    if (isset($_GET['k']) && strlen($_GET['k'])){
        $k = $_GET['k'];
        $f = number_format($k * (9/5) - 459.67, 2);
        $c = number_format($k - 274.15, 2);
    }

    elseif (isset($_GET['c']) && strlen($_GET['c'])){
        $c = $_GET['c'];
        $k = number_format($c + 274.15, 2);
        $f = number_format(($c * (9/5)) + 32, 2);
    }

    elseif (isset($_GET['f']) && strlen($_GET['f'])){
        $f = $_GET['f'];
        $c = number_format(($f - 32) * (5/9), 2);
        $k = number_format(($f + 459.67) * 5/9, 2);
    }
    else{
        $error = 1;
    }
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Temperature Converter</title>
</head>
<body>
<?php if($error != 1){?>
	<table>
		<tr>
			<th>Scale</th>
			<th>Temperature</th>
		</tr>
		<tr>
			<td>K</td>
			<td><?php echo $k?></td>
		</tr>
		<tr>
			<td>C</td>
			<td><?php echo $c?></td>
		</tr>
		<tr>
			<td>F</td>
			<td><?php echo $f?></td>
		</tr>
	</table>
	<?php } else{?>
	   Go back and put in one of the values. 
	<?php }?>
</body>
</html>