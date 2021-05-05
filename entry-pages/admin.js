	jQuery(function($){
			$('#btncollapzion').Collapzion({
	            _child_attribute:[
	              	{
	                  'label':'Add New Member',
	                  'url':'../add/reg-newmembers.php',
	                  'icon': '&#xE7FE;'
	              	},
	              	{
		              'label':'New Payment  ',
		              'url':'../add/newPayment.php',
		              'icon':'&#xE227;'
	              	},
	              
	          	],
	          	_main_btn_color:'#4285f4;',
	          	_child_btn_color:'#f4645f;',
				
        	});
		});

         var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
