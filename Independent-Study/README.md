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


## Webpack Demo

### Lets start with our Previous p1 project below.
![p1](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image00PNG.PNG)

### The first step is downloading node.js. You can type the following commands in your terminal to see if it's on your system.

```ubuntu
node -v
npm -v

```

![node check](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/checknode.PNG)

### If you don't see either the node or npm version above, download node js [here](https://nodejs.org/en/). You will direct to the node site.
![node site](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image0.PNG)

### Currently this is p1 project structure.
![project structure](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image1.1.PNG)

### Looking at out index.php file we see the following css and script assets:


![before](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/before.PNG)

### We'll create a new package.json in our project with the following command.

```ubuntu
npm init -y

```

### You should see the output below.
![package.json](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image3.PNG)

### Our package.json is created in our project below.
![package.json](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image4.PNG)

### Next we'll install our node dependencies and our `webpack`.
```ubuntu
npm install webpack webpack-cli --save-dev

```
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image5.PNG)

### Our node modules with our `webpack` packages are installed. 
### You can dive within the the `node_modules` directory to confirm your `webpack` packages or view the `package.json `dev-dependencies.

![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image6.PNG)

![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image7.1.PNG)

### Let us do some clean up and changes to our project directory structure.
### Next we'll create our `src` and `dist` folders.
![node dependencies and webpack](https://github.com/budostylz/e15/blob/master/Independent-Study/images/webpack-standalone/js/image8.PNG)

### The `src` folder will serve as our entry point for webpack to locate our assets. 
### The `dist` folder will serve as our output build of our assets. 
### Webpack calls this concept the dependency graph.




## Laravel Mix Demo

## Compare/Contrast Webpack and Laravel Mix









