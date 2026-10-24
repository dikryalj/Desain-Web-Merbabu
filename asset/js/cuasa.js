 const apiKey = 'ae4b587872b24d51bcb80957251805'; // Ganti dengan API key kamu
    const lat = -7.4468;
    const lon = 110.4438;

    async function getWeather() {
      const url = `https://api.weatherapi.com/v1/current.json?key=${apiKey}&q=${lat},${lon}&lang=id`;

      try {
        const response = await fetch(url);
        const data = await response.json();

        // Update cuaca
        document.getElementById('condition').textContent = data.current.condition.text;
        document.getElementById('temp').textContent = `${data.current.temp_c}°`;
        document.getElementById('humidity').textContent = `Kelembapan: ${data.current.humidity}%`;
        document.getElementById('icon').src = `https:${data.current.condition.icon}`;

        // Waktu
        const now = new Date();
        const hour = now.getHours().toString().padStart(2, '0');
        const min = now.getMinutes().toString().padStart(2, '0');
        const day = now.toLocaleDateString('id-ID', { weekday: 'short', day: '2-digit', month: '2-digit' });

        document.getElementById('hour').textContent = `${hour}:${min}`;
        document.getElementById('date').textContent = day.toUpperCase();

      } catch (error) {
        document.getElementById('condition').textContent = 'Gagal memuat';
        document.getElementById('temp').textContent = '--°';
        document.getElementById('humidity').textContent = 'N/A';
        console.error(error);
      }
    }

    getWeather();