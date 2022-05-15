let dataSetSize = 10
let dataSet = []
let LLData = []
let ds = 'Array'
let container = document.querySelector(`#DSContainer`)
let allBtns = document.querySelectorAll(`.btn`)

// Sleep Function
const sleep = (millisec) => { 
    return new Promise(resolve => { 
        setTimeout(() => { resolve(``) }, millisec);
    }) 
}

const createDataSet = () => {
    dataSet = []
    LLData = []
    for (let i = 0; i < dataSetSize; i++)
    {
        dataSet.push(Math.round(Math.random() * 100))
        LLData.push(Math.round(Math.random() * 10000))
    }
}

const resetInfo = () => {
    document.querySelector(`.removeInfo`).innerText = ``
    document.querySelector(`.insertionInfo`).innerText = ``
}

// Data Structure Create Functions
const createArray = (data = dataSet) => {

    document.getElementById(`DSContainer`).style.top = `10rem`

    clearDataSet()
    let arrayContainer = document.createElement(`div`)
    arrayContainer.classList.add(`arrayContainer`)
    arrayContainer.classList.add(`arrayElements`)

    for (let i = 0; i < data.length; i++) {
        let ele = document.createElement(`div`)
        ele.innerHTML = `<h3 class = 'dataInDS'>${ data[i] }</h3> <h6 class = 'baseAdd'>${ 1000 + i }</h6> <h6 class = 'arrIndex'>${ i }</h6>`
        ele.classList.add(`arrayElement`)
        ele.classList.add(`arrayElements`)
        arrayContainer.appendChild(ele)
    }

    container.appendChild(arrayContainer)
}

const createLL = (data = dataSet, Ldata = LLData) => {

    clearDataSet()
    let arrayContainer = document.createElement(`div`)
    arrayContainer.classList.add(`arrayContainer`)
    arrayContainer.classList.add(`arrayElements`)

    for (let i = 0; i < data.length; i++) {
        let eleContainer = document.createElement(`div`)
        let ele1 = document.createElement(`div`)
        let ele2 = document.createElement(`div`)
        let arrow = document.createElement(`div`)
        arrow.classList.add(`llArrow`)
        arrow.innerHTML = `---->`
        ele1.innerHTML = `<h3 class = 'dataInDS nodeData'>${ data[i] }</h3> <h6 class = 'baseAdd'>${ Ldata[i] }</h6> <h6 class = 'arrIndex'>${i}</h6>`
        ele2.innerHTML = `<h3 class = 'dataInDS'>${ Ldata[i+1] }</h3> <h6 class = 'arrIndex'>NextAdr</h6>`
        ele1.classList.add(`arrayElement`)
        ele2.classList.add(`arrayElement`)
        eleContainer.classList.add(`LLNode`)
        eleContainer.appendChild(ele1)
        eleContainer.appendChild(ele2)
        eleContainer.appendChild(arrow)
        arrayContainer.appendChild(eleContainer)
    }

    container.appendChild(arrayContainer)

}

const createStack = (data = dataSet) => {
    
    clearDataSet()
    let stackContainer = document.createElement(`div`)
    document.getElementById(`DSContainer`).style.top = `5rem`
    stackContainer.classList.add(`stackContainer`)
    stackContainer.classList.add(`stackElements`)
    for (let i = 0; i < data.length; i++) {

        let stackEle = document.createElement(`div`)
        stackEle.classList.add(`stackEle`)
        stackEle.classList.add(`stackElements`)

        stackEle.innerHTML = `<span>${ data[i] }</span>`
        stackContainer.appendChild(stackEle)
    }
    container.appendChild(stackContainer)
}


const createQueue = (data = dataSet) => {

    clearDataSet()
    let queueContainer = document.createElement(`div`)
    document.getElementById(`DSContainer`).style.top = `2rem`
    queueContainer.classList.add(`queueContainer`)
    queueContainer.classList.add(`queueElements`)

    for (let i = 0; i < data.length; i++) {

        let queueEle = document.createElement(`div`)
        queueEle.classList.add(`queueEle`)
        queueEle.classList.add(`queueElements`)

        queueEle.innerHTML = `<span>${ data[i] }</span>`
        queueContainer.appendChild(queueEle)
    }

    container.appendChild(queueContainer)

}

