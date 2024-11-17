<!-- <?php
include 'function.php';




$user = query('SELECT * FROM users');
$skill = query('SELECT * FROM skill');
$service = query('SELECT * FROM services');
$portofolio= query('SELECT * FROM portofolio');
$experiences = query('SELECT * FROM experiences');
$testimony= query('SELECT * FROM testimony');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- tailwind cli -->
    <link rel="stylesheet" href="css/style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- typed js -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <!-- testimony css -->
     <link rel="stylesheet" href="css/testi.css">

     <!-- testimony javascript -->
      <script src="js/testi.js" defer></script>
    <!-- cdn tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.css" rel="stylesheet">
  <!-- Tailwind CSS (Optional if you don't use Flowbite's default) -->
  <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>

  <!-- alpine js -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style>
        html{
            scroll-behavior: smooth;
        }

        #home{
            background-image: url('../img/bgcoba.png');
            min-height: 100vh;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .gg h3,span,p,button{
            transition: .3s ease-in-out;
        }

    </style>
</head>
<body class="overflow-x-hidden bg-slate-200">


    <!-- bagian navbar -->
    <div id="home" class="m-0 grid w-screen relative dark:bg-black ">

        <div class="flex mx-auto w-screen  h-14 z-20 justify-around  bg-whit fixed" id="navbar" style="transition: .3s ease;">
            <div class="flex gap-1 items-center left-3 relative">
                <div class="w-7 h-7 bg-blue-500 rounded-full flex"><span class="m-auto block text-white">F</span></div>
                <span class="text-blue-500 font-semibold text-lg font-serif">Farhan</span>
            </div>
            <div class="flex items-center gap-10">
                <a href="#home" class="font-medium text-sm">Home</a>
                <a href="#skill" class="font-medium text-sm">skill</a>
                <a href="#portofolio" class="font-medium text-sm">portfolio</a>
                <a href="#experience" class="font-medium text-sm">experience</a>
                <a href="#service" class="font-medium text-sm">service</a>
                <a href="#testimony" class="font-medium text-sm">testimony</a>
            </div>
            <div class="flex items-center">
                <a href="" class="text-yellow-300 text-sm">farhan@gmail.com</a>
            </div>
        </div>

        <!-- bagian home -->
         <?php foreach($user as $u): ?>
        <div class="flex items-center justify-between w-11/12 h-screen content-center ">
            <div class="w-12 h-56 grid content-center bg-white ml-0 rounded-e-lg overflow-hidden shadow-xl shadow-slate-200 border-[.5px] border-slate-300 ">
                <div class="mx-auto block text-3xl  p-3 hover:bg-slate-400"><a class="" href="https://github.com/Farhan-Adi-C" target="_blank" ><i class="fa-brands fa-github"></i></a></div>
                <div class="mx-auto block text-3xl  p-3 hover:bg-slate-400"><a class="" href="https://www.instagram.com/farhanadichandra1/" target="_blank"><i class="fa-brands fa-instagram"></i></a></div>
                <div class="mx-auto block text-3xl  p-3 hover:bg-slate-400"><a class="" href="https://x.com/FarhanAdiChand2" target="_blank"><i class="fa-brands fa-twitter"></i></a></div>
                <div class="mx-auto block text-3xl  p-3 hover:bg-slate-400"><a class="" href="https://wa.me/qr/OU4WYMGN6XPED1" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></div>
            </div>
            <div class="w-[34rem] relative right-2 top-16">
                <h3 class=" flex text-4xl font-medium fa-bea xs:text-xl">Hello Everyone <span class="fa-beat block ml-3 text-3xl">👋</span></h3>
                <h1 class="text-[4.9rem] font-semibold ">I'm <span id="judul" class="text-blue-600"></span></h1>
                <p class="mt-2 font-[380]">Welcome to My website. Find more information about me on this website. You can also give me any feedback</p>
                <div class="flex mt-6">
                    <a class="bg-blue-500 text-white px-5 py-1 rounded-lg mr-2 hover:bg-blue-600 hover:text-slate-100" href="">Read More</a>
                    <a class="px-4 py-1 rounded-sm bg-gray-300 border-[1px] border-slate-900 hover:bg-gray-400 " href=""><span>Download CV</span><i class="relative left-2 fa-duotone fa-solid fa-download"></i></a>
                </div>
                <div class="mt-28 invisible" id="skill2">dfd</div>
            </div>
            <div class="relative -bottom-[2rem] right-2 bg-white rounded-full overflow-hidden h-[22rem] w-[22rem] shadow-xl hover:brightness-90 duration-300 border-2 border-slate-300">
                <img src="../img/<?= $u['image_user']?>" class="transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
            </div>
            
        </div>
       
    </div>
    <?php endforeach;?>
    

    <!-- skill -->
     <div id="skill" class=" bg-slate-200 relative w-screen h-[45rem]">
        <div class="relative top-24 ">
            <div class="mx-auto relative mb-7">
            <h3 class="font-bold text-blue-600 text-center text-xl relative">→MY SKILLS</h3>
            <h1 class="font-semibold text-center text-5xl mt-2">What I Do</h1>
            </div>

            <div class=" w-11/12  mx-auto mb-10 ">
                
                <div class="w-11/12 flex justify-center flex-wrap mx-auto">

            <?php foreach($skill as $s): ?>
                    <div class="overflow-hidden w-1/5 h-52 bg-white m-3 shadow-lg rounded-lg"> 
                        <img src="../img/<?= $s['image_skill'] ?>" class="w-9 m-3 items-end" >
                        <h3 class="text-base font-bold ml-3 my-3"><?= $s['name_skill']?></h3>
                        <p class="font-normal text-xs mx-3 text-justify"><?= $s['information_skill'] ?></p>
                    </div>
            <?php endforeach;?>
                </div>
            </div>
         </div>
     </div>

     <!-- service -->
      <div id="service" class="w-screen h-screen relative dark:bg-black bg-slate-200">
        <div class="relative top-20">
            <h2 class="text-center font-bold text-4xl">Our Services</h2>
            <h3 class="text-center text-blue-500 mt-3 ">I have the best services for You</h3>

            <div class="flex justify-center gap-10 mx-auto w-4/5 mt-20">
                <?php $i = 1;?>
                <?php foreach($service as $ser):?>
                    
                <div style="transition: .3s ease-in-out;" class="gg w-[17rem] h-[21rem] bg-white shadow-xl rounded-md group hover:bg-blue-500">
                    <div class="flex justify-between content-center items-center w-10/12 mx-auto mt-4 ">
                        <span class="font-semibold text-4xl text-slate-400 group-hover:text-slate-300"><?= $i?></span>
                        <div style="transition: .3s ease-in-out;" class="w-16 h-16 text-5xl flex items-center content-center text-blue-500 group-hover:text-slate-100"><i class="fa-solid fa-<?= $ser['logo_service'];?>"></i></div>
                    </div>
                    <h3 class="font-semibold text-xl mt-7 ml-3 group-hover:text-white"><?= $ser['name_service'] ?></h3>
                    <p class="px-4 text-justify mt-3 text-sm text-slate-600 group-hover:text-slate-100"><?= $ser['information_service'] ?></p>
                    
                    <button class="px-4 border-[1px] h-8 text-sm rounded-sm m-3 mt-8 border-blue-600 group-hover:bg-white group-hover:border-slate-600 group-hover:text-blue-600">Read More</button>
                </div>
                <?php $i++;?>
                <?php endforeach; ?>

               
                
            </div>
        </div>
      </div>
    


      <!-- portofolio -->

     
       
