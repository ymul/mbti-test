<?php

use Illuminate\Database\Seeder;
use App\KategoriSoal;
use App\KategoriSoalPenilaian;
use App\Soal;
use App\OpsiSoal;

class AddSoalMBTISeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $kategoriSoal = new KategoriSoal();
        $kategoriSoal->nama = 'MBTI Interpertasi';
        $kategoriSoal->save();
        
        $kategoriSoalPenilaian = new KategoriSoalPenilaian();
        $kategoriSoalPenilaian->kategori_id = $kategoriSoal->id;
        $kategoriSoalPenilaian->range_awal = 2111;
        $kategoriSoalPenilaian->range_akhir = 2111;
        $kategoriSoalPenilaian->hasil = '<p><b><h1>ISTJ</h1></b></p>'
                . '<ul>'
                . ' <li>Serius, tenang, stabil & damai.</li>'
                . ' <li>Senang pada fakta, logis, obyektif, praktis & realistis.</li>'
                . ' <li>Task oriented, tekun, teratur, menepati janji, dapat diandalkan & bertanggung jawab.</li>'
                . ' <li>Pendengar yang baik, setia, hanya mau berbagi dengan orang dekat.</li>'
                . ' <li>Memegang aturan, standar & prosedur dengan teguh.</li>'
                . '</ul>';
        $kategoriSoalPenilaian->save();
        
        $kategoriSoalPenilaian = new KategoriSoalPenilaian();
        $kategoriSoalPenilaian->kategori_id = $kategoriSoal->id;
        $kategoriSoalPenilaian->range_awal = 2121;
        $kategoriSoalPenilaian->range_akhir = 2121;
        $kategoriSoalPenilaian->hasil = '<p><b><h1>ISFJ</h1></b></p>'
                . '<ul>'
                . ' <li>Penuh pertimbangan, hati-hati, teliti dan akurat.</li>'
                . ' <li>Serius, tenang, stabil namun sensitif.</li>'
                . ' <li>Ramah, perhatian pada perasaan & kebutuhan orang lain, setia, kooperatif, pendengar yang baik.</li>'
                . ' <li>Punya kemampuan mengorganisasi, detail, teliti, sangat bertanggungjawab & bisa diandalkan.</li>'
                . '</ul>';
        $kategoriSoalPenilaian->save();
        
        $kategoriSoalPenilaian = new KategoriSoalPenilaian();
        $kategoriSoalPenilaian->kategori_id = $kategoriSoal->id;
        $kategoriSoalPenilaian->range_awal = 2112;
        $kategoriSoalPenilaian->range_akhir = 2112;
        $kategoriSoalPenilaian->hasil = '<p><b><h1>ISTP</h1></b></p>'
                . '<ul>'
                . ' <li>Tenang, pendiam, cenderung kaku, dingin, hati-hati, penuh pertimbangan.</li>'
                . ' <li>Logis, rasional, kritis, obyektif, mampu mengesampingkan perasaan.</li>'
                . ' <li>Mampu menghadapi perubahan mendadak dengan cepat dan tenang.</li>'
                . ' <li>Percaya diri, tegas dan mampu menghadapi perbedaan maupun kritik.</li>'
                . ' <li>Mampu menganalisa, mengorganisir, & mendelegasikan.</li>'
                . ' <li>Problem solver yang baik terutama untuk masalah teknis & keadaan mendadak.</li>'
                . '</ul>';
        $kategoriSoalPenilaian->save();
        
        $kategoriSoalPenilaian = new KategoriSoalPenilaian();
        $kategoriSoalPenilaian->kategori_id = $kategoriSoal->id;
        $kategoriSoalPenilaian->range_awal = 2122;
        $kategoriSoalPenilaian->range_akhir = 2122;
        $kategoriSoalPenilaian->hasil = '<p><b><h1>ISFP</h1></b></p>'
                . '<ul>'
                . ' <li>Berpikiran simpel & praktis, fleksibel, sensitif, ramah, tidak menonjolkan diri, rendah hati pada kemampuannya.</li>'
                . ' <li>Menghindari konflik, tidak memaksakan pendapat atau nilai-nilainya pada orang lain.</li>'
                . ' <li>Biasanya tidak mau memimpin tetapi menjadi pengikut dan pelaksana yang setia.</li>'
                . ' <li>Seringkali santai menyelesaikan sesuatu, karena sangat menikmati apa yang terjadi saat ini.</li>'
                . ' <li>Menunjukkan perhatian lebih banyak melalui tindakan dibandingkan kata-kata.</li>'
                . '</ul>';
        $kategoriSoalPenilaian->save();
        
        $kategoriSoalPenilaian = new KategoriSoalPenilaian();
        $kategoriSoalPenilaian->kategori_id = $kategoriSoal->id;
        $kategoriSoalPenilaian->range_awal = 2221;
        $kategoriSoalPenilaian->range_akhir = 2221;
        $kategoriSoalPenilaian->hasil = '<p><b><h1>INFJ</h1></b></p>'
                . '<ul>'
                . ' <li>Perhatian, empati, sensitif & berkomitmen terhadap sebuah hubungan.</li>'
                . ' <li>Sukses karena ketekunan, originalitas dan keinginan kuat untuk melakukan apa saja yang diperlukan termasuk memberikan yg terbaik dalam pekerjaan.</li>'
                . ' <li>Idealis, perfeksionis, memegang teguh prinsip.</li>'
                . ' <li>Visioner, penuh ide, kreatif, suka merenung dan inspiring.</li>'
                . ' <li>Biasanya diikuti dan dihormati karena kejelasan visi serta dedikasi pada hal-hal baik.</li>'
                . '</ul>';
        $kategoriSoalPenilaian->save();
        
        $kategoriSoalPenilaian = new KategoriSoalPenilaian();
        $kategoriSoalPenilaian->kategori_id = $kategoriSoal->id;
        $kategoriSoalPenilaian->range_awal = 2211;
        $kategoriSoalPenilaian->range_akhir = 2211;
        $kategoriSoalPenilaian->hasil = '<p><b><h1>INTJ</h1></b></p>'
                . '<ul>'
                . ' <li>Visioner, punya perencanaan praktis, & biasanya memiliki ide-ide original serta dorongan kuat untuk mencapainya.</li>'
                . ' <li>Mandiri dan percaya diri.</li>'
                . ' <li>Punya kemampuan analisa yang bagus serta menyederhanakan sesuatu yang rumit dan abstrak menjadi sesuatu yang praktis, mudah difahami & dipraktekkan.</li>'
                . ' <li>Skeptis, kritis, logis, menentukan (determinatif) dan kadang keras kepala.</li>'
                . ' <li>Punya keinginan untuk berkembang serta selalu ingin lebih maju dari orang lain.</li>'
                . ' <li>Kritik & konflik tidak menjadi masalah berarti.</li>'
                . '</ul>';
        $kategoriSoalPenilaian->save();
        
        $kategoriSoalPenilaian = new KategoriSoalPenilaian();
        $kategoriSoalPenilaian->kategori_id = $kategoriSoal->id;
        $kategoriSoalPenilaian->range_awal = 2222;
        $kategoriSoalPenilaian->range_akhir = 2222;
        $kategoriSoalPenilaian->hasil = '<p><b><h1>INFP</h1></b></p>'
                . '<ul>'
                . ' <li>Sangat perhatian dan peka dengan perasaan orang lain.</li>'
                . ' <li>Penuh dengan antusiasme dan kesetiaan, tapi biasanya hanya untuk orang dekat.</li>'
                . ' <li>Peduli pada banyak hal. Cenderung mengambil terlalu banyak dan menyelesaikan sebagian.</li>'
                . ' <li>Cenderung idealis dan perfeksionis.</li>'
                . ' <li>Berpikir win-win solution, mempercayai dan mengoptimalkan orang lain.</li>'
                . '</ul>';
        $kategoriSoalPenilaian->save();
        
        $kategoriSoalPenilaian = new KategoriSoalPenilaian();
        $kategoriSoalPenilaian->kategori_id = $kategoriSoal->id;
        $kategoriSoalPenilaian->range_awal = 2212;
        $kategoriSoalPenilaian->range_akhir = 2212;
        $kategoriSoalPenilaian->hasil = '<p><b><h1>INTP</h1></b></p>'
                . '<ul>'
                . ' <li>Sangat menghargai intelektualitas dan pengetahuan. Menikmati hal-hal teoritis dan ilmiah. Senang memecahkan masalah dengan logika dan analisa.</li>'
                . ' <li>Diam dan menahan diri. Lebih suka bekerja sendiri.</li>'
                . ' <li>Cenderung kritis, skeptis, mudah curiga dan pesimis.</li>'
                . ' <li>Tidak suka memimpin dan bisa menjadi pengikut yang tidak banyak menuntut.</li>'
                . ' <li>Cenderung memiliki minat yang jelas. Membutuhkan karir dimana minatnya bisa berkembang dan bermanfaat. Jika menemukan sesuatu yang menarik minatnya, ia akan sangat serius dan antusias menekuninya.</li>'
                . '</ul>';
        $kategoriSoalPenilaian->save();
        
        $kategoriSoalPenilaian = new KategoriSoalPenilaian();
        $kategoriSoalPenilaian->kategori_id = $kategoriSoal->id;
        $kategoriSoalPenilaian->range_awal = 1112;
        $kategoriSoalPenilaian->range_akhir = 1112;
        $kategoriSoalPenilaian->hasil = '<p><b><h1>ESTP</h1></b></p>'
                . '<ul>'
                . ' <li>Spontan, Aktif, Enerjik, Cekatan, Cepat, Sigap, Antusias, Fun dan penuh variasi.</li>'
                . ' <li>Komunikator, asertif, to the point, ceplas-ceplos, berkarisma, punya interpersonal skill yang baik.</li>'
                . ' <li>Baik dalam pemecahan masalah langsung di tempat. Mampu menghadapi masalah, konflik dan kritik. Tidak khawatir, menikmati apapun yang terjadi.</li>'
                . ' <li>Cenderung untuk menyukai sesuatu yang mekanistis, kegiatan bersama dan olahraga.</li>'
                . ' <li>Mudah beradaptasi, toleran, pada umumnya konservatif tentang nilai-nilai. Tidak suka penjelasan terlalu panjang. Paling baik dalam hal-hal nyata yang dapat dilakukan.</li>'
                . '</ul>';
        $kategoriSoalPenilaian->save();
        
        $kategoriSoalPenilaian = new KategoriSoalPenilaian();
        $kategoriSoalPenilaian->kategori_id = $kategoriSoal->id;
        $kategoriSoalPenilaian->range_awal = 1122;
        $kategoriSoalPenilaian->range_akhir = 1122;
        $kategoriSoalPenilaian->hasil = '<p><b><h1>ESFP</h1></b></p>'
                . '<ul>'
                . ' <li>Outgoing, easygoing, mudah berteman, bersahabat, sangat sosial, ramah, hangat, & menyenangkan.</li>'
                . ' <li>Optimis, ceria, antusias, fun, menghibur, suka menjadi perhatian.</li>'
                . ' <li>Punya interpersonal skill yang baik, murah hati, mudah simpatik dan mengenali perasaan orang lain. Menghindari konflik dan menjaga keharmonisan suatu hubungan.</li>'
                . ' <li>Mengetahui apa yang terjadi di sekelilingnya dan ikut serta dalam kegiatan tersebut.</li>'
                . ' <li>Sangat baik dalam keadaan yang membutuhkan common sense, tindakan cepat dan ketrampilan praktis.</li>'
                . '</ul>';
        $kategoriSoalPenilaian->save();
        
        $kategoriSoalPenilaian = new KategoriSoalPenilaian();
        $kategoriSoalPenilaian->kategori_id = $kategoriSoal->id;
        $kategoriSoalPenilaian->range_awal = 1222;
        $kategoriSoalPenilaian->range_akhir = 1222;
        $kategoriSoalPenilaian->hasil = '<p><b><h1>ENFP</h1></b></p>'
                . '<ul>'
                . ' <li>Ramah, hangat, enerjik, optimis, antusias, semangat tinggi, fun.</li>'
                . ' <li>Imaginatif, penuh ide, kreatif, inovatif.</li>'
                . ' <li>Mampu beradaptasi dengan beragam situasi dan perubahan.</li>'
                . ' <li>Pandai berkomunikasi, senang bersosialisasi & membawa suasana positif.</li>'
                . ' <li>Mudah membaca perasaan dan kebutuhan orang lain.</li>'
                . '</ul>';
        $kategoriSoalPenilaian->save();
        
        $kategoriSoalPenilaian = new KategoriSoalPenilaian();
        $kategoriSoalPenilaian->kategori_id = $kategoriSoal->id;
        $kategoriSoalPenilaian->range_awal = 1212;
        $kategoriSoalPenilaian->range_akhir = 1212;
        $kategoriSoalPenilaian->hasil = '<p><b><h1>ENTP</h1></b></p>'
                . '<ul>'
                . ' <li>Gesit, kreatif, inovatif, cerdik, logis, baik dalam banyak hal.</li>'
                . ' <li>Banyak bicara dan punya kemampuan debat yang baik. Bisa berargumentasi untuk senang-senang saja tanpa merasa bersalah.</li>'
                . ' <li>Fleksibel. Punya banyak cara untuk memecahkan masalah dan tantangan.</li>'
                . ' <li>Kurang konsisten. Cenderung untuk melakukan hal baru yang menarik hati setelah melakukan sesuatu yang lain.</li>'
                . ' <li>Punya keinginan kuat untuk mengembangkan diri.</li>'
                . '</ul>';
        $kategoriSoalPenilaian->save();
        
        $kategoriSoalPenilaian = new KategoriSoalPenilaian();
        $kategoriSoalPenilaian->kategori_id = $kategoriSoal->id;
        $kategoriSoalPenilaian->range_awal = 1111;
        $kategoriSoalPenilaian->range_akhir = 1111;
        $kategoriSoalPenilaian->hasil = '<p><b><h1>ESTJ</h1></b></p>'
                . '<ul>'
                . ' <li>Praktis, realistis, berpegang pada fakta, dengan dorongan alamiah untuk bisnis dan mekanistis.</li>'
                . ' <li>Sangat sistematis, procedural dan terencana.</li>'
                . ' <li>Disiplin, on time dan pekerja keras.</li>'
                . ' <li>Konservatif dan cenderung kaku.</li>'
                . ' <li>Tidak tertarik pada subject yang tidak berguna baginya, tapi dapat menyesuaikan diri jika diperlukan.</li>'
                . ' <li>Senang mengorganisir sesuatu. Bisa menjadi administrator yang baik jika mereka ingat untuk memperhatikan perasaan dan perspektif orang lain.</li>'
                . '</ul>';
        $kategoriSoalPenilaian->save();
        
        $kategoriSoalPenilaian = new KategoriSoalPenilaian();
        $kategoriSoalPenilaian->kategori_id = $kategoriSoal->id;
        $kategoriSoalPenilaian->range_awal = 1121;
        $kategoriSoalPenilaian->range_akhir = 1121;
        $kategoriSoalPenilaian->hasil = '<p><b><h1>ESFJ</h1></b></p>'
                . '<ul>'
                . ' <li>Hangat, banyak bicara, populer, dilahirkan untuk bekerjasama, suportif dan anggota kelompok yang aktif.</li>'
                . ' <li>Membutuhkan keseimbangan dan baik dalam menciptakan harmoni.</li>'
                . ' <li>Selalu melakukan sesuatu yang manis bagi orang lain. Kerja dengan baik dalam situasi yang mendukung dan memujinya.</li>'
                . ' <li>Santai, easy going, sederhana, tidak berfikir panjang.</li>'
                . ' <li>Teliti dan rajin merawat apa yang ia miliki.</li>'
                . '</ul>';
        $kategoriSoalPenilaian->save();
        
        $kategoriSoalPenilaian = new KategoriSoalPenilaian();
        $kategoriSoalPenilaian->kategori_id = $kategoriSoal->id;
        $kategoriSoalPenilaian->range_awal = 1221;
        $kategoriSoalPenilaian->range_akhir = 1221;
        $kategoriSoalPenilaian->hasil = '<p><b><h1>ENFJ</h1></b></p>'
                . '<ul>'
                . ' <li>Kreatif, imajinatif, peka, sensitive, loyal.</li>'
                . ' <li>Pada umumnya peduli pada apa kata orang atau apa yang orang lain inginkan dan cenderung melakukan sesuatu dengan memperhatikan perasaan orang lain.</li>'
                . ' <li>Pandai bergaul, meyakinkan, ramah, fun, populer, simpatik. Responsif pada kritik dan pujian.</li>'
                . ' <li>Menyukai variasi dan tantangan baru.</li>'
                . ' <li>Butuh apresiasi dan penerimaan.</li>'
                . '</ul>';
        $kategoriSoalPenilaian->save();
        
        $kategoriSoalPenilaian = new KategoriSoalPenilaian();
        $kategoriSoalPenilaian->kategori_id = $kategoriSoal->id;
        $kategoriSoalPenilaian->range_awal = 1211;
        $kategoriSoalPenilaian->range_akhir = 1211;
        $kategoriSoalPenilaian->hasil = '<p><b><h1>ENTJ</h1></b></p>'
                . '<ul>'
                . ' <li>Tegas, asertif, to the point, jujur terus terang, obyektif, kritis, & punya standard tinggi.</li>'
                . ' <li>Dominan, kuat kemauannya, perfeksionis dan kompetitif.</li>'
                . ' <li>Tangguh, disiplin, dan sangat menghargai komitmen.</li>'
                . ' <li>Cenderung menutupi perasaan dan menyembunyikan kelemahan.</li>'
                . ' <li>Berkarisma, komunikasi baik, mampu menggerakkan orang.</li>'
                . ' <li>Berbakat pemimpin.</li>'
                . '</ul>';
        $kategoriSoalPenilaian->save();
        
        $soal = new Soal();
        $soal->kategori_soal_id = $kategoriSoal->id;
        $soal->tipe_soal_id = 1;
        $soal->soal = 'Soal 1';
        $soal->urutan = 1;
        $soal->save();
        
        $opsiSoal = new OpsiSoal();
        $opsiSoal->soal_id = $soal->id;
        $opsiSoal->opsi = 'E';
        $opsiSoal->jawaban = 'Saya orang yang ramah, membuka hati dan saya suka berada bersama-sama dengan orang lain.';
        $opsiSoal->nilai = 1000;
        $opsiSoal->save();
        
        $opsiSoal = new OpsiSoal();
        $opsiSoal->soal_id = $soal->id;
        $opsiSoal->opsi = 'I';
        $opsiSoal->jawaban = 'Saya membutuhkan banyak waktu untuk sendirian dan agak hati-hati untuk memulai hubungan baru.';
        $opsiSoal->nilai = 2000;
        $opsiSoal->save();
        
        $soal = new Soal();
        $soal->kategori_soal_id = $kategoriSoal->id;
        $soal->tipe_soal_id = 1;
        $soal->soal = 'Soal 2';
        $soal->urutan = 2;
        $soal->save();
        
        $opsiSoal = new OpsiSoal();
        $opsiSoal->soal_id = $soal->id;
        $opsiSoal->opsi = 'S';
        $opsiSoal->jawaban = 'Saya lebih suka bekerja praktis, menghasilkan hasil yang nyata.';
        $opsiSoal->nilai = 100;
        $opsiSoal->save();
        
        $opsiSoal = new OpsiSoal();
        $opsiSoal->soal_id = $soal->id;
        $opsiSoal->opsi = 'N';
        $opsiSoal->jawaban = 'Saya lebih suka bekerja secara teori, mengembangkan ide-ide dan konsep baru.';
        $opsiSoal->nilai = 200;
        $opsiSoal->save();
        
        $soal = new Soal();
        $soal->kategori_soal_id = $kategoriSoal->id;
        $soal->tipe_soal_id = 1;
        $soal->soal = 'Soal 3';
        $soal->urutan = 3;
        $soal->save();
        
        $opsiSoal = new OpsiSoal();
        $opsiSoal->soal_id = $soal->id;
        $opsiSoal->opsi = 'T';
        $opsiSoal->jawaban = 'Saya senang dalam hal analisa dan logika dan ketika saya ragu, saya berusaha untuk memikirkannya secara perlahan-lahan.';
        $opsiSoal->nilai = 10;
        $opsiSoal->save();
        
        $opsiSoal = new OpsiSoal();
        $opsiSoal->soal_id = $soal->id;
        $opsiSoal->opsi = 'F';
        $opsiSoal->jawaban = 'Saya sangat sensitif dan emosional dan bila ragu, saya berusaha untuk menata hati saya.';
        $opsiSoal->nilai = 20;
        $opsiSoal->save();
        
        $soal = new Soal();
        $soal->kategori_soal_id = $kategoriSoal->id;
        $soal->tipe_soal_id = 1;
        $soal->soal = 'Soal 4';
        $soal->urutan = 4;
        $soal->save();
        
        $opsiSoal = new OpsiSoal();
        $opsiSoal->soal_id = $soal->id;
        $opsiSoal->opsi = 'J';
        $opsiSoal->jawaban = 'Saya orang yang fleksibel dan spontan, namun sering kali kurang menyukai keteraturan dan perencanaan.';
        $opsiSoal->nilai = 1;
        $opsiSoal->save();
        
        $opsiSoal = new OpsiSoal();
        $opsiSoal->soal_id = $soal->id;
        $opsiSoal->opsi = 'P';
        $opsiSoal->jawaban = 'Saya orang yang mahir dalam suatu bidang dan terorganisir dengan baik. Saya lebih memilih untuk merencanakan masa depan.';
        $opsiSoal->nilai = 2;
        $opsiSoal->save();
    }

}
