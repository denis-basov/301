// глобальная область видимости
// let fName = "Ivan";

// function sayHello() {
//   // функциональная область видимости
//   console.log(`Hello, ${fName}`);
// }
// sayHello();

///////////////////////////////////////////////////////////////////////////////
// let fName = "Ivan";

// function sayHello() {
//   // функциональная область видимости
//   let fName = "Anna";

//   console.log(`Hello, ${fName}`);
// }
// console.log(`Hello, ${fName}`); //Ivan
// sayHello(); // Anna

///////////////////////////////////////////////////////////////////////////////
// let fName = "Ivan";

// function sayHello(fName = "Anna") {
//   // функциональная область видимости
//   console.log(`Hello, ${fName}`);
// }
// sayHello();

///////////////////////////////////////////////////////////////////////////////
// let age = 44;
// let message = "";

// if (age >= 18) {
//   message = "Добро пожаловать";
// } else {
//   message = "Доступ запрещен";
// }
// console.log(message);

///////////////////////////////////////////////////////////////////////////////
// let age = 44;

// if (age >= 18) {
//   message = "Добро пожаловать";
// } else {
//   message = "Доступ запрещен";
// }
// console.log(message);

///////////////////////////////////////////////////////////////////////////////
// function outer() {
//   let num1 = 4;
//   let num2 = 8;

//   function getSum() {
//     console.log(num1 + num2);
//   }
//   getSum();
// }
// outer();

///////////////////////////////////////////////////////////////////////////////
// let num1 = 4;
// let num2 = 8;

// function outer() {
//   function getSum() {
//     console.log(num1 + num2);
//   }
//   getSum();
// }
// outer();

///////////////////////////////////////////////////////////////////////////////
// function outer() {
//   function getSum() {
//     console.log(num1 + num2);
//   }
//   getSum();
// }
// outer();

// функциональные выражения
// let num1 = 4;
// let num2 = 8;
// // function getSum() {
// //   console.log(num1 + num2);
// // }

// let getSum = function () {
//   console.log(num1 + num2);
// };

// getSum();

// определение функции
// function makeBillInfo(totalBillTipPar, summBillPar) {
//   return `
//       <div class="bill-info">
//         <h3>Сумма счета за обед:</h3>
//         <p>Сумма счета: ${summBillPar}₽</p>
//         <p>Сумма чаевых: ${totalBillTipPar.tipValue}₽</p>
//         <h3>Итого: ${totalBillTipPar.billTip}₽</h3>
//       </div>
//     `;
// }
// console.log(makeBillInfo);

// функциональное выражение
// let makeBillInfo = function (totalBillTipPar, summBillPar) {
//   return `
//         <div class="bill-info">
//           <h3>Сумма счета за обед:</h3>
//           <p>Сумма счета: ${summBillPar}₽</p>
//           <p>Сумма чаевых: ${totalBillTipPar.tipValue}₽</p>
//           <h3>Итого: ${totalBillTipPar.billTip}₽</h3>
//         </div>
//       `;
// };

// function sayHello() {
//   console.log(`Hello, summer`);
//   return `Hello, summer`;
// }

// console.log(sayHello);

/**
 * при нажатии на кнопку выводим строку в консоль
 */
// function sayHello() {
//   console.log(`Hello, summer`);
// }
// // получаем кнопку
// let btn = document.querySelector("#btn");
// // при нажатии на кнопку
// btn.addEventListener("click", sayHello);
// // btn1.addEventListener("click", sayHello);
// // btn2.addEventListener("click", sayHello);
// btn.addEventListener("click", function () {
//   console.log(`Hello, summer`);
// });

/**
 * при нажатии на кнопку выводим строку в консоль
 */

// let fName = "Inna";
// function sayHello(userName) {
//   return function () {
//     console.log(`Hello, ${userName}`);
//   };
// }

// // получаем кнопку
// let btn = document.querySelector("#btn");
// // при нажатии на кнопку
// btn.addEventListener("click", sayHello(fName));

// передача функции как значения
// function getSum() {
//   console.log(5 + 9);
// }
// function getMult() {
//   console.log(5 * 9);
// }

// function outer(userFunc) {
//   userFunc();
// }
// outer(getSum);
// outer(getMult);
