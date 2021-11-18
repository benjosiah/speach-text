const texts = document.getElementById('texts');
const start = document.getElementById('play-button');
const stop = document.getElementById('pause-button');
const save = document.getElementById('save-button');

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


start.addEventListener("click", function(e){
    e.preventDefault
        recognition.start();
})

stop.addEventListener("click", function(e){
    e.preventDefault
    recognition.stop();
})

// save.addEventListener("click", function(){
//     recognition.stop();
//     const text = texts.innerText;
//     // const data = new FormData();
//     // data.append('text', text);
//     fetch('/diary', {
//         method: 'POST',
//         body: {
//             note: text,
//             title: 'note'
//         }
//     })
//     .then(res => res.json())
//     .then(data => {
//         console.log(data);
//     })
// })

// recognition.start();
console.log(recognition);
/*https://prod.liveshare.vsengsaas.visualstudio.com/join?6F51F588C636BF1993DD3AF5FDC98305C45C*/


