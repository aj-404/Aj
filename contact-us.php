<!DOCTYPE html>
<html lang="en">
<head>
<title>SIU | Contact Us</title>
<?php include("header.php");?>
</head>
<body id="page5">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">Student's site</a></h1>
      <nav>
        <ul>
          <li><a href="index.php" class="m1">Home Page</a></li>
          <li><a href="about-us.php" class="m2">About Us</a></li>
          <li><a href="articles.php" class="m3">Our Articles</a></li>
          <li class="last current"><a href="contact-us.php" class="m4">Contact Us</a></li>
        </ul>
      </nav>
      <form action="#" id="search-form">
        <fieldset>
          <div class="rowElem">
            <a href="#">Welcome AJ</a></div>
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
      <div class="inside">
        <h2>Our <span>Contacts</span></h2>
        <div class="address">
          <address>
          <strong>Zip Code:</strong>50122<br>
          <strong>Country:</strong>USA<br>
          <strong>Telephone:</strong>+354 5635600<br>
          <strong>Fax:</strong>+354 5635610
          </address>
          <div class="extra-wrap">
            <h4>Miscellaneous info:</h4>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
          </div>
        </div>
        <h2>Contact <span>Form</span></h2>
        <form id="contacts-form" action="#">
          <fieldset>
            <div class="field">
              <label>Your Name:</label>
              <input type="text" value=""/>
            </div>
            <div class="field">
              <label>Your E-mail:</label>
              <input type="email" value=""/>
            </div>
            <div class="field">
              <label>Your Website:</label>
              <input type="text" value=""/>
            </div>
            <div class="field extra">
              <label>Your Message:</label>
              <textarea cols="1" rows="1"></textarea>
            </div>
            <div class="alignright"><a href="#">Send Your Message!</a></div>
          </fieldset>
        </form>
      </div>
    </section>
  </div>
</div>
<?php include("footer.php");?>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
