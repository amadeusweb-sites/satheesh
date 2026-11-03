<?php
variables([
	VARLinkToSectionHome => true,
	VAREmail => 'satz87.dawn@gmail.com',
	VARPhone => $ph = '+91-',
	VARWhatsapp => whatsapp_clean($ph),
]);

function site_before_render() {
	autosetPageMenu([VARDontOverwriteLogo => true]);
}
