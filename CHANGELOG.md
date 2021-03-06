# Cortex Console Change Log

All notable changes to this project will be documented in this file.

This project adheres to [Semantic Versioning](CONTRIBUTING.md).


## [v5.0.4] - 2021-01-02
- Move cortex:autoload & cortex:activate commands to cortex/foundation module responsibility

## [v5.0.3] - 2021-01-01
- Move cortex:autoload & cortex:activate commands to cortex/foundation module responsibility
  - This is because :autoload & :activate commands are registered only if the module already autoloaded, so there is no way we can execute commands of unloaded modules
  - cortex/foundation module is always autoloaded, so it's the logical and reasonable place to register these :autoload & :activate module commands and control other modules from outside

## [v5.0.2] - 2020-12-31
- Rename seeders directory
- Enable StyleCI risky mode
- Add module activate, deactivate, autoload, unload artisan commands

## [v5.0.1] - 2020-12-25
- Add support for PHP v8

## [v5.0.0] - 2020-12-22
- Upgrade to Laravel v8

## [v4.2.1] - 2020-12-11
- Rename routes, channels, menus, breadcrumbs, datatable & form IDs to follow same modular naming conventions
- Add support for bulkRevoke
- Add create_popup support for datatable buttons
- Activate module after installation
- Update composer dependencies
- Stick to composer version constraints recommendations and ease minimum required version of modules

## [v4.2.0] - 2020-06-15
- Autoload config, views, language, menus, breadcrumbs, and migrations
  - This is now done automatically through cortex/foundation, so no need to manually wire it here anymore
- Merge additional fillable, casts, and rules instead of overriding
- Drop PHP 7.2 & 7.3 support from travis

## [v4.1.1] - 2020-05-30
- Update composer dependencies

## [v4.1.0] - 2020-05-30
- With the significance of recent updates, new minor release required

## [v4.0.8] - 2020-05-30
- Reorder datatable buttons
- Refactor datatables default options and serverside buttons and support selected rows
- Rename datatables container names
- Load module routes automatically
- Remove default indent size config
- Fix compatibility with recent rinvex/laravel-menus package update

## [v4.0.7] - 2020-04-12
- Fix ServiceProvider registerCommands method compatibility

## [v4.0.6] - 2020-04-09
- Tweak artisan command registration
- Add missing config publishing command
- Refactor publish command and allow multiple resource values

## [v4.0.5] - 2020-04-04
- Enforce consistent artisan command tag namespacing
- Enforce consistent package namespace
- Drop laravel/helpers usage as it's no longer used
- Upgrade silber/bouncer composer package

## [v4.0.4] - 2020-03-20
- Add shortcut -f (force) for artisan publish commands
- Fix migrations path condition
- Convert database int fields into bigInteger
- Upgrade spatie/laravel-medialibrary to v8.x
- Fix couple issues and enforce consistency

## [v4.0.3] - 2020-03-16
- Update proengsoft/laravel-jsvalidation composer package

## [v4.0.2] - 2020-03-15
- Fix incompatible package version league/fractal

## [v4.0.1] - 2020-03-15
- Fix wrong package version laravelcollective/html

## [v4.0.0] - 2020-03-15
- Upgrade to Laravel v7.1.x & PHP v7.4.x

## [v3.0.4] - 2020-03-13
- Tweak TravisCI config
- Tweak service provider `publishesResources`
- Refactor module webpack requirements
- Update StyleCI config
- Drop using global helpers
- Check if ability exists before seeding

## [v3.0.3] - 2019-10-14
- Update menus & breadcrumbs event listener to accessarea.ready
- Fix wrong dependencies letter case

## [v3.0.2] - 2019-10-06
- Refactor menus and breadcrumb bindings to utilize event dispatcher

## [v3.0.1] - 2019-09-24
- Add missing laravel/helpers composer package

## [v3.0.0] - 2019-09-23
- Upgrade to Laravel v6 and update dependencies

## [v2.2.1] - 2019-08-03
- Tweak menus & breadcrumbs performance

## [v2.2.0] - 2019-08-03
- Upgrade composer dependencies
- Drop VIM editor and codemirror package
- Update composer version and require ext-json

## [v2.1.2] - 2019-06-03
- Enforce latest composer package versions

