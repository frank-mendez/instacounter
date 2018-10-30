/* 
	
  Author: Frank R. Mendez
  Date: 10/30/2018
  Description: Custom JavaScript for Insta Counter
  Company: Blue Edge Business Solutions

 */

(function(){

	function checkHiddenClass() {
		$('.services-row').addClass('hidden');
	}


	function selectService() {
		$('#services').on('change', function() {
			var serviceSelected = $(this).find(":selected").val();
			console.log(serviceSelected);
			switch(serviceSelected) {
				case 'social-media-management':
					checkHiddenClass();
					$('#social-media-management').removeClass('hidden');
					break;
				case 'social-media-ads':
					checkHiddenClass();
					$('#social-media-ads').removeClass('hidden');
					break;
				case 'wordpress':
					checkHiddenClass();
					$('#wordpress').removeClass('hidden');
					break;
				case 'blogs':
					checkHiddenClass();
					$('#blogs').removeClass('hidden');
					break;
				case 'email':
					checkHiddenClass();
					$('#email').removeClass('hidden');
					break;
				case 'flyer':
					checkHiddenClass();
					$('#flyer').removeClass('hidden');
					break;
				case 'seo':
					checkHiddenClass();
					$('#seo').removeClass('hidden');
					break;
				case 'branding':
					checkHiddenClass();
					$('#branding').removeClass('hidden');
					break;
				case 'google-adwords-it':
					checkHiddenClass();
					$('#google-adwords-it').removeClass('hidden');
					break;
				default:	
					return 0;
			}
		})
	}


   
	$(document).ready(function() {
		selectService();
	})


})(jQuery)