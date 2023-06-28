$(document).ready(function() {

    $('#toggle').click(function() {
        $('.menu').slideToggle(50, function() {

            $('.last-header .menu ul li a.dropdown').on('click', function() {
                $('.last-header .menu ul li ul.dropdown-menu').slideToggle(50);
                $('.last-header .menu ul li span.arrow').toggleClass('arrow-up');
            });
        });

    });
    $('#lightgallery').lightGallery();


});

//ajax Liên hệ 
function Contact(module, action, formName, file_id) {

    if (file_id == 'img_file') {
        var data = document.getElementById(formName);
        var file_data = $('#' + file_id).prop('files')[0];
        var form_data = new FormData(data);
        form_data.append("file", file_data);
    }
    if (file_id == 1) {
        var data = document.getElementById(formName);
        var form_data = new FormData(data);
    }
    $.ajax({
        type: "POST",
        url: module + "/" + action,
        data: form_data,
        cache: false,
        dataType: "json",
        processData: false,
        contentType: false,
        beforeSend: function() {
            $('body').append('<div class="screen"></div>');
        },
        success: function(rs) {
            // console.log(rs);
            if (rs['status'] == 1 || rs['status'] == 0) {
                $('.screen').remove();

                $('body').append('<div class="success"> <p>' + rs['msg'] + '</p></div>');
                setTimeout(
                    function() { $('.success').remove(); }, 2600);
            }
        }
    });
    return false;
}