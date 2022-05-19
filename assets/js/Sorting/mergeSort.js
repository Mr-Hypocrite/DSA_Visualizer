async function merge(ele, low, mid, high){
    const n1 = mid - low + 1;
    const n2 = high - mid;
    let left = new Array(n1);
    let right = new Array(n2);

    for(let i = 0; i < n1; i++){
        await sleep(delay);
        ele[low + i].style.background = 'blue';
        left[i] = ele[low + i].style.height;
    }
    for(let i = 0; i < n2; i++){
        await sleep(delay);
        ele[mid + 1 + i].style.background = 'red';
        right[i] = ele[mid + 1 + i].style.height;
    }
    await sleep(delay);
    let i = 0, j = 0, k = low;
    while(i < n1 && j < n2){        
        // To add color for which two r being compared for merging
        if(parseInt(left[i]) <= parseInt(right[j])){
            if((n1 + n2) === ele.length){
                ele[k].style.background = 'green';
            }
            else{
                ele[k].style.background = 'pink';
            }
          
            ele[k].style.height = left[i];
            i++;
            k++;
        }
        else{
            if((n1 + n2) === ele.length){
                ele[k].style.background = 'green';
            }
            else{
                ele[k].style.background = 'pink';
            } 
            ele[k].style.height = right[j];
            j++;
            k++;
        }
    }
    while(i < n1){
        if((n1 + n2) === ele.length){
            ele[k].style.background = 'green';
        }
        else{
            ele[k].style.background = 'pink';
        }
        ele[k].style.height = left[i];
        i++;
        k++;
    }
    while(j < n2){
        if((n1 + n2) === ele.length){
            ele[k].style.background = 'green';
        }
        else{
            ele[k].style.background = 'pink';
        }
        ele[k].style.height = right[j];
        j++;
        k++;
    }
}


async function mergeSort(ele, l, r){
    sortBtns.forEach(element => {
        element.disabled = true
    })

    if(l >= r){
        return;
    }
    const m = l + Math.floor((r - l) / 2);
    await mergeSort(ele, l, m);
    await mergeSort(ele, m + 1, r);
    await merge(ele, l, m, r);

    
    sortBtns.forEach(element => {
        element.disabled = false})
    
}

const mergeSortbtn = document.getElementById("merge");

mergeSortbtn.addEventListener('click', async function(){
    
     	
	document.getElementById('title').innerHTML="Merge Sort"

	let item= document.getElementById("item")
	item.innerHTML=''

	let yellow= document.createElement(`li`)
	yellow.style.background='yellow'
	yellow.innerHTML="Unsorted Elements"

    let blue= document.createElement(`li`)
	blue.style.background='blue'
	blue.innerHTML="Elements of the left Half"

    let red= document.createElement(`li`)
	red.style.background='red'
	red.innerHTML="Elements of the right Half"
	
	let pink= document.createElement(`li`)
	pink.style.background='pink'
	pink.innerHTML="Sorted Halves"
	
	let green= document.createElement(`li`)
	green.style.background='green'
	green.innerHTML="Sorted Elements"
	item.append(yellow,blue,red,pink,green)


    sortBtns.forEach(element => {
        element.disabled = true
    })
   
    let ele = document.querySelectorAll('.block');
    let l = 0;
    let r = parseInt(ele.length) - 1;
    await mergeSort(ele, l, r);

    sortBtns.forEach(element => {
        element.disabled = false
    })
    
});