// получение элемента по ID
// let head1 = document.getElementById("head_1");
// console.log(head1);

// head1.style.color = "blue";

// получение элементов по классу
// let headEls = document.getElementsByClassName("head");
// console.log(headEls);

// headEls.forEach((element) => {
//   console.log(element);
// });

// q u e r y S e l e c t o r - выбор ОДНОГО элемента
// выбор по тегу
// let h1 = document.querySelector("h1");
// console.log(h1);

// let par = document.querySelector("p");
// console.log(par);

// выбор по классу
// let head = document.querySelector(".head");
// console.log(head);

// выбор по ID
// let head1 = document.querySelector("#head_1");
// console.log(head1);

// выбор по сложному селектору
// let userPic = document.querySelector(".users .user-3 img");
// console.log(userPic);

// хождение по DOM дереву
// let userPic = document.querySelector(".users .user img");
// console.log(userPic);

// let userPic2 = userPic.parentElement.nextElementSibling.children[0];
// console.log(userPic2);

// q u e r y S e l e c t o r A l l - выборка нескольких элементов
// let users = document.querySelectorAll(".users .user");
// console.log(users);

// получаем каринки юзеров
// let usersPics = document.querySelectorAll(".users .user img");
// console.log(usersPics);

/*
2 задание
получите все параграфы у юзера 3*/
/*
let userPar = document.querySelectorAll(".users .user.user-3 p");
console.log(userPar);

// получаем элементы из NodeList в массив
userPar = [...userPar];

console.log(userPar);

let userParText = userPar.map(function (p) {
  return p.textContent;
});
console.log(userParText);*/

/**
 * получение кнопки и вывод в консоль текта по клику
 */
// let pressBtn = document.querySelector("#press-btn");
// console.log(pressBtn);

// // добавляем обработчик события по клику на кнопку
// pressBtn.addEventListener("click", function () {
//   console.log("hello");
// });

// textContent, innerText
// let pressBtn = document.querySelector("#press-btn");

// pressBtn.addEventListener("click", function () {
//   let btnText = pressBtn.textContent; // получаем текст кнопки
//   console.log(btnText);

//   pressBtn.textContent = "Кнопка нажата"; // меняем текст на кнопке
// });

/*
1 задание
    <button id="press-btn">button</button>
    <h1 class="head" id="head_1">DOM</h1>
    получите тект заголовка и поместите этот текст вместо текста кнопки*/

//1
// let textTitle = document.querySelector("#head_1");
// pressBtn.addEventListener("click", function () {
//   pressBtn.textContent = textTitle;
// });

//2
// let pressBtn = document.querySelector(`#press-btn`);
// let h1Text = document.querySelector(`#head_1`);

// pressBtn.addEventListener(`click`, function () {
//   let btnText = h1Text.textContent;
//   console.log(btnText);

//   pressBtn.textContent = btnText;
// });

/*
//3 обмен текста на кнопке и заголовке
let pressBtn = document.querySelector("#press-btn"); // кнопка
let head1 = document.querySelector("#head_1"); // заголовок

pressBtn.addEventListener("click", function () {
  //1 получаем текст кнопки
  let textBtn = pressBtn.textContent;
  console.log(textBtn);

  //2 записываем в текст кнопки текст заголова
  pressBtn.textContent = head1.textContent;

  //3 записывает сохраненное значение текста кнопки в текст заголовка
  head1.textContent = textBtn;
});*/

////////////////////////////////////////////////////////////////////////
// вывести текст блока с пользователями
/*
let pressBtn = document.querySelector("#press-btn");
let users = document.querySelector(".users");

// добавляем обработчик события по клику на кнопку
pressBtn.addEventListener("click", function () {
  console.log(users.textContent);
  users.textContent = "hello";
});*/

// innerHTML
// let pressBtn = document.querySelector("#press-btn");
// let users = document.querySelector(".users");

