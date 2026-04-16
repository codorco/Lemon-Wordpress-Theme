</div><!-- l-page-wrapper -->
  <?php wp_footer();?>
  <script src="<?php bloginfo('template_url'); ?>/js/main.min.js"></script>
  <script>AOS.init(); for (var galleryItem = document.querySelectorAll(".jl-post-gallery img"), i = 0; i < galleryItem.length; i++)new Waypoint.Inview({ element: galleryItem[i], entered: function () { var e = this.element.getAttribute("data-src"); this.element.setAttribute("src", e) } })
</script>
</body>
</html>