<div id="portofolio" class="w-screen h-full  bg-slate-100 py-24 mb-14">
    <h3 class="text-center text-blue-500">Portofolio</h3>
    <h3 class="text-center text-4xl font-bold">See my Recent Project</h3>
    <p class="text-center mt-2 font-light w-10/12 mx-auto">My portfolio showcases a diverse range of web development projects, highlighting my expertise in creating intuitive,high-performance websites and applications that meet client needs and exceed expectations.</p>
    <div id="default-carousel" class="relative w-8/12 mx-auto top-20"  data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-72 overflow-hidden rounded-lg md:h-96 " >
            <!-- Item 1 -->
             <?php foreach($portofolio as $por):?>
            <div  class="grid duration-700 ease-in-out hover group" data-carousel-item>
                <img src="../img/<?= $por['image_portofolio']?>" style="z-index: -100;" class="absolute  block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 \" alt="..."><div class="w-[100%]  h-[100%] relative top-10 hover:-top-52 items-end content-end mx-auto " style="transition: .5s ease;"><h3 class="text-center text-4xl text-white bg-gradient-to-t from-black to-transparent bg-opacity-20 bg-black content-center h-52 relative top-52 font-semibold "><?= $por['name_portofolio']?></h3></div>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div>


    <!-- experience -->
     <h2 class="text-center text-6xl mt-24 font-bold">Experience</h2>
  <div class="w-full">
  <div class="grid w-9/12 mx-auto mt-16 items-center content-center" x-data="{ selected: null }">
    <ul>
      <!-- Item 1 -->
      <?php $angka = 1; ?>
      <?php foreach ($experiences as $ex): ?>
      <li class="relative">
        <div class="bg-white h-full py-4 px-2 border-b-4 border-blue-900 rounded-xl grid items-center">
          <div class="flex justify-between items-center">
            <div class="flex ml-5 gap-8 items-center">
              <span class="text-5xl font-bold text-blue-600"><?= $angka ?></span>
              <div class="grid items-center h-20">
                <h3 class="text-2xl font-bold"> <?= $ex['name_experience'] ?> </h3>
                <p class="text-slate-700"> <?=$ex['place_experience'] ?>  </p>
              </div>
            </div>
            <div class="w-20 text-4xl text-blue-600 group">
              <button @click="selected !== <?= $angka ?> ? selected = <?= $angka ?> : selected = null">
                <i class="fa-solid fa-arrow-right transition-transform" :class="selected === <?= $angka ?> ? 'rotate-90' : ''" style="transition: .1s ease;"></i>
              </button>
            </div>
          </div>

          <!-- Konten Accordion -->
          <div x-show="selected === <?= $angka ?>" 
               x-transition:enter="transition-all duration-300" 
               x-transition:leave="transition-all duration-300"
               x-bind:style="selected === <?= $angka ?> ? 'max-height: 500px;' : 'max-height: 0px; overflow: hidden;'">

            <hr class="mt-2 border-slate-400">
            <div class="flex px-10 justify-between py-5">
              <img class="w-60 h-52 object-cover" src="../img/<?= $ex['image_experience'] ?>" alt="">
              <div class="h-52 w-[2px] bg-blue-700"></div>
              <p class="w-8/12 text-justify"><?= $ex['information_experience'] ?></p>
            </div>
          </div>
        </div>
      </li>
      <?php $angka++ ?>
      <?php endforeach; ?>
    </ul>
  </div>
