// IIFE - Immediately Invoked Function Expression
(function () {

    let container = document.querySelector('.news-container');// получаем контейнер для вывода новостей
    let moreNewsBtn = document.querySelector('#more-news');// получаем кнопку для подгрузки новостей

    if(!container || !moreNewsBtn)return; // если элемента на странице нет, прерываем выполнение функции

    let start = 0;// начальная строка, по которой начинаем получение новостей из БД
    let limit = 3; // количество новостей в запросе


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
                        <a href="single.html"><img src="${newsItem.image}" alt="${newsItem.newsTitle}" class="img-fluid rounded" /></a>
                        <div class="excerpt">
                            <span class="post-category text-white ${newsItem.category_class_name} mb-3">${newsItem.category}</span>
        
                            <h2><a href="single.html">${newsItem.newsTitle}</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 mr-3 float-left"><img src="${newsItem.avatar}" alt="${newsItem.first_name + ' ' + newsItem.last_name}" class="img-fluid" /></figure>
                                <span class="d-inline-block mt-1"><a href="#">${newsItem.first_name + ' ' + newsItem.last_name}</a></span>
                                <span>${newsItem.add_date}</span>
                            </div>
                            <p><a href="single.html">Подробнее...</a></p>
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
     */
    async function getPosts(){
        // отправляем запрос на сервер
        let response = await fetch(`server/getNewsList.php?start=${start}&limit=${limit}`);
        let data = await response.json();

        // вызывыем функцию для вывода данных в документ
        showPosts(data);
    }
    getPosts();

    /**
     * подгрузка новостей по клику на кнопку
     */
    moreNewsBtn.addEventListener('click', function(event){
       event.preventDefault();
       start += limit;
       getPosts();
    });

})();

