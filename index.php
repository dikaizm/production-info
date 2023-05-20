<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js" type="text/javascript"></script>

  <!-- Tippy js -->
  <script src="https://unpkg.com/popper.js@1"></script>
  <script src="https://unpkg.com/tippy.js@5/dist/tippy-bundle.iife.js"></script>

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body class="h-full bg-white">

  <!-- Navbar -->
  <nav class="fixed top-0 z-50 w-full bg-red-600 border-b border-red-500" aria-label="Navbar">
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

  <!-- Sidebar Full -->
  <aside id="sidebar-full" class="fixed top-0 left-0 z-40 h-screen pt-28 border-r border-gray-200 w-64 px-4 pb-4 overflow-y-auto bg-gray-300 transition-transform -translate-x-full duration-300 drop-shadow-xl">
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
        <button id="pembakaran-sidebar" type="button" class="flex w-full items-center p-2 text-gray-600 rounded-lg hover:bg-gray-200">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" id="house" fill="#666" class="pl-1 pt-1">
            <path d="M12 24c-5 0-9-4-9-9 0-4 2.4-8.2 3.4-9.8C7 4.3 9.8 0 12 0c.6 0 1 .4 1 1s-.4 1-1 1c-1.4.2-7 7.4-7 13 0 3.9 3.1 7 7 7s7-3.1 7-7c0-.8-.1-1.6-.3-2.6-.5-1.9-1.4-4.1-2.7-6.1-.3-.5-.2-1.1.3-1.4.5-.3 1.1-.2 1.4.3 1.4 2.2 2.4 4.6 3 6.7.2 1.1.3 2.2.3 3.1 0 5-4 9-9 9z" />
            <path d="M15 9.9c-.3 0-.6-.1-.8-.3C12.1 7.2 11 4.2 11 1c0-.6.4-1 1-1s1 .4 1 1c0 2.7 1 5.3 2.7 7.3.4.4.3 1-.1 1.4-.1.1-.4.2-.6.2z" />
            <path d="M15 9.9c-.3 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4.7-.8 1.3-1.7 1.5-2.7.1-.5.7-.8 1.2-.7.5.1.9.7.7 1.2-.3 1.3-1.1 2.6-2 3.6-.2.2-.5.3-.7.3zM12 24c-2.8 0-5-2.2-5-5 0-3.1 3.1-8 5-8 .6 0 1 .4 1 1 0 .5-.4.9-.9 1-.7.4-3.1 3.6-3.1 6 0 1.7 1.3 3 3 3s3-1.3 3-3c0-.3-.1-.7-.2-1.2-.2-.9-.7-1.9-1.3-2.9-.3-.5-.2-1.1.3-1.4.5-.3 1.1-.2 1.4.3.7 1.1 1.3 2.4 1.6 3.5.1.6.2 1.1.2 1.7 0 2.8-2.2 5-5 5z" />
            <path d="M13.5 17c-.3 0-.6-.1-.8-.3-1.1-1.4-1.7-3-1.7-4.7 0-.6.4-1 1-1s1 .4 1 1c0 1.2.4 2.4 1.2 3.3.4.4.3 1-.1 1.4-.1.2-.4.3-.6.3z" />
          </svg>
          <span class="ml-3">Proses Pembakaran</span>
        </button>
      </li>
      <li>
        <button id="inspeksi-sidebar" type="button" class="flex w-full items-center p-2 text-gray-600 rounded-lg hover:bg-gray-200">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#666" class="pl-1 pt-1" id="search">
            <g data-name="Layer 2">
              <path d="m20.71 19.29-3.4-3.39A7.92 7.92 0 0 0 19 11a8 8 0 1 0-8 8 7.92 7.92 0 0 0 4.9-1.69l3.39 3.4a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zM5 11a6 6 0 1 1 6 6 6 6 0 0 1-6-6z" data-name="search"></path>
            </g>
          </svg>
          <span class="ml-3">Proses Inspeksi</span>
        </button>
      </li>
    </ul>
  </aside>

  <!-- Sidebar Partial -->
  <aside id="sidebar-partial" class="fixed top-0 left-0 z-30 h-screen pt-28 border-r border-gray-200 w-20 px-4 pb-4 overflow-y-auto bg-gray-300 transition-transform">
    <ul class="space-y-2 font-medium">
      <li>
        <a href="#" class="flex items-center px-2 py-2 rounded-lg hover:bg-gray-200 justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256" id="house">
            <path fill="none" stroke="#666" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="M151.99414,207.99263v-48.001a8,8,0,0,0-8-8h-32a8,8,0,0,0-8,8v48.001a8,8,0,0,1-7.999,8l-47.99414.00632a8,8,0,0,1-8.001-8v-92.4604a8,8,0,0,1,2.61811-5.91906l79.9945-72.73477a8,8,0,0,1,10.76339-.00036l80.0055,72.73509A8,8,0,0,1,216,115.53887V207.999a8,8,0,0,1-8.001,8l-48.00586-.00632A8,8,0,0,1,151.99414,207.99263Z"></path>
          </svg>
        </a>
      </li>
      <li>
        <button id="pembakaran-sidebar-icon" type="button" class="flex items-center px-2 py-2 rounded-lg hover:bg-gray-200 justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" id="house" fill="#666" class="pl-1 pt-1">
            <path d="M12 24c-5 0-9-4-9-9 0-4 2.4-8.2 3.4-9.8C7 4.3 9.8 0 12 0c.6 0 1 .4 1 1s-.4 1-1 1c-1.4.2-7 7.4-7 13 0 3.9 3.1 7 7 7s7-3.1 7-7c0-.8-.1-1.6-.3-2.6-.5-1.9-1.4-4.1-2.7-6.1-.3-.5-.2-1.1.3-1.4.5-.3 1.1-.2 1.4.3 1.4 2.2 2.4 4.6 3 6.7.2 1.1.3 2.2.3 3.1 0 5-4 9-9 9z" />
            <path d="M15 9.9c-.3 0-.6-.1-.8-.3C12.1 7.2 11 4.2 11 1c0-.6.4-1 1-1s1 .4 1 1c0 2.7 1 5.3 2.7 7.3.4.4.3 1-.1 1.4-.1.1-.4.2-.6.2z" />
            <path d="M15 9.9c-.3 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4.7-.8 1.3-1.7 1.5-2.7.1-.5.7-.8 1.2-.7.5.1.9.7.7 1.2-.3 1.3-1.1 2.6-2 3.6-.2.2-.5.3-.7.3zM12 24c-2.8 0-5-2.2-5-5 0-3.1 3.1-8 5-8 .6 0 1 .4 1 1 0 .5-.4.9-.9 1-.7.4-3.1 3.6-3.1 6 0 1.7 1.3 3 3 3s3-1.3 3-3c0-.3-.1-.7-.2-1.2-.2-.9-.7-1.9-1.3-2.9-.3-.5-.2-1.1.3-1.4.5-.3 1.1-.2 1.4.3.7 1.1 1.3 2.4 1.6 3.5.1.6.2 1.1.2 1.7 0 2.8-2.2 5-5 5z" />
            <path d="M13.5 17c-.3 0-.6-.1-.8-.3-1.1-1.4-1.7-3-1.7-4.7 0-.6.4-1 1-1s1 .4 1 1c0 1.2.4 2.4 1.2 3.3.4.4.3 1-.1 1.4-.1.2-.4.3-.6.3z" />
          </svg>
        </button>
      </li>
      <li>
        <button id="inspeksi-sidebar-icon" type="button" class="flex items-center px-2 py-2 rounded-lg hover:bg-gray-200 justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#666" class="pl-1 pt-1" id="search">
            <g data-name="Layer 2">
              <path d="m20.71 19.29-3.4-3.39A7.92 7.92 0 0 0 19 11a8 8 0 1 0-8 8 7.92 7.92 0 0 0 4.9-1.69l3.39 3.4a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zM5 11a6 6 0 1 1 6 6 6 6 0 0 1-6-6z" data-name="search"></path>
            </g>
          </svg>
        </button>
      </li>
    </ul>
  </aside>

  <!-- Content -->
  <main class="min-h-[calc(100vh-64px)] pt-40 ml-14">
    <div class="grid relative place-items-center">

      <button type="button" value="export excel" onclick="window.open('controllers/export_excel.php')">Export excel</button>

      <div class="grid relative">
        <!-- Group 1 -->
        <div class="flex ml-16">
          <div class="flex flex-none items-center justify-center text-gray-600 relative border-2 border-gray-500 w-36 h-72 text-center font-bold">
            <div class="grid border-y-2 border-l-2 items-center justify-center border-gray-500 absolute right-0 mb-16 w-14 h-14 text-3xs bg-gray-200 z-30">
              Proses Pencetakan
            </div>
            <div class="relative grid w-full h-full items-center justify-center z-20 text-2xs bg-gray-200 z-20">
              <div class="absolute left-0 right-0 bottom-0 mb-16 px-4">Rak Penyimpanan Sementara</div>
            </div>
          </div>

          <!-- Row 1 -->
          <div class="flex flex-col gap-y-4 mt-4">
            <div class="flex">
              <div class="map-flex border-y-2 border-r-2 w-56 h-20 text-center">
                Rak Penyimpanan Sementara
              </div>
              <div class="map-grid border-y-2 border-r-2 w-14 h-20 text-center text-3xs">
                <div class="grid w-full h-full border-b-2 border-gray-500 row-span-3"></div>
                <div class="map-grid-item w-full h-full row-span-5">
                  Proses Pencetakan
                </div>
              </div>
              <div class="map-flex border-y-2 border-r-2 w-40 h-20 text-center">
                Rak Penyimpanan Sementara
              </div>
              <div class="map-grid border-y-2 border-r-2 w-14 h-20 text-center text-3xs">
                <div class="grid w-full h-full border-b-2 border-gray-500 row-span-3"></div>
                <div class="map-grid-item w-full h-full row-span-5">
                  Proses Pencetakan
                </div>
              </div>
              <div class="map-flex border-y-2 border-r-2 w-44 h-20 text-center">
                Rak Penyimpanan Sementara
              </div>
              <div class="map-flex border-y-2 w-24 h-20 text-center">
                Proses Penggilingan
              </div>
              <div class="map-flex border-2 w-48 h-24 text-center">
                Penyimpanan Bahan Baku
              </div>
            </div>

            <!-- Row 2 -->
            <div class="flex">
              <div class="map-flex relative border-y-2 border-r-2 w-52 h-40 text-center">
                Proses Penjemuran
              </div>
              <div class="grid relative items-center justify-center w-40 h-40 text-center font-bold text-gray-600 text-2xs">
                <div class="relative bg-gray-200 w-40 h-full border-b-2 border-gray-500 row-span-4 border-t-2 border-r-2">
                  <div class="grid items-center justify-center absolute left-0 top-0 bg-green-400 w-fit py-1 px-1 text-white border-2 border-green-500 text-3xs">Kualitas 1</div>
                  <div class="grid items-center justify-center absolute right-0 top-0 bg-yellow-400 w-fit py-1 px-1 text-white border-2 border-yellow-500 text-3xs">Kualitas 2</div>
                  <div class="grid items-center justify-center absolute right-0 top-0 mt-8 bg-red-400 w-fit py-1 px-1 text-white border-2 border-red-500 text-3xs">Kualitas 3</div>

                  <button type="button" id="inspeksi-btn" data-template="inspeksi-card" class="grid items-center justify-center absolute left-0 bottom-0 bg-green-500 w-24 h-10 text-white border-2 border-green-600 hover:bg-green-600">Area Inspeksi & Pengecatan

                  </button>
                </div>

                <button type="button" id="pembakaran-btn" data-template="pembakaran-card" class="grid relative items-center justify-center w-full h-full row-span-4 text-white border-b-2 border-r-2 border-green-600 bg-green-500 hover:bg-green-600">
                  Proses Pembakaran
                </button>

              </div>
            </div>
          </div>
        </div>

        <!-- Popover -->
        <div id="pembakaran-card" style="display: none;">
          <div data-tippy-root>
            <div class="popover">
              <div class="tippy-content">
                <h3 class="font-bold text-sm">Proses Pembakaran</h3>
                <div class="h-[1px] bg-gray-300 my-3"></div>
                <div class="text-xs text-left">
                  <span class="hidden" id="id"></span>
                  <p>Tanggal: <span id="cekwaktu"></span></p>
                  <h4 class="font-bold py-2">Suhu Pembakaran</h4>
                  <p>Celcius : <span id="ceksuhucel"></span> °C</p>
                  <p>Fahrenheit : <span id="ceksuhufah"></span> °F</p>
                </div>
                <button
                  type="button"
                  onclick="window.open('controllers/pembakaran/export_excel.php')"
                  class="bg-gray-700 w-full px-2 py-2 mt-4 text-xs rounded-lg text-white font-semibold"
                  >Lihat semua data</button>
              </div>
            </div>
          </div>
        </div>

        <div id="inspeksi-card" style="display: none;">
          <div data-tippy-root>
            <div class="popover">
              <div class="tippy-content">
                <h3 class="font-bold text-sm">Proses Inspeksi</h3>
                <div class="h-[1px] bg-gray-300 my-3"></div>
                <div class="text-xs text-left">
                  <span class="hidden" id="genteng-id"></span>
                  <p>Tanggal Produksi: <span id="genteng-cekwaktu"></span></p>
                  <p class="font-bold">Total Produksi: <span id="genteng-total"></span></p>
                  <h4 class="font-bold py-2">Hasil Produksi</h4>
                  <p>Kualitas 1 : <span id="genteng-bagus"></span></p>
                  <p>Kualitas 2 : <span id="genteng-batuputih"></span></p>
                  <p>Kualitas 3 : <span id="genteng-rusak"></span></p>
                </div>
                <button
                  type="button"
                  onclick="window.open('controllers/inspeksi/export_excel.php')"
                  class="bg-gray-700 w-full px-2 py-2 mt-4 text-xs rounded-lg text-white font-semibold"
                  >Lihat semua data</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Group 2 -->
        <div class="flex gap-x-52 mt-16">
          <div class="map-flex border-2 w-52 h-20 text-center">
            Rak Penyimpanan Sementara
          </div>
          <div class="flex">
            <div class="map-flex border-2 w-40 h-20 text-center">
              Proses Pembakaran
            </div>
            <div class="flex flex-none items-center justify-center text-gray-600 relative border-y-2 border-r-2 border-gray-500 w-96 h-20 text-center font-bold">
              <div class="grid border-b-2 border-x-2 items-center justify-center border-gray-500 absolute top-0 right-0 mr-28 w-14 h-14 text-3xs bg-gray-200 z-30">
                Proses Pencetakan
              </div>
              <div class="grid border-b-2 border-x-2 items-center justify-center border-gray-500 absolute top-0 right-0 mr-12 w-14 h-14 text-3xs bg-gray-200 z-30">
                Proses Pencetakan
              </div>
              <div class="relative grid w-full h-full items-center justify-center z-20 text-2xs bg-gray-200 z-20">
                <div class="absolute left-0 ml-6 px-4">Rak Penyimpanan Sementara</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="w-full">
    <div class="h-16 bg-gray-800 grid items-center justify-center">
      <div class="flex gap-x-2">
        <p class="text-neutral-200">© 2022</p>
        <p class="text-neutral-400">S1 Teknik Industri - Universitas Telkom</p>
      </div>
    </div>
  </footer>

</body>

</html>