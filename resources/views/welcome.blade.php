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


    @livewireStyles

    </head>
    <body>

        <div class="container">

            {{-- @livewire('contact-create') --}}
            {{-- <livewire:contact-create></livewire:contact-create> --}}
            {{-- <livewire:contact.contact-edit :contact="2"></livewire:contact.contact-edit> --}}
           <div class="m-4">
               {{$slot}}
            </div>
        </div>

    @livewireScripts

    </body>
</html>
