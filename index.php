<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Mrkm">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Your financial advisor that will help you to your insurance.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/script.js"></script>
    <title>Profile | Mega Paragon</title>
    <link rel="shortcut icon" href="assets/images/insurance-logo.png">
</head>
<body>

    <section class="relative overflow-hidden md:h-screen w-full flex items-center justify-center bg-slate-900 p-5">
        <!-- Hero Section -->
        <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 place-items-center">
            <div class="col-span-1 md:col-span-2 lg:col-span-1 flex items-center justify-center">
                <img
                    data-aos="fade-right"
                    data-aos-duration="600"
                    data-aos-easing="ease-in"
                    src="assets/images/ahpauline.webp" 
                    alt="Pauline Sanchez Moya" 
                    class="w-full h-auto ml-12 z-[999] md:ml-0 max-w-[260px] max-h-[260px] xl:max-w-[500px] xl:max-h-[500px] object-cover rounded-full">
            </div>
            <div class="col-span-2 w-full flex flex-col justify-center max-w-[120vh] lg:mt-5">
                <div class="flex flex-col mb-4 md:mb-7">
                    <h3 
                        class="text-center lg:text-left font-primary md:text-xl text-white font-semibold"
                        data-aos="fade-right"
                        data-aos-delay="100"
                        data-aos-duration="500"
                    >Welcome! I'm 👋</h3>
                    <h1 
                        data-aos="fade-right"
                        data-aos-delay="200"
                        data-aos-duration="600"
                        class="text-center lg:text-left text-secondary font-bold text-2xl md:text-5xl"
                    >Pauline Sanchez Moya</h1>
                </div>
                <!-- <div class="bg-slate-800 p-5 shadow-sm shadow-secondary hover:scale-[1.02] transition-all ease-in-out rounded-md"> -->
                    <h5 
                        class="text-center z-[999] lg:text-left lg:mt-5 font-primary text-sm md:text-lg text-gray-300 leading-loose"
                        data-aos="fade-right"
                        data-aos-delay="300"
                        data-aos-duration="700"
                    >
                    A seasoned financial professional with over <strong class="text-secondary">2 decades of experience</strong> 
                    in helping individuals and businesses achieve their financial aspirations. My passion lies in 
                    delivering personalized financial solutions, from wealth management to retirement planning, 
                    ensuring every client feels confident about their financial future.
                    </h5>
                    <h5 
                        class="text-center z-[999] lg:text-left font-primary text-sm md:text-lg text-gray-300 mt-3 md:mt-5 leading-loose"
                        data-aos="fade-right"
                        data-aos-delay="400"
                        data-aos-duration="800"
                        
                    >
                    Through a comprehensive approach, I work closely with my clients to understand their unique goals, 
                    creating strategies that are both practical and effective. Let's work together to build a stable and 
                    prosperous financial journey.
                    </h5>
                <!-- </div> -->
                <div class="flex justify-center z-[999] lg:justify-start gap-5 mt-5 md:mt-10 mb-10">
                    <button 
                        data-aos="fade-right"
                        data-aos-delay="500"
                        data-aos-duration="900"
                        class="bg-secondary text-primary font-semibold font-primary py-2 px-5 rounded-md hover:bg-secondary/90 
                        transition-all delay-100 ease-in-out hover:scale-[1.01]">
                        Join Mega Paragon
                    </button>
                    <button 
                        data-aos="fade-right"
                        data-aos-delay="500"
                        data-aos-duration="1000"
                        class="bg-secondary z-[999] text-primary font-semibold font-primary py-2 px-5 rounded-md hover:bg-secondary/90 
                        transition-all delay-100 ease-in-out hover:scale-[1.01]">
                        Sign in as Pauline
                    </button>
                </div>
            </div>
        </div>
    <div class='w-[250px] h-[250px] md:w-[350px] md:h-[350px] absolute bg-secondary rounded-full top-[-100px] left-[-20px] md:top-[-150px] md:left-[-50px] blur-lg opacity-50'></div>
    <div class='w-[150px] h-[150px] absolute bg-secondary rounded-full top-[-50px] right-[-10px] blur-lg opacity-50'></div>
    <div class='w-[100px] h-[100px] absolute bg-secondary rounded-full top-[50px] right-[50%] blur-lg opacity-10'></div>
    <div class='w-[50px] h-[50px] absolute bg-secondary rounded-full bottom-[40%] right-[10%] blur-lg opacity-80'></div>
    <div class='w-[300px] h-[300px] absolute bg-secondary rounded-full bottom-[10%] right-[40%] blur-lg opacity-10'></div>
    </section>
        <!-- Faqs -->
        <section class="w-full p-6 bg-slate-900 pb-10">
            <div class="max-w-[100vh] mx-auto bg-slate-800 shadow-lg text-white rounded-lg">
                <!-- Life Insurance Section -->
                <div class="border-b border-slate-900">
                <button
                    class="w-full text-left flex justify-between items-center px-6 py-4 text-secondary font-medium hover:bg-secondary hover:text-primary
                    focus:outline-none focus:ring-4 focus:ring-secondary/20 rounded-t-md"
                        onclick="toggleSection(1)"
                        aria-expanded="false"
                        aria-controls="section-1">
                        <span>Life Insurance</span>
                        <svg
                            id="icon-1"
                            class="w-5 h-5 transform transition-transform"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                </button>
                <div id="section-1" class="hidden bg-gray-50">
                    <ul class="p-4 space-y-4 bg-slate-800">
                    <li>
                        <button
                        class="w-full bg-slate-900 hover:text-secondary text-white transition-all ease-in-out rounded-md px-4 py-2 text-left">
                        Life Insurance
                        </button>
                    </li>
                    <li>
                        <button
                            class="w-full bg-slate-900 hover:text-secondary text-white transition-all ease-in-out rounded-md px-4 py-2 text-left">
                        Health Insurance
                        </button>
                    </li>
                    <li>
                        <button
                            class="w-full bg-slate-900 hover:text-secondary text-white transition-all ease-in-out rounded-md px-4 py-2 text-left">
                        Education Insurance
                        </button>
                    </li>
                    <li>
                        <button
                            class="w-full bg-slate-900 hover:text-secondary text-white transition-all ease-in-out rounded-md px-4 py-2 text-left">
                        Investment Insurance
                        </button>
                    </li>
                    <li>
                        <button
                            class="w-full bg-slate-900 hover:text-secondary text-white transition-all ease-in-out rounded-md px-4 py-2 text-left">
                        Retirement Insurance
                        </button>
                    </li>
                    <li>
                        <button
                            class="w-full bg-slate-900 hover:text-secondary text-white transition-all ease-in-out rounded-md px-4 py-2 text-left">
                        Investment Funds
                        </button>
                    </li>
                    </ul>
                </div>
                </div>

                <!-- For Groups & Businesses Section -->
                <div class="border-b border-slate-900">
                <button
                    class="w-full text-left flex justify-between items-center px-6 py-4 text-secondary font-medium hover:bg-secondary hover:text-primary
                    focus:outline-none focus:ring-4 focus:ring-secondary/20 rounded-t-md"
                    onclick="toggleSection(2)"
                    aria-expanded="false"
                    aria-controls="section-2">
                    <span>For Groups & Businesses</span>
                    <svg
                    id="icon-2"
                    class="w-5 h-5 transform transition-transform"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="section-2" class="hidden bg-gray-50">
                <ul class="p-4 space-y-4 bg-slate-800">
                    <li>
                        <button
                        class="w-full bg-slate-900 hover:text-secondary text-white transition-all ease-in-out rounded-md px-4 py-2 text-left">
                        Group Health Plans
                        </button>
                    </li>
                    <li>
                        <button
                        class="w-full bg-slate-900 hover:text-secondary text-white transition-all ease-in-out rounded-md px-4 py-2 text-left">
                        Employee Retirement Plans
                        </button>
                    </li>
                    <li>
                        <button
                        class="w-full bg-slate-900 hover:text-secondary text-white transition-all ease-in-out rounded-md px-4 py-2 text-left">
                        Business Continuation Insurance
                        </button>
                    </li>
                    </ul>
                </div>
                </div>

                <!-- Bancassurance Section -->
                <div>
                <button
                    class="w-full text-left flex justify-between items-center px-6 py-4 text-secondary font-medium hover:bg-secondary hover:text-primary
                    focus:outline-none focus:ring-4 focus:ring-secondary/20 rounded-t-md"
                    onclick="toggleSection(3)"
                    aria-expanded="false"
                    aria-controls="section-3">
                    <span>Bancassurance</span>
                    <svg
                    id="icon-3"
                    class="w-5 h-5 transform transition-transform"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="section-3" class="hidden bg-gray-50">
                <ul class="p-4 space-y-4 bg-slate-800">
                    <li>
                        <button
                            class="w-full bg-slate-900 hover:text-secondary text-white transition-all ease-in-out rounded-md px-4 py-2 text-left">
                            Protection
                        </button>
                    </li>
                    <li>
                        <button
                        class="w-full bg-slate-900 hover:text-secondary text-white transition-all ease-in-out rounded-md px-4 py-2 text-left">
                        Mortgage Protection Plans
                        </button>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
        </section>
</body>
</html>
<script>
  function toggleSection(id) {
    const section = document.getElementById(`section-${id}`);
    const icon = document.getElementById(`icon-${id}`);

    section.classList.toggle('hidden');
    section.classList.toggle('block');
    icon.classList.toggle('rotate-180');
  }
</script>
<script>
  AOS.init();
</script>