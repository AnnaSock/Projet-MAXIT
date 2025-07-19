    <title>Compte créé avec succès</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'bounce-in': 'bounceIn 0.5s ease-out both'
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        bounceIn: {
                            '0%': { opacity: '0', transform: 'scale(0.8)' },
                            '100%': { opacity: '1', transform: 'scale(1)' }
                        }
                    }
                }
            }
        }
    </script>
<div class="min-h-screen bg-white flex items-center justify-center p-4 animate-fade-in">
    <div class="bg-white rounded-3xl shadow-lg p-12 max-w-md w-full text-center">
        <!-- Icône de succès -->
        <div class="mx-auto mb-8 w-20 h-20 bg-gradient-to-br from-green-400 to-green-500 rounded-full flex items-center justify-center animate-bounce-in">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        
        <!-- Titre -->
        <h1 class="text-3xl font-bold text-gray-800 mb-4">
            Compte créer avec succès !!!!
        </h1>
        
        <!-- Sous-titre -->
        <p class="text-gray-600 text-lg mb-10">
            Cliquer pour accéder à ton compte
        </p>
        
        <!-- Bouton -->
        <button onclick="handleAccess()" class="px-10 py-4 text-lg font-semibold text-white bg-gradient-to-r from-orange-500 to-orange-400 rounded-full shadow-lg transition-transform duration-200 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-orange-300">
            acceder a mon compte
        </button>
    </div>
<!-- 
    <script>
        function handleAccess() {
            // Animation simple du bouton lors du clic
            const btn = event.target;
            btn.style.transform = 'scale(0.95)';
            setTimeout(() => {
                btn.style.transform = 'scale(1)';
            }, 100);
            
            // Ici vous pouvez ajouter la logique de redirection
            console.log('Redirection vers le compte utilisateur...');
            
            // Exemple de redirection (à adapter selon vos besoins)
            // window.location.href = '/dashboard';
        }
    </script> -->
</div>  