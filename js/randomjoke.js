let jokes = [
'images/joke0.jpg',
'images/joke1.jpg',
'images/joke2.jpg',
'images/joke3.jpg'
]

let image_template = '<img src="paste_image" alt="joke" style="width: 350px;">';

function getRandomJoke() {
  let randomNumber = Math.floor(Math.random() * jokes.length);
  document.getElementById("random-joke-place").setAttribute("src", jokes[randomNumber]);
}