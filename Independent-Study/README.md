## (StandAlone) Webpack or Laravel Mix?

*By: Shaun Lewis*

Dynamic web applications require front-end technologies where browser speed and optimization of an application's 
assets(css, image, font files, etc) are crucial. This research will focus on using technology to compile, bundle and map
front-end assets to optimize web applications. First we will review web pack and demo a simple web application to understand the concept. Next, we will demo a basic application using Laravel Mix which uses webpack under the hood to capture the concept of optimizing Laravel web applications. Finally, we'll compare the two approches (stand alone Webpack or Laravel Mix) to get a better idea of which approach to use when building Laravel applications.

### Resources

[Webpack](https://webpack.js.org/)

[Webpack Documentation](https://webpack.js.org/concepts/)

[Getting Started with Webpack](https://webpack.js.org/guides/getting-started/)

[A Beginner’s Guide to Webpack 4 and Module Bundling](https://www.sitepoint.com/beginners-guide-webpack-module-bundling/)

[Compiling Assets (Mix)](https://laravel.com/docs/6.x/mix)

[npm-package.json](https://docs.npmjs.com/files/package.json)


# Webpack Demo

## Configuration

### Lets start with our Previous p1 project below.
![p1](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image00PNG.PNG)

### The first step is downloading node.js. You can type the following commands in your terminal to see if it's on your system.

```ubuntu
node -v
npm -v

```

![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/checknode.PNG)

### If you don't see either the node or npm version above, download node js [here](https://nodejs.org/en/). You will direct to the node site.
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image0.PNG)

### Currently this is p1 project structure.
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image1.1.PNG)

### Looking at out `index.php` file we see the following css and script assets:


![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/before.PNG)

### We'll create a new [package.json](https://docs.npmjs.com/files/package.json) in our project with the following command.

```ubuntu
npm init -y

```

### You should see the output below.
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image3.PNG)

### Our `package.json` is created in our project below.
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image4.PNG)

### Next we'll install our node dependencies and our `webpack`.
```ubuntu
npm install webpack webpack-cli --save-dev

```
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image5.PNG)

### Our node modules with our `webpack` packages are installed. 
### You can dive within the the `node_modules` directory to confirm your `webpack` packages or view the `package.json `dev-dependencies.

![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image6.PNG)

![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image7.PNG)

### Let's turn to our `package.json`, add/set `private` property to `true`, finally removing our `main` property since we'll define that in our `webpack.config.js` in the next steps.
### Setting `private` to true prevents npm from [publishing](https://stackoverflow.com/questions/7314849/what-is-purpose-of-the-property-private-in-package-json) it.
### The `main` property defines our entry point for our assets build.
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image11.PNG)

### We're going to add a scripts property to define our [life cycle](https://docs.npmjs.com/files/package.json#scripts) build scripts.
### The `develop` and `build` scripts are the ones that we will use in the next steps.

![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/scripts.PNG)




### Let's do some clean up and changes to our project directory structure.
### Next we'll create our `src` and `dist` folders.
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image8.PNG)

### The `src` folder will serve as our entry point for webpack to locate our assets. 
### The `dist` folder will serve as our output build for our assets. 
### Webpack calls this neat concept the [dependency graph](https://webpack.js.org/).
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/dependency-graph1.PNG)

## JavaScript Assets

### We'll move `hideResults.js` to our `src` folder. 
### Remove `jquery-3.4.1.min.js`, since we'll be referencing jQuery from the `node_modules` in the following steps.
### We can get rid of the js folder since we'll no longer need it.
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image9.PNG)

### We'll remove the JavaScript assets from our `index.php`.
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image10.PNG)

### Lets install jquery to our node_modules and confirm jQuery dependency within our `package.json`.

```ubuntu
  npm install jquery

```
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image12.PNG)

![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image13.1.PNG)

### We'll import jQuery into our `hideResults.js` file.
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image14.PNG)


## webpack.config.js

