//Regex Init
const RegexAlphab = /^[a-zA-Z]*$/
const RegexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
const RegexDate = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/

function validate(){
    const fname = document.getElementById('firstname')
    const lname = document.getElementById('lastname')
    const bdate = document.getElementById('date')

    const errors = {
        'firstname':'',
        'lastname':'',
        'date':'',
}
    if (!RegexAlphab.test(fname.value)){
        errors['firstname'] = 'please enter a valid First name';
    }
    
    if (!RegexAlphab.test(lname) ){
        errors['lastname'] = 'please enter a valid Last name';

    }

    if (!RegexDate.test(lname) ){
        errors['date'] = 'please enter a valid BirthDate';

    }
    
    for (var key in errors) {
        if (errors[key] != ''){
            var errorNode = document.createElement("span"); 
            var errorContent = document.createTextNode(errors[key]); 
            errorNode.appendChild(errorContent);  
            alert(key)
            var errorInput = document.getElementById(key); 
            errorInput.style.borderColor = "crimson"
            errorInput.parentNode.insertBefore(errorNode, errorInput.nextSibling);
            
        }
    }     

}