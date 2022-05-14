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
