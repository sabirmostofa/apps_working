
$(document).ready(function(){
	$('#loadingDiv').hide();
	$('.pagination').hide();
	$.get('process.php',{'feed':$('#fselector option:selected').text(),'genre':$('#gselector option:selected').text()},function(data){
			$('#ajax_return').html(data);			
			});
	$('#fsubmit').click(function(){	
		$('#counterInf').removeClass().addClass('-1');
			$('.paginator').each(function(){
				if($(this).attr('value')==1){
					$(this).css('background-color','green');
					
					}
				else
				$(this).css('background-color','');
				
				});
		
		$.get('process.php',{'feed':$('#fselector option:selected').text(),'genre':$('#gselector option:selected').text()},function(data){
			$('#ajax_return').html(data);			
			});
					
			
		});
		
	
	
	/*
	$('.paginator').click(function(){	
		var counter=$(this).attr('value');
			$.get('process.php',{'feed':$('#fselector option:selected').text(),'genre':$('#gselector option:selected').text(),'page':counter},function(data){
			$('#ajax_return').html(data);			
			});						
			$('.paginator').each(function(){
				if($(this).attr('value')==counter){
					$(this).css('background-color','green');
					
					}
				else
				$(this).css('background-color','');
				
				});
			
		
		});
		* */
	
	
	
	$('#ajax_return').ajaxStart(function() {
	$('.pagination').html('');
		$(this).fadeTo('slow',0.2);
        $('#loadingDiv').show();
    }).ajaxStop(function() {
		$('#loadingDiv').hide();
		$('.read-more').hide();
		
var counter=$('#ajax-content').attr('class');
var page =(counter/20)+1;

for(var i=1;i<page;i++){
	$('.pagination').append('<input type="button" value=\''+i+'\' class="paginator" style="float: left; margin-left: 5px;">');	
	}
	
	$('.paginator').each(function(){
				if($(this).attr('value')==$('#counterInf').attr('class')){
					$(this).css('background-color','green');
					
					}
				else
				$(this).css('background-color','');
				
				});

	$('.paginator').click(function(){	
		var pcounter=$(this).attr('value');
		$('#counterInf').removeClass().addClass(pcounter);
			$.get('process.php',{'feed':$('#fselector option:selected').text(),'genre':$('#gselector option:selected').text(),'page':pcounter},function(data){
			$('#ajax_return').html(data);			
			});						
			$('.paginator').each(function(){
				if($(this).attr('value')==$('#counterInf').attr('class')){
					$(this).css('background-color','green');
					
					}				
				else
				$(this).css('background-color','');
				
				});
			
		
		});
/*
	$('.paginator').each(function(){
		if($(this).attr('value')>=page)$(this).hide();		
		});
		* */
		
	$('.more').click(function(){
	$(this).prev().append($(this).next('.read-more').text()).hide().fadeIn('slow');
	$(this).hide();
	});
	

				
        $(this).css('opacity',1).hide().fadeIn('slow');
        $('.pagination').fadeIn('slow');
        			
    });


	});
