<!DOCTYPE html>
<html lang="el">
<head>
  <meta charset="UTF-8" />
  <title>GRIBA</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #f8f8f8, #e0e0e0);
      color: #222;
    }
    nav {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 20px;
      background-color: rgba(0, 0, 0, 0.05);
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
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
    .container {
      max-width: 900px;
      margin: 40px auto;
      padding: 0 20px;
    }
    h1, h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .featured-properties {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin: 30px 0;
    }
    .property-card {
      background: #fff;
      padding: 15px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      text-align: center;
    }
    .property-card img {
      width: 100%;
      height: auto;
      border-radius: 8px;
    }
    ul {
      list-style: none;
      padding: 0;
      text-align: center;
      margin-bottom: 30px;
    }
    ul li {
      margin: 10px 0;
      font-size: 1.1em;
    }
    .cta-box {
      text-align: center;
      background: #4CAF50;
      color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .cta-box a {
      color: yellow;
      text-decoration: underline;
    }
  </style>
</head>
<body>

<nav>
  <div>
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
  <h1>Βρείτε το σπίτι των ονείρων σας!</h1>
  <p style="text-align:center;">Ανακαλύψτε μοναδικά ακίνητα σε προσιτές τιμές, με την υποστήριξη ενός αξιόπιστου μεσιτικού γραφείου.</p>

  <h2>Προτεινόμενα Ακίνητα</h2>
  <div class="featured-properties">
    <div class="property-card">
      <img src="uploads/prop_example1.jpg" alt="Διαμέρισμα Κολωνάκι">
      <h3>Διαμέρισμα - Κολωνάκι</h3>
      <p>450.000€ - 120 τ.μ. - 3 Δωμάτια</p>
    </div>
    <div class="property-card">
      <img src="uploads/prop_example2.jpg" alt="Μονοκατοικία Γλυφάδα">
      <h3>Μονοκατοικία - Γλυφάδα</h3>
      <p>800.000€ - 200 τ.μ. - 5 Δωμάτια</p>
    </div>
    <div class="property-card">
      <img src="uploads/prop_example3.jpg" alt="Studio Εξάρχεια">
      <h3>Studio - Εξάρχεια</h3>
      <p>130.000€ - 45 τ.μ. - 1 Δωμάτιο</p>
    </div>
  </div>

  <h2>Γιατί να μας επιλέξετε</h2>
  <ul>
    <li>✨ Φρέσκια και μοντέρνα προσέγγιση στον χώρο των ακινήτων</li>
    <li>🚀 Προσωπική εξυπηρέτηση & άμεση ανταπόκριση</li>
    <li>📍️ Εξειδίκευση σε Αθήνα και προάστια</li>
  </ul>

  <div class="cta-box">
    <h2>Θέλετε βοήθεια; Καλέστε μας!</h2>
    <p><strong>📞  211 0084731</strong> ή <a href="contact.php">στείλτε μας μήνυμα</a>.</p>
  </div>
</div>

</body>
</html>