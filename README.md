[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

Nateserk Techy News Wordpress Theme
===
* License GNU GPLv3 (http://choosealicense.com/licenses/gpl-3.0/)
* Based on Underscores http://underscores.me/.

Requirements
===
* Wordpress 4.7 or above
* LAMP Stack

Change Logs
===
Version 1.1 (Coming soon)
-----------
* Post Sharing Option.
* `Complex` header theme.
* Facebook comment integration.

Version 1.0 (10/29/2017)
-----------
* Consistent theme design on all parts (i.e. pages, posts, archives, comments,etc).
* Integrate basic social links options on the main page.
* Customizable site theme color options.
* Customizable layout and items on the home page options.
* Footer statement integration options.


Getting Started
---------------
Where things are
* hooks/ - Actions to be triggered in various parts of TinyCup Wordpress theme (i.e. loading specific headers, showing related posts).
* inc/options - Customizable options UI for end-users to add and update their contents without touching codes.
* init.php - Initialization of the theme
* customizer.php - Register options for end-user's customizable UI.
* template-parts/ - PHP/HTML reusable templates for single.php, header.php, footer.php, and page.php.
* assets/ - All the external library, css, and js files, including the main one.


Where things are
----------------
* hooks/ - Actions to be triggered in various parts of the theme (i.e. loading specific headers, showing related posts).
* inc/options - Customizable options UI for end-users to add and update their contents without touching codes.
* init.php - Initialization of the theme including default values.
* customizer.php - Register options for end-user's customizable UI.
* sanitize-functions.php - Sanitize functions/callbacks for customizer.
* template-parts/ - PHP/HTML reusable templates.
* assets/ - All the external library, css, and js files, including the main one.

How to install NateSerk Techy-news theme for Wordpress website?
===
* Run the following command:
```
sh zip_theme.sh
```

This will generate a zip file of this theme. It is located in `export` folder on your computer.

If you would like to rename the theme name in the generated zip theme file,
* Run the following command:
```
sh zip_theme.sh --rename YOUR_PREFERRED_THEME_NAME
```
