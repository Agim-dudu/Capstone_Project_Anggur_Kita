<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - User</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('sb-admin') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('sb-admin') }}/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.sidebar')

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.header')


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data User</h1>

                    <!-- DataTales Example -->
                    <!-- resources/views/user/edit.blade.php -->

                    <div class="container">
                        <h1>Edit User</h1>
                        <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- Nama -->
                            <div class="form-group">
                                <label for="name">Nama:</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ old('name', $user->name) }}" required>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control"
                                    value="{{ old('email', $user->email) }}" required>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <!-- Konfirmasi Password -->
                            <div class="form-group">
                                <label for="password_confirmation">Konfirmasi Password:</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>

                            <!-- First Name -->
                            <div class="form-group">
                                <label for="first_name">First Name:</label>
                                <input type="text" name="first_name" class="form-control"
                                    value="{{ old('first_name', $user->first_name) }}" required>
                            </div>

                            <!-- Last Name -->
                            <div class="form-group">
                                <label for="last_name">Last Name:</label>
                                <input type="text" name="last_name" class="form-control"
                                    value="{{ old('last_name', $user->last_name) }}" required>
                            </div>

                            <!-- Phone -->
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="text" name="phone" class="form-control"
                                    value="{{ old('phone', $user->phone) }}" required>
                            </div>

                            <!-- Province ID -->
                            <div class="form-group">
                                <label for="province_id">Province ID:</label>
                                <input type="text" name="province_id" class="form-control"
                                    value="{{ old('province_id', $user->province_id) }}" required>
                            </div>

                            <!-- Province -->
                            <div class="form-group">
                                <label for="province">Province:</label>
                                <input type="text" name="province" class="form-control"
                                    value="{{ old('province', $user->province) }}" required>
                            </div>

                            <!-- City ID -->
                            <div class="form-group">
                                <label for="city_id">City ID:</label>
                                <input type="text" name="city_id" class="form-control"
                                    value="{{ old('city_id', $user->city_id) }}" required>
                            </div>

                            <!-- City -->
                            <div class="form-group">
                                <label for="city">City:</label>
                                <input type="text" name="city" class="form-control"
                                    value="{{ old('city', $user->city) }}" required>
                            </div>

                            <!-- Address -->
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <textarea name="address" class="form-control" required>{{ old('address', $user->address) }}</textarea>
                            </div>

                            <!-- Postal Code -->
                            <div class="form-group">
                                <label for="postal_code">Postal Code:</label>
                                <input type="text" name="postal_code" class="form-control"
                                    value="{{ old('postal_code', $user->postal_code) }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update User</button>
                        </form>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Futal-Teknik 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sb-admin') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('sb-admin') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sb-admin') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sb-admin') }}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('sb-admin') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('sb-admin') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('sb-admin') }}/js/demo/datatables-demo.js"></script>

</body>

</html>
