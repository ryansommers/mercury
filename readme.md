# Mercury. A P2 Child Theme.

Mercury is a modern and responsive child theme for [WordPress's P2](http://p2theme.com/). The planet Mercury was "named Mercurius by the Romans because it appears to move so swiftly," a little like P2.

This is my first attempt at a child theme, and the first open source project I've worked on, so please be gentle!

## Core Template Changes
* `header.php`
  - Viewport meta tag added to support zooming.
  - Stylesheet link to Google Open Sans was added.
  - The sidebar div was removed from the header.

* `footer.php`
  - The sidebar div was added to the footer.

* `functions.php`
  - Removes the native P2 iPhone styles and the viewport meta tag that disabled zooming.

* `style.css` 
  - Lots of high specificity rules to override the parent theme. It's written mobile first, with media queries immediately following their default values.

## Demo and Download
View a demo of the theme at [ryansommers.com/mercury](http://ryansommers.com/mercury).

You can download Mercury at [github.com/ryansommers/mercury](https://github.com/ryansommers/mercury).

## Changelog

### Version 1.0.2
More updates for WordPress.org Theme Approval

functions.php
- Enqueued Google Fonts

header.php
- Removed Google Fonts

style.css
- Changed Template name to just 'p2'
- Added required license and tags
- Added styles for display of P2 recent comments avatars
- Misc cleanup

Removed screenshot.jpg, replaced with screenshot.png

### Version 1.0.1
- Updated style.css for WordPress Unit Test styles.
- Added styles for P2's mobile navigation.
- Updated readme.md with better styles.

### Version 1.0.0
- Initial release.
