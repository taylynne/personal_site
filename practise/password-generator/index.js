const characters = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9","~","`","!","@","#","$","%","^","&","*","(",")","_","-","+","=","{","[","}","]",",","|",":",";","<",">",".","?",
"/"];

let passwordElement = document.getElementById("password-el")
let passwordElement2 = document.getElementById("password-el2")

function generatePassword() {
    let string = ""
    for (let i = 0; i < 15; i ++) {
        string += characters[randomNumber()]
    }
    return string
}

function randomNumber() {
    return Math.floor(Math.random() * 91)
}

function genPasswords(){
    passwordElement.innerText = generatePassword()
    passwordElement2.innerText = generatePassword()
}

// Add event listener to button
document.getElementById("generate-btn").addEventListener("click", genPasswords)
