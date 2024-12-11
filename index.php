<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./images/icon.png">
    <title>Soheil Saleh</title>
</head>
<body class="main">
  <div class="loader"><img src="images/loader.gif"></div>
  <div class="content">
      <nav class="navbar navbar-expand-lg bg-body-tertiary" id="nav">
            <div class="collapse navbar-collapse">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Menu</a>
                  <ul class="dropdown-menu">
                  <li class="nav-item">
                  <a class="nav-link" href="#home_section">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#abilities_section">Abilities</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#resume_section">Resume</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact_section">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Germanymap.html" target="_blank">Germany Map</a>
                </li>
                  </ul>
              </ul>
            </div>
        </nav>


      <div class="about_div"> 
          <section id="home_section">
              <div class="language">
                <a href="."><button class="languages">EN</button></a>
                <a href="./De/"><button class="languages">DE</button></a>
                <a href="./Fa/"><button class="languages">FA</button></a>
              </div>
              <div class="greeting">
                <p id="greet"><?php
                    date_default_timezone_set('Asia/Tehran');
                    echo "Hi dear visiter today is ". Date('d F Y  H:i');
                    echo " in Tehran/Iran ";
                    date_default_timezone_set('Europe/Berlin');
                    echo "and ". Date('H:i');
                    echo " in Berlin/Germany";
                ?></p>
              </div>
              <h1 class="head">Home</h1><br>
              <img class="soheil" src="images/Soheil Saleh_Bewerbungsfoto 2024.jpg" alt="soheilsimage">
              <p class="about">
                Hey everybody.<br>
                I am Soheil, admin of this Website and i am making a project using JS, Html and Css.<br>
                The name of this project is Sodeal and i will soon deploy it on this website.<br>
                SoDeal means good Deal.(at least in my mind 😀).<br>
                There is a Map of Germany made by Html in my website you can click on<br>
                the name of cities and you will be redirected to a wikipedia page about that city.<br>
                Thank you for your attention.
              </p>
              <hr>
          </section>
      </div>


      <div>
        <section id="abilities_section">
        <h1 class="head">Abilities</h1><br>
        <div class="abilitiesDiv">
          <a target="_blank" href="images/Soheil Saleh_HTML & CSS.pdf"><img src="images/html.png" alt="html5"></a>
          <a target="_blank" href="images/Soheil Saleh_HTML & CSS.pdf"><img src="images/css.png" alt="css3"></a>
          <a onclick="alert('Self Study')"><img src="images/javascript.png" alt="javascript"></a>
          <a onclick="alert('Self Study')"><img src="images/php.png" alt="php"></a>
          <a onclick="alert('Self Study')"><img src="images/sql.png" alt="sql"></a>
          <a target="_blank" href="images/Soheil Saleh_Python.pdf"><img src="images/python.png" alt="python"></a>
          <a onclick="alert('Self Study')"><img src="images/vscode.png" alt="vscode"></a>
          <a onclick="alert('Self Study')"><img src="images/mariaDB.png" alt="mariaDB"></a>
          <a onclick="alert('Self Study')"><img src="images/mysql.png" alt="mysql"></a>
          <a target="_blank" href="images/djangoCertificate.webp"><img src="images/django.png" alt="django"></a>
          <a onclick="alert('Self Study')"><img src="images/word.png" alt="word"></a>
          <a onclick="alert('Self Study')"><img src="images/powerpoint.png" alt="powerpoint"></a>
        </div>
        </section>
        <hr>
      </div>

      <div>
          <section id="resume_section">
              <h1 class="head">Resume</h1><br>
              <div class="additional">
                <a href="images/Soheil Saleh_Lebenslauf 2025.docx"><p id="downText">If you want to download my resume as a File please Click Here!</p></a>
                <p>If you want to see my resume hier online please Click the Button</p>
                <button class="btn btn-danger" type="submit" onclick="showResume()">Show/Hide</button>
              </div>
              <div class="resumeDiv">

                <h2 class="resumeHead">Personal Data</h2><br>
                <p id="data">
                  Name: Soheil Saleh<br>
                  Address : Marvdasht, Fars, Iran<br>
                  Number: +989114302431<br>
                  E-Mail: soheilsaleh0@gmail.com<br>
                  Birthday: 01.09.2002<br>         
                </p>

                <br>
                <br>

                <h2 class="resumeHead">Abilities</h2><br>
                <p id="data">
                  Web Development: HTML5, CSS3, SQL,MySQL & MariaDB(Self Study)<br>
                  Back-End Framework: Django (Beginner)<br>
                  Programming languages: Javascript,PHP,Python (Advanced & Self Study)<br>
                  Computer Abilities:<br>
                  •	Microsoft Office (Word, Powerpoint)<br>
                  •	Familiarity with network and common operating systems like Windows<br>
                  Driver's license: Class B (Iranian driver's license)<br> 
                </p>

                <br>
                <br>

                <h2 class="resumeHead">Education</h2><br>
                <p id="data">
                  Certificate of Completion of the Second Round of Middle School (Iranian High School Diploma)  <br>
                  In Experimental Sciences	September 2017 – Juni 2020<br>
                  •	Razi Highschool, Marvdasht, Fars
                </p>
              
                <br>
                <br>

                <h2 class="resumeHead">Languages</h2><br>
                <p id="data">
                  Persian: C2 (Mother Tounge)<br>
                  German: B2 (Ösd Certificate)	Dezember 2022 - April 2024<br>
                  English: B2 (Summit 2)	August 2017<br>  
                </p>
              
                <br>
                <br>

                <h2 class="resumeHead">Certificates</h2><br>
                <p id="data">
                  CompTIA A+ 1000 – Part 1	October 2023<br>
                  At Alison.com Duration: 1.30 Hours<br>
                  •	Understanding hard drives and storage types  <br>
                  •	Identifying power supplies and voltage<br>
                  •	Types of input and output devices<br>
                  <br>
                  CompTIA Network+	Mai 2024<br>
                  At Cando.ac Duration: 30 Hours<br>
                  •	Basics of the network, network infrastructure, network security<br>
                  •	Network functions, wireless networks, etc.<br>
                  <br>
                  Advanced Diploma in Python Programming	August 2024<br>
                  At Alison.com  Duration: 21 Hours<br>
                  •	Syntax and Structure of Python<br>
                  •	Variables, Datatypes, Operators, Loops, Conditions, Functions , Lambda usw.<br>
                  •	Error Handling, Inheritance, OOP usw.<br>
                  <br>
                  Django Backend-Framework	April 2024<br>
                  At Tosinso.com Duration: 40 Hours<br>
                  •	URL-Routing, Processing and validation of the forms<br>
                  •	MVC (Model-View-Template)<br>
                  <br>
                  Html5 und Css3	August 2024<br>
                  At Alison.com Duration: 10 Hours<br>
                  •	HTML tags and elements, forms and input elements, links and navigation, etc.<br>
                  •	CSS selectors and properties, responsive web design, etc.<br>
                </p>
                            
                <br>
                <br>

                <h2 class="resumeHead">Interests</h2><br>
                <p id="data">
                  •	Trends in AI technology and programming<br>
                  •	Traveling and deepening knowledge<br>
                  •	Playing basketball<br>
                  •	Learning new languages<br>
                </p>
                            
                <br>
                <br>

                <h2 class="resumeHead">Personality Traits</h2><br>
                <p id="data">
                  •	Team player, punctual, analytical, communicative, creative, committed, and flexible<br>
                  •	Reliable and responsible in task execution<br>         
                </p>

              </div>
          </section>
      </div>

      <hr>
      <div>
          <section id="contact_section">
              <h1 class="head">Contact</h1><br>
              <div class="contact">
                <a target="_blank" href="https://instagram.com/soheil._.saleh"><img id="icon" src="images/instagram.png" alt="instagram"></a>
                <a target="_blank" href="https://telegram.me/soheilsaleh0"><img id="icon" src="images/telegram.png" alt="instagram"></a>
                <a target="_blank" href="https://wa.me/989114302431"><img id="icon" src="images/whatsapp.png" alt="instagram"></a>
                <a target="_blank" href="https://github.com/soheilsaleh"><img id="icon" src="images/github.png" alt="github"></a>
                <a target="_blank" href="mailto:soheilsaleh0@gmail.com"><img id="icon" src="images/email.png" alt="email"></a>
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

    <script src="javascript/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>