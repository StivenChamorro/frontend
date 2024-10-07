const btnswitch =document.querySelector('#switch');

btnswitch.addEventListener('click', ()=>{
document.body.classList.toggle('dark');
btnswitch.classList.toggle('active');
});


const avatar = document.getElementById('avatar');
const changeAvatar = document.getElementById('changeAvatar');

avatar.addEventListener('click', () => changeAvatar.click());
