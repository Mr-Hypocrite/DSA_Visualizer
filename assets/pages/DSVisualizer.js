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
    Array-Functions
    pushFunc()
})

const search = () => {
    let element = document.getElementById("DSContainer").childNodes
    let srchData=document.querySelector(`.srchData`).value
    let flag=0
    console.log(srchData)
        for (let i = 0; i < dataSetSize; i++)
        {
           
            if(dataSet[i]==srchData){
            element[i+1].style.backgroundColor = "green";
            flag=1
            }
        }
    
    if(flag==0)
        alert("Not Found")
}


document.querySelector(`.search`).addEventListener(`click`, () => {
    console.log(dataSet)
    
    clearDataSet() 
    createArray()
    search()
})


const remove = () =>{
    flag=0
    let rmvData=document.querySelector(`.rmvData`).value
    for (let i = 0; i < dataSetSize; i++)
    {
        
        if(rmvData==dataSet[i])
        {
            clearDataSet()
            console.log("Found")
            index=i
            flag=1
        }
        
    }
    if(flag==0)
        alert("Element Not Found")
    if(flag==1)
    {
        for (let i = 0; i < dataSetSize; i++)
        {
            if(i==index){
                dataSetSize--
            dataSet.splice(i,1)}
            if(dataSet[i]!=undefined){
            let ele = document.createElement(`div`)
            ele.innerHTML = `<h3 class = 'dataInDS'>${ dataSet[i] }</h3> <h6 class = 'baseAdd'>${ 1000 + i }</h6> <h6 class = 'arrIndex'>${ i }</h6>`
            ele.classList.add(`arrayElement`)
            container.appendChild(ele)}
        }
    }
 
}


document.querySelector(`.remove`).addEventListener(`click`, () => {

    remove()

})

const insert = () =>{
    clearDataSet()
    let inData=document.querySelector(`.data`).value
    let inIndex=document.querySelector(`.index`).value
    for (let i = 0; i <dataSetSize; i++) {
        let ele = document.createElement(`div`)
        if(i==inIndex)
        {
            dataSetSize++
            dataSet.splice(inIndex,0,inData)
        }   

            ele.innerHTML = `<h3 class = 'dataInDS'>${dataSet[i] }</h3> <h6 class = 'baseAdd'>${ 1000 + i }</h6> <h6 class = 'arrIndex'>${ i }</h6>`
            ele.classList.add(`arrayElement`)
            container.appendChild(ele)
    }


}



document.querySelector(`.insert`).addEventListener(`click`, () => {
    insert()
})
    switch (ds) {
        case `Stack`: pushStackFunc()
            break;
        case `Queue`: pushQueueFunc()
            break;
    
        default:
            break;
    }
})
