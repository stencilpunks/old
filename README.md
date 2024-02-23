# Stencil Punks

This is an Static sit built with 11ty. Dependencies are intentionally kept at a minimum to help with long-term maintainability.

## Setup

### Install Node.js

[Node](https://nodejs.org/en/) is a js runtime for servers, but it is also used extensively to run live dev environments for frontend projects. [NPM](https://www.npmjs.com/) is the package manager for Node. It provides a systematic way to share and load third-party js packages.

- [Windows](https://learn.microsoft.com/en-us/windows/dev-environment/javascript/nodejs-on-windows)
- [Linux and Mac](https://github.com/nvm-sh/nvm)
- Or in MacOS via (homebrew)[https://brew.sh]: `brew install nvm`

### Install the correct version of node

Check the "engines" value in package.json and install a node version that satisfies the requirements. eg:

```sh
nvm install 20
nvm use 20
```

### Install the Dependencies

Open a terminal in the project root and install the dependencies:

```sh
npm i
```

### Run the site in dev mode

```sh
npm run start
```

## Project Structure

- `_data` contains strucutred data that can be accessed anywhere in the site.
- `_includes` contains components that can be reused in multiple templates.
- `_layouts` contains the global page layouts.
- `_site` this is the build folder for the site. Don't touch this. This is a generated artifact 11ty.
- `assets` this is a dir for all static assets, images, fonts, styles, scripts, etc. This gets automatically passed-through to `_site`.
- `node_modules` this contains the dependencies required to run the 11ty Static Site Generator
