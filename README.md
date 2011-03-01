# NSM Minify 1.0.0 - Compress CSS & JS

Simple and quick asset minification for ExpressionEngine 2 using [Minify 2.1.4b](http://code.google.com/p/minify/).

## Installation

1. [Download](http://github.com/newism/nsm.minify.ee_addon/zipball/master) the latest commit on the 'master' branch.
2. Rename the file to nsm_minify
3. Move to `/system/expressionengine/thirdparty`
4. Move `/system/expressionengine/thirdparty/nsm_minify/min` to the public root of your site
5. Edit `/min/groupsConfig.php` and create new groups / add files to existing groups (for use with the `groups=` parameter)

## Tag reference

### `{exp:nsm_minify:group_url}`

Minimizes all files based on the `/min/groupsConfig.php`

* `debug='y'` - Debug the compressed output
* `group=''` - The group of files you want to compress

Example: `{exp:nsm_minify:group_url group='css_screen'}`

### `{exp:nsm_minify:files_url}`

* `debug='y'` - Debug the compressed output
* `files=''` - Comma delimited list of files you want to compress, must be of the same type (css, js)

Example: `{exp:nsm_minify:files_url files='/file1.css,/file2.css'}`

## Samples

Sample templates and theme files are available in the samples directory

## Further reading

* http://code.google.com/p/minify/
* http://johndwells.com/software/minimee - Similar plugin