// функции
// console.log(123);

// document.write(123);

// [1, 2, 3].join("");
// [1, 2, 3].length;
// [1, 2, 3].push(4);
// [1, 2, 3].pop();

// "hello".toUpperCase();

// метод
// let dog = {
//   name: "Бобик",
//   age: 10,
//   color: "blue",
//   getInfo: function () {
//     console.log("Hello");
//   },
// };

// dog.getInfo();

// объявление
// function sayHello() {
//   console.log("Hello");
// }
// // вызов
// sayHello();
// sayHello();
// sayHello();
// sayHello();

// аргументы функции
// function sayHello(userName = "Медвед") {
//   console.log(`Привет, ${userName}!!!`);
// }

// sayHello("Анна");
// sayHello("Петр");
// sayHello("Инна");
// sayHello();

/*
// вызов функции при вводе значения в инпут
let fName = document.querySelector("#fName"); // получаем инпут
let greet = document.querySelector("#greet"); // получаем блок для вывода данных

// функция, формирующая приветствие
function sayHello(name) {
  greet.textContent = `Привет, ${name}!!!`;
}

fName.addEventListener("blur", function () {
  // получаем знчение из поля ввода
  let value = fName.value;

  // если value не пустая строка, вызываем функцию
  // псевдоложные значения '', 0, NaN, null, undefined
  if (value) {
    sayHello(value);
  } else {
    //sayHello("гость");
    greet.textContent = "введите имя";
  }

  // очищаем поле ввода
  fName.value = "";
});
*/

// return

// let nums = [1, 2, 3, 8];
// let lastEl = nums.pop();
// let newLen = nums.push(5);
// console.log(lastEl);
// console.log(newLen);

/*
// формирование приветствия
function sayHello(userName = "Медвед") {
  return `Привет, ${userName}!!!`;
}

// формирование разметки
function addHTML(value) {
  console.log(`<h2>${value}</h2>`);
}

let result = sayHello("Анна"); // Привет, Анна!!!
addHTML(result);
*/

/*
function sayHello(userName = "Медвед") {
  return `Привет, ${userName}!!!`;
  console.log("sdfsdjshfglkidjfhglksdfhglkdfmngelkor");
}
sayHello();
*/

// 1 задание
// напишите функцию, которая принимает имя пользователя и возраст
// и возвращает сформированную из этих данных строку в параграфе

// 1
// function addUserData(name, age) {
//   return name + " " + age;
// }
// console.log(addUserData("Анна", 22));

// 2
// function nameUser(user, age) {
//   return `<p>${user} ${age}</p>`;
// }
// console.log(nameUser("Иван", 44));

// 3
// function userInfo(userName, age) {
//   return `<p>Имя: ${userName}, Возраст: ${age}</p>`;
// }
// console.log(userInfo("Сергей", 23));

// 4
// function userNameAge(userName, age) {
//   return `Имя пользователя: ${userName} Возраст: ${age}`;
// }

// console.log(userNameAge("Инна", 12));

// область видимости
// function getSum(num1, num2) {
//   let result = num1 + num2;
//   return result;
// }
// let sum1 = getSum(3, 8); // 11
// let sum2 = getSum(6, 2); // 8

// console.log(sum1, sum2);
