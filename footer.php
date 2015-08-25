<!-- footer -->

<footer class="page-footer footer" role="contentinfo">
    <div class="container">
        <?php footer_nav(); ?>
    </div>
    <div class="footer-copyright">
        <div class="container">
            &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
        </div>
        <a class="grey-text text-lighten-4 right" href="#!">
            <?php wp_loginout(); ?>
        </a>
    </div>
</footer>
</div>
<!-- /wrapper -->

<?php wp_footer(); ?>

<!-- analytics -->
<script>
    (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
        (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
        l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
                            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
    ga('send', 'pageview');
</script>
<script>
    jQuery( document ).ready(function(){
        jQuery(".button-collapse").sideNav();
    });
</script>
<script>
    jQuery(document).ready(function(){
        jQuery('.collapsible').collapsible({
            accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
        });
    });
</script>
<script>
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });
</script>
<script> 
    var $buoop = {c:2}; 
    function $buo_f(){ 
        var e = document.createElement("script"); 
        e.src = "//browser-update.org/update.min.js"; 
        document.body.appendChild(e);
    };
    try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
    catch(e){window.attachEvent("onload", $buo_f)}
</script> 
</body>
</html>
