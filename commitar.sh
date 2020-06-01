#!/bin/bash
git pull
git add .
data=`date +%d-%m-%Y_%H:%M:%S`
git commit -m $data
<<<<<<< HEAD
git push origin master
=======
git push
>>>>>>> f4e70a6b6d232ee6cb15acae19622b8e9e912898
echo "##### OK #####"
