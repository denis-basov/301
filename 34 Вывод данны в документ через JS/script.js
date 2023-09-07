let booksContainer = document.querySelector('#books');// получаем элемент для вставки в него новостей

/**
 * функция для получения списка книг
 */
async function getBooksList(){
    let response = await fetch(`server/getBooksList.php`);
    console.log(response);
    let books = await response.json();
    console.log(books);
}
getBooksList();