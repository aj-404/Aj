<!DOCTYPE html>
<html lang="en">
<head>
<title>SIU | Home</title>
<?php include("header.php");?>
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">Student's site</a></h1>
      <nav>
        <ul>
          <li class="current"><a href="index.php" class="m1">Home Page</a></li>
          <li><a href="about-us.php" class="m2">About Us</a></li>
          <li><a href="articles.php" class="m3">Our Articles</a></li>
          <li class="last"><a href="contact-us.php" class="m4">Contact Us</a></li>
        </ul>
      </nav>
      <form action="#" id="search-form">
        <fieldset>
          <div class="rowElem">
            <input type="text">
            <a href="#">Search</a></div>
        </fieldset>
      </form>
    </div>
  </header>

  <div class="container">
    <aside>
      <?php include("leftnav.php"); ?>
      
      <h2>Fresh <span>News</span></h2>
      <?php include("news.php");?>
    </aside>
    <section id="content">
    <div id="banner">
        <h2>Professional <span>Online Education <span>Since 1992</span></span></h2>
      </div>
      <div class="inside">
        <h2>Move Forward <span>With Your Education</span></h2>
        <p style="text-align:justify"><span class="txt1">Government Recognized</span> SIU has been established by an act of State Legislature and recognized by Universal University Grants Commission (UUGC) through the Act of State Legislature. </p>
        <div class="img-box"><img src="images/1page-img.jpg"><p style="text-align:justify">2500 Academicians, Scientists & Researchers Led By 10 Former Vice Chancellors. SIU has some of the most talented and dedicated thought leaders in the country who come from the best institutions around the world.
        <br><br><br>South India University continuously upgrades the knowledge and skills of the faculty members in various institutions under its umbrella. For this, various Faculty Development Programmes are regularly organised viz., Orientation Programmes, Effectiveness Programmes, Domain Refresher Programmes and Specialized Programmes.
      </p>
      </div>
    </section>
  </div>
</div>
<?php include("footer.php");?>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>