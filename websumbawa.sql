-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2019 at 09:15 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websumbawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(10) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `isi` text NOT NULL,
  `waktu_upload_berita` datetime(6) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tampil` enum('Ya','Tidak','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `penulis`, `judul`, `isi`, `waktu_upload_berita`, `gambar`, `tampil`) VALUES
(17, 'Tri Suparyanto, A.Md', 'Karantina Sumbawa Bekali Generasi Muda dengan Ilmu Perkarantinaan Melalui Prakerin', 'Sumbawa (08/01). Dunia kerja saat ini tidak hanya mengandalkan kekuatan fisik dan skill yang mumpuni saja, tetapi juga diperlukan kesiapan mental dan kemudahan untuk beradaptasi dengan lingkungan yang baru. Salah satu cara untuk mendapatkan paket lengkap tersebut dilakukan Praktek Kerja Industri (Prakerin).\r\nKarantina Sumbawa menerima 5 Siswa dari SMK Negeri Plampang Jurusan Agrobisnis Ternak Ruminansia dan 8 Mahasiswa D3 Kesehatan Hewan Universitas Mataram untuk melakukan Prakerin. Prakerin tentang perkarantinaan ini berlangsung selama 3 minggu untuk mahasiswa dan 3 bulan untuk siswa. Mereka belajar melakukan tugas jaga di Wilayah Kerja Karantina Sumbawa untuk memastikan kelengkapan dan kesesuaian dokumen komoditas pertanian, pengambilan sampel, pengujian di Laboratorium dan lain sebagainya.\r\nKepala Karantina Sumbawa, drh. Ida Bagus Putu Raka Ariana berpesan untuk memanfaatkan waktu yang singkat untuk menggali ilmu sebanyak-banyaknya dan memperhatikan Standard Operating Procedures (SOP) sesuai arahan pembimbing.\r\n', '2018-01-05 12:51:00.000000', 'web-1524545460.png', 'Ya'),
(18, 'Yuni Husni ', 'Bibit Rianto OPB di Karantina Sumbawa', 'Sumbawa (22/01). Mantan Wakil Ketua Komisi Pemberantasan Korupsi (KPK) Dr. Bibit Samad Rianto, MM berkunjung ke Karantina Sumbawa Wilker Bandara Sultan M. Kaharudin. Kedatangan beliau kali ini bukan untuk melakukan operasi tangkap tangan, namun melaporkan buah tangan yang tergolong dalam komoditi wajib lapor karantina. Madu sebanyak 9 kilogram, rencananya akan dibawa ke Jakarta sebagai oleh-oleh menghadiri upacara peringatan HUT Kabupaten Sumbawa Ke-59.\r\nPemeriksaan terhadap kelayakan kemasan dan uji organoloptik merupakan Standar Operating Procedure (SOP) yang dilakukan petugas Karantina Sumbawa sebelum media pembawa ini dilalulintaskan. Selanjutnya diterbitkan sertifikat sanitasi produk hewan.\r\n', '2018-01-23 12:57:58.000000', 'web-1524545878.png', 'Ya'),
(19, 'drh. Ardiyanto Chandra', 'Bisnis Sarang Walet Terus Menggeliat di Pulau Sumbawa', 'Burung walet merupakan salah satu jenis burung dari family Apodidae. Sarang burung walet yang dihasilkan dari air liurnya dipercaya memiliki beberapa khasiat yang baik bagi kesehatan tubuh seperti meningkatkan system kekebalan tubuh, mempercepat regenerasi sel serta memiliki kandungan nutrisi yang baik. Di Negara Cina, sup sarang walet pada awalnya menjadi hidangan dikalangan keluarga dinasti kerajaan yang merupakan salah satu makanan istimewa.\r\nHal ini mengakibatkan sarang walet memiliki harga jual yang tinggi. Satu kilogram sarang burung walet grade A (kualitas terbaik) dapat mencapai 15 juta rupiah. Tingginya nilai jual sarang walet ini, membuat bisnis sarang walet kian diminati banyak orang. Begitu pula di Pulau Sumbawa. Di beberapa daerah di Pulau Sumbawa telah dibangun rumah-rumah walet.\r\nSarang walet sendiri dalam Peraturan Menteri Pertanian nomor 3238 tahun 2009 termasuk dalam kategori media pembawa bahan asal hewan (BAH), sehingga pada setiap pengeluaran dari daerah asal diperlukan dilakukan tindakan karantina. Tindakan karantina yang dimaksud ialah pemeriksaan fisik terhadap sarang walet sebagai media pembawa karena dapat berpotensi terjangkit hama penyakit hewan karantina (HPHK) seperti Afians Influenza (AI).\r\n\r\nData Lalulintas sarang walet yang dihimpun Karantina Sumbawa melalui tempat-tempat pengeluaran yang telah ditetapkan mengalami peningkatan sejak tahun 2015 baik dari segi frekuensi maupun Volume. Pada tahun 2015 terdapat 27 kali kegiatan pengeluaran dengan total 807 kilogram sarang walet yang dilalulitaskan keluar dari Pulau Sumbawa.\r\nKemudian pada tahun 2016 meningkat menjadi 1170,5 kilogram dengan frekuensi 46 kali dan sepanjang tahun 2017 sebanyak lebih dari 3000 kilogram sarang walet dengan frekuensi 116 kali telah dipasarkan melalui beberapa pintu pengeluaran Pulau Sumbawa.\r\nPada awal tahun 2018 ini saja, sedikitnya sebanyak 400 kilogram sarang walet telah dikirim melalui Bandara M. Salahuddin Bima. Sarang walet ini dipasarkan ke beberapa kota besar di Indonesia seperti Jakarta, Surabaya, Yogyakarta dan Balikpapan.\r\nTingginya anemo masyarakat dalam perdagangan sarang walet di Pulau Sumbawa tidak luput dari pengawasan Karantina Sumbawa. Dalam hal ini Karantina Sumbawa turut serta dalam pengendalian dan pemeriksaan kualitas sarang walet agar bebas dari HPHK dan aman untuk dikonsumsi. \r\n', '2018-01-23 13:00:58.000000', 'web-1524546058.png', 'Ya'),
(20, 'Tri Suparyanto, A.Md', 'Tingkatkan Layanan, Karantina Sumbawa Terapkan Aplikasi Berbasis Teknologi', 'Sumbawa, Warta NTB â€“ Dengan semakin meningkatnya arus lalulintas komoditi pertanian dan peternakan yang masuk maupun keluar dari wilayah Pulau Sumbawa, maka peran strategis Stasiun Karantina Pertanian (SKP) Kelas I Sumbawa Besar sebagai â€œfilterâ€ terhadap kemungkinan masuk dan keluarnya Hama Penyakit Hewan Karantina (HPHK) dan Organisme Pengganggu Tumbuhan Karantina (OPTK) sangat penting.\r\n\r\nSebagai bagian dari Provinsi Nusa Tenggara Barat (NTB) dengan jargonya â€œBumi Sejuta Sapiâ€, Pulau Sumbawa merupakan surganya industri peternakan. Tercatat dalam laporan opersaional Karantina Sumbawa tahun 2017 beberapa hewan dan produk turunanya merupakan komoditi unggulan yang dilalulintaskan setiap harinya. Di tahun 2017 ada sebanyak 47.496 ekor sapi, 5.770 ekor kerbau potong dan 3.520 ekor kuda potong dikirim ke beberapa kota besar di Pulau Jawa, Kalimantan dan Makasar. Tak kalah tersohornya madu, sarang walet dan  susu kuda telah merambah kota-kota besar dipelosok Nusantara dengan volume yang mencapai 24.511kg.\r\nSebagai Unit Pelaksana Teknis (UPT) dari Badan Karantina Pertanian Indonesia, SKP Kelas I Sumbawa Besar pada tahun 2018 ini mulai menerapkan aplikasi informasi Indonesian Quarantine Full Automation System (IQFAST). Aplikasi ini dirancang untuk meningkatkan kualitas layanan publik dengan menggunakan teknologi informasi yang memberikan kemudahan kepada pengguna jasa karantina.\r\nSelain menerapkan aplikasi baru, sesuai Permentan No.17 Tahun 2017 tentang Dokumen Karantina hewan per tanggal 1 Januari 2018, SKP Kelas I Sumbawa Besar juga telah menerapkan dokumen karantina hewan yang baru.\r\nUntuk memperkenalkan aplikasi dan dokumen yang baru kepada pengguna jasa, SKP Kelas I Sumbawa Besar menggelar kegiatan sosialisasi. Acara yang dikemas dalam model talkshow sederhana ini digelar di aula kantor Karantina setempat, Selasa (23/1/2018) dihadiri Persatuan Pedagang Hewan Nasional Indonesia (PEPEHANI) Sumbawa dan pengguna jasa lainya.\r\n\r\nKepala SKP Kelas I Sumbawa Besar drh. Ida Bagus Putu Raka Ariana dalam sambutanya menyampaikan, kegiatan sosialisasi dilaksanakan untuk memperkenalkan dokumen karantina yang baru kepada para pengguna jasa.\r\nâ€œSosialisasi ini untuk mengenalkan dokumen karantina yang baru, yang telah terintegrasi dengan aplikasi yang baru pula yaitu IQFAST. Semoga ditahun yang baru, aplikasi yang baru serta dokumen yang baru semakin mendukung kelancaran pelayanan  perkarantinaan,â€ harap Raka.\r\nSelain itu, Abdul Salam, SP sebagai narasumber kegiatan memaparkan tentang dokumen karantina mulai dari Permohonan Pemeriksaan Karantina (PPK) sampai diterbitkanya dokumen sertifikat untuk melalulintaskan komoditas wajib periksa karantina.\r\nâ€œUntuk menghindari gratifikasi serta pungutan liar di luar tarif resmi Penerimaan Negara Bukan Pajak (PNBP) di Karantina Sumbawa sudah menyediakan mesin Elektronik Data Capture (EDC). Diharapkan dengan pelayanan karantina berbasis aplikasi teknologi akan memberikan pelayanan yang transparan, professional, kecepatan dan ketepatan,â€ ungkapnya. \r\n', '2018-01-24 13:04:07.000000', 'web-1524546248.png', 'Ya'),
(21, 'Tri Suparyanto, A.Md', 'KAN Surveilans ke Laboratorium Karantina Sumbawa', 'Sumbawa (26/01) Laboratorium Karantina Sumbawa telah memasuki tahun pertama dalam penerapan sistem manajemen SNI ISO/IEC 17025:2008. Status akreditasi yang diperoleh dari Komite Akreditasi Nasional (KAN) pada tanggal 26 Juli 2017, berlaku sampai dengan 25 Juli 2021. Ruang lingkup pengujian yang yang menjadi fokus pemeriksaan dari laboratorium Karantina Sumbawa adalah deteksi antibodi Brucella abortus.\r\nJumat (26/1). Laboratorium Karantina Sumbawa menerima tamu drh. Tati Ariyanti, MP dari KAN untuk melakukan surveilans. Kegiatan ini bertujuan untuk melakukan monitoring terhadap konsistensi laboratorium Karantina Sumbawa dalam memberikan pelayanan dan pengujian sesuai dgn dokumen mutu yang telah ditetapkan berdasarkan SNI ISO/IEC 17025:2008 tentang persyaratan umum kompetensi laboratorium.\r\nAcara yang berlangsung selama dua hari ini, dibuka dan ditutup oleh Manajer Administrasi Laboratorium, Muhammad Ridwan. Dalam sambutannya beliau berharap surveilans laboratorium ini dapat meningkatkan mutu pelayanan Karantina Sumbawa, setiap temuan ketidaksesuaian merupakan cambuk bagi kita untuk memberikan pelayanan yang terbaik.\r\nDari hasil surveilans, dinyatakan bahwa laboratorium Karantina Sumbawa telah berusaha secara terus-menerus untuk memenuhi standar ISO/IEC 17025:2008, namun masih ditemukan beberapa ketidaksesuaian yang memerlukan tindakan perbaikan segera. Pada surveilans kali ini terdapat 3 temuan dari sisi manajemen serta 3 dari sisi teknis dan semuanya kategori 2.\r\nKarantina Sumbawa akan terus meningkatkan diri utuk memberikan pelayanan prima kepada masyarakat dalam rangka mengawal program swasembada pangan, salah satunya dengan pelayanan laboratorium yang telah terakredasi.\r\n', '2018-01-30 13:07:00.000000', 'web-1524546420.png', 'Ya'),
(22, 'Tri Suparyanto, A.Md', 'Karantina Sumbawa Berpartisipasi Dalam Seminar Jagung Nasional 2018', 'Sumbawa (8/02) Jagung di Indonesia sebagai komoditas pangan yang cukup strategis, menempati posisi kedua setelah padi. Hal ini dikarenakan konsumsi jagung di Indonesia cukup tinggi sebagai bahan makanan pokok maupun bahan baku pakan ternak. Oleh karena itu pemerintah berusaha untuk melakukan kebijakan swasembada jagung di tahun 2018 ini. Ada enam strategi yang menjadi program Kementerian Pertanian untuk mewujudkan swasembada jagung yaitu penambahan luas lahan, mengiintegrasikan jagung, pemanfaatan lahan tidur, melindungi harga jagung dan mengendalikan impor.\r\nBupati Sumbawa Drs. H. M Husni Djibril, B.Sc dalam sambutanya menyampaikan sebagai bagian dari Propinsi Nusa Tenggara Barat kita patut bangga pada tahun 2017 ini mampu merealisasikan produksi jagung sebanyak 1.511.926 ton atau setara dengan 10 % dari kebutuhan jagung nasional. Keberhasilan itu tidak lepas dari andil Kabupaten Sumbawa yang menyumbang terbesar dari Kabupaten lainya.\r\nâ€œSeminar Jagung Nasional ini, untuk lebih mengukuhkan NTB sebagai lumbung jagung nasional,â€ imbuhnya.\r\nSeminar Jagung Nasional 2018 yang diadakan di Aula Kantor Bupati Sumbawa ini mengambil tema â€œGerakan Masyarakat Jagung Integrasi Sapiâ€. Hadir sebagai pembicara Sekretaris Jenderal Dewan Jagung Nasional Ir Maxdeyul Sola, MM dan Kepala Badan Pengawas Perdagangan Berjangka Komoditi (BAPPEBTI) Kementerian Perdagangan Hotmida Purba. Selain dua pembicara tersebut hadir juga pembicara dari swasta yang diharapkan dapat meningkatkan produktivitas jagung diantaranya perusahaan mesin petanian, perusahaan benih, asuransi dan perusahaan perdagangan.\r\nKarantina Sumbawa berpartisipasi dalam kegiatan ini sebagai peserta bersama tamu undangan lain diantaranya Dinas Pertanian, penyuluh, ketua kelompok tani, pengusaha, perusahaan fumigasi, distributor pupuk dan mahasiswa. Diharapkan dengan keikutsertaan Karantina Sumbawa dalam kegiatan ini untuk lebih mendekatkan Karantina Sumbawa dengan pengguna jasa dan intansi terkait. Selain itu juga untuk memberikan informasi perkarantinaan pada masyarakat dalam melalulintaskan komoditi pertanian.\r\nPada musim panen tahun 2018 ini tidak hanya jagung pipil yang akan dilalulintaskan dari pulau Sumbawa, beberapa kelompok tani telah menjalin kerjasama dengan perusahaan eksportir daun jagung dan pucuk jagung.\r\n', '2018-02-09 13:08:02.000000', 'web-1524546482.png', 'Ya'),
(23, 'Tri Suparyanto, A.Md', 'Akhiri PKL di Karantina Sumbawa, Mahasiswa UNRAM Presentasikan Laporan', 'Sumbawa (25/01) Program Vokasi D3 Kesehatan Hewan Universitas Mataram dirancang untuk memenuhi tuntunan harapan masyarakat dan dunia industri akan tenaga kerja yang &quot;siap pakai&quot;. Pendikan vokasi melibatkan industri, lembaga pemerintah dan lembaga non pemerintah dalam rangka penerapan dan peningkatan keterampilan mahasiswa. Untuk itulah 11 orang mahasiswa dari Program Studi Vokasi D3 Kesehatan Hewan Unram dengan semangat mengikuti Praktek Kerja Lapangan (PKL) di Karantina Sumbawa. Selama 3 minggu, mereka belajar berbagai hal antara lain memastikan kelengkapan dan kesesuaian dokumen media pembawa yang masuk, menyiapkan dokumen karantina, pengambilan sampel dan pengujian di laboratorium.\r\nKamis (25/01) ilmu yang mereka dapat selama mengikuti PKL harus dipresentasikan di depan pembimbing dari Karantina Sumbawa dan Dosen. Acara yang dilanjutkan dengan pelepasan tersebut berlangsung secara sederhana.\r\nDalam sambutanya Kepala Karantina Sumbawa yang diwakili Kasubsie Yanops Bapak Abdul Salam, SP menyampaikan, &quot;Terimakasih telah melakukan magang di Karantina Sumbawa, semoga ilmu yang diberikan pembimbing bermaanfaat. Ada hal yang lebih penting pada setiap mahasiswa yang PKL di Karantina Sumbawa, yaitu jadilah duta Karantina yang dapat memberikan edukasi tentang perkarantinaan kepada masyarakat.&quot;\r\n', '2018-01-29 13:10:39.000000', 'web-1524546640.png', 'Ya'),
(24, 'Tri Suparyanto, A.Md', 'Kepo, 10 Mahasiswa Pilih Magang Daripada Berlibur', 'Sumbawa (19/02) libur semester merupakan saat yang ditunggu-tunggu oleh mahasiswa. Bagaimana tidak, terbebas dari rutinitas di kampus bisa dimanfaatkan bertemu keluarga dengan cara pulang ke kampung halaman, nongkrong di mall sembari berburu diskon besar-besaran, tidur seharian melepaskan kepenatan dari tugas-tugas kuliah atau jalan-jalan ke tempat yang lagi ngehits buat upload foto di sosial media.\r\nNamun berbeda dengan yang dilakukan oleh Ariandoko bersama teman-temanya untuk mengisi liburan semester ganjil kali ini. Sepuluh mahasiswa semester 3 dari Universitas Nusa Tenggara Barat (UNTB) tersebut memilih belajar perkarantinaan.\r\n&quot;Kami ingin mengetahui apa itu Karantina melalui melihat dan melakukan rutinitas yang dilakukan petugas Karantina Sumbawa,&quot; jelas Ariandoko.\r\nKegiatan yang diberi nama &quot;magang mandiri&quot; tersebut, mereka lakukan selama dua minggu. Tidak ada tugas dari dosen, berbekal surat ijin melakukan magang dari kampus mereka beranikan diri untuk mencari ilmu dari senior mereka dokter-dokter hewan Karantina Sumbawa.\r\nSetiap pagi jam setengah delapan, mereka datang untuk mengisi daftar hadir. setelah itu dibagi menjadi tiga kelompok, ada yang belajar administrasi dan dokumen, ada yang belajar teknik pengambilan sampel di kandang dan ada juga yang belajar pemeriksaan di laboratorium. Semua kegiatan mereka lakukan dengan senang hati untuk menambah wawasan sebagai calon dokter hewan.\r\nHari ini Senin (19/02) mereka secara resmi dilepas oleh Kepala Karantina Sumbawa untuk kembali ke kampus. Dalam sambutanya drh Ida Bagus Putu Raka Ariana berpesan &quot;Negeri atau swasta tempat kalian menimba ilmu hanyalah status, bukanlah faktor utama yang menentukan kesuksesan kalian di masa depan. Semangat untuk maju merupakan senjata utama untuk menuju kesuksesan&quot;.\r\n', '2018-02-20 13:15:39.000000', 'web-1524546940.png', 'Ya'),
(25, 'Tri Suparyanto, A.Md', 'Kerbau Belang Berharga Ratusan Juta Diperiksa Karantina', 'Sumbawa (01/03) &quot;Mohon maaf pak, kapalnya jadi sandar jam berapa?&quot; dengan nada agak keras namun berusaha tetap sopan seorang petugas Karantina Sumbawa menanyakan kepada pengguna jasa melalui telpon genggamnya. Jam masih menunjukan pukul setengah satu siang, masih panjang bagi petugas untuk melakukan istirahat siang. Namun hari itu Rabu (28/01) ada rencana muat kerbau potong tujuan Tana Toraja melalui pelabuhan bongkar Jeneponto, mengharuskan petugas untuk segera turun ke pelabuhan memeriksa kelayakan kapal dan ketersediaan air serta pakan di kapal.\r\nBegitulah keseharian petugas karantina yang harus berhadapan dengan banyak orang dengan latar budaya, tingkat pendidikan dan tingkat pemahaman yang berbeda.\r\nKerbau potong khususnya kerbau belang atau albino dari Sumbawa merupakan komoditas eksklusif bagi pengusaha hewan. Bagaimana tidak satu ekor saja ada yang mencapai ratusan juta rupiah apabila telah sampai di Tana Toraja. Kerbau tersebut digunakan untuk acara Rambu Solo\'. Sehingga tidak jarang ada pengguna jasa yang melakukan berbagai macam cara agar prosedur karantina dapat dilakukan secepat mungkin tanpa memperhatikan Standar Operasional Prosedure (SOP) Karantina.\r\nDrh Priono petugas Karantina Sumbawa menjelaskan, &quot;Setiap media pembawa yang dilalulintaskan harus mengikuti prosedur tindakan karantina mulai dari pemeriksaan dokumen, fisik, pengambilan sampel, pengujian laboratorium dan pemeriksaan alat angkut. Itulah SOP yang harus kami jalankan!&quot;\r\nEnam puluh satu ekor kerbau belang Sumbawa rencananya akan dimuat menggunakan Kapal Laut Motor Sumber Bahari, menuju pelabuhan Jeneponto. Jam 17.00 WITA kapal berlayar dari pelabuhan Badas. Sebelum berangkat Petugas Karantina bersama TNI AL, POL AIRUT dan Kesyahbandaran, lakukan pemeriksaan meliputi kelengkapan dokumen dan kelayakan kapal.\r\n', '2018-03-02 13:19:06.000000', 'web-1524547146.png', 'Ya'),
(26, 'Tri Suparyanto, A.Md', 'Mempercepat Tindakan Pemeriksaan Karantina, Karantina Sumbawa Audit Permohonan Penetapan Tempat Lain', 'Sumbawa (05/03) Dalam rangka peningkatan pelayanan tindakan karantina, pengguna jasa dapat mengajukan permohonan tindakan karantina diluar tempat pemasukan dan pengeluaran yang telah ditetapkan.\r\nAbdul Salam SP, selaku Kepala Subseksi Pelayanan Operasional menjelaskan, &quot;Untuk mengajukan tindakan karantina di luar tempat pemasukan dan pengeluaran yang telah ditetapkan dapat mengajukan persyaratan sesuai dalam Permentan 38 tahun 2014. Setelah itu petugas dari Karantina Sumbawa akan memeriksa aspek administrasi dan aspek kelayakan teknis.&quot;\r\nâ€œAspek teknis meliputi status kepemilikan, perijinan perpajakan, manajemen, fasilitas, sarana dan kelengkapan administratif lainnya. Sedangkan aspek kelayakan teknis meliputi tempat dengan kondisi lingkungan, daya tampung bangunan, jalan, fasilitas pembersihan dan pemusnahan, laboratorium pemeriksaan, air bersih, listrik, petugas keamanan, alat komunikasi serta fasilitas penunjang kegiatan karantina tumbuhan lainyaâ€ imbuhnya lebih lanjut.\r\nPada bulan Februari ini Karantina Sumbawa telah menerima beberapa permohonan pengajuan tempat lain sebagai tempat tindakan pemeriksaan karantina, namun baru dua perusahaan yang telah dinyatakan lengkap secara administrasi. Rabu (28/02) Karantina Sumbawa menugaskan dua orang untuk melakukan pemeriksaaan kelayakan teknis pada salah perusahaan dagang komoditas pertanian terbesar di Sumbawa.\r\n', '2018-03-05 13:21:29.000000', 'web-1524547289.png', 'Ya'),
(27, 'Christiawan Yunarto, A.Md', 'Samyong, Si Kecil dengan 1001 Suara', 'Sumbawa (15/03) Samyong (Pachycephala nudigula ilsa) merupakan merupakan burung endemik Indonesia Timur khususnya daerah Nusa Tenggara Barat dan Nusa Tenggara Timur. Di kalangan masyarakat Flores burung ini dikenal dengan sebutan Garugiwa yang artinya burung arwah, mungkin karena pada saat burung ini berkicau hanya suaranya saja yang terdengar namun wujudnya yang kecil membuat burung ini tidak terlihat.\r\nDi habitat aslinya burung ini mampu berkicau keras namun merdu, menyanyikan suara burung lain yang didengarnya di hutan. Kemampuannya adalah menirukan banyak suara burung lain, tak heran para penggemar burung menjulukinya burung 1001 suara.\r\nDini hari tadi, Kamis (15/03) petugas Karantina Sumbawa wilker Pototano memeriksa satu ekor burung Samyong yang akan dibawa ke Malang. Pemeriksaan fisik dilakukan oleh petugas untuk memastikan burung tersebut sehat untuk dilalulintaskan. Burung dengan warna bulu kuning kehijauan tersebut siap tebar pesona kepada penggemarnya di Kota Apel.\r\n', '2018-03-15 13:25:44.000000', 'web-1524547544.png', 'Ya'),
(28, 'Tri Suparyanto, A.Md', 'Banjir Tidak Menghalangi Pelayanan Karantina Sumbawa', 'Hujan deras disertai angin mengguyur kota Sumbawa Minggu sore (18/03). Hujan yang hanya berlangsung 2 jam menyisakan banjir dan lumpur yang menggenangi kantor Karantina Sumbawa beserta beberapa rumah warga di sekitarnya.\r\nKepala Karantina Sumbawa drh. Ida Bagus Putu Raka Ariana mengatakan &quot;Musibah banjir ini merupakan kali kedua kita mengalaminya, tahun lalu pada bulan Januari kita juga mengalami musibah yang sama&quot;\r\nAir bah setinggi 50 cm menggenangi Kantor Karantina Sumbawa dan kantor pelayanan Wilker Pelabuhan Laut Badas. &quot;Untuk membersihkan sisa lumpur hari ini dilakukan kerja bakti yang diikuti semua pegawai Karantina Sumbawa, dibantu dari Dinas Pemadam Kebakaran Kabupaten Sumbawa, &quot; imbuhnya.\r\n&quot;Ditengah musibah banjir ini Karantina Sumbawa tetap melakukan aktifitas seperti biasa, semoga ditahun depan tidak terulang lagi musibah banjir seperti ini&quot; harap Raka.\r\n', '2018-03-19 13:27:06.000000', 'web-1524547626.png', 'Ya'),
(29, 'Tri Suparyanto, A.Md', 'Ekspor Perdana Tahun 2018, Jagung Sumbawa Menuju Filipina', 'Sumbawa (21/03), Mewakili Menteri Pertanian, Kepala Badan Ketahanan Pangan (BKP) Agung Hendriadi melepas ekspor jagung ke Filipina dari Pelabuhan Badas Sumbawa. Acara yang turut dihadiri oleh Gubernur NTB, wakil dari Kementerian Perdagangan, Pangdam Udayana, Wakapolda, Bupati Sumbawa dan undangan lainya.\r\n&quot;Kita hari ini melepas ekspor jagung dari Pelabuhan Badas sebanyak 11.500 ton dari target 100.000 ton dan ini merupakan ekspor jagung ketiga. Sebelumnya Bapak Menteri melepas ekspor jagung dari Gorontalo dan Makassar&quot; ujar Agung.\r\nSementara Gubernur NTB, TGH Zainul Majdi meyampaikan, kebanggaanya terhadap petani dan pihak-pihak yang telah bekerja keras dalam mendukung ekspor jagung. &quot;Dengan ekspor jagung ini, diharapkan kesejahteraan petani meningkat. Namun harus diimbangi dengan kesesuain harga yang diterima oleh petani.&quot; imbuhnya.\r\nDalam kesempatan itu secara simbolis diserahkan sertifikat Phytosanitary dari Karantina Sumbawa kepada eksportir. Dilanjutkan pencanangan inovasi Gerakan Masyarakat Jagung Integrasi Sapi (Gemajipi).\r\n', '2018-03-21 13:28:18.000000', 'web-1524547698.png', 'Ya'),
(30, 'Tri Suparyanto, A.Md', 'Uji Konsep Tindakan Karantina Hewan Kuda, Pusat Karantina Hewan Kunjungi Sumbawa', 'Sumbawa (16/03) selain sapi dan kerbau, Pulau Sumbawa juga surganya ternak kuda. Selama tahun 2017 data operasional Karantina Sumbawa mencatat 5.545 ekor kuda dilalulintaskan baik keluar maupun masuk. Selain digunakan sebagai kuda potong, kuda perah, kuda ras Sumbawa merupakan kuda pacuan untuk permainan tradisional &quot;Main Jaran&quot;.\r\nJumat (16/03) lalu, Karantina Sumbawa menerima tamu drh. Wignya Kusuma dari Pusat Karantina Hewan. Kedatangan beliau untuk melakukan uji konsep implementasi pedoman Tindakan Karantina Hewan (TKH) terhadap kuda khususnya dalam menyambut Asian Games.\r\n&quot;Mengingat pentingnya TKH kuda dalam menghadapi Asian Games dalam waktu dekat, perlulah kiranya kita berbagi ilmu dengan rekan-rekan dari Karantina Sumbawa yang sudah tidak asing lagi dengan TKH kuda potong maupun kuda pacu. Baik dari dokumen yang diperlukan dan tindakan karantina yang dilakukan&quot; terang Wignya.\r\nAcara yang dikemas dalam bentuk diskusi tersebut, berjalan dengan sangat menarik. Apalagi salah satu pegawai Karantina Sumbawa sudah terbiasa menjadi panitia lomba pacuan kuda.\r\nDrh . Ida Bagu Putu Raka Ariana selaku Kepala Karantina Sumbawa dalam sambutannya mengatakan, &quot; Hal yang istimewa sekali bagi kami Karantina Sumbawa ditunjuk sebagai tempat uji konsep pedoman TKH kuda, semoga berbagai masukan dari Karantina Sumbawa dapat di kompilasi dan proses selanjutnya dapat disahkan sebagai dasar TKH kuda.&quot;\r\n', '2018-03-22 13:29:57.000000', 'web-1524547798.png', 'Ya'),
(31, 'Tri Suparyanto, A.Md', 'Si Merah Dari Bima, Siap Gurihkan Manggarai', 'Sumbawa (26/03) bawang merah merupakan bumbu penting bagi masakan khas Indonesia. Kebutuhannya hanya sedikit, namun hambar rasanya jika suatu masakan tanpa dilengkapi beberapa butir bawang merah dalam bumbunya. Tidaklah mengherankan jika &quot;Si Merah&quot; dari Bima ini, menjadi primadona di pulau-pulau tetangga seperti Sumba, Sulawesi, Kalimantan bahkan Papua.\r\nMenurut Irwan, salah seorang petugas Karantina Sumbawa Wilker Pelabuhan Ferry Sape &quot;Bawang merah merupakan salah satu komoditas yang kami periksa sebelum dilalulintaskan ke luar Pulau Sumbawa, baik dalam jumlah banyak maupun sebagai tentengan&quot;.\r\n&quot;Pada bulan Februari lalu saja domestik keluarnya mencapai 90.800 kilogram&quot; imbuhnya.\r\nJumat (23/03) Petugas Karantina Sumbawa Wilker Pelabuhan Ferry Sape tengah melakukan pemeriksaan fisik dan kesesuaian dokumen 500 kilogram bawang merah tujuan manggarai.\r\n', '2018-03-26 13:32:18.000000', 'web-1524547938.png', 'Ya'),
(32, 'Tri Suparyanto, A.Md', 'Karantina Sumbawa Lakukan Pendampingan Ekspor Jagung ke Filipina', 'Sumbawa (27/03). Minggu lalu ekspor jagung perdana tujuan Filipina dilepas oleh Kepala Badan Ketahanan Pangan Kementerian Pertanian. Kini kapal kedua telah siap untuk diberangkatkan kembali. Jagung biji sebanyak 5.000 ton atau senilai 17 Miliar akan berlayar menuju Pelabuhan Davao Filipina, dari Pelabuhan Badas Sumbawa.\r\nSindia, Petugas Karantina Sumbawa mengatakan, &quot;Semua persyaratan untuk ekspor kapal kedua ini telah lengkap, kami juga sudah melakukan pemeriksaan fisik dan pengambilan sampel guna pemeriksaan laboratorium, sekarang tinggal menunggu penerbitan Phytosanitary Certificate (PC) jika dinyatakan sehat.&quot;\r\nDalam ekspor jagung kali ini, Filipina mempersyaratkan adanya sertifikat fumigasi untuk mencegah terbawanya organisme penggganggu tumbuhan dari negara asal. Pelaksanaan fumigasi kali ini dilakukan oleh pihak ketiga yang diawasi oleh Petugas Karantina Sumbawa. &quot;Begitu selesai muat, langsung kita lakukan fumigasi,&quot; jelas Sindia.\r\n', '2018-03-27 13:33:30.000000', 'web-1524548011.png', 'Ya'),
(33, 'Dwi Sari Mamonto Putri, S.si', 'Geliat Sarang Burung Walet Sumbawa, Karantina Pastikan Kesehatannya', 'Sumbawa (31/03) bisnis sarang burung walet di Pulau Sumbawa mulai menunjukan geliatnya. Data operasional Karantina Sumbawa mencatat pada tahun 2017 sebanyak 4.369 kilogram sarang burung walet dilalulintaskan dari Sumbawa menuju kota-kota besar di Indonesia seperti Balikpapan, Surabaya, Batam, Pontianak, Yogyakarta dan Banjarmasin. Pada awal tahun 2018 di bulan Januari dan Februari ini saja telah dilakukan sertifikasi sebanyak 1.273 kilogram sarang burung walet dari Pulau Sumbawa dengan frekuensi pengeluaran sebanyak 57 kali.\r\nHari Selasa (27/03) petugas Karantina Sumbawa Wilker Bandara Sultan M. Solahudin tengah memeriksa 2 kilogram sarang burung walet tujuan Mataram yang akan dijadikan sampel untuk pembeli.\r\nIrwan, petugas Karantina Sumbawa mengatakan, &quot;Untuk Standar Operasional Prosedure (SOP) pemeriksaan sarang burung walet meliputi pemeriksaan berat, jumlah kemasan dan cemaran seperti kayu, logam dan lainya&quot;.\r\n&quot;Semoga bisnis sarang burung walet dari Pulau Sumbawa tidak hanya merambah pasar dalam negeri. Tapi juga mampu ekspor ke luar negeri,&quot; imbuhnya.\r\n', '2018-03-31 13:35:17.000000', 'web-1524548118.png', 'Ya'),
(34, 'Tri Suparyanto, A.Md', 'Temuan OPTK Diverifikasi', 'Sumbawa (12/04) Dwi Sugipriatini dari Karantina Uji Standar melakukan verifikasi hasil pemantauan Organisme Pengganggu Tumbuhan Karantina (OPTK) di Karantina Sumbawa. Kunjungan yang dilakukan selama 3 hari ini (10-12/04) akan difokuskan pada OPTK tanaman pangan, khususnya jagung yang menjadi komoditas andalan di daerah ini.\r\nMenurut Dwi, &quot;Kita melakukan pengamatan dan pengambilan sampel tanaman yang bergejala. Selanjutnya dilakukan pengujian, untuk memverifikasi hasil temuan pemantauan OPTK tahun 2017.&quot;\r\nSementara I Ketut Sindia selaku koordinator POPT Karantina Sumbawa mengatakan &quot;Benih jagung didatangkan dari luar Sumbawa, sehingga kita perlu monitoring keberadaan OPTK yang terbawa pada benih yang berpotensi menyebar ke dalam wilayah Sumbawa.&quot;\r\nDiharapkan dengan kegiatan verifikasi ini dapat mendukung Sumbawa sebagai lumbung jagung.\r\n', '2018-04-13 13:36:31.000000', 'web-1524548191.png', 'Ya'),
(39, 'Tri suparyanto, A.Md', 'Karantina Sumbawa Deteksi Dini OPTK Melalui Pemantauan', 'Sumbawa (20/04). Pemenuhan kebutuhan akan benih tanaman pangan yang didatangkan dari daerah lain menjadi fokus Pemantauan OPTK Karantina Sumbawa tahun 2018. Benih-benih tersebut dikhawatirkan menjadi media pembawa OPTK bagi Sumbawa.\r\n\r\nAndik Akrimil Fata, Ketua Tim mengatakan, &quot;Pemantauan OPTK sebagai upaya deteksi dini, dalam cegah tangkal OPTK di wilayah Sumbawa. Kegiatan pemantauan ini kita ambil tanaman yang bergejala lalu kita lakukan pengujian di laboratorium.&quot;\r\n\r\n&quot;Masyarakat disini terbiasa dengan pola tanam tadah hujan yang ketersediaan inangnya tidak berlanjut sehingga perlu diwaspadai OPTK terbawa oleh benih,&quot; jelasnya.\r\n\r\nPetugas Karantina Sumbawa melakukan pemantauan OPTK di daerah Labangka dan Plampang kamis kemarin. Fokus pemantauan kali ini jagung dan padi yang merupakan komoditas andalan daerah ini.', '2018-04-27 08:39:31.000000', 'web-1524793172.jpg', 'Ya'),
(41, 'Tri suparyanto, A.Md', 'Tiga Kapal Sandar, Karantina Sumbawa Siap Ekspor Jagung ke Filipina', 'Sumbawa (01/05). Kilau jagung biji atau sang Mutiara Kuning dari Sumbawa kini semakin cerah di Filipina. Bagaimana tidak, pada pertengahan bulan April ini saja ekspor jagung dari Sumbawa telah mencapai 23. 468 ton. Kini sebagai penutup bulan, telah siap 3 kapal untuk membawa 21. 700 ton jagung biji atau senilai 76 miliar menuju Filipina.\r\n\r\n&quot;Dari tiga kapal, dua diantaranya yaitu MV. Glory dan MV. Pegasus sandar dan muat di Pelabuhan Badas. Sementara MV. Dayang Bai Li sandar di Pelabuhan Bima,&quot; tutur Sindia yang bertugas.\r\n\r\n&quot;Semua persyaratan untuk ekspor telah dilengkapi oleh eksportir, kami juga sudah melakukan pemeriksaan fisik serta melakukan pengambilan sampel di gudang untuk dilakukan pengujian laboratorium. Sehingga pada hari Minggu (29/04) telah kami terbitkan Phytosanitary Certificate,&quot; imbuhnya.\r\n\r\nDalam ekspor jagung kali ini negara tujuan Filipina mempersyaratkan adanya sertifikat fumigasi untuk mencegah terbawanya organisme penggganggu tumbuhan dari negara asal. Pelaksanaan fumigasi kali ini dilakukan oleh pihak ketiga yang diawasi oleh Petugas Karantina Sumbawa.', '2018-05-07 09:49:11.000000', 'web-1525661350.jpg', 'Ya'),
(42, 'Tri Suparyanto, A.Md', 'Karantina Sumbawa Gelar In House Training Pengujian Cendawan', 'Sumbawa (07/05) setelah mendapatkan akreditasi dalam penerapan ISO/IEC 17025:2008 pada tanggal 26 Juli 2017, dari Komite Akreditasi Nasional (KAN). Karantina Sumbawa berencana menambah ruang lingkup pengujian pada tahun 2019 mendatang. Sebagai bentuk persiapan digelar In House Training bagi petugas laboratorium karantina tumbuhan.\r\n\r\nDibuka oleh Kepala Karantina Sumbawa drh. Ida Bagus Putu Raka Ariana, In House Training ini dilaksanakan selama tiga hari (2-4/5). Dengan pemateri Dra. Tuti Murdiati, MSi dari Balai Besar Uji Standar Karantina Pertanian yang menyampaikan Metode pengujian deteksi dan identifikasi Organisme Pengganggu Tumbuhan/Organisme Pengganggu Tumbuhan Karantian (OPT/OPTK) dari golongan cendawan.\r\n\r\nMenurut Tuti, secara umum Karantina Sumbawa memiliki personel laboratorium yang kompeten dalam melakukan pengujian cendawan, peralatanya juga sudah memadai. Metode pengujian cendawan yang dapat dilakukan di laboratorium Karantina Sumbawa yaitu pemeriksaan secara langsung, washing test, blotter test, agar test dan growing on test.\r\n\r\n&quot;Untuk persiapan penambahan ruang lingkup, Karantina Sumbawa sudah bagus dalam penyiapan dokumennya tinggal dimantapkan saja&quot; tambah Tuti.', '2018-05-07 10:00:45.000000', 'web-1525662045.jpg', 'Ya'),
(43, 'Tri suparyanto, A.Md', 'Lagi! Tiga Kapal Ekspor, Antarkan Jagung Sumbawa ke Filipina', 'Sumbawa (21/05), Tiga kapal antarkan jagung asli Sumbawa ke Filipina senilai hampir 71 miliar rupiah. Tiga kapal tersebut masing-masing MV. Thanh Ba dengan muatan sebanyak 7.100 Ton, MV. Thanh Thuy dengan muatan sebanyak 6.600 Ton dan MV. Sea Dragon dengan muatan sebanyak 6.600 Ton.\r\n\r\nâ€œDengan selesai disertifikasinya MV. Sea Dragon tadi malam (20/05) maka total ekspor jagung dari Sumbawa sampai bulan Mei 2018 tercatat dalam Laporan Operasional sebanyak 65.468 Ton, sudah setengah lebih yang ditargetkan Bapak Menteri Pertanian sebesar 100.000 ton untuk Propinsi Nusa Tenggara Baratâ€ Jelas Abdul Salam Kasubsie Yanops Karantina Sumbawa.\r\n\r\n&quot;Dari tiga kapal, dua diantaranya yaitu MV. Thanh Ba dan Sea Dragon sandar dan muat di Pelabuhan Badas. Sementara MV. Thanh Thuy sandar di Pelabuhan Bima,&quot; imbuh Salam.\r\n\r\nSementara I Ketut Sindia selaku petugas Karantina Sumbawa diwawancarai ketika melakukan pengawasan fumigasi oleh pihak ketiga, menjelaskan\r\n&quot;Semua persyaratan untuk ekspor telah dilengkapi oleh eksportir, kami juga sudah melakukan pemeriksaan fisik serta melakukan pengambilan sampel di gudang untuk dilakukan pengujian laboratorium. Sehingga pada hari Minggu (20/05) telah kami terbitkan Phytosanitary Certificate,&quot; jelasnya\r\n\r\nâ€œPhytosanitary Certificate merupakan suatu dokumen mutlak pada proses ekspor apabila negara tujuan mempersyaratkan. Dokumen ini berisi informasi mengenai jumlah, jenis, jumlah kemasan, nama pengirim, penerima dan lain sebagainya. Serta menjelaskan komiditas bebas Organisme Pengganggu Tumbuhan Karantina. â€ jelas Sindia.', '2018-05-25 09:27:42.000000', 'web-1527215263.jpg', 'Ya'),
(45, 'Tri suparyanto, A.Md', 'Karantina Sumbawa Gelar Buka Bersama Masyarakat', 'Sumbawa (28/05) Hari kesebelas Ramadhan 1439 H Karantina Sumbawa menggelar buka puasa bersama masyarakat dan pengguna jasa. Bertempat di Aula Karantina Sumbawa, acara yang berlangsung sejak sore diawali dengan dzikir dan doa bersama lalu dilanjutkan salat magrib berjamah.\r\n\r\nDalam sambutanya Kepala Karantina Sumbawa, Ida Bagus Putu Raka Ariana Menyampaikan &quot;Bulan Ramadhan kita maknai sebagai sarana untuk lebih mendekatkan diri&quot;\r\n\r\n&quot;Pertama mendekatkan diri dengan Sang Pencipta melalui ibadah yang kita lakukan seperti puasa, sholat, tadarus dan lainya. Kedua mendekatkan diri dengan keluarga, karena jam kerja yang berkurang dapat dimanfaatkan pegawai untuk melakukan kegiatan kecil bersama keluarga seperti makan sahur bersama, buka bersama dan ibadah bersama&quot; Jelas Raka\r\n\r\n&quot;Dan yang ketiga mendekatkan diri dengan masyarakat, kita hidup bermasyarakat begitu juga Kantor Karantina Sumbawa yang berdiri di tengah masyarakat dalam keseharianya pastilah ada interaksi yang saling membutuhkan&quot; imbuh Raka.\r\n\r\nDengan buka puasa ini diharapkan dapat meningkatkan hubungan yang harmonis dengan masyarakat.\r\n\r\nAcara buka bersama ditutup dengan pelepasan masa purna bakti pegawai Karantina Sumbawa, yaitu Nyak Ben, SH.', '2018-06-04 11:57:11.000000', 'web-1528088231.jpg', 'Ya'),
(46, 'Christiawan Yunarto, A.Md', 'Manisnya Madu Hutan Sumbawa, Karantina Pastikan Kesehatanya', 'Sumbawa (06/07), Pulau Sumbawa terkenal dengan madu hutanya yang asli dan melimpah. Data operasional Karantina Sumbawa mencatat pada tahun 2015 sebanyak 11.143 kg madu hutan sumbawa dilalulintaskan ke luar Sumbawa merambah kota-kota di Indonesia. Sedangkan pada tahun 2016 sebanyak 16.058 kilogram dan pada pada tahun 2017 sebanyak 16.333 kilogram. Sampai dengan bulan Mei 2018 ini saja telah dilakukan sertifikasi sebanyak 8.494 kilogram madu hutan sumbawa dengan frekuensi pengeluaran sebanyak 1.134 kali.\r\n\r\nTerkait hal tersebut, petugas Karantina Sumbawa Wilker Pelabuhan Ferry Pototano tengah memeriksa 2 kilogram madu hutan tujuan Ciamis yang dikirim melalui jasa pengiriman.\r\n\r\nChristiawan, petugas Karantina Sumbawa mengatakan &quot;Untuk komoditas madu hutan Sumbawa kami melakukan pemeriksaan organoleptik serta volume dan jumlah kemasan&quot;', '2018-06-13 10:15:46.000000', 'web-1528859747.jpg', 'Ya'),
(47, 'Tri suparyanto, A.Md', 'Jagung Sumbawa Terus Diekspor ke Filipina', 'Sumbawa (08/06). Kita patut berbangga hati, satu-persatu kapal yang membawa jagung dari Petani Sumbawa berlayar ke Filipina. Hingga awal Juni 2018, berdasarkan data operasional Karantina Sumbawa tercatat hampir tiga perempat yang ditargetkan oleh Menteri Pertanian telah tercapai. â€œDari data operasional Karantina Sumbawa, terpantau hingga kapal terakhir yang diberangkatkan Kamis (07/06) tercatat 74.450.000 kilogram jagung biji yang telah dinyatakan sehat sehingga diterbitkan Phytosanitary Certificate oleh Karantina Sumbawa,â€ jelas Kepala Subseksi Pelayanan dan Operasional Karantina Sumbawa, Abdul Salam.\r\n\r\nIa menyebutkan saat ini baru tiga perusahaan yang melakukan ekspor jagung dengan tujuan Filipina. PT. Seger Agro Nusantara Sebanyak sembilan kali, PT. Sinar Agro Gemilang Indah satu kali dan PT. Sinar Aneka Niaga sebanyak satu kali.\r\n\r\nSementara menjawab pertanyaan para netizen dalam status di Fanspage Badan Karantina Pertanian tentang ketersediaan untuk kebutuhan industri dalam negeri, Abdul Salam menjawab, &quot;Hingga Mei tercatat 239.701.873 kilogram jagung dari Sumbawa terkirim memenuhi kebutuhan industri pakan dalam negeri.â€\r\n\r\nI Ketut Sindia, petugas Karantina Sumbawa yang bertugas melakukan pemeriksaan dokumen, fisik dan pengambilan sampel menyatakan bahwa semua dokumen persyaratan untuk ekspor telah lengkap. &quot;Kami juga sudah melakukan pengambilan sampel untuk selanjutnya dilakukan pengujian di laboratorium. Negara tujuan mempersyaratkan jagung yang diekspor bebas dari serangga hidup dan untuk menjaga kualitas jagung, kita juga lakukan fumigasi oleh pihak ketiga,&quot; imbuhnya.\r\n\r\nAbdul Salam, berharap ekspor jagung tahun 2018 ini melebihi dari yang ditargetkan Menteri Pertanian. Pada tahun 2015, Karantina Sumbawa telah melakukan ekspor jagung sebanyak 117.953.642 kilogram dengan frekuensi sebanyak 35 kali.', '2018-06-13 10:19:15.000000', 'web-1528859955.jpg', 'Ya'),
(48, 'Tri suparyanto, A.Md', '641 Takjil Dibagikan Karantina Sumbawa', 'Sumbawa (10/06) Peringatan Bulan Bakti Karantina Pertanian ke-141 bertepatan dengan Bulan Suci Ramadhan, dimanfaatkan Karantina Sumbawa untuk tebar takjil sebanyak 641 buah. Acara yang diadakan di dua tempat ini masing-masing membagikan 500 buah takjil di kota Sumbawa dan 141 di Pelabuhan Penyeberangan Ferry Pototano.\r\n\r\nKepala Karantina Sumbawa, Ida Bagus Putu Raka Ariana mengatakan &quot;Kegiatan tebar takjil ini salah satu rangkaian dari kegiatan bulan bakti karantina yang diperingati di Karantina Sumbawa. Sebelumnya kita telah mengadakan buka puasa bersama masyarakat sekitar. Kita juga akan mengikuti lomba website, lomba senam, safari ekpose ekspor produk pertanian dan lain-lain&quot;\r\n\r\nRaka berharap dari kegiatan tebar takjil ini dapat menuai kebaikan untuk Karantina Sumbawa, &quot;Semoga kedepannya Karantina Sumbawa lebih dekat dengan masyarakat, sehingga masyarakat sadar akan pentingnya karantina dalam menjaga keanekaragaman hayati yang ada di Pulau Sumbawa&quot;\r\n\r\nSementara Baiq, seorang pemudik asal Lombok Timur merasa senang dengan adanya kegiatan bagi takjil ini. Lamanya penyeberangan Pototano-Khayangan yang memakan waktu 4 jam, mengharuskan mereka berbuka di kapa. Adanya takjil dari Karantina Sumbawa cukup untuk mengganjal perut saat berbuka sebelum mencari makan &quot;Alhamdulillah sekali, semoga berkah&quot;', '2018-06-13 10:26:31.000000', 'web-1528860391.jpg', 'Ya'),
(49, 'Christiawan Yunarto, A.Md', 'Burung Sehat, Bisa Di Lalulintaskan', 'Sumbawa (12/06). Tradisi mudik ke kampung halaman menjadi momentum masyarakat Indonesia untuk merayakan Hari Raya Idul Fitri bersama keluarga. Seperti halnya yang dilakukan oleh Gunawan, warga Yogyakarta yang merantau di Bumi Pariri Lema Bariri.\r\n\r\nBuah tangan, merupakan hal yang tidak boleh dilupakan sebagai hadiah buat keluarga. Kali ini yang menjadi oleh-oleh cukup unik, yaitu burung samyong, burung endemik Indonesia Timur. Burung yang mendapat julukan dengan 1001 suara ini menjadi incaran para kicau mania. &quot;Kebetulan adek saya pecinta burung, jadi sengaja saya bawa burung samyong untuk oleh-oleh,&quot; ujar Gunawan.\r\n\r\n&quot;Kami telah melakukan pemeriksaan administrasi dan fisik terhadap burung tersebut. Dokumen lengkap dan burung sehat sehingga dapat kami terbitkan sertifikat kesehatan ', '2018-06-13 10:30:15.000000', 'web-1528860615.jpg', 'Ya'),
(50, 'Tri suparyanto, A.Md', 'Move Out Nasional Beras Bulog Sub Drive Sumbawa, Karantina Sertifikasi', 'Sumbawa (12/06), Tidak hanya jagung, Sumbawa memiliki stok melimpah beras. Sebanyak 900 ton beras tengah dilakukan pemeriksaan fisik dan dokumen persyaratan oleh Petugas Karantina Sumbawa.\r\n\r\nBeras tersebut milik Perum Bulog Sub Drive Sumbawa yang akan dilakukan Move Out Nasional (Movenas) ke Drive Nusa Tenggara Timur khususnya untuk daerah eks pengungsi Timor-Timur. Untuk menjaga kestabilan harga barang pokok, mendekati lebaran.\r\n\r\nMenurut Sindia petugas Karantina Sumbawa, &quot;Kami sudah melakukan pemeriksaan kelayakan alat angkut KM. Okayama dan rencananya akan bertolak dari pelabuhan badas Rabu Sore (12/06) menuju pelabuhan Atambua&quot;', '2018-06-13 10:33:41.000000', 'web-1528860821.jpg', 'Ya'),
(51, 'Tri suparyanto, A.Md', 'Persiapan Lebaran Topat, Sapi dan Kerbau Sumbawa Dikirim Ke Lombok', 'Sumbawa (18/06), Lebaran Ketupat (Topat) merupakan sebuah tradisi masyarakat Lombok untuk merayakan Puasa Syawal. Untuk mensyukuri berakhirnya puasa sunah tersebut, dilaksanakanlah &quot;Lebaran Topat&quot;. Ketupat beserta sayur pelengkapnya seperti plecing, opor, ares dan lain-lain dihidangkan untuk menjamu sanak saudara atau bekal piknik ke pantai. Sehingga tidaklah mengherankan kebutuhan daging mendekati lebaran topat meningkat.\r\n\r\nTerkait hal tersebut, 102 ekor sapi potong dan 10 ekor kerbau potong Sumbawa akan diberangkatkan ke Pulau Lombok. Sapi dan kerbau potong tersebut dilakukan pemeriksaan kesehatan sebelum dilalulintaskan oleh petugas Karantina Sumbawa melalui wilayah kerja Pelabuhan Laut Badas dan Pelabuhan Ferry Pototano.\r\n\r\n&quot;Pemeriksaan fisik, dokumen dan alat angkut dilakukan sesuai Standar Operasional Prosedur (SOP) pada setiap media pembawa yang dilalulintaskan&quot;, jelas Indra petugas Karantina Sumbawa. &quot;Petugas Laboratorium Karantina Sumbawa juga telah melakukan pengujian RBT (Rose Begal Test) untuk mengetahui adanya penyakit Brucellosis dan uji ulas darah sederhana untuk mencegah tersebarnya Hama dan Penyakit Hewan Karantina (HPHK)&quot; imbuhnya.', '2018-06-21 08:24:51.000000', 'web-1529544292.jpg', 'Ya'),
(52, 'Muhammad Farid Wajdi, A.Md', 'Pintu Ekspor Jagung Juga Dari Pelabuhan Bima', 'Sumbawa (13/06) tidak hanya pelabuhan Badas, pintu pengeluaran ekspor jagung dari Pulau Sumbawa juga dibuka dari Pelabuhan Bima. Menurut Kepala Subseksi dan Pelayanan Operasional Karantina Sumbawa Abdul Salam &quot;MV. Pegasus dengan muatan 6.900 ton yang diberangkatkan Selasa (12/06) merupakan kapal ketiga yang membawa ekspor jagung dari Pulau Sumbawa menuju Filipina, setelah sebelumnya MV. Than Thuy dan MV. Dayang Bai Li&quot;\r\n\r\nSalam menambahkan jagung-jagung dimuat dari pelabuhan Bima merupakan jagung dari Kabupaten Dompu dan Kabupaten Bima. &quot;Ada dua perusahaan eksportir yang memiliki gudang di Kabupaten Dompu, sedangkan untuk pelayanan pengurusan sertifikat Phytosanitarinya dilayani oleh petugas dari Wilker pelabuhan laut Bima&quot;\r\n\r\nPutri, petugas Karantina Sumbawa Wilker pelabuhan Bima yang melakukan pemeriksaan dokumen, fisik dan pegambilan sampel menyatakan &quot;Semua persyaratan ekspor telah lengkap, sampel juga telah kita ambil untuk memastikan jagung tersebut bebas serangga hidup,syarat dari negara tujuan dan juga kemarin telah dilakukan fumigasi oleh pihak ketiga&quot;\r\n\r\nDi tengah kebanggaan akan ekspor jagung dari Pulau Sumbwa, Ada cerita menarik yang dilontarkan oleh Putri ketika melakukan pengawasan fumigasi oleh pihak ketiga &quot;Susahnya naik kapal dengan tangga monyet sementara kapal sandarnya cukup jauh dari dermaga, butuh perjuangan untuk bisa naik diatas kapal di tengah teriknya kota Bima dan menjalankan ibadah puasa&quot;', '2018-06-26 13:55:01.000000', 'web-1530001645.jpg', 'Ya'),
(53, 'Tri suparyanto, A.Md', 'Apel Pagi dan Halal Bihalal Karantina Sumbawa', 'Sumbawa (21/06) Kepala Karantina Sumbawa, drh. Ida Bagus Putu Raka Ariana memimpin apel pagi dan halal seluruh pegawai Stasiun Karantina Pertaninan Kelas I Sumbawa Besar.\r\n\r\n&quot;Selamat Hari Raya Idul Fitri 1 Syawal 1439 Hijriyah mohon maaf lahir dan bathin, jadikan momentum lebaran ini untuk menjadi pribadi yang lebih baik dari sebelumnya apalagi kapasitas kita sebagai abdi negara yang melayani masyarakatâ€ ucap Raka dalam sambutannya pada apel tersebut.\r\n\r\nSelesai pelaksanaan apel pagi dilanjutkan dengan halal bihalal dan jabat tangan. Saling memaafkan antar pegawai Karantina Sumbawa, merupakan agenda rutin yang dilaksanakan di bulan Syawal.\r\n\r\n&quot;Semoga dengan acara seperti ini dapat mempererat tali silaturahmi antar pegawai agar selalu terjalin komunikasi yang baikâ€œ ujar Muhammad Ridwan Kepala Urusan Tata Usaha.', '2018-06-26 14:09:32.000000', 'web-1530001684.jpg', 'Ya'),
(54, 'Muhammad Farid Wajdi, A.Md', 'Menjelang Idul Adha, 441 Ekor Sapi Sumbawa Dikirim Ke Jakarta', 'Sumbawa (24/06), Hari raya Idul Adha masih sekitar dua bulan lagi. Namun euforia masyarakat untuk berburu sapi, kerbau dan kambing untuk dijadikan hewan kurban telah terasa di pasar hewan Kabupaten Bima.\r\n\r\nSebanyak 441 ekor sapi potong dari Bima akan diberangkatkan ke Jakarta. Sapi potong tersebut dilakukan pemeriksaan kesehatan sebelum di lalulintaskan oleh petugas Karantina Sumbawa melalui wilayah kerja pelabuhan laut Bima.\r\n\r\nMenurut dokter hewan karantina, drh. Ardiyanto Chandra Wijaya, pemeriksaan fisik, dokumen dan alat angkut dilakukan sesuai Standar Operasional Prosedur (SOP) pada setiap media pembawa yang dilalulintaskan.\r\n\r\n&quot;Pemeriksaan laboratorium pengujian RBT (Rose Begal Test) dilakukan untuk mengetahui adanya penyakit Brucellosis, selain itu juga uji ulas darah sederhana untuk mencegah tersebarnya Hama dan Penyakit Hewan Karantina (HPHK)&quot; imbuhnya.\r\n\r\nSapi-sapi tersebut diangkut menggunakan KM. Camara Nusantara 4. Kapal ini merupakan program tol laut Pak Jokowi khusus untuk melalulintaskan ternak.', '2018-06-26 14:10:54.000000', 'web-1530419734.jpg', 'Ya'),
(55, 'Muhammad Farid Wajdi, A.Md', 'Fumigasi Untuk Menjaga Kualitas Ekspor Jagung', 'Sumbawa (27/06). Fumigasi sebagai tindakan perlakuan karantina tumbuhan yang bertujuan untuk membebaskan media pembawa dari hama secara efektif . Fumigasi ini juga merupakan salah satu cara untuk menjaga kualitas ekspor produk petani kita, khususnya jagung yang menjadi andalan ekspor Sumbawa.\r\n\r\nHari ini, Selasa (26/06) petugas Karantina Sumbawa awasi fumigasi 4.450 ton jagung yang akan diekspor ke Filipina dengan menggunakan kapal MV. Giang Hai 09 melalui Pelabuhan Bima.\r\n\r\n&quot;Karena fumigasi dilakukan oleh pihak ketiga, maka kita sebagai petugas karantina perlu melalukan pengawasan guna memastikan bahwa semua aturan dan standar yang telah ditetapkan oleh Badan Karantina Pertanian dilaksanan dengan baik oleh fumigator&quot;, terang Putri selaku petugas\r\n\r\n&quot;Pengawasan tersebut meliputi pengawasan pemasangan selang monitor, penutupan setiap celah dari deck kapal yang berpotensi menjadi tempat kebocoran gas, penghitungan dosis fumigan dan monitoring konsentrasi gas dan lain-lain&quot;, imbuhnya.', '2018-07-03 15:25:37.000000', 'web-1530608329.jpg', 'Ya'),
(56, 'Tri suparyanto, A.Md', 'Karantina Sumbawa Periksa Kelayakan Alat Angkut, Buat Apa?', 'Sumbawa, (29/06). Pemeriksaan kelayakan alat angkut menjadi bagian dari Standar Operasional Prosedure (SOP) pelayanan karantina. Pemeriksaan alat angkut dilakukan untuk mengetahui alat angkut tersebut layak tidak untuk membawa komoditas pertanian atau tidak. Terlebih komoditas yang dibawa diperuntukan untuk ekspor.\r\n\r\nRabu (27/06), petugas Karantina Sumbawa memeriksa MV Vandon Sea di Pelabuhan Badas. Kapal ini rencananya akan membawa 6.900 ton jagung menuju Filipina.\r\n\r\n&quot;Selain pemeriksaan kelayakan kapal, yang kita lakukan adalah melakukan pengawasan pemasangan selang monitor untuk fumigasi dan memeriksa setiap ruangan deck kapal yang berpotensial menjadi tempat kebocoran gas pada waktu dilakukan fumigasi,&quot; kata I Ketut Sindia, petugas Karantina Sumbawa Wilker Pelabuhan Laut Badas.', '2018-07-03 15:34:30.000000', 'web-1530608347.jpg', 'Ya'),
(57, 'Tri suparyanto, A.Md', 'Opini : Menengok Potensi Ekspor Jagung Sumbawa', 'Jagung Sumbawa, komoditas pertanian ini menjadi andalan di Pulau Sumbawa. Berbicara soal hasil, jangan diragukan lagi. Distribusi keluar pulau Sumbawa untuk memenuhi kebutuhan jagung dalam negeri (domestik)  dan Ekspor yang tercatat dalam opersaional Stasiun Karantina Pertanian Kelas I Sumbawa Besar. Bagaimana cara untuk menggenjot produksi dan menjaga kestabilan harga, simak dalam opini berikut :\r\n\r\n\r\nhttp://opiniartikel.kampung-media.com/2018/07/02/menengok-potensi-ekspor-jagung-sumbawa-24725', '2018-07-04 15:14:29.000000', 'web-1530692070.jpg', 'Ya');
INSERT INTO `berita` (`id`, `penulis`, `judul`, `isi`, `waktu_upload_berita`, `gambar`, `tampil`) VALUES
(58, 'Tri suparyanto, A.Md', 'Selangkah Lagi Menuju Target Seratus Ribu Ton Ekspor Jagung Sumbawa', 'Sumbawa (03/07). Satu persatu kapal yang membawa jagung Sumbawa diberangkatkan menuju Filipina. Melalui pintu pengeluaran Peabuhan Badas dan Pelabuhan Bima, kapal-kapal siap untuk membawa produk petani kita Indonesia.\r\n\r\n&quot;Dari Pelabuhan laut Badas telah diberangkatkan 6.900 ton jagung dan Senin kemarin, 6.600 ton diberangkatkan dari Pelabuhan Bima,&quot; kata Abdul Salam, Kasubsie Yanops Sumbawa.\r\n\r\nSenada dengan yang di sampaikan Abdul Salam, I Ketut Sindia petugas Karantina Sumbawa mengatakan bahwa dokumen telah dinyatakan lengkap, alat angkut telah diperiksa serta telah dilakukan pemeriksaan fisik dan laboratorium. &quot;Sebelumnya juga telah kita awasi perlakuan fumigasi, untuk menjaga kualitas ekspor produk pertanian kita untuk memastikan bebas serangga hidup,&quot; imbuhnya\r\n\r\nSementara Kepala Karantina Sumbawa, Ida Bagus Raka Ariana merasa senang bisa mendukung akselerasi ekspor jagung dari pulau Sumbawa. &quot;Dari pelepasan ekspor pertama (21/03) yang semula diwacanakan Menteri Pertanian dengan target 100.000 ton, sampai hari ini Karantina Sumbawa telah berhasil sertifikasi jagung sebanyak 99.300 ton dengan frekuensi 15 kali. Kurang selangkah lagi, menuju target,&quot; katanya.', '2018-07-04 15:21:13.000000', 'web-1530698194.jpg', 'Ya'),
(59, 'Tri suparyanto, A.Md', 'Ketika Mahatir Muhammad Belajar Di Karantina Sumbawa', 'Sumbawa (06/07), pagi setelah absen, Mahatir Muhammad mengikuti pembimbing melakukan pengambilan sampel darah di instalansi karantina.\r\n\r\n&quot;Yang cowok ada yang pegang tali ya! biar ternaknya gak gerak. Satu orang lagi siapkan tabung dan jarum venoject. Dan Intan siapkan rak tabung dan pena untuk menulis kode sampel!&quot; perintah Indra petugas Karantina Sumbawa yang membimbing siswa Praktek Kerja Industri.\r\n\r\nSehari sebelumnya (05/07), Kepala Subseksi Pelayanan Karantina Sumbawa, secara resmi menerima mereka. Mahatir Muhamamad dan empat orang temannya dari SMK Pertanian Pembangunan Negeri Bima. Dalam sambutan Abdul Salam menyampaikan &quot;Silakan kalian belajar tentang kegiatan perkarantinaan di sini, khususnya kegiatan karantina hewan sesuai jurusan kalian Perawatan Kesehatan Ternak, sebagai bekal kalian memasuki dunia kerja.&quot;\r\n\r\nKegiatan magang industri ini dilakukan selama tiga bulan dari tanggal 5 Juli sampai dengan 4 Oktober 2018.', '2018-07-26 09:12:06.000000', 'web-1532919701.jpg', 'Ya'),
(60, 'Tri suparyanto, A.Md', 'Apel Pagi Penggugah Semangat Kerja', 'Karantina Sumbawa mengadakan apel pagi pada hari Senin (09/07). Diharapkan dari kegiatan ini dapat sebagai penggugah semangat kerja pegawai.\r\n\r\nApel pagi pekan kedua di bulan Juli ini dipimpin oleh I Ketut Sindia, koordinator fungsional karantina tumbuhan. Diikuti oleh seluruh pegawai Karantina Sumbawa dan 4 orang siswa Prakerin, acara berlangsung khidmat.\r\n\r\nDalam sambutanya Ketut menyampaikan &quot;Bekerjalah sepenuh hati dan tetap fokus dalam bekerja&quot;', '2018-07-26 09:14:29.000000', 'web-1532919713.jpg', 'Ya'),
(61, 'Tri suparyanto, A.Md', 'Demam Senam Masih Menghinggapi Karantina Sumbawa', 'Sumbawa (12/07) meskipun kalah dalam perlombaan kemarin, namun semangat untuk senam Karantina Sumbawa masih menggelora. Hal ini terbukti saat menghadiri peringatan Hari Anti Narkoba Tingkat Propinsi Nusa Tenggara Barat yang dipusatkan di Sumbawa. Acara yang diadakan oleh Badan Narkotika Nasional (BNN) Propinsi NTB ini diawali dengan senam bersama.\r\n\r\nMenurut Tamrin, petugas Karantina Sumbawa&quot;Sebenarnya banyak dari teman-teman yang mau ikut senam, namun karena undangan terbatas jadi cuma 3 orang yang ikut&quot;\r\n\r\n&quot;Mereka masih demam senam, jadi badan pingin gerak begitu ada irama senam&quot; imbuhnya.\r\n\r\nDengan hadir dalam kegiatan ini, diharapkan terjalinya hubungan yang harmonis antara Karantina Sumbawa dengan BNN. Khususnya dalam menjaga penyalahgunaan Narkoba.', '2018-07-26 09:16:30.000000', 'web-1532571391.jpg', 'Ya'),
(62, 'Muhammad Farid Wajdi, A.Md', 'Jelang Idul Adha, Karantina Sumbawa Pastikan Pasokan Sapi Potong Asal Sumbawa Sehat.', 'Sumbawa (15/7) â€“ Kebijakan Tol Laut Presiden Joko Widodo sangat dirasakan manfaatnya bagi para pengusaha ternak di Pulau Sumbawa. Kehadiran KM. Camara Nusantara dalam melalulintaskan ternak secara khusus mampu menjaga kualitas kesehatan hewan ternak dari Pulau Sumbawa ke daerah tujuan tetap terjaga baik.\r\n\r\nMenjelang Idul Adha frekuensi pemeriksaan hewan ternak oleh petugas Karantina Sumbawa di pelabuhan laut Bima meningkat. Dalam seminggu terakhir tercatat 2.800 ekor sapi potong dari Bima akan diberangkatkan ke Jakarta. Pengiriman sapi potong asal Sumbaawa tersebut untuk memenuhi kebutuhan hewan kurban di daerah Jakarta, Bogor, Bekasi dan Sekitarnya.\r\n\r\nOleh karena peran Karantina Sumbawa sangat penting dalam memastikan bahwa sapi potong tersebut dalam kondisi sehat dan aman untuk dikonsumsi. Menurut Ardiyanto, dokter hewan Karantina Sumbawa Wilker Pelabuhan Laut Bima, Pemeriksaan fisik, dokumen dan alat angkut dilakukan sesuai Standar Operasional Procedure (SOP) pada setiap media pembawa yang dilalulintaskan.\r\n\r\n&quot;Pemeriksaa laboratorium dengan pengujian RBT (Rose Bengal Test) dilakukan untuk mengetahui adanya penyakit Brucellosis, selain itu juga uji ulas darah sederhana untuk deteksi penyakit Anthrax dan Tripanosoma&quot; imbuhnya.\r\n\r\nAda 3 kapal tol laut yang yang disiagakan di pelabuhan laut Bima, yaitu KM. Camara 4, 5 dan 6.', '2018-07-26 09:18:28.000000', 'web-1532571509.jpg', 'Ya'),
(63, 'Tri suparyanto, A.Md', 'Kuota Ditambah, Karantina Sumbawa Masih Geber Ekspor Jagung', 'Sumbawa,(17/07) - Jam menunjukan pukul 20.00 WITA, dengan mengendarai motor Sindia dan Andrika petugas Karantina Sumbawa harus bergegas menuju Pelabuhan Badas untuk mengawasi fumigasi. Hari itu Sabtu (14/07) kapal MV. Arikun akan membawa ekspor jagung Sumbawa sebanyak 6.600 ton atau senilai hampir 19 Miliar menuju Filipina.\r\n\r\n&quot;Kami telah memeriksa dokumen persyaratan ekspor, melakukan pemeriksaan fisik serta melakukan pengambilan sampel di gudang untuk dilakukan pengujian laboratorium. Sehingga setelah selesai dilakukan fumigasi dapat diterbitkan Phytosanitary Certificate,&quot; jelas Sindia.\r\n\r\nSementara Kepala Subseksi Pelayanan dan Operasional Karantina Sumbawa, Abdul Salam menjelaskan, &quot;Dari target 100.000 ton ketika dilepas perdana oleh Kepala Badan Ketahanan Pangan (BKP) Agung Hendriadi yang mewakili Menteri (20/03). Dapat terpenuhi dalam kurun waktu 3 bulan saja.&quot;\r\n\r\n&quot;Sampai kapal MV. Arikun ini, sudah 17 kapal dengan total muatan 111.950 ton. Jadi kuota ekspor jagung Sumbawa ditambah,&quot; jelas Salam.\r\n\r\nDitanya tentang berapa tambahan kuota ekspor jagung yang baru, Baba Sile begitu panggilan akrabnya mengungkapkan belum tahu pasti tambahan kuotanya. Namun dalam setiap pengajuan permohonan, telah dilengkapi Rekomendasi Pengeluaran Bahan Pakan Asal Tumbuhan dari Dirjen Peternakan dan Kesehatan Hewan.', '2018-07-26 09:20:22.000000', 'web-1532919867.jpg', 'Ya'),
(64, 'Tri suparyanto, A.Md', 'Ketika Pak Ridwan, Purna Tugas', 'Sumbawa (01/08) Bagi sebagian orang perpisahan menjadi hal yang begitu berat untuk dijalani. Bahkan membutuhkan waktu untuk menghapus kesedihan akan sebuah perpisahan. Seperti halnya yang dialami Muhammad Ridwan, Kepala Urusan Tata Usaha Karantina Sumbawa.\r\n\r\nJam menunjukan pukul 16.02 WITA, saatnya bagi pegawai Karantina Sumbawa untuk melakukan absen pulang. Dengan berjalan perlahan Pak Ridwan begitu panggilan akrabnya, mendekati mesin fingerprint. â€œTerimakasihâ€ begitu bunyi yang keluar dari mesin absen elektronik. Seolah belum merasa puas atau hanya sekedar untuk melampiaskan kegundahan hati tidak hanya sekali beliau melakukan absen sore itu. Hari itu Selasa (31/07) merupakan hari terakhir bagi Pak Ridwan mengabdi bagi negara, melalui Karantina Sumbawa. â€œRasanya berat meninggalkan kantor ini, namun akhir masa baktiku telah tiba waktunya â€ sembari mengusap air mata beliau bercerita kepada pegawai yang sedang antri absen.\r\n\r\nTiga puluh lima tahun mengabdi bukanlah waktu sebentar, mulai dari dulu bernama Stasiun Karantina Kehewanan Badas dibawah Pemerintah Daerah kabupaten Sumbawa. Hingga sekarang menjadi Satasiun Karantina Pertanian Kelas I Sumbawa Besar dibawah kementerian Pertanian. Delapan pimpinan beliau alami, dari drh Zaedun sampai saat ini drh Ida Bagus Putu Raka Ariana.\r\n\r\nSementara siang harinya di Aula Karantina Sumbawa, diadakan acara pelepasan purna bakti. Dihadiri oleh pegawai beserta keluarga, acara berlangsung sederhana namun bermakna. Dalam sambutanya Kepala Karantina Sumbawa drh Ida bagus Putu Raka Ariana menyampaikan ucapan terimkasaih atas pengabdianya untuk Karantina Sumbawa.\r\n\r\nâ€œPurna tugas hanya berpisah dengan pekerjaan saja, namun tidak dengan silaturahmiâ€ Sambut Raka.', '2018-08-04 09:10:05.000000', 'web-1533348606.jpg', 'Ya'),
(65, 'Tri suparyanto, A.Md', 'Dampak Penutupan Pelabuhan Badas, 65 Kerbau Gagal ke Wajo', 'Sumbawa, (06/08) - &quot;Mohon maaf bu, kalau bisa sapi saya jalan sebelum jam 11,&quot; pinta seorang pengusaha ternak asal Dompu\r\n\r\n&quot;Saya usahakan ya pak, namun saya tetap harus mengerjakan sesuai prosedur dalam bekerja&quot; jawab Siska petugas Karantina Sumbawa yang piket Sabtu (04/08) pagi itu.\r\n\r\nBelum sampai 15 menit, datang lagi seorang pengusaha lainya &quot;Sapi saya bisa di muat ke dalam truk sekarang bu!&quot;\r\n\r\nItulah gambaran kecemasan para pengusaha yang akan melalulintaskan ternaknya ke Pulau Lombok dari Karantina Sumbawa wilayah kerja Pelabuhan Laut Badas. Sabtu lalu, ada 19 permohonan tindakan karantina hewan baik sapi, kerbau maupun kuda.\r\n\r\nSeolah berlomba dengan waktu, para pengusaha ternak tersebut ingin sesegera mungkin menyeberangkan daganganya. Hal ini dilakukan karena cuaca buruk di perairan selat Alas mengakibatkan pelabuhan penyeberangan Pototano melakukan sistem buka tutup untuk menjaga keselamatan pelayaran.\r\n\r\nSementara hari ini, Senin (06/08) dari 5 permohonan tindakan Karantina Hewan di wilker Pelabuhan Badas, hanya 4 yang bisa dilakukan proses muat.\r\n\r\nMenurut drh. Priono penanggung jawab wilker tersebut hal ini dilakukan karena adanya larangan berlayar dari Kesyahbandaran dan Otoritas Pelabuhan Badas. Sehingga KLM. Sumber Bahari yang akan membawa kerbau potong ke Wajo batal diberangkatkan dari sana.\r\n\r\n&quot;Untuk sapi tujuan lombok sudah berangkat, sedangkan 65 kerbau tujuan Wajo terpaksa di perpanjang masa karantinanya sampai pelabuhan Badas di buka kembali,&quot; jelas Priono', '2018-08-09 07:18:47.000000', 'web-1533773927.jpg', 'Ya'),
(66, 'Tri suparyanto, A.Md', 'Sapi Sumbawa Untuk Indonesia, Karantina Pastikan Kesehatanya', 'Sumbawa, (17/08) - Sapi sebanyak 303 ekor siap diberangkatkan ke Jakarta menggunakan KM Camara IV dari pelabuhan laut Badas, Sumbawa. Program &quot;Kapal Qurban&quot; dari salah satu lembaga sosial dan kemanusian Aksi Cepat Tanggap (ACT) ini mengambil tema Indonesia berkurban, bangsa dan dunia menikmatinya. Konsep awal dari kegiatan ini adalah mendistribusikan ternak dari daerah kaya ternak ke daerah yang kekurangan ternak agar kebutuham hewan kurban tercukupi.\r\n\r\nDilepas secara simbolik oleh wakil Bupati Sumbawa, acara ini dihadiri oleh Kepala Dinas Peternakan, Kepala Karantina Sumbawa, SVP ACT dan Kepala Kesyahbandaran Pelabuhan Badas.\r\n\r\nDalam kesempatan tersebut kepala Karantina Sumbawa Ida Bagus Putu Raka Ariana secara simbolik menyerahkan sertifikat kesehatan hewan. &quot;Dengan telah diterbitkannya sertifikat ini maka semua peryaratan untuk melalulintaskan hewan kurban ini telah lengkap. Sudah dilakukan pemeriksaan kesehatan di laboratorium oleh petugas Karantina Sumbawa, dan dinyatakan bebas dari HPHK,&quot; ujar Raka\r\n\r\n&quot;Sapi-sapi ini bisa segera diberangkatkan ke daerah tujuannya,&quot; tambahnya lagi', '2018-08-27 07:26:04.000000', 'web-1537181973.jpg', 'Ya'),
(67, 'Tri suparyanto, A.Md', 'Trauma Gempa, Karantina Sumbawa Berikan Pelayanan Prima Meski di Tenda Darurat', 'Sumbawa, (22/08) - Waktu masih menunjukan pukul 09.00 WITA. Setelah menerima sampel dari petugas di Instalansi Karantina Hewan, saatnya bagi Sari petugas laboratorium Karantina Sumbawa untuk melakukan preparasi sampel.\r\n\r\nSatu persatu tabung berisi darah sapi dimasukkan kedalam alat pemutar, saat itu dia hendak melakukan pemerikasaan Rose Bengal Test (RBT). Namun tiba-tiba gempa mengguncang, sekuat tenaga dia berlari menuju tanah lapang di belakang kantor. Gempa dengan kekuatan 5,1 SR dengan pusat di pulau Panjang sebelah utara Pulau Sumbawa.\r\n\r\nTrauma, masih menyelimuti pegawai Karantina Sumbawa. Gempa datang baik malam, pagi maupun siang. Bahkan dalam empat hari terakhir ini saja telah puluhan kali gempa dengan kekuatan 5-7 SR. Yang memberikan dampak kerusakan di wilayah Barat Pulau Sumbawa.\r\n\r\nSementara penanggung jawab wilker pelabuhan Badas, drh. Priono menjelaskan. Hari Selasa (21/08) ada 193 ekor sapi kurban yang harus segera diseberangkan ke Pulau Lombok.\r\n\r\n&quot;Karena ini hewan kurban maka kami harus segera melakukan pemeriksaan fisik dan laboratorium, meskipun ditengah ketakutan akan gempa susulan namun tetap dilakukan sesuai Standar Operasional Prosedur,&quot; jelas Priono.\r\n\r\n&quot;Takutnya nanti kalau hewannya lama di IKH kita sampai di Lombok telah habis masa kurban, karena kita ketahui pelabuhan Pototano melakukan sistem buka-tutup&quot; imbuhnya.\r\n\r\nTak jauh berbeda suasana di Wilker Pelabuhan Ferry Pototano. Dengan tenda darurat pelayanan karantina dilakukan.\r\n\r\n&quot;Kondisi tembok kantor banyak yang retak dan gempa susulan hampir setengah jam sekali disini, maka kami berinisiatif membuat tenda darurat untuk kantor pelayanan sementara,&quot; jelas Erin.', '2018-08-27 07:28:51.000000', 'web-1537181988.jpg', 'Ya'),
(69, 'Tri suparyanto, A.Md', 'Ini Dia, Tindakan Karantina Sumbawa Pada Sail Moyo Tambora 2018', 'Sumbawa, (11/09). Sail Moyo Tambora (Samota) 2018 dibuka oleh Menteri Koordinator Bidang Kemaritiman, Luhut Binsar Panjaitan, Minggu (09/09). Kegiatan yang berlangsung di Pelabuhan Badas Sumbawa ini, merupakan momentum strategis untuk membangkitkan kembali pariwisata di Nusa Tenggara Barat. Terutama pasca gempa bumi yang melanda Lombok Sumbawa beberapa waktu lalu.\r\n\r\nAcara yang dikuti oleh puluhan kapal Yact dari berbagai negara ini, sebagai sarana memperkenalkan Pulau Moyo dan Gunung Tambora yang keindahannya tidak diragukan lagi.\r\n\r\nKarantina yang masuk dalam unsur Layanan Terpadu (Integrated Service Center) bersama Imigrasi, Bea Cukai dan instansi lainnya mengambil tindakan cepat dalam acara Rally Yact tersebut dengan melakukan pemeriksaan terhadap barang bawaan para peserta dan tamu dari berbagai mancanegara.\r\n\r\nHal ini dilakukan sebagai tindakan untuk mengamankan Pulau Sumbawa dari ancaman Hama dan Penyakit Hewan Karantina (HPHK) maupun Organisme Penggagu Tumbuhan Karantina (OPTK).\r\n\r\nNah sobatQ, tamu mancanegara saja sadar tentang pentingnya karantina. Yuk, mari kita jaga kelestarian sumber hayati dan hewani Indonesia.', '2018-09-20 14:14:38.000000', 'web-1537427678.jpg', 'Ya'),
(70, 'Tri suparyanto, A.Md', 'Karantina Sumbawa Berbagi, Untuk Kembalikan Keceriaan Di Pulau Bungin', 'Sumbawa (29/08) Pulau Bungin, pulau unik yang dihuni oleh lebih dari 3.000 jiwa ini hanya memiliki luas 8,5 hektar. Pulau yang termasuk terpadat di dunia ini tak luput terkena dampak dari gempa sebesar 7 skala richter lalu. Bahkan sesaat setelah terjadinya gempa tersebut, 23 rumah terbakar.\r\n\r\nSelasa (28/08) keluarga besar Karantina Sumbawa memberikan tali kasih berupa pakaian, susu, makanan ringan, air dan Makanan Pendamping Asi kepada korban gempa dan kebakaran di Pulau Bungin. Diharapkan dengan tali kasih ini dapat mengembalikan keceriaan anak-anak di Pulau Bungin.\r\n\r\nKepala Karantina Sumbawa drh Ida Bagus Putu Raka Ariana menyampaikan, turut prihatin atas musibah ini.\r\n&quot;Semoga saudara -saudara kita, diberi kekuatan dan ketabahan serta selalu dalam lindungan Tuhan Yang Maha Kuasa,&quot; harap Raka.', '2018-09-20 14:15:46.000000', 'web-1537428162.jpg', 'Ya'),
(71, 'Tri suparyanto, A.Md', 'Karantina Sumbawa Ikut Sukseskan Sail Moyo Tambora 2018', 'Sumbawa (13/9) - Nusa Tenggara Barat tahun ini terpilih sebagai tuan rumah penyelenggaraan destinasi lintasan event internasional World Sail 2018. Kegiatan yang bertema Sail Indonesia Moyo Tambora 2018 telah berlangsung sejak 9 September 2018 kemarin. Pada ajang bergengsi ini rencananya akan ada ratusan kapal yacht dari puluhan negara yang akan bersandar di pelabuhan Badas.\r\n\r\nUntuk turut mensukseskan event internasional kali ini, Karantina Sumbawa bergabung dalam unsur Layanan Terpadu (Integrated Service Center) bersama dengan Bea Cukai, Imigrasi, Karantina Kesehatan Pelabuhan dan lainnya. Petugas Karantina Sumbawa secara aktif memeriksa barang bawaan kapal yang baru datang. Memberikan arahan agar komoditas pertanian seperti sayur dan buah-buahan serta hewan peliharaan sepert anjing dan kucing yang dibawa, tidak diturunkan dari kapal.\r\n\r\n&quot;Untuk menjaga Pulau Sumbawa dari ancaman HPHK ataupun OPTK, petugas karantina melakukan pemeriksaan barang bawaan. Buah-buahan serta sayuran dan hewan piaraan seperti anjing dan kucing yang dibawa dari negara asal, kami persilahkan untuk tidak dibawa turun dari kapal&quot; jelas Abdul Salam, Kasubsie Yanops Karantina Sumbawa.\r\n\r\n&quot;Bagi peserta yang akan membawa oleh-oleh pulau Sumbawa seperti susu kuda, madu dan bonsai, karantina siap untuk membantu melakukan pemeriksaan dan memberikan sertifikat sebagai legalitas masuk ke negara tujuan&quot; tambahnya.\r\n\r\nDonna, peserta dari Australia merasa senang karena sambutan panitia yang begitu ramah. &quot;Orang Indonesia ramah-ramah, Saya betah di Indonesia&quot; begitu ungkapnya dengan bahasa Indonesia yang masih terbata-bata.', '2018-09-20 14:24:46.000000', 'web-1537428286.jpg', 'Ya'),
(72, 'Tri suparyanto, A.Md', 'Bonsai Sentigi Sumbawa Nan Eksotis, Karantina Pastikan Kesehatannya', 'Sumbawa, (17/09) - Pohon Sentigi (Pemphis acidula) merupakan tanaman perdu yang tumbuh di daerah pesisir pantai. Bagi pecinta bonsai, tanaman ini terkenal eksotis. Eksotisme sentigi terletak pada karakteristik batang, percabangan, daun, bunga, dan daya tahan tanaman sehinga menjadikanya bonsai berkelas.\r\n\r\nPesonanya mampu memikat hati Made Supriyana, Anggota TNI AL yang bertugas di kapal rumah sakit KRI Dr. Soeharso. Di tengah kesibukannya bertugas dalam operasi Surya Bhaskara Jaya (SBJ) 67/2018, satu rangkaian dengan kegiatan Sail Moyo Tambora 2018 di Pulau Sumbawa, bersama empat orang rekannya menyempatkan diri berburu sentigi ke petani bonsai di Kabupaten Sumbawa.\r\n\r\nâ€œBonsai sentigi itu unik dan menarik. Kebetulan kemarin pas jalan-jalan menikmati kota Sumbawa melihat petani bonsai sedang merawat tanamannya di kebun, maka saya tertarik ingin membelinya sebagai oleh-oleh,&quot; kata Made.\r\n\r\nSementara itu, I Ketut Sindia, SP, petugas Karantina Sumbawa menjelaskan bonsai sentigi yang akan dibawa pulang prajurit TNI AL tersebut berjumlah 50 pot dan telah dilakukan pemeriksaan fisik. Hasilnya, bebas OPT/OPTK. Kini bonsai cantik nan eksotis tersebut telah berlayar menuju Surabaya.', '2018-09-20 14:28:02.000000', 'web-1537429016.jpg', 'Ya'),
(73, 'Tri suparyanto, A.Md', 'Gapura Karantina Sumbawa Juara Tiga', 'Sumbawa (18/09) Gapura merupakan pintu gerbang ke suatu kawasan. Secara hierarki sebuah gapura bisa disebut sebagai ikon karena gapura itu sendiri lebih sering menjadi komponen pertama yang dilihat ketika kita memasuki suatu wilayah.\r\n\r\nDalam rangka memperingati hari ulang tahun Republik Indonesia yang ke-73 bulan lalu, Karantina Sumbawa mengikuti lomba Gapura yang diadakan oleh Pemerintah Kecamatan Labuhan Badas. Bukan mengejar juara, namun lebih memaknai perjuangan para pahlawan dalam mengantarkan kemerdekaan Indonesia hingga sampai kedepan gerbang. Sehingga kita bisa menikmati kemerdekaan hingga sekarang ini.\r\n\r\nSementara Andik Akrimil Fata, Kepala Urusan Tata Usaha Karantina Sumbawa dalam apel pagi pegawai Senin (17/09) menyampaikan â€œTerimakasih atas partisipasi semua pegawai dan thl yang turut berpartisipasi dalam membuat gapura dan menjaga kebersihan lingkungan kantor, Alhamdulillah hari Jumâ€™at kemarin dapat surat dari Bapak Camat yang menyatakan gapura kita juara tigaâ€.', '2018-09-20 14:30:21.000000', 'web-1537428621.jpg', 'Ya'),
(74, 'Tri suparyanto, A.Md', 'Nyamung Soan, Mete Gurih Dari Sumbawa', 'Sumbawa (20/9) - I Ketut Sindia petugas Karantina Sumbawa tengah memeriksa 336.738 kilogram biji mete yang akan dibawa ke Makasar. Diangkut menggunakan dua kapal Kapal Laut Motor Aisyah dan KM. Mentari Selaras. â€œKami telah melakukan pemeriksaan fisik, hasilnya bebas OPT/OPTKâ€ jelas Ketut (18/09).\r\n\r\nSelama ini jambu mete tidak dibudidayakan secara intensif oleh petani. Hanya sebagai tanaman tumpang sari, namun produksinya pada tahun 2017 lalu dari data operasional Karantina Sumbawa tercatat 807.807 kilogram dilalulintaskan keluar Pulau Sumbawa dengan frekuensi sebanyak 37 kali.\r\n\r\nJambu Mete (Anacardium occidentale) atau bagi masyarakat Sumbawa biasa menyebutnya dengan Nyamung Soan merupakan tanaman perkebunan yang cukup berpotensi untuk dikembangkan di Sumbawa. Lahan yang masih luas merupakan faktor utama yang mendukung pengembangan tanaman ini.', '2018-09-24 07:48:14.000000', 'web-1537750289.jpg', 'Ya'),
(75, 'Tri suparyanto, A.Md', 'Kemasan Kayu Tak Luput dari Pemeriksaan Karantina Sumbawa', 'Sumbawa, (25/09)- Munawir Haris, petugas Karantina Sumbawa tengah memeriksa 185 kemasan kayu dari Australia dan Amerika Serikat. Diangkut dengan MV. MCP Troodos tiba di Pelabuhan Benete Sumbawa pada hari Kamis (20/09). â€œUntuk pemeriksaan kemasan kayu, kita periksa marka sesuai dengan Permentan No.12 Tahun 2009 yang merujuk ke ISPM nomor 15, â€ jelas Nawir.\r\n\r\nNawir menambahkan, pemeriksaan yang dimaksud untuk mengetahui keberadaan, kebenaran dan keabsahan marka, kondisi fisik dan adanya kemungkinan infestasi OPTK. Selain itu, kemasan kayu juga harus bebas dari serangga, tidak ada kulit kayu dan tidak berjamur.', '2018-11-27 08:29:46.000000', 'web-1543283150.jpg', 'Ya'),
(77, 'Yuni Husni', 'Madu dan Dendeng Direktur Kesmavet Tak Luput Pemeriksaan Karantina Sumbawa', 'Sumbawa (27/9) â€œAda yang bisa saya bantu pak ?â€ sapa Yuni Husni petugas Karantina Sumbawa dengan ramah. Sembari mengingat raut wajah yang datang didepanya. Seolah tidak asing dengan pengguna jasa yang datang ini. Husni sapaan akrabnya mempersilahkan duduk di kursi pelayanan.\r\n\r\nâ€œGini dik, saya mau melaporkan madu dan dendeng yang hendak saya bawa ke Jakartaâ€ kata pengguna jasa.\r\n\r\nSembari husni mengambil identitas pengguna jasa tersebut â€œPak Syamsul Maâ€™arif dari Kesmavet Kementan ya!â€ tanya Husni setengah terperangah.\r\n\r\nKemarin, Karantina Sumbawa Wilker Bandara Sultan M. Kaharudin kedatangan drh. Syamsul Maâ€™arif, MSi. Direktur Kesehatan Masyarakat Veteriner (Kesmavet) untuk melaporkan madu dan dendeng Sumbawa yang akan dibawanya ke Jakarta (26/09). Nur Rochim, petugas Karantina Sumbawa langsung melakukan pemeriksaan yang meliputi pemeriksaan organoloptik, keutuhan kemasan serta volume dan jumlah, sebelum diterbitkan Sertifikat Karantina Hewan.\r\n\r\nNah SobatQ, jangan lupa lapor karantina pada setiap media pembawa yang kita lalulintaskan ya !', '2018-11-27 08:34:12.000000', 'web-1543283174.jpg', 'Ya'),
(79, 'Christiawan Yunarto, A.Md', 'Pohon Lita Segede Truck Fuso, Diperiksa Karantina Sumbawa', 'Sumbawa (3/11) - SobatQ, ternyata komoditas pertanian yang dilalulintaskan itu tidak hanya pohon dalam pot saja. Di Karantina Sumbawa ada pengguna jasa yang melalulintaskan pohon dengan ukuran satu truk fuso. Itu hanya muat satu batang saja loh...masyarakat Sumbawa menyebutnya pohon lita.\r\n\r\nPohon lita atau pule yang memiliki nama latin Alstonia scholaris ini merupakan pohon pelindung yang sudah tidak asing lagi. Pohon ini lagi ngetren untuk dijadikan icon suatu taman baik taman rumah, taman perkantoran maupun area publik supaya tampak lebih indah. Ada juga yang ditanam sebagai pohon pelindung ditepi-tepi jalan dan ditempat-tempat lahan parkiran agar lebih teduh.\r\n\r\nKelebihan pohon pule terletak pada karakter batang yang unik dan berseni, warna daun yang hijau mengkilat serta tidak mudah rontok. Selain itu pohon pule bisa tumbuh optimal dilahan kering, panas, minim unsur hara serta tahan terhadap cuaca yang cukup ekstrim.\r\n\r\nâ€œSampai dengan bulan Agustus Wilker Pototano telah 4 kali sertifikasi 7 pohon pule yang dibawa ke Bogor, Semarang dan Yogyakarta&quot; ujar Munawir, petugas Karantina Sumbawa wilker Pelabuhan Ferry Pototano. &quot;Dan kemarin, ada satu pohon yang akan dibawa ke Bogor, tambahnya.\r\n\r\nâ€œPemeriksaan fisik kita lakukan untuk memastikan bebas OPT/OPTK, apalagi menurut penuturan pengguna jasa yang mengurus dokumen karantina tadi pohon ini mau dibawa ke Istana Bogorâ€ tandasnya.', '2018-11-27 08:38:03.000000', 'web-1543283206.jpg', 'Ya'),
(81, 'Christiawan Yunarto, A.Md', 'Lebih Cepat, Dua Wilker Karantina Sumbawa Gunakan VSAT dari Kominfo', 'Sumbawa -- Kualitas pelayanan publik mutlak dilakukan, agar dapat memberikan pelayanan prima yang cepat dan tepat. Sejalan dengan hal tersebut Badan Karantina Pertanian melalui sistem internalnya IQFAST atau Indonesian Quarantine Full Automation System untuk mempercepat memberikan pelayanan sertifikat komoditas pertanian yang telah diterapkan di seluruh unit dari Sabang sampai Merauke, membutuhkan jaringan internet yang kuat dan stabil.\r\n\r\nMinggu (18/11) Karantina Sumbawa wilayah kerja pelabuhan ferry Pototano menerima instalansi VSAT (Very Small Aperture Terminal) dari Badan Aksesibilitas Telekomunikasi dan Informasi (Bakti) di bawah Kementerian Komunikasi dan Informatika (Kemkominfo). Fungsi utama dari VSAT adalah untuk menerima dan mengirim data ke satelit sehingga mempercepat dan menstabilkan dan pemerataan sinyal internet. Sehingga pemerataan akses telekomunikasi dan informasi di daerah.\r\n\r\nAndik Akrimil Fata Kepala Urusan Tata Usaha Karantina Sumbawa menyatakan, pada tahun ini Karantina Sumbawa menerima dua buah VSAT dari program BAKTI Kementerian Kominfo. â€œSatu telah dipasang di wilker pelabuhan ferry Pototano dan satu lagi di pelabuhan ferry Sapeâ€ jelasnya.\r\n\r\nâ€œSemoga dengan terpasangnya VSAT di dua wilker ini dapat mempercepat petugas dalam melaksanakan kegiatan perkarantinaan â€ imbuhnya.', '2018-11-27 08:40:12.000000', 'web-1543283225.jpg', 'Ya'),
(83, 'Tri suparyanto, A.Md', 'Kini, Karantina Sumbawa Layak Mendapat Sertifikat SNI ISO 37001:2016', 'Sumbawa - Dengan diterimanya sertifikat ISO 37001:2016 tentang Sistem Manajemen Anti Penyuapan oleh Kepala Karantina Sumbawa di IPB Convention Hotel dan diserahkan langsung oleh Kepala Badan Karantina Pertanian (19/11), terjawablah sudah pertanyaan auditor bahwa karantina Sumbawa layak menerima sertifikat ISO 37001:2016.\r\n\r\nHal ini disampaikan oleh auditor, Putu Ayu Bunga Astidyanti saat melakukan audit pelayanan sertifikasi tindakan karantina hewan dan tumbuhan di kantor induk Karantina Wilker Pelabuhan Laut Badas beserta auditor Oktavia Purwatingingrum pada tanggal 25- 26 Oktober 2018.\r\n\r\nâ€œBagaimana Bapak bisa menjelaskan apa itu karantina dan bagaimana prosedur mengurus dokumen karantina kepada orang awam? tanya Bunga kepada drh Priono selaku penanggungjawab Karantina Wilker Pelabuhan Laut Badas.\r\n\r\nâ€œKarena di situlah inti dari lembaga publik telah menerapkan manajemen anti penyuapan dan layak mendapatkan sertifikat SNI ISO 37001:2016â€, ungkap Bunga.\r\n\r\nâ€œKami mempersilakan bapak atau ibu yang hendak mengurus dokumen karantina, untuk datang ke kantor karantina terdekat. Petugas akan menjelaskan prosedur karantina, selain itu di ruang pelayanan ditempel informasi alur pelayanan, jenis dan tarif pengenaan PNBP dan jam pelayanan. Serta zaman yang serba online sekarang ini informasi tersebut juga dapat diakses masyarakat melalui web Karantina Sumbawaâ€ Jelas Priono.\r\n\r\nKepala Karantina Sumbawa, drh. Ida Bagus Putu Raka Ariana, berharap dengan diterimanya sertifikat ini komitmen dan konsistensi dalam mencegah penyuapan dapat terjaga', '2018-11-27 08:42:49.000000', 'web-1543283069.jpg', 'Ya'),
(84, 'Tri suparyanto, A.Md', 'Ini Aksi Jemput Bola Karantina Sumbawa untuk Jamin Penerapan ISPM#15 pada Kemasan Kayu Impor', 'Sumbawa -- Sebagai perusahaan tambang PT Amman Mineral Nusa Tenggara (AMNT) rutin mendatangkan-spare part- alat berat dari luar negeri seperti Australia, Amerika Serikat dan Singapura. Tercatat dalam operasional Karantina Sumbawa pada tahun 2015 sebanyak 6.695 -kemasan- kayu yang dipergunakan sebagai pembungkus ataupun bantalan alat berat diperiksa oleh Karantina Sumbawa dengan frekuensi 94 kali. Lalu pada tahun 2016 sebanyak 3.112 dengan frekuensi 77 kali dan tahun 2017 sebanyak 1.455 dengan frekuensi 13 kali. Besarnya lalulintas impor marka, pada hari Selasa (27/11) dilakukan diskusi tentang prosedur perkarantinaan.\r\n\r\nMenurut Abdul Salam, Kepala Subseksi Pelayanan dan Operasional Karantina Sumbawa tema dalam diskusi kali ini Permentan No.12 Tahun 2009 Permentan No.12 Tahun 2009 tentang Persyaratan dan tatacara tindakan karantina tumbuhan terhadap pemasukan kemasan kayu ke dalam wilayah negara Republik Indonesia dan ISPM nomor 15.\r\n\r\nSalam menambahkan, pemeriksaan yang dilakukan Karantina Sumbawa untuk mengetahui keberadaan, kebenaran dan keabsahan marka, kondisi fisik dan adanya kemungkinan infestasi OPTK. Sehingga OPTK tersebut tida dapat masuk dan tersebar di wilayah Indonesia khususnya Pulau Sumbawa. â€œPemeriksaan dasar yang pada kemasan kayu marka yang harus sesuai standar dan jenis perlakuanya. Bebas dari serangga, tidak ada kulit kayu serta tidak berjamur.â€ jelas Salam', '2018-12-11 12:16:02.000000', 'web-1543283206.jpg', 'Tidak'),
(86, 'Tri suparyanto, A.Md', 'Jelang Natal dan Tahun Baru, Karantina Sumbawa Siap Bertugas', 'Sumbawa - Apel siaga angkutan laut Natal 2018 dan Tahun Baru 2019 digelar di Kantor Kesyahbandaran dan Otoritas Pelabuhan Badas Kabupaten Sumbawa.\r\n\r\nKepala Karantina Sumbawa, Ida Bagus Putu Raka Ariana berharap dengan kegiatan apel bersama ini dapat mempererat silaturahmi dan sinergisitas petugas di pelabuhan maupun bandara khususnya di Pulau Sumbawa.\r\n\r\n&quot;Kita akan terus siap siaga dalam menjaga pulau Sumbawa meskipun terjadi lonjakan penumpang jelang natal dan tahun baru nanti,&quot; jelas Raka.\r\n\r\nSelain pegawai Karantina Sumbawa, hadir dalam apel tersebut TNI AL, Kepolisian, Bea Cukai, Karantina Kesehatan dan intansi terkait. Dipimpin Kepala Kesyahbandaran dan Otoritas Pelabuhan Badas, H. Anwar M. S.Sos acara berjalan lancar.\r\n\r\nJangan lupa ya SobatQ saat selalu laporkan komoditas pertanian yang akan dilalulintaskan karena Karantina Sumbawa akan terus siaga setiap saat.', '2018-12-19 07:33:13.000000', 'web-1545179593.jpg', 'Tidak'),
(88, 'Tri suparyanto, A.Md', 'Sambut Tahun Baru, Karantina Sumbawa Tingkatkan Kapasitas SDM', 'Sumbawa -- Sebagai bagian dari unit kerja Badan Karantina Pertanian yang bakal menyongsong pelayanan perkarantinaan berkelas dunia, Karantina Sumbawa khususnya di unit laboratorium lakukan peningkatan kapasitas. &quot;Sebagai rujukan tindakan karantina d llapangan maka penguatan teknik dan metoda perlakuan menjadi sangat penting,&quot; kata Kepala Karantina Sumbawa, Ida Bagus Putu Raka Ariana saat memberikan arahan pada pembukaan Bimbingan Teknis Uji Terap Teknik dan Metode Perkarantinaan di Sumbawa (26/12).\r\n\r\nBimtek yang berlangsung selama dua hari ini mendatangkan narasumber Ummu Salamah R dari Karantina Uji Terap. Mengawali bimbingannya, Ummu menyampaikan bahwa Karantina Uji Terap atau Balai Uji Terap Teknik dan Metode Karantina Pertanian (BUTTMKP) sesuai dengan tugas pokok dan fungsinya dapat memfasilitasi bimbingan teknis terkait teknik dan metode perlakuan. Tidak hanya itu, Karantina Uji Terap juga dapat diseminasikan teknik dan metode perkarantinaan dalam rangka peningkatan pelayanan.\r\n\r\nSejalan dengan program Nawacita pemerintah Jokowi-JK, salah satunya adalah penguatan sumber daya manusia (SDM) maka pengembangan SDM berupa peningkatan kapasitas dan kompetensi melalui pelatihan yang bersifat teknis dan magang menjadi fokus Karantina Sumbawa, &quot;Kami menyambut datangnya tahun baru 2019 dengan SDM yang bersemangat dan berkualitas baru guna songsong layanan perkarantinaan berkelas dunia,&quot; tandas IB Putu Raka', '2019-01-15 14:52:49.000000', 'web-1547538769.jpg', 'Ya'),
(90, 'Tri suparyanto, A.Md', 'Ainun : Hewan Sehat Kok Tetap di Karantina ?', 'Sumbawa -- Dengan nada malu-malu namun penuh dengan rasa keingintahuan, Ainun memberanikan diri untuk bertanya &quot;Pak Dokter, hewan yang mau dilalulintaskan tadi dipersyaratanya ada beberapa dokumen seperti Surat Keterangan Keterangan Kesehatan Hewan atau SKKH, yang ingin saya tanyakan adalah kenapa hewan sudah dinyatakan sehat meski dilakukan tindakan karantina?&quot; tanya Ainun, mahasiswi Universitas Mataram mengawali diskusi di pelabuhan laut Bima pada hari Kamis (10/1).\r\n\r\n&quot;Benar sekali!, Sekarang Bapak balik nanya misalkan orang tua kita pedagang sapi, dikirim dari Bima ke Kalimantan tanpa dilakukan pemeriksaan kesehatan ternyata ditengah laut sapinya mati karena sakit, siapa yang rugi ?&quot; jawab drh. Andra.\r\n\r\n&quot;Untuk itulah kenapa sebelum masuk instalansi karantina, hewan yang akan dilalulintaskan tersebut harus dinyatakan sehat dengan dibuktikan SKKH, selanjutnya didalam intalansi karantina juga dilakukan tindakan karantina yaitu pemeriksaan fisik klinis hewan dan pengambilan sampel darah untuk pengujian laboratorium untuk memastikan media pembawa tersebut bebas dari HPHK sebelum dilalulintaskan &quot; tambah Andra.\r\n\r\n&quot;Untuk lebih jelasnya lagi nanti akan diterangkan waktu kalian magang di Karantina Sumbawa&quot; tambah Andra.\r\n\r\nAinun bersama bersama 19 orang temanya, merupakan mahasiswa program studi kesehatan hewan Universitas Mataram PDD Bima. Didampingi dua orang dosen pengampu, mereka mengikuti pratikum mata kuliah teknik karantina hewan di Karantina Sumbawa Wilker Pelabuhan Laut Bima.\r\n\r\nSelama sehari, Jumat (11/01) mereka belajar dokumen karantina, pemeriksaan fisik dan pemeriksaan alat angkut.', '2019-01-15 14:54:01.000000', 'web-1548859989.jpg', 'Ya'),
(91, 'Tri Suparyanto, A.Md', 'Geliat Bisnis Si Liur Emas dari Pulau Sumbawa, Karantina Pastikan Kesehatannya', 'Sumbawa -- Geliat bisnis si liur emas atau sarang burung walet (SBW) di Pulau Sumbawa semakin terlihat. Data operasional Karantina Sumbawa mencatat pada tahun 2017 sebanyak 4.369 kilogram SBW dilalulintaskan dari Sumbawa menuju kota-kota besar di Indonesia seperti Balikpapan, Surabaya, Batam, Pontianak, Yogyakarta dan Banjarmasin. Tahun 2018 naik hampir dua kali lipat yaitu sebanyak 8.140 kg SBW yang dilalulintaskan dengan frekuensi pengeluaran sebanyak 322 kali.\r\n\r\nJumat (25/01) petugas Karantina Sumbawa Wilker Bandara Sultan M. Salahudin Bima tengah memeriksa 18 kilogram sarang burung walet tujuan Surabaya. Fastop, petugas Karantina Sumbawa mengatakan, &quot;Pemeriksaan fisik SBW yang kita lakukan untuk mengetahui jumlah, jenis dan kelayakan kemasan serta cemaran seperti kayu, logam dan lainya.&quot;\r\n\r\n&quot;Setelah itu kita lakukan sertifikasi,&quot; imbuhnya lagi.\r\n\r\nSemoga geliat si liur emas dari Pulau Sumbawa ini tidak hanya di pasar dalam negeri, namun mampu menembus ekspor kedepanya.', '2019-04-23 15:19:03.000000', 'web-1556007894.jpg', 'Ya'),
(92, 'Tri Suparyanto, A.Md', 'Karantina Sumbawa Siap Panen Kacang, Dari Program OPAL', 'Sumbawa â€” Obor Pangan Lestari (OPAL) sebagai program Kementerian Pertanian, yang bertujuan memanfaatkan sisa lahan perkantoran sebagai penyedia pangan dan sebagai percontohan untuk masyarakat dalam pemanfaatan pekarangan, sepenuhnya didukung oleh Karantina Sumbawa.\r\n\r\nKepala Karantina Sumbawa, Ida Bagus Putu Raka Ariana menyatakan â€œProgram ini bagus kedepanya tidak hanya pekarangan kantor, dilingkungan rumah pegawai dapat dikembangkan budidaya menggunakan pot sehingga dapat meningkatkan penyediaan sumber pangan keluarga yang bergizi dan seimbangâ€\r\n\r\nDitanya tentang kapan program ini di mulai, Raka menjawab â€œKarantina Sumbawa sebelum program ini digemborkan sudah melaksanakan sejak dua tahunan, pegawai yang menempati rumah dinas, memanfaatkan sisa lahan kantor yang cukup luas untuk menanam tanaman pangan seperti jagung dan sayur mayur. Tahun lalu kita panen jagung manis yang hasil panenya bisa dibagikan ke seluruh pegawai dan masyarakat sekitarâ€\r\n\r\nâ€œBulan depan kita akan panen kacang, nanti direbus dimakan bersama-sama di kantor !â€ imbuh Raka.\r\n\r\nAdapun program OPAL yang dilaksanakan Karantina Sumbawa dengan memanfaatkan area perkantoran yaitu Kacang Tanah, Jagung, Pepaya, Sayuran dan tengah menyiapkan lahan untuk tanaman obat keluarga (TOGA).', '2019-04-23 15:28:24.000000', 'web-1556008415.jpg', 'Ya'),
(93, 'Tri Suparyanto, A.Md', 'Sadar Lapor Karantina Bisnis Lancar, Anda Tenang Kami Senang', 'Sumbawa - Untuk memastikan unggas yang masuk dan keluar Pulau Sumbawa sehat dan bebas dari HPHK, petugas Karantina Sumbawa selalu lakukan pemeriksaan. Seperti yang dilakukan petugas Karantina Sumbawa wilker Pelabuhan Ferry Sape berikut. Lakukan pemeriksaan 7.500 DOC yang akan di seberangkan ke Labuhan Bajo menuju Manggarai.\r\n\r\nMenurut dokter hewan Karantina Sumbawa Astria Ardika &quot; Pemeriksaan yang dilakukan meliputi pemeriksaan dokumen dan pemeriksaan fisik&quot;\r\n\r\n&quot;Dengan sadar lapor karantina para pengusaha Doc merasa bisnisnya lancar, karena mereka tenang ketika melalulintaskannya tidak was-was ketika ditanya petugas di daerah tujuan&quot; Imbuh Dika.', '2019-04-23 15:36:36.000000', 'web-1556008597.jpg', 'Ya'),
(94, 'Tri Suparyanto, A.Md', 'Andhika Pratama, Praktek Kerja Lapangan Di Karantina Sumbawa', 'Sumbawa -- Delapan siswa dari SMK Negeri 1 Tarano mengikuti Praktek Kerja Lapangan (PKL) di Karantina sumbawa. Selama 3 bulan mereka akan belajar perkarantinaan dari persyaratan, sampai dokumen karantina dikeluarkan dan komiditas pertanian bisa di lalulintaskan.\r\n\r\nDalam sambutanya kepala Karantina Sumbawa, Ida Bagus Putu Raka Ariana menyampaikan &quot;Selamat datang dan selamat bergabung menjadi keluarga besar Karantina Sumbawa, serta terimakasih atas kepercayaan bapak/ibu pembimbing semoga hasil dari PKL sesuai dengan kurikulum sekolah&quot;\r\n\r\nRaka menambahkan &quot;Sesuai logonya SMK Bisa, maka kalian juga harus bisa menjadi duta karantina yang menyampaikan apa itu karantina dan tugasnya kepada teman, keluarga dan masyarakat&quot;\r\n\r\n&quot;Jangan lupa jaga kondisi kesehatan, karena kalian belajar mandiri jauh dari orang tua&quot; imbuh Raka.', '2019-04-23 15:39:19.000000', 'web-1556008759.jpg', 'Ya'),
(95, 'Tri Suparyanto, A.Md', 'Tumbuh Liar, Karantina Sumbawa Pastikan Srikaya Bebas Kutu Putih', 'Sumbawa â€“ Buah nona? Bagaimana ya bentuknya, rasa-rasanya kok belum pernah makan. Bayangan Karimin sih rasanya manis, warnanya merah menggoda.\r\n\r\nBenar, manis banget, asli! Tapi tidak merah ternyata. Daging buahnya putih dengan kulit menyerupai sisik berwarna hijau. Yap, Karimin mengenalnya dengan nama srikaya.\r\n\r\nKok orang Sumbawa menyebutnya buah nona? Barangkali diambil dari penggalan nama ilmiahnya, Annona squamosa. Ah, ada-ada saja. Orang Indonesia memang kreatif.\r\n\r\nDi Sumbawa, srikaya jarang dibudidayakan. Biasanya sih tumbuh liar di ladang, pekarangan rumah, atau sebagai tanaman pagar. Meski demikian, produktivitasnya lumayan juga. Berdasar data operasional Karantina Sumbawa, pada tahun lalu, 798 kilogram buah srikaya dilalulintaskan ke luar Sumbawa sebagai buah tangan atau barang tentengan.\r\n\r\nJumat lalu (22/02), Saladin, petugas Karantina Sumbawa Wilker Bandara Sultan M. Sholahudin Bima memeriksa 7 kilogram srikaya yang akan dikirim ke Jawa. Memangnya, apa yang diperiksa?\r\n\r\nâ€œBuah Srikaya rentan terhadap serangan kutu putih. Jadi, buah yang betul-betul bersih yang boleh kita lalulintaskan,â€ jelas Saladin.\r\n\r\nHmm, jadi begitu ya karantina bekerja. Iyap, makanya bantu kami dengan selalu lapor karantina yak', '2019-04-23 15:42:29.000000', 'web-1556008950.jpg', 'Ya'),
(96, 'Tri Suparyanto, A.Md', 'Demam OPAL Karantina Sumbawa, Dari Panen Sampai Merambah Ke Wilker', 'Sumbawa â€” Obor Pangan Lestari (OPAL) sebagai program Kementerian Pertanian, yang bertujuan memanfaatkan sisa lahan perkantoran sebagai penyedia pangan dan serta sebagai percontohan untuk masyarakat dalam pemanfaatan pekarangan. Program ini diharapkan kedepanya dapat meningkatkan penyediaan sumber pangan keluarga yang bergizi dan seimbang.\r\n\r\nKepala Karantina Sumbawa, Ida Bagus Putu Raka Ariana mengatakan â€œHari ini kita akan melaksanakan panen perdana kacang tanah dari program OPAL Karantina Sumbawa&quot;.\r\n\r\n&quot;Kacang tanah kita pilih karena lahan yang kita miliki masih cukup luas, serta dapat memanfaatkan air hujan sebagai pengairanya&quot; jelas Raka\r\n\r\nRaka menambahkan &quot;Selain kacang tanah, ada juga kita tanam sayuran seperti kangkung, terong cabai, sawi dan lainya yang ditanam menggunakan polibag telah siap panen dalam satu minggu kedepan. Serta tanaman obat keluarga (TOGA) yang mulai tumbuh&quot; imbuh Raka.\r\n\r\nDemam program OPAL Karantina Sumbawa tidak hanya dilaksakan di kantor Induk saja. Wilker Bandara Solahudin Bima dan Wilker Pelabuhan Badas juga tengah melaksanakan program yang sama. Diharapkan kedepanya demam OPAL benar-benar dapat menginspirasi masyarakat dalam pemanfaatan lingkungan.', '2019-04-23 15:45:42.000000', 'web-1556009142.jpg', 'Ya'),
(97, 'Tri Suparyanto, A.Md', 'Jangan Heran, Kepala dan Jerohan Sapi pun Tak Luput dari Pemeriksaan Karantina', 'Sumbawa - SobatQ, pasti heran dan bertanya, kok Karantina Pertanian repot amat sih.!! sampai memeriksa kepala dan jerohan sapi segala? Memang betul sobatQ, karantina pertanian tak luput melakukan tindakan pemeriksaan terhadap kepala dan jerohan sapi karena merupakan media pembawa Hama dan Penyakit Hewan Karantina (HPHK) dan ini merupakan fungsi strategis karantina pertanian untuk mencegah masuk dan tersebarnya HPHK dan media pembawa Organisme Pengganggu Tumbuhan Karantina OPTK) dari luar negeri dan dari suatu Area ke Area lain di dalam negeri atau keluarnya dari dalam wilayah Negara Republik Indonesia.\r\n\r\nPada hari senin (4/3) petugas karantina Sumbawa melakukan tindakan karantina berupa pemeriksaan terhadap media pembawa berupa 2 buah kepala sapi dan 20 kilogram jerohan sapi yang rencananya dibawa ke Lombok dengan dititipkan di Bus umum. Media pembawa ini merupakan hasil tangkapan operasi gabungan Karantina Sumbawa, Polres Sumbawa Barat dan instansi terkait.\r\n\r\nSetelah dilakukan pemeriksaan kemudian media pembawa tersebut ditahan karena tidak dilengkapi dengan dokumen berupa surat kesehatan dari daerah asal.\r\n\r\n&quot;Kepala dan jerohan sapi yang dibungkus dengan coolbox tersebut ditemukan pada waktu pemeriksaan bagasi bus malam, â€œ ungkap Christiawan Yunarto, petugas Karantina Sumbawa Wilker Pelabuhan Ferry Pototano.\r\n\r\nChris menambahkan &quot;sekarang kami melakukan penahanan, karena pemilik tidak sanggup memenuhi dokumen persyaratan yaitu Surat Kesehatan Bahan Asal Hewan (SKBAH) kemudian akan dilakukan tindakan karantina selanjutnyaâ€.\r\n\r\n&quot;Kegiatan operasi gabungan ini juga bertujuan memberikan sosialisasi kepada masyarakat untuk melaporkan komoditas pertanian yang hendak dilalulintaskan dengan dilengkapi dokumen pendukungnya&quot; pungkas Chris.', '2019-04-23 15:49:00.000000', 'web-1556009341.jpg', 'Ya'),
(98, 'Tri Suparyanto, A.Md', 'Sarana Terbatas, Tak Surutkan Semangat Akselerasi Ekspor Karantina Sumbawa', 'Sumbawa-- Program Ayo Galakkan Ekspor, Generasi Milenial Bangsa (Agro Gemilang) yang digulirkan Badan Karantina Pertanian Kementerian Pertanian di tahun 2019 membuat 52 unit pelaksan teknis dibawahnya berlomba menggalakkannya. Tak terkecuali Karantina Sumbawa, dengan melakukan pendataan komoditas unggulan dari lalulintas pertahun, koordinasi dengan Dinas terkait sampai menyambangi petani dan pelaku bisnis.\r\n\r\n&quot;Pulau Sumbawa memiliki komoditas pertanian unggulan untuk ekspor. Diantaranya adalah sarang burung wallet, madu hutan, susu kuda, kopi, bawang merah, jagung dan kayu manis. Komoditas tersebut ekspor ke beberapa negara seperti Filipina, Arab Saudi, Hong Kong dan Singapura,&quot; kata Kepala Karantina Sumbawa drh. Ida Bagus Putu Raka Ariana.\r\n\r\nâ€œUntuk sarang burung wallet saja berdasarkan data operasional Karantina Sumbawa selama tiga tahun terakhir tercatat mengalami peningkatan yang sangat signifikan, pada tahun 2016 volumenya mencapai 1.329 kilogram, tahun 2017 volumenya mencapai 4.369 kilogram lalu pada tahun 2018 naik dua kali lipat dengan volume lalulintasnya mencapai 8.140 kilogram. Semuanya dikirim ke Jawa, Sumatra dan Kalimantan untuk eksporâ€ jelas Raka.\r\n\r\nRabu (13/03) petugas Karantina Sumbawa tengah memeriksa sarang burung wallet tujuan Jakarta. Tidak tanggung-tanggung, sebanyak 120 kilogram yang dikemas dalam delapan karton. Jika rata-rata harga perkilonya sepuluh juta, maka perkiraan nilai barang tersebut mencapai 1,2 Miliar rupiah.\r\n\r\nSudaryono, petugas Karantina Sumbawa mengatakan sebelum dilakukan sertifikasi dilakukan pemeriksaan fisik untuk mengetahui jumlah, jenis dan kelayakan kemasan serta cemaran seperti kayu, logam dan lainya. â€œDua bandara yang ada di pulau Sumbawa yaitu Bandara S.M Kaharudin Bandara S.M Solahudin hanya melayani penerbangan rute domestik. Sehinga ekspor sarang burung wallet tidak bisa dilakukan langsung dari Sumbawaâ€ jelas Sudaryono.\r\n\r\nâ€œSelain juga belum ada perusahaan pemrosesan sarang burung wallet yang bisa mengolah hingga siap eksporâ€ imbuhnya menutup pembicaraan', '2019-04-23 15:51:30.000000', 'web-1556009490.jpg', 'Ya'),
(99, 'Tri Suparyanto, A.Md', 'Bibit Jeruk Dari Banyuwangi Dimusnahkan Karantina Sumbawa', 'Sumbawa - Sebanyak 32 batang bibit pohon jeruk dimusnahkan petugas Karantina Sumbawa (19/03), setelah sebelumnya dilakukan penahanan. Pemusnahan dilaksanakan di Wilayah Kerja pelabuhan ferry Pototano dengan cara dibakar. Puluhan bibit jeruk dari Banyuwangi tersebut sedianya akan dijual di wilayah Sumbawa Besar.\r\n\r\nMunawir Haris, petugas Karantina Sumbawa Wilker pelabuhan ferry Pototano mengatakan sesuai dengan peraturan Menteri Pertanian Nomor 630/KPTSP/TP.063/6/1997 bahwa melalulintaskan benih jeruk yang beredar harus disertai dengan label lulus sertifikasi yang dikeluarkan oleh Balai/ Loka pengawasan dan sertifikasi benih tanaman pangan dan holtikultura atau penyelenggara sertifikasi lainnya yang telah memperoleh akreditasi ditempat asal benih jeruk dan dilaporkan kepada petugas karantina.\r\n\r\nâ€œKarena tidak dilengkapi dengan dokumen karantina serta tidak berlabel, dikhawatirkan puluhan bibit pohon jeruk itu mengandung Organisme Pengganggu Tumbuhan Karantina yang menyerang tumbuhan jenis jeruk. Misalnya saja virus Citrus Vein Phloem Degeneration (CVPD) imbuh Nawir.', '2019-04-23 15:54:50.000000', 'web-1556009690.jpg', 'Ya'),
(100, 'Tri Suparyanto, A.Md', 'Transit di Surabaya, SBW Sumbawa Diekspor ke Hongkong', 'Sumbawa -- Petugas Karantina Simbawa Jumat lalu (13/03) memeriksa sarang burung walet (SBW) tujuan Surabaya. Dua karton besar tersebut masing-masing berisi 20 kilogram SBW, sehingga berat totalnya 40 kilogram. Dengan perkiraan nilai barang 400 juta rupiah. SBW tersebut akan diekspor ke negara Hongkong namun sebelumnya akan singgah di Surabaya untuk dilakukan pemrosesan hingga siap ekspor ke negara tujuan.\r\n\r\nSudaryono, petugas Karantina Sumbawa mengatakan sebelum diterbitkan sertifikasi kesehatan produk hewan terlebih dahulu dilakukan pemeriksaan. Petugas terlebih dahulu memeriksa fisik untuk mengetahui jumlah, jenis dan kelayakan kemasan serta kebersihan SBW tersebut.\r\n\r\nâ€œSarang walet ini akan dikirim ke Surabaya, untuk dilakukan pemrosesan hingga siap ekspor ke Hongkong. Karena syarat ekspor harus bebas dari penyakit Avian Ifluenza. Selain itu akan dilakukan pengujian mikrobiologi, kandungan nitrit, kadar air dan cemaran logam berat,&quot; tambah Sudaryono.', '2019-04-23 15:57:55.000000', 'web-1556009876.jpg', 'Ya'),
(101, 'Tri Suparyanto, A.Md', 'Karantina Pertanian Sumbawa Lakukan Pemantauan OPTK, Kawal Lumbung Pangan', 'Sumbawa - selain terkenal sebagai gudang ternak, Sumbawa merupakan lumbung pangan. Komoditas pangan unggulan dari pulau terbesar di Propinsi Nusa Tenggara Barat ini adalah Padi, Jagung dan Barang Merah.\r\n\r\nDalam rangka mendukung Sumbawa sebagai lumbung pangan, dilakukan kegiatan Pemantauan Daerah Sebar Organisme Pengganggu Tanaman Karantina Tahun 2019.\r\n\r\nI Ketut Sindia, selaku ketua tim mengatakan, &quot;Pemantauan OPTK sebagai upaya deteksi dini, dalam cegah tangkal OPTK di wilayah Sumbawa&quot;.\r\n\r\n&quot;Dari kegiatan pemantauan ini kita ambil tanaman yang bergejala lalu kita lakukan pengujian di laboratorium. Dari hasil pemeriksaan tersebut kita lakukan pendataan apabila ditemukan OPT yang tergolong OPTK&quot; imbuh Sindia.\r\n\r\nFokus pemantauan kali ini adalah tanaman pangam seperti padi, jagung, bawang merah, kedelai, kacang tanah dan tanaman pangan lainya. Dari ujung barat Pulau Sumbawa Kabupaten Sumbawa Barat, sampai dengan ujung timur Kabupaten Bima.', '2019-05-07 14:19:50.000000', 'web-1557214002.jpg', 'Ya');
INSERT INTO `berita` (`id`, `penulis`, `judul`, `isi`, `waktu_upload_berita`, `gambar`, `tampil`) VALUES
(102, 'Humas Barantan', 'Kementan Dorong Lebih Banyak Komoditas Unggulan Asal Sumbawa Bisa Ekspor', 'Sumbawa - Setelah sukses sebagai daerah yang berhasil mengekspor jagung ke mancanegara, Kabupaten Sumbawa juga miliki 4 komoditas pertanian unggulan lainnya yakni sarang burung walet, akar jarak merah, daun sisal dan bungkus. Hal ini berdasarkan data lalulintas dari sistem otomasi perkarantinaan, IQFAST di Karantina Pertanian Sumbawa yang sampaikan Kepala Badan Karantina Pertanian (Barantan), Kementerian Pertanian, Ali Jamil.\r\n\r\n&quot;Meski masih banyak yang belum dikirim langsung lewat Sumbawa, semoga upaya silaturahmi kita ini membuahkan hasil,&quot; ungkap Jamil, Kepala saat lepas ekspor komoditas pertanian di kantor bupati Sumbawa, NTB, Rabu (29/5).\r\n\r\nJamil memaparkan pada 2018 ekspor jagung dari Sumbawa mencapai 109.800 ton atau senilai Rp. 384,3 miliar. Sedangkan sarang burung walet dominan dikirim ke Tiongkok namun via Surabaya sebanyak 8,14 ton senilai Rp. 122,1 miliar ; akar jarak merah yang banyak dimanfaatkan untuk kesehatan asal Kabupaten Dompu dan Bima, dengan nilai ekspor Rp. 330 juta tujuan Prancis, Jerman dan Australia via Denpasar.\r\n\r\nAda lagi yang potensi yang khas yakni Daun sisal (Agave sisalana), komoditas yang memiliki serat yang kuat ini banyak berasal dari Kabupaten Sumbawa dan Sumbawa Barat. Di negara tujuan ekspornya banyak digunakan sebagai tali tambang kapal, walpaper, bahan tekstil, karpet dan kerajinan. Pada 2018 total ekspor sebanyak 74 ton atau senilai Rp. 1,274 miliar. Juga yang khas adalah daun bungkus, digunakan untuk herbal diekspor ke Jepang dan Timor Leste via kantor pos. Pada 2018, pengiriman hanya 2 kg namun senilai Rp. 80 juta.\r\n\r\nJamil juga memaparkan upaya strategis yang dilakukan untuk peningkatan dan percepatan ekspor komoditas pertanian yakni, pertama dengan meningkatkan jumlah eksportir terutama di kalangan Generasi Millenial Bangsa; kedua dengan meningkatkan diiversifikasi atau keberagaman komoditas/produk dengan minimal produk setengah jadi, contohnya seperti daun sisal tadi, baiknya diekspor sudah dalam bentuk tali tambang kapal dan sebagainya.\r\n\r\nSelanjutnya, langkah strategis ketiga yakni dengan peningkatan frekwensi pengiriman komoditas pertanian; keempat dengan meningkatkan volume komoditas dan terakhir adalah membuka akses pasar kenegara- negara tujuan ekspor lainnya. &quot;Sesuai dengan instruksi Menteri Pertanian, Barantan terus lakukan upaya membuka akses pasar dengan lakukan harmonisasi aturan perkarantinaan di negara-negara tujuan ekspor baru,&quot; tambahnya.\r\n\r\nKepala Karantina Pertanian Sumbawa, Ida Bagus Putu Raka Ariana, menambahkan, bahwa selain lima komoditas unggulan tersebut, masih ada potensi lain yang dapat dikembangkan yakni sapi potong, kerbau potong, kuda potong, madu, susu kuda liar, kopi tepal, bawang merah dan porang.\r\n\r\nPada acara yang dihadiri oleh Bupati Sumbawa, H.M Husni Djibril, B.Sc. Kementan melepas ekspor sarang walet sebanyak 23 kg tujuan Hongkong via Surabaya senilai Rp. 345 juta. Juga akar jarak merah sebanyak 2 kg tujuan Paris via Denpasar senilai Rp. 4 juta. Total nilai ekspor dari Sumbawa hari ini sebesar Rp. 349 juta.\r\n\r\nHusni, dalam sambutannya mengapresiasi upaya Kementan dalam mendorong produk lokal tembus pasar manca negara tersebut. Pihaknya melalui SKPD siap mendorong para calon eksportir dalam meningkatkan geliat pertumbuhan ekonomi lewat komoditas pertanian unggulan diwilayahnya.Ekspor merupakan salah satu cara agar petani dan peternak mendapatkan harga yang pantas, sehingga kesejahtaraan dapat terdongkrak, tegasnya.\r\n\r\nJamil kembali menekankan bahwa Kementan lewat Barantan siap memberikan informasi dan bantuan terkait proses karantinanya. Jika membutuhkan bantuan lain, seperti teknologi budi daya, kebutuhan bantuan benih dan alat, serta kebutuhan lainnya, jajarannya siap memberikan fasilitas koordinasi dengan instansi Kementerian Pertanian baik daerah maupun pusat. Ia juga menyampaikan bahwa pemda dapat memanfaatkan aplikasi I-MACE (Indonesian Map of Agricultural Commodities Exports) yang sudah disiapkan Barantan agar daerah mampu melihat potensi komoditas ekspor di daerahnya secara real time, tutup Jamil.\r\n\r\nNarasumber ;\r\n1. H.M Husni Djibril, B.Sc. - Bupati Sumbawa\r\n2. Ir. Ali Jamil, MP, Ph.D - Kepala Badan Karantina Pertanian\r\n3. Drh. Ida Bagus Putu Raka Ariana - Kepala Stasiun Karantina Pertanian Kelas I Sumbawa', '2019-06-12 00:30:47.000000', 'web-1560274247.jpg', 'Ya'),
(103, 'EH Ismail', 'Hasil Pertanian Sumbawa Dapat Lebih Banyak Diekspor', 'REPUBLIKA.CO.ID, SUMBAWA â€”Kabupaten Sumbawa memiliki empat komoditas pertanian unggulan. Yakni  sarang burung walet, akar jarak merah, daun sisal dan bungkus. Hal ini berdasarkan data lalulintas dari sistem otomasi perkarantinaan, IQFAST di Karantina Pertanian Sumbawa yang sampaikan Kepala Badan Karantina Pertanian (Barantan), Kementerian Pertanian, Ali Jamil.\r\n\r\n&quot;Meski masih banyak yang belum dikirim langsung lewat Sumbawa, semoga upaya silaturahmi kita ini membuahkan hasil,&quot; ungkap Jamil, Kepala saat lepas ekspor komoditas pertanian di kantor bupati Sumbawa, NTB, Kamis (30/5).\r\n\r\nPada 2018 ekspor jagung dari Sumbawa mencapai 109.800 ton atau senilai Rp. 384,3 miliar. Sedangkan sarang burung walet dominan dikirim ke Tiongkok namun via Surabaya sebanyak 8,14 ton senilai Rp. 122,1 miliar ; akar jarak merah yang banyak dimanfaatkan untuk kesehatan asal Kabupaten Dompu dan Bima, dengan nilai ekspor Rp. 330 juta tujuan Prancis, Jerman dan Australia via Denpasar.\r\n\r\nAda lagi yang potensi yang khas yakni Daun sisal ( Agave sisalana), komoditas yang memiliki serat yang kuat ini  banyak berasal dari Kabupaten Sumbawa dan Sumbawa Barat. Di negara tujuan ekspornya banyak digunakan sebagai tali tambang kapal, walpaper, bahan tekstil, karpet dan kerajinan. Pada 2018 total ekspor sebanyak 74 ton atau senilai Rp. 1,274 miliar. Juga yang khas adalah daun bungkus, digunakan  untuk herbal diekspor ke Jepang dan Timor Leste via kantor pos. Pada 2018, pengiriman hanya 2 kg namun senilai Rp. 80 juta.\r\n\r\nJamil juga memaparkan  upaya  strategis yang dilakukan untuk peningkatan dan percepatan ekspor komoditas pertanian yakni, pertama dengan  meningkatkan jumlah eksportir terutama di kalangan Generasi Millenial Bangsa; kedua dengan meningkatkan diiversifikasi atau keberagaman komoditas/produk dengan minimal produk setengah jadi, contohnya seperti daun sisal tadi, baiknya diekspor sudah dalam bentuk tali tambang kapal dan sebagainya.\r\n\r\nSelanjutnya, langkah strategis ketiga yakni dengan peningkatan frekwensi pengiriman komoditas pertanian; keempat dengan meningkatkan volume komoditas dan terakhir adalah membuka akses pasar kenegara- negara tujuan ekspor lainnya. &quot;Sesuai dengan instruksi Menteri Pertanian, Barantan terus lakukan upaya membuka akses pasar dengan lakukan harmonisasi aturan perkarantinaan di negara-negara tujuan ekspor baru,&quot; tambahnya.\r\n\r\nKepala Karantina Pertanian Sumbawa, Ida Bagus Putu Raka Ariana, menambahkan, bahwa selain lima komoditas unggulan tersebut, masih ada potensi lain yang dapat dikembangkan yakni sapi potong, kerbau potong, kuda potong, madu, susu kuda liar, kopi tepal, bawang merah dan porang.\r\n\r\nPada acara yang dihadiri oleh Bupati Sumbawa, H.M Husni Djibril, B.Sc. Kementan melepas ekspor sarang walet sebanyak 23 kg tujuan Hongkong via Surabaya senilai Rp. 345 juta. Juga akar jarak merah sebanyak 2 kg tujuan Paris via Denpasar senilai Rp. 4 juta. Total nilai ekspor dari Sumbawa hari ini sebesar Rp. 349 juta.\r\n\r\nHusni, dalam sambutannya mengapresiasi upaya Kementan dalam mendorong produk lokal tembus pasar manca negara tersebut. Pihaknya melalui SKPD siap mendorong para calon eksportir dalam meningkatkan geliat pertumbuhan ekonomi lewat komoditas pertanian unggulan diwilayahnya.Ekspor merupakan salah satu cara agar petani dan peternak mendapatkan harga yang pantas, sehingga kesejahtaraan dapat terdongkrak.', '2019-06-12 00:34:13.000000', 'web-1560274453.jpg', 'Ya'),
(104, 'zensumbawa', 'Bupati Apresiasi Kementan Dorong Produk Sumbawa Tembus Pasar Mancanegara', 'SUMBAWA BESAR, SR (29/5/2019)\r\n\r\nBupati Sumbawa, HM Husni Djibril B.Sc mengapresiasi upaya Kementan dalam mendorong produk lokal tembus pasar manca negara tersebut. Pihaknya melalui SKPD siap mendorong para calon eksportir dalam meningkatkan geliat pertumbuhan ekonomi melalui komoditas pertanian unggulan di wilayahnya. Ditegaskannya, ekspor merupakan salah satu cara agar petani dan peternak mendapatkan harga yang pantas, sehingga kesejahteraan dapat terdongkrak.\r\n\r\nSeiring dengan berjalannya era globalisasi dan perdagangan bebas dewasa ini, ungkap Bupati, peran Karantina Pertanian menjadi semakin penting dan strategis dalam menjamin kualitas keamanan dan kesehatan hewan, produk hewan, tanaman pangan maupun produk hasil tanaman pangan yang dilalulintaskan, baik untuk tujuan ekspor, impor maupun antar area. Untuk itu, Pemkab sangat mendukung ikhtiar Stasiun Karantina Pertanian Kelas I Sumbawa Besar dalam menyusun dan melaksanakan kebijakan strategis untuk melakukan peningkatan pelayanan hingga dapat melindungi Pulau Sumbawa dari ancaman hama dan penyakit hewan menular serta organisme penyakit tumbuhan karantina terhadap kekayaan hayati, hewani dan nabati.\r\n\r\nTerkait hal tersebut, Pemkab Sumbawa akan terus berkomitmen mendukung program agro gemilang ini antara lain dengan melihat potensi daerah yang mampu diekspor. Semua potensi akan terus dicoba untuk membuka market internasional. Tidak hanya ekspor madu, dendeng dan jagung, tetapi juga komoditas-komoditas lainnya seperti kedelai yang beberapa tahun lalu sempat diekspor ke Hongkong dan sejumlah negara lainnya. Di samping itu, kualitas produk juga perlu terus ditingkatkan untuk memenuhi standar ekspor.\r\n\r\nBupati berharap, melalui Gerakan Agro Gemilang yang digalakkan oleh Kementerian Pertanian ini, para pelaku usaha bidang pertanian termasuk para petani-petani milenial dapat lebih siap memasuki pasar ekspor. Di samping itu juga menjadi upaya untuk meningkatkan peran serta seluruh stakeholder agar dapat berperan aktif dalam pemenuhan persyaratan negara mitra dagang. Bupati optimis bahwa potensi generasi muda dan sumber daya yang ada di Kabupaten Sumbawa ini merupakan suatu berkah yang harus disyukuri dan dimaksimalkan keberadaannya di kancah pasar global.\r\n\r\nHadir dalam kegiatan itu Wakil Bupati Sumbawa, Kepala Badan Karantina Pertanian Kementerian Pertanian Republik Indonesia, anggota Forkopimda Sumbawa, Staf Ahli Bupati Bidang Politik Hukum dan Pemerintahan, pimpinan OPD, Pimpinan BUMN dan BUMD, para eksportir dan pengguna jasa karantina. Dalam kegiatan tersebut diserahkan sertifikat karantina sarang burung wallet dan akar jarak merah dan penyerahan sertifikat komoditi antar area (jagung dan bawang merah) oleh Bupati Sumbawa kepada eksportir dan pengguna jasa karantina. Selanjutnya peninjauan display komoditi ekspor Pulau Sumbawa. Adapun ekspor hari ini berupa sarang burung wallet ke Hongkong via Surabaya, volume 23 kg dengan nilai Rp. 345 juta, akar jarak merah ke Perancis via Denpasar, volume 2 kg, dengan nilai Rp. 4 juta, dengan total nilai ekspor Rp. 349 juta. Kemudian pengiriman antar area berupa jagung biji volume 8.000 ton dengan nilai Rp 28 M tujuan Belawan Medan, dan bawang merah volume 230 ton dengan nilai Rp 3,45 M tujuan Makasar. (JEN/SR)', '2019-06-12 01:05:29.000000', 'web-1560276330.jpg', 'Ya'),
(105, 'Redaksi bidik kamera', 'Bupati Sumbawa Lepas Ekspor Komoditi Pulau Sumbawa', 'Bupati Sumbawa Lepas Ekspor Komoditi Pulau Sumbawa\r\n\r\nSumbawa Besar (bidikankamera.com)\r\n\r\nPengguntingan pita oleh Bupati Sumbawa H.M. Husni Djibril, B.Sc menandai dilepasnya ekspor komoditi Pulau Sumbawa, dalam acara akselerasi Ekspor komoditas pertanian Pulau Sumbawa, sekaligus buka puasa bersama Stasiun Karantina Pertanian (SKP) Kelas I Sumbawa Besar, yang berlangsu g pada Rabu sore (29/05/2019) di Halaman Kantor Bupati Sumbawa.\r\nkegiatan tersebut, turut dihadiri Wakil Bupati Sumbawa, Kepala Badan Karantina Pertanian Kementerian Pertanian Republik Indonesia, anggota Forkopimda Kab. Sumbawa, Staf Ahli Bupati Bidang Politik Hukum dan Pemerintahan, pimpinan OPD, Pimpinan BUMN dan BUMD, para eksportir dan pengguna jasa karantina.\r\n\r\nBupati Sumbawa H.M. Husni Djibril B.Sc dalam sambutannya menyampaikan penghargaan dan terima kasih yang sebesar-besarnya terutama kepada jajaran badan karantina pertanian kementerian pertanian RI dan stasiun karantina pertanian kelas I Sumbawa Besar atas terselenggaranya kegiatan yang sangat menarik sekaligus bermanfaat ini. seiring dengan berjalannya era globalisasi dan perdagangan bebas dewasa ini, peran karantina pertanian menjadi semakin penting dan strategis dalam menjamin kualitas keamanan dan kesehatan hewan, produk hewan, tanaman pangan maupun produk hasil tanaman pangan yang dilalulintaskan, baik untuk tujuan ekspor, impor maupun antar area. Untuk itu, Pemkab sangat mendukung ikhtiar stasiun karantina pertanian kelas I Sumbawa Besar dalam menyusun dan melaksanakan kebijakan strategis untuk melakukan peningkatan pelayanan hingga dapat melindungi Pulau Sumbawa dari ancaman hama dan penyakit hewan menular serta organisme penyakit tumbuhan karantina terhadap kekayaan hayati, hewani dan nabati yang ada di Pulau Sumbawa, papar Bupati.\r\n\r\nDikatakan Husni Djibril, Pemkab Sumbawa akan terus berkomitmen mendukung program Agro Gemilang ini dengan melihat potensi daerah yang mampu diekspor. Semua potensi akan terus dicoba untuk membuka market internasional. Tidak hanya ekspor madu, dendeng dan jagung, tetapi juga komoditas-komoditas lainnya seperti kedelai yang beberapa tahun lalu, sempat diekspor ke hongkong dan sejumlah negara lainnya. Disamping itu, kualitas produk juga perlu terus ditingkatkan untuk memenuhi standar ekspor. ia berharap, melalui gerakan agro gemilang yang digalakkan oleh Kementerian Pertanian ini, para pelaku usaha bidang pertanian termasuk para petani-petani milenial dapat lebih siap memasuki pasar ekspor. Disamping itu juga menjadi upaya untuk meningkatkan peran serta seluruh stakeholder agar dapat berperan aktif dalam pemenuhan persyaratan negara mitra dagang. â€œkqmi optimis bahwa potensi generasi muda dan sumber daya yang ada di Kabupaten Sumbawa ini merupakan suatu berkah yang harus disyukuri dan dimaksimalkan keberadaannya di kancah pasar globalâ€, tukas Husni Djibril.\r\n\r\nKegiatan tersebut juga diserahkan sertifikat karantina sarang burung wallet dan akar jarak merah dan penyerahan sertifikat komoditi antar area (jagung dan bawang merah) oleh Bupati Sumbawa kepada eksportir dan pengguna jasa karantina, dan dilanjutkan dengan peninjauan display komoditi ekspor Pulau Sumbawa. (jim)', '2019-06-12 01:10:13.000000', 'web-1560276614.jpg', 'Ya'),
(106, 'Tri Suparyanto, A.Md', 'Jelang Iduladha, Sapi Sumbawa Laris di Jakarta', 'Sumbawa -- Lebaran hari Raya Iduldha masih sekitar dua bulan lagi. Namun lalu lintas ternak baik sapi, kerbau dan kuda sebagai hewan kurban dari Pulau Sumbawa telah menampakan geliatnya.\r\n\r\nJumat (14/06) sebanyak 550 ekor sapi potong Bima akan diberangkatkan ke Jakarta menggunakan KM. Camara Nusantara 5. Menurut dokter hewan Karantina Pertanian Sumbawa wilayah kerja Pelabuhan Laut Bima, drh. Ardiyanto Chandra Wijaya, pemeriksaan dokumem, fisik, kesehatan dan alat angkut dilakukan sesuai Standar Operasional Prosedur (SOP) pada setiap komoditas. Hal ini dilakukan untuk mencegah tersebarnya Hama dan Penyakit Hewan Karantina (HPHK).\r\n\r\nSedangkan pemeriksaan laboratorium melalui pengujian RBT (Rose Begal Test) dan pengujian ulas darah sederhana,jelas Andra.', '2019-06-17 09:31:38.000000', 'web-1560738698.jpg', 'Ya'),
(107, 'Anto', 'Hebat, Sarang Walet Sumbawa Tembus Pasar Hongkong', 'Sumbawa,Bisnisnusatenggara.com . Program ayo galakkan ekspor, generasi millenial bangsa (Agro Gemilang) yang digulirkan Badan Karantina Pertanian Kementerian Pertanian Republik Indonesia tahun 2019, membuat 52 unit pelaksana teknis dibawahnya berlomba menggalakkan. Tak terkecuali Karantina Sumbawa, dengan melakukan pendataan komoditas unggulan dari lalulintas pertahun, koordinasi dengan Dinas terkait sampai menyambangi petani dan pelaku bisnis.\r\n\r\nPulau Sumbawa memiliki komoditas pertanian unggulan untuk ekspor ungkap Kepala Stasiun Karantina Pertanian Kelas I Sumbawa drh Ida Bagus Putu Raka Ariana kepada awak media Rabu.\r\n\r\nAdapun produk unggulan tersebut, diantaranya sarang burung walet, madu hutan, susu kuda, kopi, bawang merah, jagung dan kayu manis, dimana komoditas tersebut diekspor ke sejumlah negara seperti Filipina, Arab Saudi, Hongkong dan Singapura.\r\n\r\nUntuk sarang burung walet (SBW) saja, terangnya, berdasarkan data Karantina Sumbawa selama tiga tahun terakhir tercatat mengalami peningkatan signifikan, yakni tahun 2016 volumenya mencapai 1.329 kilogram, tahun 2017 mencapai 4.369 kilogram, dan pada tahun 2018 naik dua kali lipat dengan lalu lintasnya mencapai 8.140 kilogram, dan semuanya dikirim keluar negeri melalui pulau Jawa, Sumatra dan Kalimantan untuk ekspor.\r\n\r\nDiakui Bli Raka, sapaan akrab pejabat karantina ini, petugas Karantina Sumbawa melakukan pemeriksaan secara intensif terhadap sarang burung walet yang dikirim keluar daerah.\r\n\r\nBelum lama ini misalnya, ada paket SBW yang akan dikirim tujuan Jakarta, tidak tanggung-tanggung mencapai 120 kilogram yang dikemas dalam delapan karton, dengan rata-rata harga perkilonya Rp 10 juta, maka perkiraan nilai barang tersebut mencapai Rp 1,2 miliar, tukasnya.\r\n\r\nSebelum dilakukan sertifikasi, imbuh Sudaryono petugas Karantina, dilakukan pemeriksaan fisik untuk mengetahui jumlah, jenis dan kelayakan kemasan serta cemaran seperti kayu, logam dan lainya.\r\n\r\nKegiatan ekspor SBW tersebut tidak bisa dilakukan dari Sumbawa, mengingat dua bandara udara yakni Bandara Sultan Muhammad Kaharuddin Sumbawa Besar dan bandara Sultan Muhammad Solahuddin Bima hanya bisa melayani rute penerbangan domestik.\r\n\r\nSelain itu di daerah ini belum ada perusahaan pemrosesan sarang burung walet yang sanggup mengolah sarang untuk pangsa ekspor pungkasnya.(bn02)\r\n', '2019-06-17 09:37:25.000000', 'web-1560739045.png', 'Tidak'),
(108, 'Tri Suparyanto, A.Md', 'Fasilitasi Ekspor, Karantina Pertanian Sumbawa Periksa Permohonan Tempat lain', 'Sumbawa---Setelah berhasil mendorong lebih banyak komoditas unggulan asal Sumbawa agar bisa memasuki pasar ekspor, melalui kegiatan Agro Gemilang. Kini, Karantina Pertanian Sumbawa memeriksa dua permohonan tindakan karantina diluar tempat pemasukan dan pengeluaran.\r\n\r\nDiharapkan dengan fasilitas ini dapat memberikan pelayanan prima proses perkarantinaan yang efektif dan efisien. Sehingga pelaku usaha&amp;nbsp;tinggal menunggu penerbitan Health Certificate (HC)/ Phytosanitary Certificate (PC) yang dipersyaratkan negara tujuan.\r\n\r\n&quot;Berbeda dengan tahun lalu ekspor jagung dari Pulau Sumbawa yang mencapai 100 ribu ton. Tahun 2019 ini belum ada ekspor jagung dari Pulau Sumbawa, namun akan tetap kita fasilitasi bagi pengusaha yang akan melakukan ekspor jagung&quot; ungkap Salam, Kepala Subseksi Pelayanan dan Operasional Karantina Pertanian Sumbawa.\r\n\r\n&quot;Persyaratan sesuai dalam Permentan 38 tahun 2014 telah mereka penuhi, Dan hari ini (18/06) petugas kami sedang melakukan pememeriksaan aspek administrasi dan aspek kelayakan teknis salah satu perusahaan dagang komoditas pertanian terbesar di Sumbawa&quot; jelas Salam.\r\n\r\n&quot;Aspek Administrasi meliputi status kepemilikan, perijinan perpajakan, manajemen, fasilitas, sarana dan kelengkapan administrative lainya. Sedangkan aspek kelayakan teknis meliputi tempat dengan kondisi lingkunganya, daya tampung bangunan, jalan, fasilitas pembersihan dan pemusnahan, laboratorium pemeriksaan, air bersih, listrik, petugas keamanan, alat komunikasi serta fasilitas penunjang kegiatan karantina tumbuhan lainya&quot; imbuh Salam.\r\n', '2019-06-22 12:33:54.000000', 'web-1561181635.jpg', 'Ya'),
(109, 'Tri Suparyanto, A.Md', 'Ceria, Menerima Paket Sekolah Dari Karantina Pertanian Sumbawa', 'Sumbawa-- &quot;Selamat pagi adek-adek... Siapa yang mau tas sekolah baru, ayo angkat tangan?&quot; Sapa Hary pegawai Karantina Pertanian Sumbawa pembuka keakraban.\r\n\r\nSelamat pagi, Saya, saya, sayaaaaa... Bagai paduan suara murid-murid SD Badas bersorak ceria menjawab salam dan berlomba mengangkat setinggi-tingginya jari-jari mereka.\r\n\r\n&quot;Sekarang baris yang rapi di lapangan, Bapak akan bagikan tas sekolah beserta alat tulisnya!&quot;lanjut Hary.\r\n\r\nItulah gambaran keceriaan pembagian 142 paket peralatan sekolah dalam rangkaian 142 Bulan Bakti Karantina di Karantina Pertanian Sumbawa (19/06). Selain SD Badas, paket perlengkapan sekolah tersebut juga dibagikan di PAUD Harapan Kita Labuhan Badas dan SD Sampar Kuang Rea.\r\n\r\nSementara drh. Ida Bagus Raka Ariana Kepala Karantina Pertanian Sumbawa dalam sambutanya berharap Momentun Bulan Bakti menjadi momentum memberikan semangat pegawai untuk terus mengabdi dan mendorong masyarakat berpartisipasi melindungi kekayaan alam hayati.\r\n', '2019-06-22 12:36:49.000000', 'web-1561181809.jpg', 'Ya'),
(110, 'Tri Suparyanto, A.Md', 'Kejutan Kue, Merayakan 142 Bulan Bakti Karantina Pertanian', 'Sumbawa -- Sebuah kue bergambarkan logo Badan Karantina Pertanian dilengkapi dengan lilin bertuliskan angka 142 telah menanti di meja pelayanan Karantina Pertanian Sumbawa Wilker Pelabuhan Laut Badas pagi itu (27/06). Ruangan kecil itu berhiaskan kertas-kertas warna-warni dan beberapa buah balon, namun tidak mengurangi makna sebagai pelayanan publik.\r\n\r\nSementara PJ Wilker Badas. Drh Priono mengatakan &quot;Inilah ungkapan kegembiraan teman-teman dalam merayakan 142 Bulan Bakti Karantina Pertanian, dengan mengadakan acara potong kue dan menghias ruang pelayanan.&quot; jelas drh. Priono\r\n\r\n&quot;Selain itu kita juga mengundang Bapak Struktural lingkup UPT Karantina Pertanian Sumbawa tambah Priono&quot;.\r\n\r\nKepala Karantina Sumbawa drh. Ida Bagus Putu Raka Ariana, merasa terharu atas kejutan perayaan tersebut sebelum memotong kue beliau menyampaikan  &quot;Terimakasih buat rekan-rekan semua, atas peran dan kerja samanya selama ini. Dengan perayaan sederhana ini sebagai ungkapan rasa besyukur kita sebagai keluarga besar Karantina&quot;.\r\n', '2019-07-02 14:21:24.000000', 'web-1562052085.jpg', 'Ya'),
(111, 'Tri Suparyanto, A.Md', 'Karantina Sumbawa Turut Serta Dalam Upacara Tabur Bunga Hari Bhayangkara', 'Sumbawa -- Polres Sumbawa memperingati Hari Ulang Tahun Bhayangkara ke-73 dengan upacara tabur bunga (01/07). Bertempat di dermaga Pelabuhan Laut Badas, upacara dipimpin langsung oleh Kepala Kepolisian Resort Sumbawa Tunggul Sinatrio, SIK, MH.\r\n\r\nKarantina Sumbawa berpartisipasi dalam kegiatan tersebut bersama instansi lain seperti TNI, KKP, Pelindo, KSOP, Bea Cuka, Imigrasi dan Pemda. Diharapkan dari kegiatan tersebut mempererat silaturahmi dan sinergisitas petugas di pintu pemasukan khususnya di Pulau Sumbawa.\r\n', '2019-07-02 14:27:15.000000', 'web-1562052435.jpg', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_aset`
--

