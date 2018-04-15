function initMap() 
{
	var center = 
	{
		lat: 50.421939, 
		lng: 30.398102
	};

	var map = new google.maps.Map(document.getElementById('map'), 
	{
		zoom: 16,
		center: center
	});

	var marker = new google.maps.Marker(
	{
		position: center,
		map: map
	});
}