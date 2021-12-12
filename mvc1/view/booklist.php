<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table>
        <tbody>
          <tr><td><h3 class='title'>Title</h3></td><td> <h3 class='title'>Author</h3></td><td><h3 class='title'>Description</h3></td></tr>
        </tbody>
        <?php

            foreach ($books as $book)            {               
                 echo '<tr><td><a href="index.php?book=' . 
                     $book->title . '">' . $book->title . '</a></td><td>' .
                     $book->author . '</td><td>' . $book->description . '</td></tr>';
            }
        ?>
    </table>
</body>
</html>
