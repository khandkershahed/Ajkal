  $(function () {

    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        data: {name: 'mehedi'},
        //ajax: window.location.origin+"/news/pagination",
        ajax: {
            url: window.location.origin+"/news/pagination",
            data: function (d) {
                d.category_filter = $('#category_filter').val(),
                d.type_filter = $('#type_filter').val(),
                d.featured_filter = $('#featured_filter').val(),
                d.status_filter = $('#status_filter').val()
            }
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            // {data: 'title_img', name: 'dob'},
            {data: 'news_title', name: 'title'},
            {data: 'name', name: 'category'},
            {data: 'news_author', name: 'author'},
            {data: 'type', name: 'type'},
            {data: 'featured', name: 'featured'},
            {data: 'status', name: 'status'},
            {data: 'news_time', name: 'time'},
            {
                data: 'action', 
                name: 'action', 
                orderable: false, 
                searchable: false
            },
        ]
    });
    $("#category_filter").change(function(){
        table.draw();
    });
    $("#type_filter").change(function(){
        table.draw();
    });
    $("#featured_filter").change(function(){
        table.draw();
    });
    $("#status_filter").change(function(){
        table.draw();
    });

  });



    $('select[name="ad_category"]').change(function() {
        var ad_category_value = $(this).val();
        var duration_week = $("#week_duration").val();
        var base_url = window.location.origin;
        var url = base_url+'/get-advertisement-pricing'
        $.ajax({
            type: "POST",
            url: url,
            data: {
                "ad_category_id": ad_category_value,
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            cache: false,
            success: function(response){
                var result = JSON.parse(response);
                $("#location_price").val(result.price);
                var total_price = parseInt(duration_week)*parseFloat(result.price);
                $("#total_payment").val(total_price);
            }
        });
    });

    $("#week_duration").change(function() {
        var ad_category_value = $('select[name="ad_category"]').val();
        if (ad_category_value) {
            var total_price = parseInt($(this).val())*parseFloat($("#location_price").val());
            $("#total_payment").val(total_price);
        } else {
            window.alert('Please select advertisement location first!')
        }
    });


    $('#report_generate_btn').click(function() {
        $("#report_section").hide();
        $('tbody').html('');
        var user_id = $("#user_id").val();
        var report_start = $("#report_start_date").val();
        var report_end = $("#report_end_date").val();
        if (report_start != '' && report_end != '') {
            var base_url = window.location.origin;
            var url = base_url+'/generate-advertisement-report'
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    "user_id": user_id,
                    "report_start": report_start,
                    "report_end": report_end,
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                cache: false,
                success: function(response){
                    var result = JSON.parse(response);

                    var counter = 1;
                    $.each(result, function(index, value){
                        if (value.duration==1) {
                            $('tbody').append('<tr><td>'+counter+'</td><td>'+value.company_name+'</td><td>'+value.full_name+'</td><td>'+value.name+'</td><td>'+value.duration+' week</td><td>'+value.start_date+'</td><td class="text-end total">'+value.payable_amount+'</td><td class="text-end discount">'+value.discount+'</td><td class="text-end text-success paid">'+value.paid_amount+'</td><td class="text-end text-danger due">'+value.due_amount+'</td></tr>');
                        } else {
                            $('tbody').append('<tr><td>'+counter+'</td><td>'+value.company_name+'</td><td>'+value.full_name+'</td><td>'+value.name+'</td><td>'+value.duration+' weeks</td><td>'+value.start_date+'</td><td class="text-end total">'+value.payable_amount+'</td><td class="text-end discount">'+value.discount+'</td><td class="text-end text-success paid">'+value.paid_amount+'</td><td class="text-end text-danger due">'+value.due_amount+'</td></tr>');
                        }                      
                        counter++;
                    });
                    
                    var grand_total = 0;
                    var discount_total = 0;
                    var paid_total = 0;
                    var due_total = 0;
                    $('.total').each(function() {
                        var total_amount = parseFloat($(this).text());
                        grand_total = grand_total + total_amount;
                    });
                    $("#grand_total").text(grand_total);

                    $('.discount').each(function() {
                        var discount_amount = parseFloat($(this).text());
                        discount_total = discount_total + discount_amount;
                    });
                    $("#discount_total").text(discount_total);

                    $('.paid').each(function() {
                        var paid_amount = parseFloat($(this).text());
                        paid_total = paid_total + paid_amount;
                    });
                    $("#paid_total").text(paid_total);

                    $('.due').each(function() {
                        var due_amount = parseFloat($(this).text());
                        due_total = due_total + due_amount;
                    });
                    $("#due_total").text(due_total);

                    $("#start_date_label").text(report_start);
                    $("#end_date_label").text(report_end);
                    $("#report_section").show();
                }
            });
        } else {
            window.alert('Please select start date & end date');
        }
        
    });


    $("#epaper_date").flatpickr();
    $("#edition_date").flatpickr();
    $("#ad_start_date").flatpickr();
    $("#report_start_date").flatpickr();
    $("#report_end_date").flatpickr();
    $("#report_section").hide();
    $('.map').maphilight();

    


