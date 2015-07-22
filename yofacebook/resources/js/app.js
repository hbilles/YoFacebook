(function() {

	$('[data-yo-facebook-url]').on('click', function(e) {
		var entryUrl = $(this).data('yo-facebook-url');
		
		Craft.postActionRequest('yoFacebook/clearFacebookData', { entryUrl: entryUrl }, function(response) {
			if (response && response.success) {
				Craft.cp.displayNotice('Updated Facebook cache for this page.');
			} else {
				Craft.cp.displayError('Error updating Facebook cache for this page.');
			}
		});
	});

})();