#!/bin/bash
# KEY="ms9z-mx5s-fvjg-9tmf-93ap" 
# rm xx.mp4
# bash -c "mega-get https://mega.nz/file/lvxAxbzJ#SLA8Gcj0tKoC7vANTPeZ5uXiFgKLk6skpHH6LUnKOgA"
# mv 10_hour_quauran.mp4  xx.mp4
cd /dockerstartup/
wget "https://www.dropbox.com/s/3cw0w7x5y08713w/xx.mp4?dl=1" -O xx.mp4



while true
do
	KEY=$SEC_YOU
	echo "NEW ..............." $KEY
	echo $SEC_YOU
	ffmpeg -re -i xx.mp4 -c:v libx264 -b:v 900k -c:a copy -strict -2 -flags +global_header -bsf:a aac_adtstoasc -bufsize 2100k -f flv rtmp://a.rtmp.youtube.com/live2/$KEY
	# python3 google_let.py
done
