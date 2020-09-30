let form = document.querySelector('form');
let ime = document.getElementById('ime');
let email = document.getElementById('email'); 
let poruka = document.getElementById('poruka');



form.addEventListener('submit', function(e){
    e.preventDefault();

    localStorage.setItem('ime', ime.value);
    localStorage.setItem('email', email.value); 
    localStorage.setItem('poruka',poruka.value);
    

    console.log(localStorage.getItem('ime'));
    console.log(localStorage.getItem('email'));
    console.log(localStorage.getItem('poruka'));
    
    
});
