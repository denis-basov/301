<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Отметка на карте</title>
    <link rel="stylesheet" href="style.css">
    <!-- <script src="<a href=" https://api-maps.yandex.ru/2.1/?apikey=f79a798a-d2ec-480d-8135-86fc2966029a&language=ru_RU%22></script>" rel="nofollow"><u>https://api-maps.yandex.ru/2.1/?apikey=f79a798a-d2ec-480d-8135-86fc2966029a&language=ru_RU"></script></u></a> -->

    <script src="https://api-maps.yandex.ru/2.1/?apikey=f79a798a-d2ec-480d-8135-86fc2966029a&lang=ru_RU" type="text/javascript">
    </script>
</head>

<body>

    <header>
        <h1>Отметка на карте</h1>
    </header>

    <main>
        <div id="map"></div>


        <script>
            ymaps.ready(function() {



                // Инициализация карты
                let map = new ymaps.Map('map', {
                    center: [
                        55.7558,
                        37.6173
                    ],
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

                // Функция для отображения отметок на карте
                function showCoordinates() {
                    for (let i = 0; i < coordinates.length; i++) {
                        let marker = new ymaps.Marker({
                            position: {
                                lat: coordinates[i].latitude,
                                lng: coordinates[i].longitude
                            },
                            map: map
                        });

                        // Добавляем метку с координатами пользователя
                        let infoWindow = new ymaps.InfoWindow({
                            content: '<b>Координаты пользователя:</b>' +
                                '<br>Широта: ' + coordinates[i].latitude +
                                '<br>Долгота: ' + coordinates[i].longitude
                        });

                        infoWindow.open(map, marker);
                    }
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

            // Обработчик события нажатия кнопки "Добавить координаты"
            document.querySelector('#add-coordinates').addEventListener('click', function() {
                // Получаем координаты из формы
                let latitude = document.querySelector('#latitude').value;
                let longitude = document.querySelector('#longitude').value;

                // Добавляем координаты в массив
                addCoordinates(latitude, longitude);

                // Отображаем отметки на карте
                showCoordinates();
            });
        </script>
    </main>

</body>

</html>