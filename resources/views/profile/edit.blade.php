<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>Your Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            margin-top: 20px;
            background-color: #f2f6fc;
            color: #69707a;
        }

        .img-account-profile {
            height: 10rem;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .card {
            box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
        }

        .card .card-header {
            font-weight: 500;
        }

        .card-header:first-child {
            border-radius: 0.35rem 0.35rem 0 0;
        }

        .card-header {
            padding: 1rem 1.35rem;
            margin-bottom: 0;
            background-color: rgba(33, 40, 50, 0.03);
            border-bottom: 1px solid rgba(33, 40, 50, 0.125);
        }

        .form-control,
        .dataTable-input {
            display: block;
            width: 100%;
            padding: 0.875rem 1.125rem;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1;
            color: #69707a;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #c5ccd6;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.35rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .nav-borders .nav-link.active {
            color: #0061f2;
            border-bottom-color: #0061f2;
        }

        .nav-borders .nav-link {
            color: #69707a;
            border-bottom-width: 0.125rem;
            border-bottom-style: solid;
            border-bottom-color: transparent;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 0;
            padding-right: 0;
            margin-left: 1rem;
            margin-right: 1rem;
        }

    </style>
</head>

<body>
    <div class="container-xl px-4 mt-4">

        <nav class="nav nav-borders">
            <a class="nav-link active ms-0"
                href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details"
                target="__blank">Profile</a>
            <a class="nav-link" href="/" >Home</a>
        </nav>
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-12">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @elseif(session('warning'))
                <div class="alert alert-warning">
                    {{ session('warning') }}
                </div>
                @endif
            </div>

            <div class="col-xl-4">
                <!-- Your existing content -->
                @include('profile.partials.profile-picture')
                <!-- More content if needed -->

                <!-- Your existing content -->
                @include('profile.partials.delete-user-form')
                <!-- More content if needed -->

            </div>

            <div class="col-xl-8">

                <!-- Your existing content -->
                @include('profile.partials.update-profile-address-form')
                <!-- More content if needed -->

                <!-- Your existing content -->
                @include('profile.partials.update-profile-information-form')
                <!-- More content if needed -->

                <!-- Your existing content -->
                @include('profile.partials.update-password-form')
                <!-- More content if needed -->

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
    <script>
        $(document).ready(function () {
            // Update hidden fields when the province dropdown changes
            $('#province_id').on('change', function () {
                $('#province').val($('#province_id option:selected').text());
            });

            // Update hidden fields when the city dropdown changes
            $('#city_id').on('change', function () {
                $('#city').val($('#city_id option:selected').text());
            });

            // Ensure that the hidden inputs have values on form submission
            $('form').submit(function () {
                // If the province_id and city_id are selected, update the hidden inputs
                if ($('#province_id option:selected').val()) {
                    $('#province').val($('#province_id option:selected').text());
                }
                if ($('#city_id option:selected').val()) {
                    $('#city').val($('#city_id option:selected').text());
                }
            });
        });

    </script>
</body>

</html>
