// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
// let numbers = [1, 5, 4, 2, 6, 8, 3, 1, 5, 6, 8];
// let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];

// foreach
//1
// const array1 = ["a", "b", "c", "d"];

// function printToConsole(char) {
//   console.log(char.toUpperCase());
// }

// array1.forEach(printToConsole);

//2
// const array1 = ["a", "b", "c", "d"];

// array1.forEach(function (char) {
//   console.log(char.toUpperCase());
// });

// fruits.forEach(function (fruit) {
//   console.log(`<h1>${fruit}</h1>`);
// });
// console.log(fruits);

// for (let fruit of fruits) {
//   console.log(fruit);
// }

/**
 * добавляем обработчики событий на каждую кнопку
 */
/*
// получаем список с кнопками
let buttons = document.querySelectorAll("button");
// console.log(buttons);

// перебираем кнопки
buttons.forEach(function (button) {
  // на каждую кнопку вешаем обработчик события по клику
  button.addEventListener("click", function () {
    console.log(button.textContent);
  });
});
*/

/*
1 задание
let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
выведите в консоль значение каждого элемента в верхнем регистре*/

//1
// pets.forEach(function (pet) {
//   console.log(pet.toUpperCase());
// });

//2
// pets.forEach(function (el) {
//   console.log(el.toUpperCase());
// });

// arrow
// pets.forEach((el) => console.log(el.toUpperCase()));

// pets.forEach(function (pet, index) {
//   console.log(pet, index);
// });

// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
// let numbers = [1, 5, 4, 2, 6, 8, 3, 1, 5, 6, 8];
// let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
// map

// let newPets = pets.map(function (pet) {
//   return pet.toUpperCase();
// });
// console.log(newPets);

// let newPets = pets.map(function (pet) {
//   return pet.length;
// });
// console.log(newPets);

// let cats = [
//   {
//     name: "Ллойд",
//     color: "Черный",
//     age: 12,
//     avatar: "img/1.jpg",
//     qty: 3,
//     price: 1000,
//     owner: {
//       name: "Василий",
//       city: "Москва",
//       phones: [333, 543, 123, 87876],
//     },
//   },
//   {
//     name: "Барсик",
//     color: "Серый",
//     age: 6,
//     avatar: "img/2.jpg",
//     qty: 1,
//     price: 2000,
//     owner: {
//       name: "Анна",
//       city: "Москва",
//       phones: [523, 653, 532],
//     },
//   },
//   {
//     name: "Мурка",
//     color: "Белый",
//     age: 2,
//     avatar: "img/3.jpg",
//     qty: 4,
//     price: 1500,
//     owner: {
//       name: "Инна",
//       city: "Самара",
//       phones: [187, 466, 643],
//     },
//   },
//   {
//     name: "Пусик",
//     color: "Серый",
//     age: 5,
//     avatar: "img/4.jpg",
//     qty: 5,
//     price: 3000,
//     owner: {
//       name: "Николай",
//       city: "Москва",
//       phones: [345, 678, 543],
//     },
//   },
// ];

// получить массив кличек котов
// let catNames = cats.map(function (cat) {
//   return cat.name;
// });
// console.log(catNames);

// let catNames = cats.map(function (cat) {
//   return [cat.name, cat.color];
// });
// console.log(catNames);

// 2 задание
// получите массив владельцев котов

//1
// let catNames = cats.map(function (cat) {
//   return cat.owner.name;
// });
// console.log(catNames);

//2
// let catOwner = cats.map(function (cat) {
//   return `${cat.name} имеет человека, который наивно считает себя хозяином и зовется ${cat.owner.name}`;
// });
// console.log(catOwner);

//3
// let ownerCats = cats.map(function (cat) {
//   return cat.owner;
// });
// console.log(ownerCats);

// получить массив телефонов владельцев котов в виде строк
// let ownerCatsPhones = cats.map(function (cat) {
//   return cat.owner.phones.join(", ");
// });
// console.log(ownerCatsPhones);
// ['345, 678, 543', '187, 466, 643'...]

// массив цен котов
// let catsPrice = cats.map(function (cat) {
//   return cat.price;
// });
// console.log(catsPrice);

// получить массив с суммой возможной выручки по каждой кличке котов
// let catsPrice = cats.map(function (cat) {
//   return cat.price * cat.qty;
// });
// console.log(catsPrice);

// массив строк
// let catsPrice = cats.map(function (cat) {
//   return `Сумма за котов: ${cat.name}: ${cat.price * cat.qty} руб.`;
// });
// console.log(catsPrice);

// масив массивов
// let catsPrice = cats.map(function (cat) {
//   return [cat.name, cat.price * cat.qty];
// });
// console.log(catsPrice);

// массив объектов
// let catsPrice = cats.map(function (cat) {
//   return { catName: cat.name, totalPrice: cat.price * cat.qty };
// });
// console.log(catsPrice);

