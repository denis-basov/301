<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ef5ff561-3f60-490e-894e-f75ed59631d1&lang=ru_RU" type="text/javascript">
    </script>

    <script type="text/javascript">
        ymaps.ready(function() {
            // Указывается идентификатор HTML-элемента.
            var moscow_map = new ymaps.Map("first_map", {
                center: [55.7558, 37.6173],
                zoom: 10
            });

            // Массив координат
            let coordinates = [];

            // Функция для добавления координат в массив
            function addCoordinates(latitude, longitude) {
                coordinates.push({
                    latitude: latitude,
                    longitude: longitude
                });
            }

            // Получаем координаты пользователя
            ymaps.geolocation.get({
                success: function(position) {
                    // Добавляем координаты пользователя в массив
                    addCoordinates(position.coords.latitude, position.coords.longitude);

                    // Отображаем отметки на карте
                    showCoordinates();
                },
                error: function() {
                    console.log('Не удалось получить координаты пользователя');
                }
            });

        });
    </script>
</head>

<body>
    <p>Карта Москвы</p>
    <div id="first_map" style="width:400px; height:300px"></div>

</body>

</html>