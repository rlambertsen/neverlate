(function ( $ ) {
	
	$.fn.niceselect = function()
	{
		
		return this.each(function(index,value)
		{
			/*SET VARIABLES
			============================*/
			var name = $(this).attr('name')
			var select = $(this);
			var num = index;
			var multi = false;
			var multix = '';
			var type= 'radio';
			var required = '';
			var classes = '';
			var selected = '';
			var placeholder = 'Select';
			
			if(select.attr('multiple') !== undefined)
			{
				multi = true;
				multix = '[]';
				type= 'checkbox';
			}		
			
			if($(this).attr('class') !== undefined)
			{
				var classes = $(this).attr('class');
			}
			
			if(select.find('[value="placeholder"]').length > 0)
			{
				placeholder = select.find('[value="placeholder"]').html();
			}
			
			if(typeof( select.attr('required') ) != 'undefined')
			{
				required = 'required';
			}
			
			/*WRAP SELECT IN DIV
			-------------------------*/
			select.wrap('<div class="select_style '+classes+'"/>');
			$('<span class="selectcon fa">&#xf078;</span>').insertBefore(select);
			
			
			/*CREATE PLACEHOLDER + OPTION BOX
			--------------------------------------------*/
			$('<div class="niceselect '+name+'" data-multi="'+multi+'"><p class="top">'+placeholder+'</p><div class="value_wrapper"></div></div>').insertBefore(this)			
			
			
			/*CREATE OPTGROUP BOXES
			--------------------------------------------*/
			
			if(select.find('optgroup').length > 0)
			{
				select.find('optgroup').each(function(key, opt){
					select.siblings('.niceselect').children('.value_wrapper').append('<div class="opt opt'+key+'"><span class="optTitle">'+$(opt).attr('label')+'</span></div>')
					
						$(opt).find('option').each(function(index,value){
							
							
							var val;
							if($(this).val() == '')
							{ 
								
								 val = $(this).html();
							}
							else
							{
								 val = $(this).val();
							}
							
							var txt = $(this).html();
							
							
							selected = '';
							if(typeof( $(this).attr('selected') ) != 'undefined')
							{
								selected = 'checked';
								select.siblings('.niceselect').find('p.top').html(txt)
							}
							
							
							select.siblings('.niceselect').find('.opt'+key).append('<div class="values"><input type="'+type+'"  '+required+' '+selected+' style=" pointer-events: none;" name="'+name+multix+'" value="'+val+'" data-text="'+txt+'" id="'+index+name+index+'" /> <label class="nice_label" >'+txt+'</label></div>')

						})
					})
				
				
			}
			/*CREATE GENERAL OPTION FIELDS*/
			else
			{
				select.find('option').each(function(index,value){
							
						var $this = $(this);
						var val;
						if($(this).val() == '')
						{ 
							
							 val = $(this).html();
						}
						else
						{
							 val = $(this).val();
						}
						
						var txt = $(this).html();
						selected = '';
						if(typeof( $(this).attr('selected') ) != 'undefined')
						{
							selected = 'checked';
							select.siblings('.niceselect').find('p.top').html(txt)
						}
						
						
						select.siblings('.niceselect').children('.value_wrapper').append('<div class="values"><input type="'+type+'" '+required+' '+selected+' style=" pointer-events: none;" name="'+name+multix+'" value="'+val+'" data-text="'+txt+'" id="'+index+name+index+'" /> <label class="nice_label" >'+txt+'</label></div>')
						
					})

			}
			
			select.remove()
			select.attr('name','blobla')
			
			
			
			/*BIND CLICK FUNCTIONS (hide / show menu)
			===========================================*/
			$('body').on('click',function()
			{
				$('.niceselect .value_wrapper').hide();
				
				$('.select_style').removeClass('active')
			})
			
			$('body').on('click','.niceselect',function(e)
			{
				e.stopImmediatePropagation();
				if($(this).parent().hasClass('active'))
				{
					$(this).find('.value_wrapper').hide();
					$(this).parent().removeClass('active');
					console.log('here')
				}
				else
				{
					//$('.niceselect .value_wrapper').hide();
					$(this).children('.value_wrapper').show()
					$(this).parent().addClass('active')
				}
			})
			
			
			/*BIND CLICK FUNCTIONS (check values / update visual)
			=====================================================*/			
			
			$('body').on('click','.niceselect .value_wrapper .values',function(e){
				e.stopImmediatePropagation();
				var checkBoxes = $(this).find('input');
				 
				var par = $(this).parent().parent();
				if(par.attr('data-multi') == 'true')
				{
					
					 
					 if($(this).hasClass('active'))
					 {
					 	$(this).removeClass('active');
					 }
					 else
					 {
					 	$(this).addClass('active');
					 }
					
					 
				}
				else
				{
					 $(this).parent().parent().find('input[checked]').removeAttr('checked')
					 $(this).parent().parent().find('.active').removeClass('active');
					 
					 if($(this).hasClass('active'))
					 {
					 	$(this).removeClass('active');
					 }
					 else
					 {
					 	$(this).addClass('active');
					 }
					 
					 $('.niceselect .value_wrapper').hide();
					 $('.select_style').removeClass('active')
					 
				}
				 
				 
				 checkBoxes.prop("checked", !checkBoxes.prop("checked"));
				 
				 checkBoxes.trigger('change')
			})
			$('body').on('click','.niceselect .value_wrapper .values label',function(e){e.preventDefault()})
			$('body').on('change','.niceselect .values input',function(e){
				
				var par = $(this).closest('.niceselect')
				if(par.attr('data-multi') == 'true')
				{
					var number = par.find('input:checked').length;

					par.find('p.top').html(number + ' Selected')				
				}
				else
				{
					par.find('p.top').html($(this).attr('data-text'))
				}
			})

			
			
			
			/*SEARCH OPTIONS IN SELECT BOX
			----------------------------------------*/
		
		
		var string = '';
		$('body').on('keypress',function(e){
			
			if($('.value_wrapper').is(':visible'))
			{
				var clearString;
				$('.value_wrapper .highlight').removeClass('highlight')
				
				clearInterval(clearString)
				string = string+String.fromCharCode(e.which);
				
				if(string.length == 1)
				{
					string = string.toUpperCase();
				}			
				
				var thing = $('.value_wrapper:visible').find('label:contains('+string+')').first();
				
				
				$(thing).parent().addClass('highlight')
				if($('.value_wrapper:visible').find('.highlight').length > 0)
				{
					$('.value_wrapper:visible').stop().scrollTop($('.value_wrapper:visible').scrollTop() + $('.highlight').position().top)
				}
				clearString = setTimeout(function(){string = ''},500);
			}
			
			
			
		})

			
			
			
		})			
	}
	
}( jQuery ));