/*
// получить из массива котов строку с кличкой, цветом шерсти и возрастом
// и вывести в документ
let catsContainer = document.querySelector("#cats");

let catsArr = cats.map(function (cat) {
  return `
        <div class="cat">
            <h2>Кличка: ${cat.name}</h2>
            <p>Цвет шерсти: ${cat.color}</p>
            <p>Возраст: ${cat.age}</p>
        </div>
    `;
});
let catsStr = catsArr.join("");

console.log(catsStr);

// добавляю сформированную строку в документ
catsContainer.insertAdjacentHTML("beforeend", catsStr);*/

// стрелочные функции

// определение функции
// function getSum(num1, num2) {
//   return num1 + num2;
// }

// функц. выражение
// let getSum = function (num1, num2) {
//   return num1 + num2;
// };

// стрелочная функция
// let getSum = (num1, num2) => {
//   return num1 + num2;
// };
// console.log(getSum(3, 6));

// let sayHi = () => {
//   console.log(`Hi, user!!!`);
// };
// sayHi();

// let sayHi = (name) => {
//   console.log(`Hi, ${name}!!!`);
// };
// sayHi("Ivan");

// let sayHi = name => {
//   console.log(`Hi, ${name}!!!`);
// };
// sayHi("Ivan");

// let sayHi = (name) => console.log(`Hi, ${name}!!!`);
// sayHi("Ivan");

// неявный return
// let sayHi = (name) => {
//   return `Hi, ${name}!!!`;
// };
// console.log(sayHi("Ivan"));

// let sayHi = (name) => `Hi, ${name}!!!`;
// console.log(sayHi("Ivan"));

/*
const array1 = [1, 4, 9, 16];

// Pass a function to map
const map1 = array1.map((x) => x * x);

const map1 = array1.map(function(x){
  return x * x;
});

console.log(map1);
// Expected output: Array [2, 8, 18, 32]
*/

// перепишите исп. стрелочные функции
// let catsPrice = cats.map(function (cat) {
//   return cat.price * cat.qty;
// });

//1
// let catsPrice = cats.map => cat.price * cat.qty;
// console.log(catsPrice);

//2
// let catsPriceTotal = cats.map((cat) => cat.price * cat.qty);
// console.log(catsPriceTotal);

//3
// let catsPrice = cats.map((cat) => cat.price * cat.qty);
// console.log(catsPrice);

let cats = [
  {
    name: "Ллойд",
    color: "Черный",
    age: 12,
    avatar: "img/1.jpg",
    qty: 3,
    price: 1000,
    owner: {
      name: "Василий",
      city: "Москва",
      phones: [333, 543, 123, 87876],
    },
  },
  {
    name: "Барсик",
    color: "Серый",
    age: 6,
    avatar: "img/2.jpg",
    qty: 1,
    price: 2000,
    owner: {
      name: "Анна",
      city: "Москва",
      phones: [523, 653, 532],
    },
  },
  {
    name: "Мурка",
    color: "Белый",
    age: 2,
    avatar: "img/3.jpg",
    qty: 4,
    price: 1500,
    owner: {
      name: "Инна",
      city: "Самара",
      phones: [187, 466, 643],
    },
  },
  {
    name: "Пусик",
    color: "Серый",
    age: 5,
    avatar: "img/4.jpg",
    qty: 5,
    price: 3000,
    owner: {
      name: "Николай",
      city: "Москва",
      phones: [345, 678, 543],
    },
  },
];

// find
// найти первого попавшегося кота стоимостью 2000
// let findCat = cats.find(function (cat) {
//   return cat.price === 2000;
// });
// console.log(findCat);

// найти первого попавшегося кота стоимостью < 2000
// let findCat = cats.find(function (cat) {
//   return cat.price <= 2000;
// });
// console.log(findCat);

// найти первого попавшегося кота с кличкой Ллойд
// let findCat = cats.find(function (cat) {
//   return cat.name === "Ллойд";
// });
// console.log(findCat);

// filter
// получить котов, стоимостью менее 2000
// let newCats = cats.filter(function (cat) {
//   return cat.price < 2000;
// });
// console.log(newCats);

// reduce
let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
let numbers = [1, 5, 4, 2, 6, 8, 3, 1, 5, 6, 8];
let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];

// сумма элементов
// 1 - for
// let sum = 0;
// for (let i = 0; i < numbers.length; i++) {
//   sum += numbers[i];
// }
// console.log(sum);

// 2 - reduce
// let sum = numbers.reduce((acc, currVal) => acc + currVal);
// console.log(sum);

// let sum = numbers.reduce(function (acc, currVal) {
//   return acc + currVal;
// });
// console.log(sum);

// начальное значение
let sum = numbers.reduce(function (acc, currVal) {
  return acc + currVal;
}, 100);
console.log(sum);
