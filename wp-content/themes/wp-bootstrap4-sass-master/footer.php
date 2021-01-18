<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="text-center p-2">
            <a href="mailTo:support@promservice65.ru"
               title="Написать нам на email"
               class="footer__email">
                support@promservice65.ru
            </a>
            <!-- copyright -->
            <p class="copyright">
                &copy; <?php echo date('Y'); ?> ООО «ПромСервис». Все права защищены.
            </p>
            <!-- /copyright -->
            <button class="open-politics-modal" type="button">
                Политика конфиденциальности..
            </button>
        </div>
    </div><!-- /.container -->
</footer>
<!-- /footer -->


<?php wp_footer(); ?>

<!-- analytics -->
<script>
  (function (f, i, r, e, s, h, l) {
    i['GoogleAnalyticsObject'] = s;
    f[s] = f[s] || function () {
      (f[s].q = f[s].q || []).push(arguments)
    }, f[s].l = 1 * new Date();
    h = i.createElement(r),
      l = i.getElementsByTagName(r)[0];
    h.async = 1;
    h.src = e;
    l.parentNode.insertBefore(h, l)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
  ga('send', 'pageview');
</script>

</body>
</html>
