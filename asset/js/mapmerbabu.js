 const merbabuCoords = [-7.4550, 110.4409];

  const map = L.map('map').setView(merbabuCoords, 13);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
  }).addTo(map);

  L.marker(merbabuCoords).addTo(map)
    .bindPopup('<b>Gunung Merbabu</b><br>Jawa Tengah, Indonesia.')
    .openPopup();