function ValidateEmail(name, email, pass)
{
  var nameformat = /^[a-zA-Z]+( [a-zA-Z]+)+/;
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

  if(name.value.match(nameformat)){
    //alert('name');

    if(email.value.match(mailformat)){
      
      //alert("Valid email address!");

      if(pass.value.match(passformat)){

        alert('You have now signed up.');
        return true;
        
      }
      else{

        alert('Password must not be blank \nPassword must contain atleast 8 characters \nPassword must contain alteast 1 uppercase character \nPassword must contain alteast 1 lowercase character \nPassword must contain alteast 1 numeric characters');
        return false;

      }
    }
    else{

      alert("You have entered an invalid email address!");

        if(pass.value.match(passformat)){
          return false;
        }
        else{
          alert('Password must not be blank \nPassword must contain atleast 8 characters \nPassword must contain alteast 1 uppercase character \nPassword must contain alteast 1 lowercase character \nPassword must contain alteast 1 numeric characters');
          return false;
          
        }
    }
  }
  else{

    alert('Names should not be blank \nNames should have no numeric characters \nNames should only contain letters and spaces.')

    if(email.value.match(mailformat)){
      
      //alert("Valid email address!");

      if(pass.value.match(passformat)){

        return false;
        
      }
      else{

        alert('Password must not be blank \nPassword must contain atleast 8 characters \nPassword must contain alteast 1 uppercase character \nPassword must contain alteast 1 lowercase character \nPassword must contain alteast 1 numeric characters');
        return false;

      }
    }
    else{

      alert("You have entered an invalid email address!");

        if(pass.value.match(passformat)){
          return false;
        }
        else{
          alert('Password must not be blank \nPassword must contain atleast 8 characters \nPassword must contain alteast 1 uppercase character \nPassword must contain alteast 1 lowercase character \nPassword must contain alteast 1 numeric characters');
          return false;
          
        }
    }

  }


  
}
