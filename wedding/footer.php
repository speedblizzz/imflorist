<footer class="footer">


  <div class="social-block">
    <a href="https://vk.com/imflorist " target=_blank class="social-btn vk"></a>
    <a href="https://www.facebook.com/profile.php?id=100010770979023" target=_blank class="social-btn fb"></a>
    <a href="https://www.instagram.com/imflorist/" target=_blank class="social-btn instg"></a>
  </div>
  <p style="padding-top: 30px;">&copy; 2010-2017 <br> <br>"Я-Флорист!" - Букеты, оформление свадьбы, флористика </p>
</footer>
 <div class="overlay"></div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="../plugins/slick.min.js"></script>
  <script type="text/javascript" src="../js/viewportchecker.js"></script>
  <script type="text/javascript" src="../js/script.js"></script>
  <script type="text/javascript" src="../js/slider.js"></script>

  <script type="text/javascript" src="../js/fresco.js"></script>
    <script type="text/javascript" src="../js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="../js/imagesloaded.pkgd.min.js"></script>

  <script>
    $(document).ready(function() {
    $('.main-nav a').each(function() {
        if (this.href == window.location.href)
        {
            $(this).addClass('checked');
        }
    });
});
  </script>
  <script src="../js/filter.js"></script>
  <script src="../js/jquery.maskedinput.min.js"></script>
  <script src="../js/feedback.js"></script>
  <script src="../js/carousel.js"></script>
  <script>
    $(window).on('load', function() {
      if (location.hash != null) {
        var hash = location.hash;
        var actBtn = $(hash);
        setTimeout(function(){
        actBtn.trigger('click');
    }, 200);
      };
    });

  var wedLink = $('.wed-link'),
      wedList = $('.wed-services'),
      subLink = $('.sub-link'),
      subList = $('.sub-services');

  wedList.mouseenter(function(event) {
    wedLink.addClass('checked');
    $(this).mouseleave(function(event) {
      wedLink.removeClass('checked');
    });
  });
  subList.mouseenter(function(event) {
    subLink.addClass('checked');
    $(this).mouseleave(function(event) {
      subLink.removeClass('checked');
    });
  });


  </script>



</body>
</html>