function displayDateLaporan() {
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
        mainContainer.appendChild(card);
    }
}

displayDateLaporan();
