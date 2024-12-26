var base_url = window.location.href;
var full_url = base_url.split('/');
base_url = full_url[0]+'//'+full_url[2]+'/'+full_url[3]+'/'
function showNotify(message,status,url){
    if(status == 'success'){
        toastr.success(message);
        if(url != ''){
            setTimeout(function(){
                window.location = url;
            }, 2000); 
        }else{
            setTimeout(function(){
                window.location.reload();
            }, 2000)
        }
    }else if(status == 'error'){
        toastr.error(message);
    }else if(status == 'errors'){   
        toastr.error(message);
    }
}
$('form > input').keyup(function() {
    var empty = false;
    $('form > input').each(function() {
        if ($(this).val() == '') {
            empty = true;
        }
    });
    if (empty) {
        $('#update').attr('disabled', 'disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
    } else {
        $('#update').removeAttr('disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
    }
});

$(document).on("submit",'.all-form',function(e){
    e.preventDefault();
    var method = $(this).attr('method');
    var url = $(this).attr("action");
    var form = $(this)[0];
    var form_data = new FormData(form); 
    $('.all-form button[type ="submit"]').html("wait...");
    $('.all-form button[type ="submit"]').prop("disabled", true); 
    
    $.ajax({
        type: method,
        url: url,
        data:form_data,
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(data){
            if(data.status == 'error'){
                $.each(data.errors, function(key, value) {
                    $('#'+key).addClass('is-invalid');
                    $('#'+key).html(value).css('display','block');
                    $(".pribtn").load(location.href + " .pribtn");
                });  
            }
            if(data.status == 'success'){
                showNotify(data.message,data.status,data.url);
                $(".pribtn").load(location.href + " .pribtn");
            }
            if(data.status == 'errors'){
                showNotify(data.message,data.status,data.url);
                 $(".pribtn").load(location.href + " .pribtn");
            }
        }
    }); 
})

$(document).on("submit",'.signin-form',function(e){
    e.preventDefault();
    var method = $(this).attr('method');
    var url = $(this).attr("action");
    var form = $(this)[0];
    var form_data = new FormData(form); 
    $('.signin-form button[type ="submit"]').html("wait...");
    $('.signin-form button[type ="submit"]').prop("disabled", true);
    $.ajax({
        type: method,
        url: url,
        data:form_data,
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(data){
            if(data.status == 'error'){
                $.each(data.errors, function(key, value) {
                    $(".pribtn2").load(location.href + " .pribtn2");
                    $('#'+key).addClass('is-invalid');
                    $('#'+key).html(value).css('display','block');

                });  
            }
            if(data.status == 'success'){
                 
                showNotify(data.message,data.status,data.url);
                $(".pribtn2").load(location.href + " .pribtn2");
            }
            if(data.status == 'errors'){
                showNotify(data.message,data.status,data.url);
                 $(".pribtn2").load(location.href + " .pribtn2");


            }

        }
    }); 
})
$(document).on("submit",'.all-form-server',function(e){
	e.preventDefault();
	var method = $(this).attr('method');
	var url = $(this).attr("action");
    var form = $(this)[0];
    var form_data = new FormData(form);    
	$.ajax({
        type: method,
        url: url,
        data:form_data,
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(data){
            if(data.status == 'error'){
                $.each(data.errors, function(key, value) {
                    $('#'+key).addClass('is-invalid');
                    $('#'+key).html(value);
                });  
            }
            if(data.status == 'success'){
                $(".cutoff_entry_data_ajax").html(data.html);
            }
            if(data.status == 'errors'){
                showNotify(data.message,data.status,data.url);
            }
        }
    }); 
})
$(document).on("submit",'.all-form-front',function(e){
    e.preventDefault();
    var method = $(this).attr('method');
    var url = $(this).attr("action");
    var form = $(this)[0];
    var form_data = new FormData(form);    
    $.ajax({
        type: method,
        url: url,
        data:form_data,
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(data){
            if(data.status == 'error'){
                $.each(data.errors, function(key, value) {
                    $('.' + key).addClass('is-invalid');
                    $('.' + key).html(value);
                });  
            }
            if(data.status == 'success'){
                location.reload();
            }
            if(data.status == 'errors'){
                showNotify(data.message,data.status,data.url);
            }
        }
    }); 
})
$(document).on("submit",'.submit-with-populate',function(e){
    e.preventDefault();
    var method = $(this).attr('method');
    var url = $(this).attr("action");
    var wrapper = $(this).data("wrapper");
    var modal = $(this).data("modal");
    var form = $(this)[0];
    var form_data = new FormData(form);    
    $.ajax({
        type: method,
        url: url,
        data:form_data,
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(data){
            if(data.status == 'error'){
                $.each(data.errors, function(key, value) {
                    $('#' + key).addClass('is-invalid');

                    $('#' + key).html(value);
                });  
            }
            if(data.status == 'success'){
                showNotify(data.message,data.status,data.url);
                $(".close-modal").click();
                $(wrapper).html(data.html);
            }
            if(data.status == 'errors'){
                showNotify(data.message,data.status,data.url);
            }
        }
    }); 
})
$(document).on('keyup','input', function () { 
    $(this).parent().find('.text-danger').empty();
});
$(document).on('click','.delete-data', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var url = $(this).attr('url');
    Swal.fire({
        title: "Are you sure ?",
        text: "You want to delete some data",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes",
        cancelButtonText: "No",
        closeOnConfirm: true,
        closeOnCancel: true
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
                type: "POST",
                url: url,
                data:{id:id},
                dataType: 'json',
                success: function(data){
                    if(data.status == 'success'){
                        showNotify(data.message,data.status,data.url);
                    }
                    if(data.status == 'errors'){
                        showNotify(data.message,data.status,data.url);
                    }
                }
        }); 
      } else if (result.isDenied) {
       showNotify('Action Cancelled','error','');
      }
    }); 
});

