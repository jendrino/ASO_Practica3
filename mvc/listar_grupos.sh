#!/bin/bash
rm grupo.txt
echo  "listando grupos"
sudo samba-tool group list > grupo.txt