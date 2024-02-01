"use strict";

// Class definition
var KTAppSidebar = function () {
	// Private variables
	var menu;
	var menuWrapper;

	var handleSecondaryMenuScroll = function() {
		var menuActiveItem = menuWrapper.querySelector(".menu-link.active");

		if ( !menuActiveItem ) {
			return;
		} 

		if ( KTUtil.isVisibleInContainer(menuActiveItem, menuWrapper) === true) {
			return;
		}

		menuWrapper.scroll({
			top: KTUtil.getRelativeTopPosition(menuActiveItem, menuWrapper),
			behavior: 'smooth'
		});
	}

	// Public methods
	return {
		init: function () {
			// Elements
			menu = document.querySelector('#kt_app_sidebar_secondary_menu');
			menuWrapper = document.querySelector('#kt_app_sidebar_secondary_menu_wrapper');
			
			if ( menu === null || menuWrapper === null) {
				return;
			}

			if ( menuWrapper ) {
				handleSecondaryMenuScroll();
			}
		}
	};
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
	KTAppSidebar.init();
});