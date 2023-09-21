<html lang="en">
 <head>
  <title>Márcio | Docker class</title>

  <meta charset="utf-8">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>

<?php
phpinfo();
?>

    <div class="container">
    <?php echo "<h1>Hi! I'm Márcio</h1>"; ?>
	<?php echo "<h3>This is Docker Compose Class!</h3>"; ?>

    <?php
    $conn = new PDO("mysql:host=localhost;port=3306;dbname=myDb", 'root', '1112marci-O');
    $query = 'SELECT * From Person';
    $result = $conn->query($query);
    echo '<table class="table table-striped">';
    echo '<thead></th><th>id</th><th>name</th></tr></thead>';
    while($value = $result->fetchAll(PDO::FETCH_ASSOC)){
        foreach($value as $element){
            echo '<tr>';
            echo '<td>'. $element['id'] .'</td>';
            echo '<td>'. $element['name'] .'</td>';
            echo '</tr>';
        }
    }
    echo '</table>';
    $conn=null;
    ?>
    </div>
</body>
</html>
