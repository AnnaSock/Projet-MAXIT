<div class="max-w-3xl w-full mx-auto mt-[8vh] bg-white rounded-2xl shadow-2xl p-8 relative">
        <!-- Orange decorative elements -->
        <div class="absolute top-0 right-0 w-32 h-32 opacity-10">
            <svg viewBox="0 0 200 200" class="w-full h-full">
                <circle cx="150" cy="50" r="40" fill="#FC7700"/>
                <circle cx="170" cy="70" r="30" fill="#FF8C00"/>
            </svg>
        </div>
        <div class="absolute bottom-0 left-0 w-24 h-24 opacity-10">
            <svg viewBox="0 0 100 100" class="w-full h-full">
                <rect x="10" y="10" width="30" height="30" fill="#FC7700" transform="rotate(45 25 25)"/>
                <rect x="40" y="40" width="20" height="20" fill="#FF8C00" transform="rotate(45 50 50)"/>
            </svg>
        </div>

        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Créer un compte</h1>
            <p class="text-base font-medium" style="color: #FC7700;">Saisissez les informations suivantes</p>
        </div>

        <!-- Form -->
        <form action="/accesCompte" class="space-y-6">
            <!-- First row -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2">Nom</label>
                    <input type="text" placeholder="Entrer votre nom" 
                           class="input-field w-full px-4 py-3 bg-gray-50 text-gray-900 rounded-lg border border-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white transition-all duration-200 shadow-sm hover:shadow-md">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2">Carte d'identité Nationale</label>
                    <input type="text" placeholder="Numéro CNI" 
                           class="input-field w-full px-4 py-3 bg-gray-50 text-gray-900 rounded-lg border border-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white transition-all duration-200 shadow-sm hover:shadow-md">
                </div>
            </div>

            <!-- Second row -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2">Prénom</label>
                    <input type="text" placeholder="Entrer votre prénom" 
                           class="input-field w-full px-4 py-3 bg-gray-50 text-gray-900 rounded-lg border border-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white transition-all duration-200 shadow-sm hover:shadow-md">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2">Numéro de téléphone</label>
                    <input type="tel" placeholder="Numéro de téléphone" 
                           class="input-field w-full px-4 py-3 bg-gray-50 text-gray-900 rounded-lg border border-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white transition-all duration-200 shadow-sm hover:shadow-md">
                </div>
            </div>

            <!-- Third row -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2">Mot de passe</label>
                    <input type="password" placeholder="Mot de passe" 
                           class="input-field w-full px-4 py-3 bg-gray-50 text-gray-900 rounded-lg border border-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white transition-all duration-200 shadow-sm hover:shadow-md">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2">Confirmer le mot de passe</label>
                    <input type="password" placeholder="Confirmer mot de passe" 
                           class="input-field w-full px-4 py-3 bg-gray-50 text-gray-900 rounded-lg border border-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white transition-all duration-200 shadow-sm hover:shadow-md">
                </div>
            </div>

            <!-- Photo CNI section -->
            <div>
                <label class="block text-gray-700 text-sm font-semibold mb-4">Photo CNI</label>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <!-- RECTO -->
                    <div class="upload-area rounded-lg p-6 text-center transition-all duration-300 cursor-pointer group">
                        <div class="mb-3">
                            <div class="w-16 h-16 orange-gradient rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                <svg class="w-8 h-8 text-[#FC7700]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gray-800 font-semibold text-base mb-1">RECTO</p>
                        <p class="text-gray-500 text-sm">Cliquez pour télécharger</p>
                    </div>

                    <!-- VERSO -->
                    <div class="upload-area rounded-lg p-6 text-center transition-all duration-300 cursor-pointer group">
                        <div class="mb-3">
                            <div class="w-16 h-16 orange-gradient rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                <svg class="w-8 h-8 text-[#FC7700]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gray-800 font-semibold text-base mb-1">VERSO</p>
                        <p class="text-gray-500 text-sm">Cliquez pour télécharger</p>
                    </div>
                </div>
            </div>

            <!-- Submit button -->
            <div class="flex justify-center pt-4">
                <button type="button" 
                        class="orange-gradient text-[#FC7700] font-bold py-3 px-12 rounded-lg transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-orange-300 shadow-lg hover:shadow-xl transform hover:scale-105 active:scale-95">
                    VALIDER
                </button>
            </div>
        </form>

        <!-- Login link -->
        <div class="text-center mt-6">
            <p class="text-gray-600 text-sm">
                Vous avez déjà un compte ? 
                <a href="#" class="font-semibold hover:underline" style="color: #FC7700;">Se connecter</a>
            </p>
        </div>
    </div>

    <script>
        // Add click functionality to upload areas
        document.querySelectorAll('.upload-area').forEach(uploadArea => {
            uploadArea.addEventListener('click', function() {
                const input = document.createElement('input');
                input.type = 'file';
                input.accept = 'image/*';
                input.onchange = function(e) {
                    const file = e.target.files[0];
                    if (file) {
                        // Here you would typically handle the file upload
                        console.log('File selected:', file.name);
                        // Update the UI to show the selected file
                        const fileName = uploadArea.querySelector('p:last-child');
                        if (fileName) {
                            fileName.textContent = file.name;
                            fileName.style.color = '#FC7700';
                            fileName.style.fontWeight = '600';
                        }
                        // Add a checkmark or success indicator
                        const icon = uploadArea.querySelector('svg');
                        if (icon) {
                            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>';
                        }
                    }
                };
                input.click();
            });
        });

        // Form validation
        document.querySelector('button[type="button"]').addEventListener('click', function(e) {
            e.preventDefault();
            // Add your form validation and submission logic here
            console.log('Form submitted');
        });
    </script>