CREATE TABLE `daftar_aset` (
  `id` int(30) NOT NULL,
  `tahun` int(30) NOT NULL,
  `link` varchar(400) NOT NULL,
  `waktu_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_aset`
--

INSERT INTO `daftar_aset` (`id`, `tahun`, `link`, `waktu_input`) VALUES
(2, 2013, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/DAFTAR%20ASET/BMN/Daftar%20Aset-BMN%202013.pdf', '2018-05-24'),
(3, 2014, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/DAFTAR%20ASET/BMN/Daftar%20Aset-BMN%202014.pdf', '2018-05-24'),
(4, 2015, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/DAFTAR%20ASET/BMN/Daftar%20Aset-BMN%202015.pdf', '2018-05-24'),
(5, 2016, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/DAFTAR%20ASET/BMN/Daftar%20Aset-BMN%202016.pdf', '2018-05-24'),
(6, 2017, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/DAFTAR%20ASET/BMN/Daftar%20Aset-BMN%202017.pdf', '2018-05-24'),
(7, 2018, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/DAFTAR%20ASET/BMN/Daftar%20Aset-BMN%202018.pdf', '2019-02-27');

-- --------------------------------------------------------

--
-- Table structure for table `data_operasional`
--

CREATE TABLE `data_operasional` (
  `id` int(20) NOT NULL,
  `ekspor` int(20) NOT NULL,
  `impor` int(20) NOT NULL,
  `domas` int(20) NOT NULL,
  `dokel` int(20) NOT NULL,
  `pnbp` varchar(100) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_operasional`
--

INSERT INTO `data_operasional` (`id`, `ekspor`, `impor`, `domas`, `dokel`, `pnbp`, `waktu`) VALUES
(3, 3, 0, 651, 2780, '170295038', '2018-03-31'),
(4, 7, 0, 882, 3777, '224693479', '2018-05-08'),
(5, 19, 32, 5644, 13734, '865494834', '2018-12-31'),
(6, 0, 56, 1572, 5387, '324107668', '2019-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `dipa`
--

CREATE TABLE `dipa` (
  `id` int(30) NOT NULL,
  `tahun` int(30) NOT NULL,
  `revisi` varchar(50) NOT NULL,
  `link` varchar(400) NOT NULL,
  `waktu_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dipa`
--

INSERT INTO `dipa` (`id`, `tahun`, `revisi`, `link`, `waktu_input`) VALUES
(1, 2017, 'awal', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/DIPA/DIPA_AWAL_2017_567741.pdf', '2018-05-21'),
(2, 2017, '1', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/DIPA/DIPA_REV_1_2017_567741.pdf', '2018-05-21'),
(3, 2017, '2', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/DIPA/DIPA_REV_2_2017_567741.pdf', '2018-05-21'),
(4, 2018, 'awal', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/DIPA/DIPA_2018_Awal.pdf', '2018-05-21'),
(5, 2018, '1', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/DIPA/DIPA_2018_REV_1.pdf', '2018-05-21'),
(6, 2018, '2', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/DIPA/DIPA_2018_REV_2.pdf', '2019-02-26'),
(7, 2018, '3', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/DIPA/DIPA_2018_REV_3.pdf', '2019-02-26'),
(8, 2018, '4', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/DIPA/DIPA_2018_REV_4.pdf', '2019-02-26'),
(9, 2018, '5', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/DIPA/DIPA_2018_REV_5.pdf', '2019-02-26'),
(10, 2018, '6', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/DIPA/DIPA_2018_REV_6.pdf', '2019-02-26'),
(11, 2019, 'awal', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/DIPA/DIPA%20AWAL%202019.pdf', '2019-04-23'),
(12, 2019, '1', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/DIPA/DIPA%20REVISI%201%202019.pdf', '2019-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(22, 'Buka Puasa Bersama Keluarga Karantina Sumbawa', '#0071c5', '2018-05-27 00:00:00', '2018-05-28 00:00:00'),
(23, 'Pelepasan Purna Bakti Bapak Nyak Ben, SH', '#FF8C00', '2018-05-27 00:00:00', '2018-05-28 00:00:00'),
(24, 'Purna Bakti Bapak Nyak Ben, SH', '#008000', '2018-06-01 00:00:00', '2018-06-02 00:00:00'),
(29, 'Surveilan Laboratorium SKP Kelas I Sumbawa Besar', '#40E0D0', '2018-01-27 00:00:00', '2018-01-29 00:00:00'),
(30, 'In House Training Identifikasi Cendawan', '#40E0D0', '2018-05-02 00:00:00', '2018-05-05 00:00:00'),
(31, 'Purna Bakti Muhammad Ridwan', '#FF0000', '2018-08-01 00:00:00', '2018-08-01 00:00:00'),
(32, 'Bulan Bakti Badan Karantina Pertanian', '#FF8C00', '2018-06-08 00:00:00', '2018-07-08 00:00:00'),
(33, 'Upacara Tabur Bunga  | Hari Bhayangkara Ke - 72', '#008000', '2018-06-30 00:00:00', '2018-06-30 00:00:00'),
(34, 'Rapat Kerja SKP Kelas I Sumbawa Besar', '#0071c5', '2019-01-30 00:00:00', '2019-02-02 00:00:00'),
(36, 'Sosialisasi Rabies Di Kecamatan Poto Tano', '#FF0000', '2019-02-18 00:00:00', '2019-02-18 00:00:00'),
(38, 'Purna Bakti Hj. Nuraini', '#008000', '2019-02-01 00:00:00', '2019-02-01 00:00:00'),
(39, 'In House Tranining Penambahan Ruang Lingkup Laboratorium', '#008000', '2019-04-30 00:00:00', '2019-05-03 00:00:00'),
(40, 'Rapat Kerja Tahunan 2019', '#FF0000', '2019-01-30 00:00:00', '2019-02-01 00:00:00'),
(42, 'AgroGemilang Akselerasi Ekspor Komoditas Pertanian Pulau Sumbawa', '#0071c5', '2019-05-29 00:00:00', '2019-05-30 00:00:00'),
(43, 'Halal Bihalal Pegawai Karantina Sumbawa Besar', '#FF8C00', '2019-06-10 00:00:00', '2019-06-11 00:00:00'),
(44, 'Bulan Bakti Badan Karantina Pertanian', '#008000', '2019-06-08 00:00:00', '2019-07-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(20) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `pertanyaan`, `jawaban`) VALUES
(1, 'Apa Itu Karantina?', 'Karantina adalah tempat pengasingan dan/atau tindakan sebagai upaya\r\npencegahan masuk dan tersebarnya hama dan penyakit atau organisme\r\npengganggu dari luar negeri dan dari suatu area ke area lain di dalam negeri,\r\natau keluarnya dari dalam wilayah negara Republik Indonesia.'),
(2, 'Kenapa Harus Dikarantina?', 'Untuk Mencegah Masuk, Tersebar, atau Keluarnya Hama Penyakit Hewan Karantina (HPHK) dan Organisme Pengganggu Tumbuhan Karantina (OPTK) Ke Dalam Wilayah RI, atau Keluar Wilayah RI atau antar area di dalam Wilayah RI, dan Untuk Memastikan Komoditi Yang akan anda lalulintaskan sehat, aman, dan layak konsumsi. '),
(3, 'Apa Saja Komoditi Yang Wajib Lapor Karantina?', 'Hewan (Hewan Besar, Hewan Kecil, Unggas, Primata dan sebangsanya), Bahan Asal Hewan/ BAH (Telur, Susu, Madu), Hasil Bahan Asal Hewan/ HBAH (Keju, Bakso, Sosis) Dan Tumbuhan (Benih/Bibit, Pohon, hasil produk pertanian lainnya, Tanaman Hias), Serta Bagian-bagian Tumbuhan / Produk-produknya (Buah, Batang, Bunga).'),
(4, 'Bagaimana Prosedurnya?', '1. Dilengkapi sertifikat kesehatan dari negara asal dan negara transit bagi hewan,\r\nbahan asal hewan, hasil bahan asal hewan, ikan, tumbuhan dan bagian-bagian\r\ntumbuhan, kecuali media pembawa yang tergolong benda lain;\r\n2. Melalui tempat-tempat pemasukan yang telah ditetapkan;\r\n3. Dilaporkan dan diserahkan kepada petugas karantina di tempat-tempat\r\npemasukan untuk keperluan tindakan karantina.'),
(5, 'Dimana Lapor Karantina?', 'Kantor Layanan Karantina Pertanian Tersebar Di Berbagai Wilayah Di Indonesia, Temukan Kantor Layanan Kami Di Berbagai Pelabuhan Laut, Pelabuhan Penyeberangan (Ferry), Pelabuhan Sungai, Bandar Udara, Kantor Pos, Dan Pos Lintas Batas Antar Negara.'),
(6, 'Berapa Estimasi Tarif Jasa Karantina?', 'Berdasarkan Peraturan Pemerintah Nomor 35 Tahun 2016 Tentang Jenis dan Tarif Atas Jenis Penerimaan Negara Bukan Pajak Yang Berlaku Di Kementerian Pertanian, Estimasi Tarif Jasa Karantina Relatif Terhadap Jenis Kebutuhan Anda; 1. Tujuan lalu lintas komoditi (Ekspor, Impor, atau Antar Area Didalam Wilayah RI); 2. Bentuk dan Jenis Komoditi (Hewan besar/hewan kecil, Berbentuk Benih, tanaman hidup/tanaman mati-produk tumbuhan);\r\n3. Jumlah Komoditi/Berat/Tonase serta biaya - biaya atas jasa Tindakan Karantina yang dilakukan (Pemeriksaan baik secara visual atau laboratoris, Perlakuan dan Pengasingan atau Pengamatan;');

-- --------------------------------------------------------

--
-- Table structure for table `headline`
--

CREATE TABLE `headline` (
  `id` int(20) NOT NULL,
  `judul1` varchar(400) NOT NULL,
  `judul2` varchar(400) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `tampil` enum('Ya','Tidak','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headline`
--

INSERT INTO `headline` (`id`, `judul1`, `judul2`, `gambar`, `tanggal`, `tampil`) VALUES
(5, 'Karantina Sumbawa', 'Tangguh Terpercaya', 'headline-1524550686.jpg', '2018-04-24', 'Ya'),
(7, 'Akselerasi Ekspor Untuk Kesejahteraan Petani', 'Bersama anda melindungi Negeri', 'headline-1524550955.jpg', '2018-04-24', 'Ya'),
(14, '', '', 'headline-1526404258.png', '2018-05-16', 'Tidak'),
(31, '', '', 'headline-1528493603.png', '2018-06-01', 'Ya'),
(32, '', '', 'headline-1528493618.jpg', '2018-06-07', 'Tidak'),
(35, '', '', 'headline-1530419888.jpg', '2018-06-09', 'Tidak'),
(36, '', '', 'headline-1533126767.jpg', '2018-08-01', 'Tidak'),
(40, '', '', 'headline-1534517230.jpg', '2018-08-17', 'Tidak'),
(41, '', '', 'headline-1538008322.png', '2018-09-27', 'Tidak'),
(44, '', '', 'headline-1541600795.jpg', '2018-11-07', 'Tidak'),
(73, '', '', 'headline-1550067948.png', '2019-02-13', 'Ya'),
(75, '', '', 'headline-1550068020.png', '2019-02-13', 'Ya'),
(81, '', '', 'headline-1551034328.png', '2019-02-25', 'Tidak'),
(86, '', '', 'headline-1552482434.png', '2019-03-13', 'Ya'),
(89, '', '', 'headline-1557157503.png', '2019-05-06', 'Tidak'),
(93, '', '', 'headline-1560391305.jpg', '2019-06-13', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `ikm`
--

CREATE TABLE `ikm` (
  `id` int(20) NOT NULL,
  `tahun` int(20) NOT NULL,
  `periode` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `rata_rata` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ikm`
--

INSERT INTO `ikm` (`id`, `tahun`, `periode`, `total`, `rata_rata`) VALUES
(1, 2017, 1, 0, '85,323'),
(2, 2017, 2, 0, '86,784'),
(3, 2016, 1, 0, '88,654'),
(4, 2016, 2, 0, '87,974'),
(5, 2018, 1, 0, '84,203'),
(6, 2018, 2, 0, '87.933'),
(8, 2019, 1, 0, '87.95');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id` int(20) NOT NULL,
  `tahun` int(20) NOT NULL,
  `realisasi_anggaran` varchar(20) NOT NULL,
  `waktu_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id`, `tahun`, `realisasi_anggaran`, `waktu_input`) VALUES
(1, 2016, '98.70', '2016-12-31'),
(2, 2017, '99.46', '2017-12-31'),
(3, 2018, '99.68', '2019-01-28'),
(4, 2019, '48.86', '2019-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `kh_operasional`
--

CREATE TABLE `kh_operasional` (
  `id` int(20) NOT NULL,
  `tahun` int(20) NOT NULL,
  `domas` int(20) NOT NULL,
  `dokel` int(20) NOT NULL,
  `ekspor` int(20) NOT NULL,
  `impor` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `waktu_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kh_operasional`
--

INSERT INTO `kh_operasional` (`id`, `tahun`, `domas`, `dokel`, `ekspor`, `impor`, `total`, `waktu_input`) VALUES
(1, 2016, 2812, 12247, 0, 0, 0, '2017-12-31'),
(2, 2017, 2600, 10332, 0, 0, 0, '2017-12-31'),
(3, 2018, 5384, 10803, 2, 0, 0, '2018-12-31'),
(4, 2019, 1503, 4254, 0, 0, 0, '2019-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `kt_operasional`
--

CREATE TABLE `kt_operasional` (
  `id` int(20) NOT NULL,
  `tahun` int(20) NOT NULL,
  `domas` int(20) NOT NULL,
  `dokel` int(20) NOT NULL,
  `ekspor` int(20) NOT NULL,
  `impor` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `waktu_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kt_operasional`
--

INSERT INTO `kt_operasional` (`id`, `tahun`, `domas`, `dokel`, `ekspor`, `impor`, `total`, `waktu_input`) VALUES
(1, 2016, 986, 2429, 1, 77, 0, '2018-05-12'),
(2, 2017, 685, 2892, 2, 13, 0, '2018-05-12'),
(3, 2018, 260, 2931, 17, 32, 0, '2018-12-31'),
(4, 2019, 69, 1133, 0, 56, 0, '2019-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(20) NOT NULL,
  `jenis_laporan` varchar(100) NOT NULL,
  `nama_laporan` varchar(300) NOT NULL,
  `tahun` int(11) NOT NULL,
  `link` varchar(300) NOT NULL,
  `waktu_input` date NOT NULL,
  `jenis` varchar(20) NOT NULL DEFAULT 'laporan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `jenis_laporan`, `nama_laporan`, `tahun`, `link`, `waktu_input`, `jenis`) VALUES
(1, 'laporan_tahunan', 'Laporan Tahunan SKP Kelas I Sumbawa Besar 2013', 2013, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/LAPORAN-LAPORAN/LAPORAN%20TAHUNAN/Laporan%20tahunan%202013%20ok.pdf', '2019-04-23', 'laporan'),
(2, 'laporan_tahunan', 'Laporan Tahunan SKP Kelas I Sumbawa Besar 2014', 2014, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/LAPORAN-LAPORAN/LAPORAN%20TAHUNAN/Laporan%20tahunan%202014%20ok.pdf', '2019-04-23', 'laporan'),
(3, 'laporan_tahunan', 'Laporan Tahunan SKP Kelas I Sumbawa Besar 2015', 2015, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/LAPORAN-LAPORAN/LAPORAN%20TAHUNAN/Laporan%20Tahunan%202015%20ok.pdf', '2019-04-23', 'laporan'),
(4, 'laporan_tahunan', 'Laporan Tahunan SKP Kelas I Sumbawa Besar 2016', 2016, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/LAPORAN-LAPORAN/LAPORAN%20TAHUNAN/Laporaan%20Tahunan%202016%20ok.pdf', '2019-04-23', 'laporan'),
(5, 'laporan_tahunan', 'Laporan Tahunan SKP Kelas I Sumbawa Besar 2017', 2017, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/LAPORAN-LAPORAN/LAPORAN%20TAHUNAN/Laporan%20Tahunan%202017%20ok.pdf', '2019-04-23', 'laporan'),
(6, 'laporan_keuangan', 'Laporan Keuangan Semester II Tahun Anggaran 2016 ', 2016, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/LAPORAN-LAPORAN/LAPORAN%20KEUANGAN/CaLKSAIBA_567741_SemesterII_2016_Terbarudari%20apalikasi%20calk3.0.pdf', '2019-04-23', 'laporan'),
(7, 'laporan_keuangan', 'Laporan Keuangan Semester II Tahun Anggaran 2017', 2017, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/LAPORAN-LAPORAN/LAPORAN%20KEUANGAN/CaLKSAIBA_567741_SemesterII_2017_Baru.pdf', '2019-04-23', 'laporan'),
(8, 'laporan_kinerja', 'Laporan Kinerja Stasiun Karantina Pertanian Kelas I Sumbawa Besar 2016', 2016, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/LAPORAN-LAPORAN/LAPORAN%20KINERJA/LAKIN%202016.pdf', '2019-04-23', 'laporan'),
(9, 'laporan_kinerja', 'Laporan Kinerja Stasiun Karantina Pertanian Kelas I Sumbawa Besar 2017', 2017, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/LAPORAN-LAPORAN/LAPORAN%20KINERJA/LAKIN%202017.pdf', '2019-04-23', 'laporan'),
(10, 'laporan_ppid', 'Laporan PPID Stasiun Karantina Pertanian Kelas I Sumbawa Besar 2017', 2017, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/LAPORAN-LAPORAN/LAPORAN%20PPID/Laporan%20PPID%202017.pdf', '2019-04-23', 'laporan'),
(11, 'laporan_kekayaan', 'Laporan Harta Kekayaan Penyelenggara Negara (LHKPN) 2017', 2017, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/LAPORAN-LAPORAN/LHKPN%20(1)/LHKPN%202017%20(1).pdf', '2019-07-09', 'laporan'),
(12, 'laporan_keuangan', 'Laporan Keuangan Semester II Tahun Anggaran 2018', 2018, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/LAPORAN-LAPORAN/LAPORAN%20KEUANGAN/CaLKSAIBA_567741_Semester2_2018%20(1).pdf', '2019-04-23', 'laporan'),
(13, 'laporan_kinerja', 'Laporan Kinerja Stasiun Karantina Pertanian Kelas I Sumbawa Besar 2018', 2018, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/LAPORAN-LAPORAN/LAPORAN%20KINERJA/LAKIN%202018.pdf', '2019-04-23', 'laporan'),
(15, 'laporan_ppid', 'Laporan PPID Stasiun Karantina Pertanian Kelas I Sumbawa Besar 2018', 2018, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/LAPORAN-LAPORAN/LAPORAN%20PPID/LAP%20PPID%202018%20OK.pdf', '2019-04-23', 'laporan'),
(16, 'laporan_tahunan', 'Laporan Tahunan SKP Kelas I Sumbawa Besar 2018', 2018, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/LAPORAN-LAPORAN/LAPORAN%20TAHUNAN/Laporan%20Tahunan%202018%20ok.pdf', '2019-04-23', 'laporan'),
(17, 'laporan_kekayaan', 'Laporan Harta Kekayaan Penyelenggara Negara (LHKPN) 2018', 2018, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/LAPORAN-LAPORAN/LHKPN%20(1)/LHKPN%20FULL%202018.pdf', '2019-07-09', 'laporan');

-- --------------------------------------------------------

--
-- Table structure for table `neraca_keuangan`
--

CREATE TABLE `neraca_keuangan` (
  `id` int(30) NOT NULL,
  `tahun` int(30) NOT NULL,
  `link` varchar(400) NOT NULL,
  `waktu_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `neraca_keuangan`
--

INSERT INTO `neraca_keuangan` (`id`, `tahun`, `link`, `waktu_input`) VALUES
(1, 2015, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/NERACA%20KEUANGAN/Neraca-2015.pdf', '2019-04-23'),
(2, 2016, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/NERACA%20KEUANGAN/Neraca-2016.pdf', '2019-04-23'),
(3, 2017, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/NERACA%20KEUANGAN/Neraca-2017.pdf', '2019-04-23'),
(4, 2018, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/NERACA%20KEUANGAN/Neraca-2018.pdf', '2019-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan_brg`
--

CREATE TABLE `pengadaan_brg` (
  `id` int(30) NOT NULL,
  `tahun` int(30) NOT NULL,
  `link` varchar(400) NOT NULL,
  `waktu_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengadaan_brg`
--

INSERT INTO `pengadaan_brg` (`id`, `tahun`, `link`, `waktu_input`) VALUES
(1, 2019, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/PENGADAAN%20BARANG%20&amp;%20JASA/rup_2019.pdf', '2019-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `nama`, `email`, `telepon`, `isi`, `tanggal`) VALUES
(1, 'fdsfsd', 'sdas@dfds', '321312', 'dsadas', '2019-07-10 23:28:27'),
(2, 'dfdsfsd', 'sdsasdas@jkjhj', '657686867', 'nbvnvbnvb', '2019-07-10 23:32:23'),
(3, 'andrica', 'aies@gmail.com', '08976531434', 'TEst capcta', '2019-07-10 23:33:06'),
(4, 'andrica', 'aies@gmail.com', '08976531434', 'TEst capcta', '2019-07-10 23:33:15'),
(5, 'eka', 'eka@hotmail', '4556576', 'gfdgfdgfdhbn', '2019-07-11 00:08:37'),
(6, 'Saputra', 'ssdsa@gmail.com', '09876352321', 'dfksdafkahdklfbcn', '2019-07-11 00:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `pnbp`
--

CREATE TABLE `pnbp` (
  `id` int(20) NOT NULL,
  `tahun` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `waktu_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pnbp`
--

INSERT INTO `pnbp` (`id`, `tahun`, `total`, `waktu_input`) VALUES
(1, 2016, 618373656, '2016-12-31'),
(2, 2017, 788849064, '2017-12-31'),
(3, 2018, 865494834, '2018-12-31'),
(4, 2019, 324107668, '2019-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `ppid_info_berkala`
--

CREATE TABLE `ppid_info_berkala` (
  `id` int(20) NOT NULL,
  `nama_info` varchar(300) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `link` varchar(400) NOT NULL,
  `waktu_input` date NOT NULL,
  `jenis` varchar(20) NOT NULL DEFAULT 'berkala'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppid_info_berkala`
--

INSERT INTO `ppid_info_berkala` (`id`, `nama_info`, `kategori`, `link`, `waktu_input`, `jenis`) VALUES
(2, 'Profil Stasiun Karantina Pertanian Kelas I Sumbawa Besar', 'profil', 'tentang_kami?profil', '2018-05-17', 'berkala'),
(3, 'Visi &amp; Misi ', 'profil', 'tentang_kami?visi_misi', '2019-07-09', 'berkala'),
(4, 'Tugas Pokok &amp; Fungsi ', 'profil', 'tentang_kami?tupoksi', '2019-07-09', 'berkala'),
(5, 'Struktur Organisasi ', 'profil', 'tentang_kami?struktur', '2019-07-09', 'berkala'),
(6, 'Wilayah Kerja/ Layanan', 'profil', 'tentang_kami?wilker', '2019-07-09', 'berkala'),
(7, 'Informasi Layanan Publik', 'kegiatan_kinerja', 'ppid?prosedur', '2018-05-21', 'berkala'),
(8, 'Agenda Kegiatan Tahun 2019', 'kegiatan_kinerja', 'events', '2019-07-09', 'berkala'),
(9, 'Statistik ', 'kegiatan_kinerja', 'data_operasional', '2019-07-09', 'berkala'),
(10, 'Indeks Kepuasan Masyrakat (IKM)', 'kegiatan_kinerja', 'data_operasional?ikm', '2018-05-21', 'berkala'),
(11, 'Laporan Tahunan', 'dokumen_kinerja', 'laporan?tahunan', '2019-07-09', 'berkala'),
(12, 'DIPA Induk', 'dokumen_kinerja', 'keuangan?dipa', '2019-07-09', 'berkala'),
(13, 'Indeks Kepuasan Masyarakat', 'ikm', 'data_operasional?ikm', '2018-05-22', 'berkala'),
(14, 'Laporan Realisasi Anggaran', 'keuangan', 'keuangan?realisasi_anggaran', '2018-05-22', 'berkala'),
(15, 'Neraca Keuangan', 'keuangan', 'keuangan?neraca_keuangan', '2018-05-22', 'berkala'),
(16, 'Laporan Kinerja', 'dokumen_kinerja', 'laporan?kinerja', '2019-07-09', 'berkala'),
(17, 'Laporan Keuangan', 'keuangan', 'keuangan?laporan_keuangan', '2018-05-23', 'berkala'),
(18, 'RKA - KL ', 'keuangan', 'keuangan?rka_kl', '2019-07-09', 'berkala'),
(19, 'Daftar Aset - BMN', 'keuangan', 'keuangan?daftar_aset', '2019-07-09', 'berkala'),
(20, 'Informasi Tentang Hak Memperoleh Informasi Publik', 'akses_informasi_publik', 'ppid?hak_informasi', '2018-05-23', 'berkala'),
(21, 'Informasi Tentang Tata Cara Memperoleh Informasi Publik', 'akses_informasi_publik', 'ppid?prosedur', '2018-05-23', 'berkala'),
(22, 'Tata Cara Pengaduan Masyarakat', 'akses_informasi_publik', 'ppid?prosedur', '2018-05-23', 'berkala'),
(23, 'Daftar Informasi Publik Tahun 2019', 'akses_informasi_publik', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/PPID/DAFTAR%20INFORMASI%20PUBLIK%20(DIP)/Daftar%20Informasi%20Publik%20Sumbawa%202019%20ok.pdf', '2019-07-09', 'berkala'),
(24, 'Profil Singkat Pimpinan ', 'profil', 'tentang_kami?struktural', '2019-07-09', 'berkala'),
(25, 'Statistik Penerimaan Negara Bukan Pajak ', 'kegiatan_kinerja', 'data_operasional?pnbp', '2019-07-09', 'berkala'),
(26, 'Rencana Anggaran', 'keuangan', 'keuangan?rencana_anggaran', '2019-07-12', 'berkala');

-- --------------------------------------------------------

--
-- Table structure for table `ppid_info_sertamerta`
--

CREATE TABLE `ppid_info_sertamerta` (
  `id` int(20) NOT NULL,
  `nama_info` varchar(200) NOT NULL,
  `link` varchar(400) NOT NULL,
  `waktu_input` date NOT NULL,
  `jenis` varchar(20) NOT NULL DEFAULT 'serta_merta'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppid_info_sertamerta`
--

INSERT INTO `ppid_info_sertamerta` (`id`, `nama_info`, `link`, `waktu_input`, `jenis`) VALUES
(1, 'Prosedur & Persyaratan Ekspor Hewan Dan Produk Hewan', 'kh?pengeluaran', '2018-05-17', 'serta_merta'),
(2, 'Prosedur & Persyaratan Impor Hewan Dan Produk Hewan', 'kh?pemasukan', '2018-05-17', 'serta_merta'),
(3, 'Prosedur  & Persyaratan Domestik Masuk &amp; Domestik Keluar Hewan Dan Produk Hewan', 'kh?antararea', '2018-05-17', 'serta_merta'),
(4, 'Prosedur  & Persyaratan Ekspor Tumbuhan Dan Produk Tumbuhan', 'kt?pengeluaran', '2018-05-17', 'serta_merta'),
(5, 'Prosedur & Persyaratan Impor Kemasan Kayu', 'kt?pemasukan', '2018-05-17', 'serta_merta'),
(6, 'Prosedur & Persyaratan Domestik Masuk &amp; Domestik Keluar Tumbuhan Dan Produk Tumbuhan', 'kt?antararea', '2018-05-17', 'serta_merta'),
(7, 'Daftar Organisme Pengganggu Tumbuhan Karantina', 'https://drive.google.com/file/d/1F1b1-feqZ0TESL-ldR7HambgyVV_xbf9/view?usp=sharing', '2018-05-17', 'serta_merta'),
(8, 'Daftar Hama Dan Penyakit Hewan', 'https://drive.google.com/file/d/1RtnqPXg2H5yeshRKPfCcXG6p-A-JNO4a/view?usp=sharing', '2018-05-18', 'serta_merta'),
(9, 'Larangan laulintas Hewan Penular Rabies (HPR) ke dan dari Pulau Sumbawa', 'https://drive.google.com/file/d/1BrdvoahFDHL7rFfinMPtMNL1JXaXPd50/view?usp=sharing', '2019-02-26', 'serta_merta'),
(10, 'Bahaya Rabies 1', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/PERINGATAN%20DINI%20&amp;%20PROSEDUR%20EVAKUASI/rabies-2.png', '2019-07-12', 'serta_merta'),
(11, 'Bahaya Rabies 2', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/PERINGATAN%20DINI%20&amp;%20PROSEDUR%20EVAKUASI/rabies-1.png', '2019-07-12', 'serta_merta'),
(12, 'Prosedur Evakuasi Gempa Bumi', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/PERINGATAN%20DINI%20&amp;%20PROSEDUR%20EVAKUASI/gempa.png', '2019-07-12', 'serta_merta'),
(13, 'Prosedur Evakuasi Kebakaran', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/PERINGATAN%20DINI%20&amp;%20PROSEDUR%20EVAKUASI/kebakaran.png', '2019-07-12', 'serta_merta');

-- --------------------------------------------------------

--
-- Table structure for table `ppid_info_setiapsaat`
--

CREATE TABLE `ppid_info_setiapsaat` (
  `id` int(20) NOT NULL,
  `bagian_info` varchar(400) NOT NULL,
  `nama_info` varchar(500) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `keterangan` varchar(400) NOT NULL,
  `link` varchar(400) NOT NULL,
  `waktu_input` date NOT NULL,
  `jenis` varchar(20) NOT NULL DEFAULT 'setiap_saat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppid_info_setiapsaat`
--

INSERT INTO `ppid_info_setiapsaat` (`id`, `bagian_info`, `nama_info`, `kategori`, `keterangan`, `link`, `waktu_input`, `jenis`) VALUES
(3, 'daftar informasi publik skp kelas i sumbawa besar', '', '', '', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/PPID/DAFTAR%20INFORMASI%20PUBLIK%20(DIP)/Daftar%20Informasi%20Publik%20Sumbawa%202019%20ok.pdf', '2019-04-24', 'setiap_saat'),
(4, 'informasi tentang peraturan, keputusan, dan/atau kebijakan skp kelas i sumbawa besar', '', '', 'SKP Kelas I Sumbawa Besar Tidak Mengeluarkan Peraturan/ Keputusan', '', '2018-05-22', 'setiap_saat'),
(5, 'daftar rancangan peraturan perundang-undangan di bidang keuangan negara', '', '', 'SKP Kelas I Sumbawa Besar Tidak Mengeluarkan Peraturan/ Keputusan', '', '2018-05-22', 'setiap_saat'),
(6, 'seluruh informasi yang wajib disediakan dan diumumkan secara berkala', '', '', '', 'ppid?info=berkala', '2018-05-22', 'setiap_saat'),
(7, 'informasi tentang organisasi, administrasi, kepegawaian, dan keuangan', 'PERATURAN MENTERI PERTANIAN\r\nNOMOR : 22/Permentan/OT.140/4/2008 TENTANG\r\nORGANISASI DAN TATA KERJA\r\nUNIT PELAKSANA TEKNIS KARANTINA PERTANIAN ', 'Pedoman Pengelolaan Organisasi', '', 'https://drive.google.com/file/d/1x2N3PylKLwh3wrvzIEg8uYfCPQVsuoX3/view?usp=sharing', '2018-05-22', 'setiap_saat'),
(8, 'informasi tentang organisasi, administrasi, kepegawaian, dan keuangan', 'PERATURAN MENTERI PERTANIAN REPUBLIK INDONESIA NOMOR: 07/Permentan/TU.120/2/2016 TENTANG  TATA NASKAH DINAS KEMENTERIAN PERTANIAN', '	Pedoman Pengelolaan Administrasi', '', 'https://drive.google.com/file/d/1DByZq8nN5x9Ir4_4VypG2nNU6OrM71Gb/view?usp=sharing', '2018-05-22', 'setiap_saat'),
(9, 'informasi tentang organisasi, administrasi, kepegawaian, dan keuangan', 'PERATURAN MENTERI KEUANGAN REPUBLIK INDONESIA NOMOR 87 /PMK.06/2016 TENTANG PERUBAHAN ATAS PERATURAN MENTERI KEUANGAN REPUBLIK INDONESIA NOMOR 246/PMK.06/2014 TENTANG TATA CARA PELAKSANAAN PENGGUNAAN BARANG MILIK NEGARA ', '	Pedoman Pengelolaan Administrasi', '', 'https://drive.google.com/file/d/10JiFe2eOK7vcJ0Q4u5p3gPxYDJ19tl8v/view?usp=sharing', '2018-05-22', 'setiap_saat'),
(10, 'informasi tentang organisasi, administrasi, kepegawaian, dan keuangan', 'PERATURAN MENTERI PERTANIAN REPUBLIK INDONESIA NOMOR 18/PERMENTAN/TU.110/5/2017 TENTANG  KLASIFIKASI KEAMANAN DAN AKSES ARSIP DINAMIS DI LINGKUNGAN KEMENTERIAN PERTANIAN', '	Pedoman Pengelolaan Administrasi', '', 'https://drive.google.com/file/d/1MGt41YzDYV1mU5O9T0pOUkjh7f9COObI/view?usp=sharing', '2018-05-22', 'setiap_saat'),
(11, 'informasi tentang organisasi, administrasi, kepegawaian, dan keuangan', 'UNDANG-UNDANG REPUBLIK INDONESIA  11 TAHUN 1969 TENTANG  PENSIUN PEGAWAI DAN PENSIUN JANDA/DUDA PEGAWAI', 'Pedoman Pengelolaan Kepegawaian', '', 'https://drive.google.com/file/d/1iMiLPkaKHN6G41eg5Varsz8xoN1T_KwR/view?usp=sharing', '2018-05-22', 'setiap_saat'),
(12, 'informasi tentang organisasi, administrasi, kepegawaian, dan keuangan', 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 43 TAHUN 1999 TENTANG  PERUBAHAN ATAS UNDANG-UNDANG NOMOR 8 TAHUN 1974 TENTANG POKOK-POKOK KEPEGAWAIAN', 'Pedoman Pengelolaan Kepegawaian', '', 'https://drive.google.com/file/d/1I7b_XQpeb9E_vpn0mxntR0MFVOoLE0Zi/view?usp=sharing', '2018-05-23', 'setiap_saat'),
(13, 'informasi tentang organisasi, administrasi, kepegawaian, dan keuangan', 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 5 TAHUN 2014 TENTANG APARATUR SIPIL NEGARA', 'Pedoman Pengelolaan Kepegawaian', '', 'https://drive.google.com/file/d/1FcOp8pfq0xFkC7XHWXP3LepnLs0ypfQu/view?usp=sharing', '2018-05-23', 'setiap_saat'),
(14, 'informasi tentang organisasi, administrasi, kepegawaian, dan keuangan', 'PERATURAN MENTERI PERTANIAN REPUBLIK INDONESIA NOMOR 06/Permentan/KU.060/2/2016 TENTANG  PEDOMAN PEMBERIAN TUNJANGAN KINERJA BAGI PEGAWAI DI LINGKUNGAN KEMENTERIAN PERTANIAN', 'Pedoman Pengelolaan Kepegawaian', '', 'https://drive.google.com/file/d/11hv2bn-dP1ydNc9rWw2ZYWwTqT4RkJEu/view?usp=sharing', '2018-05-23', 'setiap_saat'),
(15, 'informasi tentang organisasi, administrasi, kepegawaian, dan keuangan', 'PERATURAN MENTERI PERTANIAN REPUBLIK INDONESIA NOMOR 60/PERMENTAN/KP.340/12/2016  TENTANG PENILAIAN KINERJA PEGAWAI DI LINGKUNGAN KEMENTERIAN PERTANIAN', 'Pedoman Pengelolaan Kepegawaian', '', 'https://drive.google.com/file/d/192gtA47W_sYcrz7qxpotBz6g2wr6wW9x/view?usp=sharing', '2018-05-23', 'setiap_saat'),
(16, 'informasi tentang organisasi, administrasi, kepegawaian, dan keuangan', 'PERATURAN MENTERI PERTANIAN REPUBLIK INDONESIA NOMOR 09/PERMENTAN/OT.110/3/2017 TENTANG  TATA CARA PENYESUAIAN/INPASSING PEGAWAI NEGERI SIPIL DALAM  JABATAN FUNGSIONAL BIDANG PERTANIAN', 'Pedoman Pengelolaan Kepegawaian', '', 'https://drive.google.com/file/d/1QWZKEZSk_lbyJRQ4M77KWqG5OyAXCcTD/view?usp=sharing', '2018-05-23', 'setiap_saat'),
(17, 'informasi tentang organisasi, administrasi, kepegawaian, dan keuangan', 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 17 TAHUN 2003 TENTANG KEUANGAN NEGARA', 'Pedoman Pengelolaan Keuangan', '', 'https://drive.google.com/file/d/1ndCiZz-s7aeLY6Le9Cxh8x4nJo0WkG3x/view?usp=sharing', '2018-05-23', 'setiap_saat'),
(18, 'informasi tentang organisasi, administrasi, kepegawaian, dan keuangan', 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 1 TAHUN 2004 TENTANG PERBENDAHARAAN NEGARA', 'Pedoman Pengelolaan Keuangan', '', 'https://drive.google.com/file/d/1-OvAXB93fQKX5I0aDMOZqzPRQsXSBiVj/view?usp=sharing', '2018-05-23', 'setiap_saat'),
(19, 'informasi tentang organisasi, administrasi, kepegawaian, dan keuangan', 'PERATURAN MENTERI KEUANGAN REPUBLIK INDONESIA NOMOR 49 / PMK. 02/20 17 TENT ANG  STANDAR BIAYA MASUKAN TAHUN ANGGARAN 20 18', 'Pedoman Pengelolaan Keuangan', '', 'https://drive.google.com/file/d/1Q6VUgpqesf6Ohjh5tuNTErW_TAFFcx4z/view?usp=sharing', '2018-05-23', 'setiap_saat'),
(20, 'informasi tentang organisasi, administrasi, kepegawaian, dan keuangan', 'Profil Pimpinan Dan Pegawai SKP Kelas I Sumbawa Besar', '', '', 'https://drive.google.com/file/d/1ZRef4i-eQH8E59KY-419yjNT6u5gXbcT/view?usp=sharing', '2018-05-23', 'setiap_saat'),
(21, 'informasi tentang organisasi, administrasi, kepegawaian, dan keuangan', 'DIPA SKP Kelas I Sumbawa Besar', '', '', 'keuangan?dipa', '2018-05-23', 'setiap_saat'),
(22, 'informasi tentang organisasi, administrasi, kepegawaian, dan keuangan', 'RKA - KL SKP Kelas I Sumbawa Besar', '', '', 'keuangan?rka_kl', '2018-05-23', 'setiap_saat'),
(23, 'informasi tentang organisasi, administrasi, kepegawaian, dan keuangan', 'Laporan Keuangan SKP Kelas I Sumbawa Besar', '', '', 'keuangan?laporan_keuangan', '2018-05-23', 'setiap_saat'),
(24, 'informasi tentang organisasi, administrasi, kepegawaian, dan keuangan', 'Statistik Data Operasional SKP Kelas I Sumbawa Besar', '', '', 'data_operasional', '2018-05-23', 'setiap_saat'),
(25, 'surat-surat perjanjian dengan pihak ketiga', '', '', 'Tersedia Di SKP Kelas I Sumbawa Besar (Hard Copy)', '', '2018-05-23', 'setiap_saat'),
(26, 'surat menyurat pimpinan atau pejabat skp kelas i sumbawa besar dalam rangka pelaksanaan tugas pokok dan fungsinya', '', '', 'Tersedia Di SKP Kelas I Sumbawa Besar (Hard Copy)', '', '2018-05-23', 'setiap_saat'),
(27, 'syarat-syarat perizinan, izin yang diterbitkan dan/atau dikeluarkan berikut dokumen pendukungnya, dan laporan penataan izin yang diberikan', 'Syarat - syarat Pengeluaran, Pemasukan, dan Domestik Masuk Serta Keluar Karantina Hewan', '', '', 'kh', '2018-05-23', 'setiap_saat'),
(28, 'syarat-syarat perizinan, izin yang diterbitkan dan/atau dikeluarkan berikut dokumen pendukungnya, dan laporan penataan izin yang diberikan', 'Syarat - syarat Pengeluaran, Pemasukan, dan Domestik Masuk Serta Keluar Karantina Tumbuhan', '', '', 'kt', '2018-05-23', 'setiap_saat'),
(29, 'data perbendaharaan atau inventaris', '', '', 'Tersedia Di SKP Kelas I Sumbawa Besar (Hard Copy)', '', '2018-05-23', 'setiap_saat'),
(30, 'rencana strategis &amp; rencana kerja skp kelas i sumbawa besar', '', '', '', 'events', '2018-05-23', 'setiap_saat'),
(31, 'agenda kerja pimpinan skp kelas i sumbawa besar', '', '', '', 'events', '2018-05-23', 'setiap_saat'),
(32, 'layanan publik skp kelas i sumbawa besar', 'SOP dan  Standar Pelayanan Publik Karantina Pertanian', '', '', 'spp', '2018-05-23', 'setiap_saat'),
(33, 'jumlah, jenis, dan gambaran umum pelanggaran yang dilaporkan oleh masyarakat serta laporan penindakannya (laporan pengaduan masyarakat)', '', '', '', 'laporan?ppid', '2018-05-23', 'setiap_saat'),
(34, 'daftar serta hasil-hasil penelitian', '', '', 'Segera Disediakan', '', '2018-05-23', 'setiap_saat'),
(35, 'siaran pers dan keterangan pers', '', '', '', 'berita', '2018-05-23', 'setiap_saat');

-- --------------------------------------------------------

--
-- Table structure for table `ppid_regulasi`
--

CREATE TABLE `ppid_regulasi` (
  `id` int(20) NOT NULL,
  `nama_regulasi` varchar(500) NOT NULL,
  `link` varchar(300) NOT NULL,
  `waktu_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppid_regulasi`
--

INSERT INTO `ppid_regulasi` (`id`, `nama_regulasi`, `link`, `waktu_input`) VALUES
(1, 'UU Nomor 14 Tahun 2008 Tentang Keterbukaan Informasi Publik', 'https://drive.google.com/file/d/1xliCRuYM8odbUB8zXlEKhDzRVSJedwJY/view?usp=sharing', '2018-05-18'),
(2, 'UU No 11 Tahun 2008 Tentang Informasi dan Transaksi Elektronik', 'https://drive.google.com/file/d/1e8Rj9VCZvLHfuk3NPbd8eeqgxLIUl0Og/view?usp=sharing', '2018-05-18'),
(3, 'Peraturan Komisi Informasi Nomor 1 Tahun 2010 Tentang Standar Layanan Informasi Publik', 'https://drive.google.com/file/d/1EsACPgvd1usZYgWd_Gzn5xlqQVEAFy3A/view?usp=sharing', '2018-05-18'),
(4, 'Permentan 25 Tahun 2016 Tentang Pengelolaan Dan Pelayanan Informasi Publik Di Lingkungan Kementerian Pertanian', 'https://drive.google.com/file/d/1E-_IELlicHlXROmGocVYiL7ufrXG1JHk/view?usp=sharing', '2018-05-18'),
(5, 'Peraturan Komisi Informasi Nomor 1 Tahun 2017 Tentang Pengklasifikasian Informasi Publik', 'https://drive.google.com/file/d/1xtlhSvCpCJZ0EyG1sC37huxxTVRf7Mk7/view?usp=sharing', '2018-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `publik`
--

CREATE TABLE `publik` (
  `id` int(20) NOT NULL,
  `nama_dokumen` varchar(100) NOT NULL,
  `waktu_upload` date NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `filenya` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publik`
--

INSERT INTO `publik` (`id`, `nama_dokumen`, `waktu_upload`, `kategori`, `filenya`) VALUES
(1, 'IKM PERIODE I 2017', '2018-04-26', 'ikm', 'headline-1524755427.pdf'),
(2, 'IKM PERIODE II 2017', '2018-04-26', 'ikm', 'docs-1524756268.pdf'),
(3, 'Form Permohonan Informasi &amp; Dokumentasi Perseorangan', '2018-06-25', 'lainnya', 'docs-1529909578.pdf'),
(4, 'Form Permohonan Informasi &amp; Dokumentasi Badan Hukum/ Badan Publik/ Kelompok', '2018-06-25', 'lainnya', 'docs-1529909594.pdf'),
(5, 'Form Pernyataan Keberatan Atas Permohonan Informasi Publik', '2018-06-25', 'lainnya', 'docs-1529909611.pdf'),
(6, 'Panduan Bulan Bakti Karantina Ke 141', '2018-06-25', 'lainnya', 'docs-1530401438.pdf'),
(7, 'IKM Periode I Tahun 2018', '2018-07-10', 'ikm', 'docs-1531215999.pdf'),
(8, 'FORM KUISIONER IPNBK', '2018-09-18', 'ipnbk', 'docs-1537323779.pdf'),
(9, 'Form Permintaan Cuti', '2018-09-19', 'lainnya', 'form_permintaan-cuti.docx'),
(17, 'Form Laporan Bulanan WASDAK', '2018-09-28', 'lainnya', 'Form Laporan Bulanan WASDAK-1538105570.xlsx'),
(30, 'Larangan laulintas Hewan Penular Rabies (HPR) ke dan dari Pulau Sumbawa', '2019-02-13', 'lainnya', 'Larangan laulintas Hewan Penular Rabies (HPR) ke dan dari Pulau Sumbawa-1550069290.pdf'),
(31, 'FORM LAPORAN BULANAN PENGADUAN MASYARAKAT (DUMAS)', '2019-04-02', 'lainnya', 'FORM LAPORAN BULANAN PENGADUAN MASYARAKAT-1554182368.docx'),
(32, 'FORMULIR PENGADUAN MASYARAKAT (DUMAS)', '2019-04-02', 'lainnya', 'FORMULIR PENGADUAN MASYARAKAT-1554182393.pdf'),
(33, 'FORM LAPORAN BULANAN PERMINTAAN INFORMASI PUBLIK', '2019-04-02', 'lainnya', 'FORM LAPORAN BULANAN PERMINTAAN INFORMASI PUBLIK-1554183220.xlsx'),
(34, 'IKM Periode II Tahun 2018', '2018-12-31', 'ikm', 'IKM Periode II Tahun 2018-1556017179.pdf'),
(35, 'IKM Periode I Tahun 2019', '2019-07-09', 'ikm', 'IKM Periode I Tahun 2019-1562659193.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `realisasi_anggaran`
--

CREATE TABLE `realisasi_anggaran` (
  `id` int(30) NOT NULL,
  `tahun` int(30) NOT NULL,
  `link` varchar(400) NOT NULL,
  `waktu_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realisasi_anggaran`
--

INSERT INTO `realisasi_anggaran` (`id`, `tahun`, `link`, `waktu_input`) VALUES
(1, 2015, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/REALISASI%20ANGGARAN/LRA-2015.pdf', '2019-04-23'),
(2, 2016, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/REALISASI%20ANGGARAN/LRA-2016.pdf', '2019-04-23'),
(3, 2017, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/REALISASI%20ANGGARAN/LRA-2017.pdf', '2019-04-23'),
(4, 2018, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/REALISASI%20ANGGARAN/LRA-2018.pdf', '2019-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `rencana_anggaran`
--

CREATE TABLE `rencana_anggaran` (
  `id` int(30) NOT NULL,
  `tahun` int(30) NOT NULL,
  `link` varchar(400) NOT NULL,
  `waktu_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rencana_anggaran`
--

INSERT INTO `rencana_anggaran` (`id`, `tahun`, `link`, `waktu_input`) VALUES
(1, 2018, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/RENCANA%20ANGGARAN/Rencana%20Anggaran%202018.pdf', '2019-07-09'),
(2, 2019, 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/RENCANA%20ANGGARAN/Rencana%20Anggaran%202019.pdf', '2019-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `rka_kl`
--

CREATE TABLE `rka_kl` (
  `id` int(30) NOT NULL,
  `tahun` int(30) NOT NULL,
  `revisi` varchar(30) NOT NULL,
  `link` varchar(400) NOT NULL,
  `waktu_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rka_kl`
--

INSERT INTO `rka_kl` (`id`, `tahun`, `revisi`, `link`, `waktu_input`) VALUES
(1, 2017, 'awal', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/RKA-KL/POK/2017%20(1)/POK_Awal.pdf', '2019-04-23'),
(2, 2017, '1', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/RKA-KL/POK/2017%20(1)/POK_Rev.1.pdf', '2019-04-23'),
(3, 2017, '2', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/RKA-KL/POK/2017%20(1)/POK_Rev.2.pdf', '2019-04-23'),
(4, 2018, 'awal', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/RKA-KL/POK/2018%20(1)/POK_AWAL.pdf', '2019-04-23'),
(5, 2018, '1', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/RKA-KL/POK/2018%20(1)/POK%20Revisi%201.pdf', '2019-04-23'),
(6, 2018, '2', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/RKA-KL/POK/2018%20(1)/POK%20Revisi_2.pdf', '2019-04-23'),
(7, 2018, '3', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/RKA-KL/POK/2018%20(1)/POK%20Revisi%203.pdf', '2019-04-23'),
(8, 2018, '4', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/RKA-KL/POK/2018%20(1)/POK%20Revisi%204.pdf', '2019-04-23'),
(9, 2018, '5', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/RKA-KL/POK/2018%20(1)/POK_REVISI_5.pdf', '2019-04-23'),
(10, 2018, '6', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/RKA-KL/POK/2018%20(1)/POK_Revisi_6.pdf', '2019-04-23'),
(11, 2019, 'awal', 'http://skp1sumbawabesar.ppid.pertanian.go.id/doc/207/PPID%20Stasiun%20Karantina%20Pertanian%20Kelas%20I%20Sumbawa%20Besar/INFORMASI%20KEUANGAN/RKA-KL/POK/2019/POK_2019_Rev_1.pdf', '2019-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `id` int(30) NOT NULL,
  `kategori` enum('karantina hewan','karantina tumbuhan','','') NOT NULL,
  `kegiatan` enum('domestik','ekspor','impor','') NOT NULL,
  `komoditas` varchar(100) NOT NULL,
  `tarif` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`id`, `kategori`, `kegiatan`, `komoditas`, `tarif`) VALUES
(1, 'karantina hewan', 'domestik', 'sapi', 5000),
(2, 'karantina hewan', 'domestik', 'ayam', 50),
(3, 'karantina hewan', 'domestik', 'DOC', 5),
(4, 'karantina hewan', 'domestik', 'Kucing', 10000),
(5, 'karantina hewan', 'domestik', 'Kuda (Hewan Kesayangan)', 50000),
(6, 'karantina hewan', 'domestik', 'Kuda (Potong)', 5000),
(7, 'karantina hewan', 'domestik', 'Telur', 15),
(8, 'karantina hewan', 'domestik', 'Madu', 25),
(9, 'karantina hewan', 'domestik', 'Susu', 25),
(10, 'karantina tumbuhan', 'domestik', 'Jagung', 250),
(11, 'karantina tumbuhan', 'domestik', 'Buah - buahan', 5),
(12, 'karantina tumbuhan', 'domestik', 'Umbi - umbian (Bawang merah, Ubi)/ Rimpang (Jahe dll)', 2),
(13, 'karantina tumbuhan', 'domestik', 'Bunga Potong', 50),
(14, 'karantina tumbuhan', 'domestik', 'Benih Sayuran', 60),
(15, 'karantina hewan', 'ekspor', 'Sapi', 5000),
(16, 'karantina hewan', 'ekspor', 'Ayam', 50),
(17, 'karantina hewan', 'ekspor', 'DOC', 5),
(18, 'karantina hewan', 'ekspor', 'Kucing', 10000),
(19, 'karantina hewan', 'ekspor', 'Kuda (Hewan Kesayangan)', 50000),
(20, 'karantina hewan', 'ekspor', 'Kuda (Potong)', 5000),
(21, 'karantina hewan', 'ekspor', 'Telur', 15),
(22, 'karantina hewan', 'ekspor', 'Madu', 25),
(23, 'karantina hewan', 'ekspor', 'Susu', 25),
(24, 'karantina tumbuhan', 'ekspor', 'Jagung', 500),
(25, 'karantina tumbuhan', 'ekspor', 'Buah - buahan', 5),
(26, 'karantina tumbuhan', 'ekspor', 'Umbi - umbian (Bawang merah, Ubi)/ Rimpang (Jahe dll)', 3),
(27, 'karantina tumbuhan', 'ekspor', 'Bunga Potong', 50),
(28, 'karantina tumbuhan', 'ekspor', '	\r\nBenih Sayuran', 60),
(29, 'karantina hewan', 'impor', '	\r\nsapi', 10000),
(30, 'karantina hewan', 'impor', 'ayam', 100),
(31, 'karantina hewan', 'impor', 'DOC', 10),
(32, 'karantina hewan', 'impor', 'Kucing', 15000),
(33, 'karantina hewan', 'impor', 'Kuda (Hewan Kesayangan)', 100000),
(34, 'karantina hewan', 'impor', 'Kuda (Potong)', 10000),
(35, 'karantina hewan', 'impor', 'Telur', 25),
(36, 'karantina hewan', 'impor', 'Madu', 50),
(37, 'karantina hewan', 'impor', 'Susu', 50),
(38, 'karantina tumbuhan', 'impor', 'Jagung', 1000),
(39, 'karantina tumbuhan', 'impor', 'Buah - buahan', 100),
(40, 'karantina tumbuhan', 'impor', 'Umbi - umbian (Bawang merah, Ubi)/ Rimpang (Jahe dll)', 5),
(41, 'karantina tumbuhan', 'impor', 'Bunga Potong', 100),
(42, 'karantina tumbuhan', 'impor', 'Benih Sayuran', 270);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`) VALUES
(1, 'adminwebskp', '@Stakabad01', 'administrator'),
(2, 'superadmin', 'superadmin123', 'superadmin'),
(3, 'andricahumas', 'andrica94', 'Andrica Ismi Eka Saputra'),
(4, 'trihumas', 'trisuparyanto', 'Tri Suparyanto, A.Md'),
(5, 'haryhumas', 'harygangga', 'Hari Gangga Yudha, A.Md'),
(6, 'putrihumas', 'dwisarimp', 'Dwi Sari Mamonto Putri, S.si'),
(7, 'faridhumas', 'faridwajdi', 'Muhammad Farid Wajdi, A.Md'),
(8, 'chrishumas', 'chrisyunarto', 'Christiawan Yunarto, A.Md');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_aset`
--
ALTER TABLE `daftar_aset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_operasional`
--
ALTER TABLE `data_operasional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dipa`
--
ALTER TABLE `dipa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headline`
--
ALTER TABLE `headline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ikm`
--
ALTER TABLE `ikm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kh_operasional`
--
ALTER TABLE `kh_operasional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kt_operasional`
--
ALTER TABLE `kt_operasional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neraca_keuangan`
--
ALTER TABLE `neraca_keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengadaan_brg`
--
ALTER TABLE `pengadaan_brg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pnbp`
--
ALTER TABLE `pnbp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppid_info_berkala`
--
ALTER TABLE `ppid_info_berkala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppid_info_sertamerta`
--
ALTER TABLE `ppid_info_sertamerta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppid_info_setiapsaat`
--
ALTER TABLE `ppid_info_setiapsaat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppid_regulasi`
--
ALTER TABLE `ppid_regulasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publik`
--
ALTER TABLE `publik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realisasi_anggaran`
--
ALTER TABLE `realisasi_anggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rencana_anggaran`
--
ALTER TABLE `rencana_anggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rka_kl`
--
ALTER TABLE `rka_kl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `daftar_aset`
--
ALTER TABLE `daftar_aset`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_operasional`
--
ALTER TABLE `data_operasional`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dipa`
--
ALTER TABLE `dipa`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `headline`
--
ALTER TABLE `headline`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `ikm`
--
ALTER TABLE `ikm`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kh_operasional`
--
ALTER TABLE `kh_operasional`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kt_operasional`
--
ALTER TABLE `kt_operasional`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `neraca_keuangan`
--
ALTER TABLE `neraca_keuangan`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengadaan_brg`
--
ALTER TABLE `pengadaan_brg`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pnbp`
--
ALTER TABLE `pnbp`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ppid_info_berkala`
--
ALTER TABLE `ppid_info_berkala`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ppid_info_sertamerta`
--
ALTER TABLE `ppid_info_sertamerta`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ppid_info_setiapsaat`
--
ALTER TABLE `ppid_info_setiapsaat`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `ppid_regulasi`
--
ALTER TABLE `ppid_regulasi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `publik`
--
ALTER TABLE `publik`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `realisasi_anggaran`
--
ALTER TABLE `realisasi_anggaran`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rencana_anggaran`
--
ALTER TABLE `rencana_anggaran`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rka_kl`
--
ALTER TABLE `rka_kl`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
