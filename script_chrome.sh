while [ : ]
do
    clear
    google-chrome --incognito www.albañiles.com.ar &
    echo "abriendo"
    sleep 10
    killall chrome
done
