#!/usr/bin/env bash

./vendor/bin/phpcs \
	--warning-severity=0 \
	-s \
	--ignore-annotations \
	--standard=./phpcs-full.xml \
	--extensions=php ./src
