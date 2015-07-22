# Yo Facebook! plugin for [Craft CMS](http://buildwithcraft.com)

This plugin allows users to cache-bust Facebook's Open Graph data for a URL via a button. Typically, this is useful for when the social image for a page has changed and you need to tell Facebook to update their associated Open Graph data.

The button will only work when associated directly with an Entry (not embedded in a Matrix field) that has a unique URL. When creating a new entry, the button is disabled as no associated URL exists yet.

## Installation

To install Yo Facebook!, follow these steps:

1.  Upload the yofacebook/ folder to your craft/plugins/ folder.
2.  Create a new field using the "Yo Facebook! Button" fieldtype.
3.  Attach the field to the Singles or Entry Types that needs it.
4.  Clicking the button in an entry updates Facebook's data!

## Changelog

### 0.1.0

* Initial release
