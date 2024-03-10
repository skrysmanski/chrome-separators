#!/bin/sh -e

apache2ctl -D FOREGROUND -c "ServerName localhost"
