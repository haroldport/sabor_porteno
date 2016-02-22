$(function(){
	var toggleMenu = $('#toggle-menu');
	var nav = $('#main-nav');
	toggleMenu.on('click', function(){
		nav.add($('body')).toggleClass('show');
	});

	$(".establishment").each(function (){
		var geopoint = $(this).children('input').attr('value');
		var divId = '#' + $(this).attr('id');
		$(divId).on('click',function(){
			var latLon = geopoint.split(';');
			var latlng = new google.maps.LatLng(Number(latLon[0]), Number(latLon[1]));
			var mapDiv = $('#map');
			var mapOptions = {
				center: latlng,
				zoom: 17
			};
			var map = new google.maps.Map(mapDiv[0], mapOptions);
			var marker = new google.maps.Marker({
				position: latlng,
				title: latLon[2],
				map: map
			});
			google.maps.event.addListener(marker, 'click', (function (marker) {
				return function () {
					window.location.href = "/establishment/" + latLon[3];
				}
			}(marker)))
		});
	});
});
