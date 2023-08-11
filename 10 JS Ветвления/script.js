// let age = 11;

// // если возраст больше или равен 18, пускаем
// if(age >= 18){
//     console.log('Добро пожаловать!!!');
// }else{// иначе
//     console.log('Подрасти!!!');
// }

// bool, str, number, null, undef, NaN, 0, ''
// falsy value: null, undef, NaN, 0, '', false
// let test = 0;

// if (test) {
//   console.log("Истина");
// }

// let loggedUser = "Ирина";

// // если пользователь авторизован, показываем приветствие
// if (loggedUser) {
//   console.log(`Добро пожаловать, ${loggedUser}.`);
// } else {
//   console.log("Привет, незнакомец.");
// }

/*
let parsePx = function (num1, num2) {
  return parseFloat(num1) + parseFloat(num2);
};


//1 вопрос:
let px = "5px";
let px1 = "6px";
let pxS = parsePx(px, px1);
console.log(pxS);

let pxTxt = `ляляля '${px}' и и ляляля '${px1}'.
Cумма ............ = ${pxS}.
Задание выполнено!`;
alert(pxTxt); // выполняется корректно

px = "5.5px"; // новое значение переменной
px1 = "6.25px"; // новое значение переменной

console.log(parsePx(px, px1)); // использует старые значения переменных. Как сделать так, чтобы не переписывать руками, а чтобы автоматом брались новые значения рх и рх1?
*/
/*
2 вопрос:
Дано число 12345. Найдите сумму цифр этого числа. К текстовым строкам есть вариант выделить символ через str.[0]. Есть ли вариант для числовых значений?
*/
/*
let num1 = 12345;
// 1. перевести число в строку
// 2. сложить символы строки
let str = "12345";
console.log(+str[0] + +str[1] + +str[2]);*/

/**
 * обработка рейтинга
 */
/*
let ratingInput = document.querySelector("#rating");
let ratingInfo = document.querySelector("#rating-info");

ratingInput.addEventListener("blur", function () {
  // получаю значение рейтинга
  let rating = Number(ratingInput.value);
  console.log(rating);

  if (rating === 5) {
    ratingInfo.innerHTML = "<p class='rating-5'>Отличный рейтинг</p>";
  } else if (rating === 4) {
    ratingInfo.innerHTML = "<p class='rating-4'>Хороший рейтинг</p>";
  } else if (rating === 3) {
    ratingInfo.innerHTML = "<p class='rating-3'>Удовлетворительный рейтинг</p>";
  } else if (rating === 2) {
    ratingInfo.innerHTML = "<p class='rating-2'>Плохой рейтинг</p>";
  } else if (rating === 1) {
    ratingInfo.innerHTML = "<p class='rating-1'>Ужасный рейтинг</p>";
  } else if (rating === 0) {
    ratingInfo.innerHTML = "<p class='rating-0'>Рейтинг отсутствует</p>";
  } else {
    ratingInfo.innerHTML = "<p class='wrong-rating'>Некорректное значение рейтинга!!!</p>";
  }
});
*/

/*
let ratingInput = document.querySelector("#rating");
let ratingInfo = document.querySelector("#rating-info");

ratingInput.addEventListener("blur", function () {
  let userName = ratingInput.value;

  console.log(userName);
  // если пустая строка, то "Введите имя"
  if (userName === "") {
    ratingInfo.innerHTML = "<p class='error'>Введите имя</p>";
  } else if (userName.length < 2) {
    // если длина строки менее 2 символов
    ratingInfo.innerHTML = "<p class='error'>Имя пользователя должно быть не менее 2 символов</p>";
  } else {
    // если ввод корректен
    ratingInfo.innerHTML = `<p class='success'>Добро пожаловать, ${userName}</p>`;
  }
});
*/
// подучаем длину строки
// let str = "hello!!!";
// console.log(str.length);

/*
let age = 88;
if (age >= 6 && age < 65) {
  console.log("С вас 100руб");
} else {
  console.log("Проходите бесплатно");
}*/

/*
let age = 3;
// если возраст больше или равен 18, пускаем
if (age >= 18) {
  console.log("Добро пожаловать!!!");
} else {
  // иначе
  console.log("Подрасти!!!");
}

// тернарный оператор
age >= 18 ? console.log("Добро пожаловать!!!") : console.log("Подрасти!!!");
*/