// // добавляем обработчик события по клику на кнопку
// pressBtn.addEventListener("click", function () {
//   console.log(users.innerHTML);
//   users.innerHTML = `<div><h1 id="head-3" class="head">Hello</h1></div>`;
// });

// value
// let firstName = document.querySelector("#first-name"); // получаем инпут

// focus
// firstName.addEventListener("focus", function () {
//   console.log("Поле активировано");
// });

// blur
// firstName.addEventListener("blur", function () {
//   console.log(firstName.value);
// });
/*
2 задание
Проверьте полученное из инпута значение на пустоту. Если строка пустая, то выведите в консоль сообщение об этом   */

// проверка имени
let firstName = document.querySelector("#first-name"); // получаем инпут
let firstNameError = firstName.nextElementSibling; // спан для ошибок

firstName.addEventListener(`blur`, function () {
  // если ничего не ввели
  if (firstName.value === ``) {
    // выводим в спан ошибку
    firstNameError.textContent = `Введите имя`;
    // меняем цвет фона инпута на красный
    firstName.style.backgroundColor = "#f09878";
    firstName.style.borderColor = "#f09878";
  } else {
    // иначе, строка не пуста, убираем из спана ошибку
    firstNameError.textContent = "";
    firstName.style.backgroundColor = "rgb(203 249 198)";
    firstName.style.borderColor = "rgb(203 249 198)";
  }
});

// проверка фамилии
let lastName = document.querySelector("#last-name"); // получаем инпут
let lastNameError = document.querySelector("#last-name-error"); // спан для ошибок

lastName.addEventListener(`blur`, function () {
  // если ничего не ввели
  if (lastName.value === ``) {
    // выводим в спан ошибку
    lastNameError.textContent = `Введите фамилию`;
  } else {
    // иначе, строка не пуста, убираем из спана ошибку
    lastNameError.textContent = "";
  }
});

// parentElement, children, nextElementSibling, previousElementSibling

// получаем родителя
// let pic1 = document.querySelector("#pic-1");
// console.log(pic1);
// console.log(pic1.parentElement);

// получаем дочерние элементы
// let users = document.querySelector(".users");
// console.log(users.children);

// следующий сосед
// let users = document.querySelector(".users");
// console.log(users.nextElementSibling);

// прерыдущий сосед
// let users = document.querySelector(".users");
// console.log(users.previousElementSibling);

// style
// let head1 = document.getElementById("head_1");
// console.log(head1.style);
// head1.style.padding = "20px";
// head1.style.backgroundColor = "blue";
// head1.style.borderBottom = "3px solid blue";
// head1.style.borderBottomColor = "orangered";

//1
// let head2 = document.getElementById("head_2");
// head2.style.backgroundColor = "green";
// head2.style.borderBottom = "2px solid red";

//2
// let head2 = document.getElementById("head_2");
// console.log(head2.style);
// head2.style.backgroundColor = "red";
// head2.style.color = "black";
// head2.style.fontFamily = "Georgia";

//3
// let heading = document.getElementById("head_2");

// // Задаем стили
// heading.style.color = "red";
// heading.style.fontSize = "20px";
// heading.style.animation = "fade";
// heading.style.borderBlockColor = "blue";
// heading.style.borderRadius = "5px";
// heading.style.backgroundColor = "white";

// classList
// добавляем класс при клике на элемент
/*
let user1 = document.querySelector(".users .user-1");

user1.addEventListener("click", function () {
  // добавляем класс элементу
  user1.classList.add("hidden");
});*/

// скрываем юзера при клике на него
//1 выбираем всех пользователей
// let users = document.querySelectorAll(".users .user");

// //2 перебираем списко
// users.forEach(function (user) {
//   //3 на каждого юзера вешаем обработчик события
//   user.addEventListener("click", function () {
//     // console.log(user.children[1].textContent);
//     //4 добавляем класс элементу
//     user.classList.add("hidden");
//   });
// });

// // поменять фон юзера при клике на него
// //1 выбираем всех пользователей
// let users = document.querySelectorAll(".users .user");

