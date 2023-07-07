@extends('master')

@section('content')
    <main data-bs-spy="scroll" data-bs-target="#sidebarMenu" data-bs-offset="0" tabindex="0"
        class="scrollspy-example col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div id="cleaning">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Data Cleaning</h1>
            </div>
            <p>(Penjelasan singkat Data Cleaning tuh apa) Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor,
                ipsum incidunt facilis nobis veritatis perferendis magni, fuga tenetur eveniet reprehenderit perspiciatis
                quo. </p>

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

            <h5 class="text-center">Dataset TARGET Before VS After Data Cleaning</h5>
            <div class="d-flex justify-content-center mb-4">
                <div style="width: 32.5vw; height:22.5vw">{!! file_get_contents(public_path('html/target_before.html')) !!}</div>
                <div style="width: 32.5vw; height:22.5vw">{!! file_get_contents(public_path('html/target_after.html')) !!}</div>

            </div>
        </div>
        <div id="transformation" style="margin-top: 7vw">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-top">
                <h1 class="h2">Data Transformation</h1>
            </div>
            <p>(Penjelasan singkat Data Transformation tuh apa) Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Dolor, ipsum incidunt facilis nobis veritatis perferendis magni, fuga tenetur eveniet reprehenderit
                perspiciatis quo. </p>

            <div class="d-flex justify-content-center mb-3">
                <div class="d-flex mx-4">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm" style="width: 10vw">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">DAYS_OF_BIRTH</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1,001</td>
                                </tr>
                                <tr>
                                    <td class="text-center">1,002</td>
                                </tr>
                                <tr>
                                    <td class="text-center">1,003</td>
                                </tr>
                                <tr>
                                    <td class="text-center">1,003</td>
                                </tr>
                                <tr>
                                    <td class="text-center">1,004</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                    <div class="align-self-center">
                        <span data-feather="arrow-right">panah</span>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm" style="width: 10vw">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">DAYS_OF_BIRTH</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1,001</td>
                                </tr>
                                <tr>
                                    <td class="text-center">1,002</td>
                                </tr>
                                <tr>
                                    <td class="text-center">1,003</td>
                                </tr>
                                <tr>
                                    <td class="text-center">1,003</td>
                                </tr>
                                <tr>
                                    <td class="text-center">1,004</td>
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
                                    <th scope="col" class="text-center">DAYS_OF_BIRTH</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1,001</td>
                                </tr>
                                <tr>
                                    <td class="text-center">1,002</td>
                                </tr>
                                <tr>
                                    <td class="text-center">1,003</td>
                                </tr>
                                <tr>
                                    <td class="text-center">1,003</td>
                                </tr>
                                <tr>
                                    <td class="text-center">1,004</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                    <div class="align-self-center">
                        panah
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm" style="width: 10vw">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">DAYS_OF_BIRTH</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1,001</td>
                                </tr>
                                <tr>
                                    <td class="text-center">1,002</td>
                                </tr>
                                <tr>
                                    <td class="text-center">1,003</td>
                                </tr>
                                <tr>
                                    <td class="text-center">1,003</td>
                                </tr>
                                <tr>
                                    <td class="text-center">1,004</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="transformation">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-top">
                    <h1 class="h2">Feature Selection</h1>
                </div>
                <p>(Penjelasan yak) Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae sequi similique, fugit sunt odio animi itaque ipsum iusto consequatur in voluptatem cumque illo praesentium non odit eligendi aut commodi temporibus possimus? Nobis blanditiis neque corrupti cum accusamus quibusdam repellendus, repellat dolore at facilis explicabo, exercitationem expedita laboriosam nulla molestias! Libero.</p>
                <h5>Correlation Heatmap</h5>
                <div>{!! file_get_contents(public_path('html/correlation_heatmap.html')) !!}</div>
            </div>
    </main>
@endsection
