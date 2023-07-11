<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function index(){
        $data = [
            [
                "slug" => 'years-employed',
                "title" => "YEARS_EMPLOYED",
                "desc" => '<p>Seiring bertambahnya tahun kerja, penggunaan kartu kredit pun menjadi menurun. Bisa dilihat penggunaan kartu kredit paling banyak terdapat pada orang yang baru kerja selama 0-9 tahun, kemudian semakin lama orang bekerja, penggunaan kartu kredit semakin menurun, terutama dari range 0-9 tahun ke 10-19 tahun kerja itu menurun drastis.</p>

                <h3> Mengapa bisa terjadi seperti ini? </h3>

                <ul>
                    <li> Pada awal tahun kerja, kebanyakan penghasilan orang masih belum stabil </li>
                    <li> Semakin lama bekerja, maka orang menjadi senior dan penghasilannya bisa meningkat dan stabil </li>
                    <li> Habit atau mindset orang yang baru awal kerja itu biasanya hedon. </li>
                    <li> Umumnya lama orang bekerja itu sekitar 20-30 tahun, sehingga jumlah orang yang mengajukan kredit dengan tahun kerja di atas 30 tahun semakin sedikit. </li>
                </ul>'
            ],
            [
                "slug" => 'age',
                "title" => "AGE",
                "desc" => '<p>Range usia orang menggunakan kartu kredit terdapat pada usia ke-20 sampai usia ke- 69. Ketika orang memasuki usia 30 tahun, penggunaan kartu kredit mulai meningkat. Lalu, menurun sedikit pada saat memasuki uisa ke-40 dan seterusnya. </p>

                <h3> Apa kira-kira yang melatarbelakangi ini? </h3>

                <ul>
                    <li> Pada umumnya, orang boleh mengajukan peminjaman kartu kredit ketika memasuki usia ke-18 </li>
                    <li> Pada umur 20 an, orang masih hidup sendiri, belum berkeluarga, sehingga penghasilan mereka cukup untuk diri mereka sendiri. </li>
                    <li> Pada umur 30 an, orang biasanya sudah berkeluarga dan tentu ada beberapa orang yang penghasilannya tidak mencukupi untuk kebutuhan keluarga, sehingga memerlukan kartu kredit .</li>
                    <li> Pada umur 60 an, orang biasanya sudah pensiun dan kebutuhan hidupnya dibantu oleh anak-anaknya, sehingga jarang sekali memerlukan kartu kredit untuk kebutuhan hidupnya. </li>
                </ul>'
            ],
            [
                "slug" => 'education-type',
                "title" => "NAME_EDUCATION_TYPE",
                "desc" => '<p>Orang yang memiliki pendidikan terakhir pada masa SMP paling banyak mengajukan peminjaman kartu kredit. Semakin tinggi pendidikan terakhir seseorang, maka kemungkinan orang itu untuk mengajukan peminjaman kartu kredit semakin menurun. </p>

                <h3> Bagaimana bisa terjadi seperti ini? </h3>

                <ul>
                    <li> Orang yang memiliki tingkat pendidikan terakhir yang rendah umumnya tidak bisa lanjut pendidikan karena uangnya tidak mencukupi, sehingga berdampak pada kebutuhan hidupnya juga. </li>
                    <li> Perusahaan kebanyakan menerima karyawan yang sudah memiliki gelar minimal S1, jadi membuat orang yang tidak punya gelar kesulitan untuk mencukupi kebutuhan hidupnya </li>
                </ul>'
            ],
            [
                "slug" => 'gender',
                "title" => "CODE_GENDER",
                "desc" => '<p>Wanita ternyata lebih dominan dalam mengajukan peminjaman kartu kredit dibandingkan pria. </p>

                <h3> Apa penyebabnya? </h3>

                <ul>
                    <li> Tidak bisa dipungkiri lagi, bahwa kebutuhan wanita lebih banyak dibandingkan pria. </li>
                    <li> Wanita lebih sering pergi berbelanja, misal belanja make-up, perhiasan, barang-barang lucu. </li>
                </ul>'
            ],
            [
                "slug" => 'amount-credit',
                "title" => "AMOUNT_CREDIT",
                "desc" => '<p>Jumlah kredit yang paling rendah yang diajukan oleh orang sebesar 45.000 dolar per tahun. Namun, rata-rata jumlah kredit yang diajukan orang sebesar 531.000 dolar per tahun. Akan tetapi, ada juga orang yang mengajukan jumlah kredit yang sangat besar yaitu mencapa 2.7 juta dolar per tahun. </p>

                <h3> Kira-kira, mengapa bisa berbeda-beda ya? </h3>

                <ul>
                    <li> Pastinya, kebutuhan setiap orang itu berbeda-beda, sehingga jumlah kredit yang diajukan juga bisa berbeda-beda </li>
                </ul>'
            ],
            [
                "slug" => 'contract-type',
                "title" => "NAME_CONTRACT_TYPE",
                "desc" => '<p>Tipe kontrak peminjaman yang digunakan dalam dataset ini adalah tipe cash loans (pinjaman tunai) dan tipe revolving loans (pinjaman bertahap). Cash loans yang ditampilkan dalam graph memiliki nilai dominan sebanyak 181.642 jauh lebih banyak dibandingkan nilai Revolving loans sebesar 20.005 data.</p>

                <h3> Hal ini disebabkan oleh beberapa faktor, seperti </h3>

                <ul>
                    <li> Kecepatan proses pengajuan hingga ke tahap dana diberikan pada tipe cash loans lebih cepat dibandingkan tipe revolving loans </li>
                    <li> Syarat untuk mendapatkan pinjaman melalui tipe loans lebih mudah karena tidak diperlukan jaminan selama durasi hutang </li>
                    <li> Jumlah pinjaman yang lebih terbatas di cash loans sehingga peminjam dapat membatasi penggunaan hutangnya </li>
                    <li> Suku bunga yang tinggi dan biaya-biaya tambahan lainnya pada tipe revolving loans menyebabkan cash loans lebih diminati </li>
                </ul>'
            ],
            [
                "slug" => 'organization-type',
                "title" => "ORGANIZATION_TYPE",
                "desc" => '<p>Banyak jenis organisasi yang menggunakan kartu kredit terutama Business entity (Badan Usaha), kemudian diikuti oleh wiraswasta dengan perbedaan yang cukup significan dibandingkan dengan Badan usaha. Kemudian di posisi terakhir ditempati oleh organisasi keagaaman.</p>

                <h3> Mengapa demikian? </h3>

                <ul>
                    <li> Kebutuhan besar yang tidak sebanding dengan pemasukan sehingga mengharuskan untuk menggunakan kartu kredit untuk memenuhi kebutuhan tersebut disaat yang dibutuhkan </li>
                    <li> Penggunaan kartu kredit mempermudah proses transaksi </li>
                    <li> Proses pengelolaan dan pencatatan keuangan lebih jelas dapat didokumentasikan dengan baik dan mudah </li>
                </ul>'
            ],
            [
                "slug" => 'occupation-type',
                "title" => "OCCUPATION_TYPE",
                "desc" => '<p>Tidak dapat dipungkiri, pengguna kartu kredit berasal dari berbagai jenis pekerjaan. Contohnya seperti labors sebesar 43.674 data yang sangat dominan dibandingkan dengan jenis pekerjaan berbeda dengan para pekerja staff IT sebesar 432 data.</p>

                <h3> Hal ini merupakan imbas dari </h3>

                <ul>
                    <li> Kebutuhan bulanan maupun kebutuhan mendesak yang tidak dapat ditutupi dari pendapatan yang dimiliki </li>
                </ul>'
            ],
            [
                "slug" => 'gender-vs-amount-credit',
                "title" => "CODE_GENDER VS AMOUNT_CREDIT",
                "desc" => 'lorem dulu'
            ],
            [
                "slug" => 'contract-type-vs-gender',
                "title" => "NAME_CONTRACT_TYPE VS CODE_GENDER",
                "desc" => 'lorem dulu'
            ]
        ];

        return view('visualization', compact('data'));
    }


}
