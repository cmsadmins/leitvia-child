# Leitvia Child

Starter child theme for [Leitvia](https://github.com/cmsadmins/leitvia). Patterns, templates and template parts written as files, by developers, agencies or AI agents, live here and stay in place when Leitvia updates. It inherits every design token, style variation and pattern of Leitvia and ships no CSS and no presets; its functions.php only loads the translations.

Rules, activation and what moves along on a theme switch: see `readme.txt`. In short: role presets only (no hex, no px), every pattern gets an entry in `leitvia-contract.json` of this theme, which extends the contract of Leitvia.

Custom blocks do not belong here: a block registered by a theme disappears with the theme, and every post that uses it shows an unsupported block. Build blocks as a plugin from [Leitvia Block Starter](https://github.com/cmsadmins/leitvia-block-starter).

## WordPress standards

Leitvia supports the standards WordPress sets for AI agents and will keep supporting them: the skills of [WordPress/agent-skills](https://github.com/WordPress/agent-skills), the Abilities API with its REST routes under `/wp-json/wp-abilities/v1` and the default server of the MCP Adapter. The [developer guide](https://leitvia.com/docs/developers/) shows how the packages fit together, with real calls. Agents that write theme files with the WordPress skills `wp-block-themes` and `wp-patterns` write into this theme, never into Leitvia.

## License

GPL-2.0-or-later.
