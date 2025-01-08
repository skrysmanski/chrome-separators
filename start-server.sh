#!/bin/sh -e

echo
echo Starting server at: http://localhost:8080
echo

apache2ctl -D FOREGROUND -c "ServerName localhost"
