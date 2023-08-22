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
