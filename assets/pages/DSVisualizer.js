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

    clearDataSet()

    for (let i = 0; i < dataSetSize; i++) {
        let ele = document.createElement(`div`)
        ele.innerHTML = `<h3 class = 'dataInDS'>${ dataSet[i] }</h3> <h6 class = 'baseAdd'>${ 1000 + i }</h6> <h6 class = 'arrIndex'>${ i }</h6>`
        ele.classList.add(`arrayElement`)
        container.appendChild(ele)
    }

    container.classList.add(`arrayContainer`)
}

const createLL = () => {

    clearDataSet()

    for (let i = 0; i < dataSetSize; i++) {
        let eleContainer = document.createElement(`div`)
        let ele1 = document.createElement(`div`)
        let ele2 = document.createElement(`div`)
        ele1.innerHTML = `<h3 class = 'dataInDS'>${ dataSet[i] }</h3> <h6 class = 'baseAdd'>${ LLData[i] }</h6>`
        ele2.innerHTML = `<h3 class = 'dataInDS'>${ LLData[i+1] }</h3> <h6 class = 'arrIndex'>NextAdd</h6>`
        ele1.classList.add(`arrayElement`)
        ele2.classList.add(`arrayElement`)
        eleContainer.classList.add(`LLNode`)
        eleContainer.appendChild(ele1)
        eleContainer.appendChild(ele2)
        container.appendChild(eleContainer)
    }

}

const clearDataSet = () => {
    document.querySelectorAll(`.arrayElement`).forEach(node => {
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

const popFunc = () => {
    document.querySelectorAll(`.arrayElement`)[document.querySelectorAll(`.arrayElement`).length - 1].remove()
}

const pushFunc = () => {
    let newData = document.querySelector(`.newData`).value
    let max = document.querySelectorAll(`.arrayElement`).length

    if (!newData) {
        console.log(newData)
        alert(`Cannot push empty data element`)
    } else {
        if (max < 25)
        {   
            let ele = document.createElement(`div`)
            ele.innerHTML = `<h3 class = 'dataInDS'>${ newData }</h3> <h6 class = 'baseAdd'>${ 1000 + max }<h6> <h6 class = 'arrIndex'>${ max }<h6>`
            ele.classList.add(`arrayElement`)
            let oldData = document.querySelectorAll(`.arrayElement`)
            clearDataSet()
            oldData.forEach(node => {
                container.appendChild(node)
            })
            container.appendChild(ele)
        } else {
            alert(`Max 25 elements allowed, please clear some elements to add`)
        }
    }    
}

document.getElementById(`op1`).addEventListener(`click`,() => {
    createDataSet()
    callCurrentDS()
})

document.querySelector(`.popFunc`).addEventListener(`click`, () => {
    popFunc()
})

document.querySelector(`.pushFunc`).addEventListener(`click`, () => {
    pushFunc()
})