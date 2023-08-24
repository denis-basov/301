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
console.log("Hello");
setTimeout(function () {
  console.log("winter");
}, 2000);
console.log("summer");
