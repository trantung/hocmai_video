$(document).ready(function() {
    var current = 1;
    widget = $(".step");
    btnnext = $(".next");
    btnback = $(".back");
    btnsubmit = $("#btnLivestreams");
    // Init buttons and UI
    widget.not(':eq(0)').hide();
    hideButtons(current);
    setProgress(current);
    // Next button click action
    btnnext.click(function() {
            if (current < widget.length) {
                // Check validation
                if ($(".form").valid()) {
                    widget.show();
                    widget.not(':eq(' + (current++) + ')').hide();
                    setProgress(current);
                }
            }
            hideButtons(current);
            window.scrollTo(0, 0);
        })
        // Back button click action
    btnback.click(function() {
        if (current > 1) {
            current = current - 2;
            if (current < widget.length) {
                widget.show();
                widget.not(':eq(' + (current++) + ')').hide();
                setProgress(current);
            }
        }
        hideButtons(current);
        window.scrollTo(0, 0);
    })
    $('.form').validate({ // initialize plugin
        ignore: ":not(:visible)",
        rules: {
            name: "required",
            description: "required",
            end_time: 'required',
            time_clock: "required",
        },
    });
});
// Change progress bar action
setProgress = function(currstep) {
        var percent = parseFloat(100 / widget.length) * currstep;
        percent = percent.toFixed();
        $(".progress-bar").css("width", percent + "%").html(percent + "%");
    }
    // Hide buttons according to the current step
hideButtons = function(current) {
        var limit = parseInt(widget.length);
        $(".action").hide();
        if (current < limit) btnnext.show();
        if (current > 1) btnback.show();
        if (current == limit) {
            // Show entered values
            $(".display label.lbl").each(function() {
                $(this).html($("#" + $(this).data("id")).val());
            });
            btnnext.hide();
            btnsubmit.show();
        }
    }
    // jquery
jQuery.extend(jQuery.expr[':'], {
    focusable: function(el, index, selector) {
        return $(el).is('a, button, :input, [tabindex]');
    }
});
$(document).on('keypress', 'input,select', function(e) {
    if (e.which == 13) {
        e.preventDefault();
        // Get all focusable elements on the page
        var $canfocus = $(':focusable');
        var index = $canfocus.index(this) + 1;
        if (index >= $canfocus.length) index = 0;
        $canfocus.eq(index).focus();
    }
});

//Vui lòng điền Thời gian hẹn giờ phát nhỏ hơn thời gian hiển thị cộng với thời gian video endtime > timer_clock + duration
// function validate() {
//     var endTime = document.getElementById('dd').value;
//     var timer_clock = document.getElementById('cc').value;
//     var duration = document.getElementById('duration').value;
//     //check validate theo địh dạng 
//     var dateString = timer_clock,
//         dateArgs = dateString.match(/\d{2,4}/g),
//         year = dateArgs[2],
//         month = parseInt(dateArgs[1]) - 1,
//         day = dateArgs[0],
//         hour = dateArgs[3],
//         minutes = dateArgs[4],
//         newminutes = dateArgs[4] + duration;
//     var TimeClock = new Date(year, month, day, hour, minutes);

//     if (year != TimeClock.getFullYear() || month != TimeClock.getMonth() || day != TimeClock.getDate() || hour != TimeClock.getHours() || minutes != TimeClock.getMinutes()) {
//         $('#error_cc').show();
//         return false;
//     } else {
//         $('#error_cc').hide();
//         var newTime = new Date(year, month, day, hour, newminutes);
//     }
//     // end time Thời hạn hiển thị
//     var timeEnd = endTime,
//         dateArgs1 = timeEnd.match(/\d{2,4}/g),
//         year1 = dateArgs1[2],
//         month1 = parseInt(dateArgs1[1]) - 1,
//         day1 = dateArgs1[0],
//         hour1 = dateArgs1[3],
//         minutes1 = dateArgs1[4];
//     var timeEnds = new Date(year1, month1, day1, hour1, minutes1);
//     if (year1 != timeEnds.getFullYear() || month1 != timeEnds.getMonth() || day1 != timeEnds.getDate() || hour1 != timeEnds.getHours() || minutes1 != timeEnds.getMinutes()) {
//         $('#error_dd').show();
//         return false;
//     } else {
//         $('#error_dd').hide();
//     }

//     // dt.setMinutes( dt.getMinutes() + 30 );
//     //console.log(dateTimeEnd, dateTimeClock, newTime);
//     var datetime = moment(newTime).format("DD/MM/YYYY HH:mm");
//     if (timeEnds < newTime) {
//         alert("Vui lòng điền Thời gian hiển thị lớn hơn " + datetime + " !!!");
//         return false;
//     }
//     return true;

// }


