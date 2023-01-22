var vargu = [
  "CSS/Images/UBT.jpg",
  "CSS/Images/BIBLOTEKA-1.jpg",
  "CSS/Images/IMG_1908-Large.jpg",
];
var index = 0;
var koha = 3500;

function krijoSlider() {
  document.getElementById("imazhi").src = vargu[index];
  index++;
  if (index == vargu.length) {
    index = 0;
  }

  setTimeout("krijoSlider()", koha);
}
krijoSlider();
