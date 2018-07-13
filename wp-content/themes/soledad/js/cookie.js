jQuery( document ).ready( function ($) {
	jQuery( '.penci-gprd-accept, .penci-gdrd-show' ).on( 'click', function ( e ) {
		e.preventDefault();

		var $this = jQuery(this);
		$this.closest( '.penci-wrap-gprd-law' ).toggleClass('penci-wrap-gprd-law-close');
		
		jQuery.ajax( {
			type: "post",
			url : "http://localhost/soledad/wp-content/themes/soledad/cookie.php",
			data: "action=penci_law_footer&nonce=" + PENCILOCALIZE.nonce + "&data=" + $this.data( 'cookie' )
		} );
	} );
} );