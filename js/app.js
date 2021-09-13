let rightAnswer;
let currentQuestion = 0;
let correctAnswers = 0;
let wrongAnswers = 0;
const cuestionary = [
    {
        "question" : "Pregunta 1",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 2",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 3",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 4",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 5",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 6",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 7",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 8",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 9",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 10",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 11",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 12",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 13",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 14",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 15",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 16",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 17",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 18",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 19",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 20",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 21",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 22",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 23",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 24",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 25",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 26",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 27",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 28",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 29",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 30",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 31",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 32",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 33",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 34",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 35",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 36",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 37",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 38",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 39",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    },
    {
        "question" : "Pregunta 40",
        "answers"  : ["opcion1","opcion2","opcion3","opcion4"]
    }
    
   
];

const printHtmlQuestion = (i) =>{
    currentQuestion++;
    const qst = cuestionary[i];
    let respuesta = qst.answers;
    rightAnswer = respuesta[0];

    const htmlAnswersArray = respuesta.map( currentA => `<p><button onClick="evaluateAnswer('${currentA}',this)">X</button> <span>${currentA}</span></p>`);
    const htmlAnswers = htmlAnswersArray.join(' ')

    let printHtmlQuestion = `<p>${qst.question}</p><div>${htmlAnswers}</div>`;
    document.querySelector('.class-cuestion').innerHTML = printHtmlQuestion;
}

    const evaluateAnswer = (answer , obj) =>{
        const parentP = obj.parentNode;
        if(answer == rightAnswer){
            console.log("1");
            correctAnswers++;
            printHtmlQuestion(currentQuestion);
            document.querySelector('.right').innerHTML = correctAnswers;
            console.log(correctAnswers);
        }else{
            console.log("2");
            wrongAnswers++;
            printHtmlQuestion(currentQuestion);
            document.querySelector('.wrong').innerHTML = wrongAnswers;
            console.log(wrongAnswers);
        }
    }
    printHtmlQuestion(currentQuestion);
