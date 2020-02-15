<?php
$username = "TeaM";
$password = "Cyber";

system("clear");
echo "login dulu su_<\n";
echo "username : ";
$user = trim(fgets(STDIN));
echo "password : ";
$pass = trim(fgets(STDIN));
if($user == $username && $pass == $password)
{
echo "login Sukses_<\n";
sleep(2);
system("clear");
echo "\n";
echo "==========================================\n";
echo "Author : Dona\n";
echo "Youtub: TeaMCyber\n";
echo "Github : https://github.com/Maref0705/Dona\n";
echo "------------------------------------------\n";
echo "[?] Install Tools Nya Njing! :\n";
echo "------------------------------------------\n";
echo "[1] Spam Wa\n";
echo "[2] Darkfb\n";
echo "[3] DDos\n";
echo "[4] Exit\n";
echo "------------------------------------------\n";
echo "[+] PILIH Tools Nya :";
echo "\n Thex »--> ";
$pil = trim(fgets(STDIN));
if($pil == 1){
       system('git clone https://github.com/Fukur0-3XP/SpamWa');
       system('cd SpamWa');
       system('python2 Wa.py');
               }
if($pil == 2){
	   system('git clone https://github.com/B4N954N2-ID/Darkpremium');
	   system('cd Darkpremium');
	   system('python2 darkpremium.py');
	           }
if($pil == 3){
	   system('git clone https://github.com/Mr-R0N1Z/phoenix_ddos');
	   system('cd phoenix_ddos');
	   system('sh phoenix.sh');
	           }
if($pil == 4){
	   echo "By Goblok!\n";
	   sleep(3);
	   system('exit');
	           }

}
else
{
echo "salah Goblok!_-\n";
sleep(3);
}

?>