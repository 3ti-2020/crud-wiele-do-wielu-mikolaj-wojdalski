const wyp1=document.querySelector(".wyp1");
const wyp2=document.querySelector(".wyp2");
const wyp3=document.querySelector(".wyp3");

const warning1=document.querySelector(".warning1");
const warning2=document.querySelector(".warning2");
const warning3=document.querySelector(".warning3");

wyp1.addEventListener("click",() => {
    warning1.innerHTML="Wybrano";
});
wyp2.addEventListener("click",() => {
    warning2.innerHTML="Wybrano";
});
wyp3.addEventListener("click",() => {
    warning3.innerHTML="Wybrano";
});