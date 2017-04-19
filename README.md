# NerdQ Theme

A base theme for the [Wordpress](http://wordpress.org) platform developed by [Codelation](https://codelation.com).

## Install Server (For Mac Development Environment)

1. Download [DesktopServer](http://codelation-wordpress-development.s3.amazonaws.com/dsl-mac-v382.dmg) and follow install instructions.
- Open `Applications/XAMPP/DesktopServer` and allow administrator privileges
- Start web and database services
- Create a new development website
- Enter `Site Name`, `Blueprint`, and `Site Root`
- The site should be up and running on the `Site Name` you set in the previous step and will run you through the Wordpress Setup.

## Install Compass Related Assets

Assuming that you already have our development environment setup we just need to install a couple of gems.

Install Compass CSS Authoring Framework

`gem install compass`

Install Sass-Globbing to be able to import all scss files in a directory

`gem install sass-globbing`

### Codelation Mixins

We also natively include all of the [Codelation Mixins](https://github.com/codelation/codelation_assets/) from the Codelation Assets project. This is manually setup, so any updates to the Codelation Assets project will need to be manually added to `assets/vendor/codelation`

## Install Theme

1. Clone this project into the wordpress directory you just created under `wp-content/themes/`
- Log into the Wordpress Admin and switch the theme to the `NerdQ Theme`
- Navigate to the `nerdq/assets` directory and type `compass watch`

### Stylesheets

- `nerdq/style.css` imports from `nerdq/css/style.css` to keep everything in the Wordpress world happy.
- `nerdq/css/style.css` imports all of the generated styles `nerdq/assets/stylesheets/style.scss`:
  - `nerdq/stylesheets/components/*`
  - `nerdq/stylesheets/views/*`
- `nerdq/assets/stylesheets/_base.scss` includes all of the codelation-assets mixins and must be included in every scss file in which to use a codelation-assets mixin
- `nerdq/assets/stylesheets/_variables.scss` is used to declare all local variables and is included in `_base.scss`
