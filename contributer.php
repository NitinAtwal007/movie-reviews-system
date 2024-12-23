<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contributors Page</title>
    <link rel="stylesheet" href="contri.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php
    include "navbar.php"
?>
    
    <header>
        <h1>Our Team</h1>
        <p>Our aim is to fasten  collaboration and innovation through shared knowledge.</p>
    </header>
    
    <main>
        <section class="aim">
          <marquee width="80%" direction="right" height="100px">
               <h5>Our aim is to bring together diverse talents and perspectives to create impactful projects that benefit the community. We believe in the power of collaboration and shared knowledge.
               </h5>   </marquee>
        </section>
        
        <section class="contributors">
            <div class="contributor">
                <img src="login.jpg" alt="Contributor 1">
                <h2>Vikas Thakur</h2>
                <p>Working on various datasets under ML. </p>
            </div>
            <div class="contributor">
                <img src="bg.jpg" alt="Contributor 2">
                <h2>Nitn Atwal</h2>
                <p>Capable in CN and Frontend develpment.</p>
            </div>
           <div class="contributor">
                <img src="mmm.png" alt="Contributor 3">
                <h2>Mukul Rana</h2> 
                <p> high skills in web activities .</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Atwal CORP. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>