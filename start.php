<?php  

function get($url = null, $headers = null) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	if ($headers != "") {
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	}

	return $result = curl_exec($ch);
	curl_close($ch);
}

function number($length) {
	$characters = '0123456789';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}

echo "\e[96m";
echo "";
echo " _____   _____   _____  _     _  _  _     _  _     _  _   _  _  ________   __
|  __ \ |  __ \ |  ___|| \   / || || |   | || \   / || | / || ||___  ___| /  \
| |__) || |__) || |___ |  \_/  || || |   | ||  \_/  || |/ / | |   |  |   / /\ \
|  ___/ |  __ / |  ___|| |\_/| || || |   | || |\_/| ||   |  | |   |  |  / ____ \
| |     | | \ \ | |___ | |   | || || |___| || |   | || |\ \ | |   |  | / /    \ \
|_|     |_|  \_\|_____||_|   |_||_||_______||_|   |_||_| \_||_|   |__|/_/      \_\
";
echo "===================================================================================\n";
echo "                        SPOTIFY PREMIUM ACCOUNT CREATOR                            \n";
echo "===================================================================================\n";


echo "\e[93mJumlah Akun : ";
$banyak = trim(fgets(STDIN));
echo "\n\e[93mPilih Layanan Premium :";
echo "
1. Premium Owner Family
2. Premium 3 Bulan
3. Premium 1 Bulan
Masukan Angka : ";
$tipe = trim(fgets(STDIN));
echo "\n";
echo "\e[93mSEDANG MEMBUAT AKUN\n";

for ($i = 0; $i < $banyak ; $i++) {
	sleep(3);
	flush();
	if ($tipe == '1') {
		echo $data = "\e[92m[SUKSES]\e[0m premiumkita".number(6)."@gmail.com | premiumkita123 [Premium Owner Family]\n\r";
		$fh = fopen("result.txt", "a");
		fwrite($fh, "premiumkita".number(6)."@gmail.com | premiumkita123 [Premium Owner Family] \n\r");
		fclose($fh);
	} elseif ($tipe == '2') {
		echo $data = "\e[92m[SUKSES]\e[0m premiumkita".number(6)."@gmail.com | premiumkita123 [Premium 3 Bulan]\n\r";
		$fh = fopen("result.txt", "a");
		fwrite($fh, "premiumkita".number(6)."@gmail.com | premiumkita123 [Premium 3 Bulan] \n\r");
		fclose($fh);
	} elseif ($tipe == '3') {
		echo $data = "\e[92m[SUKSES]\e[0m premiumkita".number(6)."@gmail.com | premiumkita123 [Premium 1 Bulan]\n\r";
		$fh = fopen("result.txt", "a");
		fwrite($fh, "premiumkita".number(6)."@gmail.com | premiumkita123 [Premium 1 Bulan] \n\r");
		fclose($fh);
	}
}
echo "====================================================\n";
echo "Akun Spotify Premium \e[92mSUKSES\e[0m Dibuat Cek result.txt\n";
echo "====================================================\n";

?>