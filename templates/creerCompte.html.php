<div class="max-w-3xl w-full mx-auto mt-4 bg-white rounded-2xl shadow-2xl p-8 relative">
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
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Créer un compte</h1>
            <p class="text-base font-medium" style="color: #FC7700;">Saisissez les informations suivantes</p>
        </div>

        <!-- Form -->
        <form action="/account/save" class="space-y-6">
            <!-- CNI Section (Priority) -->
            <div class="cni-section rounded-lg p-6 mb-8">
                <div class="flex items-center mb-4">
                    <svg class="w-6 h-6 text-[#FC7700] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3 class="text-lg font-bold text-gray-800">Étape 1 : Vérification CNI</h3>
                    <span class="ml-2 text-sm text-red-600 font-medium">(Obligatoire)</span>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2">Carte d'identité Nationale *</label>
                    <input type="text" id="cni-input" placeholder="Entrez votre numéro CNI" required
                           class="input-field w-full px-4 py-3 bg-gray-50 text-gray-900 rounded-lg border border-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white transition-all duration-200 shadow-sm hover:shadow-md">
                    <p class="text-sm text-gray-500 mt-2">
                        <svg class="inline w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Veuillez saisir votre numéro CNI pour continuer l'inscription
                    </p>
                    <div id="cni-status" class="mt-3 hidden">
                        <div class="flex items-center text-green-600">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="font-medium">CNI vérifiée avec succès !</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rest of the form (disabled by default) -->
            <div id="form-sections" class="form-section space-y-6">
                <!-- Personal Information Header -->
                <div class="border-l-4 border-[#FC7700] pl-4 mb-6">
                    <h3 class="text-lg font-bold text-gray-800">Étape 2 : Informations personnelles</h3>
                </div>

                <!-- First row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-2">Nom *</label>
                        <input type="text" placeholder="Entrer votre nom" required
                               class="input-field w-full px-4 py-3 bg-gray-50 text-gray-900 rounded-lg border border-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white transition-all duration-200 shadow-sm hover:shadow-md">
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-2">Prénom *</label>
                        <input type="text" placeholder="Entrer votre prénom" required
                               class="input-field w-full px-4 py-3 bg-gray-50 text-gray-900 rounded-lg border border-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white transition-all duration-200 shadow-sm hover:shadow-md">
                    </div>
                </div>

                <!-- Second row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-2">Numéro de téléphone *</label>
                        <input type="tel" placeholder="Numéro de téléphone" required
                               class="input-field w-full px-4 py-3 bg-gray-50 text-gray-900 rounded-lg border border-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white transition-all duration-200 shadow-sm hover:shadow-md">
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-semibold mb-2">Mot de passe *</label>
                        <input type="password" placeholder="Mot de passe" required
                               class="input-field w-full px-4 py-3 bg-gray-50 text-gray-900 rounded-lg border border-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white transition-all duration-200 shadow-sm hover:shadow-md">
                    </div>
                </div>

                <!-- Photo CNI section -->
                <div>
                    <div class="border-l-4 border-[#FC7700] pl-4 mb-4">
                        <h3 class="text-lg font-bold text-gray-800">Étape 3 : Photo CNI</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <!-- RECTO -->
                        <div class="upload-area rounded-lg p-6 text-center transition-all duration-300 cursor-pointer group border border-gray-500">
                            <div class="mb-3">
                                <div class="border border-[#FC7700] w-16 h-16 orange-gradient rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                    <svg class="w-8 h-8 text-[#FC7700]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="text-gray-800 font-semibold text-base mb-1">RECTO</p>
                            <p class="text-gray-500 text-sm">Cliquez pour télécharger</p>
                        </div>

                        <!-- VERSO -->
                        <div class="upload-area rounded-lg p-6 text-center transition-all duration-300 cursor-pointer group border border-gray-500">
                            <div class="mb-3">
                                <div class="border border-[#FC7700] w-16 h-16 orange-gradient rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300 shadow-lg">
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
                    <button type="submit" 
                            class="border border-gray-500 orange-gradient text-[#FC7700] font-bold py-3 px-12 rounded-lg transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-orange-300 shadow-lg hover:shadow-xl transform hover:scale-105 active:scale-95">
                        VALIDER
                    </button>
                </div>
            </div>
        </form>

        <!-- Login link -->
        <!-- <div class="text-center mt-6">
            <p class="text-gray-600 text-sm">
                Vous avez déjà un compte ? 
                <a href="/login" class="font-semibold hover:underline" style="color: #FC7700;">Se connecter</a>
            </p>
        </div> -->
    </div>

    <script>
        // CNI validation logic
        const cniInput = document.getElementById('cni-input');
        const cniStatus = document.getElementById('cni-status');
        const formSections = document.getElementById('form-sections');

        cniInput.addEventListener('input', function() {
            const cniValue = this.value.trim();
            
            // Simulate CNI validation (replace with your actual validation logic)
            if (cniValue.length >= 8) {
                // Simulate API call delay
                setTimeout(() => {
                    validateCNI(cniValue);
                }, 500);
            } else {
                resetCNIValidation();
            }
        });

        function validateCNI(cniNumber) {
            // Replace this with your actual CNI validation API call
            // For demo, we'll assume any CNI with 8+ characters is valid
            const isValid = cniNumber.length >= 8;
            
            if (isValid) {
                cniStatus.classList.remove('hidden');
                cniInput.classList.add('border-green-500');
                cniInput.classList.remove('border-red-500');
                formSections.classList.add('enabled');
                
                // Smooth scroll to next section
                setTimeout(() => {
                    formSections.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }, 300);
            } else {
                resetCNIValidation();
                cniInput.classList.add('border-red-500');
                cniInput.classList.remove('border-green-500');
            }
        }

        function resetCNIValidation() {
            cniStatus.classList.add('hidden');
            cniInput.classList.remove('border-green-500', 'border-red-500');
            formSections.classList.remove('enabled');
        }

        // Add click functionality to upload areas
        document.querySelectorAll('.upload-area').forEach(uploadArea => {
            uploadArea.addEventListener('click', function() {
                const input = document.createElement('input');
                input.type = 'file';
                input.accept = 'image/*';
                input.onchange = function(e) {
                    const file = e.target.files[0];
                    if (file) {
                        console.log('File selected:', file.name);
                        const fileName = uploadArea.querySelector('p:last-child');
                        if (fileName) {
                            fileName.textContent = file.name;
                            fileName.style.color = '#FC7700';
                            fileName.style.fontWeight = '600';
                        }
                        const icon = uploadArea.querySelector('svg');
                        if (icon) {
                            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>';
                        }
                    }
                };
                input.click();
            });
        });

        // Form submission with validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const cniValue = cniInput.value.trim();
            if (cniValue.length < 8) {
                e.preventDefault();
                alert('Veuillez d\'abord valider votre numéro CNI');
                cniInput.focus();
                return false;
            }
            
            // Add your form submission logic here
            console.log('Form submitted with CNI:', cniValue);
        });
    </script>
</body>
</html>