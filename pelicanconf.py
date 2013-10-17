#!/usr/bin/env python
# -*- coding: utf-8 -*- #
from __future__ import unicode_literals

AUTHOR = u'Edwin Hermans'
SITENAME = u'madeddieclopaedia'
SITEURL = 'http://madeddie.github.io'
TIMEZONE = 'Europe/Amsterdam'
DEFAULT_LANG = u'en'

GITHUB_URL = 'http://github.com/madeddie/'

# Feed generation is usually not desired when developing
FEED_ALL_ATOM = 'feeds/all.atom.xml'
CATEGORY_FEED_ATOM = 'feeds/%s.atom.xml'

# Blogroll
LINKS =  (('inside Habbie\'s mind', 'http://http://7bits.nl/blog/'),
          ('Pelican', 'http://getpelican.com/'),
          ('Python.org', 'http://python.org/'),)

# Social widget
SOCIAL = (('Twitter', 'http://twitter.com/madeddie'),
          ('github', 'http://github.com/madeddie'),)

DEFAULT_PAGINATION = 4

# Uncomment following line if you want document-relative URLs when developing
#RELATIVE_URLS = True
