<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/reset.css" />
    <link rel="stylesheet" href="styles/index.css" />
    <script src="javascript/read-json.js"></script>
    <title>Týmy</title>
</head>
<body>
<div class="header-wrap">
      <header>
        <h1>Ústecké fotbalové utkání amatérů</h1>
      </header>
    </div>
    <nav class="navbar">
      <ul class="nav-links">
        <li><a href="http://uk-fotbal.wz.cz">Domů</a></li>
        <li><a href="teams">Týmy</a></li>
        <li><a href="prihlaska">Přihláška</a></li>
      </ul>
    </nav>
<?php
    include 'config/config.php';
    include 'includes/create-json.php';
    ?>



<div class="container">
  <h2>Přehled přihlášených týmů</h2>
  <table id="teams">
    <tr>
      <th>Název týmu</th>
      <th>Město</th>
    </tr>
  </table>
</div>

    
</body>
</html>