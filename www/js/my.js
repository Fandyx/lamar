$(document).ready(function(){
    
  $('#ddmenu li').hover(function () {
     clearTimeout($.data(this,'timer'));
     $('ul',this).stop(true,true).slideDown(200);
  }, function () {
    $.data(this,'timer', setTimeout($.proxy(function() {
      $('ul',this).stop(true,true).slideUp(200);
    }, this), 100));
  });
	mapPointer();
});

function mapPointer(){
	
	
			// Define the latitude and longitude positions
			var latitude = parseFloat("10.997894");
			var longitude = parseFloat("-74.821677");
			var latlngPos = new google.maps.LatLng(latitude, longitude);
			// Set up options for the Google map
			var myOptions = {
				zoom: 17,
				center: latlngPos,
				mapTypeId: google.maps.MapTypeId.HYBRID
			};
			// Define the map
			map = new google.maps.Map(document.getElementById("map"), myOptions);
			// Add the marker
			var marker = new google.maps.Marker({
				position: latlngPos,
				map: map,
				title: "PC Pro Offices"
			});
		
}
