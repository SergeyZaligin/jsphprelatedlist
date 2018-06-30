$(document).ready(function () {

	const countrySelect = $('#country');

	countrySelect.on('change', function (e) {

		const currentCountryVal = parseInt(countrySelect.val(), 10);

		selectRegion(currentCountryVal);

	});

	function selectRegion(id) {

		const regionSelect = $('#region');
		const blockRegion = $('#blockregion');

		if (id > 0) {
			blockRegion.fadeIn(300);
			regionSelect.attr('disabled', false);
			regionSelect.load('index.php', {
				regionId: id
			});
		}
	}
});