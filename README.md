# Skeleton plugin blocks Gutenberg


## Contribution 

- Twitter: [@TDeneulin][twitter-account]
- Pull requests and stars are always welcome 🙏🏽 For bugs and feature requests, [please create an issue](https://github.com/Gmulti/skeleton-plugin-blocks-gutenberg/issues)

## Getting started 🚀 

Install `skeleton-plugin-blocks-gutenberg`

```sh
cd wp-content/plugins
git clone https://github.com/Gmulti/skeleton-plugin-blocks-gutenberg.git
```

**Warning:** The `public` and `vendor` folders do not exist if you do not prepare the plugin.

Prepare your plugin.

```sh
cd wp-content/plugins/skeleton-plugin-blocks-gutenberg
php scripts/prepare-plugin.php -n "Plugin Name"
```

**You do not want to use this script?**

Use :
* `composer update` (create `vendor` directory)
* `npm install` or `yarn` (install `node_modules`)
* `brunch w` (compile files and create `public` directory)

## Plugin architecture

This is a non-exhaustive representation of the plugin folder architecture with the essential parts:

```
skeleton-plugin-blocks-gutenberg
├── readme.txt
├── plugin.php
├── node_modules
├── config
├── package.json
├── composer.json
├── .gitignore
├── .brunch-config.json
└── app
    └── javascripts
        └── blocks
            └── documentation
                └── components
                    └── CustomBlock
                        └── index.spec.js
                        └── index.js
                └── index.js
            └── hello
                └── index.js
                └── index.scss
            └── index.js
        └── index.js
└── languages
└── scripts
    └── deploy.php
    └── prepare-plugin.php
    └── test.js
└── src
    └── PluginReplaceEnqueue.php
```

## What is the purpose of this project

Kickstart your next WordPress plugin featuring Gutenberg blocks

This projects comes with:

* ready-to-use Brunch Js
* a PHP script to prepare your plugin package
* CSS Modules
* ES7 + Decorators
* Jest setup for unit testing
* Composer for classes autoloading
* 2 Gutenberg example blocks

## PHP Scripts

**Warning:** these scripts usent the `global` version of  `yarn`. If you don't already have it, type: `npm install -g yarn` in your CLI

### `php scripts/prepare-plugin.php`

This script is used to prepare your plugin. It will work only once. You'll need to specify your plugin name.

```sh
php scripts/prepare-plugin.php -n "Plugin Name"
```

`-n` : Your plugin name. The script automatically setup the rest


### `php scripts/deploy.php`

Use this script to prepare your plugin package. You need to specify the plugin version.  

```sh
php scripts/deploy.php -v 1.0.0
```

`-v` : Plugin version

## Compile files

This project uses [Brunch JS][brunch-js]
You can use whatever feature offered by Brunch JS in your project.

### `brunch watch`
This command build the project and listen to files changes.
You can also use the `brunch w` shorthand

### `brunch build`
This command build the project
You can also use  `brunch b`

### `brunch build --production`
This command build the project in **production** mode. CSS and JS will be minified and everything will be production ready.
You can also use `brunch b --production`

## Create a block

You need to work in the `app/javascripts/blocks` folder

Create a folder containing your block code.

In `app/javascripts/blocks/index.js`, you'll need to import your new block

```js
import Hello from "./hello"
import Documentation from "./documentation"
import MyBlock from "./myblock" // Your new block

export default {
    Hello,
    Documentation,
    MyBlock
}
```

## Running tests

Filename Conventions
Jest will look for test files with any of the following popular naming conventions:

Files with .js suffix in __tests__ folders.
Files with .spec.js suffix.
The .spec.js files (or the __tests__ folders) can be located at any depth under the app top level folder.

`npm run test`

## Decorators

You can see a decorator `@readonly` example in: `app/javascripts/blocks/documentation/components/CustomBlock/index.js`
It prevent the `cantChange` var changes
You can test with the `Documentation` block

## License

MIT © [Thomas Deneulin][twitter-account]

[twitter-account]: https://twitter.com/TDeneulin
[brunch-js]: http://brunch.io/