// for

// выводим в консоль числа от 0 до 10
// for (let i = 0; i < 10; i++) {
//   console.log(i);
// }
// console.log("Цикл завершен");

// выводим в консоль числа от 1 до 10 включительно
// for (let i = 1; i <= 10; i++) {
//   console.log(i);
// }
// console.log("Цикл завершен");

// выводим в консоль числа от 1 до 10 включительно
// for (let i = 0; i <= 100; i += 10) {
//   console.log(i);
// }
// console.log("Цикл завершен");

// 1 задание
// выведите в консоль числа от 10 до 0

// 1
// for (let i = 10; i > 0; i--) {
//   console.log(i);
// }

// 2
// for (let i = 10; i >= 0; i--) {
//   console.log(i);
// }

// 3
// for (let i = 10; i >= 0; i--) {
//   console.log(i);
// }

// let cats = 4;
// cats--;
// console.log(cats); // 4

// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Арбуз", "Банан", "Яблоко", "Фейхуа"];
// console.log(fruits);

// получить числа от 0 до 5 вкл.
// for (let i = 0; i < 5; i++) {
//   console.log(i);
// }

// перебираем индексы массива до значения длины массива
// for (let i = 0; i < fruits.length; i++) {
//   console.log(fruits[i]);
// }

// вынос длины массива в переменную
// let arrLen = fruits.length;
// for (let i = 0; i < arrLen; i++) {
//   console.log(fruits[i]);
// }

//2 задание
//let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
//console.log(pets);
//выведите в консоль четные элементы массива

// 1
// for (let i = 0; i < pets.length; i += 2) {
//   console.log(pets[i]);
// }

//2
// 1,3,5,7,9... - нечетные
// for (let i = 1; i < pets.length; i += 2) {
//   console.log(pets[i]);
// }

// 3
// for (let i = 0; i < pets.length; i++) {
//   if (i % 2 === 0) {
//     console.log(pets[i]);
//   }
// }

// while
// выводим в консоль числа от 0 до 10
// for (let i = 0; i < 10; i++) {
//   console.log(i);
// }

// let i = 0;
// while (i < 10) {
//   console.log(i);
//   i++;
// }
// console.log("Цикл завершен");

// for (let i = 0; i < pets.length; i += 2) {
//   console.log(pets[i]);
// }

// let i = 0;
// while (i < pets.length) {
//   console.log(pets[i]);
//   i += 2;
// }

// break
// выяснить , есть ли в массиве 'Кокос'
// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Арбуз", "Банан", "Яблоко", "Фейхуа"];

// for (let i = 0; i < fruits.length; i++) {
//   console.log(fruits[i]);
//   if (fruits[i] === "Кокос") {
//     console.log("Кокос найден");
//     break;
//   }
// }

// если Кокос в массиве есть, вывести в консоль, что есть
// иначе вывести сообщение о том, что элемент не найден
//let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Арбуз", "Банан", "Яблоко", "Фейхуа"];

// for (let i = 0; i < fruits.length; i++) {
//   if (fruits[i] === "Кокос") {
//     console.log("Кокос есть");
//     break;
//   } else {
//     console.log("кокос тут не ловится! Говорит начальник катка!!!");
//   }
// }

// for (let i = 0; i <= fruits.length - 1; i++) {
//   if (fruits[i] === "Kokos") {
//     console.log("kokos is found");
//     break;
//   } else if (fruits[fruits.length - 1] !== "kokos") {
//     console.log("element not found");
//   }
// } //либо внутри можно while вмсето if

// for (let i = 0; i < fruits.length; i++) {
//   if (fruits[i] === "Кокос") {
//     console.log("Экокос есть");
//     break;
//     if (fruits[i] === fruits.length) {
//       console.log("Экокос есть");
//     } else {
//       console.log("кокос тут неловится! Говорит начальник катка!!!");
//     }
//   }
// }
/*
// флаг
let flag = false; // принимаем что элемента в массиве нет
for (let i = 0; i < fruits.length; i++) {
  if (fruits[i] === "Кокос") {
    // если эл найден, меняем значение флага
    flag = true;
    break;
  }
}
flag ? console.log("Элемент в массиве есть") : console.log("Элемента в массиве НЕТ");
*/

// получить сумму элементов массива
// let nums = [5, 7, 9, 4, 1, 6, 7, 4, 3, 8];

// let sum = 0;
// for (let i = 0; i < nums.length; i++) {
//   sum += nums[i];
// }
// console.log(sum);

/*
3 задание
let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Арбуз", "Банан", "Яблоко", "Фейхуа"];
соберите из массива строку используя цикл*/

//let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];

//1
// let strFruts = 0;
// for (let i = 0; i < fruits.length; i++) {
//   strFruts += fruits[i];
// }
// console.log(strFruts);

//2
// let str = "";
// for (let i = 0; i <= fruits.length - 1; i++) {
//   str = str + " " + fruits[i];
// }
// console.log(str);

//3
// let strFruits = "";
// for (let i = 0; i < fruits.length; i++) {
//   strFruits += fruits[i];
// }
// console.log(strFruits);

// for...of
// вывести элементы массива в виде списка
/*
let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];

let fruitsStr = "";
for (let fruit of fruits) {
  fruitsStr += `<li>${fruit}</li>`;
}
// console.log(fruitsStr);
let list = document.querySelector("#list");
list.insertAdjacentHTML("beforeend", fruitsStr);*/

// let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
// for (let pet of pets) {
//   console.log(pet.toUpperCase());
// }

/*
// получите сумму элементов массива
let data = [
  [343, -431, 456, -43],
  [677, 432, -668, 654, 875],
  [343, 765, -456, 362],
  [467, -532, 567, -562, 354],
];

let sum = 0;
for (let row of data) {
  for (let num of row) {
    sum += num;
  }
}
console.log(sum);*/

// nodeList
let listItems = document.querySelectorAll("#list li");
let listItemsArr = [...listItems]; // формируем массив на основе nodeList
console.log(listItemsArr);
console.log([1, 2, 3]);

// for...in
let student = {
  firstName: "Igor",
  lastName: "Pronkin",
  age: 34,
  phone: "8-916-341-38-35",
  city: "Moscow",
  "house number": 33,
  street: "Chertanovskaya",
};
