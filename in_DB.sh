#!/bin/bash

for i in ./images/*; do 
mysql -u root -p"qt67uy" mix -e "INSERT INTO mix_podelki (photo) VALUES ('$i')"
done
