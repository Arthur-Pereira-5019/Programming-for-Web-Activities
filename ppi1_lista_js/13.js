let canvas = document.getElementById("meuCanvas")
let context = canvas.getContext("2d");

context.fillStyle = 'blue'
context.fillRect(50,50,100,50)

context.fillStyle = 'red'
context.arc(200, 150, 30, 0, 2*Math.PI)

context.fill()

context.fillStyle = 'black'
context.font = '48px tahoma'
context.fillText('Canvas!', 120, 150);