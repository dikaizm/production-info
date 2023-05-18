<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/script.js" type="text/javascript"></script>
</head>

<body class="h-full bg-white">

  <!-- Navbar -->
  <nav class="fixed top-0 z-20 w-full bg-red-600 border-b border-red-500" aria-label="Navbar">
    <div class="mx-auto max-w-full px-6">
      <div class="relative flex h-24 items-center justify-between">
        <div class="flex flex-1 items-center items-stretch justify-start">
          <div class="flex flex-shrink-0 items-center">
            <button id="sidebar-btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 16.933 16.933" id="hamburger">
                <path style="fill: white" d="M1.971 1.323c-1.058 0-1.058 1.587 0 1.587h12.996c1.059 0 1.059-1.587 0-1.587zm13.018 6.35H1.97c-1.1-.043-1.1 1.65 0 1.587h12.996c1.08.042 1.101-1.587.022-1.587zM1.97 14.023c-1.058 0-1.058 1.587 0 1.587h12.996c1.059 0 1.059-1.587 0-1.587z"></path>
              </svg>
            </button>
          </div>
        </div>
        <div class="flex items-center items-stretch justify-end">
          <div class="flex flex-col text-white items-end">
            <p class="text-5xl">PT XYZ</p>
            <p class="text-lg">Production Information System</p>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Sidebar -->
  <aside class="fixed top-0 left-0 z-10 h-screen pt-28 border-r translate-x-0 transition-transform bg-gray-300 border-gray-200" aria-label="Sidebar">
    <!-- Full -->
    <div id="sidebar-full" class="h-full w-64 px-4 pb-4 overflow-y-auto bg-gray-300 hidden">
      <ul class="space-y-2 font-medium">
        <li>
          <a href="#" class="flex items-center p-2 text-gray-600 rounded-lg hover:bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256" id="house">
              <path fill="none" stroke="#666" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="M151.99414,207.99263v-48.001a8,8,0,0,0-8-8h-32a8,8,0,0,0-8,8v48.001a8,8,0,0,1-7.999,8l-47.99414.00632a8,8,0,0,1-8.001-8v-92.4604a8,8,0,0,1,2.61811-5.91906l79.9945-72.73477a8,8,0,0,1,10.76339-.00036l80.0055,72.73509A8,8,0,0,1,216,115.53887V207.999a8,8,0,0,1-8.001,8l-48.00586-.00632A8,8,0,0,1,151.99414,207.99263Z"></path>
            </svg>
            <span class="ml-3">Home</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center p-2 text-gray-600 rounded-lg hover:bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" id="house" fill="#666" class="pl-1 pt-1">
              <path d="M12 24c-5 0-9-4-9-9 0-4 2.4-8.2 3.4-9.8C7 4.3 9.8 0 12 0c.6 0 1 .4 1 1s-.4 1-1 1c-1.4.2-7 7.4-7 13 0 3.9 3.1 7 7 7s7-3.1 7-7c0-.8-.1-1.6-.3-2.6-.5-1.9-1.4-4.1-2.7-6.1-.3-.5-.2-1.1.3-1.4.5-.3 1.1-.2 1.4.3 1.4 2.2 2.4 4.6 3 6.7.2 1.1.3 2.2.3 3.1 0 5-4 9-9 9z" />
              <path d="M15 9.9c-.3 0-.6-.1-.8-.3C12.1 7.2 11 4.2 11 1c0-.6.4-1 1-1s1 .4 1 1c0 2.7 1 5.3 2.7 7.3.4.4.3 1-.1 1.4-.1.1-.4.2-.6.2z" />
              <path d="M15 9.9c-.3 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4.7-.8 1.3-1.7 1.5-2.7.1-.5.7-.8 1.2-.7.5.1.9.7.7 1.2-.3 1.3-1.1 2.6-2 3.6-.2.2-.5.3-.7.3zM12 24c-2.8 0-5-2.2-5-5 0-3.1 3.1-8 5-8 .6 0 1 .4 1 1 0 .5-.4.9-.9 1-.7.4-3.1 3.6-3.1 6 0 1.7 1.3 3 3 3s3-1.3 3-3c0-.3-.1-.7-.2-1.2-.2-.9-.7-1.9-1.3-2.9-.3-.5-.2-1.1.3-1.4.5-.3 1.1-.2 1.4.3.7 1.1 1.3 2.4 1.6 3.5.1.6.2 1.1.2 1.7 0 2.8-2.2 5-5 5z" />
              <path d="M13.5 17c-.3 0-.6-.1-.8-.3-1.1-1.4-1.7-3-1.7-4.7 0-.6.4-1 1-1s1 .4 1 1c0 1.2.4 2.4 1.2 3.3.4.4.3 1-.1 1.4-.1.2-.4.3-.6.3z" />
            </svg>
            <span class="ml-3">Proses Pembakaran</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center p-2 text-gray-600 rounded-lg hover:bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#666" class="pl-1 pt-1" id="search">
              <g data-name="Layer 2">
                <path d="m20.71 19.29-3.4-3.39A7.92 7.92 0 0 0 19 11a8 8 0 1 0-8 8 7.92 7.92 0 0 0 4.9-1.69l3.39 3.4a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zM5 11a6 6 0 1 1 6 6 6 6 0 0 1-6-6z" data-name="search"></path>
              </g>
            </svg>
            <span class="ml-3">Proses Inspeksi</span>
          </a>
        </li>
      </ul>
    </div>

    <!-- Partial -->
    <div id="sidebar-partial" class="h-full w-20 px-3 pb-4 overflow-y-auto bg-gray-300">
      <ul class="space-y-2 font-medium">
        <li>
          <a href="#" class="flex items-center px-2 py-2 rounded-lg hover:bg-gray-200 justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 256 256" id="house">
              <path fill="none" stroke="#666" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="M151.99414,207.99263v-48.001a8,8,0,0,0-8-8h-32a8,8,0,0,0-8,8v48.001a8,8,0,0,1-7.999,8l-47.99414.00632a8,8,0,0,1-8.001-8v-92.4604a8,8,0,0,1,2.61811-5.91906l79.9945-72.73477a8,8,0,0,1,10.76339-.00036l80.0055,72.73509A8,8,0,0,1,216,115.53887V207.999a8,8,0,0,1-8.001,8l-48.00586-.00632A8,8,0,0,1,151.99414,207.99263Z"></path>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <!-- Content -->
  <main class="grid h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center">
      <p class="text-base font-semibold text-indigo-600">404</p>
      <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Page not found</h1>
      <p class="mt-6 text-base leading-7 text-gray-600">Sorry, we couldn’t find the page you’re looking for.</p>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back home</a>
        <a href="#" class="text-sm font-semibold text-gray-900">Contact support <span aria-hidden="true">&rarr;</span></a>
      </div>
    </div>
  </main>


  <!-- Footer -->
  <footer>
    <div class="p-4 bg-gray-800">
      <div class="flex gap-x-2 text-center justify-center py-2">
        <p class="text-neutral-200">© 2023</p>
        <p class="text-neutral-400">S1 Teknik Industri - Universitas Telkom</p>
      </div>
    </div>
  </footer>

</body>

</html>