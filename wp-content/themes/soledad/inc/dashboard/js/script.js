( function ( $ ) {
	'use strict';

	// Upload
	function soledad_upload_image_font( ) {
		soledad_upload_font( 'soledad-cf1' );
		soledad_upload_font( 'soledad-cf2' );
		soledad_upload_font( 'soledad-cf3' );
		soledad_upload_font( 'soledad-cf4' );
		soledad_upload_font( 'soledad-cf5' );
		soledad_upload_font( 'soledad-cf6' );
		soledad_upload_font( 'soledad-cf7' );
		soledad_upload_font( 'soledad-cf8' );
		soledad_upload_font( 'soledad-cf9' );
		soledad_upload_font( 'soledad-cf10' );

		soledad_delete_font( 'soledad-cf1' );
		soledad_delete_font( 'soledad-cf2' );
		soledad_delete_font( 'soledad-cf3' );
		soledad_delete_font( 'soledad-cf4' );
		soledad_delete_font( 'soledad-cf5' );
		soledad_delete_font( 'soledad-cf6' );
		soledad_delete_font( 'soledad-cf7' );
		soledad_delete_font( 'soledad-cf8' );
		soledad_delete_font( 'soledad-cf9' );
		soledad_delete_font( 'soledad-cf10' );
	}

	function soledad_upload_font( id_field ) {
		$( '#' + id_field + '-button-upload' ).click( function ( e ) {
			e.preventDefault();

			window.original_send_to_editor = window.send_to_editor;
			wp.media.editor.open( jQuery( this ) );

			// Hide Gallery, Audio, Video
			var _id_hide = '.media-menu .media-menu-item:nth-of-type';
			$( _id_hide + '(2)' ).addClass( 'hidden' );
			$( _id_hide + '(3)' ).addClass( 'hidden' );
			$( _id_hide + '(4)' ).addClass( 'hidden' );

			window.send_to_editor = function ( html ) {
				var link = $( 'img', html ).attr( 'src' );

				if ( typeof link == 'undefined' ) {
					link = $( html ).attr( 'href' );
				}
				$( '#' + id_field ).val( link );
				$( '#' + id_field + '-button-delete' ).removeClass( 'button-hide' );

				var splitLink = link.split( '/' );
				var fileName = splitLink[splitLink.length - 1].split( '.' );
				$( '#' + id_field + 'family' ).val( fileName[0] );

				window.send_to_editor = window.original_send_to_editor;
			};

			return false;

		} );
	}

	function soledad_delete_font( id_field ) {
		$( '#' + id_field + '-button-delete' ).click( function ( e ) {
			e.preventDefault();

			var result = window.confirm('Are you sure you want to delete this font?');
			if ( result == true ) {

				$( this ).addClass('button-hide');

				$( '#' + id_field ).val('');
				$( '#' + id_field + 'family' ).val('');
			}
		});
	}

	function soledadEnvatoCodeCheck( ) {
		var $checkLicense = jQuery( '#penci-check-license' ),
			$spinner = $checkLicense.find( '.spinner' ),
			$activateButton = $checkLicense.find( '.soledad-activate-button' ),
			$missing = $checkLicense.find( '.penci-err-missing' ),
			$length = $checkLicense.find( '.penci-err-length' ),
			$invalid = $checkLicense.find( '.penci-err-invalid' ),
			$checkError = $checkLicense.find( '.penci-err-check-error' ),
			$evatoCode = $checkLicense.find( '.evato-code' );

		$checkLicense.on( 'submit', function ( e ) {
			e.preventDefault();

			var evatoCode = $evatoCode.val(),
				serverId = $checkLicense.find( '.server-id' ).val();

			$spinner.addClass( 'active' );
			$missing.removeClass( 'penci-err-show' );
			$length.removeClass( 'penci-err-show' );
			$invalid.removeClass( 'penci-err-show' );
			$checkError.removeClass( 'penci-err-show' );

			if ( ! serverId ) {
				return false;
			}

			if( ! evatoCode ) {
				$missing.addClass( 'penci-err-show' );
				$spinner.removeClass( 'active' );
				return false;
			}

			if( evatoCode.length < 6 ) {
				$length.addClass( 'penci-err-show' );
				$spinner.removeClass( 'active' );
				return false;
			}

			$activateButton.prop('disabled', true);
			$evatoCode.prop('disabled', true);

			var data = {
				action: 'penci_check_envato_code',
				envato_code: evatoCode,
				serverId: serverId
			};

			$.post( PENCIDASHBOARD.ajaxUrl, data, function ( response ) {
				if ( ! response.success ) {
					$spinner.removeClass( 'active' );
					$activateButton.prop( 'disabled', false );
					$evatoCode.prop( 'disabled', false );

					if( response.data.is_wp_error ){
						$checkError.addClass( 'penci-err-show' );
					}else{
						$invalid.addClass( 'penci-err-show' );
					}
				}else{

					$( '.penci-activate-desc' ).html('Theme successfully activated. Thanks for buying our product.');
					$('#penci-check-license').hide();
					
					setTimeout(function(){ 
						window.location.replace('?page=soledad_dashboard_welcome');
					},3000);
					
				}
			} );
		});
	}

	// Auto activate tabs when DOM ready.
	$( soledad_upload_image_font  );
	$( soledadEnvatoCodeCheck );

} ( jQuery ) );
