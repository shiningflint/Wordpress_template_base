# Barebones WP template
Very very light with NOTHING in it. Just your HTML, CSS, and JS files.

## Add all the files into your Wordpress template folder
Go to your theme directory in your installed Wordpress, e.g. wp/wp-content/themes

## WP Template Hierarchy
Everything goes to index.php in the end. Learn about WP template file naming
[https://developer.wordpress.org/themes/basics/template-hierarchy/](https://developer.wordpress.org/themes/basics/template-hierarchy/)
[https://developer.wordpress.org/files/2014/10/wp-hierarchy.png](https://developer.wordpress.org/files/2014/10/wp-hierarchy.png)

### Important files to add:
* category.php - Listing all the posts in one category.
* single.php - A single page that shows a single post.
* page.php - A template for the "pages" in wordpress.

## WP_Query
[https://codex.wordpress.org/Class_Reference/WP_Query](https://codex.wordpress.org/Class_Reference/WP_Query)
A must read if you're building a template from scratch! (at least read the standard loop & multiple loops)
You learn how to query WP posts and list them manually the way you want it.
