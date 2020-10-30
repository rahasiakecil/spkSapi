        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">Design by Colorlib, Modify and Enchanted by Jeri F - All Right Reserve</p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

      </div>
      <!-- /page content -->
    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>
  <script src="<?php echo base_url() ?>assets/admin/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/admin/js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="<?php echo base_url() ?>assets/admin/js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="<?php echo base_url() ?>assets/admin/js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="<?php echo base_url() ?>assets/admin/js/icheck/icheck.min.js"></script>

   <script src="<?php echo base_url() ?>assets/admin/js/chartjs/chart.min.js"></script>
 

  <script src="<?php echo base_url() ?>assets/admin/js/custom.js"></script>
 
  <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/moment/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/datepicker/daterangepicker.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/datatables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/datatables/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/datatables/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/datatables/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/datatables/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/datatables/vfs_fonts.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/datatables/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/datatables/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/datatables/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/datatables/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/datatables/responsive.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/datatables/dataTables.scroller.min.js"></script>
  
  <!-- pace -->
  <script src="<?php echo base_url()?>assets/admin/js/pace/pace.min.js"></script>
   <script src="<?php echo base_url()?>assets/admin/js/validator/validator.js"></script>


  <script type="text/javascript">

  

    $(document).ready(function(){

      $('#datatable').dataTable();


      $('input[id="tanggal"]').daterangepicker({
        singleDatePicker: true,
        format: 'DD-MM-YYYY',
        calender_style: "picker_3"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });

       $('form')
          
          .on('change', 'select.required', validator.checkField)
          .on('keypress', 'input[required][pattern]', validator.keypress);

          $('form').submit(function(e) {
            
            e.preventDefault();
            var submit = true;
            if (!validator.checkAll($(this))) {
              submit = false;
            }

            if (submit)
              this.submit();
            return false;
          });

      $('body').on('click', '[data-toggle="modal"]', function(){
        $($(this).data("target")+' .modal-content').load($(this).data("remote"), function(){

          $('form')
          .on('blur', 'input[required], input.optional, select.required', validator.checkField)
          .on('change', 'select.required', validator.checkField)
          .on('keypress', 'input[required][pattern]', validator.keypress);

          $('form').submit(function(e) {
            
            e.preventDefault();
            var submit = true;
            if (!validator.checkAll($(this))) {
              submit = false;
            }

            if (submit)
              this.submit();
            return false;
          });
        });
      });
    });

  </script>
</body>

</html>
