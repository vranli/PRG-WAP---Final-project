<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/reset.css" />
    <link rel="stylesheet" href="styles/index.css" />
    <title>Přihlášky</title>
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
    
    <div class="container">

    <h2>Přihláška na turnaj</h2>

    <!-- Formulář pro vkládání dat do databáze -->
        <form action='includes/data-input.php' method='POST'>
            <label for="name">Název týmu</label><br /><input type='text' name='name' id='name' required><br />
            <label for="city">Město</label><br /> <input type='text' name='city' id='city' required><br />                  
            <input type='submit' value='Odeslat' id='submit' name='submit'>
        </form>
    </div>

</body>
</html>