$(document).on('change','.send-to-server', function (e) { 
    var id = $(this).data('id');
    var status = $(this).send-to-server('status');
    var url = $(this).attr("url");
    $.ajax({
        type: 'POST',
        url: url,
        data:{id:id,status:status},
        dataType: 'json',
        success: function(data){
            if(data.status == 'success'){
                showNotify(data.message,data.status,data.url);
            }
            if(data.status == 'errors'){
                showNotify(data.message,data.status,data.url);
            }
        }
    }); 
});
// $(document).ready(function(){
//     $('.all-form').keydown(function(event){
//         if(event.keyCode == 13) {
//             event.preventDefault();
//             return false;
//         }
//     });
// });
// $(document).on('change','.dynamic-data', function (e) {
//     var id = $(this).val();
//     var segment     =   $(this).data('segment');
//     var wrapper     =   $(this).data("wrapper");
//     var defaultval  =   $(this).data("default");
//     // alert(id+segment+wrapper);
//     // alert(base_url);
//     $.ajax({
//         type: 'POST',
//         url: `${base_url}${segment}`,
//         data:{id:id},
//         dataType: 'json',
//         success: function(data){
//             if(data.status == 'success'){
//                 $(wrapper).html(data.html);
//                 $(wrapper).change();
//                 // alert(data.html);
//             }else {
//                  $(wrapper).html(data.html);
//                  $(wrapper).change();
//             }
//             if(data.status == 'errors'){
//                 $(wrapper).html(data.html);
//             }
//         }
//     });
// });

$(document).on('change','.dynamic-select', function (e) {
    var id = $(this).val();
    var segment     =   'admin/gat-data';
    var wrapper     =   $(this).data("wrapper");
    var depend     =   $(this).data("depend");
    var defaultval  =   $(this).data("default");
    // alert(id+segment+wrapper);
    // alert(wrapper);
    $.ajax({
        type: 'POST',
        url: `${base_url}${segment}`,
        data: {
            id: id,
            depend_table: wrapper,
            depend_cloumn: depend
        },
        dataType: 'json',
        success: function(data){
            if(data.status == 'success'){
                $('.'+wrapper).html(data.html);
                $('.'+wrapper).change();
                // alert(data.html);
            }else {
                 $('.'+wrapper).html(data.html);
                 $('.'+wrapper).change();
            }
            if(data.status == 'errors'){
                $('.'+wrapper).html(data.html);
            }
        }
    });
});




