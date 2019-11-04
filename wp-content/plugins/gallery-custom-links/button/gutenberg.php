<?php

class Meow_Gallery_Custom_Links_Button_Gutenberg {

	public function __construct( $core ) {
    $this->core = $core;
    add_filter( 'mgcl_linkers', array( $this, 'linker' ), 100, 7 );
	}

	function linker( $handled, $element, $parent, $mediaId, $url, $rel, $target ) {
    // Let's look for the closest link tag enclosing the image

    $elemBlocksGalleryItem = $parent->parent();

    if ( $handled || $elemBlocksGalleryItem->class !== 'blocks-gallery-item' ) {
      return $handled;
    }

    $potentialLinkNode = $parent;
    $css = 'position: absolute; height: auto; font-size: 15px; text-decoration: none;
      padding: 2px 10px; bottom: 5px; left: 5px; box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.5);
      border-radius: 10px; width: calc(100% - 10px); text-align: center; background: rgba(15, 115, 239, 0.80); color: white;';
    $css_hover = 'background: rgba(15, 115, 239, 0.9);';

    $id = uniqid();
    $style = "<style>#mgcl-${id} a { ${css} } #mgcl-${id} a:hover { ${css_hover} }</style>";

    if ( $this->core->enableLogs ) {
      error_log( 'Linker: Will embed the IMG tag.' );
    }
    $label = $value = get_option( 'mgcl_button_label', "Click here" );
    if ( $this->core->parsingEngine === 'HtmlDomParser' ) {
      $elemBlocksGalleryItem->innertext = $elemBlocksGalleryItem->innertext . $style . '<div id="mgcl-' . $id . '"><a href="' . $url . 
        '" class="custom-link-button no-lightbox" onclick="event.stopPropagation()" target="' . $target . '" rel="' . $rel . '">
        ' . $label . '</a></div>';
    }
    else {
      return false;
    }
    return true;
	}
}

?>