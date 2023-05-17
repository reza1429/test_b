install folder yang ada di repository ini lalu unzip, 
pindahkan folder yang telah di unzip ke folder xampp/htdocs,
buat salinan file '.env.example' dan rename menjadi '.env',
konfigurasikan isi file env sesuai dengan konfigurasi yang ada di pc anda (settingan yang saya gunakan untuk connection: mongodb, host: 127.0.0.1, port: 27017),
setalah itu jalankan perintah 'php artisan migrate --seed' untuk membuat database serta data menambahkan beberapa data yang telah saya buat,
lalu jalankan perintah 'php artisan serve' untuk menjalankan web laravelnya.