// Clearing DataSet as well as Canvas Function
const clearDataSet = () => {
    document.querySelectorAll(`.arrayElements`).forEach(node => {
        node.remove()
    })

    document.querySelectorAll(`.llArrow`).forEach(node => {
        node.remove()
    })

    document.querySelectorAll(`.stackElements`).forEach(node => {
        node.remove()
    })
    
    document.querySelectorAll(`.queueElements`).forEach(node => {
        node.remove()
    })

    document.querySelector(`.removeInfo`).innerText = ``
}
// Display default DS on load
window.onload = () => {
    createDataSet()
    createArray()
    document.querySelector(`.currentDs`).innerText = `Selected Data Structure: Array`
}

document.getElementById(`ds`).addEventListener(`input`,(e) => {
    ds = e.target.value
    callCurrentDS()
})

// Show Stack and Queue Functions
const showSQOperations = () => {
    document.querySelector(`.stackQOperations`).style.display = `flex`
    document.querySelector(`.arrOperations`).style.display = `none`

    if (ds === `Stack`) {
        document.querySelector(`.pushFunc`).innerText = `Push`
        document.querySelector(`.popFunc`).innerText = `Pop`
    } else {
        document.querySelector(`.pushFunc`).innerText = `Enqueue`
        document.querySelector(`.popFunc`).innerText = `Dequeue`
    }
}

// Show Array Linked List Operations
const showALOperations = () => {
    document.querySelector(`.stackQOperations`).style.display = `none`
    document.querySelector(`.arrOperations`).style.display = `flex`
}

// Change DS based on Input
const callCurrentDS = () => {
    switch (ds) {
        case `Array`: createArray()
                        showALOperations()
            break;

        case `LinkedList`: createLL()
                            showALOperations()
            break;

        case `Stack`: createStack()
                        showSQOperations()                    
            break;

        case `Queue`: createQueue()
                        showSQOperations() 
            break;
    
        case `Tree`: createTree()
            break;

        case `Graph`: createGraph()
            break;

        default:
            break;
    }
    document.querySelector(`.currentDs`).innerText = `Selected Data Structure: ${ds}`
    resetInfo()
}

document.getElementById(`Size`).addEventListener(`input`, (e) => {
    dataSetSize = e.target.value
    createDataSet()
    callCurrentDS()
})

// Stack Operations
const popStackFunc = () => {
    let popped = document.querySelectorAll(`.stackEle`)[0].innerText
    document.querySelectorAll(`.stackEle`)[0].remove()
    document.querySelector(`.insertionInfo`).innerText = `Top = ${document.querySelectorAll(`.stackEle`).length - 1}`
    document.querySelector(`.removeInfo`).innerText = `Popped Element: ${popped}`
}

const pushStackFunc = () => {
    let data = document.querySelector(`.newData`).value
    if (!data) {
        alert(`Cannot push empty data element`)
    } else {
        let newData = [data]
        Array.from(document.querySelectorAll(`.stackEle`)).map(item => newData.push(item.innerText))
        createStack(newData)
        document.querySelector(`.removeInfo`).innerText = `Pushed Element: ${data}`
        document.querySelector(`.insertionInfo`).innerText = `Top = ${document.querySelectorAll(`.stackEle`).length - 1}`
    }
}

// Queue Operations
const popQueueFunc = () => {
    let dqEle = document.querySelectorAll(`.queueEle`)[document.querySelectorAll(`.queueEle`).length - 1].innerText
    document.querySelectorAll(`.queueEle`)[document.querySelectorAll(`.queueEle`).length - 1].remove()
    document.querySelector(`.insertionInfo`).innerText = `Total Elements in Queue = ${document.querySelectorAll(`.queueEle`).length}`
    document.querySelector(`.removeInfo`).innerText = `Dequeued Element: ${dqEle}`
}

const pushQueueFunc = () => {
    let data = document.querySelector(`.newData`).value
    if (!data) {
        alert(`Cannot push empty data element`)
    } else {
        let newData = [data]
        let eqEle = data
        Array.from(document.querySelectorAll(`.queueEle`)).map(item => newData.push(item.innerText))
        createQueue(newData)
        document.querySelector(`.insertionInfo`).innerText = `Total Elements in Queue = ${document.querySelectorAll(`.queueEle`).length}`
        document.querySelector(`.removeInfo`).innerText = `Enqueued Element: ${eqEle}`
    }
}

