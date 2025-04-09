# Custom SEO Keywords

**Plugin URI:** https://github.com/NesarAhmedRazon/smdp-seo-keywords<br>
**Description:** A simple plugin to add custom SEO keywords to WordPress posts, pages, and products.<br>
**Version:** 0.0.1<br>
**Author:** Nesar Ahmed<br>
**Author URI:** https://nesarahmed.dev/<br>
**License:** GPL-2.0-or-later<br>
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html<br>
**Text Domain:** smdp-seo-keywords<br>
**Domain Path:** /languages<br>

## Description

The Custom SEO Keywords plugin provides a straightforward way to add specific meta keywords to your WordPress posts, pages, and WooCommerce products. While modern search engines often rely more on content analysis, adding relevant keywords can still be beneficial in some contexts and for specific search engines. This plugin adds a simple metabox where you can enter your desired keywords.

## Installation

1.  **Upload:** Upload the entire `smdp-seo-keywords` folder to the `/wp-content/plugins/` directory.<br>
2.  **Activate:** Activate the plugin through the 'Plugins' menu in your WordPress admin area.

## Usage

Once the plugin is activated, a new metabox labeled "Custom SEO Keywords" will appear on the edit screen for your:

* Posts
* Pages
* Products (if WooCommerce is installed)

To add custom SEO keywords:

1.  Navigate to the edit screen of a post, page, or product.
2.  Locate the "Custom SEO Keywords" metabox.
3.  Enter your desired keywords in the provided textarea. Separate each keyword or phrase with a comma.
4.  Save or update your post, page, or product.

The keywords you enter will be automatically added to the `<head>` section of the respective page as a `<meta name="keywords" content="...">` tag when the page is viewed.

## Frequently Asked Questions

**Q: Are meta keywords still important for SEO?**<br>
A: The importance of meta keywords has diminished significantly for major search engines like Google. They primarily focus on the actual content of your page. However, some smaller search engines or niche platforms might still consider them. This plugin provides the option if you believe they are relevant to your specific needs.

**Q: How do I add multiple keywords?**<br>
A: Simply enter each keyword or phrase separated by a comma in the "Custom SEO Keywords" textarea. For example: `WordPress SEO, SEO plugin, custom keywords, website optimization`.

**Q: Will this plugin conflict with other SEO plugins?**<br>
A: This plugin is designed to be lightweight and specifically focuses on adding the meta keywords tag. It should generally not conflict with other comprehensive SEO plugins that handle various aspects of SEO. However, if you are using another plugin that also manages meta keywords, you might want to choose one or the other to avoid redundancy.

**Q: Can I add keywords to custom post types?**<br>
A: Currently, the plugin is configured to add the metabox to the default `post`, `page`, and `product` post types. Extending it to other custom post types would require code modifications.

## Changelog

### Version 0.0.1
* Initial release of the Custom SEO Keywords plugin.
* Adds a metabox to posts, pages, and products for entering custom SEO keywords.
* Injects the custom keywords into the `<head>` section of the page.

## Contributing

Contributions to the plugin are welcome. Please feel free to submit issues and pull requests on the [GitHub repository](https://github.com/NesarAhmedRazon/smdp-seo-keywords).

## License

This plugin is licensed under the [GPL-2.0-or-later](https://www.gnu.org/licenses/gpl-2.0.html).