// IIFE - Immediately Invoked Function Expression

/**
 * функция для запроса новостей с сервера и отображения на странице + подгрузка новостей
 */
(function () {

    let container = document.querySelector('.news-container');// получаем контейнер для вывода новостей
    let moreNewsBtn = document.querySelector('#more-news');// получаем кнопку для подгрузки новостей

    if(!container || !moreNewsBtn)return; // если элемента на странице нет, прерываем выполнение функции

    let start = 0;// начальная строка, по которой начинаем получение новостей из БД
    let limit = 3; // количество новостей в запросе
    let newsCount = 0; // количество новостей в БД


    /**
     * функция для формирования данных из массива объектов в строку
     * и вывода этой строки в документ
     */
    let showPosts = function(data){

        // формируем из массива строку
        let output = data.map(function(newsItem){

            return `
                 <div class="col-lg-4 mb-4">
                    <div class="entry2">
                        <a href="news_detail.php?newsId=${newsItem.newsId}">
                            <img src="${newsItem.image}" alt="${newsItem.newsTitle}" class="img-fluid rounded" />
                        </a>
                        <div class="excerpt">
                            <span class="post-category text-white ${newsItem.category_class_name} mb-3">${newsItem.category}</span>
        
                            <h2><a href="news_detail.php?newsId=${newsItem.newsId}">${newsItem.newsTitle}</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 mr-3 float-left"><img src="${newsItem.avatar}" alt="${newsItem.first_name + ' ' + newsItem.last_name}" class="img-fluid" /></figure>
                                <span class="d-inline-block mt-1"><a href="#">${newsItem.first_name + ' ' + newsItem.last_name}</a></span>
                                <span>${newsItem.add_date}</span>
                            </div>
                            <p><a href="news_detail.php?newsId=${newsItem.newsId}">Подробнее...</a></p>
                        </div>
                    </div>
                </div>
            `;
        }).join('');

        // выводим в документ
        container.insertAdjacentHTML('beforeend', output);
    }


    /**
     * функция для получения новостей из БД
     * и количества новостей
     */
    async function getPosts(){
        // отправляем запрос на сервер
        let response = await fetch(`server/getNewsList.php?start=${start}&limit=${limit}`);
        let data = await response.json();

        newsCount = data.newsCount;// присваиваем внешней переменной значение кол-ва новостей

        // вызывыем функцию для вывода данных в документ
        showPosts(data.newsList);
    }
    getPosts();

    /**
     * подгрузка новостей по клику на кнопку
     */
    moreNewsBtn.addEventListener('click', function(event){
        event.preventDefault();
        start += limit;

        // если начальная строка для получения новостей больше, чем количество
        // скрываем кнопку и прерываем запрос на сервер
        if(start > newsCount) {
            moreNewsBtn.style.display = 'none';
            return;
        }

        getPosts();
    });

})();


/**
 * сравнение паролей при регистрации
 */
(function () {
    // получаем элементы
    let regPassword1 = document.querySelector('#reg-password-1');
    let regPassword2 = document.querySelector('#reg-password-2');
    let regPasswordError = document.querySelector('#reg-password-error');

    if(!regPassword1 || !regPassword2 || !regPasswordError)return; // если элемента нет, прерываем работу функции

    let password = '';// задаем переменную для введенного пароля

    // получаем значение пароля
    regPassword1.addEventListener('blur', function(){
        password = regPassword1.value.trim();
    });

    // получаем значение подтверждения пароля
    regPassword2.addEventListener('blur', function(){
        let confirmPassword = regPassword2.value.trim();

        // сравниваем пароли
        if(password !== confirmPassword){// если пароли не совпадают
            regPasswordError.textContent = 'Пароли не совпадают';// выводим в спан ошибку
        }else{// если совпадают
            regPasswordError.textContent = '';// ошибку убираем
        }
    });
})();

/**
 * отображение пароля при нажатии на кнопку
 * <button class="show-reg-password">Показать пароль</button>
 */
(function () {
    let showRegPassword = document.querySelectorAll('.show-reg-password');

    // перебираем список с кнопками
    showRegPassword.forEach(function(button){
        // на каждую кнопку вешаем обработчик события по клику
        button.addEventListener('click', function(event){
            event.preventDefault();// отменяем перезагрузку при нажатии на кнопку

            let inputEl = button.previousElementSibling;// получаем поле для ввода пароля

            if(inputEl.type === 'password'){// если тип поля password
                inputEl.type = 'text';
                button.textContent = 'Скрыть пароль';
            }else{ // если тип поля text
                inputEl.type = 'password';
                button.textContent = 'Показать пароль';
            }
        });
    });
})();