// document.querySelector('#btn-crop').addEventListener('click', function() {
//     var croppedImage = cropper.getCroppedCanvas().toDataURL("image/png");
//     document.getElementById('output').src = croppedImage;
//     document.querySelector(".cropped-container").style.display = "flex";
// });







$("#btn-crop").click(function(){
    const image = document.getElementById('cropImage');
    const cropper = new Cropper(image, {
        aspectRatio: NaN,
        crop(event) {
            topX = event.detail.x;
            topY = event.detail.y;
            bottomX = topX+event.detail.width;
            bottomY = topY+event.detail.height;
        },
    });
});


$("#save-btn").click(function() {
    var epaper_id = $("#epaper_id").val();
    var croppedImage = cropper.getCroppedCanvas().toDataURL("image/png");
    var base_url = window.location.origin;
    var url = base_url+'/store-cropped-epaper'
    $.ajax({
        type: "POST",
        url: url,
        data: {
            "topX": topX,
            "topY": topY,
            "bottomX": bottomX,
            "bottomY": bottomY,
            "epaper_id": epaper_id,
            "crop_data": croppedImage,
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        cache: false,
        success: function(response){
            var result = JSON.parse(response);
            if (result.status) {
                window.alert(result.message);
            }
        }
    });
});



//==========================Delete Dialog Section==================================//

$('.ad_category_delete_btn').on('click',function() {
    var ad_category_id = $(this).attr('id');
    var delete_url = window.location.origin+"/delete-ad-category/"+ad_category_id;
    
    Swal.fire({
        html: `Are you sure, You want to delete this advertisement category?`,
        icon: "info",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "<a href="+delete_url+"><strong style=\"color:#ffffff;\">Confirm</strong></a>",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: 'btn btn-danger'
        }
    });
});


$('.ad_delete_btn').on('click',function() {
    var ad_id = $(this).attr('id');
    var delete_url = window.location.origin+"/delete-advertisement/"+ad_id;
    
    Swal.fire({
        html: `Are you sure, You want to delete this advertisement?`,
        icon: "info",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "<a href="+delete_url+"><strong style=\"color:#ffffff;\">Confirm</strong></a>",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: 'btn btn-danger'
        }
    });
});


$('.user_delete_btn').on('click',function() {
    var user_id = $(this).attr('id');
    var delete_url = window.location.origin+"/delete-user/"+user_id;
    
    Swal.fire({
        html: `Are you sure, You want to delete this user?`,
        icon: "info",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "<a href="+delete_url+"><strong style=\"color:#ffffff;\">Confirm</strong></a>",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: 'btn btn-danger'
        }
    });
});


$('.category_delete_btn').on('click',function() {
    var category_id = $(this).attr('id');
    var delete_url = window.location.origin+"/delete-category/"+category_id;
    
    Swal.fire({
        html: `Are you sure, You want to delete this category?`,
        icon: "info",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "<a href="+delete_url+"><strong style=\"color:#ffffff;\">Confirm</strong></a>",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: 'btn btn-danger'
        }
    });
});


$('body').on("click",'.news_delete_btn',function() {
    var news_id = $(this).attr('id');
    var delete_url = window.location.origin+"/delete-news/"+news_id;
    
    Swal.fire({
        html: `Are you sure, You want to delete this news?`,
        icon: "info",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "<a href="+delete_url+"><strong style=\"color:#ffffff;\">Confirm</strong></a>",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: 'btn btn-danger'
        }
    });
});


$('body').on("click",'.epaper_delete_btn',function() {
    var epaper_date = $(this).attr('id');
    var delete_url = window.location.origin+"/delete-epaper/"+epaper_date;
    
    Swal.fire({
        html: `Are you sure, You want to delete this epaper? <br> <strong>N.B:</strong> You are going to delete all epaper page for this date.`,
        icon: "info",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "<a href="+delete_url+"><strong style=\"color:#ffffff;\">Confirm</strong></a>",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: 'btn btn-danger'
        }
    });
});



$('body').on("click",'.archive_edition_delete_btn',function() {
    var edition_id = $(this).attr('id');
    var delete_url = window.location.origin+"/delete-archive-edition/"+edition_id;
    
    Swal.fire({
        html: `Are you sure, You want to delete this archive edition? <br> <strong>N.B:</strong> You are going to delete this archive edition permanently.`,
        icon: "info",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "<a href="+delete_url+"><strong style=\"color:#ffffff;\">Confirm</strong></a>",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: 'btn btn-danger'
        }
    });
});
