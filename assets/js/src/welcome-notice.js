/* global lmscourseFSEData, jQuery */

import { installPlugin, activatePlugin } from './common/plugin-install';

function handleWelcomeNotice( $ ) {
	const {
		activating,
		installing,
		done,
		activationUrl,
		redirectUrl,
		ajaxUrl,
		nonce,
		masteriyoRefNonce,
		masteriyoStatus,
	} = lmscourseFSEData;

	const installBtn = $(
		'.lmscourse-fse-welcome-notice #lmscourse-fse-install-masteriyo'
	);
	const dismissBtn = $( '.lmscourse-fse-welcome-notice .notice-dismiss' );
	const notice = $( '.lmscourse-fse-welcome-notice' );
	const installText = installBtn.find( '.text' );
	const installSpinner = installBtn.find( '.dashicons' );

	const hideAndRemoveNotice = () => {
		notice.fadeTo( 100, 0, () => {
			notice.slideUp( 100, () => {
				notice.remove();
			} );
		} );
	};

	const activateMasteriyo = async () => {
		installText.text( activating );
		await activatePlugin( activationUrl );

		await $.post( ajaxUrl, {
			nonce: masteriyoRefNonce,
			action: 'lmscourse_fse_set_masteriyo_ref',
		} );

		installSpinner.removeClass( 'dashicons-update' );
		installSpinner.addClass( 'dashicons-yes' );
		installText.text( done );
		setTimeout( hideAndRemoveNotice, 1500 );
		window.location.replace( redirectUrl );
	};

	$( installBtn ).on( 'click', async () => {
		installSpinner.removeClass( 'hidden' );
		installBtn.attr( 'disabled', true );

		if ( masteriyoStatus === 'active' ) {
			return;
		}

		if ( masteriyoStatus === 'installed' ) {
			await activateMasteriyo();
			return;
		}

		installText.text( installing );
		await installPlugin( 'learning-management-system' );
		await activateMasteriyo();
	} );

	$( dismissBtn ).on( 'click', () => {
		$.post( ajaxUrl, {
			nonce,
			action: 'lmscourse_fse_dismiss_welcome_notice',
			success: hideAndRemoveNotice,
		} );
	} );
}

document.addEventListener( 'DOMContentLoaded', () => {
	handleWelcomeNotice( jQuery );
} );
