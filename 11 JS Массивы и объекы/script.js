// let str = "Ivan";
// console.log(str.length);
// console.log(str[0]);

// пустой массив
// let numbers = [];

// массив чисел
//let numbers = [1, 5, 4, 2, 6, 8, 3, 1, 5, 6, 8];
// console.log(numbers);
// console.log(numbers.length);

// смешанный массив
//let mix = ["hello", 45, null, 0, "", true, [1, 2, 3]];
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
// let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
// pets[2] = "Кокос";
// pets[8] = "hello";
// pets[0] = "dog";
// console.log(pets);
// console.log(pets[44]);

// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
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
{
  /* <form>
<input type="text" id="push-item" /><br />
<input type="button" id="push-btn" value="Добавить в массив" />
</form>
<h3 id="arr-output"></h3> */
}
/*
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
*/

/**
 * pop - удаление элемента с конца
 */
{
  /* <form>
<input type="button" id="pop-btn" value="Изъять последний элемент" />
</form>
<h3 id="arr-output"></h3> */
}
/*
let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];

// let lastEl = fruits.pop();
// console.log(lastEl);
// console.log(fruits);

// получаю элементы для взаимодействия
let popBtn = document.querySelector("#pop-btn");
let arrOutput = document.querySelector("#arr-output");

// выводим первоначальный массив
arrOutput.textContent = fruits.join(", ");

// обрабатываю клики по кнопке
popBtn.addEventListener("click", function () {
  // удалить последний элемент массива
  fruits.pop();

  // если массив пуст, то меняем текст на кнопке
  if (fruits.length === 0) {
    popBtn.value = "Массив пуст";
    popBtn.disabled = true;
  }

  // добавление введенного значения в документ
  // arrOutput.insertAdjacentHTML("beforeend", `${value} `);
  arrOutput.textContent = fruits.join(", ");
});
*/

// 5.23px и 6px
// let num1 = parseFloat("5.23px");
// let num2 = parseFloat("6px");
// console.log(num1 + num2);

/**
 * Shift, Unshift - работа с началом массива
 */
// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];

// console.log(fruits.shift());
// console.log(fruits);

// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
// let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
// let cats = ["Барсик", "Мурка", "Тимоха", "Антоха", "Толик"];

// concat
// let newArr = cats.concat(animals, pets, "tiger", 345);
// console.log(newArr);

// join
// let catsStr = cats.join(", ");
// console.log(catsStr);

// ссылочные типы
// let newAnimals = animals;
// animals.pop();
// console.log(animals);
// console.log(newAnimals);

// копирование массива
//1
// let newAnimals = animals.concat();
// animals.pop();
// console.log(animals);
// console.log(newAnimals);

//2
// let newAnimals = animals.slice();
// animals.pop();
// console.log(animals);
// console.log(newAnimals);

// slice
// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];

// let newFruits = fruits.slice(2);
// console.log(newFruits);

// let newFruits = fruits.slice(2, 5);
// console.log(newFruits);

// let newFruits = fruits.slice(-4, -2);
// console.log(newFruits);

// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
// let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
// let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
// let cats = ["Барсик", "Мурка", "Тимоха", "Антоха", "Толик"];

// splice
// let delItems = pets.splice(2, 4);
// console.log("Исходный массив", pets);
// console.log("Удаленные элементы", delItems);

// let delItems = pets.splice(0, 3);
// console.log("Исходный массив", pets);
// console.log("Удаленные элементы", delItems);

// let delItems2 = pets.splice(0, 3);
// console.log("Исходный массив", pets);
// console.log("Удаленные элементы", delItems2);

// let delItems3 = pets.splice(0, 3);
// console.log("Исходный массив", pets);
// console.log("Удаленные элементы", delItems3);

// let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
// let delItems = pets.splice(2, 2, "camel", "duck", "elephant", "cat");
// console.log("Исходный массив", pets);
// console.log("Удаленные элементы", delItems);
// console.log("Исходный массив + удаленные элементы", pets.push(...delItems));
// console.log(pets);

// let delItems = pets.splice(2, 0, "camel", "duck");
// console.log("Исходный массив", pets);
// console.log("Удаленные элементы", delItems);

// 1 задание
// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
// вырежите из массива элементы  "Ананас", "Апельсин" и добавьте их в конец массива

