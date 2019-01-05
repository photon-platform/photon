<a href="https://photon-platform.net/">
    <img src="https://photon-platform.net/images/photon-logo-bg.png" alt="photon" title="photon" align="right" height="120" />
</a>

# `photon ✴ STARTER`

**photon ✴** STARTER is a skeleton site for the [Grav CMS](https://getgrav.org), the templating engine for the **photon ✴ PLATFORM**.

You can view a demo of this starter site at <https://starter.photon-platform.net>

> The photon ✴ PLATFORM is an integrated suite of open source software and cloud-based systems for the development, publishing and management of content.

for more about the **photon ✴ PLATFORM**, visit us at <https://photon-platform.net>

Be sure to check out our video series on Youtube:
[Introduction to photon PLATFORM](https://www.youtube.com/playlist?list=PLruFHGFsvC_yEkLoYGsBavfg8qmymMQOQ)

**TOC**

<!-- @import "[TOC]" {cmd="toc" depthFrom=2 depthTo=6 orderedList=false} -->

<!-- code_chunk_output -->

* [Setup](#setup)
* [THEMES](#themes)
	* [photon THEME](#photon-theme)
	* [photon CHILD theme](#photon-child-theme)
	* [Theme Configuration](#theme-configuration)
* [PLUGINS](#plugins)
	* [Core Grav Plugins](#core-grav-plugins)
	* [photon PLUGINS](#photon-plugins)
* [PAGES](#pages)
	* [Page Data Types](#page-data-types)
* [About the photon ✴ PLATFORM](#about-the-photon-platform)

<!-- /code_chunk_output -->

## Setup

This STARTER project is not a standalone website. It is just the `user` folder for a Grav installation.

Setting up Grav can mean setting up a lot of prerequisites. So follow the installation guidance [here](https://learn.getgrav.org/basics/installation).

After you configure a working Grav site on your local environment, you can remove the `user` folder and clone this repo in its place.

Since the Grav code is a fixed set of code across all projects, we leave it out of the repo.

From the commandline in your Grav project directory:

    rm -rf user
    git clone --recurse-submodules https://github.com/photon-platform/photon.git user

`--recurse-submodules` is important because the **photon THEME** and many photon plugins as managed as separate git repositories and are then include in this repo as a submodule.

And make sure you specify the `user` folder at the end of the command

Eventually, we will configure a true skeleton project for submission to Grav Package Manager (GPM)

## THEMES

[`themes`](themes)
There are two themes in the starter project

### photon THEME

[`themes/photon`](https://github.com/photon-platform/grav-theme-photon)

The **photon THEME** is a git submodule in this repo until it is be submitted to the Grav Package Manager. You can find the Github repo here:
<https://github.com/photon-platform/grav-theme-photon>
Check the Theme's README.md for more info.

### photon CHILD theme

[`themes/photon-child`](themes/photon-child)

Grav provides the ability to have a child theme that can inherit and override the templates and styles within the parent theme.

topics:

-   customizing the theme

### Theme Configuration

photon uses a set of CSS variables to configure a number of important attributes of the style of the site. These variables are set in the admin panel, as specified in the

-   fonts
-   color pallete
-   core dimensions

CSS styles in the photon THEME use these variables, allowing changes to be made without recompiling the css

[`blueprints/config/style.yaml`](blueprints/config/style.yaml)
contains the form specifications for the style variables of the site.

[`config/style.yaml`](config/style.yaml)
stores the settings

## PLUGINS

[`plugins`](plugins)

see the README.md in the plugins folder for more on the current set of plugins

all photon PLUGINS are set in the starter site as git submodules

### Core Grav Plugins

Come with the standard install
[COMMAND](https://github.com/photon-platform/grav-plugin-photon)

### photon PLUGINS

## PAGES

[`pages`](pages)

the `pages` folder contains the content for the system.

The content is stored in folders and files.

### Page Data Types

-   article
-   calendar
-   event
-   person
-   organization
-   search

## About the photon ✴ PLATFORM

<table id="signature"   cellspacing="0" cellpadding="0"   style="width: 100%;
    border: 0;
    background: #222;
    color: #EFEFEF;">
<tr>
<td id="logo"
style="width:100px; vertical-align:top; padding-right: 1em;">
<a href="https://photon-platform.net/" target="_blank">
<img alt="photon logo" title="Link to photon PLATFORM"
style="width:100px; height:100px; border:0;"
src="https://photon-platform.net/images/photon-logo-200.png" width="100" height="100" border="0"></a>
</td>
<td style=" vertical-align:middle;letter-spacing: .1em; ">
<table cellspacing="0" cellpadding="0" style="
margin: 0;
padding: 0;
border: none;
color: #EFEFEF;
font-size: 10pt;
">
<tbody>

<tr>
<td style="padding: .2em;">
<b>phi</b> &#x2022; ARCHITECT</td>
</tr>

<tr>
<td style="padding: .2em;">
<a href="https://photon-platform.net" title="link to photon PLATFORM" target="_blank"style="text-decoration: none; color: #C90;">photon PLATFORM</a>
</td>
</tr>


<tr>
<td style="padding: .2em;"><!-- youtube --><a href="https://www.youtube.com/channel/UCYzRQS16EBmsbKuyKMFHSFQ" target="_blank"><img alt="youtube logo" title="connect on youtube" style="border:0;" src="https://img.icons8.com/color/24/000000/youtube-play.png" border="0"></a><!-- github --><a href="https://github.com/photon-platform" target="_blank"><img alt="github logo" title="fork on github" style="border:0;" src="https://img.icons8.com/color/24/000000/github.png" border="0"></a><!-- linkedin --><a href="https://www.linkedin.com/in/phi-architect" target="_blank"><img alt="linkedin logo" title="connect on linkedin" style="border:0;" src="https://img.icons8.com/color/24/000000/linkedin.png" border="0"></a><!-- twitter --><a href="https://www.twitter.com/phi_architect" target="_blank"><img alt="twitter logo" title="connect on twitter" style="border:0;" src="https://img.icons8.com/color/24/000000/twitter-squared.png" border="0"></a><!-- facebook --><a href="https://www.facebook.com/phi.architect" target="_blank"><img alt="facebook logo" title="connect on facebook" style="border:0;" src="https://img.icons8.com/color/24/000000/facebook.png" border="0"></a></td>
</tr>
</tbody>
</table>
</td>

</tr>
</table>