// //2 перебираем списко
// users.forEach(function (user) {
//   //3 на каждого юзера вешаем обработчик события
//   user.addEventListener("click", function () {
//     //4 добавляем класс элементу
//     user.classList.add("active");
//   });
// });

// // поменять фон юзера при клике на него и при повторном клике вернуть обратно
// //1 выбираем всех пользователей
// let users = document.querySelectorAll(".users .user");

// //2 перебираем списко
// users.forEach(function (user) {
//   //3 на каждого юзера вешаем обработчик события
//   user.addEventListener("click", function () {
//     //4 если класс есть
//     if (user.classList.contains("active")) {
//       //  убираем класс
//       user.classList.remove("active");
//     } else {
//       // если класса нет, добавляем
//       user.classList.add("active");
//     }
//   });
// });

// поменять фон юзера при клике на него и при повторном клике вернуть обратно
//1 выбираем все кнопки
let addBtns = document.querySelectorAll(".user .add-to-friends");

//2 перебираем кнокпи
addBtns.forEach(function (button) {
  //3 на каждую кнопку вешаем обработчик события
  button.addEventListener("click", function () {
    // добавляем / удаляем класс
    button.parentElement.classList.toggle("active");

    // меняем текст на кнопке
    // if (button.textContent === "В друзья") {
    //   button.textContent = "Удалить";
    // } else {
    //   button.textContent = "В друзья";
    // }
    button.textContent === "В друзья" ? (button.textContent = "Удалить") : (button.textContent = "В друзья");
  });
});

/**
 * reduce
 */
const votes = ["y", "y", "n", "y", "n", "y", "n", "y", "n", "n", "n", "y", "y"];

// ** 1. На основе массива votes получите объект в двумя свойствами, в которых должно быть посчитано
// сколько y и сколько n: {y: 25, n:44}

// for...of
// let votesCount = {
//   y: 0,
//   n: 0,
// };
// for (let vote of votes) {
//   if (vote === "y") {
//     votesCount.y++;
//   } else {
//     votesCount.n++;
//   }
// }
// console.log(votesCount);

//reduce
// let votesCount = votes.reduce(
//   function (totalObj, vote) {
//     // if (vote === "y") {
//     //   totalObj.y++;
//     // } else {
//     //   totalObj.n++;
//     // }
//     vote === "y" ? totalObj.y++ : totalObj.n++;
//     return totalObj;
//   },
//   { y: 0, n: 0 }
// );
// console.log(votesCount);

const books = [
  {
    title: "Good Omens",
    authors: ["Terry Pratchett", "Neil Gaiman"],
    rating: 4.25,
    genres: ["fiction", "fantasy"],
  },
  {
    title: "Changing My Mind",
    authors: ["Zadie Smith"],
    rating: 3.83,
    genres: ["nonfiction", "essays"],
  },
  {
    title: "Bone: The Complete Edition",
    authors: ["Jeff Smith"],
    rating: 4.42,
    genres: ["fiction", "graphic novel", "fantasy"],
  },
  {
    title: "American Gods",
    authors: ["Neil Gaiman"],
    rating: 4.11,
    genres: ["fiction", "fantasy"],
  },
  {
    title: "A Gentleman in Moscow",
    authors: ["Amor Towles"],
    rating: 4.36,
    genres: ["fiction", "historical fiction"],
  },
  {
    title: "The Name of the Wind",
    authors: ["Patrick Rothfuss"],
    rating: 4.54,
    genres: ["fiction", "fantasy"],
  },
  {
    title: "The Overstory",
    authors: ["Richard Powers"],
    rating: 4.19,
    genres: ["fiction", "short stories"],
  },
  {
    title: "A Truly Horrible Book",
    authors: ["Xavier Time"],
    rating: 2.18,
    genres: ["fiction", "garbage"],
  },
  {
    title: "The Way of Kings",
    authors: ["Brandon Sanderson"],
    rating: 4.65,
    genres: ["fantasy", "epic"],
  },
  {
    title: "Lord of the flies",
    authors: ["William Golding"],
    rating: 3.67,
    genres: ["fiction"],
  },
];

