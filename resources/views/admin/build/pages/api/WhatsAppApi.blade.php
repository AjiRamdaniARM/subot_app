<x-app-layout>

    <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
        @include('admin.build.components.sidenav')
        <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
            @include('admin.build.components.navbar')
            <div class="w-full px-6 py-6 mx-auto">
                <div class="flex flex-wrap mt-6 -mx-3">
                    <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap -mx-3">
                                    <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                                        <div class="flex flex-col h-full">
                                            <p class="pt-2 mb-1 font-semibold">Built by developers</p>
                                            <h5 class="font-bold">Soft UI Dashboard</h5>
                                            <p class="mb-12">From colors, cards, typography to complex elements, you
                                                will
                                                find the full documentation.</p>
                                            <a class="mt-auto mb-0 font-semibold leading-normal text-sm group text-slate-500"
                                                href="javascript:;">
                                                Read More
                                                <i
                                                    class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
                                        <div class="h-full bg-gradient-to-tl from-purple-700 to-pink-500 rounded-xl">
                                            <img src="../assets/img/shapes/waves-white.svg"
                                                class="absolute top-0 hidden w-1/2 h-full lg:block" alt="waves" />
                                            <div class="relative flex items-center justify-center h-full">
                                                <img class="relative z-20 w-full pt-6"
                                                    src="../assets/img/illustrations/rocket-white.png" alt="rocket" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
                        <div
                            class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
                            <div class="relative h-full overflow-hidden bg-cover rounded-xl bg-white">
                                <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover opacity-80"></span>
                                <div class="relative z-10 flex flex-col flex-auto h-full p-4">
                                    <h5 id="status" class="pt-2 mb-6 font-bold text-black">Work with the rockets</h5>
                                    <form id="whatsapp-form">
                                        <label for="number">Phone Number (Include country code):</label><br>
                                        <input type="text" id="number" name="number"
                                            placeholder="e.g., 6281234567890" required>
                                        <br>
                                        <label for="message">Message:</label><br>
                                        <textarea id="message" name="message" placeholder="Enter your message here" class="w-full" required></textarea><br><br>

                                        <button type="submit"
                                            class="mt-auto mb-0 font-semibold leading-normal text-black group text-sm"
                                            href="javascript:;">
                                            Send Message
                                            <i
                                                class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                                        </button>
                                        <script>
                                            document.getElementById('whatsapp-form').addEventListener('submit', async function(event) {
                                                event.preventDefault(); // Mencegah reload halaman

                                                const number = document.getElementById('number').value;
                                                const message = document.getElementById('message').value;

                                                try {
                                                    const response = await fetch('http://localhost:3000/send-message', {
                                                        method: 'POST',
                                                        headers: {
                                                            'Content-Type': 'application/json',
                                                        },
                                                        body: JSON.stringify({
                                                            number: number,
                                                            message: message
                                                        }),
                                                    });

                                                    const data = await response.json();

                                                    if (response.ok) {
                                                        document.getElementById('status').innerText = data.status;
                                                    } else {
                                                        document.getElementById('status').innerText = 'Error: ' + data.status;
                                                    }
                                                } catch (error) {
                                                    document.getElementById('status').innerText = 'Failed to send message: ' + error;
                                                }
                                            });
                                        </script>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <p id="status">Loading QR code...</p>
            <img id="qr-image" alt="QR Code" style="width:300px;height:300px;">
            <form id="whatsapp-form">
                <label for="number">Phone Number (Include country code):</label><br>
                <input type="text" id="number" name="number" placeholder="e.g., 6281234567890" required><br><br>

                <label for="message">Message:</label><br>
                <textarea id="message" name="message" placeholder="Enter your message here" required></textarea><br><br>

                <button type="submit">Send Message</button>
            </form>

            <p id="status"></p>

            <script>
                document.getElementById('whatsapp-form').addEventListener('submit', async function(event) {
                    event.preventDefault(); // Mencegah reload halaman

                    const number = document.getElementById('number').value;
                    const message = document.getElementById('message').value;

                    try {
                        const response = await fetch('http://localhost:3000/send-message', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                number: number,
                                message: message
                            }),
                        });

                        const data = await response.json();

                        if (response.ok) {
                            document.getElementById('status').innerText = data.status;
                        } else {
                            document.getElementById('status').innerText = 'Error: ' + data.status;
                        }
                    } catch (error) {
                        document.getElementById('status').innerText = 'Failed to send message: ' + error;
                    }
                });
            </script> --}}
            {{-- === end body === --}}
        </main>
    </body>
</x-app-layout>
