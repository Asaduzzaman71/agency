
	<script src="{{ asset('app/js/jquery.js')}}"></script>
	<script src="{{ asset('app/js/plugins.min.js')}}"></script>
	<script src="{{ asset('app/js/jquery.hotspot.js')}}"></script>
	<script src="{{ asset('app/js/components/rangeslider.min.js')}}"></script>

	
	
	<script src="{{ asset('app/js/functions.js')}}"></script>


	<script>
		let lang = "{{ app()->getLocale() }}"
		console.log('locale',lang)
		jQuery(document).ready( function() {
			var pricingCPU = 1,
				pricingRAM = 1,
				pricingStorage = 10,
				elementCPU = $(".range-slider-cpu"),
				elementRAM = $(".range-slider-ram"),
				elementStorage = $(".range-slider-storage");

			elementCPU.ionRangeSlider({
				grid: false,
				values: [1,2,4,6,8],
				postfix: ' Kg',
				onStart: function(data){
					pricingCPU = data.from_value;
				}
			});

			elementCPU.on( 'change', function(){
				pricingCPU = $(this).prop('value');
				calculatePrice( pricingCPU, pricingRAM, pricingStorage );
			});

			elementRAM.ionRangeSlider({
				grid: false,
				step: 1,
				min: 1,
				from:1,
				max: 32,
				postfix: ' Cm',
				onStart: function(data){
					pricingRAM = data.from;
					console.log(data);
				}
			});

			elementRAM.on( 'onStart change', function(){
				pricingRAM = $(this).prop('value');
				calculatePrice( pricingCPU, pricingRAM, pricingStorage );
			});

			elementStorage.ionRangeSlider({
				grid: false,
				step: 10,
				min: 10,
				max: 100,
				postfix: ' Cm',
				onStart: function(data){
					pricingStorage = data.from;
				}
			});

			elementStorage.on( 'change', function(){
				pricingStorage = $(this).prop('value');
				calculatePrice( pricingCPU, pricingRAM, pricingStorage );
			});

			calculatePrice( pricingCPU, pricingRAM, pricingStorage );

			function calculatePrice( cpu, ram, storage ) {
				var pricingValue = ( Number(cpu) * 10 ) + ( Number(ram) * 8 ) + ( Number(storage) * 0.5 );
				jQuery('.cpu-value').html(pricingCPU);
				jQuery('.ram-value').html(pricingRAM);
				jQuery('.storage-value').html(pricingStorage);
				jQuery('.cpu-price').html('$'+pricingCPU * 10);
				jQuery('.ram-price').html('$'+pricingRAM * 8);
				jQuery('.storage-price').html('$'+pricingStorage * 0.5);
				jQuery('.pricing-price').html( '$'+pricingValue );
			}
		});

		jQuery(window).on( 'load', function(){
			$('#hotspot-img').hotSpot();
		});
	
		/* -------------------------------------------------------------------------- */
		/*                                TRUCK ORDEER                                */
		/* -------------------------------------------------------------------------- */
		jQuery('#truck_id').on('keyup', function(event){
		
			jQuery('#truck_my_order').attr('href', '/order/' + event.target.value +'?lang='+ lang)
			// jQuery('#truck_my_order').attr('href', lang + '/order/' + event.target.value)
		})
		jQuery('#truck_my_order').on('click', function(event){
			var link = jQuery('#truck_my_order').attr('href')
			if(link.length > 8) window.location.replace(link)
		})
	</script>