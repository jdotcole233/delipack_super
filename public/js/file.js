

let fileInput = document.querySelector('#inputfilename');


function changeLabelContext(e){
    let labelName = document.querySelector('#labelcontext');
    labelName.innerHTML = e.target.files[0].name;
}

// fileInput.onchange = function(e){
    
// }

fileInput.addEventListener('change',changeLabelContext);