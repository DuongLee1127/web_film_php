const hien = document.getElementById('hien')
const hien2 = document.getElementById('hien2')
const btn = document.getElementById('nut1')

hien.addEventListener("onclick", () =>{
    hien2.classList.add("open")
})

btn.addEventListener("onclick", () =>{
    console.log("1")
})
