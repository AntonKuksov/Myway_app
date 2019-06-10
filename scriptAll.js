

function hideWelcom(){
    
    document.getElementById("foo").onclick = function () {    
        animateCSS('.animateMe', 'fadeOutUp', function() {
            // Do something after animation

            var div = document.createElement('div');
            div.setAttribute('class', 'someClass');
            div.innerHTML = document.getElementById('blockOfSignUpCard').innerHTML;
            document.getElementById('SignUpCard').appendChild(div);

            document.getElementById("look2").style.display = "none"; 

          })
        }

    document.getElementById("foo2").onclick = function () {    
        animateCSS('.animateMe', 'fadeOutUp', function() {
            // Do something after animation

            var div = document.createElement('div');
            div.setAttribute('class', 'someClass');
            div.innerHTML = document.getElementById('blockOfLogInCard').innerHTML;
            document.getElementById('LogInCard').appendChild(div);

            document.getElementById("look2").style.display = "none"; 
            
          })  
        }

    };

function animateCSS(element, animationName, callback) {
    var node = document.querySelector(element)
    node.classList.add('animated', animationName)

    function handleAnimationEnd() {
        node.classList.remove('animated', animationName)
        node.removeEventListener('animationend', handleAnimationEnd)

        if (typeof callback === 'function') callback()
    }

    node.addEventListener('animationend', handleAnimationEnd)
}

window.onload = function () {
    hideWelcom();    
}