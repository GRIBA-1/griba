<!DOCTYPE html>
<html lang="el">
<head>
  <meta charset="UTF-8" />
  <title>Επικοινωνία</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
      align-items: center;
      justify-content: space-between;
      padding: 10px 20px;
      background-color: rgba(0, 0, 0, 0.05);
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      margin-bottom: 25px;
      width: 97.9%;
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
      color: #444;
    }
    .container {
      max-width: 900px;
      width: 100%;
      padding: 0 20px 40px;
      flex-grow: 1;
    }
    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #111;
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
      color: #333;
      text-decoration: underline;
    }
    .contact-info {
      margin-top: 30px;
      padding: 20px;
      background: rgba(0, 0, 0, 0.05);
      border-radius: 10px;
    }
    .contact-info h2 {
      margin-top: 0;
      color: #222;
    }
    .contact-info a {
      color: #000;
      text-decoration: none;
    }
    .contact-info a:hover {
      color: #555;
      transform: scale(1.1);
      transition: all 0.3s ease;
    }
    iframe {
      width: 100%;
      height: 300px;
      border: none;
      margin-top: 20px;
      border-radius: 10px;
    }
    .contact-info i {
      color: #222;
    }
    .contact-info h3 {
      margin-top: 30px;
      color: #222;
    }
    .contact-info a i:hover {
      color: #888;
    }
  </style>
</head>
<body>

<nav>
  <div style="display: flex; align-items: center;">
    <img src="pictures/neologotipo.png" alt="Λογότυπο">
    <span style="font-weight: bold; font-size: 1.4em; color: #000;">Μεσιτικό & κατασκευαστικό</span>
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
  <h1>Επικοινωνία</h1>

  <div class="contact-info">
    <h2>Στοιχεία Επικοινωνίας</h2>
    <p><strong>Τηλέφωνο:</strong> <a href="tel:+302110084731">211 0084731</a></p>
    <p><strong>Email:</strong> <a href="mailto:info@gribasr.com">info@gribasr.com</a></p>
    <p><strong>Διεύθυνση:</strong> Αγίου Μελετίου 85-87, Αθήνα 11251</p>
    <p><strong>Ώρες Λειτουργίας:</strong><br>Δευτέρα – Παρασκευή:
	• Πρωί: 9:00 – 14:00
	& 17:00 – 20:30 ( Τρίτη & Πέμπτη)
<br>Σάββατο:
	• 10:00 – 14:00 (ραντεβού)
        <br>Κυριακή:
	• Κλειστά
</p>

    <div style="margin-top: 20px;">
      <h3>Ακολουθήστε μας</h3>
      <a href="https://www.instagram.com/gribasr.constructions?igsh=ZGt6aXgzdmV0a2Q5&utm_source=qr " target="_blank" style="margin: 0 10px; font-size: 1.8em;">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.tiktok.com/@gribasr.realestate?_t=ZN-8wXkk9crxP4&_r=1" target="_blank" style="margin: 0 10px; font-size: 1.8em;">
        <i class="fab fa-tiktok"></i>
      </a>
      <a href="https://www.facebook.com/profile.php?id=61576592814489" target="_blank" style="margin: 0 10px; font-size: 1.8em;">
        <i class="fab fa-facebook"></i>
      </a>
    </div>

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3121.1852622600017!2d23.726595415512217!3d38.00618547971671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1a2f39263e247%3A0x8f12e6b9c95d108f!2sAgiou%20Meletiou%2085-87%2C%20Athina%20112%2051!5e0!3m2!1sel!2sgr!4v1716295080000!5m2!1sel!2sgr"
      width="100%" 
      height="300" 
      style="border:0; border-radius: 10px;" 
      allowfullscreen="" 
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>

</body>
</html>