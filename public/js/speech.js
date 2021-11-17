const texts = document.getElementById('texts');
const button = document.getElementById('play-button');
let start = false;
window.speechRecognition = window.speechRecognition || window.webkitSpeechRecognition;



const recognition = new window.speechRecognition();
recognition.interimResults = true;
recognition.continuous = true;

// let p = document.createElement('p');

recognition.addEventListener('result', (e) =>{
    const text = Array.from(e.results)
    .map(result => result[0])
    .map(result => result.transcript)
    .join('');

    texts.innerText = text;
    // texts.appendChild(p);

    // if(e.results[0].isFinal){
    //     if(text.includes('hello')){
    //         p = document.createElement('p');
    //         p.classList.add('replay');
    //         p.innerText = 'Hi';
    //         texts.appendChild('p');
    //     }
    //     p = document.createElement('p');
    // }
    console.log(text);
})

recognition.addEventListener('end', ()=>{
    // recognition.start();
})

button.addEventListener("click", function(){
    if(start == false){
        start = true;
        recognition.start();
        button.innerText = "Stop";
    }else{
        button.innerText = "Start";
        start = false;
        recognition.stop();
    }
})

// recognition.start();
console.log(recognition);
/*https://prod.liveshare.vsengsaas.visualstudio.com/join?6F51F588C636BF1993DD3AF5FDC98305C45C*/


