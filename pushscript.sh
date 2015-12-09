#!/bin/bash
git remote add origin https://github.com/riskiidice/Yii2project.git
git add -A
x=$(date | awk '{print $1"/"$2"/"$3"/"$4}')
git commit -m $x
git push -u origin master

