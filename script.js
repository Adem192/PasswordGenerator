var buttonPassword = document.getElementById("generatePassword");
var outputPassword = document.getElementById("generatedPassword");

buttonPassword.addEventListener("click", setPassword);

function setPassword() {
  outputPassword.value = generateRandomString();
}

function generateRandomString(){
  const dictionary = [
    "a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9","0","!","£","$","%","^","&","*","(",")","-","_","=","+","#","~","?"
  ];
  const password = [];
  for (let i = 0; i <= 16; i++) {
    const randomElement = dictionary[Math.floor(Math.random() * dictionary.length)];
    password.push(randomElement);
  }
  let randomString = password.join("");
  return randomString;
}
