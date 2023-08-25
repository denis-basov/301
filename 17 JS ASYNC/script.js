// стек вызовов функций
// function sum() {
//   return 2 + 2;
// }

// function outer() {
//   console.log(sum());
//   console.log('hello');
// }

// outer();

// стек вызовов
// 0
// 1 outer()
// 2 outer(), sum()
// 3 outer()
// 4

// переполнение стека, рекурсивная функция
// let counter = 0;
// function sayHello() {
//   console.log("Hello");
//   counter++;
//   if (counter === 5) {
//     return;
//   }
//   sayHello();
// }
// sayHello();

// while
// let counter = 1;
// while (true) {
//   console.log("Hello");
//   if (counter === 5) {
//     break;
//   }
//   counter++;
// }

// setTimeout
// console.log("Hello");
// setTimeout(function () {
//   console.log("winter");
// }, 2000);
// console.log("summer");

// fetch('https://jsonplaceholder.typicode.com/posts/1')
//   .then((response) => response.json())
//   .then((json) => console.log(json));

// // 1
// fetch("https://randomfox.ca/floof/")
//   .then((response) => response.json())
//   .then((json) => document.write(`<img src="${json.image}">`));

// // 2
// console.log("hello");

// fetch("https://restcountries.com/v3.1/all")
//   .then((response) => response.json())
//   .then((json) => console.log(json));

// получаем элемент для вставки данных
let countryEl = document.querySelector("#country");

// фукция для обработки данных данных и отображения в документе
function showData(data) {
  // console.log(data);

  //1
  // let borders = "";
  // if (data.borders) {
  //   borders = data.borders.join(", ");
  // } else {
  //   borders = "Соседних стран нет";
  // }

  //2
  // if (data.borders) {
  //   data.borders = data.borders.join(", ");
  // } else {
  //   data.borders = "Соседних стран нет";
  // }

  // формируем текст для вывода в документ
  let output = `<div class="country">
                  <div class="images">
                    <img src="${data.flags.svg}" alt="${data.flags.alt}">
                    <img src="${data.coatOfArms.png}" alt="Герб страны ${data.translations.rus.official}">
                  </div>
                  <h2>${data.translations.rus.official}</h2>
                  <p>Столица: <span>${data.capital.join(", ")}</span></p>
                  <p>Площадь: <span>${data.area.toLocaleString()} кв/км</span></p>
                  <p>Население: <span>${data.population.toLocaleString()} чел.</span></p>
                  <p>Регион: <span>${data.region ?? ""}</span></p>
                  <p>Соседние страны: <span>${data.borders ? data.borders.join(", ") : "Соседних стран нет"}</span></p>
                  <p>Временные зоны: <span>${data.timezones.join(", ")}</span></p>
                </div>`;

  countryEl.insertAdjacentHTML("beforeend", output);
}

// функция для получения данных с сервера
async function whereIAm(country) {
  let response = await fetch(`https://restcountries.com/v3.1/name/${country}`); // отправляем запрос на внешний сервер
  let data = await response.json(); // получаем данные

  // показываем данные в документе
  showData(data[0]);
}
whereIAm("russia");
whereIAm("peru");
whereIAm("australia");
whereIAm("Papua");

/*
characters = requests.get("https://rickandmortyapi.com/api/character?page=1").json()["results"]
*/
