$(document).ready(function () {

	const countrySelect = $('#country');
	const regionSelect = $('#region');

	countrySelect.on('change', function (e) {

		const currentCountryVal = parseInt(countrySelect.val(), 10);

		selectRegion(currentCountryVal);

	});

	regionSelect.on('change', function (e) {

		const currentRegionVal = parseInt(regionSelect.val(), 10);

		selectCity(currentRegionVal);

	});

	function selectRegion(id) {

		const regionSelect = $('#region');
		const blockRegion = $('#blockregion');
		const citySelect = $('#city');
		const blockCity = $('#blockcity');
		
		clear(citySelect);
		blockCity.fadeOut(300);

		clear(regionSelect);
		blockRegion.fadeOut(300);

		if (id > 0) {
			blockRegion.fadeIn(300);
			regionSelect.attr('disabled', false);
			regionSelect.load('index.php', {
				regionId: id
			});
		}
	}

	function selectCity(id) {

		const citySelect = $('#city');
		const blockCity = $('#blockcity');

		clear(citySelect);
		blockCity.fadeOut(300);

		if (id > 0) {
			blockCity.fadeIn(300);
			citySelect.attr('disabled', false);
			citySelect.load('index.php', {
				cityId: id
			});
		}
	}

	function clear (val) {
		val.empty();
		val.attr('disabled', true);
	}
});