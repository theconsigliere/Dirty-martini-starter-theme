# Dirty Martini Test Theme

## A Codekit WordPress Starter theme for developers.

![](https://dirty-martini.com/wp-content/themes/Dirty%20Martini%20Theme/img/dm.png)

_Simple Home page with sidebar showing CSS Grid layout blocks.
It's almost as if it is not even there. (The colors are just for development to see your grid and are easily removed)_

#### 🎉 How to use Starter Theme?

Download or clone into your `/wp-content/themes/` folder and activate the theme in the WordPress admin in `Appearance > Themes`.

Plate uses modular Sass/SCSS files with CSS media queries that map to the default HTML elements in the theme, providing a quick way to get a project up-and-running. You may not need all of the supplied classes to style your theme, so just delete what you don't use. On the other hand, if you need to style the user name for nested comments 3 levels deep, Plate is ready.

You can find the modular scss files in `library/scss/` and then further broken down into `/breakpoints` for our most-used media queries, `/modules` for buttons, alerts, and forms and then `/partials` for grids, typography, functions, variables and anything else.

All of the stylesheets are then imported via the `/library/scss/style.scss` file which is rendered to `/library/css/style.css` via your preprocessor.

**Note:** You will need to use a pre-processor to compile `.scss` (Sass) into `CSS`. We recommend [CodeKit](https://codekitapp.com). Just drop your theme into CodeKit and you're all set. No configuration necessary. We love CodeKit `</>`.

We also have Grunt support built-in if that's your thang.

`_base.scss` includes styles loaded for all devices. From there you can add styles to the respective breakpoint stylesheets for the devices that will use them.

Fire up your favorite text editor, customize the default styles or add your own, and create your own theme templates from Plate's defaults. That's it!

There are lots of comments throughout the theme so we encourage you to read them to help you with development. The theme and its respective comments are updated all the time.

**Pro Tip:** The included `plate_body_class()` function adds page-, post-, archive-, and taxonomy-specific CSS classes to your generated theme files. Leverage those to add your custom styles globally down to a per-post/page level allowing for quick customization.

Classes are mirrored from the templates directly to the `SCSS` files so you can start customizing right away.

- Expanded Gutenberg support (updated 23 February 2019)
- Full WP Customizer support
- Expanded accessibility features
- Full CSS Grid support with starter grids
- Updated page-navi and related posts functions
- HTML schema built-in
- Complete `<head>` cleanup

## What's Included In The Starter theme?

Plate includes all of the files any robust WordPress theme should have: default page + post templates, archive + taxonomy templates, header, footer, search as well as extra page + post templates to handle full width layouts.

Also included is a range of template parts that you can reuse anywhere in your project.

Use, edit and customize what you like and delete what you don't need. It's your thing — do what you wanna do.

### ⭐️ Based on Plate Theme

https://github.com/joshuaiz/plate

**What are the colored blocks in the screenshot?**<br />
The colored block colors are added in the `_cssgrid.scss` stylesheet. They are there to help while setting up CSS Grid so you can see the content areas easier as you are defining your grid(s). We've found them extremely helpful so we kept them in. You don't need to use the default Plate grid (and you probably should set up your own) but we are trying to push more people to use CSS Grid and the colors show how easy it is to set up. They are optional and purely for development so feel free to comment out the styles, change the colors or remove the `.grid` class completely (and not use CSS Grid). Whatever floats your boat.

**I tested Plate with Theme Check and there are errors. What should I do?**<br />
[Theme Check](https://wordpress.org/plugins/theme-check/) is ideal if you are trying to get your theme validated for release on WordPress.org. That said, we use Theme Check and test before every GitHub release to see if we have any egregious errors in Plate. Mind you, Plate was created for our studio and not (necessarily) for general release. With that in mind, there are some things that will fail the check like not having `<php wp_link_pages(); ?>` which we don't ever use as well as having a CPT plugin template included. We're ok with those errors and as long as they don't bother you, you can safely ignore.

### ⚡️ Other stuffs

Designed by Maxwell Kirwin for Dirty martini: https://dirty-martini.com/
