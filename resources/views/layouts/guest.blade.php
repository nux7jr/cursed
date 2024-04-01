<!doctype html>
<html lang="ru">
<head>
   @include('includes.head')
</head>
<body class="font-sans text-base font-normal text-gray-700 dark:text-gray-200 bg-surface-100 dark:bg-surfacedark-100">
   <header>
       guest header
   </header>

   <main>
        @yield('content')
    </main>
   <footer>
       footer guest
   </footer>
   @livewireScripts
</body>
</html>
