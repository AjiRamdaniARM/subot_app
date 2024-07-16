<div class="popup" id="popup">
    <div class="popup__content" style="padding: 50px">
        <div class="head flex" style="justify-items: start; align-items: center; gap: 15px">
            <div class="block">
                <img src="{{asset('assets/img/logo.png')}}" width="100" alt="">
            </div>
            <div class="text-judul font-bold text-black ">
                JD<span class="font-normal">Sukarobot</span>
            </div>
        </div>
        <br>
        <form action="{{ route('trainer.add') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grup-1">
              <label for="inp" class="inp">
                <input id="inp" type="text" name="nama" placeholder="&nbsp;" required />
                <span class="label">Full Name</span>
                <span class="focus-bg"></span>
              </label>

              <label for="inp" class="inp">
                <input id="inp" type="text" name="alamat" placeholder="&nbsp;" />
                <span class="label">Full Address Trainer</span>
                <span class="focus-bg"></span>
              </label>

              <label for="inp" class="inp">
                <input id="inp" type="text" name="lulusan" placeholder="&nbsp;" required />
                <span class="label">Graduatess Trainer</span>
                <span class="focus-bg"></span>
              </label>

            </div>
            <br>
            <label for="images" class="drop-container" id="dropcontainer">
              <span class="drop-title">Drop File Ktp Image</span>
              or
              <input type="file" name="ktp_file"  id="images" accept="image/*" required>
            </label>
            <br>
            <label for="images" class="drop-container" id="dropcontainer">
              <span class="drop-title">Drop File Profile Image</span>
              or
              <input type="file" name="profile"  id="images" accept="image/*" required>
            </label>
            <br>
            <label for="images" class="drop-container" id="dropcontainer">
              <span class="drop-title">Drop File Tanda Tangan Image</span>
              or
              <input type="file" name="ttd"  id="images" accept="image/*" required>
            </label>

            <button
            style="
            background-color: rgb(39, 136, 255);
            color: white;
            padding: 10px;
            border-radius: 10px;
            margin-top: 10px;
            "
            type="submit">Create Data</button>
            <button
            onclick="window.location.href='#'"
            style="
            background-color: rgb(255, 194, 39);
            color: rgb(0, 0, 0);
            padding: 10px;
            border-radius: 10px;
            margin-top: 10px;
            "
            type="submit">Close Modal</button>
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
.inp input:not(:-moz-placeholder-shown) + .label {
  color: rgba(0, 0, 0, 0.5);
  transform: translate3d(0, -12px, 0) scale(0.75);
}
.inp input:not(:-ms-input-placeholder) + .label {
  color: rgba(0, 0, 0, 0.5);
  transform: translate3d(0, -12px, 0) scale(0.75);
}
.inp input:not(:placeholder-shown) + .label {
  color: rgba(0, 0, 0, 0.5);
  transform: translate3d(0, -12px, 0) scale(0.75);
}
.inp input:focus {
  background: rgb(255, 183, 0);
  outline: none;
  box-shadow: inset 0 -2px 0 #000000;
}
.inp input:focus + .label {
  color: #000000;
  transform: translate3d(0, -12px, 0) scale(0.75);
}
.inp input:focus + .label + .focus-bg {
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
