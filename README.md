# Cortex Console

**Cortex Console** is a set of powerful tools for administrators and system support staff, to maintain the project through a web console.

[![Packagist](https://img.shields.io/packagist/v/cortex/console.svg?label=Packagist&style=flat-square)](https://packagist.org/packages/cortex/console)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/rinvex/cortex-console.svg?label=Scrutinizer&style=flat-square)](https://scrutinizer-ci.com/g/rinvex/cortex-console/)
[![Travis](https://img.shields.io/travis/rinvex/cortex-console.svg?label=TravisCI&style=flat-square)](https://travis-ci.org/rinvex/cortex-console)
[![StyleCI](https://styleci.io/repos/99706187/shield)](https://styleci.io/repos/99706187)
[![License](https://img.shields.io/packagist/l/cortex/console.svg?label=License&style=flat-square)](https://github.com/rinvex/cortex-console/blob/develop/LICENSE)


## Installation and Usage

This is a **[Rinvex Cortex](https://github.com/rinvex/cortex)** module, that's still not yet documented, but you can use it on your own responsibility.

In project composer.json require the package:
```
    composer require cortex/console
```

npm install codemirror --save-dev
npm install jquery.terminal --save-dev

Inside webpack.mix.js, add the following line to `scanForCssSelectors` array:
```
    path.join(__dirname, 'node_modules/jquery.terminal/**/*.js'),
```

Inside webpack.mix.js add the following lines to the pipeline:
```
    mix.sass('app/cortex/console/resources/sass/terminal.scss', 'public/css/terminal.css');
    mix.js('app/cortex/console/resources/js/terminal.js', 'public/js/terminal.js');
```

To be documented soon..!


## Changelog

Refer to the [Changelog](CHANGELOG.md) for a full history of the project.


## Support

The following support channels are available at your fingertips:

- [Chat on Slack](https://bit.ly/rinvex-slack)
- [Help on Email](mailto:help@rinvex.com)
- [Follow on Twitter](https://twitter.com/rinvex)


## Contributing & Protocols

Thank you for considering contributing to this project! The contribution guide can be found in [CONTRIBUTING.md](CONTRIBUTING.md).

Bug reports, feature requests, and pull requests are very welcome.

- [Versioning](CONTRIBUTING.md#versioning)
- [Pull Requests](CONTRIBUTING.md#pull-requests)
- [Coding Standards](CONTRIBUTING.md#coding-standards)
- [Feature Requests](CONTRIBUTING.md#feature-requests)
- [Git Flow](CONTRIBUTING.md#git-flow)


## Security Vulnerabilities

If you discover a security vulnerability within this project, please send an e-mail to [security@rinvex.com](security@rinvex.com). All security vulnerabilities will be promptly addressed.


## About Rinvex

Rinvex is a software solutions startup, specialized in integrated enterprise solutions for SMEs established in Alexandria, Egypt since June 2016. We believe that our drive The Value, The Reach, and The Impact is what differentiates us and unleash the endless possibilities of our philosophy through the power of software. We like to call it Innovation At The Speed Of Life. That’s how we do our share of advancing humanity.


## License

This software is released under [The MIT License (MIT)](LICENSE).

(c) 2016-2019 Rinvex LLC, Some rights reserved.
