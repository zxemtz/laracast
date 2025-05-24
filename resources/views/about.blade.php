<x-layout >
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <x-slot:title>
        about us 
    </x-slot:title>
    <style>
        body {
            margin: 0;
            font-family: 'Helvetica Neue', sans-serif;
            background-color: #000;
            color: #080808;
            animation: fadeIn 1.5s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .ferrari-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            min-height: 10vh;
            animation: fadeInUp 1s ease forwards;
        }

        .ferrari-section:nth-child(even) {
            flex-direction: row-reverse;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .image-side {
            flex: 1;
            background-size: cover;
            background-position: center;
            min-height: 400px;
        }

        .overlay {
            flex: 1;
            background: rgba(255, 254, 254, 0.7);
            padding: 20px 30px;
            max-width: 600px;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
            text-align: left;
        }

        .overlay.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .overlay h2 {
            font-size: 40px;
            font-weight: bold;
            margin: 0 0 10px 0;
        }

        .overlay p {
            font-size: 18px;
            line-height: 1.6;
            margin: 0;
        }

        .discover-btn {
            margin-top: 30px;
            display: inline-block;
            text-decoration: none;
            border: 2px solid #0c0c0c;
            padding: 12px 20px;
            font-weight: bold;
            font-size: 14px;
            letter-spacing: 1px;
            color: #080808;
            transition: background-color 0.3s, color 0.3s, transform 0.3s;
        }

        .discover-btn span {
            margin-left: 10px;
        }

        .discover-btn:hover {
            background-color: #0b0b0b;
            color: #fbf9f9;
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .ferrari-section {
                flex-direction: column !important;
            }
            .overlay {
                max-width: 100%;
                padding: 20px;
            }
            .image-side {
                min-height: 300px;
            }
        }
    </style>
</head>
<body>

    <section class="ferrari-section">
        <div class="image-side" style="background-image: url('https://i.postimg.cc/Y9JVtqcQ/ferrari-3664450-1280.jpg');"></div>
        <div class="overlay">
            <h2>FERRARI HISTORY</h2>
            <p>Founded in 1947 in Maranello, Italy, by Enzo Ferrari. Born from a passion for racing, Ferrari quickly became a global icon of performance and design.</p>
        </div>
    </section>

    <section class="ferrari-section">
        <div class="image-side" style="background-image: url('https://i.postimg.cc/C5TDF9cR/ferrari-owen050723-0536.jpg');"></div>
        <div class="overlay">
            <h2>PHILOSOPHY & VISION</h2>
            <p>Ferrari stands for innovation, passion, and tradition. Our vision is to lead through excellence on the road and on the track.</p>
        </div>
    </section>

    <section class="ferrari-section">
        <div class="image-side" style="background-image: url('https://i.postimg.cc/6pHmyQrD/enzo-ferrari.webp');"></div>
        <div class="overlay">
            <h2>ENZO FERRARI</h2>
            <p>Enzo Ferrari (1898–1988) was a visionary who turned his racing dream into a global legacy of performance and craftsmanship.</p>
        </div>
    </section>

    <section class="ferrari-section">
        <div class="image-side" style="background-image: url('https://i.postimg.cc/wBJHJP65/Ferrari-Leclerc-team-Mondiale-2021.jpg');"></div>
        <div class="overlay">
            <h2>Join Our Team</h2>
            <p>We are currently seeking new team members to join our team, our work reflects innovation, precision, and passion.</p>
            <a href="/job" class="discover-btn">SEE OUR TEAM <span>&#10140;</span></a>
        </div>
    </section>

    <section class="ferrari-section">
        <div class="image-side" style="background-image: url('https://i.postimg.cc/d1B13Dsb/ferrari-f8-tributo1.webp');"></div>
        <div class="overlay">
            <h2>FERRARI F8 TRIBUTO</h2>
            <p>A celebration of performance and design. The F8 Tributo honors the most powerful V8 in Ferrari history.</p>
            <a href="/carsales/1" class="discover-btn">DISCOVER MORE <span>&#10140;</span></a>
        </div>
    </section>

    <section class="ferrari-section">
        <div class="image-side" style="background-image: url('https://i.postimg.cc/g2HkNnRn/5d36d3bf7e98e13abbbed080-ferrari-812superfast-2017-dynamics-focuson-02-d.avif');"></div>
        <div class="overlay">
            <h2>Ferrari 812 Superfast</h2>
            <p>a high-performance V12-powered front-engine supercar known for its extreme performance and luxurious interior.</p>
            <a href="/carsales/2" class="discover-btn">DISCOVER MORE <span>&#10140;</span></a>
        </div>
    </section>

    <section class="ferrari-section">
        <div class="image-side" style="background-image: url('https://i.postimg.cc/50c7yN7S/prueba-ferrari-488-pista-95.jpg');"></div>
        <div class="overlay">
            <h2>FERRARI 488 PISTA</h2>
            <p>Inspired by racing. Built for the road. The 488 Pista delivers an unmatched driving experience.</p>
            <a href="/carsales/3" class="discover-btn">
                     DISCOVER MORE <span>&#10140;</span>
                </a>

        </div>
    </section>

    <script>
        const overlays = document.querySelectorAll('.overlay');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        overlays.forEach(overlay => {
            observer.observe(overlay);
        });
    </script>

</body>
</html>

</x-layout>
