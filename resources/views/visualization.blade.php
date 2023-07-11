@extends('master')

@section('content')
    <main data-bs-spy="scroll" data-bs-target="#sidebarMenu" data-bs-offset="0" tabindex="0"
        class="scrollspy-example col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div id="univariate">
            <div class="row align-items-start">
                @foreach ($data as $data)
                    <div id="{{ $data['slug'] }}"
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">{{ $data['title'] }}</h1>
                    </div>
                    <div class="col-7 mb-3">
                        <div class="card">
                            {!! file_get_contents(public_path('html/' . $data['slug'] . '.html')) !!}
                        </div>
                    </div>
                    <div class="col mb-3 me-4">
                        <div class="">
                            {!! $data['desc'] !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </main>
@endsection
