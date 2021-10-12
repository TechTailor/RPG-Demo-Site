<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RPG Package @ Github</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @livewireStyles
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <div class="max-w-6xl mx-auto ml-2 mr-2 sm:px-6 lg:px-8">
            <div class="flex justify-center text-center flex-wrap pt-8 sm:pt-0">
                <span class="w-full mb-4 font-bold text-3xl hover:underline text-gray-900">Demo of Random Password
                    Generator (RPG)</span>

                <a href="https://github.com/TechTailor/RPG" target="_blank"
                    class="flex items-center text-xl md:mt-0 pl-3 pr-3 font-bold mr-1 bg-gray-200 p-2 hover:bg-gray-400 rounded-lg">
                    View this package on 
                    <img src="{{ asset('images/github.png') }}" class="h-5 w-5 ml-2 mr-2" alt="github-logo" />
                    Github
                </a>
            </div>
            <div class="sm:block">
                <div class="py-8">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>

            @livewire('package-demo')

            <div class="flex justify-end mt-4 items-center">
                <div class="text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <script type="text/javascript" src="https://cdnjs.buymeacoffee.com/1.0.0/button.prod.min.js"
                            data-name="bmc-button" data-slug="techtailor" data-color="#FF5F5F" data-emoji=""
                            data-font="Cookie" data-text="Buy me a coffee" data-outline-color="#000000"
                            data-font-color="#ffffff" data-coffee-color="#FFDD00">
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    @livewireScripts
    <!-- Notyf -->
    <script>
        const notyf = new Notyf({
                duration: 3000,
                dismissible: true,
                position: {
                    x: 'right',
                    y: 'top',
                }
            });
    </script>
    @stack('notyf')
</body>

</html>