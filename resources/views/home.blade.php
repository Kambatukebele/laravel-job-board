<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- FONT AWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- END FONT AWESOME --}}
    {{-- GOOGLE FONT  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
    {{-- END GOOGLE FONT --}}
    @vite('resources/css/app.css')
    <title>Document</title>
  </head>

  <body>
    <header class="w-full h-screen bg-hero bg-cover bg-center bg-no-repeat relative">
      {{-- Navigation --}}
      <div class="w-4/6 m-auto items-center">
        <div class="flex justify-between items-center h-24">
          <div class="w-48 h-20 flex items-center">
            <a href="#"><img class="w-44" src="{{ asset('images/logo-dark.png') }}" alt=""></a>
          </div>
          <nav class="w-96">
            <ul class="flex justify-between items-center">
              <a href="#">
                <li class="text-base text-black">Home</li>
              </a>
              <a href="#">
                <li class="text-base text-black">Jobs</li>
              </a>
              <a href="#">
                <li class="text-base text-black">Employers</li>
              </a>
              <a href="#">
                <li class="text-base text-black">Blog</li>
              </a>
            </ul>
          </nav>

          <div class="flex justify-between items-center w-72">
            <div class="">
              <i class="text-blue-600 text-xl fa-solid fa-magnifying-glass cursor-pointer"></i>
            </div>
            <div class="w-28 h-11 bg-sky-600 flex justify-center items-center rounded-lg py-2">
              <a class="text-white" href="#">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span class="text-base">Sign Up</span>
              </a>
            </div>
            <div class="w-28 h-11 bg-blue-600 flex justify-center items-center rounded-lg py-2">
              <a class="text-white" href="#">
                <i class="fa-solid fa-suitcase"></i>
                <span class="text-base">Post a job</span>
              </a>
            </div>
          </div>
        </div>
        {{-- end Navigation --}}

        {{-- TEXT AND IMAGE BLOCK --}}
        <div class="flex justify-between items-center content-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
          {{-- TEXT BLOCK --}}
          <div>
            <h1>GOT TALENT <br>MEET OPPORTUNITY</h1>
            <h4>Over<span>1800+</span>jobs are waiting for you</h4>
            <form action="">
              <div class="">
                <label for="WHAT">WHAT</label>
                <select name="job_title" id="job_title">
                  <option value="Web_developer">Web developer</option>
                  <option value="Web_designer">Web designer</option>
                  <option value="fullstack">Fullstack</option>
                  <option value="front_end">Front end</option>
                  <option value="back_end">Back end</option>
                </select>
              </div>
               <div class="">
                <label for="TYPE">TYPE</label>
                <select name="job_type" id="job_title">
                  <option value="Web_developer">Web developer</option>
                  <option value="Web_designer">Web designer</option>
                  <option value="fullstack">Fullstack</option>
                  <option value="front_end">Front end</option>
                  <option value="back_end">Back end</option>
                </select>
              </div>
               <div class="">
                <label for="LOCATION">LOCATION</label>
                <select name="job_location" id="job_title">
                  <option value="Web_developer">Web developer</option>
                  <option value="Web_designer">Web designer</option>
                  <option value="fullstack">Fullstack</option>
                  <option value="front_end">Front end</option>
                  <option value="back_end">Back end</option>
                </select>
              </div>
              <div>
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div>
                <button type="button">Find Job</button>
              </div>
            </form>
          </div>
          {{-- END TEXT BLOCK --}}

          {{-- IMAGE BLOCK --}}
          <div>
            <img src="{{ asset('/images/bnr-right-pic.png') }}" alt="image-hero">
          </div>
          {{-- END IMAGE BLOCK --}}
        </div>
      </div>
    </header>
  </body>

</html>