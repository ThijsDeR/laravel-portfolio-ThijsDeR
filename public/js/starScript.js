const slider = document.getElementById("stars");
const output = document.getElementById("star_amount");
output.innerHTML = slider.value / 2; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value / 2;
}