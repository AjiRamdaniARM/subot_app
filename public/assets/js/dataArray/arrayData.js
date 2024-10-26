const cardData = [
    {
      id: 1,
      title: "13",
      description: "Senin",
      image: "https://example.com/image1.jpg"
    },
    {
      id: 2,
      title: "14",
      description: "Selasa",
      image: "https://example.com/image2.jpg"
    },
    {
      id: 3,
      title: "15",
      description: "Rabu",
      image: "https://example.com/image3.jpg"
    },
    {
      id: 4,
      title: "16",
      description: "Kamis",
      image: "https://example.com/image3.jpg"
    },
    {
      id: 5,
      title: "17",
      description: "Jum at",
      image: "https://example.com/image3.jpg"
    },
    {
      id: 6,
      title: "18",
      description: "Sabtu",
      image: "https://example.com/image3.jpg"
    },
    {
      id: 7,
      title: "19",
      description: "Minggu",
      image: "https://example.com/image3.jpg"
    }
  ];
  
        const cardContainer = document.getElementById('card-container');
        cardData.forEach(card => {
            const cardElement = document.createElement('div');
            cardElement.classList.add('card');
            cardElement.style.backgroundColor = '#f0f0f0'; 
            cardElement.style.padding = '20px';
            cardElement.style.margin = '10px';
            cardElement.style.borderRadius = '24px';
            cardElement.innerHTML = `
            <h2 class="text-center font-bold text-[38px] text-[#0B235E] ">${card.title}</h2>
            <p class="text-center text-[16px] text-[#0B235E] poppins">${card.description}</p>
            `;
            cardContainer.appendChild(cardElement);
        });