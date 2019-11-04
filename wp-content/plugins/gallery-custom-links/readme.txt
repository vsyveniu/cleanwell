=== Gallery Custom Links ===
Contributors: TigrouMeow
Tags: custom, links, gallery, gutenberg
Donate link: https://commerce.coinbase.com/checkout/d047546a-77a8-41c8-9ea9-4a950f61832f
Requires at least: 5.0
Tested up to: 5.2
Requires PHP: 7.0
Stable tag: 1.2.3

Gallery Custom Links allows you to link images from galleries to a specified URL. Tested with WordPress Gallery, Gutenberg, the Meow Gallery and others.

== Description ==

Gallery Custom Links allows you to link images from galleries to a specified URL. Tested with WordPress Gallery, Gutenberg, the Meow Gallery and others. The official page is here: [Gallery Custom Links](https://meowapps.com/plugin/gallery-custom-links/).

=== Usage ===

Two fields are added to your images, in your Media Library: Link URL and Link Target. If, at least, the Link URL is set up, this image will link to that URL every time it is used within a gallery. Lightbox will be automatically disabled for those images.

=== Compatibility ===

It currently works with the native WP Gallery, the Gutenberg Gallery, and the [Meow Gallery](https://wordpress.org/plugins/meow-gallery/). It should actually work with any gallery plugin using the 'gallery' class and Responsive Images (src-set). Let me know if you would like more galleries to be supported, it should be easy.

=== Filters ===

You can optimize (run the plugin only on the pages where you need it) and support more galleries (through CSS classes) easily by using filters. To know more about this, visit the official page, here: [Gallery Custom Links](https://meowapps.com/plugin/gallery-custom-links/).

=== Thanks ===

The motivation to build this plugin came from my users who had issues trying to use WP Gallery Custom Links. I realized that this plugin was working extremely well with the standard gallery, but would require too much rewriting for Gutenberg and other galleries, hence the creation of this plugin. I hope it will help.

Languages: English.

== Installation ==

1. Upload `gallery-custom-links` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Upgrade Notice ==

Replace all the files. Nothing else to do.

== Changelog ==

= 1.2.3 =
* Add: Label for CTA buttons.
* Fix: Moved the position of the CTA buttons in the DOM.

= 1.2.2 =
* Add: CTA Buttons for Meow Gallery, Native Galleries and Gutenberg Galleries.
* Add: Filter to... filter which images are actually managed by the plugin :) 
* Fix: Hopefully, the Reusable Blocks aren't broken anymore in the editor (I couldn't replicate the bug on this new version).
* Info: If you like the plugin, your reviews are welcome [here](https://wordpress.org/support/plugin/gallery-custom-links/reviews/?rate=5#new-post) :) Thank you!

= 1.2.0 =
* Add: This was asked to me a lot, so I have adding the settings in order to change the parameters of the plugin easily. It will be much easier to make it faster now.

= 1.1.5 =
* Fix: Simpler and probably better REST detection.

= 1.1.4 =
* Fix: Attempt to fix the way autoload is working.

= 1.1.3 =
* Fix: Avoid analyzing the html content if the parser returned a boolean or an empty string.

= 1.1.2 =
* Add: Rel can now be set to nofollow.

= 1.1.1 =
* Update: Defaults set to Output Buffering + HtmlDomParser. Those settings work for most.

= 1.1.0 =
* Update: Using HtmlDomParser fully (which should avoid broken HTML). It is possible to override the plugin hidden options to switch to different mode, but I am trying to find a mode that works for 99% of the users first.

= 1.0.9 =
* Update: Avoid interfering at all with all Ajax/Rest requests.
* Info: Sorry for the last bunch of updates, some way of modifying HTML works for some, and not for others, and I am still trying to find a solution which works for everyone.

= 1.0.8 =
* Update: Back to OB, maybe there should be an option for that.
* Update: Get all the images of the page/post content instead of within specific containers previously.

= 1.0.7 =
* Update: Not using OB anymore; going through the content filter (this behavior can be changed internally), better and faster this way.
* Fix: Avoid issues with static variables which are not registered on older PHP versions.

= 1.0.6 =
* Fix: Now works with the most tenacious lightboxes.
* Update: The way the HTML was modified to make sure it is compliant.

= 1.0.5 =
* Add: Filter to let the user enables/disables the plugin depending on conditions. Check the official page to know more about this: [Gallery Custom Links](https://meowapps.com/plugin/gallery-custom-links/).

= 1.0.4 =
* Fix: Support images embedded in a few layer of tags before the link tag.
* Add: Added a class on the a-tag, for the ones who would like to add some styling to linked images. The Meow Lightbox is already handling this, by avoiding showing a zoom cursor when hovering images.
* Add: Compatibility with extra galleries is made through a filter (which anybody can use) and the file mgcl_extra.php.
* Info: If you like the plugin, your reviews are welcome [here](https://wordpress.org/support/plugin/gallery-custom-links/reviews/?rate=5#new-post. ) :) Thank you!

= 1.0.2 =
* Fix: Now works with thumbnails in src.
* Update: Optimization (does not regenerate pages which aren't impacted by changes).
* Update: DiDom from 1.13 to 1.14.1.

= 1.0.0 =
* Update: If the ID of the Media is not found in the HTML, it will resolve it through the DB from the filename.

= 0.0.1 =
* First release.

== Screenshots ==

1. The fields.
