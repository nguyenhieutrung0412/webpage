$(document).ready(function(){

	
/// Overall ////////////////////////////////////////////////	
/*	$('div').each( function(){
		if ($(this).html() == '') $(this).hide();
	});
*/	
	/* Show call action Edit/Delete */
	$('.callAction').hover(
		function(){
			$(this).find('.callAction_hide').show();
		},
		function(){
			$(this).find('.callAction_hide').hide();
		}
	);
	
	
	/* Show call actions in List */
	$('.table_list tr').hover(
		function(){
			$(this).addClass('tr_hover').find('.th-actions').show();
		},
		function(){
			$(this).removeClass('tr_hover').find('.th-actions').hide();
		}
	);
	
/// Left Menu //////////////////////////////////////////////
	/*$('.side .menu h2').toggle(function(){
		save_status_menu(this.id,$(this).parent().find('a').css('display'));
		$(this).parent().find('a').stop(true, true).animate({
			height: 'toggle'
		},250);	

	},function(){
		save_status_menu(this.id,$(this).parent().find('a').css('display'));
		$(this).parent().find('a').stop(true, true).animate({
			height: 'toggle'
		},250);
		
	})*/
})

