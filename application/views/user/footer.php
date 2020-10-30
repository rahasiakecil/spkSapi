 <footer class="footer-small">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <div class="copyright">
                    <p></p>
                  </div>
                </div>
            </div>
        </div>
    </footer>
     <!--small footer end-->

  <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url() ?>assets/user/js/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/user/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/user/js/hover-dropdown.js"></script>
    <script defer src="<?php echo base_url() ?>assets/user/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/user/assets/bxslider/jquery.bxslider.js"></script>

    <script src="<?php echo base_url() ?>assets/user/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() ?>assets/user/js/link-hover.js"></script>


     <!--common script for all pages-->
    <script src="<?php echo base_url() ?>assets/user/js/common-scripts.js"></script>


    <script src="<?php echo base_url() ?>assets/user/js/wow.min.js"></script>
    <script>
        wow = new WOW(
          {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0          // default
          }
        )
        wow.init();

        function showDetail() {
          var x = document.getElementById("detil-hitungn");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

    </script>
</body>
</html>
