=== Leitvia Child ===
Contributors: contexlabs
Requires at least: 7.1
Tested up to: 7.1
Requires PHP: 8.2
Stable tag: 1.0.0
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: blog, one-column, block-patterns, style-variations, accessibility-ready, translation-ready

Starter child theme for Leitvia, the place for patterns and templates written as files.

== Description ==

Leitvia Child is the official starter child theme of Leitvia for developers, agencies and AI agents. Work that lives in files, such as patterns, templates and template parts, goes here instead of into Leitvia, so a theme update never removes it. Agents that write theme files, for example with the WordPress skills wp-block-themes and wp-patterns, write into this theme only.

The child theme inherits everything from Leitvia: design tokens, style variations, templates, template parts and patterns. It ships no CSS of its own and no presets; its functions.php only loads the translations. patterns/content-starter.php is an example to copy.

Requires the theme Leitvia. Leitvia Studio is optional; with it the agents and the Lab know the patterns of the child theme as well.

Leitvia supports the standards WordPress sets for AI agents and will keep supporting them: the skills of WordPress/agent-skills (https://github.com/WordPress/agent-skills), the Abilities API and the MCP Adapter. Blocks of your own do not belong in this theme: build them as a plugin from Leitvia Block Starter (https://github.com/cmsadmins/leitvia-block-starter), so content keeps them after a theme switch. The developer guide is at https://leitvia.com/docs/developers/.

== Rules ==

The rules of Leitvia apply to every file of the child theme:

* Only role presets: colors, font sizes, spacing, radius and shadows use the slugs of the contract of Leitvia (leitvia-contract.json in the parent theme), such as var:preset|color|ink or var:preset|spacing|m. No hex colors, no px values, no !important.
* No CSS of its own. Styles that a role or a block style of Leitvia cannot express belong into Leitvia, not into the child theme.
* theme.json adds no presets. A new preset needs a role in the contract of Leitvia first; without it Studio, the Lab and the agents do not know it.
* Pattern files have a header with Title, Slug, Categories, Description and Keywords. The slug is leitvia-child/<area>-<name>, the file name is <area>-<name>.php, the area is one of hero, content, teaser, proof, cta, offer, header, footer or page. Texts are translatable with the text domain leitvia-child.
* Every pattern has an entry in leitvia-contract.json of this theme, with title and description word for word as in its header and its composition (tone, density, layout, weight, role, width). This file says "extends": "leitvia": Leitvia Studio adds the entries to the contract of Leitvia instead of replacing it. A pattern without an entry counts as unknown in the composition score of a page.
* In the Leitvia monorepo, npm run lint checks the patterns of the child theme with the same rules as those of Leitvia.

== Activate ==

1. Install and keep Leitvia installed; the child theme uses it as parent theme.
2. Upload leitvia-child-<version>.zip under Appearance, Themes, Add New, Upload Theme.
3. Activate Leitvia Child under Appearance, Themes.

== Switching themes ==

WordPress keeps the global styles and the templates and template parts edited in the Site Editor per theme. With Leitvia Studio active, a switch from Leitvia to Leitvia Child, or back, copies them to the new theme when it has none of its own yet: global styles with the active token set, edited templates and edited template parts. The originals stay, so switching back finds them unchanged, and nothing the new theme already has is overwritten. Navigation menus belong to no theme and stay as they are. Without Leitvia Studio, WordPress starts the new theme with the files of the themes only.

== Changelog ==

= 1.0.0 =
* First release: child theme of Leitvia with an example pattern and a contract that extends the contract of Leitvia.

== Copyright ==

Leitvia Child WordPress Theme, (C) 2026 Patrick Schlesinger, CMS ADMINS.
Leitvia Child is distributed under the terms of the GNU GPL.

== Resources ==

= Screenshot =

screenshot.png shows the parent theme Leitvia with its own demo content and the images from its assets/images, created by Patrick Schlesinger, CMS ADMINS, licensed under GPLv2 or later.
