<div class="popup" id="popupedit{{ $trainerGet->nama }}">
    <div class="popup__content ">
        <div class="head flex" style="justify-items: start; align-items: center; gap: 15px">
            <div class="block">
                <img src="{{ asset('assets/img/logo.png') }}" width="100" alt="">
            </div>
            <div class="text-judul font-bold text-black ">
                JD<span class="font-normal">Sukarobot</span>
            </div>
        </div>
        <br>

        <form action="{{ url('/dataTrainer/edit/' . $trainerGet->nama) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grup-1">
                <label for="inp" class="inp">
                    <input id="inp" type="text" name="nama" placeholder="&nbsp;"
                        value="{{ $trainerGet->nama }}" required />
                    <span class="label">Full Name</span>
                    <span class="focus-bg"></span>
                </label>

                <label for="inp" class="inp">
                    <input id="inp" type="text" name="alamat" placeholder="&nbsp;"
                        value="{{ $trainerGet->alamat }}" />
                    <span class="label">Full Address Trainer</span>
                    <span class="focus-bg"></span>
                </label>

                <label for="inp" class="inp">
                    <input id="inp" type="text" name="lulusan" placeholder="&nbsp;"
                        value="{{ $trainerGet->lulusan }}" required />
                    <span class="label">Graduatess Trainer</span>
                    <span class="focus-bg"></span>
                </label>

                <label for="inp" class="inp">
                    <input id="inp" type="text" name="telephone" placeholder="&nbsp;"
                        value="{{ $trainerGet->telephone }}" required />
                    <span class="label">Telephone Trainer</span>
                    <span class="focus-bg"></span>
                </label>

            </div>
            <br>
            <label for="images22" class="drop-container" id="dropcontainer">
                <span class="drop-title">Drop File Ktp Image</span>
                <input type="text" name="ktp_file_old" value="{{ $trainerGet->ktp_file }}" hidden>
                <input type="file" name="ktp_file" id="images22" accept="image/*">
            </label>
            <br>
            <label for="images33" class="drop-container" id="dropcontainer">
                <span class="drop-title">Drop File Profile Image</span>
                <input type="text" name="profile_file_old" value="{{ $trainerGet->profile }}" hidden>
                <input type="file" name="profile" accept="image/*">
            </label>
            <br>
            <label for="images44" class="drop-container" id="dropcontainer">
                <span class="drop-title">Drop File TTD Image</span>
                <input type="file" name="ttd" id="images44" accept="image/*">
                <input type="text" name="ttd_file_old" value="{{ $trainerGet->ttd }}" hidden>
            </label>

            <button
                style="
            background-color: rgb(39, 136, 255);
            color: white;
            padding: 10px;
            border-radius: 10px;
            margin-top: 10px;
            "
                type="submit">Edited Data</button>
            <a href='#'
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
