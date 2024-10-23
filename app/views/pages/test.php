<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo URLROOT;   ?>/css/pages/test.css">
</head>
<body>
    <main>
       <header>
           <figure class="logo">
                <img src="<?php echo URLROOT;   ?>/img/logo.png" alt="logo">
           </figure>
           <nav>
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 6H6m12 4H6m12 4H6m12 4H6"/>
                </svg>
  
           </nav>
       </header> 

       <section  class="slider">
            <div class="list">
                <div class="item active">
                    <div class="image"  style="--url: url('<?php echo URLROOT;   ?>/img/palace.jpg')"></div>
                    <div class="content">
                        <h2>Welcome to the Kingdom of Dreams</h2>
                        <p>Princess Aurora stands before the grand gates, offering a warm smile as you arrive. Beyond these gates lies a world of enchantment, where dreams come alive and magic is in the air.</p>
                        <p>Take your first step into this mystical realm, where every moment brings a new adventure. The journey ahead is filled with wonder, and Aurora is here to guide you through it all.</p>
                    </div>
                    
                </div>
                <div class="item">
                    <div class="image"  style="--url: url('<?php echo URLROOT;   ?>/img/entrance.jpg')"></div>
                    <div class="content">
                        <h2>Enter the Heart of the Castle </h2>
                        <p>Now within the grand palace, Aurora invites you to explore its timeless beauty. The royal halls shimmer with elegance, and each room holds the secrets of a magical past</p>
                        <p>As you wander deeper, the charm of the palace reveals itself. Every corner has a story, and with Aurora by your side, you're part of the kingdom's next great tale..</p>
                    </div>
                    
                </div>
                <div class="item">
                    <div class="image"  style="--url: url('<?php echo URLROOT;   ?>/img/bed.jpg')"></div>
                    <div class="content">
                        <h2>Goodnight from the Enchanted Kingdom</h2>
                        <p>As night falls, Aurora retires to her royal bedroom, bidding you a peaceful farewell. The day's magic may end, but the kingdom's wonders will always be here for you.</p>
                        <p>Rest well, and may your dreams be filled with adventure. Until we meet again, the gates of the enchanted realm will be waiting for your return....</p>
                    </div>
                    
                </div>
            </div>
            <div class="arrows">
            <button id="prev">
                 <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
                </svg>

            </button>
            <button id="next">  
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                </svg>

            </button>
            </div>
       </section>
    </main>
    <script src="<?php echo URLROOT;   ?>/js/slider.js"></script>
    
</body>
</html>