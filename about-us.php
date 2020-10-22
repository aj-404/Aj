<!DOCTYPE html>
<html lang="en">
<head>
<title>SIU | About Us</title>
<?php include("header.php");?>
</head>
<body id="page2">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">Student's site</a></h1>
      <nav>
        <ul>
          <li><a href="index.php" class="m1">Home Page</a></li>
          <li class="current"><a href="about-us.php" class="m2">About Us</a></li>
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
      <div class="inside">
        <h2>Recent <span>Articles</span></h2>
        <ul class="list">
          <li><span><img src="images/icon1.png"></span>
            <h4>About Template</h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</p>
          </li>
          <li><span><img src="images/icon2.png"></span>
            <h4>Branch Office</h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</p>
          </li>
          <li class="last"><span><img src="images/icon3.png"></span>
            <h4>Student’s Time</h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</p>
          </li>
        </ul>
      </div>
      <div class="inside">
        <h2>About <span>team</span></h2>
        <ul class="list">
          <li><img src="images/2page-img1.jpg">
            <h4>Team Member One</h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu.</p>
          </li>
          <li><img src="images/2page-img2.jpg">
            <h4>Another Team Member </h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu.</p>
          </li>
          <li class="last"><img src="images/2page-img3.jpg">
            <h4>Another Team Member </h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu.</p>
          </li>
        </ul>
        <h2>About <span>Website</span></h2>
        <div class="img-box"><img src="images/2page-img4.jpg"><span class="txt1">Nemo enim ipsam voluptatem</span> quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore aliquam. </div>
        <p class="p0"><span class="txt1">Quis autem vel eum</span> iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptasaut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
      </div>
    </section>
  </div>
</div>
<?php include("footer.php");?>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
