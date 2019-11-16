<html>
    <head>
        <title>Opinion Poll</title>
    </head>
    <body>
            <h1>Opinion Poll</h1>
        <p><b>What is your favorite Author?</b></p>
        <form method="POST" action="opinion.php">
            <p> <input type="radio" name="vote" value="1" />Miguel de Cervantes
                <br /><input type="radio" name="vote" value="2" />Charles Dickens
                <br /><input type="radio" name="vote" value="3" />J.R.R. Tolkien
                <br /><input type="radio" name="vote" value="4" />Antoine de Saint-Exuper
            </p>
            <p><input type="submit" name="submitbutton" value="Vote" /></p>
        </form>
	<form method="POST" action="display.php">
		<p><input type="submit" name="submitbutton" value="Show Result !" /></p>
	</form>
    </body>
</html>
<?php
if (count($_POST) == 1) {
    echo "<script>alert('Please Select First!');</script>";
}
if (count($_POST) > 1) {
	require 'db_fn.php';
	$model = new Opi_poll();
	$conn = $model->connection();
    	$ts = date("Y-m-d H:i:s");

    	$option = $_POST['vote'][0];

    	$sql_stmt = "INSERT INTO author_poll (`choice`,`ts`) VALUES ($option,'$ts')";
	$model->execute($sql_stmt);
	$model->close();
	echo "voted successfully!!";
}
?>
