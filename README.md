Phing Drush
===========

## Overview

A collection of Drush targets for Phing.

## Installation

This project can be checked out with Composer.

```
"require": {
    "jorgegc/phing-drush": "*"
}
```

If you are already running a Phing build in an existing project why not
include these tasks as well with the following line in your build.xml:

```
<import file="vendor/jorgegc/phing-drush/build.xml" optional="true" />
<import file="vendor/jorgegc/phing-drush/build.simpletest.xml" optional="true" />
```

## Usage

To get a list of tasks.

```
phing -l
```