## [v2.1.1] - 2019-06-03
- Update publish commands to support both packages and modules natively

## [v2.1.0] - 2019-06-02
- Update composer deps
- Drop PHP 7.1 travis test
- Refactor migrations and artisan commands, and tweak service provider publishes functionality

## [v2.0.0] - 2019-03-03
- Require PHP 7.2 & Laravel 5.8
- Rename environment variable QUEUE_DRIVER to QUEUE_CONNECTION
- Refactor abilities seeding
- Utilize support helpers

## [v1.0.1] - 2018-12-22
- Update composer dependencies
- Add PHP 7.3 support to travis
- Simplify and flatten resources/public directories

## [v1.0.0] - 2018-10-01
- Support Laravel v5.7, bump versions and enforce consistency

## [v0.0.2] - 2018-09-22
- Too much changes to list here!!

## v0.0.1 - 2017-09-09
- Tag first release

[v5.0.4]: https://github.com/rinvex/cortex-console/compare/v5.0.3...v5.0.4
[v5.0.3]: https://github.com/rinvex/cortex-console/compare/v5.0.2...v5.0.3
[v5.0.2]: https://github.com/rinvex/cortex-console/compare/v5.0.1...v5.0.2
[v5.0.1]: https://github.com/rinvex/cortex-console/compare/v5.0.0...v5.0.1
[v5.0.0]: https://github.com/rinvex/cortex-console/compare/v4.2.1...v5.0.0
[v4.2.1]: https://github.com/rinvex/cortex-console/compare/v4.2.0...v4.2.1
[v4.2.0]: https://github.com/rinvex/cortex-console/compare/v4.1.1...v4.2.0
[v4.1.1]: https://github.com/rinvex/cortex-console/compare/v4.1.0...v4.1.1
[v4.1.0]: https://github.com/rinvex/cortex-console/compare/v4.0.8...v4.1.0
[v4.0.8]: https://github.com/rinvex/cortex-console/compare/v4.0.7...v4.0.8
[v4.0.7]: https://github.com/rinvex/cortex-console/compare/v4.0.6...v4.0.7
[v4.0.6]: https://github.com/rinvex/cortex-console/compare/v4.0.5...v4.0.6
[v4.0.5]: https://github.com/rinvex/cortex-console/compare/v4.0.4...v4.0.5
[v4.0.4]: https://github.com/rinvex/cortex-console/compare/v4.0.3...v4.0.4
[v4.0.3]: https://github.com/rinvex/cortex-console/compare/v4.0.2...v4.0.3
[v4.0.2]: https://github.com/rinvex/cortex-console/compare/v4.0.1...v4.0.2
[v4.0.1]: https://github.com/rinvex/cortex-console/compare/v4.0.0...v4.0.1
[v4.0.0]: https://github.com/rinvex/cortex-console/compare/v3.0.4...v4.0.0
[v3.0.4]: https://github.com/rinvex/cortex-console/compare/v3.0.3...v3.0.4
[v3.0.3]: https://github.com/rinvex/cortex-console/compare/v3.0.2...v3.0.3
[v3.0.2]: https://github.com/rinvex/cortex-console/compare/v3.0.1...v3.0.2
[v3.0.1]: https://github.com/rinvex/cortex-console/compare/v3.0.0...v3.0.1
[v3.0.0]: https://github.com/rinvex/cortex-console/compare/v2.2.1...v3.0.0
[v2.2.1]: https://github.com/rinvex/cortex-console/compare/v2.2.0...v2.2.1
[v2.2.0]: https://github.com/rinvex/cortex-console/compare/v2.1.1...v2.2.0
[v2.1.1]: https://github.com/rinvex/cortex-console/compare/v2.1.0...v2.1.1
[v2.1.0]: https://github.com/rinvex/cortex-console/compare/v2.0.0...v2.1.0
[v2.0.0]: https://github.com/rinvex/cortex-console/compare/v1.0.1...v2.0.0
[v1.0.1]: https://github.com/rinvex/cortex-console/compare/v1.0.0...v1.0.1
[v1.0.0]: https://github.com/rinvex/cortex-console/compare/v0.0.2...v1.0.0
[v0.0.2]: https://github.com/rinvex/cortex-console/compare/v0.0.1...v0.0.2
