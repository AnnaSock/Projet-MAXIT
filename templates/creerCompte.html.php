<div class="max-w-3xl w-full mx-auto mt-[3vh] bg-white rounded-2xl shadow-2xl p-8 relative">
    <!-- Orange decorative elements -->
    <div class="absolute top-0 right-0 w-32 h-32 opacity-10">
        <svg viewBox="0 0 100 100" class="w-full h-full">
            <rect x="10" y="10" width="30" height="30" fill="#FC7700" transform="rotate(45 25 25)"/>
            <rect x="40" y="40" width="20" height="20" fill="#FF8C00" transform="rotate(45 50 50)"/>
        </svg>
    </div>
    <div class="absolute bottom-0 left-0 w-24 h-24 opacity-10">
        <svg viewBox="0 0 100 100" class="w-full h-full">
            <rect x="10" y="10" width="30" height="30" fill="#FC7700" transform="rotate(45 25 25)"/>
            <rect x="40" y="40" width="20" height="20" fill="#FF8C00" transform="rotate(45 50 50)"/>
        </svg>
    </div>

    <!-- Header -->
    <div class="text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">Créer un compte</h1>
    </div>

    <!-- Form -->
    <form action="/account/save" class="space-y-6" id="registerForm">
        <!-- CNI Section (Priority) -->
        <div class="cni-section relative rounded-lg p-6 mb-8">
    <div>
        <label class="block text-gray-700 text-sm font-semibold mb-2">Carte d'identité Nationale *</label>

        <div class="relative">

            <input 
            id="inputCni"
            name="inputCni"
            type="text"
            placeholder="Entrez votre numéro CNI"
            class=" w-full pr-12 px-4 py-3 bg-gray-50 text-gray-900 rounded-lg border border-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white transition-all duration-200 shadow-sm hover:shadow-md"
            placeholder=""
            pattern="^[1-2][0-9]{12}$"
            title="CNI sénégalais "
            >

            <!-- Spinner visible pendant le chargement -->
            <div role="status" id="spinner" class="absolute right-3 top-1/2 -translate-y-1/2 hidden">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-200 animate-spin fill-[#FC7700]" viewBox="0 0 100 101" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.59c0 27.61-22.39 50-50 50s-50-22.39-50-50 22.39-50 50-50 50 22.39 50 50Zm-90.92 0c0 21.6 17.32 38.92 38.92 38.92S87.92 72.19 87.92 50.59 70.6 11.67 49 11.67 9.08 28.99 9.08 50.59Z" fill="currentColor"/>
                    <path d="M93.97 39.04c2.43-.64 3.9-3.13 3.05-5.49a45.003 45.003 0 0 0-8.15-13.21C83.85 15.12 78.88 10.72 73.21 7.41 67.54 4.1 61.28 1.94 54.77 1.05c-5-.68-10.07-.6-15.04.23-2.47.41-3.91 2.92-3.28 5.34.63 2.45 3.11 3.88 5.59 3.52 3.8-.56 7.67-.58 11.49-.05 5.32.73 10.45 2.5 15.09 5.22 4.64 2.72 8.72 6.31 11.99 10.63 2.33 3.07 4.21 6.46 5.61 10.03.91 2.34 3.37 3.79 5.8 3.15Z" fill="currentFill"/>
                </svg>
                <span class="sr-only">Chargement...</span>
            </div>
        </div>

        <p class="text-sm text-gray-500 mt-2">
            <svg class="inline w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Veuillez saisir votre numéro CNI pour continuer l'inscription
        </p>


        <!-- Gestion Erreur -->
        <div>
            <p class="hidden text-red-500 text-xs mt-1" id="error-message">Numero de carte Nationale invalide</p>
            <p class="hidden text-green-600 text-xs mt-1" id="success-message">Numero de carte National verifié avec succés</p>
            <p class="text-xs mt-1" id="statut-message"></p>
            
        </div>


    </div>
</div>


        <!-- Rest of the form (disabled by default) -->
        <div id="form-sections" class="space-y-6">
       
            <!-- First row -->
            <!-- Première ligne -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-2">Nom *</label>

                                <input 
                                readonly
                                id="nom"
                                name="nom"
                                type="text"
                                class="input-field w-full px-4 py-3 bg-gray-100 text-gray-900 rounded-lg border border-gray-300 placeholder-gray-400 focus:outline-none transition-all duration-200 shadow-sm"
                                placeholder="Nom"
                                >

                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-2">Prénom *</label>

                               <input 
                               type="text" 
                               id="prenom"
                               name="prenom" 
                               readonly
                               value=""
                               class="input-field w-full px-4 py-3 bg-gray-100 text-gray-900 rounded-lg border border-gray-300 placeholder-gray-400 focus:outline-none transition-all duration-200 shadow-sm"
                               placeholder="Prénom"
                               >

                    </div>
                </div>
       <!-- Troisième ligne -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-2">Date de Naissance *</label>

                        <input 
                              readonly
                                id="date_naissance"
                                name="date_naissance"
                                type="text"
                        class="input-field w-full px-4 py-3 bg-gray-100 text-gray-900 rounded-lg border border-gray-300 placeholder-gray-400 focus:outline-none transition-all duration-200 shadow-sm"
                        placeholder="Date de naissance"
                        >

                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-2">Lieu de Naissance *</label>

                        <input 
                        id="lieu_naissance"
                        name="lieu_naissance"
                        type="text"
                        class="input-field w-full px-4 py-3 bg-gray-100 text-gray-900 rounded-lg border border-gray-300 placeholder-gray-400 focus:outline-none transition-all duration-200 shadow-sm"
                        placeholder="Lieu de naissance"
                        >

                    </div>
                </div>
                <!-- Deuxième ligne -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-2">Numéro de téléphone *</label>

                               <input 
                                id="phone"
                                name="phone"
                                type="tel" 
                               class="w-full px-4 py-3 bg-gray-100 text-gray-900 rounded-lg border border-gray-300 placeholder-gray-400 focus:outline-none transition-all duration-200 shadow-sm"
                               placeholder=""
                               pattern="^(77|78|76|75|70)[0-9]{7}$"
                               title="Numéro portable sénégalais (ex: 771234567)"
                               >

                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-2">Mot de passe *</label>

                        <input 
                        id="password"
                        name="password"
                        type="password"
                        minlength="8"
                        readonly
                        class="w-full px-4 py-3 bg-gray-100 text-gray-900 rounded-lg border border-gray-300 placeholder-gray-400 focus:outline-none transition-all duration-200 shadow-sm"
                        >

                    </div>
                </div>

                
            <!-- Photo CNI section (hidden by default) -->
           <!-- <div id="photo-section" class="photo-section"> -->
   
    
    <div class="border border-[#FC7700] w-56 h-32 orange-gradient rounded-md flex items-center justify-center mx-auto mb-3 shadow-md overflow-hidden">
                    <img id="imageCni" alt="Photo CNI" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300 text-center">
    </div>
    <input type="hidden" name="ph">
<!-- </div> -->
 <div class="flex justify-center pt-4">
                <button type="submit" 
                        class="border border-gray-500 orange-gradient text-[#FC7700] font-bold py-3 px-12 rounded-lg transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-orange-300 shadow-lg hover:shadow-xl transform hover:scale-105 active:scale-95">
                    VALIDER
                </button>
 </div>
</div>


            <!-- Submit button -->
           
        </div>
    </form>
</div>

<style>
.orange-gradient {
    background: linear-gradient(135deg, rgba(252, 119, 0, 0.1) 0%, rgba(255, 140, 0, 0.1) 100%);
}

.input-field:focus {
    border-color: #FC7700;
    box-shadow: 0 0 0 3px rgba(252, 119, 0, 0.1);
}

.cni-section {
    background: linear-gradient(135deg, rgba(252, 119, 0, 0.05) 0%, rgba(255, 140, 0, 0.05) 100%);
    border: 1px solid rgba(252, 119, 0, 0.2);
}

.input-field {
    pointer-events: none;
    transition: all 0.3s ease;
}

.form-section.enabled {
    pointer-events: all;
}

/* .photo-section {
    opacity: 0;
    max-height: 0;
    overflow: hidden;
    transition: all 0.5s ease;
} */

.photo-section.show {
    opacity: 1;
    max-height: 500px;
    margin-top: 20px;
}
</style>

<script type="module" src="/assets/js/main.js">$</script>