<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Production Information System</title>

  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">

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
    <div class="container mx-auto max-w-full px-6">
      <div class="relative flex items-center justify-center h-20 sm:h-24">
        <div class="flex-1 sm:justify-start hidden sm:flex">
          <div class="flex flex-shrink-0 items-center">
            <button id="sidebar-btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 16.933 16.933" id="hamburger">
                <path style="fill: white" d="M1.971 1.323c-1.058 0-1.058 1.587 0 1.587h12.996c1.059 0 1.059-1.587 0-1.587zm13.018 6.35H1.97c-1.1-.043-1.1 1.65 0 1.587h12.996c1.08.042 1.101-1.587.022-1.587zM1.97 14.023c-1.058 0-1.058 1.587 0 1.587h12.996c1.059 0 1.059-1.587 0-1.587z"></path>
              </svg>
            </button>
          </div>
        </div>
        <div id="textmobile" class="text-center text-white sm:text-right sm:flex sm:flex-col sm:items-end sm:justify-end">
          <p class="text-2xl font-semibold sm:text-5xl">PT XYZ</p>
          <p class="text-lg sm:text-lg">Production Information System</p>
        </div>
      </div>
    </div>
  </nav>

  <!-- Tab bar mobile -->
  <nav class="fixed bottom-0 z-50 w-full bg-gray-300 border-t border-gray-200 block sm:hidden mb-8">
    <div class="flex h-16 justify-center items-center">
      <ul class="flex gap-10">
        <li>
          <a href="#" class="flex items-center px-3 py-3 rounded-lg hover:bg-gray-200 justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256" id="house">
              <path fill="none" stroke="#666" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="M151.99414,207.99263v-48.001a8,8,0,0,0-8-8h-32a8,8,0,0,0-8,8v48.001a8,8,0,0,1-7.999,8l-47.99414.00632a8,8,0,0,1-8.001-8v-92.4604a8,8,0,0,1,2.61811-5.91906l79.9945-72.73477a8,8,0,0,1,10.76339-.00036l80.0055,72.73509A8,8,0,0,1,216,115.53887V207.999a8,8,0,0,1-8.001,8l-48.00586-.00632A8,8,0,0,1,151.99414,207.99263Z"></path>
            </svg>
          </a>
        </li>
        <li>
          <button id="pembakaran-tabbar" type="button" class="flex items-center px-3 py-3 rounded-lg hover:bg-gray-200 justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" id="house" fill="#666" class="pl-1 pt-1">
              <path d="M12 24c-5 0-9-4-9-9 0-4 2.4-8.2 3.4-9.8C7 4.3 9.8 0 12 0c.6 0 1 .4 1 1s-.4 1-1 1c-1.4.2-7 7.4-7 13 0 3.9 3.1 7 7 7s7-3.1 7-7c0-.8-.1-1.6-.3-2.6-.5-1.9-1.4-4.1-2.7-6.1-.3-.5-.2-1.1.3-1.4.5-.3 1.1-.2 1.4.3 1.4 2.2 2.4 4.6 3 6.7.2 1.1.3 2.2.3 3.1 0 5-4 9-9 9z" />
              <path d="M15 9.9c-.3 0-.6-.1-.8-.3C12.1 7.2 11 4.2 11 1c0-.6.4-1 1-1s1 .4 1 1c0 2.7 1 5.3 2.7 7.3.4.4.3 1-.1 1.4-.1.1-.4.2-.6.2z" />
              <path d="M15 9.9c-.3 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4.7-.8 1.3-1.7 1.5-2.7.1-.5.7-.8 1.2-.7.5.1.9.7.7 1.2-.3 1.3-1.1 2.6-2 3.6-.2.2-.5.3-.7.3zM12 24c-2.8 0-5-2.2-5-5 0-3.1 3.1-8 5-8 .6 0 1 .4 1 1 0 .5-.4.9-.9 1-.7.4-3.1 3.6-3.1 6 0 1.7 1.3 3 3 3s3-1.3 3-3c0-.3-.1-.7-.2-1.2-.2-.9-.7-1.9-1.3-2.9-.3-.5-.2-1.1.3-1.4.5-.3 1.1-.2 1.4.3.7 1.1 1.3 2.4 1.6 3.5.1.6.2 1.1.2 1.7 0 2.8-2.2 5-5 5z" />
              <path d="M13.5 17c-.3 0-.6-.1-.8-.3-1.1-1.4-1.7-3-1.7-4.7 0-.6.4-1 1-1s1 .4 1 1c0 1.2.4 2.4 1.2 3.3.4.4.3 1-.1 1.4-.1.2-.4.3-.6.3z" />
            </svg>
          </button>
        </li>
        <li>
          <button id="inspeksi-tabbar" type="button" class="flex items-center px-3 py-3 rounded-lg hover:bg-gray-200 justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#666" class="pl-1 pt-1" id="search">
              <g data-name="Layer 2">
                <path d="m20.71 19.29-3.4-3.39A7.92 7.92 0 0 0 19 11a8 8 0 1 0-8 8 7.92 7.92 0 0 0 4.9-1.69l3.39 3.4a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zM5 11a6 6 0 1 1 6 6 6 6 0 0 1-6-6z" data-name="search"></path>
              </g>
            </svg>
          </button>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Sidebar Full -->
  <aside id="sidebar-full" class="fixed top-0 left-0 z-40 h-screen pt-28 border-r border-gray-200 w-64 px-4 pb-4 overflow-y-auto bg-gray-300 transition-transform -translate-x-full duration-300 drop-shadow-xl hidden sm:block">
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
  <aside id="sidebar-partial" class="fixed top-0 left-0 z-30 h-screen pt-28 border-r border-gray-200 w-20 px-4 pb-4 overflow-y-auto bg-gray-300 transition-transform hidden sm:block">
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
  <main id="scroll-container" class="min-h-[calc(100vh-64px)] pt-40 sm:ml-20 overflow-x-auto">
    <div class="grid relative place-items-center px-4">

      <div class="grid relative">
        <!-- Group 1 -->
        <div class="flex items-end">
          <div class="flex h-40 w-40 map-flex border-l-2  border-y-2 text-center">
            Proses Pembakaran
          </div>

          <div class="flex flex-none items-center justify-center text-gray-600 relative border-2 border-gray-500 w-36 h-72 text-center font-bold">
            <div class="grid border-y-2 border-l-2 items-center justify-center border-gray-500 absolute right-0 mb-16 w-14 h-14 text-3xs bg-gray-200 z-20">
              Proses Pencetakan
            </div>
            <div class="relative grid w-full h-full items-center justify-center text-2xs bg-gray-200 z-10">
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
              <div class="w-4"></div>
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

                  <button type="button" id="inspeksi-btn" data-template="inspeksi-card" class="grid items-center justify-center absolute left-0 bottom-0 bg-green-500 w-24 h-10 text-white border-2 border-red-600 bg-red-500 hover:bg-red-600 transition-all">Area Inspeksi & Pengecatan</button>
                </div>

                <button type="button" id="pembakaran-btn" data-template="pembakaran-card" class="grid relative items-center justify-center w-full h-full row-span-4 text-white border-2 border-red-600 bg-red-500 hover:bg-red-600 transition-all">
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
                <h3 class="font-bold text-base">Proses Pembakaran</h3>
                <div class="h-[1px] bg-gray-300 my-3"></div>
                <div class="text-sm text-left">
                  <span class="hidden" id="id"></span>
                  <p>Tanggal: <span id="cekwaktu"></span></p>
                  <h4 class="font-bold py-2">Suhu Pembakaran</h4>
                  <p>Celcius : <span id="ceksuhucel"></span> °C</p>
                  <p>Fahrenheit : <span id="ceksuhufah"></span> °F</p>
                </div>

                <button type="button" class="flex items-center justify-between w-full p-2 mt-4 text-sm text-white font-semibold rounded-lg bg-gray-700 hover:bg-gray-800" onclick="openModal('modal-pw', 'pembakaran-modal')">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" id="download">
                    <path fill="#fff" d="M12 4a1 1 0 0 0-1 1v9.529l-4.218-4.223a1.043 1.043 0 0 0-1.476 0 1.046 1.046 0 0 0 0 1.478l5.904 5.91c.217.217.506.319.79.305.284.014.573-.088.79-.305l5.904-5.91a1.046 1.046 0 0 0 0-1.478 1.043 1.043 0 0 0-1.476 0L13 14.529V5a1 1 0 0 0-1-1zM5 21a1 1 0 0 1 1-1h12a1 1 0 1 1 0 2H6a1 1 0 0 1-1-1z"></path>
                  </svg>
                  <span class="px-3 flex-grow text-center">Lihat semua data</span>
                </button>
              </div>
            </div>
          </div>
        </div>

        <div id="inspeksi-card" style="display: none;">
          <div data-tippy-root>
            <div class="popover">
              <div class="tippy-content">
                <h3 class="font-bold text-base">Proses Inspeksi</h3>
                <div class="h-[1px] bg-gray-300 my-3"></div>
                <div class="text-sm text-left">
                  <span class="hidden" id="genteng-id"></span>
                  <p>Tanggal Produksi: <span id="genteng-cekwaktu"></span></p>
                  <p>Status: <span id="genteng-status"></span></p>
                  <p class="font-bold">Total Produksi: <span id="genteng-total"></span></p>
                  <h4 class="font-bold py-2">Hasil Produksi</h4>
                  <p>Kualitas 1 : <span id="genteng-bagus"></span></p>
                  <p>Kualitas 2 : <span id="genteng-batuputih"></span></p>
                  <p>Kualitas 3 : <span id="genteng-retak"></span></p>
                </div>
                <button type="button" class="flex items-center justify-between w-full p-2 mt-4 text-sm text-white font-semibold rounded-lg bg-gray-700 hover:bg-gray-800" onclick="openModal('modal-pw', 'inspeksi-modal')">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" id="download">
                    <path fill="#fff" d="M12 4a1 1 0 0 0-1 1v9.529l-4.218-4.223a1.043 1.043 0 0 0-1.476 0 1.046 1.046 0 0 0 0 1.478l5.904 5.91c.217.217.506.319.79.305.284.014.573-.088.79-.305l5.904-5.91a1.046 1.046 0 0 0 0-1.478 1.043 1.043 0 0 0-1.476 0L13 14.529V5a1 1 0 0 0-1-1zM5 21a1 1 0 0 1 1-1h12a1 1 0 1 1 0 2H6a1 1 0 0 1-1-1z"></path>
                  </svg>
                  <span class="px-3 flex-grow text-center">Lihat semua data</span>
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Group 2 -->
        <div class="flex gap-x-52 mt-16 ml-24">
          <div class="map-flex border-2 w-52 h-20 text-center">
            Rak Penyimpanan Sementara
          </div>
          <div class="flex">
            <div class="map-flex border-2 w-40 h-20 text-center">
              Proses Pembakaran
            </div>
            <div class="flex flex-none items-center justify-center text-gray-600 relative border-y-2 border-r-2 border-gray-500 w-96 h-20 text-center font-bold">
              <div class="grid border-b-2 border-x-2 items-center justify-center border-gray-500 absolute top-0 right-0 mr-28 w-14 h-14 text-3xs bg-gray-200 z-20">
                Proses Pencetakan
              </div>
              <div class="grid border-b-2 border-x-2 items-center justify-center border-gray-500 absolute top-0 right-0 mr-12 w-14 h-14 text-3xs bg-gray-200 z-20">
                Proses Pencetakan
              </div>
              <div class="relative grid w-full h-full items-center justify-center text-2xs bg-gray-200 z-10">
                <div class="absolute left-0 ml-6 px-4">Rak Penyimpanan Sementara</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <div class="fixed z-50 w-full h-screen inset-x-0 inset-y-0 flex justify-center items-center hidden" data-info="" id="modal-pw">
    <div class="absolute inset-x-0 bg-white rounded-lg max-w-xs mx-auto h-fit p-4 space-y-3">
      <div class="flex justify-between items-center">
        <h4 class="text-base font-semibold">Password</h4>
        <button id="modal-close">
          <svg class="text-black h-5" viewbox="0 0 40 40" stroke-width="3" fill="transparent" stroke-linecap="round" stroke="currentColor">
            <path d="M 10,10 L 30,30 M 30,10 L 10,30" />
          </svg>
        </button>
      </div>
      <hr>
      <form id="form-dl" class="space-y-6" method="POST">
        <div class="space-y-2">
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Masukkan password untuk mengunduh file</label>
          </div>
          <div>
            <input id="password" name="password" type="password" autocomplete="current-password" placeholder="Password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-2" required>
          </div>
          <p id="status-dl" class="text-xs text-red-500"></p>
        </div>

        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-700 transition-all">Download</button>
        </div>
      </form>
    </div>
    <div class="w-full h-screen bg-black/40"></div>
  </div>


  <!-- Footer -->
  <footer class="fixed bottom-0 w-full">
    <div class="h-8 sm:h-16 bg-gray-200 sm:bg-gray-800 items-center justify-center grid">
      <div class="flex gap-x-2 text-xs sm:text-base">
        <p class="text-neutral-500 sm:text-neutral-200">© 2022</p>
        <p class="text-neutral-400 sm:text-neutral-400">S1 Teknik Industri - Universitas Telkom</p>
      </div>
    </div>
  </footer>

</body>

</html>