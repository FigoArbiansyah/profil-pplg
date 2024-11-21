<nav class="flex justify-between items-center py-2 md:px-14 px-3 bg-[#1E3050] relative">
    <div>
        <p class="text-white flex gap-x-2 items-center">
            <i class="fa-solid fa-phone"></i> 
            <span class="">{{$major->telp}}</span>
        </p>
    </div>
    <div class="flex gap-x-4">
        <span>
            <a href="{{$major->instagram}}">
                <i class="fa-brands fa-instagram text-white"></i>
            </a>
        </span>
        <span>
            <a href="{{$major->facebook}}">
                <i class="fa-brands fa-facebook text-white"></i>
            </a>
        </span>
        <span>
            <a href="{{$major->twitter}}">
                <i class="fa-brands fa-twitter text-white"></i>
            </a>
        </span>
    </div>
</nav>
<header class="z-50 transition-all ease duration-300">
    <!-- Navbar -->
    <nav class="flex justify-between items-center md:px-14 px-5 py-4 bg-white border-b">
      <div>
        <img src="./img/logo.png" alt="" class="w-10 h-10" />
      </div>
      <div class="max-md:hidden">
          <ul class="flex gap-x-4">
              <li>
                  <a href="#" class="">Beranda</a>
              </li>
              <li>
                  <a href="#tentang">Tentang</a>
              </li>
              <li>
                  <a href="#keahlian">Konsentrasi Keahlian</a>
              </li>
              <li>
                  <a href="#artikel">Berita</a>
              </li>
              <li>
                  <a href="#pengajar">Pengajar</a>
              </li>
          </ul>
      </div>
    </nav>  
</header>
<header class="absolute -top-96 z-50 transition ease duration-300" id="nav">
    <!-- Navbar -->
    <nav class="flex justify-between items-center md:px-14 px-5 py-3 bg-white border-b">
      <div>
        <img src="./img/logo.png" alt="" class="w-10 h-10" />
      </div>
      <div class="max-md:hidden">
          <ul class="flex gap-x-4">
              <li>
                  <a href="#" class="">Beranda</a>
              </li>
              <li>
                  <a href="#tentang">Tentang</a>
              </li>
              <li>
                  <a href="#keahlian">Konsentrasi Keahlian</a>
              </li>
              <li>
                  <a href="#artikel">Artikel</a>
              </li>
              <li>
                  <a href="#pengajar">Pengajar</a>
              </li>
          </ul>
      </div>
    </nav>  
</header>
{{-- <header class="sticky top-0">
    <nav class="sticky top-0 w-full z-50">
        <div class="flex justify-between items-center h-16 md:px-20 px-4" id="nav">
            <div class="logo">
                <img src="./img/logo.png" alt="" class="w-12 h-12" />
            </div>
            <div class="flex gap-4 max-md:hidden">
                <a href="#">
                    <span class="text-black">Beranda</span>
                </a>
                <a href="#tentang">
                    <span class="text-black">Tentang</span>
                </a>
                <a href="#keahlian">
                    <span class="text-black">Keahlian</span>
                </a>
                <a href="#artikel">
                    <span class="text-black">Artikel</span>
                </a>
                <a href="#pengajar">
                    <span class="text-black">Pengajar</span>
                </a>
            </div>
        </div>
    </nav>
</header> --}}
