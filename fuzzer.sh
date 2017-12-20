#!/bin/sh

WORKING_DIR='/dev/shm/'
CYCLE_COUNT=10000

if [[ ! -d "$WORKING_DIR" ]];
then
	mkdir $WORKING_DIR;
fi

mkdir $WORKING_DIR/crashes

while true;
do

	echo "Creating 1000 files"
	for i in {1..1000};
	do (
		php generator.php > $WORKING_DIR/$i.php
	)& done

	while [[ ! -f $WORKING_DIR/1000.php ]]; do sleep 0.1; done

	echo "Fuzzing..."
	for i in {1..1000};
	do (
		timeout 3 php $WORKING_DIR/$i.php
		RET=$?
		#echo "returned: "$RET
		if [[ "$RET" -ne 0 && "$RET" -ne 255 ]]; #sigsegv == 139?
		then
			echo "Found crash!!!"
			cp $WORKING_DIR/$i.php $WORKING_DIR/crashes/
		fi
		rm $WORKING_DIR/$i.php
	)& done

	while [[ -f $WORKING_DIR/1000.php ]]; do sleep 0.1; done

done