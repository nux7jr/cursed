{{-- layout creater --}}

<!doctype html>
<html lang="ru">
<head>
   @include('includes.head')
</head>
<body class="font-sans text-base font-normal text-gray-700 dark:text-gray-200 bg-surface-100 dark:bg-surfacedark-100">

   <header>
       @include('includes.header')
   </header>

   <div class="flex flex-row gap-4 md:pl-24 px-2 md:pr-0 pt-20 md:pt-0">
        <aside>    
            @include('includes.aside')
        </aside>
        <main class="h-dvh">
             @yield('content')
        </main>
    </div>
   <footer>
       @include('includes.footer')
   </footer>
   @livewireScripts
</body>
</html>
