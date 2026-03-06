<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin CMS Yayasan</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-gray-100">

  <div class="flex">

    <!-- SIDEBAR -->
    <aside class="w-64 h-screen bg-gray-900 text-white p-5">

      <h1 class="text-xl font-bold mb-6">
        CMS Yayasan
      </h1>

      <nav class="space-y-2">

        <a href="/admin/dashboard" class="block p-2 rounded hover:bg-gray-700">
          Dashboard
        </a>

        <a href="/admin/settings" class="block p-2 rounded hover:bg-gray-700">
          Settings
        </a>

        <a href="/admin/lembaga" class="block p-2 rounded hover:bg-gray-700">
          Lembaga
        </a>

        <a href="/admin/berita" class="block p-2 rounded hover:bg-gray-700">
          Berita
        </a>

        <a href="/admin/prestasi" class="block p-2 rounded hover:bg-gray-700">
          Prestasi
        </a>

        <a href="/admin/galeri" class="block p-2 rounded hover:bg-gray-700">
          Galeri
        </a>

        <a href="/admin/zakat" class="block p-2 rounded hover:bg-gray-700">
          Zakat
        </a>

      </nav>

    </aside>


    <!-- MAIN CONTENT -->
    <main class="flex-1">

      <!-- NAVBAR -->
      <header class="bg-white shadow p-4 flex justify-between">

        <h2 class="font-semibold">
          @yield('title')
        </h2>

        <div>

          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button class="text-red-500">
              Logout
            </button>

          </form>

        </div>

      </header>


      <!-- CONTENT -->
      <div class="p-6">

        @yield('content')

      </div>

    </main>

  </div>

</body>

</html>