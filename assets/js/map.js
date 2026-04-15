/*
@ASSESSME.USERID: ls5273
@ASSESSME.AUTHOR: Lana Sorak
@ASSESSME.ANALYZE: YES
*/

document.addEventListener('DOMContentLoaded', function() {
    const areas = document.querySelectorAll('area');
    const infoBox = document.getElementById('landmarkInfo');

    const landmarkDescriptions = {
        "arena": "🏛️ <strong>Arena di Verona</strong>: A 1st-century Roman amphitheater still used for concerts and operas today!",
        "juliet": "💘 <strong>Juliet's House</strong>: A fictional setting from Shakespeare's 'Romeo and Juliet'. Visitors leave love letters on the walls.",
        "sanzeno": "⛪ <strong>San Zeno Basilica</strong>: A magnificent Romanesque church dedicated to Verona's patron saint, with bronze doors and stunning artworks.",
        "portapalio": "🚪<strong>Porta Palio</strong>: A 16th-century city gate designed by Michele Sanmicheli, showcasing Renaissance military architecture.",
        "portanuova": "🚪<strong>Porta Nuova</strong>: The 'New Gate', built in the 16th century as the main entrance to Verona from Venice.",
        "castelvecchio": "🏯 <strong>Castelvecchio</strong>: A 14th-century castle and museum with seven towers and a fortified bridge over the Adige River.",
        "portaborsari": "🚪<strong>Porta Borsari</strong>: An ancient Roman gate from the 1st century AD, once the main entrance to the city.",
        "sanfermo" :"⛪ <strong>San Fermo Church</strong>: A unique church combining Romanesque and Gothic styles, with beautiful frescoes.",
        "pontepietra": "🌉 <strong>Ponte Pietra</strong>: A Roman arch bridge over the Adige River, dating back to 100 BC and partially rebuilt after WWII."
    };


    function adjustImageMap() {
        const img = document.getElementById('veronaMap');
        const map = document.querySelector('map[name="landmarksMap"]');
        const areas = map.querySelectorAll('area');

        const originalWidth = 800;
        const originalHeight = 600;

        const currentWidth = img.clientWidth;
        const currentHeight = img.clientHeight;

        const widthScale = currentWidth / originalWidth;
        const heightScale = currentHeight / originalHeight;

        areas.forEach(area => {
            const coords = area.getAttribute('coords').split(',').map(Number);

            const scaledCoords = [
                Math.round(coords[0] * widthScale),
                Math.round(coords[1] * heightScale),
                Math.round(coords[2] * Math.min(widthScale, heightScale)),
            ];

            area.setAttribute('coords', scaledCoords.join(','));
        });
    }

    window.addEventListener('load', adjustImageMap);
    window.addEventListener('resize', adjustImageMap);


    areas.forEach(area => {
        area.addEventListener('click', function(e) {
            e.preventDefault();
            const landmark = this.getAttribute('data-info');

            infoBox.innerHTML = landmarkDescriptions[landmark];
            infoBox.style.display = 'block';
            infoBox.classList.add('pulse');
            setTimeout(() => infoBox.classList.remove('pulse'), 500);
        });
    });


    document.addEventListener('click', function(e) {
        if (!e.target.matches('area') && !e.target.closest('#landmarkInfo')) {
            infoBox.style.display = 'none';
        }
    });
});