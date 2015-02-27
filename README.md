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

 * SilverStripe 3 or newer (use 2.4 Branch for SS2.4)

## Installation

Unpack and copy the cookiebar folder into your SilverStripe project (You can call the folder whatever you like).

Now add the include CookieBar.ss file at the top of your Page.ss template, just after <body> like so:

	...
	<body>
	<% include CookieBar %>
	...


Run "dev/build" in your browser, for example: "http://www.mysite.com/dev/build?flush=all"
