/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="js/libs/icon-fonts-ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'CaGov\'">' + entity + '</span>' + html;
	}
	var icons = {
		'ca-gov-icon-logo': '&#xe600;',
		'ca-gov-icon-home': '&#xe601;',
		'ca-gov-icon-menu': '&#xe602;',
		'ca-gov-icon-apps': '&#xe603;',
		'ca-gov-icon-search': '&#xe604;',
		'ca-gov-icon-chat': '&#xe605;',
		'ca-gov-icon-capitol': '&#xe606;',
		'ca-gov-icon-state': '&#xe607;',
		'ca-gov-icon-phone': '&#xe608;',
		'ca-gov-icon-email': '&#xe609;',
		'ca-gov-icon-contact-us': '&#xe66e;',
		'ca-gov-icon-calendar': '&#xe60a;',
		'ca-gov-icon-bear': '&#xe60b;',
		'ca-gov-icon-chat-bubble': '&#xe66f;',
		'ca-gov-icon-info-bubble': '&#xe670;',
		'ca-gov-icon-share-button': '&#xe671;',
		'ca-gov-icon-socialsharer_button': '&#xe671;',
		'ca-gov-icon-share-facebook': '&#xe672;',
		'ca-gov-icon-socialsharer_facebook': '&#xe672;',
		'ca-gov-icon-socialsharer_email': '&#xe673;',
		'ca-gov-icon-share-flickr': '&#xe674;',
		'ca-gov-icon-socialsharer_flickr': '&#xe674;',
		'ca-gov-icon-share-twitter': '&#xe675;',
		'ca-gov-icon-socialsharer_twitter': '&#xe675;',
		'ca-gov-icon-share-linkedin': '&#xe676;',
		'ca-gov-icon-socialsharer_linkedin': '&#xe676;',
		'ca-gov-icon-share-googleplus': '&#xe677;',
		'ca-gov-icon-socialsharer_googleplus': '&#xe677;',
		'ca-gov-icon-share-instagram': '&#xe678;',
		'ca-gov-icon-socialsharer_instagram': '&#xe678;',
		'ca-gov-icon-share-pinterest': '&#xe679;',
		'ca-gov-icon-socialsharer_pinterest': '&#xe679;',
		'ca-gov-icon-share-vimeo': '&#xe67a;',
		'ca-gov-icon-socialsharer_vimeo': '&#xe67a;',
		'ca-gov-icon-share-youtube': '&#xe67b;',
		'ca-gov-icon-socialsharer_youtube': '&#xe67b;',
		'ca-gov-icon-law-enforcement': '&#xe60c;',
		'ca-gov-icon-justice-legal': '&#xe60d;',
		'ca-gov-icon-at-sign': '&#xe60e;',
		'ca-gov-icon-attachment': '&#xe60f;',
		'ca-gov-icon-zipped-file': '&#xe610;',
		'ca-gov-icon-powerpoint': '&#xe611;',
		'ca-gov-icon-excel': '&#xe612;',
		'ca-gov-icon-word': '&#xe613;',
		'ca-gov-icon-pdf': '&#xe614;',
		'ca-gov-icon-share': '&#xe615;',
		'ca-gov-icon-facebook': '&#xe616;',
		'ca-gov-icon-linkedin': '&#xe617;',
		'ca-gov-icon-youtube': '&#xe618;',
		'ca-gov-icon-twitter': '&#xe619;',
		'ca-gov-icon-pinterest': '&#xe61a;',
		'ca-gov-icon-vimeo': '&#xe61b;',
		'ca-gov-icon-instagram': '&#xe61c;',
		'ca-gov-icon-flickr': '&#xe61d;',
		'ca-gov-icon-google-plus': '&#xe66d;',
		'ca-gov-icon-microsoft': '&#xe61e;',
		'ca-gov-icon-apple': '&#xe61f;',
		'ca-gov-icon-android': '&#xe620;',
		'ca-gov-icon-computer': '&#xe621;',
		'ca-gov-icon-tablet': '&#xe622;',
		'ca-gov-icon-smartphone': '&#xe623;',
		'ca-gov-icon-roadways': '&#xe624;',
		'ca-gov-icon-travel-car': '&#xe625;',
		'ca-gov-icon-truck-delivery': '&#xe627;',
		'ca-gov-icon-construction': '&#xe628;',
		'ca-gov-icon-bar-chart': '&#xe629;',
		'ca-gov-icon-pie-chart': '&#xe62a;',
		'ca-gov-icon-graph': '&#xe62b;',
		'ca-gov-icon-server': '&#xe62c;',
		'ca-gov-icon-download': '&#xe62d;',
		'ca-gov-icon-compass': '&#xe633;',
		'ca-gov-icon-sos': '&#xe634;',
		'ca-gov-icon-shopping-cart': '&#xe635;',
		'ca-gov-icon-video-camera': '&#xe636;',
		'ca-gov-icon-camera': '&#xe637;',
		'ca-gov-icon-green': '&#xe638;',
		'ca-gov-icon-loud-speaker': '&#xe639;',
		'ca-gov-icon-audio': '&#xe63a;',
		'ca-gov-icon-print': '&#xe63b;',
		'ca-gov-icon-medical': '&#xe63c;',
		'ca-gov-icon-zoom-out': '&#xe63d;',
		'ca-gov-icon-zoom-in': '&#xe63e;',
		'ca-gov-icon-important': '&#xe63f;',
		'ca-gov-icon-chat-bubbles': '&#xe640;',
		'ca-gov-icon-call': '&#xe641;',
		'ca-gov-icon-people': '&#xe642;',
		'ca-gov-icon-person': '&#xe643;',
		'ca-gov-icon-user-id': '&#xe644;',
		'ca-gov-icon-payment-card': '&#xe645;',
		'ca-gov-icon-skip-backwards': '&#xe646;',
		'ca-gov-icon-play': '&#xe647;',
		'ca-gov-icon-pause': '&#xe648;',
		'ca-gov-icon-skip-forward': '&#xe649;',
		'ca-gov-icon-mail': '&#xe64a;',
		'ca-gov-icon-image': '&#xe64b;',
		'ca-gov-icon-house': '&#xe64c;',
		'ca-gov-icon-gear': '&#xe64d;',
		'ca-gov-icon-tool': '&#xe64e;',
		'ca-gov-icon-time': '&#xe64f;',
		'ca-gov-icon-cal': '&#xe650;',
		'ca-gov-icon-check-list': '&#xe651;',
		'ca-gov-icon-document': '&#xe652;',
		'ca-gov-icon-clipboard': '&#xe653;',
		'ca-gov-icon-page': '&#xe654;',
		'ca-gov-icon-read-book': '&#xe655;',
		'ca-gov-icon-cc-copyright': '&#xe656;',
		'ca-gov-icon-ca-capitol': '&#xe657;',
		'ca-gov-icon-ca-state': '&#xe658;',
		'ca-gov-icon-favorite': '&#xe659;',
		'ca-gov-icon-rss': '&#xe65a;',
		'ca-gov-icon-road-pin': '&#xe65b;',
		'ca-gov-icon-online-services': '&#xe65c;',
		'ca-gov-icon-link': '&#xe65d;',
		'ca-gov-icon-magnify-glass': '&#xe65e;',
		'ca-gov-icon-key': '&#xe65f;',
		'ca-gov-icon-lock': '&#xe660;',
		'ca-gov-icon-info': '&#xe661;',
		'ca-gov-icon-arrow-up': '&#xe662;',
		'ca-gov-icon-arrow-down': '&#xe663;',
		'ca-gov-icon-arrow-left': '&#xe664;',
		'ca-gov-icon-arrow-right': '&#xe665;',
		'ca-gov-icon-binoculars': '&#xe632;',
		'ca-gov-icon-fire': '&#xe631;',
		'ca-gov-icon-travel-air': '&#xe626;',
		'ca-gov-icon-shield': '&#xe630;',
		'ca-gov-icon-cloud-upload': '&#xe62f;',
		'ca-gov-icon-cloud-download': '&#xe62e;',
		'ca-gov-icon-carousel-prev': '&#xe666;',
		'ca-gov-icon-carousel-next': '&#xe667;',
		'ca-gov-icon-arrow-prev': '&#xe668;',
		'ca-gov-icon-arrow-next': '&#xe669;',
		'ca-gov-icon-menu-toggle-closed': '&#xe66a;',
		'ca-gov-icon-carousel-play': '&#xe66a;',
		'ca-gov-icon-menu-toggle-open': '&#xe66b;',
		'ca-gov-icon-carousel-pause': '&#xe66c;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/ca-gov-icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());