$(document).on('click','.send-to-server-new', function (e) { 
    var id = $(this).data('id');
    var status = $(this).data('status');
    var url = $(this).data("url");
    var wrapper = $(this).data("wrapper");
    var modal = $(this).data("modal");
    $.ajax({
        type: 'POST',
        url: url,
        data:{id:id},
        dataType: 'json',
        success: function(data){
            if(data.status == 'success'){
                $(modal).modal('show');
                $(wrapper).html(data.html);
            }
            if(data.status == 'errors'){
                showNotify(data.message,data.status,data.url);
            }
        }
    }); 
});
$(document).on("change",'.review-video-type',function(e){
    var review_type = $(this).val();
    var html = '';
    if(review_type == 'video'){
        html += '<div class="col-lg-12"><div class="form-group"><label for="basiInput" class="form-label">Youtube Video ID</label>'
        +'<input type="text" placeholder="Youtube Video ID" name="video_id" class="form-control"></div></div>';
    }
    $(".video-review-html").html(html);
})


$(document).on('click','.delete-product-images', function (e) {
   e.preventDefault();
    var id = $(this).data('id');
    var url = $(this).attr('url');
    Swal.fire({
        title: "Are you sure ?",
        text: "You want to delete the data",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes",
        cancelButtonText: "No",
        closeOnConfirm: true,
        closeOnCancel: true
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
            type: "POST",
            url: url,
            data:{id:id},
            dataType: 'json',
            success: function(data){
                if(data.status == 'success'){
                    showNotify(data.message,data.status,data.url);
                }
                if(data.status == 'errors'){
                    showNotify(data.message,data.status,data.url);
                }
            }
        }); 
      } else if (result.isDenied) {
       showNotify('Action Cancelled','error','');
      }
    }); 
})
$(".switch-photo-video").change(function(e){
    var type = $(this).val();
    if(type === 'photo'){
        $(".gallery-image-show").show();
        $(".gallery-video-show").hide();
    }
    if(type === 'video'){
        $(".gallery-image-show").hide();
        $(".gallery-video-show").show();
    }
});


$(document).ready(function(){
    $('.switch-file-type').change(function(){
        var selectedFileType = $(this).val();
        // Hide all file input groups
        $('.form-group.image, .form-group.video, .form-group.documents').hide();
        // Show the selected file input group
        if (selectedFileType === 'image') {
            $('.form-group.image').show();
        } else if (selectedFileType === 'video') {
            $('.form-group.video').show();
        } else if (selectedFileType === 'doc') {
            $('.form-group.documents').show();
        }
    });
});


// $(document).on('change','.select_all', function (e) {
//     $("input[type=checkbox]"). prop('checked', $(this). prop('checked'));
// });

// $(document).on('change','.checkbox', function (e) {
//     var head_id = $(".gallery_heads").val();
//     var college_id = $(".college_id").val();
//     var filename = $(this).data('file');
//     var media_data = [];
//     if (this.checked) {
//         var media_id = $(this).val();
//         const mediaData = {
//             media_id: media_id,
//             head_id: head_id,
//             college_id: college_id,
//             filename: filename,
//         };
//         if(head_id == ''){

//             showNotify('Please select gallery head','error','');
//             $(this).prop('checked',false);
//         }else if(head_id != 'college_logo' && head_id != 'college_banner'  && head_id != 'prospectus_file'){
//             saveSingleData(mediaData,'save-single-gallery-media')
//         }else{
//             Swal.fire({
//                 title: "Are you sure ?",
//                 text: "You want to overwrite  the data",
//                 type: "warning",
//                 showCancelButton: true,
//                 confirmButtonClass: "btn-danger",
//                 confirmButtonText: "Yes",
//                 cancelButtonText: "No",
//                 closeOnConfirm: true,
//                 closeOnCancel: true
//             }).then((result) => {
//                 if (result.isConfirmed) {
//                     saveSingleData(mediaData,'save-single-gallery-media')
//                 } else if (result.isDenied) {
//                     showNotify('Action Cancelled','error','');
//                 }
//             });
//         }
//     } else {
//         var media_id = $(this).val();
//         deleteSingleData(media_id,'delete-single-gallery-media')
//     }
//     // if ($('.checkbox:checked').length > 0) {
//     //     $('.save-button').show();
//     //     $('.delete-media-button').show();
//     // } else {
//     //     $('.save-button').hide();
//     //     $('.delete-media-button').hide();
//     // }
// })

