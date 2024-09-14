<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.meta')
    @include('layout.header')
</head>

<body>
    <div class="w-full">
        @yield('children')
    </div>
</body>
<script>
    function showLoading(button) {
        button.innerHTML = 'Loading...';
        button.disabled = true;
        button.classList.add('opacity-50', 'cursor-not-allowed');
    }

    // Fungsi untuk efek ketik
    const text = "Select Role to your Account";
    let index = 0;

    function typeEffect() {
        if (index < text.length) {
            document.getElementById("typingText").innerHTML += text.charAt(index);
            index++;
            setTimeout(typeEffect, 100); // atur kecepatan ketik, misal 100ms
        }
    }

    // Mulai efek ketik setelah halaman dimuat
    window.onload = function() {
        typeEffect();
    };

    let timer;

    document.addEventListener("alpine:init", () => {
        Alpine.data("app", () => ({
            open: false,

            openToast() {
                if (this.open) return;
                this.open = true;

                clearTimeout(timer);

                timer = setTimeout(() => {
                    this.open = false;
                }, 5000);
            },

            closeToast() {
                this.open = false;
            },
        }));
    });
</script>

</html>
