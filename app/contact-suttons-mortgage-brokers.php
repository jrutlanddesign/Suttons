<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suttons Mortgage Brokers - mortgage and home insurance brokers in Yorkshire</title>

    <?php include('include/head.php'); ?>
    
  </head>
  <body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <header>
      <img src="images/suttons-mortgage-brokers.png" alt="Suttons Mortgage Brokers, Yorkshire" class="logo">
      <div id="topContact">
        <img src="images/phone-icon.svg" alt="contact Suttons Mortgage Brokers, Yorkshire">
        <span>01482 376245</span>
      </div>

      <a href="#" id="menuIcon" class="navTrigger"><img src="images/nav-icon.svg" alt="menu icon - click to expand menu"></a>
    </header>

    <nav>
      <?php include('include/navigation.php'); ?>
    </nav>

    <div class="container">

      <section class="titleContain">
        <h1>All Types of Mortgages Arranged</h1>
      </section>

      <article>
        <h2>Contact Us</h2>

        <p>If you'd like to get in touch please call us on <b>01482 376245</b>, or email us at <a href="mailto:enquiries@drfs.co.uk">enquiries@drfs.co.uk</a>. Alternatively you can send us a message via the contact form below and someone will get in touch with you a.s.a.p.</p>
        
        <form id="contact-form" name="contactform" method="post" action="send_form_email.php">
            <div class="form_container">
            <p>
                <label for="first_name">First Name</label>
                <input type="text" class="text" name="first_name" placeholder="enter your first name" required>
            </p>
            <p>
                <label for="last_name">Last Name</label>
                <input type="text" class="text"  name="last_name" placeholder="enter your surname" required>
            </p>
            <p>
                <label for="email">Email Address</label>
                <input type="email" class="text"  name="email" placeholder="enter your contact email address" required>
            </p>
            <p>
                <label for="telephone">Telephone Number</label>
                <input type="number" class="text"  name="telephone" placeholder="enter your contact number" required>
            </p>
            <p id="comment_box">
                <label for="comments">Comments</label>
                <textarea name="comments"></textarea>
            </p>
            <p>
                <input type="submit" value="Submit">
            </p>
            </div>
        </form>

      </article>

        <?php include('include/footer.php'); ?>
  </body>
</html>