//1
// let delItem1 = fruits.splice(1);
// let delItem4 = fruits.splice(4);
// let res = fruits.splice(3, 0, delItem1, delItem4);
// console.log(fruits);

//2
// let delItem1 = fruits.splice(1, 1);
// let delItem2 = fruits.splice(2, 1);
// console.log(fruits.concat(delItem1, delItem2));

//3
// let newFruits1 = fruits.splice(1, 1);
// console.log(fruits);
// let newFruits2 = fruits.splice(2, 1);
// console.log(fruits);
// let newFruits = fruits.concat(newFruits1, newFruits2);
// console.log(newFruits);

//4
// let fut1 = fruits.splice(1, 1);
// let fut2 = fruits.splice(2, 1);
// fruits = fruits.concat(fut1, fut2);
// console.log(fruits);

//5
// let newFruits1 = fruits.splice(1, 1);
// console.log(fruits);
// let newFruits2 = fruits.splice(2, 1);
// console.log(fruits);
// let newFruits = fruits.concat(newFruits1, newFruits2);
// console.log(newFruits);

// выборка элементов
// let spans = document.querySelectorAll(".pets span");
// console.log(spans);

/**
 * подгрузка данных из массива
 */
/*
let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
let petsContainer = document.querySelector("#pets");
let addPets = document.querySelector("#add-pets");

// при клике на кнопку выводить часть массива в документ
addPets.addEventListener("click", function () {
  // вырезаем первые 3 элемента из массива
  let output = pets.splice(0, 3);
  let outputStr = "<span>" + output.join("</span><span>") + "</span>";

  // let outputStr = "<p>" + pets.splice(0, 3).join("</p><p>") + "</p>";

  // размещаем в контейнере на странице
  petsContainer.insertAdjacentHTML("beforeend", outputStr);

  // если массив пуст, блокируем кнопку
  if (pets.length === 0) {
    // addPets.disabled = true;
    // изчезновение кнопки
    addPets.style.display = "none";
  }
});
*/

// sort
// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
// fruits.sort();
// console.log(fruits);

// let numbers = [5, 3, 1, 12, 14, 2, 22, 29, 19, 41, 42, 18, 3, 6];
// numbers.sort();
// console.log(numbers);

/**
 * const Arrays
 */
// const fName = "Иван";
// fName = "Ирина";

// const fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
// fruits = [1, 2, 4, 6, 6];
// console.log(fruits);

// const fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
// let delEl = fruits.pop();
// fruits.splice(2, 1);
// fruits[0] = delEl;
// console.log(fruits);

// let a = "input";
// let b = "inputInt";
// const c = a + b;
// console.log(c);

/**
 * Объекты
 */
let firstName = "Igor";
let lastName = "Pronkin";
let age = 34;
let phone = "8-916-341-38-35";
let city = "Moscow";
let street = "Chertanovskaya";

let student = {
  firstName: "Igor",
  lastName: "Pronkin",
  age: 34,
  phone: "8-916-341-38-35",
  city: "Moscow",
  "house number": 33,
  street: "Chertanovskaya",
};
// console.log(student);
// console.log(student.firstName);
// console.log(student.lastName);
// console.log(student["street"]);
// console.log(student["house number"]);

// let prop = "lastName";
// console.log(student[prop]);

// student.age -= 1;
// console.log(student);

// let pets = document.querySelector("#pets");
// console.dir(pets);

// массив объектов
let users = [
  {
    fName: "Иван",
    lName: "Иванов",
    hobbies: ["Спать", "Гулять", "Читать"],
  },
  {
    fName: "Анна",
    lName: "Иванова",
    hobbies: ["Спать", "Читать"],
  },
  {
    fName: "Ирина",
    lName: "Сидорова",
    hobbies: ["Гулять", "Читать"],
  },
];
// console.log(users);
// console.log(users[0].lName);
// console.log(users[1].lName);
// console.log(users[2].lName);
// console.log(users[0].hobbies[2]);

// let fNames = `<p>${users[0].fName}</p>
//               <p>${users[1].fName}</p>
//               <p>${users[2].fName}</p>`;
// console.log(fNames);
// document.write(fNames);

// users.forEach((user) => console.log(`Имя: ${user.fName}. Фамилия: ${user.lName}`));
