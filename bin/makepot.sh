#!/usr/bin/env bash

docker run \
  --user root \
  --rm \
  --volume  "$(pwd):/var/www/html/lmscourse-fse" \
  wordpress:cli bash -c 'php -d memory_limit=1024M "$(which wp)" i18n make-pot ./lmscourse-fse/ ./lmscourse-fse/languages/lmscourse-fse.pot --headers={\"Last-Translator\":\"friends@themeisle.com\"\,\"Project-Id-Version\":\"LMSCourseFSE\"\,\"Report-Msgid-Bugs-To\":\"https://github.com/Codeinwp/lmscourse-fse/issues\"\} --allow-root --exclude=dist,build,bundle,e2e-tests '