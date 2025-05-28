<?php
require_once 'db.php';

$stmt = $pdo->query("SELECT * FROM properties ORDER BY id DESC");
$properties = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="el">
<head>
  <meta charset="UTF-8" />
  <title>Ακίνητα</title>
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: url('pictures/backround.png') no-repeat center center fixed;
      background-size: cover;
      color: #222;
      position: relative;
    }

    .background-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.7);
      z-index: 1;
      pointer-events: none;
    }

    nav, .container, footer {
      position: relative;
      z-index: 2;
    }

    nav {
      background-color: rgba(255, 255, 255, 0.1);
      width: 100%;
      padding: 15px 0;
      text-align: center;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      margin-bottom: 40px;
    }

    nav a {
      margin: 0 10px;
      text-decoration: none;
      color: #000;
      font-weight: bold;
    }

    nav a:hover {
      text-decoration: underline;
      color: #555;
    }

    .container {
      max-width: 900px;
      width: 100%;
      padding: 0 20px 40px;
      flex-grow: 1;
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #111;
    }

    .property {
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      color: #222;
      display: flex;
      gap: 20px;
      align-items: center;
    }

    .property img {
      max-width: 200px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .property-info {
      flex: 1;
    }

    .property-info h2 {
      margin-top: 0;
      margin-bottom: 10px;
    }

    .property-info p {
      margin: 5px 0;
      font-size: 1.1em;
    }

    footer {
      text-align: center;
      padding: 10px 0;
      color: #666;
      background-color: rgba(255, 255, 255, 0.1);
      width: 100%;
      font-size: 0.9em;
    }

    a.back-link {
      display: inline-block;
      margin-bottom: 20px;
      color: #000;
      text-decoration: none;
      font-weight: bold;
      font-size: 1.1em;
    }

    a.back-link:hover {
      color: #555;
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="background-overlay"></div>

<nav>
  <a href="index.php">Αρχική</a>
  <a href="properties.php">Ακίνητα</a>
  <a href="add_property.php">Προσθήκη Ακινήτου</a>
  <a href="contact.php">Επικοινωνία</a>
</nav>

<div class="container">
  <a href="index.php" class="back-link">← Επιστροφή στην Αρχική</a>
  <h1>Λίστα Ακινήτων</h1>

  <?php if (empty($properties)): ?>
    <p>Δεν υπάρχουν διαθέσιμα ακίνητα αυτή τη στιγμή.</p>
  <?php else: ?>
    <?php foreach ($properties as $property): ?>
      <div class="property">
        <img src="<?=htmlspecialchars($property['image'])?>" alt="<?=htmlspecialchars($property['title'])?>" />
        <div class="property-info">
          <h2><?=htmlspecialchars($property['title'])?></h2>
          <p>Τιμή: <?=number_format($property['price'], 0, ',', '.')?>€</p>
          <?php if (!empty($property['rooms']) && !empty($property['size'])): ?>
            <p><?=intval($property['rooms'])?> δωμάτια, <?=intval($property['size'])?> τ.μ.</p>
          <?php endif; ?>
          <p><?=htmlspecialchars($property['description'])?></p>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>

<footer>
  &copy; 2025 Μεσιτικό Γραφείο | Όλα τα δικαιώματα διατηρούνται
</footer>

</body>
</html>
