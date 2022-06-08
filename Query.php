<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--CSS Styles -->
    <link rel="stylesheet" href="style.css"/>

    <title>QuerySearch</title>
  </head>

    <body>

    </body>
</html>

<body>
   <div class="SearchBox">
      <form action="Query.php" method="post">
         <input class="search" type="text" name="terms" placeholder="Query Terms">
         <button class="searchButton" type="submit" name="submit">
            <i class="material-icons">search</i>
         </button> 
      </form>
   </div>
</body>
</html>

<?php
if (isset($_POST['submit']))
{

  $QUERY = escapeshellarg($_POST['terms']);
  $command = 'python3  accumulator.py' . ' -q ' . $QUERY; 

  $escaped_command = escapeshellcmd($command);

  system($escaped_command);
}
?>