// 2. *** Получите объект с массивами, в которых сгруппируйте книги по рейтингу.
// Массивы должны быть для рейтинга от 0 до 1, от 1 до 2, от 2 до 3, от 3 до 4 и от 4 до 5
// и в каждом массиве долдны находиться книги с рейтингом, который входит в диапазон.
// Например, если у книги рейтинг 3.5, он попадает в массив с рейтингами от 3 до 4
// To group books by rating:

/*
2:[{…}]
3:[{…}, {…}]
4:[{…}, {…}, {…}, {…}, {…}, {…}, {…}]
*/
/*
let booksGroups = books.reduce(
  function (booksObj, book) {
    if (book.rating >= 0 && book.rating < 1) {
      booksObj.group1 = books;
    } else if (book.rating >= 1 && book.rating < 2) {
      booksObj.group2.push(book);
    } else if (book.rating >= 2 && book.rating < 3) {
      booksObj.group3.push(book);
    } else if (book.rating >= 3 && book.rating < 4) {
      booksObj.group4.push(book);
    } else if (book.rating >= 4 && book.rating < 5) {
      booksObj.group5.push(book);
    }

    // возвращаем объект
    return booksObj;
  },
  { group1: [], group2: [], group3: [], group4: [], group5: [] }
);
console.log(booksGroups);
*/

// createElement
// let par = document.querySelector('p');

// создаем элементы
let par = document.createElement("p");
let div = document.createElement("div");

// добавляем в параграф текст
par.textContent = "Hello, summer";

// вставляем параграф в div
div.innerHTML = par.outerHTML;

// задаем атрибуты ID и класса
div.setAttribute("id", "news-list");
div.setAttribute("class", "news-list container");
// div.setAttribute("class", "test");

// считываем атрибуты
//console.log(div.getAttribute("class"));

// добавляем параграфу класс
div.children[0].setAttribute("class", "par");

//console.log(div);
// вставка элемента в документ
// 1. получаем элемент из документа,
// относительно которого будем вставлять созданный элемент на страницу
let section1 = document.querySelector("#section-1");
// 2. Вставляем DIV внутрь секции последним потомком
// section1.appendChild(div);
// section1.appendChild(par);

// let cloneDiv = div.cloneNode(true);
// section1.appendChild(cloneDiv);

section1.insertAdjacentElement("beforeend", div);

// формирование разметки и вставка в документ
let div1 = `<div id="news-list" class="news-list container">
              <p class="par">Hello, summer</p>
            </div>`;
section1.insertAdjacentHTML("beforeend", div1);

/**
 * динамическое добавление поля для ввода
 */
let addInput = document.querySelector("#add-input"); // кнопка
let inputPhoto1 = document.querySelector("#photo-1"); // поле для вставки картинки
let inputParent = inputPhoto1.parentElement; // получаем родителя поля ввода
let counterId = 1; // счетчик для ID

/**
 * добавляем обработчик события по клику на кнопку
 */
addInput.addEventListener("click", function (event) {
  counterId++; // увеличиваем значение счетчика ID

  let cloneDiv = inputParent.cloneNode(true); // клонируем полученный div
  cloneDiv.children[1].value = ""; // очищаем значение value у скопированного инпута
  cloneDiv.children[1].id = `photo-${counterId}`; // задаем новый ID полю ввода

  // вставка склонированного элемента в документ предыдущим соседом перед существующей кнопкой
  addInput.parentElement.insertAdjacentElement("beforebegin", cloneDiv);

  event.preventDefault(); // отменяем стандартное поведение
});

// this и объект
// let user = {
//   fName: "Ivan",
//   lName: "Petrov",
//   getData() {
//     console.log(`Hello, ${this.fName} ${this.lName}`);
//   },
// };
// user.getData();
