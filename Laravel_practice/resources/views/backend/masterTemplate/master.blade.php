<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Responsiive Admin Dashboard | CodingLab</title>
    @include('backend.includes.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!-- sidebar -->
    @include('backend.includes.sidebar')
    <!-- sidebar end -->
    <section class="home-section">
        <!-- navbar -->
        @include('backend.includes.navbar')
        <!-- navbar end -->
        <div class="home-content">

            <!-- over-view-box -->
            @yield('overView-content')
            <!-- over-view-box end -->

            <!-- main-conent -->
            @yield('main-content')
            <!-- main-conent end -->

        </div>
    </section>

    @include('backend.includes.js')

</body>

</html>