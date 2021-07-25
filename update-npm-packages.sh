#!/bin/sh -e

# See: https://www.npmjs.com/package/npm-check-updates

if ! [ -x "$(command -v ncu)" ]; then
    npm install -g npm-check-updates
fi

ncu -u

yarn install --prod
