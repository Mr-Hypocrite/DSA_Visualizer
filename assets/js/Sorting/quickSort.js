let quickBtn = document.getElementById(`quick`)

const partition = (arr, low, high) => {
    let pivot = arr[low].style.height

    let i = low, j = high;

    try {
        while (i < j && i < arr.length -1) {
            do {
                i++
                console.log(i)
            } while (arr[i].style.height <= pivot)
            do {
                j--
            } while (arr[j].style.height > pivot)
            if (i < j) {
                swap(arr[i], arr[j])
            }
    
        }
        swap(arr[low], arr[j])
        return j;
    } catch (e) {
        console.log(e)
    }
    
}

const quickSort = (arr, low, high) => {
    if (low < high) {
        let pi = partition(arr, low, high)
        quickSort(arr, low, pi)
        quickSort(arr, pi + 1, high)
    }
}

const quick = () => {

    let ele = document.querySelectorAll(`.block`)

    sortBtns.forEach(element => {
        element.disabled = true
    })

    quickBtn.classList.add(`active-btn`)

    if (ele !== null) {
        quickSort(ele, 0, ele.length - 1)
    }

    sortBtns.forEach(element => {
        element.disabled = false
    })
    
    quickBtn.classList.remove(`active-btn`)

}

quickBtn.addEventListener('click', () => {
    quick()
})