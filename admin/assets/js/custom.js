$(document).ready( function(){

	'use strict';

	var handler = "/inc/handler.php";
	var formMessage;
	var redirect = false;


	$(document).on('submit', '.__form_js', function(){
		formMessage = $('#form-message', this);

		$('.__loading-btn').css('display', 'none');
		$('.__loading-spinner').css('display', 'inline-block');
		var serialize = $(this).serialize();

		$.ajax({
			url: handler,
			dataType: "json",
			method: "post",
			data: serialize,
			success: function(data)
			{
				if (data.success && data.redirect && data.location != null) {
					window.location.replace(data.location);
				} else if(data.success && data.redirect) {
					var formAction = $('.__form_js').attr('action');
					var formMethod = $('.__form_js').attr('method');
					var formData = serialize.split('&');
					var form = '<form action="'+ formAction +'" method="'+ formMethod +'">';

					for (var i = formData.length - 1; i >= 0; i--) {
						var input = formData[i].split('=');

						if (input[1]) {
							form += '<input type="text" name="'+ input[0] +'" value="' + input[1] + '" />'
						}
					}

					form += '</form>';
					var cForm = $(form);
					$('body').append(cForm);
					cForm.submit();
				} else if (data.success && data.clear) {
					formMessage.html('<div class="alert alert-success mt-4"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i></button><span>' + data.message + '</span></div>');
					$('.__form_js')[0].reset();
				} else if (data.success) {
					formMessage.html('<div class="alert alert-success mt-4"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i></button><span>' + data.message + '</span></div>');
				} else {
					formMessage.html('<div class="alert alert-danger mt-4"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i></button><span>' + data.message + '</span></div>');
				}

				$('.__loading-btn').css('display', 'inline-block');
				$('.__loading-spinner').css('display', 'none');
			},
			error: function(ts, error, e)
			{
				alert(ts.responseText);
				console.log(ts);
			}
		});

		return false;
	});


	$(document).on('submit', '.__form_data_js', function(){
		
		$('#__loading-btn').css('display', 'none');
		$('#__loading-spinner').css('display', 'block');

		var formData = new FormData($(this)[0]);
		
		$.ajax({
			url: handler,
			dataType: "json",
			method: "post",
			data: formData,
			async: false,
			success: function(data)
			{
				if (data.success && data.redirect && data.location != null) {
					window.location.replace(data.location);
				} else if (data.success && data.clear) {
					formMessage.html('<p class="alert alert-success __form-message">' + data.message + '</p>');
					$('#__loading-btn').css('display', 'block');
					$('#__loading-spinner').css('display', 'none');
					$(this)[0].reset();
				} else if (data.success) {
					formMessage.html('<p class="alert alert-success __form-message">' + data.message + '</p>');
				} else {
					formMessage.html('<p class="alert alert-danger __form-message">' + data.message + '</p>');
				}
				$('#__loading-btn').css('display', 'block');
				$('#__loading-spinner').css('display', 'none');
			},
			error: function(ts)
			{
				alert(ts.responseText);
			},
			cache: false,
	        contentType: false,
	        processData: false
		});
				
		return false;		
	});


	$(document).on('click', '.__edit_modal', function(){

		var modal = $(this).attr('data-src');
		var id = $(this).attr('data-id');
		var desc = $(this).attr('data-desc');

		$.ajax({
			url: handler,
			dataType: "json",
			method: "post",
			data: {'__edit_modal_data': false, 'id': id, 'desc' : desc},
			async: false,
			success: function(data)
			{
				var count = Object.keys(data.data).length;
				var key;

				for(key in data.data) {

					if ($('#'+key)[0].tagName == 'INPUT') {
						$('#'+key).val(data.data[key]);
						if ($('#'+key).attr('type') == 'checkbox' && data.data[key] == 1) {
							$('#'+key).attr('checked', 'checked');
						}
					} else if ($('#'+key)[0].tagName == 'SELECT') {
						$('#'+key).val(data.data[key]);
						$('#'+key+' option[value='+data.data[key]+']').attr('selected', 'selected');
					} else if($('#'+key)[0].tagName == 'TEXTAREA') {
						$('#'+key).val(data.data[key]);
					}
					// alert(key + ' => ' + data.data[key]);
				}

				$('#'+modal).modal('show');
			},
			error: function(ts)
			{
				alert(ts.responseText);
			}
		});
	});


	if ($('#uploadImageModel').length == 1 && $('#showImage').length == 1 && $('#uploadImage').length == 1) {
		var $imageCrop;
		var location = $('.uploadImageForm').attr('data-location');
        $imageCrop = $('#showImage').croppie({
            enableExif: true,
            viewport:
            {
                width:400,
                height:400,
                type:'square' //circle
            },
            boundary:
            {
                width:550,
                height:550
            }
        });


        $('#uploadImage').on('change', function(){
            var reader = new FileReader();
            reader.onload = function (event) {
                $imageCrop.croppie('bind', {
                    url: event.target.result
                }).then(function(){
                    console.log('jQuery bind complete');
                });
            }

            reader.readAsDataURL(this.files[0]);
            $('#uploadImageModel').modal('show');
        });


        $('#cropedImage').click(function(event){
            // alert("Button Clicked");
            $imageCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(response){
                $.ajax({
                    url: handler,
                    dataType: "json",
                    type: "post",
                    data:{"upload_image": response, 'image_location': location},
                    success:function(data)
                    {
                        if(data.success){
                        	alert(data.message);
                            // $('#uploadImageModel').modal('hide');
                            // $('#FlagImageURL').attr('value', data.message);
                        } else{
                            alert("Error : :'(");
                        }
                    },
                    error: function(ts, request, error){
                        alert(error + ' | ' + ts.responseText);
                        console.log(arguments);
                    }
                });
            })
        });
	}

	$(document).on('click', '.___delete', function(){
		var src = $(this).attr('data-src');
		var id = $(this).attr('data-id');

		// $.ajax({
		// 	url: handler,
		// 	dataType: "json",
		// 	method: "post",
		// 	data: {'delete_from':src, 'delete_id': id },
		// 	success: function(data)
		// 	{
		// 		// window.location.reload();
		// 		alert('delete');
		// 	},
		// 	error: function(ts, error, e)
		// 	{
		// 		alert(ts.responseText);
		// 		console.log(ts);
		// 	}
		// });

		swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            confirmButtonText: 'Yes, delete it!',
            buttonsStyling: false
        }).then(function(isConfirmed) {
        	if (isConfirmed.value) {

        		$.ajax({
					url: handler,
					dataType: "json",
					method: "post",
					data: {'delete_from':src, 'delete_id': id },
					success: function(data)
					{
						window.location.reload();
						// alert('delete');
					},
					error: function(ts, error, e)
					{
						alert(ts.responseText);
						console.log(ts);
					}
				});
        	}
        }).catch(swal.noop)
	});


	// Tog Table Hide Show

	$(function(){
		$('#tableTog').click(function(){
			if ($(this).is(':checked')) {
				$("#inventoryTable").hide();
			} else {
				$("#inventoryTable").show();
			}
		});

		$('#v-table').css('display', 'none');
		$('.__varient_sub_varient').click(function(){
			if ($(this).val() == 0) {
				$('#v-table').css('display', 'none');
				$('#p-table').css('display', 'block');
			} else if($(this).val() == 1) {
				$('#v-table').css('display', 'block');
				$('#p-table').css('display', 'none');

			}
		});

	});

});