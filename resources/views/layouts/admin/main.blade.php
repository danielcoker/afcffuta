<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.admin.head')
</head>

<body class="page-sidebar-fixed page-header-fixed">

    <!-- Page Container -->
    <div class="page-container">

        <!-- Page Sidebar -->
    @include('layouts.admin.sidebar')
        <!-- /Page Sidebar -->

        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Header -->
                @include('layouts.admin.header')
            <!-- /Page Header -->

            <!-- Page Inner -->
                @yield('content')
            <!-- /Page Inner -->
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Container -->
    @include('layouts.admin.scripts')
</body>

</html>