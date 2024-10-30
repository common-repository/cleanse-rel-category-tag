=== WordPress Fix HTML5 Validation ===
Contributors: dfavor
Donate link: http://DavidFavor.com/review-ware
Tags: html5, validation, error, rel, category
Requires at least: 3.5.0
Tested up to: 3.6
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WordPress Fix HTML5 Validation

== Description ==

This plugin fixes current HTML syntax errors raised due to how Wordpress
currently returns some links with rel="category tag".

Hopefully this plugin is temporary and Wordpress will fix this problem.

At present it looks doubtful this will be fixed.

You can read more about this problem by
[Searching WordPress for related discussions](https://www.google.com/search?q="site:wordpress.org"+"category tag"+"rel"+"validation error")...

Especially [WordPress Ticket #22095](http://core.trac.wordpress.org/ticket/22095)
talks about what has been fixed (2 problems) and what has been
deferred indefinitely (1 problem).

= Like This Plugin? =

This plugin is provided for free.

If you like using it + like to say thanks...

Buy a copy of my ["Beautiful Business"](http://DavidFavor.com/bb) Kindle Book and
post an Amazon Review of what you enjoyed most.

= Why This Plugin is Essential =

The following is purely my opinion about this matter.

In most cases, your best option when having Web development work done is to make your
payment contingent on the following checklist... meaning you only pay
for your Web development after all checklist items are 100% met. No exceptions.

Some diehards in the audience may say Validator code lags standards. True. And
I'd prefer adhering to the current Validator code rather than constantly
trying to determine which errors and warnings are acceptable and which are real.

Your Web development checklist:

* [W3C HTML Validator](http://Validator.w3.org/) - 100% clean HTML syntax validation. Zero errors.
  Zero warnings. No exceptions, save one. The single exception is one warning,
  which the validator currently emits if you use an HTML5 Doctype (<!DOCTYPE html>).
* [W3C CSS Validator](http://Jigsaw.w3.org/css-validator/) - 100% clean CSS syntax validation. Zero errors.
  Zero warnings. No exceptions.
* [Web Page Test](http://WebPageTest.org) - A score in ever category. No exceptions, save one. Do yourself
  a favor and skip using a CDN, unless you're serving huge video files off your site.
  Even then, unless your CDN supports true streaming (meaning you can move the scrubber
  bar and the video playback position tracks + changes correctly) you're better off hiring
  some to correctly tool your site. Follow this checklist and a CDN will rarely give you
  any measurable speed increase.
* [Google PageSpeed](https://developers.google.com/speed/pagespeed/insights/) - 100 out of 100 PageSpeed Score.
  In other words, all tests pass. No exceptions.

Having "No exceptions" in each case will also require you use a Hosting Company run by
Wicked Smart Uber Geeks. I've yet to find any company who can tune up a Web server to
run as fast as I tune mine, so I run my own "Iron" (servers which I admin personally).

This said, you may have some exceptions. You'll have to determine which are acceptable for you.

For me, "No exceptions" is mandatory.

Enough rambling.

== Installation ==

This section describes how to install the plugin and get it working.

Best to just install through the WordPress admin panel.

Please note: If you're using any plugin that caches content, you must navigate to
your cache plugin settings and hit "Flush Cache". Otherwise rel="category tag" will
be returned for every cached page, until each page expires (exceeds your cache timeout).

If you're using a front-end caching system like Varnish, best just flush all content.
If you're savvy enough to be running Varnish, you'll understand how to do this.

You can also manually install this plugin, via the normal...

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('plugin_name_hook'); ?>` in your templates

== Frequently Asked Questions ==

= Have a question? =

Post it under the Support Tab + I'll add it to the FAQ along with my answer.

== Screenshots ==

1. No screenshots at present.

== Changelog ==

= 1.0 - Initial Release =

== Upgrade Notice ==

Best to always use the latest version of this plugin.
