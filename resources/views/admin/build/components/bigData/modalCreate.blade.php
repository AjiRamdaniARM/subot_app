<dialog id="dialogProgram">
    <form action="{{ route('bigaData.program') }}" method="POST">
        @csrf
        <h2 class="poppins-bold">Add Program</h2>
        <div class="voucher-container-admin">
            <h6 class="voucher-title-admin">add a program to create a schedule.<span></span></h6>
        </div>
        <div class="voucher-code-container-admin">
            <h6 class="voucher-code-title-admin">Input Here</h6>
            <input type="text" name="program" placeholder="Exp : Robotik" class="voucher-input p-4" required>
        </div>
        <button type="submit" class="voucher-button-admin">Create</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function makeUpperCase(input) {
            input.value = input.value.toUpperCase();
        }
    </script>

    <button onclick="window.dialogProgram.close();" aria-label="close" class="x">❌</button>
</dialog>
<dialog id="dialogLevel">
    <form action="{{ route('bigaData.level') }}" method="POST">
        @csrf
        <h2 class="poppins-bold">Add Level</h2>
        <div class="voucher-container-admin">
            <h6 class="voucher-title-admin">add a level to create a schedule.<span></span></h6>
        </div>
        <div class="voucher-code-container-admin">
            <h6 class="voucher-code-title-admin">Select Program</h6>
            <select name="id_programs" id="program" class="voucher-input px-3" required>
                <option value="">Select Programs</option>
                @foreach ($getDataPrograms as $program)
                    <option value="{{ $program->id }}">{{ $program->program }}</option>
                @endforeach
            </select>
        </div>
        <div class="voucher-code-container-admin">
            <h6 class="voucher-code-title-admin">Input Here</h6>
            <input type="text" name="level" placeholder="Exp : 1 - 7 Basic" class="voucher-input p-4" required>
        </div>
        <button type="submit" class="voucher-button-admin">Create</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function makeUpperCase(input) {
            input.value = input.value.toUpperCase();
        }
    </script>

    <button onclick="window.dialogLevel.close();" aria-label="close" class="x">❌</button>
</dialog>
<dialog id="dialogClass">
    <form action="{{ route('bigaData.class') }}" method="POST">
        @csrf
        <h2 class="poppins-bold">Add Class</h2>
        <div class="voucher-container-admin">
            <h6 class="voucher-title-admin">add a class to create a schedule.<span></span></h6>
        </div>
        <div class="voucher-code-container-admin">
            <h6 class="voucher-code-title-admin">Input Here</h6>
            <input type="text" name="class" placeholder="Exp : Private  " class="voucher-input p-4" required>
        </div>
        <button type="submit" class="voucher-button-admin">Create</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function makeUpperCase(input) {
            input.value = input.value.toUpperCase();
        }
    </script>

    <button onclick="window.dialogClass.close();" aria-label="close" class="x">❌</button>
</dialog>
<dialog id="dialogTools">
    <form action="{{ route('bigaData.tools') }}" method="POST">
        @csrf
        <h2 class="poppins-bold">Add Tools</h2>
        <div class="voucher-container-admin">
            <h6 class="voucher-title-admin">add a tools to create a schedule.<span></span></h6>
        </div>
        <div class="voucher-code-container-admin">
            <h6 class="voucher-code-title-admin">Select Levels</h6>
            <select name="id_level" id="level" class="voucher-input px-3" required>
                <option value="">Select Levels</option>
                @foreach ($getDataLevels as $program)
                    <option value="{{ $program->id }}">{{ $program->levels }}</option>
                @endforeach
            </select>
        </div>
        <div class="voucher-code-container-admin">
            <h6 class="voucher-code-title-admin">Input Here</h6>
            <input type="text" name="tools" placeholder="Exp : Box 1 Basic  " class="voucher-input p-4" required>
        </div>
        <button type="submit" class="voucher-button-admin">Create</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function makeUpperCase(input) {
            input.value = input.value.toUpperCase();
        }
    </script>

    <button onclick="window.dialogTools.close();" aria-label="close" class="x">❌</button>
</dialog>
<dialog id="dialogMateri">
    <form action="{{ route('bigaData.materi') }}" method="POST">
        @csrf
        <h2 class="poppins-bold">Add Materi</h2>
        <div class="voucher-container-admin">
            <h6 class="voucher-title-admin">add a tools to create a schedule.<span></span></h6>
        </div>
        <div class="voucher-code-container-admin">
            <h6 class="voucher-code-title-admin">Select Levels</h6>
            <select name="id_level" id="level" class="voucher-input px-3" required>
                <option value="">Select Levels</option>
                @foreach ($getDataLevels as $program)
                    <option value="{{ $program->id }}">{{ $program->levels }}</option>
                @endforeach
            </select>
        </div>
        <div class="voucher-code-container-admin">
            <h6 class="voucher-code-title-admin">Input Here</h6>
            <input type="text" name="materi" placeholder="Exp : Robotik  " class="voucher-input p-4" required>
        </div>
        <button type="submit" class="voucher-button-admin">Create</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function makeUpperCase(input) {
            input.value = input.value.toUpperCase();
        }
    </script>

    <button onclick="window.dialogMateri.close();" aria-label="close" class="x">❌</button>
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

<script>
    docment.addEventListener('DOMContentLoaded', function() {
        document.getElementById('dialog').showModal();
    });
</script>
