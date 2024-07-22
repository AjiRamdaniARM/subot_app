    <div class="popup" id="popup/{{ $getDataKid->nama_lengkap }}">
        <div class="popup__content">
            <div class="head flex" style="justify-items: start; align-items: center; gap: 15px">
                <div class="block">
                    <img src="{{ asset('assets/img/logo.png') }}" width="100" alt="">
                </div>
                <div class="text-judul font-bold text-black ">
                    JD<span class="font-bold">Sukarobot</span>
                </div>
            </div>
            <br>
            <form action="{{ url('/datakids/edit/' . $getDataKid->nama_lengkap) }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                <div class="grup-1 flex flex-wrap">
                    <label for="inp" class="inp">
                        <input id="inp" type="text" name="nama_lengkap" value="{{ $getDataKid->nama_lengkap }}"
                            placeholder="&nbsp;" required />
                        <span class="label">Full Name Kids</span>
                        <span class="focus-bg"></span>
                    </label>

                    <label for="inp" class="inp">
                        <input id="inp" type="text" value="{{ $getDataKid->tl }}" name="tl"
                            placeholder="&nbsp;" />
                        <span class="label">Place of Birth</span>
                        <span class="focus-bg"></span>
                    </label>

                    <label for="inp" class="inp">
                        <input id="inp" type="date" value="{{ $getDataKid->tanggal_lahir }}"
                            name="tanggal_lahir" placeholder="&nbsp;" required />
                        <span class="label">Date of Birth</span>
                        <span class="focus-bg"></span>
                    </label>

                    <label for="inp" class="inp">
                        <input id="inp" value="{{ $getDataKid->sekolah }}" type="text" name="sekolah"
                            placeholder="&nbsp;" required />
                        <input id="inp" value="{{ $getDataKid->id_sekolah }}" type="text" hidden
                            name="id_sekolah" placeholder="&nbsp;" required readonly />
                        <span class="label">School Kids</span>
                        <span class="focus-bg"></span>
                    </label>

                    <label for="inp" class="inp">
                        <input id="inp" value="{{ $getDataKid->kelas }}" type="text" name="kelas"
                            placeholder="&nbsp;" required />
                        <span class="label">Class Kids</span>
                        <span class="focus-bg"></span>
                    </label>

                    <label for="inp" class="inp">
                        <input id="inp" value="{{ $getDataKid->telephone }}" type="text" name="telephone"
                            placeholder="&nbsp;" required />
                        <span class="label">Number Telephone</span>
                        <span class="focus-bg"></span>
                    </label>
                    <label for="inp" class="inp">
                        <input id="inp" value="{{ $getDataKid->nama_ortu }}" type="text" name="nama_ortu"
                            placeholder="&nbsp;" required />
                        <span class="label">Parent's Full Name</span>
                        <span class="focus-bg"></span>
                    </label>
                    <label for="inp" class="inp">
                        <input id="inp" value="{{ $getDataKid->work_ortu }}" type="text" name="work_ortu"
                            placeholder="&nbsp;" required />
                        <span class="label">Parent's Occupation</span>
                        <span class="focus-bg"></span>
                    </label>
                    <label for="inp" class="inp">
                        <input id="inp" value="{{ $getDataKid->alamat_anak }}" type="text" name="alamat"
                            placeholder="&nbsp;" required readonly />
                        <span class="label">Address</span>
                        <span class="focus-bg"></span>
                    </label>

                </div>
                <br>
                <label for="images{{ $getDataKid->file }}" class="drop-container" id="dropcontainer">
                    <span class="drop-title">Drop File Ktp Image</span>
                    <input type="file" hidden name="file" id="images{{ $getDataKid->file }}"
                        accept="image/*">
                </label>

                <div class="flex flex-col relative mt-5" style="position: relative; margin-top:10px">
                    <div id="preview">
                        <img id="previewImage{{ $getDataKid->file }}" class="preview-image w-full"
                            style="border-radius: 10px;">
                    </div>
                </div>
                <script>
                    document.getElementById('images{{ $getDataKid->file }}').addEventListener('change', function(event) {
                        const file = event.target.files[0];
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                document.getElementById('previewImage{{ $getDataKid->file }}').src = e.target.result;
                            }
                            reader.readAsDataURL(file);
                        }
                    });
                </script>

                <button class="transisi-all animasi-scale-hover-105:hover animasi-scale-focus-105:focus"
                    style="
                background-color: rgb(39, 136, 255);
                color: white;
                padding: 10px;
                border-radius: 10px;
                margin-top: 10px;
                "
                    type="submit">Create Data</button>
                <a class="transisi-all animasi-scale-hover-105:hover animasi-scale-focus-105:focus" href='#'
                    style="
                background-color: rgb(255, 194, 39);
                color: rgb(0, 0, 0);
                padding: 10px;
                border-radius: 10px;
                margin-top: 10px;
                ">Close
                    Modal</a>
            </form>
            {{-- <a href="#"">Close Popup</a> --}}
        </div>
    </div>


    <style>
        .grup-1 {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        @media (max-width: 599px) {
            .grup-1 {
                display: flex;
                flex-direction: column;
            }
        }

        .inp {
            position: relative;
            margin: auto;
            width: 100%;
            max-width: 280px;
            border-radius: 3px;
            overflow: hidden;
        }

        .inp .label {
            position: absolute;
            top: 20px;
            left: 12px;
            font-size: 16px;
            color: rgba(0, 0, 0, 0.5);
            font-weight: 500;
            transform-origin: 0 0;
            transform: translate3d(0, 0, 0);
            transition: all 0.2s ease;
            pointer-events: none;
        }

        .inp .focus-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.05);
            z-index: -1;
            transform: scaleX(0);
            transform-origin: left;
        }

        .inp input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 100%;
            border: 0;
            font-family: inherit;
            padding: 16px 12px 0 12px;
            height: 56px;
            font-size: 16px;
            font-weight: 400;
            background: rgba(0, 0, 0, 0.02);
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.3);
            color: #000;
            transition: all 0.15s ease;
        }

        .inp input:hover {
            background: rgba(0, 0, 0, 0.04);
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.5);
        }

        .inp input:not(:-moz-placeholder-shown)+.label {
            color: rgba(0, 0, 0, 0.5);
            transform: translate3d(0, -12px, 0) scale(0.75);
        }

        .inp input:not(:-ms-input-placeholder)+.label {
            color: rgba(0, 0, 0, 0.5);
            transform: translate3d(0, -12px, 0) scale(0.75);
        }

        .inp input:not(:placeholder-shown)+.label {
            color: rgba(0, 0, 0, 0.5);
            transform: translate3d(0, -12px, 0) scale(0.75);
        }

        .inp input:focus {
            background: rgb(255, 183, 0);
            outline: none;
            box-shadow: inset 0 -2px 0 #000000;
        }

        .inp input:focus+.label {
            color: #000000;
            transform: translate3d(0, -12px, 0) scale(0.75);
        }

        .inp input:focus+.label+.focus-bg {
            transform: scaleX(1);
            transition: all 0.1s ease;
        }

        .drop-container {
            position: relative;
            display: flex;
            gap: 10px;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 200px;
            padding: 20px;
            border-radius: 10px;
            border: 2px dashed #555;
            color: #444;
            cursor: pointer;
            transition: background .2s ease-in-out, border .2s ease-in-out;
        }

        .drop-container:hover {
            background: #eee;
            border-color: #111;
        }

        .drop-container:hover .drop-title {
            color: #222;
        }

        .drop-title {
            color: #444;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            transition: color .2s ease-in-out;
        }

        input[type=file]::file-selector-button {
            margin-right: 20px;
            border: none;
            background: #084cdf;
            padding: 10px 20px;
            border-radius: 10px;
            color: #fff;
            cursor: pointer;
            transition: background .2s ease-in-out;
        }

        input[type=file]::file-selector-button:hover {
            background: #0d45a5;
        }

        .popup__content {
            overflow-y: auto;
            height: 30em;
        }
    </style>
