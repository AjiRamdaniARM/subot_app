<form data-aos="fade-down" @submit.prevent="submitForm" x-data="userForm" method="POST" class="mx-auto p-6 rounded-lg" enctype="multipart/form-data">
    @csrf
    <div class="content-profile-edit lg:py-10 py-4">
        <div class=" w-full ">
            <h1 class="text-xl font-semibold mb-4">Avatar</h1>
            <div data-aos="fade-right" class="flex flex-wrap justify-start items-center gap-5">
                <div class="profile">
                    <a href="{{asset('assets/trainer_data/profile/'. auth()->guard('trainer')->user()->profile )}}">
                        <img id="previewProfile" class="w-28 h-28 object-cover rounded-full" src="{{asset('assets/trainer_data/profile/'. auth()->guard('trainer')->user()->profile )}}" alt="Profile Picture" id="profile">
                    </a>
                   
                </div>
                <div class="p_right">
                    <input type="file" x-on:change="files = Object.values($event.target.files)" x-model='inputDataProfile' name="inputDataProfile" hidden id="inputProfile">
                    <button class="border border-gray-500 rounded-lg px-5 py-3 bg-gray-100 hover:bg-gray-200 transition duration-200 hover:scale-105 transition-all" type="button" id="profileButton">Unggah Gambar Baru</button>
                    <p class="text-sm text-gray-600 mt-2">Rekomendasi ukuran gambar 1080 x 1080. Format file JPG, PNG, atau GIF.</p>
                </div>
            </div>
        </div>
    </div>

    <div>
        <fieldset class="mb-6">
            <legend class="text-lg font-semibold mb-4">Perbarui Informasi Akun</legend>

            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" x-model="nama" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Nama Lengkap" x-init="$el.value = '{{ auth()->guard('trainer')->user()->nama }}'; nama = $el.value"  required>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Akun</label>
                    <input type="email" x-init="$el.value = '{{ auth()->guard('trainer')->user()->email }}'; email = $el.value" id="email" name="email" x-model="email" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"   required>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password Akun</label>
                    <input type="password" x-init="$el.value = '{{ auth()->guard('trainer')->user()->password }}'; password = $el.value" id="password" name="password" x-model="password"   class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Password Akun" required>
                    <span x-show="errors.password" class="text-red-500 text-sm" x-text="errors.password"></span>
                </div>
                <div>
                    <label for="alamat" class="block text-sm font-medium text-gray-700 mb-2">Alamat</label>
                    <input type="text" x-init="$el.value = '{{ auth()->guard('trainer')->user()->alamat }}'; alamat = $el.value" id="alamat" name="alamat" x-model="alamat" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Alamat" required>
                </div>
                <div>
                    <label for="lulusan" class="block text-sm font-medium text-gray-700 mb-2">Lulusan</label>
                    <input type="text" x-init="$el.value = '{{ auth()->guard('trainer')->user()->lulusan }}'; lulusan = $el.value" id="lulusan" name="lulusan" x-model="lulusan" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Lulusan" required>
                </div>
                <div>
                    <label for="telephone" class="block text-sm font-medium text-gray-700 mb-2">Telepone</label>
                    <input type="text" x-init="$el.value = '{{ auth()->guard('trainer')->user()->telephone }}'; telephone = $el.value" id="telephone" name="telephone" x-model="telephone" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Telepone" required>
                    <span x-show="errors.telephone" class="text-red-500 text-sm relative mt-3" x-text="errors.telephone"></span>
                </div>
            </div>

            <button type="submit" :disabled="submitting"   class="w-full relative mt-4 py-2 px-4 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Submit</button>

        </fieldset>
    </div>
</form>


<style>
    .animate-fade-in {
        opacity: 0;
        transform: translateY(-10px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .show {
        opacity: 1;
        transform: translateY(0);
    }
</style>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('userForm', () => ({
            nama: '',
            email: '',
            password: '',
            alamat: '',
            lulusan: '',
            telephone: '',
            inputDataProfile: null, 
            errors: {
                'password': '',
                'telephone': ''
            },
            submitting: false,

            async submitForm() {
             
            if (this.password.length < 4) {
                this.errors.password = "Password harus memiliki minimal 4 karakter";
                return;
            } else {
                this.errors.password = "";
            }
                var numbersOnly = /^[0-9]+$/;
                if (!this.telephone.match(numbersOnly)) {
                    this.errors.telephone = "Nomor telepon harus berupa angka";
                    return;
                } else {
                    this.errors.telephone = "";
                }
                if (this.submitting) return;
                this.submitting = true;

                const dataInput = new FormData();
                dataInput.append('nama', this.nama);
                dataInput.append('email', this.email);
                dataInput.append('password', this.password);
                dataInput.append('alamat', this.alamat);
                dataInput.append('lulusan', this.lulusan);
                dataInput.append('telephone', this.telephone);

                if (this.inputDataProfile) {
                dataInput.append('profile', this.inputDataProfile);
                }

                try {
                    const response = await fetch("{{ route('akun.post',$UserAccount->id) }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-Token": "{{ csrf_token() }}"
                        },
                        
                        body: dataInput
                    });
                    if (response.ok) {
                        // window.location.href = "{{ route('akun')}}";
                        console.log('berhasil');
                        console.log(this.inputDataProfile);
                    } else {
                        alert("Gagal mengupdate data");
                    }
                } catch (error) {
                    console.error("Error:", error);
                } finally {
                    this.submitting = false;
                }
            }
            
        }));
    });

    const fileInput = document.getElementById('inputProfile');
    const previewImage = document.getElementById('previewProfile');
    const inputButton = document.getElementById('profileButton');

    inputButton.addEventListener('click', function() {
        fileInput.click();
        if (fileInput.checked) {
            inputButton.innerHTML = 'berhasil';
        }
    })

    fileInput.addEventListener('change', event => {
        if (event.target.files.length > 0) {
            inputButton.innerHTML = `
            <span id="animatedContent" class="flex items-center gap-5"><svg class="h-5 w-5 text-blue-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                    <polyline points="22 4 12 14.01 9 11.01" />
                </svg>
                Berhasil</span>
                
            `;
            previewImage.src = URL.createObjectURL(event.target.files[0],);
        } else {
            fileInput.value = null;
        }
    })

    const animatedContent = document.getElementById('animatedContent');
    setTimeout(() => {
        animatedContent.classList.add("show");
    }, 2000);

</script>


