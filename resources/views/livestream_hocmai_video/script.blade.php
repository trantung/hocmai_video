<script>
$( document ).ready(function() {
        $('#upload').on('change', function() {
            readURL(input);
        });
        $('#upload1').on('change', function() {
            readURL1(input);
        });
        
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imageResult')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL1(input1) {
        if (input1.files && input1.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imageResult1')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input1.files[0]);
        }
    }
    /*  ==========================================
        SHOW UPLOADED IMAGE NAME
    * ========================================== */
    var input = document.getElementById('upload');
    var infoArea = document.getElementById('upload-label');
    var input1 = document.getElementById('upload1');
    var infoArea1 = document.getElementById('upload-label1');

    input.addEventListener('change', showFileName);

    function showFileName(event) {
        var input = event.srcElement;
        var fileName = input.files[0].name;
        infoArea.textContent = 'File name: ' + fileName;
    }
    input1.addEventListener('change', showFileName1);

    function showFileName1(event) {
        var input1 = event.srcElement;
        var fileName1 = input1.files[0].name;
        infoArea1.textContent = 'File name: ' + fileName1;
    }
</script>