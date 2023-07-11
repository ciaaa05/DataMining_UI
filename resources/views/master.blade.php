<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Visualisasi Data Mining</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/master.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Data Mining</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <nav class="nav flex-column">
                    <a class="nav-link" href="/home"><h5>Home</h5></a>
                    <a class="nav-link" href="/preprocessing"><h5>Preprocessing</h5></a>
                    <nav class="nav flex-column">
                        <a class="nav-link ms-3" href="/preprocessing#cleaning"><h6> Data Cleaning</h6></a>
                        <a class="nav-link ms-3" href="/preprocessing#selection"><h6> Feature Selection</h6></a>
                        <a class="nav-link ms-3" href="/preprocessing#transformation"><h6> Data Transformation</h6></a>
                    </nav>
                    <a class="nav-link" href="/data-visualization"><h5>Data Visualization</h5></a>
                    <nav class="nav flex-column">
                        <a class="nav-link ms-3" href="/data-visualization#years-employed">YEARS_EMPLOYED</a>
                        <a class="nav-link ms-3" href="/data-visualization#age">AGE</a>
                        <a class="nav-link ms-3" href="/data-visualization#education-type">NAME_EDUCATION_TYPE</a>
                        <a class="nav-link ms-3" href="/data-visualization#gender">CODE_GENDER</a>
                        <a class="nav-link ms-3" href="/data-visualization#amount-credit">AMOUNT_CREDIT</a>
                        <a class="nav-link ms-3" href="/data-visualization#contract-type">NAME_CONTRACT_TYPE</a>
                        <a class="nav-link ms-3" href="/data-visualization#organization-type">ORGANIZATION_TYPE</a>
                        <a class="nav-link ms-3" href="/data-visualization#occupation-type">OCCUPATION_TYPE</a>
                    </nav>
                </nav>
            </nav>

            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
</body>

</html>
