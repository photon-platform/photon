photon PLATFORM

<a href="https://photon-platform.net/">
    <img src="https://photon-platform.net/user/images/photon-logo-banner.png" alt="photon" title="photon" align="right" height="120" />
</a>


![GitHub release](https://img.shields.io/github/v/tag/photon-platform/grav-theme-photon)

Foundation theme for the photon ✴ PLATFORM - within [Grav CMS](http://github.com/getgrav/grav).

# photon ✴ THEME Child

## 0.1.0
> child theme for the default photon ✴ THEME
- [configuration](#configuration)
- [templates](#templates)
- [scaffolds](#scaffolds)
- [scss](#scss)
- [assets](#assets)
- [languages](#languages)

# configuration
blueprints.yaml

fields:

Before configuring this plugin, you should copy the `user/plugins/photon-child/photon-child.yaml` to `user/config/plugins/photon-child.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

Note that if you use the admin plugin, a file with your configuration, and named photon-child.yaml will be saved in the `user/config/plugins/` folder once the configuration is saved in the admin.


# templates

```sh
templates
├── _asides
└── _site
    └── head.html.twig
```

# scss

```sh
scss
├── articles
│   ├── _article-excerpt.scss
│   ├── _article.scss
│   └── _article-showcase.scss
├── _color.scss
├── _fonts.scss
└── photon-child.scss
```


## Installation

- all photon plugins are installed as git submodules. More on that later.



## Configuration


## Usage

Select template type when creating a new page

## Credits


## To Do

- [ ] Future plans, if any





**TOC**
<!-- @import "[TOC]" {cmd="toc" depthFrom=2 depthTo=6 orderedList=false} -->
<!-- code_chunk_output -->

* [Getting Started](#getting-started)
* [Articles in Pages](#articles-in-pages)
* [Templates](#templates)
* [Styles](#styles)
* [License](#license)

<!-- /code_chunk_output -->

![](screenshot.jpg)

## Getting Started
The best way to start with photon THEME is with a photon STARTER project. Checkout the repo here:

https://github.com/photon-platform/photon

Current version of this theme has some dependencies on  site level configurations. This will be resolved in a future version.

See the theme configuration section for more on the STARTER project:
https://github.com/photon-platform/photon#theme-configuration

I highly recommend reviewing the excellent material on GRAV Documentation site:
https://learn.getgrav.org/themes


## Articles in Pages

Photon takes a content first approach to development.

We develop our content as a set of hierarchical data.

An **Article** is a node in our dataset.

A **Page** is the template document that structures the content of one or more articles along with components to provide context and navigation.





## Templates
see README in templates folder for more about the concpets for the TWIG template files:

[`templates`](templates)


## Styles
see README in scss folder for more on the stylesheet development:

[`scss`](scss)



## License

See [LICENSE](LICENSE)

copyright &copy; 2020
