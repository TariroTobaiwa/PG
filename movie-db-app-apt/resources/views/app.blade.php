<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Tariro Tobaiwa">
        <meta name="generator" content="Tobaiwa 0.0.1">
        <title>Blockbuster Movies</title>

        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Favicons -->
        <meta name="theme-color" content="#7952b3">

        <style>
            .container{
                background: #fff;
            }
            .error{
                color:red;
            }
            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
        </style>
    </head>
    <body>
        <div id="app">
            <app></app>
        </div>
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        // Form Validation for New/Update Movie
        $(document).ready(function () {
            $('#form').validate({
                rules: {
                    title: {
                        required: true
                    },
                    plot: {
                        required: true,
                    },
                    year_released: {
                        required: true,
                        digits: true
                    },
                    leading_actors: {
                        required: true
                    },
                    director: {
                        required: true,
                    },
                    imdb_url: {
                        required: true,
                    },
                    imdb_score: {
                        required: true,
                        digits: true
                    },
                },

                errorElement: 'span',
                    errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },

                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
</html>
