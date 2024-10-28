<form data-aos="fade-down" @submit.prevent="submitForm" x-data="userForm" method="POST" class="mx-auto p-6 rounded-lg">
    @csrf
    <div class="content-profile-edit lg:py-10 py-4">
        <div class=" w-full ">
            <h1 class="text-xl font-semibold mb-4">Avatar</h1>
            <div data-aos="fade-right" class="flex flex-wrap justify-start items-center gap-5">
                <div class="profile">
                    <img id="previewProfile" class="w-28 h-28 object-cover rounded-full" src="{{ asset('assets/trainer_data/ktp/ktp_Aji Ramdani.jpeg') }}" alt="Profile Picture" id="profile">
                </div>
                <div class="p_right">
                    <input type="file" hidden id="inputProfile">
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
                <input type="text" id="nama" name="nama" x-model="nama" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Nama Lengkap" required>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Akun</label>
                    <input type="email" id="email" name="email" x-model="email" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Email Akun" required>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password Akun</label>
                    <input type="password" id="password" name="password" x-model="password"   class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Password Akun" required>
                    <span x-show="errors.password" class="text-red-500 text-sm" x-text="errors.password"></span>
                </div>
                <div>
                    <label for="alamat" class="block text-sm font-medium text-gray-700 mb-2">Alamat</label>
                    <input type="text" id="alamat" name="alamat" x-model="alamat" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Alamat" required>
                </div>
                <div>
                    <label for="lulusan" class="block text-sm font-medium text-gray-700 mb-2">Lulusan</label>
                    <input type="text" id="lulusan" name="lulusan" x-model="lulusan" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Lulusan" required>
                </div>
                <div>
                    <label for="telephone" class="block text-sm font-medium text-gray-700 mb-2">Telepone</label>
                    <input type="text" id="telephone" name="telephone" x-model="telephone" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Telepone" required>
                    <span x-show="errors.telephone" class="text-red-500 text-sm relative mt-3" x-text="errors.telephone"></span>
                </div>
            </div>

            <button type="submit" :disabled="submitting"   class="w-full relative mt-4 py-2 px-4 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Submit</button>

        </fieldset>
    </div>
</form>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('userForm', () => ({
            nama: '',
            email: '',
            password: '',
            alamat: '',
            lulusan: '',
            telephone: '',
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

                try {
                    const response = await fetch("{{ route('akun.post',$UserAccount->id) }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-Token": "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({
                            nama: this.nama,
                            email: this.email,
                            password: this.password,
                            alamat: this.alamat,
                            lulusan: this.lulusan,
                            telephone: this.telephone,
                            _method: "PUT"
                        })
                    });

                    if (response.ok) {
                        window.location.href = "{{ route('akun')}}";
                        console.log('berhasil');
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
    })

    fileInput.addEventListener('change', event => {
        if (event.target.files.length > 0) {
            previewImage.src = URL.createObjectURL(event.target.files[0],);
        } else {
            fileInput.value = null;
        }
    })
</script>