// Data Structure Selector
document.getElementById(`op1`).addEventListener(`click`,() => {
    createDataSet()
    callCurrentDS()
})

// Push and Pop Button
document.querySelector(`.popFunc`).addEventListener(`click`, () => {
    switch (ds) {
        case `Stack`: popStackFunc()
            break;
        case `Queue`: popQueueFunc()
            break;
    
        default:
            break;
    }
})

document.querySelector(`.pushFunc`).addEventListener(`click`, () => {
    switch (ds) {
        case `Stack`: pushStackFunc()
            break;
        case `Queue`: pushQueueFunc()
            break;
    
        default:
            break;
    }
})

// Search Operation
const search = async () => {
    let data = []
    allBtns.forEach(item => item.disabled = true)
    Array.from(document.querySelectorAll(`.dataInDS`)).map(item => data.push(item.innerHTML))
    let srchData = document.querySelector(`.srchData`).value
    let flag = 0
    for (let i = 0; i < data.length; i++) {
        document.querySelectorAll(`.arrayElement`)[i].style.backgroundColor = `green`
        await sleep(500)
        document.querySelectorAll(`.arrayElement`)[i].style.backgroundColor = `transparent`
        if (srchData === data[i]) {
            alert(`Element found at index ${i}`)
            flag = 1
            break;
        }
        document.querySelectorAll(`.arrayElement`)[i].style.backgroundColor = `red`
        await sleep(500)
        document.querySelectorAll(`.arrayElement`)[i].style.backgroundColor = `transparent`
    }
    
    if(flag === 0) {
        alert("Not Found")
    }
    allBtns.forEach(item => item.disabled = false)
}

const LLsearch = async () => {
    let data = []
    Array.from(document.querySelectorAll(`.nodeData`)).map(item => data.push(item.innerHTML))
    allBtns.forEach(item => item.disabled = true)
    let srchData = document.querySelector(`.srchData`).value
    let flag = 0
    for (let i = 0; i < data.length; i++) {
        Array.from(document.querySelectorAll(`.arrayElement`)).filter((item, index) => {
            if (index % 2 == 0) {
                return item
            }
        })[i].style.backgroundColor = `green`

        await sleep(500)

        Array.from(document.querySelectorAll(`.arrayElement`)).filter((item, index) => {
            if (index % 2 == 0) {
                return item
            }
        })[i].style.backgroundColor = `transparent`

        if (srchData === data[i]) {
            alert(`Element found at index ${i}`)
            flag = 1
            break;
        }

        Array.from(document.querySelectorAll(`.arrayElement`)).filter((item, index) => {
            if (index % 2 == 0) {
                return item
            }
        })[i].style.backgroundColor = `red`

        await sleep(500)

        Array.from(document.querySelectorAll(`.arrayElement`)).filter((item, index) => {
            if (index % 2 == 0) {
                return item
            }
        })[i].style.backgroundColor = `transparent`
    }
    
    if(flag === 0) {
        alert("Not Found")
    }
    allBtns.forEach(item => item.disabled = false)
}

document.querySelector(`.search`).addEventListener(`click`, () => {
    if (ds === `Array`) {
        search()
    } else {
        LLsearch()
    }
})

// Remove Operation
const remove = () => {
    let rmvData = Number(document.querySelector(`.rmvData`).value)
    let oldData = document.querySelectorAll(`.dataInDS`)
    let first = [], second = []

    if (isNaN(rmvData)) {
        alert(`Value of Index is not a Digit`)
    } else if (rmvData >= oldData.length || rmvData < 0) {
        alert(`Index out of Bound`)
    } else {
        Array.from(oldData).slice(0, rmvData).forEach(item => first.push(item.innerHTML))
        Array.from(oldData).slice(rmvData + 1).forEach(item => second.push(item.innerHTML))
        let newData = [...first, ...second]
        createArray(newData)
        document.querySelector(`.removeInfo`).innerText = `Element: ${Array.from(oldData)[rmvData].innerText} removed from Position: ${rmvData}, current Element: ${newData[rmvData]}`
    }
}

