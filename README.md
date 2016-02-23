# AlfrescoDoc for Joomla

[![Latest Stable Version](https://poser.pugx.org/mct/alfrescodoc-joomla/v/stable)](https://packagist.org/packages/mct/alfrescodoc-joomla) 
[![Total Downloads](https://poser.pugx.org/mct/alfrescodoc-joomla/downloads)](https://packagist.org/packages/mct/alfrescodoc-joomla) 
[![Latest Unstable Version](https://poser.pugx.org/mct/alfrescodoc-joomla/v/unstable)](https://packagist.org/packages/mct/alfrescodoc-joomla) 
[![License](https://poser.pugx.org/mct/alfrescodoc-joomla/license)](https://packagist.org/packages/mct/alfrescodoc-joomla)



 
## About AlfrescoDoc

alfrescodoc is a [Joomla](https://www.joomla.org) module to display document from [Alfresco](https://www.alfresco.com) server powered by [Alfesco PHP CMIS CLIENT](https://github.com/fvettore/php-alf-cmis-api).
 


## Features

- Easy dispaly document and folder metadata from ALFRESCO server.
- Using ALFRESCO CMIS API
- It's possible to control which metadata to display.

## AlfrescoDoc requires

- ALFRESCO 5.X with cmisatom binding (url like: http://alfresco:8080/alfresco/cmisatom)
- PHP with CURL and XML enabled

Partial compatibility (browsing and retrieving objects and aspects is OK) with old Alfresco (under development) (url like http://alfresco:8080/alfresco/service/api/cmis)

## Installation

It can be installed from Composer or source cord download.

### Installation using Composer

Please open a command prompt and carry out the next command.

```sh
$ cd <parent-of-an-install-directory>
$ composer create-project alfrescodoc-joomla <an-install-directory>
```

### Source code is downloaded and installed.

A [Download ZIP](https://github.com/MajesticComputerTechnology/alfrescodoc-joomla/archive/master.zip) button of our repository of GitHub is pressed and source cord is downloaded.

And ZIP is developed in an optional directory of a local machine.


## Copyright

2016 [Majestic Computer Technology](http://majestic.com.au), All rights reserved.



## Licenses

[AlfrescoDoc](https://github.com/MajesticComputerTechnology/alfrescodoc-joomla) is open-sourced software licensed under the [Apache License v2.0](http://www.apache.org/licenses/LICENSE-2.0)
