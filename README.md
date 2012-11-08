# Cookiebar Module #

## Overview ##

This module provides a configurable notice about cookies, a link to a page about them and an 'accept' link to close the notice

## Maintainer Contact

 * Aram Balakjian 
   <aram (at) aabweb (dot) com>
   www.aabweb.co.uk
 * Steve Heyes
   <steve.heyes (at) studiobonito (dot) co.uk>
   www.studiobonito.co.uk

## Requirements

 * Use Tag v1 for SilverStripe 2.4.1 or newer
 * Use Tag v1.1 for SilverStripe 3 or newer

## Installation

Unpack and copy the cookiebar folder into your SilverStripe project (You can call the folder whatever you like).

Now add the include CookieBar.ss file at the top of your Page.ss template, just after <body> like so:

	...
	<body>
	<% include CookieBar %>
	...


Run "dev/build" in your browser, for example: "http://www.mysite.com/dev/build?flush=all"

To see the module in action visit http://www.aabweb.co.uk