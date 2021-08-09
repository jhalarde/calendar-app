<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ mix('/css/app.css')}}">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
        <script src="{{ mix('/js/app.js')}}"></script>
        @livewireStyles
    </head>
    <body>
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
            <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-body bg-success text-white">
                    Successfully added event.
                </div>
            </div>
        </div>

        <livewire:calendar />
        
        @livewireScripts

        <script>
            let toast = new Bootstrap.Toast(document.getElementById('liveToast'))

            Livewire.on('event-added', ev => {
                toast.show();
            })
        </script>
    </body>
</html>
