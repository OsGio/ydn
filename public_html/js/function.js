$(function(){
	$('td[class^="ad_ads_title"] > :text').on('keyup', function(){
		var num = $(this).val().length;
		var d_id = $('td[class^="ad_ads_title"]').data('id');
		$('td[class^="title_num"]').text(num);
		$('input[class^="title_num"]').val(num);


		console.log(d_id);

	});

	$('p').data('role', 'add_btn').on('click', function(){
		var tb = $(this).closest('thead').next('tbody');
		var d_id = tb.children('tr:last').find('td').data('id');
		var class_name = tb.children('tr:last').find('td').attr('class');		
console.log(class_name);
		tb.append('<tr><td class='+class_name+' data-id='+(d_id+1)+'>test</td><input type="hidden" name="title_num[]" class="title_num[]" value=0><td class="title_num[]", data-id='+(d_id+1)+'>0</td></tr>');
	});

});


