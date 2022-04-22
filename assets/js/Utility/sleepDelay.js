// Sleep/Delay Function
const sleep = (millisec) => { 
    return new Promise(resolve => { 
        setTimeout(() => { resolve(``) }, millisec);
    }) 
}

export default sleep