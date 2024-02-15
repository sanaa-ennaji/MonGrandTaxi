
fetch('json/cities.json')
  .then(response => response.json())
  .then(data => {
    // Get the select element
    const citySelect = document.getElementById('citySelect');

    data.forEach(city => {
      const option = document.createElement('option');
      option.value = city.id;
      option.text = city.name;
      citySelect.add(option);
    });
  })
  .catch(error => {
    console.error('Error loading city data:', error);
  });

// fetch('cities.json')
//   .then(response => response.json())
//   .then(data => {
   
//     const citySelect = document.getElementById('citySelect');


//     data.forEach(city => {
//       const option = document.createElement('option');
//       option.value = city.name;
//       option.text = city.name;
//       citySelect.add(option);
//     });
//   })
//   .catch(error => {
//     console.error('Error loading city data:', error);
//   });
