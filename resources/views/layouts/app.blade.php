<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>

<div class="bg-header-fon bg-no-repeat bg-cover bg-[center_right] pb-[75px]">

    <div class="mb-auto h-auto mx-24">

        <header class="relative h-100px pt-9 font-mont text-2xl">
            @include('inc.header')
        </header>

        <div class="pt-[75px]">
            @yield('header_bloc')
        </div>

    </div>

</div>

<div class="h-screen justify-between">

    <div class="mb-auto h-auto pt-[75px] container mx-auto">
        @yield('post_header_bloc')
    </div>

    <div class="bg-form-fon bg-no-repeat bg-cover pt-[120px] pb-[100px]">
        <div class=" ml-[650px]">
            @yield('form_bloc')
        </div>
    </div>

    <div class="mb-auto h-auto pt-[75px] container mx-auto">
        @yield('last_bloc')
    </div>

    <footer class=" h-[179px] bg-clay content-center">
        @include('inc.footer')
    </footer>

</div>

</body>
<script>
    document.getElementById('openModal').addEventListener('click', function() {
        fetch('/modal')
            .then(response => response.text())
            .then(html => {
                document.getElementById('modalContent').innerHTML = html;
                document.getElementById('modal').classList.remove('hidden');

                // Привязка события закрытия модального окна по кнопке
                document.getElementById('closeModal').addEventListener('click', function() {
                    document.getElementById('modal').classList.add('hidden');
                });
            })
            .catch(error => console.error('Ошибка:', error));
    });
</script>
</html>
