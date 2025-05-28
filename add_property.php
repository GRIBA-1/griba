<?php


$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $price = trim($_POST['price'] ?? '');

    if (empty($title)) {
        $errors[] = 'Το πεδίο "Τίτλος" είναι υποχρεωτικό.';
    }
    if (empty($description)) {
        $errors[] = 'Το πεδίο "Περιγραφή" είναι υποχρεωτικό.';
    }
    if (empty($price) || !is_numeric($price)) {
        $errors[] = 'Το πεδίο "Τιμή" πρέπει να είναι αριθμός.';
    }

    if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        $errors[] = 'Η εικόνα είναι υποχρεωτική και πρέπει να ανέβει σωστά.';
    } else {
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $fileType = mime_content_type($_FILES['image']['tmp_name']);

        if (!in_array($fileType, $allowedTypes)) {
            $errors[] = 'Επιτρέπονται μόνο αρχεία τύπου JPG, PNG ή GIF.';
        }
    }

    if (empty($errors)) {
        $uploadDir = __DIR__ . '/uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $fileExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $newFileName = uniqid('prop_', true) . '.' . $fileExtension;
        $destination = $uploadDir . $newFileName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
            $stmt = $pdo->prepare("INSERT INTO properties (title, description, price, image) VALUES (?, ?, ?, ?)");
            if ($stmt->execute([$title, $description, $price, 'uploads/' . $newFileName])) {
                $success = true;
            } else {
                $errors[] = 'Σφάλμα κατά την αποθήκευση στη βάση.';
                unlink($destination);
            }
        } else {
            $errors[] = 'Αποτυχία αποθήκευσης της εικόνας.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="el">
<head>
  <meta charset="UTF-8" />
  <title>Προσθήκη Ακινήτου</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #f8f8f8, #e0e0e0);
      color: #222;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: rgba(0,0,0,0.05);
      padding: 10px 20px;
      width: 97.9%;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      margin-bottom: 40px;
     
    }

    nav img {
      height: 80px;
      margin-right: 15px;
    }

    nav div {
      display: flex;
      align-items: center;
    }

    nav a {
      margin: 0 10px;
      text-decoration: none;
      color: #000;
      font-weight: bold;
     
    }

    nav a:hover {
      text-decoration: underline;
      color: #4a90e2;;
    }

    .container {
      max-width: 900px;
      width: 100%;
      padding: 0 20px 40px;
      flex-grow: 1;
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #111;
    }

    form {
      padding: 20px;
      border-radius: 10px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="number"],
    textarea,
    input[type="file"] {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 1em;
    }

    textarea {
      resize: vertical;
    }

    button {
      background-color: #ffeb3b;
      border: none;
      padding: 10px 20px;
      font-weight: bold;
      cursor: pointer;
      border-radius: 5px;
      margin-top: 15px;
      transition: background-color 0.3s ease;
      color: #333;
    }

    button:hover {
      background-color: #f1c40f;
    }

    .errors {
      background: #e74c3c;
      color: #fff;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 15px;
    }

    .success {
      background: #27ae60;
      color: #fff;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 15px;
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

<nav>
  <div style="display: flex; align-items: center;">
    <img src="pictures/neologotipo.png" alt="Λογότυπο">
    <span style="font-weight: bold; font-size: 1.4em;">Μεσιτικό & Κατασκευαστικό</span>
  </div>
  <div>
    <a href="index.php">Αρχική</a>
    <a href="properties.php">Ακίνητα</a>
    <a href="add_property.php">Προσθήκη Ακινήτου</a>
    <a href="contact.php">Επικοινωνία</a>
  </div>
</nav>

<div class="container">
  <a href="index.php" class="back-link">← Επιστροφή στην Αρχική</a>
  <h1>Προσθήκη Ακινήτου</h1>

  <?php if (!empty($errors)): ?>
    <div class="errors">
      <ul>
      <?php foreach ($errors as $error): ?>
        <li><?=htmlspecialchars($error)?></li>
      <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <?php if ($success): ?>
    <div class="success">Το ακίνητο προστέθηκε επιτυχώς!</div>
  <?php endif; ?>

  <form method="post" enctype="multipart/form-data" action="">
    <label for="title">Τίτλος</label>
    <input type="text" id="title" name="title" required>

    <label for="description">Περιγραφή</label>
    <textarea id="description" name="description" rows="4" required></textarea>

    <label for="price">Τιμή</label>
    <input type="number" id="price" name="price" required>

    <label for="image">Εικόνα</label>
    <input type="file" id="image" name="image" accept="image/*" required>

    <button type="submit">Αποθήκευση</button>
  </form>
</div>

</body>
</html>
