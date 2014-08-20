/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.width  = '1000px';
	config.height = '300px';
	config.filebrowserBrowseUrl      = '/Excel/js/ckfinder/ckfinder.html';
    config.filebrowserImageBrowseUrl = '/Excel/js/ckfinder/ckfinder.html?Type=Images';
    config.filebrowserFlashBrowseUrl = '/Excel/js/ckfinder/ckfinder.html?Type=Flash';
    config.filebrowserUploadUrl      = '/Excel/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    config.filebrowserImageUploadUrl = '/Excel/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    config.filebrowserFlashUploadUrl = '/Excel/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};