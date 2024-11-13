function displayCurrentWeekCards() {
    const mainContainer = document.getElementById("date-cards-container");
    mainContainer.innerHTML = ""; // Kosongkan container utama sebelum mengisi

    const today = new Date();
    const year = today.getFullYear();
    const month = today.getMonth() + 1;
    const day = today.getDate();

    // Tentukan hari pertama dalam minggu berjalan
    const currentWeekDay = today.getDay(); // 0 (Minggu) sampai 6 (Sabtu)
    const startOfWeek = day - currentWeekDay + 1; 
    const endOfWeek = startOfWeek + 6;
    const monthName = today.toLocaleString('default', { month: 'long' });

    for (let date = startOfWeek; date <= endOfWeek; date++) {
        if (date > new Date(year, month + 1, 0).getDate()) break;

        // Buat elemen card
        const card = document.createElement('button');
        card.classList.add('card');
        if (date === day) {
            card.style.backgroundColor = '#0E2C75';
            card.style.color = '#FFFFFF';
        } else {
            card.style.backgroundColor = '#f0f0f0'; 
            card.style.color = '#0B235E';
        }

        card.style.padding = '20px';
        card.style.margin = '10px';
        card.style.borderRadius = '24px';
        card.innerHTML = `
            <h2 class="text-center font-bold text-[38px] ">${date}</h2>
            <p class="text-center text-[16px] poppins">${monthName}</p>
        `;
        card.addEventListener('click',function () {
            const dataTanggal = {
                date: `${year}-${month}-${date}` 
            };
            card.classList.add('hover:scale-105');
            card.classList.add('transition-all');
            card.classList.add('disabled');
            console.log(dataTanggal);
            card.innerHTML = 'Loading...';
            setTimeout(() => {
                card.classList.remove('disabled');
                card.innerHTML = `
                <h2 class="text-center font-bold text-[38px] ">${date}</h2>
                <p class="text-center text-[16px] poppins">${monthName}</p>
            `;
            }, 1000);

            fetch(jadwalRoute, {  
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken 
                },
                body: JSON.stringify(dataTanggal)
            })
            .then(response => response.json())
            .then(data => {
                if(data.jadwals && data.jadwals.length === 0) {
                    console.log('node data ');
                    const jadwalContainer = document.getElementById('jadwal-container');
                    jadwalContainer.innerHTML = `
                         <div data-aos="fade-down" class="card-h hover:scale-105 transition-all p-6 rounded-[24px] bg-[#83DCFFFF] border-2 border-[#10678DFF]">
                            <div class="content flex flex-col lg:flex-row md:flex-row justify-between lg:gap-0 md:gap-0 gap-2">
                                <h1 class="text-[#313E5E] poppins">
                                    Belum Ada Jadwal Terbaru Nih pada tanggal dipilih 😵😵
                                </h1>
                            </div>
                        </div>
                    `;
                } else {
                    console.log('Success:', data);
                    const jadwalContainer = document.getElementById('jadwal-container');
                    jadwalContainer.innerHTML = '';
                        data.jadwals.forEach(jadwal => {
                            const jadwalElement = document.createElement('div');
                            jadwalElement.classList.add('jadwal-item');
                            jadwalElement.innerHTML = `
                                <a data-aos="fade-down" href="javascript:void(0);" onclick="showLoading(this, '${window.location.origin}/home/absen/${jadwal.id_schedules}')">
                                    <div class="card-h hover:scale-105 transition-all p-6 rounded-[24px] bg-[#CEEEF0FF] border-2 border-[#0022CEFF]" onclick="showLoading(this)">
                                        <div class="content flex flex-col lg:flex-row md:flex-row justify-between lg:gap-0 md:gap-0 gap-2">
                                            <div class="k_right flex flex-col">
                                                <span class="poppins-regular">
                                                    ${jadwal.levels} | ${jadwal.nama_alat}
                                                </span>
                                                ${
                                                    jadwal.kelas_name === 'Club'
                                                        ? `<span class="text-[#0B235E] poppins-semibold">${jadwal.sekolah}</span>`
                                                        : `<span class="text-[#0B235E] poppins-semibold">${jadwal.kelas_name}</span>`
                                                }
                                                <span class="text-[#4A4A4AFF] poppins-regular">
                                                    ${new Date(jadwal.tanggal_jd).toLocaleDateString('id-ID', {
                                                        day: 'numeric',
                                                        month: 'long',
                                                        year: 'numeric'
                                                    })}
                                                </span>
                                            </div>
                                            <div class="k_left flex flex-col">
                                                <span class="text-[#0B235E] lg:text-[20px] md:text-[20px] text-[15px] poppins-semibold">
                                                    ${jadwal.jm_awal.slice(0, 5)} - ${jadwal.jm_akhir.slice(0, 5)}
                                                </span>
                                                <span class="text-[#004971FF]">
                                                    Absensi Trainer
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Skeleton Loading (Hidden secara default) -->
                                        <div class="loading hidden w-full">
                                            <div class="animate-pulse flex flex-col space-y-4 w-full">
                                                <div class="h-4 bg-gray-300 rounded w-3/4"></div>
                                                <div class="h-6 bg-gray-300 rounded w-full"></div>
                                                <div class="h-4 bg-gray-300 rounded w-1/2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            `;
                            jadwalContainer.appendChild(jadwalElement);
                        });
                }
               
            })
            .catch((error) => {
                console.error('Error:', error);
            });

        });
        mainContainer.appendChild(card);
    }
}

displayCurrentWeekCards();
