<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Boostrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        {{-- <style>
            body {
                font-family: "Nunito";
                font-size: 16px;
            }
            div.container {
                width: 78%;
                margin: 0 auto;
            }
            form div, form label, form input {
                display:block;
            }

            form div {
                margin-bottom: 10px;
            }

            form input {
                padding: 5px;
                width: 100%;
                border-radius: 5px;
                border: none;
                border-bottom: 1px solid #ccc;
                outline: none;
            }

            form button {
                padding: 10px 15px;
                background: #036;
                border: 1px solid #000;
                border-radius: 5px;
                color: #fff;
                font-weight: bold;
            }

            div.error-message {
                color: #f00;
                font-weight: bold;
                padding-top: 4px;
            }

            .alert {
                position: relative;
                padding: .75rem 1.25rem;
                margin-bottom: 1rem;
                border: 1px solid transparent;
                border-radius: .25rem;
            }

            .alert-success {
                color: #155724;
                background-color: #d4edda;
                border-color: #c3e6cb;
            }
        </style> --}}

    @livewireStyles

    </head>
    <body class="">

        {{-- @livewire('contact-create') --}}
        <livewire:contact-create></livewire:contact-create>

    @livewireScripts

    </body>
</html>
