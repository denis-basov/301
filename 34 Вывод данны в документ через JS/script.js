let booksContainer = document.querySelector('#books');// получаем элемент для вставки в него новостей

/**
 * функция для формирования и вывода книг в документ
 */
function showBooksList(books){

    // формируем из массива объектов строку с разметкой
    let output = books.map(function(book){
        return `
            <div class="book">
                <div class="book-info">
                    <h3>${book.title}</h3>
                    <p>${book.description}</p>
                    <a href="book_detail.php?bookId=${book.bookId}">Подробнее...</a>
                </div>
                <div class="author-info">
                    <a href="author_detail.php?authorId=${book.authorId}">
                        <p>Автор: ${book.firstName} ${book.lastName}</p>
                    </a>
                </div>
            </div>
        `;
    }).join('');

    // отправляем сформированную разметку в документ последним потомком
    booksContainer.insertAdjacentHTML('beforeend', output);
}


/**
 * функция для получения списка книг
 */
async function getBooksList(){
    let response = await fetch(`server/getBooksList.php`);
    let books = await response.json();

    showBooksList(books);
}
getBooksList();