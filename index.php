<html>
<head>
  <title>Nintendo</title>
  <link rel="stylesheet" type="text/css" href="./resources/css/reset.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./resources/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./resources/js/nintendo.js"></script>
</head>
  
  <?php
  //establish connection to database
  //files for db stored in  /var/lib/mysql-files/  
  $db = mysqli_connect('localhost','root','password','gameRankings');
  ?>

  <body>
    <div class="container-fluid">
      <div class="row header">
          <h1> Nintendo </h1>
      </div>
    </div>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="./pages/about.html">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>

    <div class="consoles">
 

   <div class="col-md-5 col-md-offset-1 system nes hidden" align="center">
        <h3>Nintendo Entertainment System</h3>      
        <?php
        $query = "SELECT * FROM nes";
        $result = mysqli_query($db, $query);

        while ($row = mysqli_fetch_array($result)) {
        echo '<a href="#nesTop10-' . $row['ranking'] . '"class="btn btn-info gameTitle " data-toggle="collapse">' . $row['ranking'] . ':' . $row['name'] . '</a> <br>' .
          '<div id="nesTop10-' . $row['ranking'] . '" class="collapse gameInfo">' .
            '<img src="./resources/images/It\'s_dangerous_to_go_alone!_Take_this.png" class="gameIcon"> <br> ' . 
            ' Release Date: ' . $row['releaseYear'] . ' <br> ' .
            $row['review'] . '<br> </div>';
        }
        ?>
      </div>

      <div class="col-md-5 system superNes col-md-offset-3" align="center">
        <h3>Super Nintendo</h3>      
        <?php
        $query = "SELECT * FROM superNes";
        $result = mysqli_query($db, $query);

        while ($row = mysqli_fetch_array($result)) {
        echo '<a href="#superNesTop10-' . $row['ranking'] . '"class="btn btn-info gameTitle " data-toggle="collapse">' . $row['ranking'] . ':' . $row['name'] . '</a> <br>' .
          '<div id="superNesTop10-' . $row['ranking'] . '" class="collapse gameInfo">' .
            '<img src="' . $row['pic'] . '" class="gameIcon"> <br> ' . 
            ' Release Date: ' . $row['releaseYear'] . ' <br> ' .
            $row['review'] . '<br> </div>';

        }
        ?>
      
    </div>
      <div class="col-md-5 col-md-offset-1 system nintendo64 hidden" align="center">
        <h3>Nintendo 64</h3>      
        <?php
        $query = "SELECT * FROM nintendo64";
        $result = mysqli_query($db, $query);

        while ($row = mysqli_fetch_array($result)) {
        echo '<a href="#nintendo64Top10-' . $row['ranking'] . '"class="btn btn-info gameTitle " data-toggle="collapse">' . $row['ranking'] . ':' . $row['name'] . '</a> <br>' .
          '<div id="nintendo64Top10-' . $row['ranking'] . '" class="collapse gameInfo">' .
            '<img src="./resources/images/It\'s_dangerous_to_go_alone!_Take_this.png" class="gameIcon"> <br> ' . 
            ' Release Date: ' . $row['releaseYear'] . ' <br> ' .
            $row['review'] . '<br> </div>';

        }
        ?>
      </div>

      <div class="col-md-5 system gamecube hidden" align="center">
        <h3>Gamecube</h3>      
        <?php
        $query = "SELECT * FROM gamecube";
        $result = mysqli_query($db, $query);

        while ($row = mysqli_fetch_array($result)) {
        echo '<a href="#gamecubeTop10-' . $row['ranking'] . '"class="btn btn-info gameTitle " data-toggle="collapse">' . $row['ranking'] . ':' . $row['name'] . '</a> <br>' .
          '<div id="gamecubeTop10-' . $row['ranking'] . '" class="collapse gameInfo">' .
            '<img src="./resources/images/It\'s_dangerous_to_go_alone!_Take_this.png" class="gameIcon"> <br> ' . 
            ' Release Date: ' . $row['releaseYear'] . ' <br> ' .
            $row['review'] . '<br> </div>';

        }
        ?>
      </div>

      <div class="col-md-5 col-md-offset-1 system wii hidden" align="center">
        <h3>Wiio</h3>      
        <?php
        $query = "SELECT * FROM wii";
        $result = mysqli_query($db, $query);

        while ($row = mysqli_fetch_array($result)) {
        echo '<a href="#wiiTop10-' . $row['ranking'] . '"class="btn btn-info gameTitle " data-toggle="collapse">' . $row['ranking'] . ':' . $row['name'] . '</a> <br>' .
          '<div id="wiiTop10-' . $row['ranking'] . '" class="collapse gameInfo">' .
            '<img src="./resources/images/It\'s_dangerous_to_go_alone!_Take_this.png" class="gameIcon"> <br> ' . 
            ' Release Date: ' . $row['releaseYear'] . ' <br> ' .
            $row['review'] . '<br> </div>';

        }
        ?>
      </div>

      <div class="col-md-5 system wiiU hidden" align="center">
        <h3>Wii U</h3>      
        <?php
        $query = "SELECT * FROM wiiu";
        $result = mysqli_query($db, $query);

        while ($row = mysqli_fetch_array($result)) {
        echo '<a href="#wiiuTop10-' . $row['ranking'] . '"class="btn btn-info gameTitle " data-toggle="collapse">' . $row['ranking'] . ':' . $row['name'] . '</a> <br>' .
          '<div id="wiiuTop10-' . $row['ranking'] . '" class="collapse gameInfo">' .
            '<img src="./resources/images/It\'s_dangerous_to_go_alone!_Take_this.png" class="gameIcon"> <br> ' . 
            ' Release Date: ' . $row['releaseYear'] . ' <br> ' .
            $row['review'] . '<br> </div>';

        }
        ?>
      </div>

      <div class="col-md-5 col-md-offset-1 system switch hidden" align="center">
        <h3>Switch</h3>      
        <?php
        $query = "SELECT * FROM switch";
        $result = mysqli_query($db, $query);

        while ($row = mysqli_fetch_array($result)) {
        echo '<a href="#switchTop10-' . $row['ranking'] . '"class="btn btn-info gameTitle " data-toggle="collapse">' . $row['ranking'] . ':' . $row['name'] . '</a> <br>' .
          '<div id="switchTop10-' . $row['ranking'] . '" class="collapse gameInfo">' .
            '<img src="./resources/images/It\'s_dangerous_to_go_alone!_Take_this.png" class="gameIcon"> <br> ' . 
            ' Release Date: ' . $row['releaseYear'] . ' <br> ' .
            $row['review'] . '<br> </div>';

        }
        ?>
      </div>      
   
    <?php
      mysqli_close($db);
    ?>

    </div>
  </body>
</html>
