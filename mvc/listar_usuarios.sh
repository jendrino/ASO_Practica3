#!/bin/bash
rm user.txt
echo  "listando users"
sudo samba-tool user list > user.txt