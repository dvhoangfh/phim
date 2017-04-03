$(document).ready(function() {

    var updateOutput = function(e)
	    {
	        var list   = e.length ? e : $(e.target),
	            output = list.data('output');
	        if (window.JSON) {
	            output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
	        } else {
	            output.val('JSON browser support required for this demo.');
	        }
	    };
	$(document).on('change','#dsphim',function(){
		var id = $(this).val();
		var name = $('#dsphim option:selected').text();
		var option = " <li class='dd-item' data-id='"+id+"'><div class='dd-handle'>"+name+"</div><i class='nestable-trash fa fa-trash'></i></li>";
		$('.dd-list').append(option);
	});

	$(document).on('click','.nestable-trash',function() {
		$(this).closest('li').remove();
	});

	$(document).on('click','#luu',function(){
		var output = $('.dd').nestable('serialize');
		var arr = [];
		for (var i = 0,length = output.length ; i < length ; i++) {
			arr.push({
	            id: output[i]['id'], 
	            stt:  i + 1
        	});
		}
		var array = arr;
		console.log(BASE_URL + '/banner/store');
		$.ajax({
				url: BASE_URL + '/banner/store',
				type: 'POST',
				data: {
					"_token": $('input[name="_token"]').val(),
					"arr" : array
				},
				success: function (response) {
					$('#thongbao').text('Cập nhật thành công');
					$('#luu').addClass('disable')
				}
		});//end ajax
		
		
	});
});	