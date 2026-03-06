<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Yayasan Admin</title>

  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />

  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            primary: "#f4c025",
            "background-light": "#f8f8f5",
            "background-dark": "#221e10",
            "sidebar-bg": "#064e3b",
          },
          fontFamily: {
            display: ["Lexend"]
          }
        }
      }
    }
  </script>

</head>

<body class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex">

  <!-- SIDEBAR -->

  <aside class="w-64 bg-sidebar-bg text-white flex flex-col fixed h-full">

    <div class="p-6 flex items-center gap-3">
      <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center">
        <span class="material-icons-outlined text-sidebar-bg">account_balance</span>
      </div>
      <span class="text-xl font-bold">YAYASAN</span>
    </div>

    <nav class="flex-1 mt-6 px-4 space-y-2">

      <a href="{{ route('admin.dashboard') }}"
        class="flex items-center gap-3 px-4 py-3 rounded-lg bg-primary text-sidebar-bg font-semibold">
        <span class="material-icons-outlined">dashboard</span>
        Dashboard
      </a>

      <a href="{{ route('admin.lembaga.index') }}"
        class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white/10">
        <span class="material-icons-outlined">corporate_fare</span>
        Lembaga
      </a>

      <a href="{{ route('admin.berita.index') }}"
        class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white/10">
        <span class="material-icons-outlined">newspaper</span>
        Berita
      </a>

      <a href="{{ route('admin.prestasi.index') }}"
        class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white/10">
        <span class="material-icons-outlined">emoji_events</span>
        Prestasi
      </a>

      <a href="{{ route('admin.galeri.index') }}"
        class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white/10">
        <span class="material-icons-outlined">collections</span>
        Galeri
      </a>

      <a href="{{ route('admin.zakat.index') }}"
        class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white/10">
        <span class="material-icons-outlined">payments</span>
        Zakat
      </a>

    </nav>

    <div class="p-4 border-t border-white/10">

      <a href="{{ route('admin.setting.index') }}"
        class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white/10">
        <span class="material-icons-outlined">settings</span>
        Settings
      </a>

      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-red-500/20 text-red-400 w-full text-left">
          <span class="material-icons-outlined">logout</span>
          Logout
        </button>
      </form>

    </div>

  </aside>

  <!-- MAIN -->

  <main class="ml-64 flex-1 flex flex-col min-h-screen">

    <header class="h-16 bg-white border-b flex items-center justify-between px-8">

      <h1 class="font-semibold text-lg">
        Admin Panel Yayasan
      </h1>

      <div class="text-sm text-gray-500">
        {{ auth()->user()->name ?? 'Admin' }}
      </div>

    </header>

    <div class="p-8">

      @yield('content')

    </div>

  </main>

</body>

</html>