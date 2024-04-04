<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Sklep</title>
</head>
<body>
    <header id="flex-container">
        <img src="logo.webp" id="logo">
        <form action="search.php" method="get">
          <input type="text" name="search" placeholder="wyszukaj produkt">
          <input type="submit" value="szukaj">
          <a href="cart.php" id="cart">Koszyk</a>
        </form>
  </header>
  <main class="flex-container-wrap">
    <div class="card text-center">
        <h3>nazwa oferty</h3>
        <p>cena: 100zł</p>
    </div>
  </main>
</body>
</html>