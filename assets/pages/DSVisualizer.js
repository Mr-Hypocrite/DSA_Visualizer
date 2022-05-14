let dataSetSize = 10
let dataSet = []
let LLData = []
let ds = 'Array'
let container = document.querySelector(`#DSContainer`)

const createDataSet = () => {
    dataSet = []
    LLData = []
    for (let i = 0; i < dataSetSize; i++)
    {
        dataSet.push(Math.round(Math.random() * 100))
        LLData.push(Math.round(Math.random() * 10000))
    }
}

const createArray = () => {

    document.getElementById(`DSContainer`).style.top = `10rem`

    clearDataSet()
    let arrayContainer = document.createElement(`div`)
    arrayContainer.classList.add(`arrayContainer`)
    arrayContainer.classList.add(`arrayElements`)

    for (let i = 0; i < dataSetSize; i++) {
        let ele = document.createElement(`div`)
        ele.innerHTML = `<h3 class = 'dataInDS'>${ dataSet[i] }</h3> <h6 class = 'baseAdd'>${ 1000 + i }</h6> <h6 class = 'arrIndex'>${ i }</h6>`
        ele.classList.add(`arrayElement`)
        ele.classList.add(`arrayElements`)
        arrayContainer.appendChild(ele)
    }

    container.appendChild(arrayContainer)
}

const createStack = () => {
    
    clearDataSet()
    let stackContainer = document.createElement(`div`)
    document.getElementById(`DSContainer`).style.top = `5rem`
    stackContainer.classList.add(`stackContainer`)
    stackContainer.classList.add(`stackElements`)

    for (let i = 0; i < dataSetSize; i++) {

        let stackEle = document.createElement(`div`)
        stackEle.classList.add(`stackEle`)
        stackEle.classList.add(`stackElements`)

        stackEle.innerHTML = `<div class="sData">${ dataSet[i] }</div>`
        stackContainer.appendChild(stackEle)
    }

    container.appendChild(stackContainer)

}

const createLL = () => {

    clearDataSet()
    let arrayContainer = document.createElement(`div`)
    arrayContainer.classList.add(`arrayContainer`)
    arrayContainer.classList.add(`arrayElements`)

    for (let i = 0; i < dataSetSize; i++) {
        let eleContainer = document.createElement(`div`)
        let ele1 = document.createElement(`div`)
        let ele2 = document.createElement(`div`)
        let arrow = document.createElement(`div`)
        arrow.classList.add(`llArrow`)
        arrow.innerHTML = `---->`
        ele1.innerHTML = `<h3 class = 'dataInDS'>${ dataSet[i] }</h3> <h6 class = 'baseAdd'>${ LLData[i] }</h6>`
        ele2.innerHTML = `<h3 class = 'dataInDS'>${ LLData[i+1] }</h3> <h6 class = 'arrIndex'>NextAdd</h6>`
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
}

window.onload = () => {
    createDataSet()
    createArray()
}

document.getElementById(`ds`).addEventListener(`input`,(e) => {
    ds = e.target.value
    callCurrentDS()
})

const callCurrentDS = () => {
    switch (ds) {
        case `Array`: createArray()
            break;

        case `LinkedList`: createLL()
            break;

        case `Stack`: createStack()
            break;

        case `Queue`: createLL()
            break;
    
        case `Tree`: createTree()
            break;

        case `Graph`: createGraph()
            break;

        default:
            break;
    }
}

document.getElementById(`Size`).addEventListener(`input`, (e) => {
    dataSetSize = e.target.value
    createDataSet()
    callCurrentDS()
})

const popStackFunc = () => {
    document.querySelectorAll(`.stackEle`)[0].remove()
}

const pushStackFunc = () => {
    let newData = document.querySelector(`.newData`).value
    let max = document.querySelectorAll(`.arrayElement`).length
    let stackContainer = document.createElement(`div`)

    if (!newData) {
        console.log(newData)
        alert(`Cannot push empty data element`)
    } else {
        let oldData = document.querySelectorAll(`.stackEle`)
        clearDataSet()
        stackContainer.classList.add(`stackContainer`)
        stackContainer.classList.add(`stackElements`)

        let stackEle = document.createElement(`div`)
        stackEle.classList.add(`stackEle`)
        stackEle.classList.add(`stackElements`)

        stackEle.innerHTML = `<div class="sData">${ newData }</div>`
        stackContainer.appendChild(stackEle)
        oldData.forEach(data => stackContainer.appendChild(data))
    }
    container.appendChild(stackContainer)
}

document.getElementById(`op1`).addEventListener(`click`,() => {
    createDataSet()
    callCurrentDS()
})

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