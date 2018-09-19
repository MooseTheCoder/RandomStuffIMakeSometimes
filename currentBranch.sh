#!/bin/bash
  
git status | grep 'Your branch is up-to-date with' | grep -o "'.*'"
git status | grep 'On branch' | sed -e "s/On branch //"
