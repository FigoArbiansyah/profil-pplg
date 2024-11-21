<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
@include('components.head')

<body>
    <main class="overflow-x-hidden">
        @include('components.navbar')
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach($jumbotrons as $jumbotron)
                <div class="swiper-slide relative h-[80vh]">
                    <img src="{{ asset('storage/images/' . $jumbotron->images) }}" class="absolute top-0 left-0 w-full h-full object-cover">
                    <div
                        class="relative px-20 max-md:px-12 w-full h-full flex items-center bg-gradient-to-br from-gray-900 to-transparent">
                        <div>
                            <h1 class="text-white md:text-3xl text-xl font-bold">{{$jumbotron->title}}</h1>
                            <p class="text-white md:w-1/2 mt-2">{!!$jumbotron->paragraph!!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev swiper-button"></div>
            <div class="swiper-button-next swiper-button"></div>
            <!-- <div class="swiper-scrollbar"></div> -->
        </div>
        <!-- Button Contact -->
        @include('components.floating-button')
        <section class="md:px-20 px-8 min-h-screen grid place-items-center" id="tentang">
            <div class="flex justify-around items-start max-md:flex-col md:gap-0 gap-5">
                <div class="md:w-5/12 pt-6 max-md:pt-10" data-aos="zoom-in-right">
                    <p class="text-2xl font-semibold mt-1">
                        {{$about->title}}
                    </p>
                    <p class="mt-3 text-justify deskripsi-tentang">
                        {{substr($about->description, 0, 400) . "..."}}
                    </p>
                    <p class="mt-3 text-justify deskripsi-tentang-full hidden">
                        {{$about->description}}
                    </p>
                    <p class="mt-10 selengkapnya">
                        <a
                        href="#tentang"
                        onclick="showFullDesc()"
                        class="border border-[#1E3050] bg-[#1E3050] text-white py-3 px-5 hover:bg-transparent hover:text-[#1E3050] transition-all ease duration-300">Selengkapnya</a>
                    </p>
                    <p class="mt-10 lebih-sedikit hidden">
                        <a
                        href="#tentang"
                        onclick="showFullDesc()"
                        class="border border-[#1E3050] bg-[#1E3050] text-white py-3 px-5 hover:bg-transparent hover:text-[#1E3050] transition-all ease duration-300">Lebih sedikit</a>
                    </p>
                </div>
                <div class="md:w-5/12" data-aos="zoom-in-left">
                    <div class="w-full relative">
                        <img src="{{ asset('storage/images/' . $about->images) }}" alt="Background" class="object-contain border-top-left" />
                        <div class="w-full h-full border-image absolute top-8 left-8 -z-10"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="md:px-20 px-8 max-md:pt-10 py-10" id="keahlian">
            <div class="max-md:pt-10">
                <p class="text-3xl font-semibold">Konsentrasi Keahlian</p>
            </div>
            <div class="flex flex-wrap justify-around items-stretch gap-y-8 mt-10">
                @foreach($skills as $skill)
                <div class="md:w-3/12 w-full bg-smoke p-6" id="card-content" data-aos="fade-up" data-aos-delay="0">
                    <div class="text-center">
                        <i class="{{$skill->icon}} text-2xl"></i>
                        <p class="text-xl font-semibold my-3">{{$skill->title}}</p>
                        <p>
                            {{$skill->description}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <section class="mt-14">
            <div class="min-h-[50vh] flex flex-wrap">
                <div class="md:w-full w-full relative">
                    <div class="bg-[#3e54ac] h-full">
                        <img src="{{asset('img/chandra-demo-app.jpeg')}}" class="object-cover w-full h-[50vh]" alt="" />
                    </div>
                    <div
                        class="w-full h-full absolute flex justify-center items-center bg-gradient-to-br from-gray-800 to-transparent top-0">
                        <i class="fa-solid fa-play text-white text-4xl opacity-70 hover:text-soft-blue transition-all cursor-pointer"
                            id="play"></i>
                    </div>
                </div>
            </div>
        </section>
        <section class="md:px-20 px-3">
            <div class="flex flex-wrap min-h-[65vh] justify-center items-center">
                <!--<div class="md:w-1/2 w-full" data-aos="fade-right">-->
                <!--    <div class="md:w-75">-->
                <!--        <img src="./img/pc.png" alt="" class="w-full mx-auto" />-->
                <!--    </div>-->
                <!--</div>-->
                <div class="md:w-full w-full md:px-10 text-center" data-aos="fade-left">
                    <p class="text-3xl font-bold mb-8">
                        Mitra Industri Kami
                    </p>
                    <p class="mb-8">
                        Dunia Industri Pengembangan Perangkat Lunak dan Gim
                        adalah sektor ekonomi yang berkaitan dengan menciptakan, merancang, mengembangkan,
                        dan menghasilkan perangkat lunak (software) dan gim (games) yang
                        digunakan di berbagai perangkat elektronik seperti komputer, ponsel pintar, konsol game, dan perangkat lainnya.
                    </p>
                    <div class="md:w-2/3 w-full mx-auto flex flex-wrap gap-6 mt-8 justify-center items-center">
                        @foreach($softwares as $software)
                        <div class="w-24 h-24 grid place-items-center">
                            <img src="{{asset('storage/images/' . $software->images)}}" alt="{{$software->alt}}" title="{{$software->alt}}" class="object-contain w-full" />
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section id="mata-pelajaran" class="pt-14 bg-slate-50">
            <div class="min-h-[65vh]">
                <div class="text-center">
                    <p class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-black to-gray-600 inline">Mata Pelajaran</p>
                </div>
                <div class="grid md:grid-cols-4 grid-cols-1 auto-cols-max overflow-auto gap-6 md:px-24 px-5 pt-14 pb-36">
                    @foreach($mapels as $mapel)
                    <div class="rounded overflow-hidden relative aspect-video shadow group cursor-pointer">
                        <img src="{{asset('img/code.jpg')}}" class="w-full object-cover absolute top-0 left-0 z-10 group-hover:rotate-[10deg] transition-all ease duration-300 group-hover:scale-125" alt="">
                        <div class="w-full h-full bg-black bg-opacity-40 text-white flex justify-center items-center relative z-20">
                            <div class="px-3">
                                <p class="text-lg font-semibold text-center leading-[22px]">{{$mapel->name}}</p>
                                <span class="block mx-auto w-16 h-1 border-t-2 border-sky-600 mt-2"></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="md:px-10 px-3" id="artikel">
            <div class="my-5">
                <p class="text-3xl font-semibold" id="title">Artikel dan Berita</p>
            </div>
            <div class="flex gap-7 max-md:flex-wrap">
                <a href="{{'/artikel/'.$big_article->id}}" class="md:w-1/2 w-full">
                    <div class="h-[450px] mx-auto">
                        <img src="{{asset('storage/images/' . $big_article->images)}}" class="object-cover w-full h-full" alt="" />
                    </div>
                    <div class="mt-3">
                        <p class="text-gray-400 text-sm">
                            {{$big_article->author}} - {{$big_article->date}}
                        </p>
                        <p class="text-lg font-semibold my-1">
                            {{$big_article->title}}
                        </p>
                        <p class="text-gray-500">
                            {{substr($big_article->description, 0, 80)}}...
                        </p>
                        <div class="flex gap-x-4 mt-3">
                            <div class="badge border border-gray-600 text-sm text-gray-600 px-2">
                                {{$big_article->category_name}}
                            </div>
                        </div>
                    </div>
                </a>
                <div class="md:w-1/2 w-full flex flex-col gap-4 gap-y-6">
                    @foreach($articles as $article)
                    <a href="{{'/artikel/'.$article->id}}" class="flex max-md:flex-col gap-5">
                        <div class="h-[170px] max-md:h-[200px] md:w-1/2">
                            <img src="{{asset('storage/images/' . $article->images)}}" class="object-cover w-full h-full" alt="" />
                        </div>
                        <div class="md:pt-[5px] md:w-1/2">
                            <p class="text-gray-400 text-sm">
                                {{$article->author}} - {{$article->date}}
                            </p>
                            <p class="text-lg font-semibold">
                                {{$article->title}}
                            </p>
                            <p class="text-gray-500">
                                {{substr($article->description, 0, 80)}}...
                            </p>
                            <div class="flex gap-x-4 mt-3">
                                <div class="badge border border-gray-600 text-sm text-gray-600 px-2">
                                    {{$article->category_name}}
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="my-5 text-end">
                <a href="/artikel" class="bg-black py-3 px-5 text-white hover:bg-gray-800" id="title">Semua
                    Artikel</a>
            </div>
        </section>
        <section class="md:px-20 px-8 mt-20 bg-slate-50 relative" id="pengajar">
            <p class="text-3xl font-semibold absolute top-6 left-0 md:px-20 px-8 font-serif" id="title">
                Guru Pengajar
            </p>
            <div
                class="md:hidden flex items-center justify-start gap-7 min-h-screen relative max-md:flex-wrap pt-10 max-md:pt-28 overflow-hidden">
                <!-- Teacher's Profile Card -->
                @foreach($teachers as $teacher)
                <div class="md:min-w-[350px] w-full shadow-lg min-h-[380px] rounded">
                    <div class="h-[160px]">
                        <img src="{{asset('storage/images/' . $teacher->banner)}}" class="object-cover h-full w-full -z-50 rounded-tl rounded-tr"
                            alt="" />
                    </div>
                    <div class="p-[20px] bg-white">
                        <img src="{{asset('storage/images/' . $teacher->images)}}"
                            class="rounded-full w-24 h-24 object-cover profile mb-4 -mt-[75px]" alt="" />
                        <p class="text-lg font-semibold">{{$teacher->name}}</p>
                        <p class="text-sm text-gray-400 mb-4">{{$teacher->email}}</p>
                        <p class="text-gray-600">
                            {{$teacher->description}}
                        </p>
                    </div>
                </div>
                @endforeach
                <!-- End Teacher's Profile Card -->
            </div>
            <div
                class="max-md:hidden flex items-center justify-start gap-7 min-h-screen relative max-md:flex-wrap pt-10 max-md:pt-28 overflow-hidden items">
                <!-- Teacher's Profile Card -->
                @foreach($teachers as $teacher)
                <div class="md:min-w-[350px] w-full shadow-lg min-h-[380px] rounded">
                    <div class="h-[160px]">
                        <img src="{{asset('storage/images/' . $teacher->banner)}}" class="object-cover h-full w-full -z-50 rounded-tl rounded-tr"
                            alt="" />
                    </div>
                    <div class="p-[20px] bg-white">
                        <img src="{{asset('storage/images/' . $teacher->images)}}"
                            class="rounded-full w-24 h-24 object-cover profile mb-4 -mt-[75px]" alt="" />
                        <p class="text-lg font-semibold">{{$teacher->name}}</p>
                        <p class="text-sm text-gray-400 mb-4">{{$teacher->email}}</p>
                        <p class="text-gray-600">
                            {{$teacher->description}}
                        </p>
                    </div>
                </div>
                @endforeach
                <!-- End Teacher's Profile Card -->
            </div>
        </section>
        <section class="md:px-20 px-8 pt-20">
            <p class="mb-10 text-3xl font-semibold text-center font-serif" id="title">
                Alumni Kami?
            </p>
            <div class="swiper mySwiper" style="min-height: 65vh !important; padding-bottom: 5rem !important;">
                <div class="swiper-wrapper">
                    {{-- <div class="swiper-slide border rounded p-6 max-md:w-full w-3/12">
                        <div class="flex gap-3 items-center">
                            <div>
                                <img src="./img/profil.jpeg" class="w-20 h-20 rounded-full object-cover"
                                    alt="" />
                            </div>
                            <div>
                                <p class="text-lg font-semibold">Figo Arbiansyah</p>
                                <p class="text-gray-800">Front End Web Developer</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <p class="text-gray-600">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quaerat vero nemo dolorum, possimus expedita voluptatem nam
                                iure tenetur error nobis, delectus quod saepe accusantium
                                laboriosam autem ab. Reprehenderit, incidunt veritatis?
                            </p>
                        </div>
                    </div> --}}
                    @foreach($alumnis as $alumni)
                    <div class="swiper-slide rounded p-6 max-md:w-full w-3/12">
                        <div class="flex gap-3 items-center flex-col">
                            <div>
                                <img src="{{asset('storage/images/' . $alumni->images)}}" class="w-48 h-48 rounded-full object-cover"
                                    alt="" />
                            </div>
                            <div class="text-center">
                                <p class="text-lg font-semibold">{{$alumni->name}}</p>
                                <p class="text-gray-800">{{$alumni->profesi}}</p>
                            </div>
                        </div>
                        <div class="md:w-2/3 mt-4 mx-auto">
                            <p class="text-gray-600 text-center">
                                {{$alumni->words}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination" style="margin-bottom: 0rem !important;"></div>
            </div>
        </section>

        <!-- Modal Video -->
        <div class="fixed top-0 min-h-screen justify-center items-center w-full z-[99] hidden" id="modalBox"
            style="background: rgba(0, 0, 0, 0.6)">
            <iframe class="md:w-[560px] md:h-[315px] w-[460px] h-[215px]"
                src="{{$major->link_youtube}}" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
        <!-- End Modal Video -->
        <footer class="py-6 md:flex justify-between items-center bg-[#1E3050] md:px-[80px] px-5">
            <div class="text-center text-white mb-3 flex gap-x-3 items-center">
                {{-- <img src="./img/logo.png" alt="" class="w-12 h-12" /> --}}
                <p>Copyright &copy; {{ date('Y') }}, SMK Negeri 1 Cirebon</p>
            </div>
            <div class="text-start text-white mb-3">
                <p>{{$major->email}}</p>
                <p>{{$major->telp}}</p>
            </div>
        </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./main.js"></script>
    <script>
        AOS.init({
            offset: 40,
            once: true,
            duration: 700
        })

        const desc = document.querySelector(".deskripsi-tentang");
        const desc_full = document.querySelector(".deskripsi-tentang-full");
        const selengkapnyaBtn = document.querySelector(".selengkapnya");
        const sedikitBtn = document.querySelector(".lebih-sedikit");

        const showFullDesc = () => {
            desc.classList.toggle("hidden");
            desc_full.classList.toggle("hidden");
            selengkapnyaBtn.classList.toggle("hidden");
            sedikitBtn.classList.toggle("hidden");
        }
    </script>
    <script type="module">
      import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'

      const swiper = new Swiper('.swiper', {
          // Optional parameters
          direction: 'horizontal',
          loop: true,

          // If we need pagination
          pagination: {
            el: '.swiper-pagination',
          },

          // Navigation arrows
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },

          // And if we need scrollbar
          scrollbar: {
            el: '.swiper-scrollbar',
          },
        });

    </script>
</body>

</html>
