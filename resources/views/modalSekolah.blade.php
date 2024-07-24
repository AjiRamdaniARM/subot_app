<dialog id="dialog">
    <form action="{{ route('add.school') }}" method="POST">
        @csrf
        <h2 class="poppins-bold">Tambah Sekolah</h2>
        <div class="voucher-container">
            <h6 class="voucher-title">Jika sekolahmu tidak ada dalam daftar, silakan tambahkan di sini.<span></span></h6>
        </div>
        <div class="voucher-code-container">
            <h6 class="voucher-code-title">Input Here</h6>
            <input type="text" name="sekolah" placeholder="CTH : SUKAROBOT ACADEMY" class="voucher-input p-4" required
                onkeyup="makeUpperCase(this)">
        </div>
        <button type="submit" class="voucher-button">Tambah</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function makeUpperCase(input) {
            input.value = input.value.toUpperCase();
        }
    </script>

    <button onclick="window.dialog.close();" aria-label="close" class="x">❌</button>
</dialog>


<dialog id="dialogAdmin">
    <form action="{{ route('add.school') }}" method="POST">
        @csrf
        <h2 class="poppins-bold">Add School</h2>
        <div class="voucher-container-admin">
            <h6 class="voucher-title">If the school is not on the list, please add it here.<span></span>
            </h6>
        </div>
        <div class="voucher-code-container-admin">
            <h6 class="voucher-code-title-admin">Input Here</h6>
            <input type="text" name="sekolah" placeholder="EXP : SUKAROBOT ACADEMY" class="voucher-input p-4"
                required onkeyup="makeUpperCase(this)">
        </div>
        <button type="submit" class="voucher-button-admin">Create</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function makeUpperCase(input) {
            input.value = input.value.toUpperCase();
        }
    </script>

    <button onclick="window.dialogAdmin.close();" aria-label="close" class="x">❌</button>
</dialog>



<style>
    .poppins-bold {
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
    }

    .voucher-container-admin {
        border: 2px solid #ff6f00;
        background-color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 1rem;
        padding: 1rem 2.5rem;
    }

    .voucher-title {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        text-align: left;
    }

    .voucher-code-container-admin {
        padding: 1.25rem;
        background-color: #FFAF00;
        border-radius: 1rem;
        position: relative;
        margin-top: 1rem;
    }

    .voucher-code-title-admin {
        color: #904913;
        font-weight: bold;
    }

    .voucher-input {
        width: 100%;
        height: 40px;
        margin-top: 0.5rem;
        border-radius: 0.75rem;
        position: relative;
    }

    .voucher-button-admin {
        display: block;
        background-color: #FFAF00;
        position: relative;
        margin-top: 1rem;
        border-radius: 0.75rem;
        width: 100%;
        padding: 0.75rem 0;
        color: #ffffff;
        font-weight: bold;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .voucher-button-admin:hover {
        background-color: #c38705;
    }

    /*Dialog Styles*/
    dialog {
        padding: 1rem 3rem;
        background: white;
        max-width: 400px;
        padding-top: 2rem;
        border-radius: 20px;
        border: 0;
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

    /*General Styles*/
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

<style>
    .poppins-bold {
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
    }

    .voucher-container {
        border: 2px solid #00a2ff;
        background-color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 1rem;
        padding: 1rem 2.5rem;
    }

    .voucher-title {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        text-align: left;
    }

    .voucher-code-container {
        padding: 1.25rem;
        background-color: #93dbfd;
        border-radius: 1rem;
        position: relative;
        margin-top: 1rem;
    }

    .voucher-code-title {
        color: #00a2ff;
        font-weight: bold;
    }

    .voucher-input {
        width: 100%;
        height: 40px;
        margin-top: 0.5rem;
        border-radius: 0.75rem;
        position: relative;
    }

    .voucher-button {
        display: block;
        background-color: #60bffa;
        position: relative;
        margin-top: 1rem;
        border-radius: 0.75rem;
        width: 100%;
        padding: 0.75rem 0;
        color: #ffffff;
        font-weight: bold;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .voucher-button:hover {
        background-color: #93d1fd;
    }

    /*Dialog Styles*/
    dialog {
        padding: 1rem 3rem;
        background: white;
        max-width: 400px;
        padding-top: 2rem;
        border-radius: 20px;
        border: 0;
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

    /*General Styles*/
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

<script>
    docment.addEventListener('DOMContentLoaded', function() {
        document.getElementById('dialog').showModal();
    });
</script>
