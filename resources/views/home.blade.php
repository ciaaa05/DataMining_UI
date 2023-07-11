@extends('master')

@section('content')
    <main data-bs-spy="scroll" data-bs-target="#sidebarMenu" data-bs-offset="0" tabindex="0"
        class="scrollspy-example col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="me-4">

            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Introduction</h1>
            </div>
            <img src="assets/banner.jpg" alt="" style="width: 100%; height:auto" class="mb-3">
            <p>
                Saat ini transaksi dengan metode pembayaran cashless terutama penggunaan kartu kredit sangat membludak karena kemudahannya dalam melakukan transaksi dan banyaknya promo yang menguntungkan dan menggiurkan bagi para pengguna kartu kredit. Akibatnya, banyak orang yang tertarik untuk menggunakan kartu kredit. Namun, para pengguna kartu kredit sering kali melakukan transaksi dengan metode pembayaran jenis ini tanpa adanya kontrol dalam penggunaan kartu kredit karena mengejar promo dan sebagainya. Ketidakmampuan dalam mengontrol penggunaan kartu kredit mengakibatkan kerugian pada perusahaan maupun instansi finansial karena banyaknya orang yang tidak mampu membayar tagihan kartu kredit yang mereka gunakan. Perusahaan maupun instansi tentu tidak dengan sembarangan memberikan pinjaman kepada customernya, namun syarat yang dibutuhkan dalam mendaftarkan pembuatan kartu kredit tidak mampu memprediksi secara tepat kemampuan bayar tagihan kartu kredit tersebut. Hal ini juga diakibatkan dari kesalahan manusia (Human Error) yang tidak mampu secara akurat memprediksi hal tersebut. Sehingga perusahaan tetap memberikan pinjaman kepada customer yang ingin membuat kartu kredit tanpa dapat memastikan apakah orang tersebut mampu membayar tagihan kartu kreditnya atau tidak.
            </p>
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Our Dataset</h1>
            </div>
            <p>
                Dataset ini berasal dari Kaggle yang diunggah pada tahun 2019 tanpa diketahui dataset ini berasal dari negara atau sumber yang jelas dengan 121 atribut dan lebih dari 300.000 data.
            </p>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">TARGET</th>
                            <th scope="col">NAME_CONTRACT_TYPE</th>
                            <th scope="col">CODE_GENDER</th>
                            <th scope="col">AMT_INCOME_TOTAL</th>
                            <th scope="col">AMT_CREDIT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Cash Loans</td>
                            <td>M</td>
                            <td>202500</td>
                            <td>406597.5</td>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>Cash Loans</td>
                            <td>F</td>
                            <td>270000</td>
                            <td>1293502.5</td>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>Revolving loans</td>
                            <td>M</td>
                            <td>67500</td>
                            <td>135000</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Revolving loans</td>
                            <td>M</td>
                            <td>180000</td>
                            <td>540000</td>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>Revolving loans</td>
                            <td>F</td>
                            <td>157500</td>
                            <td>315000</td>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>Cash Loans</td>
                            <td>M</td>
                            <td>90000</td>
                            <td>336150</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Cash Loans</td>
                            <td>F</td>
                            <td>135000</td>
                            <td>495216</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Revolving loans</td>
                            <td>F</td>
                            <td>73341</td>
                            <td>135000</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Cash Loans</td>
                            <td>M</td>
                            <td>121500</td>
                            <td>263686.5</td>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>Cash Loans</td>
                            <td>F</td>
                            <td>202500</td>
                            <td>225000</td>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>Cash Loans</td>
                            <td>F</td>
                            <td>157500</td>
                            <td>450000</td>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>Cash Loans</td>
                            <td>M</td>
                            <td>202500</td>
                            <td>526491</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Cash Loans</td>
                            <td>M</td>
                            <td>225000</td>
                            <td>1019205</td>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>Revolving loans</td>
                            <td>F</td>
                            <td>112500</td>
                            <td>540000</td>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>Revolving loans</td>
                            <td>F</td>
                            <td>225000</td>
                            <td>675000</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Revolving loans</td>
                            <td>M</td>
                            <td>270000</td>
                            <td>810000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </main>
@endsection