</div>

<!-- testimony -->
<div id="testimony" class="mx-auto w-screen h-screen ">
    <h1 class="text-5xl text-center font-bold mt-28 ">Your Testimony</h1>
    <p class="text-xl text-center font-light text-blue-600 mb-20 mt-3">Your rating is very important to my journey</p>
    <div class="wrapper mx-auto">
        <i id="left" class="fa-solid fa-angle-left text-center"></i>
        <ul class="carousel overflow-x-hidden overflow-y-visible">
           
            <?php foreach($testimony as $test): ?>
            <li class="card ">
                <div class="w-28 relative mx-auto mt-5 h-28 object-cover overflow-hidden rounded-full border- border-slate-400"><img src="../img/user.jpg" draggable="false" alt=""></div>
                <h2 class="font-medium text-xl text-center mt-3"><?= $test['writer_testimony']?></h2>
                <p class="mt-3 text-center w-10/12 mx-auto text-slate-700"><?= $test['message_testimony'] ?></p>
                <div class="flex mx-auto justify-center mt-6 ">
                    <?php for($i = 0; $i < $test['rating']; $i++ ): ?>
                    <img src="../img/star.png" class="w-6" alt="">
                    <?php endfor; ?>
                </div>
            </li>
            <?php endforeach; ?>
        
            
           
        </ul>
        <i id="right" class="fa-solid fa-angle-right text-center"></i>
    </div>
