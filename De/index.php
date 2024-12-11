<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Soheil Saleh</title>
    <link rel="icon" href="../images/icon.png">
</head>
<body class="main">
  <div class="loader"><img src="../images/loader.gif"></div>
  <div class="content">
      <nav class="navbar navbar-expand-lg bg-body-tertiary" id="nav">
            <div class="collapse navbar-collapse">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Menü</a>
                  <ul class="dropdown-menu">
                  <li class="nav-item">
                  <a class="nav-link" href="#home_section">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#abilities_section">Fähigkeiten</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#resume_section">Lebenslauf</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact_section">Kontakt</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Germanymap.html" target="_blank">De Karte</a>
                </li>
                  </ul>
              </ul>
            </div>
        </nav>


      <div class="about_div"> 
          <section id="home_section">
              <div class="language">
                <a href="../"><button class="languages">EN</button></a>
                <a href="../De/"><button class="languages">DE</button></a>
                <a href="../Fa/"><button class="languages">FA</button></a>
              </div>
              <div class="greeting">
                <p id="greet"><?php
                    date_default_timezone_set('Asia/Tehran');
                    echo "Hallo liebe Besucher heute ist ". Date('d F Y  H:i');
                    echo " in Tehran/Iran ";
                    date_default_timezone_set('Europe/Berlin');
                    echo "und ". Date('H:i');
                    echo " in Berlin/Germany";
                ?></p>
              </div>
              <h1 class="head">Home</h1><br>
              <img class="soheil" src="../images/Soheil Saleh_Bewerbungsfoto 2024.jpg" alt="soheilsimage">
              <p class="about">
                Hallo zusammen.  
                Ich bin Soheil, der Administrator dieser Website,<br>und ich arbeite an einem Projekt mit JS, HTML und CSS.<br>  
                Der Name dieses Projekts ist Sodeal und ich werde es bald auf dieser Website veröffentlichen.<br>
                SoDeal bedeutet gute Angebote (zumindest in meiner Vorstellung 😀).<br>
                Auf meiner Website gibt es eine Karte von Deutschland, die mit HTML erstellt wurde.<br>
                Ihr könnt auf die Namen der Städte klicken und werdet auf eine Wikipedia-Seite über diese Stadt weitergeleitet.<br>
                Vielen Dank für eure Aufmerksamkeit.<br>
              </p>
              <hr>
          </section>
      </div>


      <div>
        <section id="abilities_section">
        <h1 class="head">Fähigkeiten</h1><br>
        <div class="abilitiesDiv">
          <a target="_blank" href="../images/Soheil Saleh_HTML & CSS.pdf"><img src="../images/html.png" alt="html5"></a>
          <a target="_blank" href="../images/Soheil Saleh_HTML & CSS.pdf"><img src="../images/css.png" alt="css3"></a>
          <a onclick="alert('Self Study')"><img src="../images/javascript.png" alt="javascript"></a>
          <a onclick="alert('Self Study')"><img src="../images/php.png" alt="php"></a>
          <a onclick="alert('Self Study')"><img src="../images/sql.png" alt="sql"></a>
          <a target="_blank" href="../images/Soheil Saleh_Python.pdf"><img src="../images/python.png" alt="python"></a>
          <a onclick="alert('Self Study')"><img src="../images/vscode.png" alt="vscode"></a>
          <a onclick="alert('Self Study')"><img src="../images/mariaDB.png" alt="mariaDB"></a>
          <a onclick="alert('Self Study')"><img src="../images/mysql.png" alt="mysql"></a>
          <a target="_blank" href="../images/djangoCertificate.webp"><img src="../images/django.png" alt="django"></a>
          <a onclick="alert('Self Study')"><img src="../images/word.png" alt="word"></a>
          <a onclick="alert('Self Study')"><img src="../images/powerpoint.png" alt="powerpoint"></a>
        </div>
        </section>
        <hr>
      </div>

      <div>
          <section id="resume_section">
              <h1 class="head">Lebenslauf</h1><br>
              <div class="additional">
                <a href="images/Soheil Saleh_Lebenslauf 2025.docx"><p id="downText">Wenn Sie meinen Lebenslauf als Datei herunterladen möchten, klicken Sie bitte hier!</p></a>
                <p>Wenn Sie meinen Lebenslauf hier online sehen möchten, bitte klicken Sie auf den Button</p>
                <button class="btn btn-danger" type="submit" onclick="showResume()">anzeigen/ausblenden</button>
              </div>
              <div class="resumeDiv">

                <h2 class="resumeHead">Persönliche Daten</h2><br>
                <p id="data">
                  Vor- und Nachname: Soheil Saleh<br>
                  Adresse : Marvdasht, Fars, Iran<br>
                  Telefonnummer : +989114302431<br>
                  E-Mail: soheilsaleh0@gmail.com<br>
                  Geburtsdatum: 01.09.2002<br>         
                </p>

                <br>
                <br>

                <h2 class="resumeHead">Fähigkeiten</h2><br>
                <p id="data">
                  Web-Entwicklung: HTML5, CSS3, SQL,MySQL & MariaDB(Autodidakt)<br>
                  Back-End Framework: Django (Anfänger) für Webanwendungen entwickeln<br>
                  Programmiersprachen: Javascript,PHP,Python (Fortgeschrittener & Autodidakt)<br>
                  Computerfähigkeiten:<br>
                  •	Microsoft Office (gute Kenntnisse in Word, Powerpoint)<br>
                  •	Vertrautheit mit Netzwerk und gängigen Betriebssystemen wie Windows<br>
                  Führerschein: Klasse B (iranischer Führerschein)<br> 
                </p>

                <br>
                <br>

                <h2 class="resumeHead">Bildungsweg</h2><br>
                <p id="data">
                  Abschlusszeugnis der zweiten Runde der Mittleschule (iranisches Abitur)<br>
                  In Experimentalwissenschaften	September 2017 – Juni 2020<br>
                  •	Razi Gymnasium, Marvdasht, Fars
                </p>
              
                <br>
                <br>

                <h2 class="resumeHead">Sprachen</h2><br>
                <p id="data">
                  Persisch: C2 (Muttersprache)<br>
                  Deutsch: B2 (Ösd-Zertifikat)	Dezember 2022 - April 2024<br>
                  Englisch: B2 (Summit 2)	August 2017<br>  
                </p>
              
                <br>
                <br>

                <h2 class="resumeHead">Zertifikate</h2><br>
                <p id="data">
                  CompTIA A+ 1000 – Part 1	October 2023<br>
                  Bei Alison.com Dauer: 1.30 Stunden<br>
                  •	Festplatten und Speichertypen verstehen<br>
                  •	Netzteile und Spannung identifizieren<br>
                  •	Arten von Eingabe- und Ausgabegeräten<br>
                  <br>
                  CompTIA Network+	Mai 2024<br>
                  Bei Cando.ac Dauer: 30 Stunden<br>
                  •	Grundlagen des Netzwerks, Netzwerkinfrastruktur, Netzwerksicherheit<br>
                  •	Netzwerkfunktionen, Drahtlose Netzwerke usw.<br>
                  <br>
                  Fortgeschrittenes Diplom in Python-Programmierung	August 2024<br>
                  Bei Alison.com  Dauer: 21 Stunden<br>
                  •	Syntax und Struktur von Python<br>
                  •	Variables, Datatypes, Operators, Loops, Conditions, Funktions , Lambda usw.<br>
                  •	Error Handling, Inheritance, OOP usw.<br>
                  <br>
                  Django Backend-Framework	April 2024<br>
                  Bei Tosinso.com Dauer: 40 Stunden<br>
                  •	URL-Routing, Verarbeitung und Validierung der Formulare<br>
                  •	MVC (Model-View-Template)<br>
                  <br>
                  Html5 und Css3	August 2024<br>
                  Bei Alison.com Dauer: 10 Stunden<br>
                  •	HTML Tags und Elemente, Formulare und Eingabeelemente, Links und Navigation usw. <br>
                  •	CSS Selektoren und –Eigenschaften, Responsive Web-Design usw.<br>
                </p>
                            
                <br>
                <br>

                <h2 class="resumeHead">Interessen</h2><br>
                <p id="data">
                  •	Trends in der KI-Technologie und Programmieren<br>
                  •	Reisen und Vertiefung der Kenntnisse<br>
                  •	Basketball spielen<br>
                  •	Neue Sprachen lernen<br>
                </p>
                            
                <br>
                <br>

                <h2 class="resumeHead">Persönlichkeitsmerkmale</h2><br>
                <p id="data">
                  •	Teamfähig, pünktlich, analytisch, kommunikationsfähig, kreativ, engagiert und flexibel<br>
                  •	Zuverlässig und verantwortungsbewusst bei der Aufgabenerfüllung<br>         
                </p>

              </div>
          </section>
      </div>

      <hr>
      <div>
          <section id="contact_section">
              <h1 class="head">Kontakt</h1><br>
              <div class="contact">
                <a target="_blank" href="https://instagram.com/soheil._.saleh"><img id="icon" src="../images/instagram.png" alt="instagram"></a>
                <a target="_blank" href="https://telegram.me/soheilsaleh0"><img id="icon" src="../images/telegram.png" alt="instagram"></a>
                <a target="_blank" href="https://wa.me/989114302431"><img id="icon" src="../images/whatsapp.png" alt="instagram"></a>
                <a target="_blank" href="mailto:soheilsaleh0@gmail.com"><img id="icon" src="../images/github.png" alt="github"></a>
                <a target="_blank" href="mailto:soheilsaleh0@gmail.com"><img id="icon" src="../images/email.png" alt="email"></a>
              </div>
          </section>
      </div>
      <hr>
      <footer>
        <div class="copyright"><p id="data">Copyright © 2024<?php
                if (Date('Y') != '2024'){
                    echo " - ".Date('Y');
                }
                ?> Soheil Saleh</p>
        </div>
      </footer>
    </div>

    <script src="../javascript/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>