while [ : ]
do
    clear
    google-chrome --incognito www.albañiles.com.ar?buscar=true &
    echo "abriendo"
    sleep 30
    killall chrome
    sleep 1
done
