# Blanc
A starter Wordpress theme by [Collectif](http://collectif.co).

## Tools
- [Gulp](http://gulpjs.com) – Preprocessor for compiling CSS, JS and more.
- [Bourbon](http://bourbon.io) [Neat](http://neat.bourbon.io) – A light CSS grid framework
- [SCSS](http://sass-lang.com) – CSS extension language which adds variables, mixins and other cool stuff

## HTML5 Reset WordPress Theme

This theme is based on [Tim Murtaugh](https://github.com/murtaugh)’s [HTML5 Reset theme](https://github.com/murtaugh/HTML5-Reset-WordPress-Theme). HTML5 Reset is a simple set of *WordPress* best practices to get web projects off on the right foot.

### Some of the [HTML5 Reset](https://github.com/murtaugh/HTML5-Reset-WordPress-Theme) features:

1. A style sheet designed to strip initial styles from browsers, starting your development off with a blank slate.
2. Easy to customize — remove whatever you don't need, keep what you do.
3. Google Analytics and jQuery calls
4. Meta tags ready for population
5. Empty print and small-screen media queries
6. [Modernizr.js](http://www.modernizr.com/) enables HTML5 compatibility with IE (and a dozen other great features)
7. [Prefix-free.js](http://leaverou.github.io/prefixfree/) allowing us to only use un-prefixed styles in our CSS
8. IE-specific classes for simple CSS-targeting
9. Lots of other keen stuff

## Stylesheets
Our SCSS directory is based on [Dan Eden’s SCSS directories](https://github.com/daneden/daneden.me/tree/master/_assets/scss). Global styles go in the `partials` folder, while specific modules—such as headers, footers, sidebars—go in the appropriate `modules` folder

## Install
1. Download theme to WordPress *Themes* folder.
2. ([Make sure you have Gulp installed](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md))
3. Run `npm install` to download packages for Gulp.
4. Run `gulp` to create the stylesheet. This setup will automatically watch for changes. *The theme won't work without running Gulp once*.
