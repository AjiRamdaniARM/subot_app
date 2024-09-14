<dialog id="modalTemplateExcel">
    <h2 class="poppins-bold">Super Template</h2>
    <div class="voucher-code-container-admin">
        <h6 class="voucher-code-title-admin">Get Template For Edited</h6>
        <button href="javascript:void(0);" id="download"
            onclick="downloadFile('{{ asset('assets/template/template001.xlsx') }}')"
            class="voucher-input px-4 border bg-white">Download Template</button>
    </div>
    <br>
    <div>
        <h6 class="text-black px-4">template usage rules</h6>
        <button class="voucher-input px-4 border bg-gradient-to-tl from-red-600 to-slate-800 text-white">understand the
            rules first</button>
    </div>
    <br>
    <form id="uploadForm" enctype="multipart/form-data">
        @csrf
        <div>
            <h6 class="text-black px-4">upload a new excel file</h6>
            <input name="fileExcel" type="file" id="fileInput" required style="display: none;" />
            <button id="customButton"
                class="voucher-input px-4 border bg-gradient-to-tl from-slate-600 to-slate-800 text-white">
                Select File
            </button>
            <span id="fileName"></span>
            <button type="submit" id="submitBtn" class="voucher-button-admin">Upload File</button>
    </form>
    </div>

    <button onclick="window.modalTemplateExcel.close();" aria-label="close" class="x">❌</button>
</dialog>

<style>
    .poppins-bold {
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
    }

    .voucher-container-admin {
        border: 2px solid #FF0000;
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
        background-color: #FF0000;
        border-radius: 1rem;
        position: relative;
        margin-top: 1rem;
    }

    .voucher-code-title-admin {
        color: #FFFFFF;
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
        background-color: #212540;
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
        background-color: #1C1E2E;
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