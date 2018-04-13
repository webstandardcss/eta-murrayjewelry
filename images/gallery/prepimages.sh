!#/bin/bash

for f in *\ *; do mv "$f" "${f// /_}"; done
for i in *; do mv $i `echo $i | tr [:upper:] [:lower:]`; done
