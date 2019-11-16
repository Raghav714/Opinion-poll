<?php
	require 'db_fn.php';
	$model = new Opi_poll();
	$count = $model->count_rows();
	$libraries = array("", "Miguel de Cervantes", "Charles Dickens", "J.R.R. Tolkien", "Antoine de Saint-Exuper");
	$dataPoints = array();
	$max = 0;
	for ($i = 1; $i < 5; $i++) {
		$data = array();
	        $sql_stmt = "SELECT COUNT(choice) choices_count FROM author_poll WHERE choice = $i;";
		$result = $model->execute($sql_stmt);
		if (!$result) die("Database access failed: " . mysqli_error());
	        $rows = mysqli_num_rows($result);
	        if ($rows) {
			while ($row = mysqli_fetch_array($result)) {
	               		$data = $row;
	            	}
			$dataPoints[$i-1] = array("label"=> $libraries[$i], "y"=>$data[0]);
			if ($max<$data[0]){
				$max = $data[0];
				$index = $i;
			}	        	
		}
	}
	echo "<marquee bgcolor = 'red', behavior='slide' direction='left' onmouseover='this.stop();' onmouseout='this.start();'>";  
                     echo $libraries[$index]." won with ".$max." Votes";  
         echo "</marquee>";
	$model->close();	
?>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Poll Result"
	},
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "Votes #,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>   



