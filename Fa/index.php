<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../images/icon.png">
    <title>سهیل صالح</title>
</head>
<body class="main">
  <div class="loader"><img src="../images/loader.gif"></div>
  <div class="content">
      <nav class="navbar navbar-expand-lg bg-body-tertiary" id="nav">
            <div class="collapse navbar-collapse">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">منو</a>
                  <ul class="dropdown-menu">
                  <li class="nav-item">
                  <a class="nav-link" href="#home_section">خانه</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#abilities_section">توانایی ها</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#resume_section">رزومه</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact_section">ارتباط</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Germanymap.html" target="_blank">نقشه المان</a>
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
                    echo "Hi dear visiter today is ". Date('d F Y  H:i');
                    echo " in Tehran/Iran ";
                    date_default_timezone_set('Europe/Berlin');
                    echo "and ". Date('H:i');
                    echo " in Berlin/Germany";
                ?></p>
              </div>
              <h1 class="head">خانه</h1><br>
              <img class="soheil" src="../images/Soheil Saleh_Bewerbungsfoto 2024.jpg" alt="soheilsimage">
              <p class="about">
                سلام به همه.<br>
                من سهیل هستم، مدیر این وب‌سایت و در حال ساخت پروژه‌ای با استفاده از جاوا اسکریپت و اچ تی ام ال و سی اس اس هستم<br> 
                نام این پروژه سو دیل است و به زودی آن را در این وب‌سایت منتشر خواهم کرد<br>
                سو دیل به معنای معامله خوب است (حداقل در ذهن من 😀)<br>
                در وب‌سایت من یک نقشه از آلمان با اچ تی ام ال وجود دارد که می‌توانید بر روی نام شهرها کلیک کنید و به صفحه ویکی‌پدیا درباره آن شهر هدایت شوید<br>
                از توجه شما سپاسگزارم<br>
              </p>
              <hr>
          </section>
      </div>


      <div>
        <section id="abilities_section">
        <h1 class="head">توانایی ها</h1><br>
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
              <h1 class="head">رزومه</h1><br>
              <div class="additional">
                <a href="images/Soheil Saleh_Lebenslauf 2025.docx"><p id="downText">اگر می‌خواهید رزومه من را به‌عنوان یک فایل دانلود کنید، لطفاً اینجا کلیک کنید</p></a>
                <p>اگر می‌خواهید رزومه من را به‌صورت آنلاین مشاهده کنید، لطفاً روی دکمه کلیک کنید</p>
                <button class="btn btn-danger" type="submit" onclick="showResume()">نشان دادن/پنهان کردن</button>
              </div>
              <div class="resumeDiv">

                <h2 class="resumeHead">اطلاعات شخصی</h2><br>
                <p id="data">
                  نام : سهیل صالح<br>
                  آدرس : مرودشت , فارس , ایران<br>
                  شماره : 09114302431<br>
                  ایمیل: soheilsaleh0@gmail.com<br>
                  تاریخ تولد: 01.09.2002<br>         
                </p>

                <br>
                <br>

                <h2 class="resumeHead">توانایی ها</h2><br>
                <p id="data">
                  Web: HTML5, CSS3, SQL,MySQL & MariaDB(خود آموز)<br>
                  Back-End Framework: Django (تازه کار)<br>
                  Programmiersprachen: Javascript,PHP,Python (خودآموز)<br>
                  •	Microsoft Office (Word, Powerpoint)<br>
                  •	آشنایی با شبکه و ویندوز<br>
                </p>

                <br>
                <br>

                <h2 class="resumeHead">مسیر تحصیلی</h2><br>
                <p id="data">
                   دیپلم تجربی <br>
                  •	دبیرستان رازی , فارس , ایران
                </p>
              
                <br>
                <br>

                <h2 class="resumeHead">زبان ها</h2><br>
                <p id="data">
                  فارسی : زبان مادری<br>
                  آلمانی : سطح ب۲<br>
                  انگلیسی : سطح ب۲<br>  
                </p>
              
                <br>
                <br>

                <h2 class="resumeHead">مدارک</h2><br>
                <p id="data">
                  CompTIA A+ 1000 – Part 1	October 2023<br>
                  Alison.com<br>
                  مدت زمان : 1.30 <br>
                  •	درک هارددیسک ها و انواع حافظه<br>
                  •	شناسایی منبع تغذیه و ولتاژ<br>
                  •	انواع دستگاه های ورودی و خروجی<br>
                  <br>
                  CompTIA Network+	Mai 2024<br>
                  Cando.ac<br>
                  مدت زمان: 30<br>
                  •	مبانی و اصول شبکه , زیرساخت شبکه, امنیت شبکه<br>
                  •	کارکرد های شبکه, شبکه های بی سیم و غیره<br>
                  <br>
                  Fortgeschrittenes Diplom in Python-Programmierung	August 2024<br>
                  Alison.com<br>
                  مدت زمان: 21<br>
                  •	سینتکس و ساختار پایتون<br>
                  •	متغیرها, نوع داده‌ها, عملگرها, حلقه‌ها, شرایط, توابع, لامبدا (یا توابع ناشناس)<br>
                  •	مدیریت ارور ها , ارث بری, شی گرایی و غیره<br>
                  <br>
                  Django Backend-Framework	April 2024<br>
                  Tosinso.com<br>
                  مدت زمان: 40<br>
                  •	مسیر یابی و پردازش و اعتبار سنجی فرم ها<br>
                  •	MVC (Model-View-Template)<br>
                  <br>
                  Html5 und Css3	August 2024<br>
                  Bei Alison.com<br>
                  مدت زمان: 10<br>
                  •	تگ‌ها و عناصر ، فرم‌ها و عناصر ورودی، لینک‌ها و ناوبری و غیره <br>
                  •	انتخاب‌گرها و ویژگی‌های ، طراحی وب واکنش‌گرا و غیره<br>
                </p>
                            
                <br>
                <br>

                <h2 class="resumeHead">علایق</h2><br>
                <p id="data">
                  •	ترند های هوش مصنوعی و برنامه نویسی<br>
                  •	مسافرت کردن و افزودن دانش<br>
                  •	بکستبال بازی کردن<br>
                  •	یادگیری زبان های جدید<br>
                </p>
                            
                <br>
                <br>

                <h2 class="resumeHead">ویژگی های شخصیتی</h2><br>
                <p id="data">
                  •	مناسب برای کار تیمی، تحلیلی، توانایی ارتباطی، خلاق، متعهد و منعطف<br>
                  •	قابل اعتماد و مسئولیت‌پذیر در انجام وظایف<br>         
                </p>

              </div>
          </section>
      </div>

      <hr>
      <div>
          <section id="contact_section">
              <h1 class="head">ارتباط</h1><br>
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