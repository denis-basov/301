// let str = "Ivan";
// console.log(str.length);
// console.log(str[0]);

// пустой массив
// let numbers = [];

// массив чисел
let numbers = [1, 5, 4, 2, 6, 8, 3, 1, 5, 6, 8];
// console.log(numbers);
// console.log(numbers.length);

// смешанный массив
let mix = ["hello", 45, null, 0, "", true, [1, 2, 3]];
// console.log(mix);
// console.log(mix[6][1]);
// console.log(mix.length);

// массив строк
// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
// console.log(fruits);
// console.log(fruits[2]);
// console.log(fruits[4]);
// console.log(fruits[0]);
// console.log(fruits.length);

// замена значений элементов массива
let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
// pets[2] = "Кокос";
// pets[8] = "hello";
// pets[0] = "dog";
// console.log(pets);
// console.log(pets[44]);

let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
// Животные: bison, duck, cat!

//1
// let animals = [[[]]]
// console.log(animals[1][3][5]);

//2
// console.log("Животные: " + animals[1] + ", " + animals[3] + ", " + animals[5] + "!");

//3
// console.log("Животные: " + animals[1], ",", animals[3], ",", animals[5], "!");

//4
// let output = `Животные: ${animals[1].toUpperCase()}, ${animals[3]}, ${animals[5]}!`;
// console.log(output);

// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
// добавление элемента в конец массива - push
// let newArrLength = animals.push("mouse");
// console.log(animals);
// console.log("Новая длина массива animals:", newArrLength);

/**
 * добавление введенного значения в конец массива
 */
let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];

// получаю элементы для взаимодействия
let pushItem = document.querySelector("#push-item");
let pushBtn = document.querySelector("#push-btn");
let arrOutput = document.querySelector("#arr-output");

// выводим первоначальный массив
arrOutput.textContent = fruits.join(", ");

// обрабатываю клики по кнопке
pushBtn.addEventListener("click", function () {
  // получаем введенное в input значение в переменную
  let value = pushItem.value;

  // добавляем введенное в input значение в конец массива
  fruits.push(value);

  // console.log(fruits[fruits.length - 1]);
  // console.log(fruits);

  // добавление введенного значения в документ
  // arrOutput.insertAdjacentHTML("beforeend", `${value} `);
  arrOutput.textContent = fruits.join(", ");

  // очищаем значение в поле ввода
  pushItem.value = "";
});
