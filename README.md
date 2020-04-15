# CloudBudget gulp

cloudbudget-gulp is a custom WordPress theme based on a Landing page concept I discovered [online](https://dribbble.com/shots/8449132-CloudBudget-Business-Landing-Page-Figma-Freebie).

## Installation

**Note:** Installing this theme requires you to also install a database for the purpose of loading in the ACF Pro fields. Therefore, all content including the media files and themes will be overwritten. Similar to a fresh install of WordPress

### Plugins

- [ACF Pro](https://www.advancedcustomfields.com/pro/)
- [Contact form 7](https://en-gb.wordpress.org/plugins/contact-form-7/)

### Theme

Install theme into the WordPress themes directory

```
$ git clone https://github.com/baillieogrady/cloudbudget-gulp
```

**OR**

Download this repo and place it in the following directory:

```
wp-content/themes/
```
**OR**

Download this repo and upload via the WordPress GUI, at the following url:

```
https://yourwebsite.com/wp-admin/themes.php
```

### Database

You'll notice a file named **aio.wpress** in this repo. This is a file containing all the database information to initally setup the custom ACF Pro fields.

Simply import this via the [**all-in-one wp migration plugin**](https://en-gb.wordpress.org/plugins/all-in-one-wp-migration/).

### Login details

```
https://yourwebsite.com/login
```

Username: admin  
Password: admin

## Theme development

* Run `yarn` from the theme directory to install dependencies
* Run `gulp` from the theme directory to spin up a hot reload server.

## Contributing

```
$ git clone https://github.com/baillieogrady/cloudbudget-gulp
```