// $(document).on("click",'.submit-button',function(e) {
//     e.preventDefault();
//     var all_image_id = $('input[type="checkbox"]:checked');
//     var media_data = [];
//     var head_id = $(".gallery_heads").val();
//     var college_id = $(".college_id").val();
//     var countMedia = $('.media-data-with-checkbox').find('.checkbox:checked');
//     if (head_id == ''){
//         showNotify('Please select Gallery head','error','');
//     }else if(countMedia.length == 0){
//         showNotify('Please select atleast one media','error','');
//     }else{
//         all_image_id.each(function (index, selected) {
//             var mediaData = {
//                 media_id: $(this).val(),
//                 head_id: head_id,
//                 college_id: college_id,
//             };
//             media_data.push(mediaData);
//         });
//         console.log(media_data)
//         fetchData(media_data, head_id, college_id, '', 'save-media-to-gallery');
//     }
// });



// $(document).on("click",'.delete-media-button',function(e) {
//     e.preventDefault();
//     var all_image_id = $('input[type="checkbox"]:checked');
//     var media_data = [];
//     var countMedia = $('.media-data-with-checkbox').find('.checkbox:checked');
//     if(countMedia.length == 0){
//         showNotify('Please select atleast one media','error','');
//     }else{
//         all_image_id.each(function (index, selected) {
//             media_data.push($(this).val());
//         });
//         deleteMultipleData(media_data, 'delete-media-from-college');
//     }
// });


function fetchData(body,head_id = '',college_id = '', wrapper,url) {
    $.ajax({
        type: 'POST',
        url: base_url + url,
        data:{'data':JSON.stringify(body),'head_id': head_id,'college_id' : college_id},
        dataType: 'json',
        success: function(data){
            if(data.status === 'success'){
                if(wrapper != ''){
                    $(".close-modal").click();
                    $(wrapper).html(data.html);
                }else{
                    showNotify(data.message,data.status,data.url);
                }
            }
            if(data.status === 'errors'){
                showNotify(data.message,data.status,data.url);
            }
        }
    });
}
function saveSingleData(body,url) {
    $.ajax({
        type: 'POST',
        url: base_url + url,
        data:{'data': JSON.stringify(body)},
        dataType: 'json',
        success: function(data){
            if(data.status === 'success'){
                showNotify(data.message,data.status,data.url);
            }
            if(data.status === 'errors'){
                showNotify(data.message,data.status,data.url);
            }
        }
    });
}


function deleteSingleData(id,url) {
    $.ajax({
        type: 'POST',
        url: base_url + url,
        data:{'id':id},
        dataType: 'json',
        success: function(data){
            if(data.status === 'success'){
                showNotify(data.message,data.status,data.url);
            }
            if(data.status === 'errors'){
                showNotify(data.message,data.status,data.url);
            }
        }
    });
}


// --- vivek  

// $(document).on('click','.res-data', function (e) {
//     e.preventDefault();
//     var id      = $(this).data('id');
//     var url     = $(this).attr('url');
//     var table   = $(this).data('table');
//     var image   = $(this).data('image');
//     Swal.fire({
//         title: "Are you sure ?",
//         text: "You want to restore some data",
//         type: "warning",
//         showCancelButton: true,
//         confirmButtonClass: "btn-danger",
//         confirmButtonText: "Yes",
//         cancelButtonText: "No",
//         closeOnConfirm: true,
//         closeOnCancel: true
//     }).then((result) => {
//       if (result.isConfirmed) {
//         $.ajax({
//                 type: "POST",
//                 url: url,
//                 data:{id:id, table:table, image:image},
//                 dataType: 'html',
//                 success: function(data){
//                     if(data.status == 'success'){
//                         showNotify(data.message,data.status,data.url);
//                     }
//                     if(data.status == 'errors'){
//                         showNotify(data.message,data.status,data.url);
//                     }
//                     location.reload().delay(50000);
//                 }

//         }); 
//       } else if (result.isDenied) {
//        showNotify('Action Cancelled','error','');
//       }
//     }); 
// });



