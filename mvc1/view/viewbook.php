<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php

        echo "<h3 class='title'>Title:</h3>" . $book->title . '<br/>';
        echo "<h3 class='title'>Author:</h3>" . $book->author . '<br/>';
        echo "<h3 class='title'>Description:</h3>" . $book->description . '<br/>';

    ?>
</body>
</html>
