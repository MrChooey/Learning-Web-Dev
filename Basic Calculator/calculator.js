function Clear() {
	document.getElementById("input").innerHTML = "0"
}

function Back() {
	let input = document.getElementById("input")
	input.innerHTML = input.innerHTML.slice(0, -1)
	if (input.innerHTML == "") {
		input.innerHTML = "0"
	}
}

function Solve(value) {
	let input = document.getElementById("input")
	if (input.innerHTML == "0") {
		input.innerHTML = value
	} else {
		input.innerHTML += value
	}
}

function Result() {
	let input = document.getElementById("input")
	input.innerHTML = eval(input.innerHTML)
}
