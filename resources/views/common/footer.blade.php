  
 <!-- jQuery -->
 <script src="{{url('../../vendor/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{url('../../vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{url('../../vendor/fastclick/lib/fastclick.js')}}"></script>
  <!-- NProgress -->
  <script src="{{url('../../vendor/nprogress/nprogress.js')}}"></script>
  <!-- Chart.js -->
  <script src="{{url('../../vendor/Chart.js/dist/Chart.min.js')}}"></script>
  <!-- gauge.js -->
  <script src="{{url('../../vendor/gauge.js/dist/gauge.min.js')}}"></script>
  <!-- bootstrap-progressbar -->
  <script src="{{url('../../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
  <!-- iCheck -->
  <script src="{{url('../../vendor/iCheck/icheck.min.js')}}"></script>
  <!-- Skycons -->
  <!-- <script src="{{url('../../vendor/skycons/skycons.js')}}"></script> -->
  <!-- Flot -->
  <!-- <script src="{{url('../../vendor/Flot/jquery.flot.js')}}"></script>
  <script src="{{url('../../vendor/Flot/jquery.flot.pie.js')}}"></script>
  <script src="{{url('../../vendor/Flot/jquery.flot.time.js')}}"></script>
  <script src="{{url('../../vendor/Flot/jquery.flot.stack.js')}}"></script>
  <script src="{{url('../../vendor/Flot/jquery.flot.resize.js')}}"></script> -->
  <!-- Flot plugins -->
  <!-- <script src="{{url('../../vendor/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
  <script src="{{url('../../vendor/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
  <script src="{{url('../../vendor/flot.curvedlines/curvedLines.js')}}"></script> -->
  <!-- DateJS -->
  <script src="{{url('../../vendor/DateJS/build/date.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{url('../../vendor/jqvmap/dist/jquery.vmap.js')}}"></script>
  <script src="{{url('../../vendor/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
  <script src="{{url('../../vendor/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="{{url('../../vendor/moment/min/moment.min.js')}}"></script>
  <script src="{{url('../../vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

  <!-- Custom Theme Scripts -->
  <script src="{{url('../../build/js/custom.min.js')}}"></script>
  <!-- Datatables -->
  <script src="{{url('../../vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
  <script src="{{url('../../vendor/jszip/dist/jszip.min.js')}}"></script>
  <script src="{{url('../../vendor/pdfmake/build/pdfmake.min.js')}}"></script>
  <script src="{{url('../../vendor/pdfmake/build/vfs_fonts.js')}}"></script>
    <!-- jQuery Smart Wizard -->
  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
  <script> CKEDITOR.replace('editor1'); </script>
  
  <script>
    $('#input_starttime').pickatime({});
    $(document).ready(function() {
      $('.star').on('click', function() {
        $(this).toggleClass('star-checked');
      });

      $('.ckbox label').on('click', function() {
        $(this).parents('tr').toggleClass('selected');
      });

      $('.btn-filter').on('click', function() {
        var $target = $(this).data('target');
        if ($target != 'all') {
          $('.table tr').css('display', 'none');
          $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
        } else {
          $('.table tr').css('display', 'none').fadeIn('slow');
        }
      });
      //tung
      $('#load_video_source').click(function(e) {
            var video_source_id = $("#video_source_id").val();
            var csrf = '{{csrf_token()}}';
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "/ajax/load_video_source",
                data: { 
                    video_source_id: video_source_id, // < note use of 'this' here
                    _token: '{{csrf_token()}}'
                },
                dataType : 'json',
                success: function(data) {
                  if (data.status == 'Fail') {
                    var error_load = '<p style="color:red;">'+ data.msg + '</p>';
                    $("#error_load_video_source").append(error_load);
                  }
                  if (data.status == 'success') {
                    var hidden = '<input type="hidden" name="video_source_id[]" value="' + data.video_id + '">';
                    var text = '<div class="col-md-12">' + '<a href="/admin/preview/video/' + data.source_id + '"' + 'target="_blank">' + 
                    data.video_title +'</a>' + '</div>' + hidden;
                    $("#video_source_detail").append(text);
                  }
                },
                error: function(data) {
                    alert(data);
                }
            });
        });
      //end tung
    });
  </script>
    <script src="{{url('../../vendor/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>

</body>
</html>