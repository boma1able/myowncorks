
<?php get_header();?>


<body>

  <div id="page-preloader" class="bg-preloader">
    <div class="wrapper">
      <div class="cssload-loader"></div>
    </div>
  </div>

  <div class="grid">
    <div class="grid-sizer"></div>
    <div class="grid-item box1 height2">
      <div class="box1-1">
        <a class="logo" href=""><img class="img-responsive" src="<?php echo home_url('/wp-content/themes/myowncorks/', 'http');?>img/logo1.png" alt="logo"></a>
        <p class="logo-p">My Own Corks allows you to discover, rate, share and enjoy the wine.</p>
      </div>
    </div>
    <div class="grid-item box2 height3">
      <div class="phone">
        <a href=""><img class="img-responsive" src="<?php echo home_url('/wp-content/themes/myowncorks/', 'http');?>img/phone.png" alt="phone-image"></a>
      </div>
    </div>
    <div class="grid-item box3 height2">
      <div class="box3-1">
        <div class="bottle">
          <a data-toggle="tooltip" data-placement="right" title="Enter to Store" href="http://localhost/woo/shop/"><img class="img-responsive" src="<?php echo home_url('/wp-content/themes/myowncorks/', 'http');?>img/bottle.png" alt="bottle image"></a>
        </div>
      </div>
      <div class="box3-2">
        <div class="box3-22">
          <h5 class="h5-3">We inform and inspire</h5>
          <p class="p-3">My Own Corks has a powerful search engine, which uses the most extrnsive wine directory, making is es possible for you to find the wine information that you need. Create your own virtual cellar and open it to the world.</p>
        </div>
      </div>
    </div>
    <div class="grid-item box4">
      <div class="corkscrew">
        <a href="" data-toggle="tooltip" data-placement="bottom" title="It's just a corkscrew ;)"><img class="img-responsive" src="<?php echo home_url('/wp-content/themes/myowncorks/', 'http');?>img/corkscrew.png" alt="corkscrew image"></a>
      </div>
    </div>
    <div class="grid-item box5">
      <a href="" data-toggle="tooltip" data-placement="top" title="Discover more with us">
        <h3>discover</h3>
      </a>
    </div>
    <div class="grid-item box6">
      <div class="box6-1">
        <a href="" data-toggle="tooltip" data-placement="top" title="Follow us on facebook">
          <div class="facebook">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </div>
        </a>
      </div>
      <div class="box6-2">
        <a href="" data-toggle="tooltip" data-placement="top" title="Follow us on twitter">
          <div class="twitter">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </div>
        </a>
      </div>
    </div>
    <div class="grid-item box7">
      <a href="" data-toggle="tooltip" data-placement="right" title="Rate us">
        <h3>rate</h3>
      </a>
    </div>
    <div class="grid-item box8 height2">
      <div class="subscribe">
        <div class="sub">
          <h5 class="sub-h5">Sign up below for early updates</h5>
          <p class="sub-p">If you are a winey, large or small, and want to participate in this abventure, please send us an email to <br> <a href=""><span>bomaooo@gmail.com</span></a>
          </p>
        </div>
        <div class="sub-form">
          <form action="" class="form">
            <input type="email" placeholder="email address">
            <button type="submit" class="sub-btn">subscribe</button>
          </form>
        </div>
      </div>
    </div>
    <div class="grid-item box9 height2">
      <div class="thing">
        <a href="">
          <img class="img-responsive" src="<?php echo home_url('/wp-content/themes/myowncorks/', 'http');?>img/thing.png" alt="thing image">
        </a>
      </div>
    </div>
    <div class="grid-item box10">
      <div class="cap">
        <a href="" data-toggle="tooltip" data-placement="right" title="Just enjoy the wine!"><img class="img-responsive" src="<?php echo home_url('/wp-content/themes/myowncorks/', 'http');?>img/cap.png" alt="cap image"></a>
      </div>
    </div>
    <div class="grid-item box11 height2">
      <div class="copy">
        <p><span>&copy;</span> MyOwnCorks, 2017-remake | All rights are f_cked ;)</p>
      </div>
    </div>
    <div class="grid-item box12">
      <div class="share">
        <a href="" data-toggle="tooltip" data-placement="top" title="Share us in social">
          <h3>share</h3>
          <p>We are 55!</p>
        </a>
      </div>
    </div>
    <div class="grid-item box13 height2">
      <div class="grape">
        <a href="" data-toggle="tooltip" data-placement="left" title="The grape harvest"><img class="img-responsive" src="<?php echo home_url('/wp-content/themes/myowncorks/', 'http');?>img/grape.png" alt="image">
      </div>
      </a>
    </div>
    <div class="grid-item box14">
      <div class="glass">
        <a href=" " data-toggle="tooltip" data-placement="top" title="Sign up for a Meetup"><img class="img-responsive" src="<?php echo home_url('/wp-content/themes/myowncorks/', 'http');?>img/glass.png" alt="glass image"></a>
      </div>
    </div>
  </div>

<?php get_footer();?>
 
  <script type="text/javascript">
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>

</body>

</html>