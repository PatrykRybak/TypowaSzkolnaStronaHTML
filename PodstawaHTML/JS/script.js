console.log("Script Loaded!");

document.getElementById("ScreenWindow").addEventListener("click", closeScreen);
document.getElementById("zad1").onclick = function(){document.getElementById("scr").src = "IMG/1.png"; document.getElementById("ScreenWindow").style.display="flex";};
document.getElementById("zad2").onclick = function(){document.getElementById("scr").src = "IMG/2.png"; document.getElementById("ScreenWindow").style.display="flex";};
document.getElementById("zad3").onclick = function(){document.getElementById("scr").src = "IMG/3.png"; document.getElementById("ScreenWindow").style.display="flex";};
closeScreen();

function closeScreen(){
  document.getElementById("ScreenWindow").style.display="none";
}
