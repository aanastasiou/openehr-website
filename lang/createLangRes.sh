#!/bin/bash
#Athanasios Anastasiou 18/12/2012
#Very simple automation of the generation of resource bundle files for languages
#This command will create one binary res file, within "lang/bin", for each .txt (human readable) file in the lang/src directory
#NOTE: genrb is found in libicu-dev (in Ubuntu)
genrb -d bin/ `ls src/*.txt`
