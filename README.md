# CloudBudget gulp

CloudBudget Gulp is a custom WordPress theme based on a landing page concept I discovered [online](https://dribbble.com/shots/8449132-CloudBudget-Business-Landing-Page-Figma-Freebie). The content on the website is populated via custom Gutenberg blocks. I used ACF Pro to create the individual fields on the Gutenberg Blocks.

[Demo](https://cloudbudget.baillieogrady.com)

## Usage

### Installation

1. [Download](https://baillieogrady.com/downloads/cloudbudget-gulp.zip) production built theme and upload via the WordPress theme uploader at the following url on your website:

```
https://yourwebsite.com/wp-admin/theme-install.php
```

2. [Import](https://github.com/baillieogrady/cloudbudget-gulp/blob/master/acf-export-2020-04-20.json) ACF Pro fields at the following url on your website:

```
https://yourwebsite.com/wp-admin/edit.php?post_type=acf-field-group&page=acf-tools
```
### Custom Gutenberg Blocks

- Hero
- Two Column
- Three Column
- Four Column

### Plugins required

- [ACF Pro](https://www.advancedcustomfields.com/pro/)
- [Contact Form 7](https://en-gb.wordpress.org/plugins/contact-form-7/)

## Theme development

### Installation

Clone this repo into your WordPress themes directory

```
$ git clone https://github.com/baillieogrady/cloudbudget-gulp
```

### Requirements

Make sure all dependencies have been installed before moving on:

* [WordPress](https://wordpress.org/) >= 4.7
* [PHP](https://secure.php.net/manual/en/install.php) >= 7.1.3 (with [`php-mbstring`](https://secure.php.net/manual/en/book.mbstring.php) enabled)
* [Composer](https://getcomposer.org/download/)
* [Node.js](http://nodejs.org/) >= 8.0.0
* [Yarn](https://yarnpkg.com/en/docs/install)

*See full roots sage source & setup [here](https://github.com/roots/sage)*

* Run `composer install` from the theme directory to install composer dependencies 
* Run `yarn` from the theme directory to install dependencies
* Update `resources/assets/config.json` settings:
  * `devUrl` should reflect your local development hostname
  * `publicPath` should reflect your WordPress folder structure (`/wp-content/themes/sage` for non-[Bedrock](https://roots.io/bedrock/) installs)

### Build commands

* `yarn start` — Compile assets when file changes are made, start Browsersync session
* `yarn build` — Compile and optimize the files in your assets directory
* `yarn build:production` — Compile assets for production
