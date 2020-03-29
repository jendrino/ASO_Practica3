#!/bin/bash

echo $1
echo $2
echo $3
echo $4
gid=$(wbinfo --group-info=$2)
echo $gid
gid_number=$(echo $gid |cut -d: -f3)
echo $gid_number


sudo samba-tool user add  $1  $4 --home-directory $3 --gid-number $gid_number

sudo samba-tool group addmembers $2 $1
