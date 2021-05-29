<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/main.css">

    <title>Movie app</title>
</head>

<body class="font-sans bg-gray-900 text-white">
  <nav class="border-b border-gray-800">
      <div class="container mx-auto px-4  flex-col md:flex-row flex items-center justify-between px-4 py-6">
          <ul class="flex flex-col md:flex-row items-center">
              <li>
                  <a href="#">movieApp</a>
              </li>
              <li class="md:ml-16 mt-3 md:mt-">
                  <a href="#" class="text-center hover::text-gray-300">movie</a>
              </li>
              <li class="md:ml-6 mt-3 md:mt-">
                  <a href="#" class="hover::text-gray-300">TV Shows</a>
              </li>
              <li class="md:ml-6 mt-3 md:mt-">
                  <a href="#" class="hover::text-gray-300">Actors</a>
              </li>
          </ul>
          <div class="items-center flex-col md:flex-row flex">
              <div class="relative mt-3 md:mt-">
                  <input type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 py-1 pl-8 focus:outline-none focus::shadow-outline" placeholder="Search">
                  <div class="absolute top-0">
                       <svg version="1.0" class="fill-current w-4 mt-2 ml-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M182.5.7C131.8 5.1 83 29.6 49.9 67.3-9.9 135.5-16.4 235 34.1 310.1c55.7 82.9 164.7 111.5 254.3 66.7 4.3-2.2 11.4-6.2 15.7-8.9 4.3-2.7 8.2-4.9 8.6-4.9.4 0 34.3 33.5 75.3 74.5 64.9 64.8 74.9 74.5 77.5 74.5 2.5 0 6.2-3.3 24.7-21.8S512 468 512 465.5c0-2.6-9.7-12.6-74.5-77.5-41-41-74.5-74.8-74.5-75.1 0-.3 2.6-4.8 5.7-10 42.6-70.5 38.4-157.8-10.7-223.4C324.6 35 274 6.6 218.1 1c-9.7-.9-26.5-1.1-35.6-.3zm46.9 49.2c52.9 11.3 96.4 49.5 113.5 99.7 6.1 18.1 7.5 26.8 7.5 49.4 0 17.4-.4 22-2.2 30.4-13.5 61-58.3 105.6-119.2 118.8-15.2 3.2-44.8 3.2-59.9 0-40.3-8.8-73.8-31.2-96.5-64.5-5.9-8.7-14.6-26.5-18-36.7-5.5-16.6-7-27-7-48 0-16.5.3-21.1 2.3-30C64 103.4 115.7 55.9 182 47.6c9.2-1.1 37.7.3 47.4 2.3z"/>
                       </svg>
                  </div>
              </div>
              <div class="md:ml-4 mt-3 md:mt-0">
                  <a href="#">
                      <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">
                  </a>
              </div>
          </div>
      </div>

  </nav>
   @yield('content')

</body>
</html>
