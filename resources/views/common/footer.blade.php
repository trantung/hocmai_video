js
<script src="{{asset('build/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('build/js/custom.min.js')}}"></script>
<script src="{{asset('build/js/jquery.inputmask.bundle.js')}}"></script>
<script src="{{asset('build/js/ajax-jquery.min.js')}}"></script>
<script src="{{asset('js/class.js')}}" type="text/javascript"></script>
<script src="{{asset('js/site.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('js/jscolor.js')}}"></script>
<!-- js colorpicker-->
<script src="{{asset('js/libscripts.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('js/vendorscripts.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('js/advanced-form-elements.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.inputmask.bundle.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.maskedinput.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.multi-select.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap-multiselect.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/mainscripts.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('js/morrisscripts.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.inputmask.js')}}" type="text/javascript"></script>
<script src="{{asset('js/moment.js')}}" type="text/javascript"></script>

<!-- jQuery -->
<!-- <script src="{{asset('vendor/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
 --><!-- Bootstrap -->
<script src="{{asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<!-- validation  -->
<script src="{{asset('js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.validate.js')}}" type="text/javascript"></script>
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
<script src="{{ asset('ckeditor/ckeditor.js') }}" type="text/javascript"></script>
<script>
  $(":input").inputmask();

  CKEDITOR.replace('editor1');
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
    // loading top div 
    $('#page-wrapper').scrollTop($('#page-wrapper')[0].scrollHeight);
    //dang 
    $('#selectTime').on('change', function() {
    if ($('#selectTime').val() == '{{ IS_PUBLISH_INACTIVE }}') {
        $('#timeShow').append('<lable  id="timer_clock_add_label" class="control-label col-md-2 col-sm-2 ">Thời gian hẹn giờ phát</lable>' +
            '<div class="col-md-4 col-sm-4" id="timer_clock_add">' +
            '<input type="text" onkeypress="handleMask(event, \'99/99/9999 99:99\')" placeholder="" size=40, name="time_clock">');
    }
    if ($('#selectTime').val() == '{{ IS_PUBLISH_ACTIVE }}') {
        $('#timer_clock_add_label').remove();
        $('#timer_clock_add').remove();
    }
});
    //input mask
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
            var text = '<div class="col-md-12">' + '<div class="col-md-2">' + '<a href="/admin/preview/video/' + data.video_id + '"' + 'target="_blank">' +
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
</body>

</html>