// Global Vars
let screenWidth = window.innerWidth
let container = document.getElementById(`array`)
let outerContainer = document.querySelector(`.center`)
let width, noOfBars, padding
let arraySize = document.querySelector(`#number`)
let sortBtns = Array.from(document.getElementsByClassName('sort-btn'))
let gArray = []

screenWidth > 1024 ? width = (screenWidth * 0.8) / 50 : width = (screenWidth * 0.6) / 50


//Scaling the array size according to the `Number of bars` slider
arraySize.addEventListener(`input`, () => {
	noOfBars = parseInt(arraySize.value)
	screenWidth > 1024 ? width = (screenWidth * 0.8) / arraySize.value : width = (screenWidth * 0.6) / arraySize.value
    removeBars()
	generatearray(parseInt(arraySize.value))
});

//Function to generate random arrays and display them
const generatearray = (noOfBars = 50) => {
	gArray = []

	for (let i = 0; i < noOfBars; i++)
	{
		let value = Math.ceil(Math.random() * 100)
		let array= document.createElement(`div`)
		array.classList.add(`block`);
		array.style.height = `${ value * 6 }px`
		array.style.width = `${ width }px`
		array.style.marginRight = `-${ width - 2 }px`
		if (width > 25) {
			array.innerHTML = `<h3>${ value }</h3>`
		}

		array.style.transform = `translate(${i * width}px)`
		padding = (screenWidth - (noOfBars * (width + 2))) / 2
		gArray.push(value)
		container.appendChild(array)
		document.querySelector(`.center`).style.padding = `0 ${ padding }px`
	}

	sortBtns.forEach(element => {
        element.disabled = false
    })
}

// Generating Array on Load
window.onload = () => {
	
	let remove= document.getElementById("remove")
	
	document.getElementById('title').innerHTML="LEGEND"
	
	let yellow= document.createElement(`li`)
	yellow.classList.add("yellow")
	yellow.innerHTML="&nbsp"

	let blue= document.createElement(`li`)
	blue.classList.add("blue")
	blue.innerHTML="&nbsp"

	let grey= document.createElement(`li`)
	grey.classList.add("grey")
	grey.innerHTML="&nbsp"

	let cyan= document.createElement(`li`)
	cyan.classList.add("cyan")
	cyan.innerHTML="&nbsp"

	let green= document.createElement(`li`)
	green.classList.add("green")
	green.innerHTML="&nbsp"
	
	remove.append(yellow,blue,cyan,grey,green)

	generatearray()
}

//Function to remove the bars from the screen
const removeBars = () => {
    document.querySelectorAll(`.block`).forEach((node) =>
	{
        node.remove()
    });
}

//New Array Button Function to Generate New Array
document.getElementById(`new`).addEventListener(`click`, () => {
    removeBars()
   	generatearray(arraySize.value)
})

//Function to swap bars
const swap = (el1, el2) => {
    
	[el1.style.height, el2.style.height] = [el2.style.height, el1.style.height]
	let temp = el1.innerHTML
	el1.innerHTML  = el2.innerHTML
	el2.innerHTML = temp
    
}

// Sleep Function
const sleep = (millisec) => { 
    return new Promise(resolve => { 
        setTimeout(() => { resolve(``) }, millisec);
    }) 
}

// Event listener to update delay time
let delay = 1000 - 20
let delayTime = document.querySelector(`#speed`)
delayTime.addEventListener(`input`, () => {
    delay = parseInt(1000 - delayTime.value)
})


const disablebtn = () => {
	document.getElementById('bubble').disabled = true
}


document.getElementById("menu").addEventListener("click",() => {
	document.getElementById("sidebar").classList.toggle("active")
	document.getElementById("menu").classList.toggle("openmenu")

})
const info = () => {
    let list= document.getElementById("list")
    let remove= document.getElementById("remove")
    remove.remove()
	
    let yellow= document.createElement(`li`)
	yellow.classList.add("yellow")
	yellow.innerHTML="Unsorted Elements"

    let blue= document.createElement(`li`)
    blue.classList.add("blue")
	blue.innerHTML="Selected Elements"

    let grey= document.createElement(`li`)
    grey.classList.add("grey")
	grey.innerHTML="Compared Elements"

    let cyan= document.createElement(`li`)
    cyan.classList.add("cyan")
	cyan.innerHTML=" Swapped Elements"

    let green= document.createElement(`li`)
    green.classList.add("green")
	green.innerHTML="Sorted Elements"
	
    list.append(yellow,blue,grey,cyan,green)

} 

document.getElementById(`bubble`).addEventListener(`click`, () => {
	document.getElementById('title').innerHTML="Bubble Sort"
	 info() 
	})

document.getElementById(`select`).addEventListener(`click`, () => {
	document.getElementById('title').innerHTML="Selection Sort"
	 info() 
	})

document.getElementById(`insert`).addEventListener(`click`, () => {
		document.getElementById('title').innerHTML="Insertion Sort"
		 info() 
		})
document.getElementById(`quick`).addEventListener(`click`, () => {
			document.getElementById('title').innerHTML="Quick Sort"
			let list= document.getElementById("list")
			let remove= document.getElementById("remove")
			remove.remove()
			
			let yellow= document.createElement(`li`)
			yellow.classList.add("yellow")
			yellow.innerHTML="Unsorted Elements"
		
			let red= document.createElement(`li`)
			red.classList.add("red")
			red.innerHTML="Pivot Element"

			let orange= document.createElement(`li`)
			orange.classList.add("orange")
			orange.innerHTML="Lesser than Pivot"
		
			let pink= document.createElement(`li`)
			pink.classList.add("grey")
			pink.innerHTML="Greater than Pivot"
		
			let cyan= document.createElement(`li`)
			cyan.classList.add("cyan")
			cyan.innerHTML="Current Element"
		
			let green= document.createElement(`li`)
			green.classList.add("green")
			green.innerHTML="Sorted Elements"
			
			list.append(yellow,red,orange,pink,cyan,green)
		
			})
		document.getElementById(`insert`).addEventListener(`click`, () => {
				document.getElementById('title').innerHTML="Insertion Sort"
				 info() 
				})

		document.getElementById(`merge`).addEventListener(`click`, () => {
			
			document.getElementById('title').innerHTML="Merge Sort"
			
			let list= document.getElementById("list")
			let remove= document.getElementById("remove")
			remove.remove()
			
			let yellow= document.createElement(`li`)
			yellow.classList.add("yellow")
			yellow.innerHTML="Unsorted Elements"
		
			let red= document.createElement(`li`)
			red.classList.add("red")
			red.innerHTML="Pivot Element"

			let orange= document.createElement(`li`)
			orange.classList.add("orange")
			orange.innerHTML="Lesser than Pivot"
		
			let pink= document.createElement(`li`)
			pink.classList.add("grey")
			pink.innerHTML="Greater than Pivot"
		
			let cyan= document.createElement(`li`)
			cyan.classList.add("cyan")
			cyan.innerHTML="Current Element"
		
			let green= document.createElement(`li`)
			green.classList.add("green")
			green.innerHTML="Sorted Elements"
			
			list.append(yellow,red,orange,pink,cyan,green)
		
			})
