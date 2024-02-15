<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Selector</title>
</head>
<body>

<select id="citySelect">
    <option value="">Select a city</option>
</select>

<script>
fetch('json/cities.json')
    .then(response => response.json())
    .then(data => {
        const citySelect = document.getElementById('citySelect');
        data.forEach(city => {
            const option = document.createElement('option');
            option.value = city.id;
            option.textContent = city.ville;
            citySelect.appendChild(option);
        });
    })
    .catch(error => console.error('Error fetching JSON:', error));
</script>

</body>
</html>

