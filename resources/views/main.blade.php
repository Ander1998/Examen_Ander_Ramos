<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the main view, the view to show the doctors
        @show

        <div class="container">
            @yield('content')
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
                <!-- TO DO: create the views of the create and asign pacients and create and edit doctors -->
                <!-- create the  -->
                <a href="/resources/views/createpacient.blade.php">Create Pacients</a>
                <a href="/resources/views/pacient.blade.php">Asign Pacients</a>
                <a href="/resources/views/doctor.blade.php">Doctors List</a>
                <a href="/resources/views/createdoctor.blade.php">Create Doctors</a>
            </nav>
        </div>
    </body>
</html>