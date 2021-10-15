# UW WordPress Theme - Child Theme

A child theme for use with the [UW WordPress Theme](https://github.com/uweb/uw_wp_theme).

## Getting started

To get started using this theme, all you have to do is install it and the UW WordPress Theme on your WordPress website. Make sure you activate this child theme.

1. Download zip files for both the [UW WordPress Theme](https://github.com/uweb/uw_wp_theme) and this child theme. **_Please note: You may need to update the name of the zip file. If it includes -master in the file name (e.g. uw_wp_theme-master.zip), you will need to REMOVE the -master part. The file name you upload to WordPress in the next step needs to be uw_wp_theme.zip._**

2. Log into your WordPress admin.

3. Go to `Appearance > Themes` and click the **Add New** button.

4. Click the **Upload Theme** button.

5. Drag and drop the UW WordPress Theme zip file to the file upload area and click the **Install Now** button.

6. Do not activate this theme! You're not quite done yet.

7. Go back to `Appearance > Themes` and click the **Add New** button.

8. Click the **Upload Theme** button.

9.  Drag and drop the UW WordPress Child Theme zip file to the file upload area and click the **Install Now** button.

10. Click the Activate link.

You're all set and ready to go!

All of the settings, shortcodes, widgets, and templates from the parent theme are available to you here in this child theme. Additionally, you can extend and override the theme as needed from within the child theme.

**_Override with caution._** If you stray too far from the original theme, it will make updating the parent theme difficult to impossible without also updating your child theme code.

## Guidance for using this child theme

1. Follow [Child Theme](https://developer.wordpress.org/themes/advanced-topics/child-themes/) best practices from WordPress

2. Follow WordPress best practices for [theme development](https://codex.wordpress.org/Theme_Development)

3. Code to the WordPress Coding Standards for [PHP](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/), [HTML](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/html/), [CSS](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/), [JavaScript](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/) and [documentation](https://developer.wordpress.org/coding-standards/inline-documentation-standards/)

4. Don't code the way we coded just because we coded it that way. Do what makes sense for your situation. Will your code make sense to you in 6 months or 6 years? What about another developer in 6 months or 6 years? Make sure it makes sense!

5. Use the tools that make sense for your project.

6. Document! Keep a record of the changes you are making in the child theme. Make comments in your code so you and other devs know what you were trying to accomplish.

## Our (loose) recommendations

These are some of the tools we've found useful as we've worked on the theme. These are particularly helpful if you are working with at least 1 other dev on the same codebase.

1. Use [Local](https://localwp.com/) for local development

2. Use [VS Code](https://code.visualstudio.com/) or [Sublime Text](https://www.sublimetext.com/) as your IDE

3. Use the WordPress Coding standards (see #3 above) with [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer). This can be difficult to get set up right, but it's worth it once you do.

4. Use some kind of automation workflow tool like [Gulp](https://gulpjs.com/)

5. Save your work in [git](https://git-scm.com/)
