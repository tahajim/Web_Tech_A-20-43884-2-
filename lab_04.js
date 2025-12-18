var str = "JavaScript";
 
var reversedStr = "";
 
// Loop through the string starting from the last character
for (var i = str.length - 1; i >= 0; i--) {
  reversedStr += str[i]; // Append each character to reversedStr
}

document.getElementById("output").textContent = "Reversed string is: " + reversedStr;