const LLremove = () => {
    let rmvData = Number(document.querySelector(`.rmvData`).value)
    let oldData = document.querySelectorAll(`.nodeData`)
    let oldLData = document.querySelectorAll(`.baseAdd`)
    let first = [], second = []
    let newLData = [], newData = []

    if (isNaN(rmvData)) {
        alert(`Value of Index is not a Digit`)
    } else if (rmvData > oldData.length - 1 || rmvData < 0) {
        alert(`Index out of Bound`)
    } else {
        Array.from(oldData).slice(0, rmvData).forEach(item => first.push(item.innerHTML))
        Array.from(oldData).slice(rmvData + 1).forEach(item => second.push(item.innerHTML))
        Array.from(oldLData).map(item => newLData.push(item.innerHTML))
        newData = [...first, ...second]
        newLData.pop()
        createLL(newData, newLData)
        document.querySelector(`.removeInfo`).innerText = `Element: ${Array.from(oldData)[rmvData].innerText} removed from Address: ${Array.from(oldLData)[rmvData].innerText}, Current Element: ${newData[rmvData]}`
    }
}

document.querySelector(`.remove`).addEventListener(`click`, () => {
    if (ds === `Array`) {
        remove()
    } else {
        LLremove()
    }
})

// Insertion Operation
const insert = () =>{
    let inData = document.querySelector(`.data`).value
    let inIndex = Number(document.querySelector(`.index`).value)
    let oldData = document.querySelectorAll(`.dataInDS`)
    let first = [], second = []
    if (isNaN(inIndex) || inIndex < 0) {
        alert(`Value of Index is not a positive Digit`)
    } else if (inData === "") {
        alert(`Input Data is Null`)
    } else if (inIndex > oldData.length) {
        alert(`Index out of Bound`)
    } else {
        Array.from(oldData).slice(0, inIndex).forEach(item => first.push(item.innerHTML))
        Array.from(oldData).slice(inIndex).forEach(item => second.push(item.innerHTML))
        let newData = [...first, inData, ...second]
        createArray(newData)
        document.querySelector(`.insertionInfo`).innerText = `Element: ${inData} inserted at Index: ${inIndex}`
    }
    
}

const LLinsert = () => {
    let inData = document.querySelector(`.data`).value
    let inIndex = Number(document.querySelector(`.index`).value)
    let oldData = document.querySelectorAll(`.nodeData`)
    let oldLData = document.querySelectorAll(`.baseAdd`)
    let newLData = [], newData = []
    let first = [], second = []
    if (isNaN(inIndex) || inIndex < 0) {
        alert(`Value of Index is not a positive Digit`)
    } else if (inData === "") {
        alert(`Input Data is Null`)
    } else if (inIndex > (oldData.length + 1) || inIndex < 0) {
        alert(`Index out of Bound`)
    } else if (inIndex === oldData.length + 1) {
        Array.from(oldData).map(item => newData.push(item.innerHTML))
        Array.from(oldLData).forEach(item => newLData.push(item.innerHTML))
        newData = [...newData, inData]
        newLData.push(Math.round(Math.random() * 10000))
        document.querySelector(`.insertionInfo`).innerText = `Element: ${inData} inserted at Node number: ${inIndex}`

    } else if (inIndex === 0) {
        Array.from(oldData).map(item => newData.push(item.innerHTML))
        Array.from(oldLData).forEach(item => newLData.push(item.innerHTML))
        newLData.push(Math.round(Math.random() * 10000))
        newData = [inData, ...newData]
        document.querySelector(`.insertionInfo`).innerText = `Element: ${inData} inserted at Node number: ${inIndex}`

    } else {
        Array.from(oldData).slice(0, inIndex).forEach(item => first.push(item.innerHTML))
        Array.from(oldData).slice(inIndex).forEach(item => second.push(item.innerHTML))
        Array.from(oldLData).forEach(item => newLData.push(item.innerHTML))
        newData = [...first, inData, ...second]
        newLData.push(Math.round(Math.random() * 10000))
        document.querySelector(`.insertionInfo`).innerText = `Element: ${inData} inserted at Node number: ${inIndex}`

    }

    createLL(newData, newLData)
}

document.querySelector(`.insert`).addEventListener(`click`, () => {
    if (ds === `Array`) {
        insert()
    } else {
        LLinsert()
    }
})