### We're going to create our `webpack.config.js` file which will map our assets and builds.
### Create a `webpack.config.js` file at the root directory
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image14.1.PNG)

### Within `webpack.config.js` we'll write the following code.

```javascript
const path = require('path') //node module for working with your application's file paths

module.exports = {
    entry: './src/hideResults.js', //entry point for our asset builds
    output: {
        filename: 'main.js',//output file for our assets build
        path: path.resolve(__dirname, 'dist') //defining our output directory for our output file build
    }
}


```

### Next type in the following command in your terminal



```ubuntu
npm run develop
```

### Look for the following output within your terminal.
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/devbuild.PNG)

### `Asset` represents your output asset file located in the `dist` directory.
### `Size`  represents the size of the asset file.
### `Chunks` and `Chunk Names` represents our complete assets. Right now our chunk is called `main` because we define one output file `main` and one entry file `hideResults` within `web.config.js`.
### You can define more assets as entry points within `web.config.js`. This is called [Code Splitting](https://webpack.js.org/guides/code-splitting/).

### Now we can reference our `main.js` file to replace our previous JavaScript assets.
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/mainjs.PNG)

## Sass Assets
### We will install our [loaders](https://webpack.js.org/loaders/) within our `node_modules` to map our Sass.

```ubuntu
 npm install --save-dev style-loader css-loader sass-loader node-sass

```

### You should see the following loaders within your `package.json` via `devDependencies` property.
    1. css-loader
    2. node-sass
    3. sass-loader
    4. style-loader

![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/sass/image2.PNG)

### We'll add a [module](https://webpack.js.org/concepts/modules/) and our loaders to our `webpack.config.js` file using the below code.

```javascript

module: {
        rules: [
            {
                test: /\.scss$/,
                use: [
                    'style-loader',
                    'css-loader',
                    'sass-loader'
                ]
            }
        ]
    }


```

### Your `webpack.config.js` file should look like this.
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/sass/image3.PNG)

### Next we will move our original `stringGenerator.scss` file to our `src` directory.
## We can get rid of the `css` directory since that `sass` asset will output to `dist` directory.
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/sass/image4.PNG)

### Within `hideResults.js` we will import our `sass` file.
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/sass/image5.PNG)

### We can get ride of the original `css` asset since the `sass` will be bundle in `main.js`.
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/after1.PNG)


### Type in the following command within your terminal for a production build.

```ubuntu
 npm run build

```

### Our `main.js` asset is 91.8 kilobytes. Let's verify this in the browser's console.
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/prodbuild.PNG)

![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/console.PNG)

### That was a handful but we only scratch the surface of webpack capabilities. 
### Now that we have a basic understanding of webpack concepts, let's turn to `Laravel Mix` which uses webpack under the hood.

# Laravel Mix Demo

## Configuration
### As the same with webpack, you will need to install and verify node.js is present on your computer.
### Check the above webpack [configuration section](https://github.com/budostylz/e15/tree/master/Independent-Study#Configuration) for this step.

### We will apply `Laravel Mix` to our p2 project.
![Laravel Mix](https://github.com/budostylz/e15/blob/master/Independent-Study/images/laravel-mix/image0.PNG)

### Let's look at our assets that we will need to bundle located at within Laravel's master view file name `master.blade.php`
![Laravel Mix](https://github.com/budostylz/e15/blob/master/Independent-Study/images/laravel-mix/image1.PNG)

### Laravel comes out of box with a `webpack.mix.js` file located at the root directory which corresponds to `webpack.config.js` that we been working with.
![Laravel Mix](https://github.com/budostylz/e15/blob/master/Independent-Study/images/laravel-mix/webpack.mix.js_dir.PNG)

### The cool thing about Laravel is `package.json` comes out of the box located at the root directory. We do not have to manually create it like standalone webpack.
![Laravel Mix](https://github.com/budostylz/e15/blob/master/Independent-Study/images/laravel-mix/package.json.js_dir.PNG)







# Compare/Contrast Webpack and Laravel Mix









