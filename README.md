# NSM Minify 1.0.0 Beta 1 - Compress CSS & JS

## Installation

1. [Download](http://github.com/newism/nsm.minify.ee_addon/zipball/master) the latest commit on the 'master' branch.
2. Rename the file to nsm_minify
3. Move to `/system/expressionengine/thirdparty`
4. Move `/system/expressionengine/thirdparty/nsm_minify/min` to the public root of your site
5. Edit `/min/groupsConfig.php`

## Tag reference

Only one tag for now: `{exp:nsm_minify:group_url}` with two params:

* `debug='y'` - Debug the compressed output
* `group=''` - The group of files you want to compress

Example: `{exp:nsm_minify:group_url group='css_screen'}`