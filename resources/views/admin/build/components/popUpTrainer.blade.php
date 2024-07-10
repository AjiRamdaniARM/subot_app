

<div class="popup" id="popup">
    <div class="popup__content " style="padding: 50px">
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
            <div class="grup-1 flex">
                <div class="form__group field">
                    <label class="form__label" for="nama">Full Name Trainer</label>
                    <input class="form__field" type="text" name="nama" placeholder="Full Name" />
                </div>
               <div class="form__group field">
                    <label  for="ktp_file">Trainer Graduatess</label>
                    <input  type="file" name="ktp_file" />
                </div>
            </div>

           <div class="form__group field">
                <label class="form__label" for="alamat">Full Address Trainer</label>
                <input class="form__field" type="text" name="alamat" placeholder="Full Address" />
            </div>
           <div class="form__group field">
                <label class="form__label" for="lulusan">Trainer Graduatess</label>
                <input class="form__field" type="text" name="lulusan" placeholder="Trainer Graduatess" />
            </div>
           <div class="form__group field">
                <label for="profile">Trainer Profile</label>
                <input type="file" name="profile" />
            </div>
           <div class="form__group field">
                <label for="ttd">Trainer Signature</label>
                <input type="file" name="ttd" />
            </div>
            <button type="submit">Create Data</button>
        </form>
        {{-- <a href="#"">Close Popup</a> --}}
    </div>
  </div>


  <style>

.form__group {
  position: relative;
  padding: 15px 0 0;
  margin-top: 10px;
  width: 50%;
}

.form__field {
  font-family: inherit;
  width: 100%;
  border: 0;
  border-bottom: 2px solid #9b9b9b;
  outline: 0;
  font-size: 1.3rem;
  color: #000;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;
}
.form__field::placeholder {
  color: transparent;
}
.form__field:placeholder-shown ~ .form__label {
  font-size: 1.3rem;
  cursor: text;
  top: 20px;
}

.form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
  color: #9b9b9b;
}

.form__field:focus {
  padding-bottom: 6px;
  font-weight: 700;
  border-width: 3px;
  border-image: linear-gradient(to right, #11998e, #38ef7d);
  border-image-slice: 1;
}
.form__field:focus ~ .form__label {
  position: absolute;
  top: 10;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
  color: #11998e;
  font-weight: 700;
}

/* reset input */
.form__field:required, .form__field:invalid {
  box-shadow: none;
}




  </style>
