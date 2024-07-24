<div class="popup" id="popupdelete{{ $trainerGet->nama }}">
    <div class="popup__content">
        <div class="head flex" style="justify-items: start; align-items: center; gap: 15px">
            <div class="block">
                <img src="{{ asset('assets/img/logo.png') }}" width="100" alt="">
            </div>
            <div class="text-judul font-bold text-black ">
                JD<span class="font-normal">Sukarobot</span>
            </div>
        </div>
        <br>
        <form action="{{ url('/dataTrainer/delete/' . $trainerGet->nama) }}">
            @csrf
            @method('DELETE')
            <div class="container"
                style="
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            ">
                <img src="{{ asset('assets/img/animasiRoboto.gif') }}" style="width:20em" alt="SukarobotAcademy">
                <div class="grup">
                    <h6 class="text-center">Are You Sure To delete ?</h6>
                    <button
                        style="background-color: rgb(0, 151, 238);
                    width: 130px;
                    border-radius: 10px;
                    color: white;
                    height: 40px;
                    "
                        type="submit">Delete Data</button>
                    <a style="background-color: rgb(255, 81, 0);
                    padding: 10px;
                    border-radius: 10px;
                    color: white;
                    "
                        href='#'>Close Modal</a>
                </div>
            </div>
        </form>
    </div>
</div>
