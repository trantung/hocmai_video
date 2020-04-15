<!-- js -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="{{asset('js/video.js')}}" type="text/javascript"></script>
<!-- steps -->

<!-- jQuery -->
<!-- <script src="{{asset('vendor/jquery/dist/jquery.min.js')}}" type="text/javascript"></script> -->
<!-- Bootstrap -->
<script src="{{asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<!-- FastClick -->
<script src="{{asset('vendor/fastclick/lib/fastclick.js')}}" type="text/javascript"></script>
<!-- NProgress -->
<script src="{{asset('vendor/nprogress/nprogress.js')}}" type="text/javascript"></script>
<!-- Chart.js -->
<script src="{{asset('vendor/Chart.js/dist/Chart.min.js')}}" type="text/javascript"></script>
<!-- gauge.js -->
<script src="{{asset('vendor/gauge.js/dist/gauge.min.js')}}" type="text/javascript"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}" type="text/javascript"></script>
<!-- iCheck -->
<script src="{{asset('vendor/iCheck/icheck.min.js')}}" type="text/javascript"></script>
<!-- Skycons -->
<script src="{{asset('vendor/skycons/skycons.js')}}" type="text/javascript"></script>
<!-- Flot -->
<script src="{{asset('vendor/Flot/jquery.flot.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/Flot/jquery.flot.pie.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/Flot/jquery.flot.time.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/Flot/jquery.flot.stack.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/Flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
<!-- Flot plugins -->
<script src="{{asset('vendor/flot.orderbars/js/jquery.flot.orderBars.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/flot-spline/js/jquery.flot.spline.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/flot.curvedlines/curvedLines.js')}}" type="text/javascript"></script>
<!-- DateJS -->
<script src="{{asset('vendor/DateJS/build/date.js')}}" type="text/javascript"></script>
<!-- JQVMap -->
<script src="{{asset('vendor/jqvmap/dist/jquery.vmap.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jqvmap/dist/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jqvmap/examples/js/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
<!-- Custom Theme Scripts -->
<script src="{{asset('build/js/custom.min.js')}}" type="text/javascript"></script>
<!-- Datatables -->
<script src="{{asset('vendor/datatables.net/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/datatables.net-bs/js/dataTables.bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/datatables.net-buttons/js/buttons.flash.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/datatables.net-buttons/js/buttons.html5.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/datatables.net-buttons/js/buttons.print.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/datatables.net-keytable/js/dataTables.keyTable.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/datatables.net-responsive/js/dataTables.responsive.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/datatables.net-scroller/js/dataTables.scroller.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jszip/dist/jszip.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/pdfmake/build/pdfmake.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/pdfmake/build/vfs_fonts.js')}}" type="text/javascript"></script>
<!-- jQuery Smart Wizard -->
<script src="{{ asset('ckeditor/ckeditor.js') }}" type="text/javascript"></script>
<script>
  CKEDITOR.replace('editor1');
</script>
<script>
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
    //dang 
    $('#selectTime').on('change', function() {
      if ($('#selectTime').val() == '{{ IS_PUBLISH_INACTIVE }}') {
        $('#timeShow').append('<lable  id="timer_clock_add_label" class="control-label col-md-2 col-sm-2 ">Thời gian hiện thị hẹn giờ</lable >' + '<br/>' + '<div id="timer_clock_add" class="col-md-4 col-sm-4">' + '<input name="timer_clock" type="dateTime-local" class="form-control"></div>');
      }
      if ($('#selectTime').val() == '{{ IS_PUBLISH_ACTIVE }}') {
        $('#timer_clock_add_label').remove();
        $('#timer_clock_add').remove();
      }
    });
    // remove link load video source
    $(document).on("click", "i.del", function() {
      $(this).parent().remove();
    });
    // end dang
    // loading content 
    // Set trigger and container variables
    var trigger = $('#nav ul li a'),
      container = $('#page-wrapper');

    // Fire on click
    trigger.on('click', function() {
      // Set $this for re-use. Set target from data attribute
      var $this = $(this),
        target = $this.data('target');

      // Load target page into container
      container.load(target + '.blade.php');

      // Stop normal link behavior
      return false;
    });
    //tung
    $('#load_video_source').click(function(e) {
      var video_source_id = $("#video_source_id").val();
      var csrf = '{{csrf_token()}}';
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      e.preventDefault();
      $.ajax({
        type: "POST",
        url: "/ajax/load_video_source",
        data: {
          video_source_id: video_source_id, // < note use of 'this' here
          _token: '{{csrf_token()}}'
        },
        dataType: 'json',
        success: function(data) {
          // if (data.status == 'Fail') {
          //   $('.error').html(response); 
          //   // var error_load = '<div class="text-danger col-md-3">' + data.msg + '<i class="fa fa-times del"></i></div><br>';
          //   // $("#error_load_video_source").append(error_load);
          // }
          if (data.status == 'success') {
            var hidden = '<input type="hidden" name="video_source_id[]" value="' + data.video_id + '">';
            var text = '<div class="col-md-12">' + '<div class="col-md-2">' + '<a href="/admin/preview/video/' + data.source_id + '"' + 'target="_blank">' +
              data.video_title + '</a>' + '<i class="fa fa-times del"></i></div><br>' + hidden;
            $("#video_source_detail").append(text);
          } else {
            alert("ID Video không tồn tại. Xin vui lòng nhập ID khác!");
          }
        },
        error: function(data) {
          var errors = data.responseJSON;
        }
      });
    });
    //end tung
  });
</script>
<!-- form-wizard js -->
<script src="{{asset('vendor/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}" type="text/javascript"></script>
<!-- //time -->
<script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
</script>
<script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
</script>
<script type="text/javascript">
  $(function() {
    $('#datetimepicker3').datetimepicker({
      pickDate: false
    });
    $('#datetimepicker1').datetimepicker({
      language: 'pt-BR'
    });
  });
</script>
</body>

</html>