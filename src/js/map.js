(function () {
	let ymaps = window.ymaps;
	if (document.querySelector('.contacts-map')) {
		ymaps.ready(init);
		removePlaceholder();
	}
	function init () {
		var myMap = new ymaps.Map('map', {
			center: [51.652766, 39.150388],
			zoom: 17
		});
		var myPlacemark = new ymaps.Placemark([51.6528, 39.150390], {
			hintContent: 'улица Домостроителей, 17',
			balloonContent: 'улица Домостроителей, 17'
		});
		myMap.geoObjects.add(myPlacemark);
	}
	function removePlaceholder () {
		document.querySelector('.js-map-preloader').hidden = 'true';
	}
})();
