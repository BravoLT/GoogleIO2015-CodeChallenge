#!/bin/bash
if [ $# -ne 1 ]
  then
    echo "Usage: run.sh filename"
else
  DIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )
  php=`which php`
  $php $DIR/challenge3.php $1
fi
