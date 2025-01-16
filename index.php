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

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/script.js"></script>
    <title>Profile | Mega Paragon</title>
    <link rel="shortcut icon" href="assets/images/insurance-logo.png">
</head>
<body>

    <section class="w-full bg-slate-900 p-5">
        <!-- Hero Section -->
        <div class="w-full h-screen flex flex-col items-center justify-center  gap-2">
            <div class="w-[15rem] h-[15rem] rounded-full border-4 border-secondary">

            </div>
            <div class="w-full max-w-[100vh] mt-5">
                <div class="flex flex-col items-center mb-4 md:mb-7">
                    <h3 class="font-primary md:text-xl text-white font-semibold">Welcome! I'm 👋</h3>
                    <h1 class="text-secondary font-bold text-2xl md:text-3xl">Pauline Sanchez Moya</h1>
                </div>
                <h5 class="text-center font-primary text-sm md:text-lg text-gray-300 leading-loose">
                A seasoned financial professional with over <strong class="text-secondary">2 decades of experience</strong> 
                in helping individuals and businesses achieve their financial aspirations. My passion lies in 
                elivering personalized financial solutions, from wealth management to retirement planning, 
                ensuring every client feels confident about their financial future.
                </h5>
                <h5 class="text-center font-primary text-sm md:text-lg text-gray-300 mt-3 md:mt-5 leading-loose">
                Through a comprehensive approach, I work closely with my clients to understand their unique goals, 
                creating strategies that are both practical and effective. Let's work together to build a stable and 
                prosperous financial journey.
                </h5>
                <div class="flex justify-center gap-5 mt-5 md:mt-10 mb-10">
                    <button class="bg-secondary text-primary font-medium font-primary py-2 px-5 rounded-md hover:bg-secondary/90 
                        transition-all delay-100 ease-in-out">
                        Join Mega Paragon
                    </button>
                    <button class="bg-secondary text-primary font-medium font-primary py-2 px-5 rounded-md hover:bg-secondary/90 
                        transition-all delay-100 ease-in-out">
                        Sign in as Pauline
                    </button>

                    <!-- <button>Sign in as Pauline</button> -->

                </div>
            </div>

        </div>
    </section>
        <!-- Faqs -->
        <section class="w-full bg-slate-900 h-screen flex justify-center p-6">
          <div class="space-y-4 w-full max-w-[80vh]">
            <!-- FAQ Item 1 -->
            <div class="bg-gray-800 rounded-lg shadow-md">
              <button class="text-white w-full text-left px-4 py-3" onclick="toggleFAQ(1)">
                <div class="flex justify-between items-center">
                  <span>What is your return policy?</span>
                  <svg id="icon-1" class="w-5 h-5 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </div>
              </button>
              <div id="answer-1" class="hidden px-4 py-3 border-t border-gray-700">
                <p class="text-white">We offer a 30-day return policy. For more details, please visit our return policy page.</p>
              </div>
            </div>
            <!-- FAQ Item 2 -->
            <div class="bg-gray-800 rounded-lg shadow-md">
              <button class="text-white w-full text-left px-4 py-3" onclick="toggleFAQ(2)">
                <div class="flex justify-between items-center">
                  <span>How long does shipping take?</span>
                  <svg id="icon-2" class="w-5 h-5 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </div>
              </button>
              <div id="answer-2" class="hidden px-4 py-3 border-t border-gray-700">
                <p class="text-white">Shipping typically takes 5-7 business days. Expedited options are available at checkout.</p>
              </div>
            </div>
            <!-- FAQ Item 3 -->
            <div class="bg-gray-800 rounded-lg shadow-md">
              <button class="text-white w-full text-left px-4 py-3" onclick="toggleFAQ(3)">
                <div class="flex justify-between items-center">
                  <span>Do you ship internationally?</span>
                  <svg id="icon-3" class="w-5 h-5 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </div>
              </button>
              <div id="answer-3" class="hidden px-4 py-3 border-t border-gray-700">
                <p class="text-white">Yes, we ship to select countries. Please check our shipping information page for more details.</p>
              </div>
            </div>
          </div>
        </section>

</body>
</html>
<script>
    function toggleFAQ(id) {
      const answer = document.getElementById(`answer-${id}`);
      const icon = document.getElementById(`icon-${id}`);
      const isHidden = answer.classList.contains('hidden');
      document.querySelectorAll('[id^="answer-"]').forEach((el) => el.classList.add('hidden'));
      document.querySelectorAll('[id^="icon-"]').forEach((el) => el.classList.remove('rotate-180'));
      if (isHidden) {
        answer.classList.remove('hidden');
        icon.classList.add('rotate-180');
      }
    }
  </script>