</div>



    <!-- contact us -->
     <div class="w-screen h-screen bg-slate-200 mt-20" >
        <div class="w-9/12 mx-auto z-40 h-[30rem] flex justify-between rounded-lg shadow-slate-500 shadow-2xl items-center" style="background-image: url(../img/contact.png); background-size: cover;">
            <div class=" p-5">
                <h1 class="font-bold text-6xl">Testimony</h1>
                <p class="text-xl mt-3 ml-5 text-slate-500">give ratting to me</p>
                <form action="" method="post" class="mt-3 grid">
                    <input required type="text" name="name" placeholder="Name" class="w-[37rem] border-[.2px] rounded-lg h-12 mb-5 " style="box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.5);">
                    <input required type="text" name="message" placeholder="Message" class="w-[37rem] border-[.2px] rounded-lg h-28  " style="box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.5);">
                    <select id="rating" name="rating" class="w-48 mt-3 mb-4 text-yellow-500 text-center">
                        <option value="5" class="text-yellow-500">&#9733;&#9733;&#9733;&#9733;&#9733; 5 Star</option>
                        <option value="4" class="text-yellow-500">&#9733;&#9733;&#9733;&#9733; 4 Star</option>
                        <option value="3" class="text-yellow-500">&#9733;&#9733;&#9733; 3 Star</option>
                        <option value="2" class="text-yellow-500">&#9733;&#9733; 2 Star</option>
                        <option value="1" class="text-yellow-500">&#9733; 1 Star</option>
                      </select>
                    <button name="submit" type="submit" style="transition: 0s;" class=" px-4 py-1 bg-blue-600 w-36 ml-2 rounded-lg text-white hover:bg-blue-800" >Send</button>
                </form>
            </div>
            <div class="w-80 h-80 bg-slate-900 items-center p-5">
                <h3 class="text-white text-5xl font-medium">contact Us</h3>
                <div class="mt-10 ml-8">
                    <h4 class="text-white text-xl font-thin mb-6"><a href="" class="hover:text-blue-500"><i class="fa-solid fa-user mr-3"></i>farhan@gmail.com</a></h4>
                    <h4 class="text-white text-xl font-thin mb-6"><a href="" class="hover:text-blue-500"><i class="fa-solid fa-phone mr-3"></i>+62-858-4562-5716</a></h4>
                    <h4 class="text-white text-xl font-thin"><a href="" class="hover:text-blue-500"><i class="fa-solid fa-laptop mr-3"></i>Full Stack</a></h4>
                </div>
            </div>
        </div>
     </div>

     <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
     
    <!-- ini bagian typed js -->
    <?php foreach($user as $u):?>
            <script>
                var typed = new Typed('#judul', {
                    strings: ["<?= $u['full_name']?>", "<?= $u['job']?>"],
                    typeSpeed: 80,
                    backSpeed: 40,   
                    backDelay: 2000, 
                    loop: true       
                });
            </script>

    <?php endforeach;?>

            <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

            <script>
   $(window).scroll(function() {
        // Ambil posisi scroll saat ini
        var scrollPosition = $(window).scrollTop();
        
        // Ambil posisi dari elemen tertentu, misalnya dengan id "skill"
        var targetPosition = $('#skill2').offset().top;

        // Jika posisi scroll lebih besar dari targetPosition, navbar berubah warna
        if (scrollPosition > targetPosition) {
            $('#navbar').addClass('bg-slate-50 border-b-slate-600 border-[1px] backdrop-blur-sm bg-opacity-75 text-black h-12');
        } else {
            $('#navbar').removeClass('bg-slate-50 border-b-slate-600 border-[1px] backdrop-blur-sm bg-opacity-75 text-black');
        }
    });

            </script>
</body>
</html>  -->