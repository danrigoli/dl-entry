
// variables

    var form = document.getElementById("form")
    var username = document.getElementById("username")
    var surname = document.getElementById("surname")
    var cellphone = document.getElementById("cellphone")
    var email = document.getElementById("email")
    var votes = document.getElementById("votes")
    var starting = document.getElementById("starting")
    var country = document.getElementById("country")
    var errorName = document.getElementById("errorName")
    var errorSurname = document.getElementById("errorSurname")
    var errorCellphone = document.getElementById("errorCellphone")
    var errorVotes = document.getElementById("errorVotes")
    var errorCountry = document.getElementById("errorCountry")
    var errorStarting = document.getElementById("errorStarting")
    var errorEmail = document.getElementById("errorEmail")
    var emailRegex = (/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/)
    let countries

    
        fetch("https://restcountries.eu/rest/v2/all")
        .then(res => res.json())
        .then(data => initialize(data))
        .catch(err => console.log('Error:', err))

        function initialize(countriesData){
            countries = countriesData;
            let select = document.getElementById('country');
            let selectExt = document.getElementById('ext')
            for (let i=0 ; i< countries.length; i++) {
                let options = document.createElement('option') 
                options.value = countries[i].name
                options.innerHTML = countries[i].name
                select.appendChild(options)
                console.log(options)
                // options.innerHTML = countries[i].callingCodes
                // selectExt. appendChild(options)
            }
        }

        $('.single').select2();



form.onsubmit = function(e)  // this prevents the form to submit if errors == true
{
    if (!validations()){
     e.preventDefault()
   }
   else{
      form.submit
   }
   
}
function validations() {

    //checks if inputs are empty

    if(username.value === "" || username.value === null){    
        errorName.innerHTML = "Debe ingresar un nombre"
        errorName.setAttribute("class","invalid-feedback" )
        username.setAttribute("class", "is-invalid form-control")
        username.addEventListener('change', changeName)
        return false;
    }

    if(surname.value === "" || surname.value === null){    
        errorSurname.innerHTML = "Debe ingresar un apellido"
        errorSurname.setAttribute("class","invalid-feedback" )
        surname.setAttribute("class", "is-invalid form-control")
        surname.addEventListener('change', changeSurname)
        return false;
    }

    if(email.value === "" || email.value === null && email.value !== "root"){
        errorEmail.innerHTML = "Debe ingresar un email"
        errorEmail.setAttribute("class","invalid-feedback" )
        email.setAttribute("class", "form-control is-invalid")
        email.addEventListener("change", changeEmail)
        return false
     }
 
     if(emailRegex.test(email.value)!==true && email.value !== 'root'){ //checks the email regex
         errorEmail.innerHTML = "El  email ingresado no es valido"
         errorEmail.setAttribute("class","invalid-feedback" )
         email.setAttribute("class", "is-invalid form-control")
         email.addEventListener("change", changeEmail)
         return false
    }

    if(cellphone.value === "" || cellphone.value === null || cellphone.value.length!= 10 ){  //checks also if the cellphone is more than 10 digits   
        errorCellphone.innerHTML = "Debe ingresar un numero de telefono valido (10 caracteres)"
        errorCellphone.setAttribute("class","invalid-feedback" )
        cellphone.setAttribute("class", "is-invalid form-control")
        cellphone.addEventListener('change', changeCellphone)
        return false;
    }

    if(country.value === "null" || country.value === null){   
        errorCountry.innerHTML = "Debe ingresar un pais"
        errorCountry.setAttribute("class","invalid-feedback" )
        country.setAttribute("class", "single is-invalid form-control d-none")
        country.addEventListener('change', changeCountry)
        return false;
    }

    if(votes.value === "" || votes.value === null || votes.value != int){    
        errorVotes.innerHTML = "Debe ingresar los votos"
        errorVotes.setAttribute("class","invalid-feedback" )
        votes.setAttribute("class", "is-invalid form-control")
        votes.addEventListener('change', changeVotes)
        return false;
    }

    if(starting.value === "" || starting.value === null){    
        errorStarting.innerHTML = "Debe ingresar una fecha"
        errorStarting.setAttribute("class","invalid-feedback" )
        starting.setAttribute("class", "is-invalid form-control")
        starting.addEventListener('change', changeStarting)
        return false;
    }
    

   function changeEmail(){
    errorEmail.innerHTML = ""
    errorEmail.setAttribute("class","" )
    email.setAttribute("class", "form-control")
    }
    function changeName(){
        errorName.innerHTML = ""
        errorName.setAttribute("class","" )
        name.setAttribute("class", "form-control")
    }

    function changeSurname(){
        errorSurname.innerHTML = ""
        errorSurname.setAttribute("class","" )
        surname.setAttribute("class", "form-control")
    }

    function changeCellphone(){
        errorCellphone.innerHTML = ""
        errorCellphone.setAttribute("class","" )
        cellphone.setAttribute("class", "form-control")
    }

    function changeVotes(){
        errorVotes.innerHTML = ""
        errorVotes.setAttribute("class","" )
        votes.setAttribute("class", "form-control")
    }

    function changeStarting(){
        errorStarting.innerHTML = ""
        errorStarting.setAttribute("class","" )
        starting.setAttribute("class", "form-control")
    }

    function changeCountry(){
        errorCountry.innerHTML = ""
        errorCountry.setAttribute("class","" )
        country.setAttribute("class", "single form-control")
    }

    return true;

}

   