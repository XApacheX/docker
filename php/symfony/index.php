     <!DOCTYPE html>  
     <head>  
      <title>Hello World!</title>
     </head>  

     <body>  
      <h1>aze Test Docker</h1>
      <small>php version: <?php echo phpversion(); ?></small>
      <?php
       $database ="mydb";  
       $user = "root";  
       $password = "secret";  
       $host = "mysql";  

       $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);  
       $query = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");  
       $tables = $query->fetchAll(PDO::FETCH_COLUMN);  

        if (empty($tables)) {
          echo "<p>There are no tables in database \"{$database}\".</p>";
        } else {
          echo "<h2>Tables from \"{$database}\":</h2>";
          echo "<ul>";
            foreach ($tables as $table) {
              echo "<li>{$table}</li>";
            }
          echo "</ul>";
        }
        ?>
     </body>
