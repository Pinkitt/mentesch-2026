<!DOCTYPE html> 
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amarna:ital,wght@0,100..700;1,100..700&family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
  <title>Kezdőlap</title>
</head>

<body class="flex flex-col min-h-screen text-white">

  <nav class="relative bg-[#49ab6d]/50 after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="flex items-center">
          <img src="logo_ver_2.png" alt="Mentesch logo" class="h-20 w-auto" />
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4 ml-4">
              <a href="/" aria-current="page" class="rounded-md bg-[#49aba8]/50 px-3 py-2 text-sm font-medium text-white">Kezdőlap</a>
              <a href="/allergenek" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Allergének</a>
              <a href="/etteremkereso" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Étterem kereső</a>
            </div>
          </div>
        </div>
        <div class="flex items-center space-x-4">
            <a href="/bejelentkezes" class="hover:text-indigo-400">Bejelentkezés</a>
        </div>
      </div>
    </div>
  </nav>

  <header class="relative shadow-sm">
    <div class="relative inline-block w-full px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 
                 text-white text-9xl font-bold drop-shadow-lg texto">
        {{$heading}}
      </h1>
    </div>
  </header>

  <main class="flex-grow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <p class="text-gray-300">
        {{ $slot }}
      </p>
    </div>
  </main>
  
  <footer class="bg-[#40694f] text-gray-300 px-8 py-6">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
      <div>
        <h2 class="text-xl font-semibold text-white">Mentesch</h2>
        <p class="text-sm mt-1">© 2025 Mentesch, Inc. Minden jog fenntartva.</p>
        <p class="text-sm">Ez az oldal iskolai vizsgamunka részeként készült, nem kereskedelmi célból.</p>
      </div>
      <div class="flex space-x-6">
        <a href="/allergenek" class="hover:text-indigo-400">Allergének</a>
        <a href="/etteremkereso" class="hover:text-indigo-400">Étterem kereső</a>
        <a href="/rolunk" class="hover:text-indigo-400">Rólunk</a>
      </div>
    </div>
  </footer>

</body>
</html>
