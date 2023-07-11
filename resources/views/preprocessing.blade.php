@extends('master')

@section('content')
    <main data-bs-spy="scroll" data-bs-target="#sidebarMenu" data-bs-offset="0" tabindex="0"
        class="scrollspy-example col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div id="cleaning">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Data Cleaning</h1>
            </div>
            <p class="text-justify">Data Cleaning merupakan proses persiapan data dengan mendeteksi dan memperbaiki atau menghapus kesalahan pada data seperti missing value, noise, dan lain sebagainya. Pada proses ini, dataset yang digunakan memiliki beberapa missing value dan outlier, sehingga perlu dilakukan proses data cleaning.
            </p>
            <p>Terdapat tiga cara yang digunakan untuk mengatasi missing value yang ada pada dataset. Pertama, mengisi missing value dengan suatu nilai baru. Kedua, replace missing value dengan central tendency seperti mean, median, atau modus. Ketiga, hapus baris data yang memiliki missing value. Salah satu contoh implementasi mengisi missing value dengan value baru ada pada attribute "OCCUPATION_TYPE" di mana missing valuenya diisi dengan value "Unknown". Kemudian contoh implementasi replace missing value dengan central tendency adalah attribute "CODE_GENDER" dimana terdapat empat missing value yang direplace dengan modusnya, yaitu "F". Lalu, beberapa kolom dengan persentase missing value >= 45% akan dihapus karena terlalu banyak missing value sehingga akan menyebabkan ketidakakuratan hasil analisis.</p>
            <p>Setelah melalui proses mengatasi missing value, hal yang harus dilakukan adalah mengatasi noise atau outlier pada data. Salah satu cara yang dapat digunakan adalah menghapus data outlier tersebut. Pada dataset yang digunakan, terdapat cukup banyak outlier pada suatu attribute. Outlier tersebut dihapus dengan suatu kondisi, contohnya pada attribute "CNT_CHILDREN" (banyak anak), data dengan banyak anak >= 7 dihapus. Selebihnya dapat dilihat pada gambar di bawah ini. </p>
            <div class="d-flex flex-column justify-content-center">
                <div class="m-auto mb-3">
                    <h5 class="text-center">Boxplot Before Data Outlier Removed</h5>
                    <img src="assets/before_remove_outlier.png" alt="" style="width: 60vw; height:30vw">
                </div>
                <div class="m-auto mb-3">
                    <h5 class="text-center mb-2">Boxplot After Data Outlier Removed</h5>
                    <img src="assets/after_remove_outlier.png" alt="" style="width: 55vw; height:35vw">
                </div>
            </div>

            <p>Setelah proses data cleaning dilakukan, dataset yang pada awalnya terdapat lebih dari 300.000 data, menjadi lebih dari 200.000 data. Visualisasi perbandingan data sebelum dan sesudah proses data cleaning dapat dilihat pada gambar di bawah ini.</p>

            <h5 class="text-center">Dataset TARGET Before VS After Data Cleaning</h5>
            <div class="d-flex justify-content-center mb-4">
                <div style="width: 32.5vw; height:22.5vw">{!! file_get_contents(public_path('html/target_before.html')) !!}</div>
                <div style="width: 32.5vw; height:22.5vw">{!! file_get_contents(public_path('html/target_after.html')) !!}</div>

            </div>
        </div>

        <div id="selection" style="margin-top: 7vw">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-top">
                <h1 class="h2">Feature Selection</h1>
            </div>
            <p>Feature Selection merupakan proses memilih attribute / feature yang berpengaruh terhadap TARGET dan
                menghilangkan attribute yang tidak relevan atau redudant. Proses ini bertujuan untuk meningkatkan efisiensi pemrosesan data serta memfasilitasi analisis yang lebih mudah. Pada dataset yang digunakan, ada lebih dari 120 attribute dimana belum tentu semua itu berpengaruh terhadap TARGET. Oleh karena itu, beberapa attribute yang dianggap tidak relevan atau redundant langsung dihapus dari data, seperti "FLAG_WORK_PHONE", "FLAG_DOCUMENT2", dan banyak attribute lainnya.
            </p>
            <p>Setelah itu, dilakukan proses mencari korelasi antar attribute dengan menggunakan heatmap seperti pada gambar dibawah. Kemudian, dilihat korelasi seluruh attribute dengan attribute 'TARGET'. Apabila nilai korelasi mendekati angka 1 atau -1, maka semakin tinggi korelasinya. Dari hasil yang didapatkan, diambil 6 attribute dengan korelasi tertinggi untuk dianalisa.
            </p>
            <div>{!! file_get_contents(public_path('html/correlation_heatmap.html')) !!}</div>
        </div>

        <div id="transformation" style="margin-top: 1vw">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-top">
                <h1 class="h2">Data Transformation</h1>
            </div>
            <p>Data transformasi merupakan sebuah tahap yang digunakan untuk mengubah dan memodifikasi data(variable) yang tidak sesuai maupun memiliki makna yang ambigu sehingga dapat lebih mudah dimengerti dan sesuai dengan kebutuhan analisis data. Contohnya pada atribut 'DAYS_BIRTH' yang berisi jumlah hari seseorang hidup diganti menjadi 'AGE' yang berisi jumlah tahun seseorang hidup (umur). Perbandingan data sebelum dan sesudah dilakukan data transformasi dapat dilihat pada tabel di bawah ini.
            </p>

            <div class="d-flex justify-content-center mb-3">
                <div class="d-flex mx-4">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm" style="width: 10vw">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">DAYS_BIRTH</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">-9461</td>
                                </tr>
                                <tr>
                                    <td class="text-center">-16765</td>
                                </tr>
                                <tr>
                                    <td class="text-center">-19046</td>
                                </tr>
                                <tr>
                                    <td class="text-center">-19005</td>
                                </tr>
                                <tr>
                                    <td class="text-center">-19932</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                    <div class="align-self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path
                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm" style="width: 10vw">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">AGE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">25</td>
                                </tr>
                                <tr>
                                    <td class="text-center">45</td>
                                </tr>
                                <tr>
                                    <td class="text-center">52</td>
                                </tr>
                                <tr>
                                    <td class="text-center">52</td>
                                </tr>
                                <tr>
                                    <td class="text-center">54</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex mx-4">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm" style="width: 10vw">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">DAYS_EMPLOYED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">-637</td>
                                </tr>
                                <tr>
                                    <td class="text-center">-1188</td>
                                </tr>
                                <tr>
                                    <td class="text-center">-2019</td>
                                </tr>
                                <tr>
                                    <td class="text-center">-3039</td>
                                </tr>
                                <tr>
                                    <td class="text-center">-3038</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                    <div class="align-self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path
                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm" style="width: 10vw">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">YEARS_EMPLOYED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                </tr>
                                <tr>
                                    <td class="text-center">8</td>
                                </tr>
                                <tr>
                                    <td class="text-center">8</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </main>
@endsection
