<dialog id="modal-laporan-detail-{{ $key->id_schedules }}">
	<h2 class="text-[30px]">Detail Mengajar</h2>
	<div class="">
        <div class="content-body">
            <div class="bg-[#F4F4F7] w-full px-10 py-5 rounded-[16px]">
                <div class="content-body flex gap-3">
                    <img src="{{asset('assets/imgmodal/ICON-FOLDER.svg')}}" class="w-20" alt="">
                    <div class="text-body">
                        <h1 class="poppins-semibold text-2xl">Absensi Anda Pada :</h1>
                        <p class="poppins-regular">12 November 2024</p>
                    </div>
                </div>
                <div class="content-flex flex gap-3 mt-3">
                    <div class="bg-[#FFDBD8] rounded-[16px] px-4 py-2">
                        Private
                    </div>
                    <div class="bg-[#F0DAFB] rounded-[16px] px-4 py-2">
                            Basic 1
                    </div>
                    <div class="bg-[#CBE3FF] rounded-[16px] px-4 py-2">
                        12.00 
                    </div>
                </div>
            </div>
            
        </div>
    </div>
	<button onclick="document.getElementById('modal-laporan-detail-{{ $key->id_schedules }}').close();" aria-label="close" class="x">❌</button>
</dialog>

{{-- === internal css === --}}
<style>
    dialog {
        padding: 1rem 3rem;
        background: white;
        max-width: 700px;
        padding-top: 2rem;
        border: 0;
        border-radius: 24px;
        box-shadow: 0 5px 30px 0 rgb(0 0 0 / 10%);
        animation: fadeIn 1s ease both;
        &::backdrop {
            animation: fadeIn 1s ease both;
            background: rgb(255 255 255 / 40%);
            z-index: 2;
            backdrop-filter: blur(20px);
        }
        .x {
            filter: grayscale(1);
            border: none;
            background: none;
            position: absolute;
            top: 15px;
            right: 10px;
            transition: ease filter, transform 0.3s;
            cursor: pointer;
            transform-origin: center;
            &:hover {
                filter: grayscale(0);
                transform: scale(1.1);
            }
        }
        h2 {
            font-weight: 600;
            font-size: 2rem;
            padding-bottom: 1rem;
        }
        p {
            font-size: 1rem;
            line-height: 1.3rem;
            padding: 0.5rem 0;
            a {
                &:visited {
                    color: rgb(var(--vs-primary));
                }
            }
        }
    }

    button.primary {
        display: inline-block;
        font-size: 0.8rem;
        color: #fff !important;
        background: rgb(var(--vs-primary) / 100%);
        padding: 13px 25px;
        border-radius: 17px;
        transition: background-color 0.1s ease;
        box-sizing: border-box;
        transition: all 0.25s ease;
        border: 0;
        cursor: pointer;
        box-shadow: 0 10px 20px -10px rgb(var(--vs-primary) / 50%);
        &:hover {
            box-shadow: 0 20px 20px -10px rgb(var(--vs-primary) / 50%);
            transform: translateY(-5px);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

</style>