<a href="https://photon-platform.net/">
    <img src="https://photon-platform.net/images/photon-logo-bg.png" alt="photon" title="photon" align="right" height="120" />
</a>

# `photon ✴ STARTER`

a skeleton site for the [Grav CMS](https://getgrav.org), the templating engine for the **photon ✴ PLATFORM**.

you can view a demo of this starter site at https://starter.photon-platform.net

for more about the **photon ✴ PLATFORM**, visit us at https://photon-platform.net



**TOC**
<!-- @import "[TOC]" {cmd="toc" depthFrom=2 depthTo=6 orderedList=false} -->
<!-- code_chunk_output -->

* [Setup](#setup)

<!-- /code_chunk_output -->

## Setup

This Starter project is not a standalone website. It is just the `user` folder for a Grav installation.

Setting up Grav can mean setting up a lot of prerequisites. So follow the guidance [here](https://learn.getgrav.org/basics/installation).

When you have a working Grav site on your local environment, you can remove the `user` folder and install this project in its place.
Since the Grav code is a fixed set of code across all projects. We can leave it out of the repo.

From the commandline in your Grav project directory:

```
rm -rf user
git clone --recurse-submodules https://github.com/photon-platform/photon.git user

```

`--recurse-submodules` is important because the photon theme and many photon plugins as managed as separate git repositories and are then include in this repo as a submodule.

and make sure you specify the `user` folder at the end of the command

Keep in mind that the photon PLATFORM is concieved as an entire system. So, we are setting the configuration for an entire Linux development environment, that will be ready to support many simulatneous Grav projects, as well as all the tools necessary



## photon ✴ THEME

git submodule
[Github repo](https://github.com/photon-platform/grav-theme-photon)

child theme

## photon ✴ PLUGINS

git submodules
[COMMAND](https://github.com/photon-platform/grav-plugin-photon)


## About the photon ✴ PLATFORM
