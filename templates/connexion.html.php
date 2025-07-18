<style>
        /* Animations personnalisées */
        @keyframes pulse-subtle {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.02); }
        }
        
        /* Animation au focus pour les champs */
        .focus-within\:animate-pulse-subtle:focus-within {
            animation: pulse-subtle 2s infinite;
        }
        
        /* Effet de brillance sur les champs */
        .input-field {
            position: relative;
            overflow: hidden;
        }
        
        .input-field::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(252, 119, 0, 0.3), transparent);
            transition: left 0.5s;
            z-index: 1;
        }
        
        .input-field:focus-within::before {
            left: 100%;
        }
        
        /* Amélioration du placeholder */
        input::placeholder {
            transition: all 0.3s ease;
        }
        
        input:focus::placeholder {
            transform: translateY(-2px);
            opacity: 0.8;
        }
        
        /* Animation du bouton */
        button:hover {
            box-shadow: 0 8px 25px rgba(252, 119, 0, 0.3);
        }
        
        /* Effet de ripple sur le bouton */
        button:active {
            position: relative;
            overflow: hidden;
        }
        
        /* Transitions fluides pour les icônes */
        .fa-solid {
            transition: all 0.3s ease;
        }
        
        .focus-within\:text-orange:focus-within .fa-solid {
            color: #FC7700;
            transform: scale(1.1);
        }
        
        /* Style pour le logo blanc */
        .logo-white {
            filter: brightness(0) invert(1);
            z-index: 10;
            position: relative;
        }
        
        /* Animation du logo */
        .logo-container {
            transition: all 0.3s ease;
        }
        
        .logo-container:hover {
            transform: scale(1.05);
        }
</style>
<?php
$errors=[];

use function App\Config\dd;
// unset($_SESSION['utilisateur']);
// dd($_SESSION);
?>
<div class="w-screen h-screen">
        <div class="w-full h-[15%]">
            <div class="flex items-center pt-9 px-9">
                <div class="logo-container">
                    <img src="/uploads/images/logo.png" alt="logo" class="w-32 h-auto logo-black">
                </div>
                <div class="flex flex-col ml-4">
                    <h1 class="text-[#FC7700] font-bold text-4xl">MAXIT-ECSA</h1>
                    <div class="text-black text-lg mt-2">
                        <span>Nouveau sur MAXIT-ECSA ? </span>
                        <a href="/account/create" class="text-[#FC7700] font-semibold transition-all duration-300 hover:text-[#e66600] hover:underline">Créer un compte</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-[85%] flex">
            <!-- Image à gauche -->
            <div class="w-1/2 h-full flex items-center justify-center p-4">
                <img src="/uploads/images/image.png" alt="" class="w-full h-full object-contain">
            </div>
            <!-- Formulaire à droite -->
            <div class="w-1/2 h-full flex items-center justify-center">
                <form action="/login" method="POST" class="w-full max-w-md flex flex-col">
                    <div class="flex flex-col gap-6">
                        <!-- Champ numéro de téléphone -->
                        <div class="w-full h-16 bg-[#e0e0e0] rounded-full flex justify-center items-center transition-all duration-300 hover:shadow-lg hover:scale-105 focus-within:shadow-xl focus-within:scale-105 input-field">
                            <div class="border border-black w-[95%] h-[85%] bg-[#e0e0e0] rounded-full flex justify-center items-center transition-all duration-300 focus-within:border-[#FC7700]">
                                <div class="border w-[95%] h-[85%] bg-[#e0e0e0] rounded-full p-5 flex gap-4 justify-center items-center transition-all duration-300 focus-within:border-[#FC7700] focus-within:text-orange relative z-10">
                                    <div class="fa-solid fa-phone text-2xl transition-all duration-300 text-gray-600"></div>
                                    <input name="numero" placeholder="Entrer votre numéro de téléphone" type="text" class="bg-transparent text-black text-xl placeholder-gray-500 w-full focus:outline-none transition-all duration-300 focus:placeholder-[#FC7700]">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Champ mot de passe -->
                        <div class="w-full h-16 bg-[#e0e0e0] rounded-full flex justify-center items-center transition-all duration-300 hover:shadow-lg hover:scale-105 focus-within:shadow-xl focus-within:scale-105 input-field">
                            <div class="border border-black w-[95%] h-[85%] bg-[#e0e0e0] rounded-full flex justify-center items-center transition-all duration-300 focus-within:border-[#FC7700]">
                                <div class="border w-[95%] h-[85%] bg-[#e0e0e0] rounded-full p-5 flex gap-4 justify-center items-center transition-all duration-300 focus-within:border-[#FC7700] focus-within:text-orange relative z-10">
                                    <div class="fa-solid fa-lock text-2xl transition-all duration-300 text-gray-600"></div>
                                    <input name="mdp" placeholder="Entrer votre mot de passe" type="password" class="bg-transparent text-black text-xl placeholder-gray-500 w-full focus:outline-none transition-all duration-300 focus:placeholder-[#FC7700]">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Bouton Se connecter -->
                        <div class="w-full h-16 flex justify-center items-center">
                            <button type="submit" class="w-full h-full bg-[#FC7700] text-white text-xl font-bold rounded-full flex items-center justify-center gap-3 transition-all duration-300 hover:bg-[#e66600] hover:shadow-lg hover:scale-105 active:scale-95 focus:outline-none focus:ring-4 focus:ring-[#FC7700] focus:ring-opacity-50">
                                <i class="fa-solid fa-arrow-right"></i>
                                Se connecter
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>