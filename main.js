
const on = document.getElementById('on');
const off = document.getElementById('off');

function toggle() {
    if (on.style.display === 'none') {
        on.style.display = 'block';
        off.style.display = 'none';
    }
    else {
        on.style.display = 'none';
        off.style.display = 'block';
    }
}

// Turn on the coffe machine

const element = document.getElementById('on');
// element.addEventListener("click", displayText)
element.addEventListener("click", function () {
    toggle();
    displayText();
});

function displayText() {
    text_on.style.display = "block";
    // element.classList.toggle('button_on_hide');
}



// Turn off the coffe machine

const element2 = document.getElementById('off');
// element2.addEventListener("click", displayText2);
element2.addEventListener("click", function () {
    toggle();
    displayText2();
});


function displayText2() {
    text_off.style.display = "block";
    // element2.classList.toggle('button_off_hide');
}

// Add sugar

var button = document.getElementById('my-button');
var button2 = document.getElementById('my-button2');
var display = document.getElementById('sugar');
var count = 0;
button.addEventListener('click', function() {
  count--
  display.innerHTML = count; 
});
button2.addEventListener('click', function() {
  count++
  display.innerHTML = count; 
});