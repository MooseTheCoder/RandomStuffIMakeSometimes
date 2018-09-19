#!/bin/bash

git status | grep 'On branch' | sed -e "s/On branch //"