$('.get-data').click(function(){
    var  id       = $(this).attr('id');
    var table     = $(this).attr('table');
    var  url      = 'getDataByAjax';
    // alert(base_url + url);
    $.ajax({
        type: "POST",
        url: base_url + url,
        data:{id:id, table:table},
        dataType: 'json',
        success: function(data){
            alert(data.name);
        }
    }); 
 });


$(document).on('click','.dlt-data', function (e) {
    e.preventDefault();
    var id      = $(this).attr('id');
    var url     = $(this).attr('url');
    var page_name   = $(this).attr('page_name');
    var image   = $(this).attr('image');
    Swal.fire({
        title: "Are you sure ?",
        text: "You want to delete some data",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes",
        cancelButtonText: "No",
        closeOnConfirm: true,
        closeOnCancel: true
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
                type: "POST",
                url: url,
                data:{id:id, page_name:page_name, image:image},
                dataType: 'html',
                success: function(data){
                    if(data.status == 'success'){
                        showNotify(data.message,data.status,data.url);
                    }
                    if(data.status == 'errors'){
                        showNotify(data.message,data.status,data.url);
                    }
                    location.reload().delay(50000);
                }

        }); 
      } else if (result.isDenied) {
       showNotify('Action Cancelled','error','');
      }
    }); 
});

$(document).on('click','.status-data', function (e) {
    e.preventDefault();
    var id      = $(this).attr('id');
    var segment = 'admin/update_status';
    var page_name   = $(this).attr('page_name');

    // alert(id+url+table)
    Swal.fire({
        title: "Are you sure ?",
        text: "You want to Chnage Status",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes",
        cancelButtonText: "No",
        closeOnConfirm: true,
        closeOnCancel: true
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
                type: "POST",
                url: `${base_url}${segment}`,
                data:{id:id, page_name:page_name},
                dataType: 'html',
                success: function(data){
                    if(data.status == 'success'){
                        showNotify(data.message,data.status,data.url);
                    }
                    if(data.status == 'errors'){
                        showNotify(data.message,data.status,data.url);
                    }
                    location.reload().delay(50000);
                }

        }); 
      } else if (result.isDenied) {
       showNotify('Action Cancelled','error','');
      }
    }); 
});

$(document).on('click','.show-mess', function (e) {
    e.preventDefault();
    var mess   = $(this).attr('mess');
    Swal.fire({
        title: "Message",
        width: 600,
        text: mess,
        showCancelButton: false,
    });

   
});


$(document).on('click','.text', function (e) {
    e.preventDefault();

    var id          = $(this).attr('id');
    var segment     = 'text';
    var page_name   = $(this).attr('page_name');
    var qus         = $(this).attr('qus');
    // alert(qus);
    Swal.fire({
      title: "Are you sure ?",
      text: "Please enter remark",
      type: "warning",
      input: "text",
      name: "aaaa",
      inputAttributes: {
        autocapitalize: "off",
        
      },
      showCancelButton: true,
      cancelButtonText: "Cancel",
      showDenyButton: true,
      confirmButtonText: "Yes",
      showLoaderOnConfirm: true,
      denyButtonText: "No",
    
    allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
      if (result.isConfirmed) {
        var mess = $(".swal2-input").val();
        $.ajax({
            type: "POST",
            url: `${base_url}${segment}`,
            data:{id:id, page_name:page_name, mess:mess, qus:qus, status:1},
            dataType: 'html',
            success: function(data){
                if(data.status == 'success'){
                    showNotify(data.message,data.status,data.url);
                }
                if(data.status == 'errors'){
                    showNotify(data.message,data.status,data.url);
                }
                location.reload().delay(50000);
            }
        }); 
      } else if (result.isDenied) {
        var mess = $(".swal2-input").val();
        $.ajax({
            type: "POST",
            url: `${base_url}${segment}`,
            data:{id:id, page_name:page_name, mess:mess, qus:qus, status:2},
            dataType: 'html',
            success: function(data){
                if(data.status == 'success'){
                    showNotify(data.message,data.status,data.url);
                }
                if(data.status == 'errors'){
                    showNotify(data.message,data.status,data.url);
                }
                location.reload().delay(50000);
            }
        }); 
      }
    }); 
});

