<a href="https://photon-platform.net/">
    <img src="https://photon-platform.net/images/photon-logo-bg.png" alt="photon" title="photon" align="right" height="120" />
</a>

# `photon ✴ STARTER`

**photon ✴** STARTER is a skeleton site for the [Grav CMS](https://getgrav.org), the templating engine for the **photon ✴ PLATFORM**.

You can view a demo of this starter site at https://starter.photon-platform.net

for more about the **photon ✴ PLATFORM**, visit us at https://photon-platform.net

> The photon ✴ PLATFORM is an integrated suite of open source software and cloud-based systems for the development, publishing and management of content.

**TOC**
<!-- @import "[TOC]" {cmd="toc" depthFrom=2 depthTo=6 orderedList=false} -->
<!-- code_chunk_output -->

* [Setup](#setup)
* [photon ✴ THEME](#photon-theme)
	* [Theme Configuration](#theme-configuration)
	* [Child theme](#child-theme)
* [photon ✴ PLUGINS](#photon-plugins)
	* [Core Grav Plugins](#core-grav-plugins)
* [About the photon ✴ PLATFORM](#about-the-photon-platform)

<!-- /code_chunk_output -->

## Setup

This Starter project is not a standalone website. It is just the `user` folder for a Grav installation.

Setting up Grav can mean setting up a lot of prerequisites. So follow the installation guidance [here](https://learn.getgrav.org/basics/installation).

After you configure a working Grav site on your local environment, you can remove the `user` folder and clone this repo in its place.

Since the Grav code is a fixed set of code across all projects, we leave it out of the repo.

From the commandline in your Grav project directory:

```
rm -rf user
git clone --recurse-submodules https://github.com/photon-platform/photon.git user
```


`--recurse-submodules` is important because the **photon THEME** and many photon plugins as managed as separate git repositories and are then include in this repo as a submodule.

And make sure you specify the `user` folder at the end of the command




## photon ✴ THEME

`themes/photon`

The **photon THEME** is a git submodule in this repo until it is be submitted to the Grav Package Manager. You can find the Github repo here:
https://github.com/photon-platform/grav-theme-photon

Check the theme README for more on

topics:






### Theme Configuration

photon uses a set of CSS variables to configure a number of important attributes of the style of the site. These variables are set in the admin panel, as specified in the

- fonts
- color pallete
- core dimensions

CSS styles in the photon THEME use these variables, allowing changes to be made without recompiling the css

`blueprints/config/style.yaml`
[blueprints/config/style.yaml](blueprints/config/style.yaml)
[`blueprints/config/style.yaml`](blueprints/config/style.yaml)
contains the form specifications for the style variables of the site.

`config/style.yaml`
stores the settings


### Child theme

[`themes/photon-child`](themes/photon-child)

Grav provides the ability to have a child theme that can inherit and override the templates and styles within the parent theme.


topics:

- customizing the theme


## photon ✴ PLUGINS

see the README.md in the plugins folder for more on the current set of plugins



all photon PLUGINS are set in the starter site as git submodules

### Core Grav Plugins

[COMMAND](https://github.com/photon-platform/grav-plugin-photon)


## About the photon ✴ PLATFORM
