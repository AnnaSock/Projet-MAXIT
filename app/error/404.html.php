<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page non trouvée</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap');
        
        /* Configuration Tailwind personnalisée */
        /* @tailwind base;
        @tailwind components;
        @tailwind utilities; */
        
        /* Couleurs personnalisées */
        :root {
            --bg-primary: #120E0E;
            --accent-orange: #FC7700;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #120E0E 0%, #1a1515 100%);
        }
        
        /* Animations personnalisées */
        @keyframes pulse-custom {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-20px) rotate(120deg); }
            66% { transform: translateY(20px) rotate(240deg); }
        }
        
        @keyframes glitch-1 {
            0% { transform: translate(0); }
            20% { transform: translate(-2px, 2px); }
            40% { transform: translate(-2px, -2px); }
            60% { transform: translate(2px, 2px); }
            80% { transform: translate(2px, -2px); }
            100% { transform: translate(0); }
        }
        
        @keyframes glitch-2 {
            0% { transform: translate(0); }
            20% { transform: translate(2px, 2px); }
            40% { transform: translate(2px, -2px); }
            60% { transform: translate(-2px, 2px); }
            80% { transform: translate(-2px, -2px); }
            100% { transform: translate(0); }
        }
        
        .animate-pulse-custom {
            animation: pulse-custom 2s ease-in-out infinite;
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .glitch {
            position: relative;
            display: inline-block;
        }
        
        .glitch::before,
        .glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .glitch::before {
            animation: glitch-1 2s infinite linear alternate-reverse;
            color: #FC7700;
            z-index: -1;
        }
        
        .glitch::after {
            animation: glitch-2 2s infinite linear alternate-reverse;
            color: rgba(252, 119, 0, 0.5);
            z-index: -2;
        }
        
        .text-shadow-orange {
            text-shadow: 0 0 20px rgba(252, 119, 0, 0.5);
        }
        
        .bg-gradient-orange {
            background: linear-gradient(45deg, #FC7700, #ff9533);
        }
        
        .shadow-orange {
            box-shadow: 0 4px 15px rgba(252, 119, 0, 0.3);
        }
        
        .shadow-orange-hover:hover {
            box-shadow: 0 8px 25px rgba(252, 119, 0, 0.4);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center overflow-hidden text-white">
    
    <!-- Éléments flottants en arrière-plan -->
    <div class="absolute inset-0 pointer-events-none z-10">
        <div class="absolute w-1.5 h-1.5 bg-orange-500 rounded-full opacity-70 animate-float" style="left: 10%; top: 20%; animation-delay: 0s;"></div>
        <div class="absolute w-1.5 h-1.5 bg-orange-500 rounded-full opacity-70 animate-float" style="left: 20%; top: 60%; animation-delay: 1s;"></div>
        <div class="absolute w-1.5 h-1.5 bg-orange-500 rounded-full opacity-70 animate-float" style="left: 80%; top: 30%; animation-delay: 2s;"></div>
        <div class="absolute w-1.5 h-1.5 bg-orange-500 rounded-full opacity-70 animate-float" style="left: 90%; top: 70%; animation-delay: 3s;"></div>
        <div class="absolute w-1.5 h-1.5 bg-orange-500 rounded-full opacity-70 animate-float" style="left: 50%; top: 10%; animation-delay: 4s;"></div>
        <div class="absolute w-1.5 h-1.5 bg-orange-500 rounded-full opacity-70 animate-float" style="left: 70%; top: 80%; animation-delay: 5s;"></div>
    </div>

    <!-- Conteneur principal -->
    <div class="relative z-20 max-w-2xl mx-auto px-8 text-center">
        <!-- Code d'erreur 404 -->
        <div class="text-8xl md:text-9xl font-black text-shadow-orange animate-pulse-custom mb-6 glitch" 
             style="color: #FC7700;" data-text="404">
            404
        </div>
        
        <!-- Titre -->
        <h1 class="text-3xl md:text-4xl font-light mb-6 text-white">
            Page non trouvée
        </h1>
        
        <!-- Message d'erreur -->
        <p class="text-lg md:text-xl mb-8 text-white/80 leading-relaxed max-w-lg mx-auto">
            Oups ! La page que vous recherchez semble avoir disparu dans les méandres du web. 
            Elle a peut-être été déplacée, supprimée ou n'existe tout simplement pas.
        </p>
        
        <!-- Bouton de retour -->
        <a href="/" 
           class="inline-block px-8 py-4 bg-gradient-orange text-white font-bold rounded-full 
                  transition-all duration-300 shadow-orange shadow-orange-hover
                  hover:-translate-y-1 hover:shadow-xl border-2 border-transparent
                  focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 focus:ring-offset-gray-900">
            Retour à l'accueil
        </a>
    </div>

    <script>
        // Animation d'apparition progressive
        window.addEventListener('load', function() {
            const container = document.querySelector('.relative.z-20');
            container.style.opacity = '0';
            container.style.transform = 'translateY(50px)';
            container.style.transition = 'all 1s ease';
            
            setTimeout(() => {
                container.style.opacity = '1';
                container.style.transform = 'translateY(0)';
            }, 100);
        });

        // Effet de parallaxe léger pour les éléments flottants
        document.addEventListener('mousemove', function(e) {
            const elements = document.querySelectorAll('.animate-float');
            const mouseX = e.clientX / window.innerWidth;
            const mouseY = e.clientY / window.innerHeight;
            
            elements.forEach((element, index) => {
                const speed = (index + 1) * 0.5;
                const x = (mouseX - 0.5) * speed;
                const y = (mouseY - 0.5) * speed;
                
                element.style.transform += ` translate(${x}px, ${y}px)`;
            });
        });

        // Effet de glitch aléatoire
        setInterval(() => {
            const glitchElement = document.querySelector('.glitch');
            glitchElement.classList.add('animate-pulse');
            setTimeout(() => {
                glitchElement.classList.remove('animate-pulse');
            }, 200);
        }, 5000);
    </script>
</body>
</html>