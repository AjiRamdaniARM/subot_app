<button type="button" @click="closeToast()" x-show="open" x-transition.duration.300ms
    class="fixed right-4 top-4 z-50 rounded-md bg-green-500 px-4 py-2 text-white transition hover:bg-green-600">
    <div class="flex items-center space-x-2">
        <span class="text-3xl"><i class="bx bx-check"></i></span>
        <p class="font-bold">Item Created Successfully!</p>
    </div>
</button>
<script>
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
