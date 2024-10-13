const btnswitch =document.querySelector('#switch');

btnswitch.addEventListener('click', ()=>{
document.body.classList.toggle('dark');
btnswitch.classList.toggle('active');
});


const pass = document.getElementById("pass"),
icon = document.querySelector(".fa-solid")

icon.addEventListener("click", e => {
    if(pass.type === "password"){
        pass.type = "text";
        icon.classList.add('fa-eye')
        icon.classList.remove('fa-eye-low-vision')
    }
    else{
        pass.type = "password";
        icon.classList.remove('fa-eye')
        icon.classList.add('fa-eye-low-vision')
    }

});