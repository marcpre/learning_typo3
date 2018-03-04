#!/usr/bin/env bash

# phase one: core install

# Pro tip: edit the script and use this repository instead to try out the
# codename "Awesome Ocelot" project - which should be even faster than the
# bare 6.2 core: https://github.com/NamelessCoder/TYPO3.CMS.git
# Live demo of "Awesome Ocelot" is at http://staging.namelesscoder.net

git clone https://github.com/TYPO3/TYPO3.CMS.git --depth 1

ln -s TYPO3.CMS typo3_src
ln -s typo3_src/index.php
ln -s typo3_src/typo3
echo "Now open the TYPO3 backend and complete the install wizard"
echo "Remember: You must add the _cli_lowlevel backend user!"
read -p "Press any key to continue AFTER you complete the install wizard and create the _cli_lowlevel user"

# phase two: extension fetching and installation
git clone https://github.com/FluidTYPO3/flux.git --single-branch --branch development --depth 1 typo3conf/ext/flux
git clone https://github.com/FluidTYPO3/fluidcontent.git --single-branch --branch development --depth 1 typo3conf/ext/fluidcontent
git clone https://github.com/FluidTYPO3/fluidpages.git --single-branch --branch development --depth 1 typo3conf/ext/fluidpages
git clone https://github.com/FluidTYPO3/vhs.git --single-branch --branch development --depth 1 typo3conf/ext/vhs
git clone https://github.com/FluidTYPO3/builder.git --single-branch --branch development --depth 1 typo3conf/ext/builder

./typo3/cli_dispatch.phpsh extbase extension:install flux
./typo3/cli_dispatch.phpsh extbase extension:install fluidpages
./typo3/cli_dispatch.phpsh extbase extension:install fluidcontent
./typo3/cli_dispatch.phpsh extbase extension:install vhs
./typo3/cli_dispatch.phpsh extbase extension:install builder

# phase three: fluidcontent_core if desired
echo "You can now choose to install FluidcontentCore (TYPO3 core content using Fluid)"
read -p "Press CTRL+C to finish (use css_styled_content). Press any other key to remove css_styled_content and install fluidcontent_core"

git clone https://github.com/FluidTYPO3/fluidcontent_core.git --single-branch --branch development --depth 1 typo3conf/ext/fluidcontent_core
./typo3/cli_dispatch.phpsh extbase extension:uninstall css_styled_content
./typo3/cli_dispatch.phpsh extbase extension:install fluidcontent_core