# Mini Practice — Pemrograman Web Dasar

Repositori ini berisi kumpulan **Mini Practice (MP)** mata kuliah Pemrograman Web Dasar, Kelas D.

- **NPM:** 250713171 (5 digit terakhir: `13171`)
- **Program Studi:** Informatika — Universitas Atma Jaya Yogyakarta
- **GitHub:** [`Yosef-kelfin/250713171`](https://github.com/Yosef-kelfin/250713171)

## Daftar Mini Practice

| MP | Topik | Tugas |
|----|-------|-------|
| MP2 | XHTML Dasar | [1](MP2_D_13171_XHTMLBasic/XHTML_BASIC_1_13171/) · [2](MP2_D_13171_XHTMLBasic/XHTML_BASIC_2_13171/) · [3](MP2_D_13171_XHTMLBasic/XHTML_BASIC_3_13171/) · [4](MP2_D_13171_XHTMLBasic/XHTML_BASIC_4_13171/) |
| MP3 | XHTML Table | [1](MP3_D_13171_XHTMLTable/XHTML_Table_1_13171/) · [2](MP3_D_13171_XHTMLTable/XHTML_Table_2_13171/) · [3](MP3_D_13171_XHTMLTable/XHTML_Table_3_13171/) · [4](MP3_D_13171_XHTMLTable/XHTML_Table_4_13171/) |
| MP4 | XHTML Form | [1](MP4_D_13171_XHTMLForm/XHTML_Form_1_13171/) · [2](MP4_D_13171_XHTMLForm/XHTML_Form_2_13171/) |
| MP5 | CSS Dasar | [1](MP5_D_13171_CSS/CSS_BASIC_1_13171/) · [2](MP5_D_13171_CSS/CSS_BASIC_2_13171/) · [3](MP5_D_13171_CSS/CSS_BASIC_3_13171/) · [4](MP5_D_13171_CSS/CSS_BASIC_4_13171/) |
| MP6 | CSS Lanjutan | [1](MP6_D_13171_CSSAdvance/CSS_Advance_1_13171/) · [2](MP6_D_13171_CSSAdvance/CSS_Advance_2_13171/) |
| MP7 | JavaScript | [1 — Validasi Form](MP7_D_13171_JavaScript/JavaScript_FormValid_1_13171/) · [2 — If/Else Eksternal](MP7_D_13171_JavaScript/JavaScript_IfElseEksternal_2_13171/) · [3 — Switch Case](MP7_D_13171_JavaScript/JavaScript_SwitchCase_3_13171/) · [4 — Latihan](MP7_D_13171_JavaScript/JavaScript_Latihan_4_13171/) |
| MP8 | PHP Dasar | [1](MP8_D_13171_PHPBasic/PHP_Basic_1_13171/) · [2](MP8_D_13171_PHPBasic/PHP_Basic_2_13171/) · [3](MP8_D_13171_PHPBasic/PHP_Basic_3_13171/) |
| MP9 | PHP Lanjutan | [1](MP9_D_13171_PHPAdvance/PHPAdvance_Tugas1_13171/) · [2](MP9_D_13171_PHPAdvance/PHPAdvance_Tugas2_13171/) · [3](MP9_D_13171_PHPAdvance/PHPAdvance_Tugas3_13171/) · [4](MP9_D_13171_PHPAdvance/PHPAdvance_Tugas4_13171/) |
| MP10 | DOM | [1](MP10_D_13171_DOM/DOM_1_13171/) · [2](MP10_D_13171_DOM/DOM_2_13171/) · [3](MP10_D_13171_DOM/DOM_3_13171/) · [Bonus](MP10_D_13171_DOM/Bonus_DOM_4_13171/) |
| MP11 | jQuery | [1 — Manipulasi XHTML](MP11_D_13171_jQuery/jQuery_Manipulasi_1_13171/) · [2 — Event Handling](MP11_D_13171_jQuery/jQuery_Interaksi_2_13171/) · [3 — Kartu Informasi Seminar](MP11_D_13171_jQuery/jQuery_Hover_3_13171/) · [4 — Katalog & Keranjang (Bonus)](MP11_D_13171_jQuery/jQuery_Bonus_4_13171/) |

Tugas [Asinkron](Asinkron/) juga disertakan di repositori ini.

## MP11 — Advanced JavaScript using jQuery

Tugas 3 memakai `.hover()`, `.css()`, dan `.text()` untuk mengubah tampilan kartu seminar saat mouse masuk/keluar.
Tugas 4 (bonus) memakai `closest()`, `.find()`, `.val()`, `$.each()`, dan `.append()` untuk katalog dengan keranjang belanja yang menjumlahkan item berulang.

## Cara Menjalankan

**XHTML / CSS / JavaScript / jQuery**
Buka file `index.xhtml` langsung di browser, atau buka lewat GitHub Pages.
Tugas jQuery memuat library dari CDN sehingga memerlukan koneksi internet.

**PHP (MP8 & MP9)**
1. Salin/clone repositori ke folder `htdocs` XAMPP.
2. Jalankan Apache (dan MySQL untuk MP9).
3. Akses `http://localhost/250713171/MP8_D_13171_PHPBasic/PHP_Basic_1_13171/index.php`, dan seterusnya.
4. Sesuaikan pengaturan database di file `koneksi.php` pada MP9.

## Konvensi Penamaan

- Folder utama: `MP<nomor>_D_13171_<Topik>`
- Folder tugas: `<Topik>_<nomor>_13171`
- Format file praktikum: `index.xhtml` (kecuali MP8–MP9 menggunakan `index.php`)

## GitHub Pages

Untuk membuat link website pengumpulan: **Settings → Pages → Build and deployment → Deploy from a branch → `main` / `/ (root)` → Save**.
Setelah aktif, tautan berbentuk `https://yosef-kelfin.github.io/250713171/`.
