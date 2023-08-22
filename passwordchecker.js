const password1 = document.querySelector(".password-first");
const password2 =  document.querySelector(".password-second");
const paragraphText =  document.querySelector(".result-text");

const passwordCheck = ()=>{
    const password1Value = password1.value;
    const password2Value = password2.value;

    if(password1Value === password2Value){
        paragraphText.textContent = "Hesla jsou shodná";
        paragraphText.classList.add("valid");
        paragraphText.classList.remove("invalid");
    }else{
        paragraphText.textContent = "Hesla nejsou shodná";
        paragraphText.classList.add("invalid");
        paragraphText.classList.remove("valid");
    }

    if(password1Value === "" && password2Value===""){
        paragraphText.textContent = ""
    }
}
password1.addEventListener("input", passwordCheck);
password2.addEventListener("input", passwordCheck);