$(document).on('click','.textarea', function (e) {
    e.preventDefault();
    var id          = $(this).attr('id');
    var segment     = 'textarea';
    var page_name   = $(this).attr('page_name');
    var qus         = $(this).attr('qus');
    // alert(id+url+table+ qus);
    Swal.fire({
      // title: "Are you sure ?",
      text: "Please enter Your Message",
      type: "warning",
      input: "textarea",
      name: "aaaa",
      inputAttributes: {
        autocapitalize: "off",
        rows: 5, 
        cols: 30,
        required: "required" 
      },
      showCancelButton: true,
      cancelButtonText: "Cancel",
      // showDenyButton: true,
      confirmButtonText: "Submit",
      showLoaderOnConfirm: true,
      // denyButtonText: "No",
    
    allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
      if (result.isConfirmed && result.value.trim() !== '') {
         var mess = result.value;
        $.ajax({
            type: "POST",
            url: `${base_url}${segment}`,
            data:{id:id, page_name:page_name, mess:mess, qus:qus, status:1},
            dataType: 'html',
            success: function(data){
                if(data.status == 'success'){
                    showNotify(data.message,data.status,data.url);
                }
                if(data.status == 'errors'){
                    showNotify(data.message,data.status,data.url);
                }
                location.reload().delay(50000);
            }
        }); 
      } 
    }); 
});

$(document).on('click','.number', function (e) {
    e.preventDefault();

    var id          = $(this).attr('id');
    var segment     = 'number';
    var page_name   = $(this).attr('page_name');
    var qus         = $(this).attr('qus');
    // alert(id+url+table);
    Swal.fire({
      // title: "Are you sure ?",
      text: "Please enter ",
      type: "warning",
      input: "number",
      name: "aaaa",
      inputAttributes: {
        autocapitalize: "off", 
        required: "required"
      },
      showCancelButton: true,
      cancelButtonText: "Cancel",
      // showDenyButton: true,
      confirmButtonText: "Submit",
      showLoaderOnConfirm: true,
      // denyButtonText: "No",
    
    allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
      if (result.isConfirmed) {
        var mess = $(".swal2-input").val();
        $.ajax({
            type: "POST",
            url: `${base_url}${segment}`,
            data:{id:id, page_name:page_name, mess:mess, qus:qus, status:1},
            dataType: 'html',
            success: function(data){
                if(data.status == 'success'){
                    showNotify(data.message,data.status,data.url);
                }
                if(data.status == 'errors'){
                    showNotify(data.message,data.status,data.url);
                }
                location.reload().delay(50000);
            }
        }); 
      } 
    }); 
});


$(document).on('click','.newtext', function (e) {
    e.preventDefault();

    var id          = $(this).attr('id');
    var segment     = 'newtext';
    var page_name   = $(this).attr('page_name');
    var qus         = $(this).attr('qus');
    var c_id        = $(this).attr('c_id');
    // alert(qus);
    Swal.fire({
      title: "Are you sure ?",
      text: "Please enter remark",
      type: "warning",
      input: "text",
      name: "aaaa",
      inputAttributes: {
        autocapitalize: "off",
        
      },
      showCancelButton: true,
      cancelButtonText: "Cancel",
      showDenyButton: true,
      confirmButtonText: "Yes",
      showLoaderOnConfirm: true,
      denyButtonText: "No",
    
    allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
      if (result.isConfirmed) {
        var mess = $(".swal2-input").val();
        $.ajax({
            type: "POST",
            url: `${base_url}${segment}`,
            data:{id:id, page_name:page_name, mess:mess, c_id:c_id, qus:qus, status:1},
            dataType: 'html',
            success: function(data){
                if(data.status == 'success'){
                    showNotify(data.message,data.status,data.url);
                }
                if(data.status == 'errors'){
                    showNotify(data.message,data.status,data.url);
                }
                location.reload().delay(50000);
            }
        }); 
      } else if (result.isDenied) {
        var mess = $(".swal2-input").val();
        $.ajax({
            type: "POST",
            url: `${base_url}${segment}`,
            data:{id:id, page_name:page_name, mess:mess, c_id:c_id, qus:qus, status:2},
            dataType: 'html',
            success: function(data){
                if(data.status == 'success'){
                    showNotify(data.message,data.status,data.url);
                }
                if(data.status == 'errors'){
                    showNotify(data.message,data.status,data.url);
                }
                location.reload().delay(50000);
            }
        }); 
      }
    }); 
});



