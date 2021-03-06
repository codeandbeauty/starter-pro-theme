# WordPress Starter Pro Theme
A convenient source to create and develop a pro WordPress theme.

### Installation
Download or clone this repository.
````
git clone https://github.com/codeandbeauty/starter-pro-theme.git
````

### Usage
#### Manual Customization
* Change all instances of `codeandbeauty` into your theme's prefix in functions, files, and all area where prefix is required.
* Change all instances of `TEXTDOMAIN` into your themes' text domain slug.

#### Automation
Parameters:
* --folder = The folder/directory name of your theme. Usually the same with your desired theme name.
* --slug   = No spaces or hyphens. Must be one word. The text use to prefix functions, action and filter hooks, and other area the require prefixing.
* --domain = The text domain slug use in your theme

* Using Grunt *
````
$ grunt create-theme --folder=my-new-theme --slug=mynewtheme --domain=my
````

* Using Gulp */
````
$ grunt create-theme --folder=my-new-theme --slug=mynewtheme --domain=my
````

What the command do?
* It generate a new theme inside /wp-content/themes directory
* It replaces all required prefixes, slugs, and/or text domain.

What's next?
* Start building your pro WordPress theme!*
