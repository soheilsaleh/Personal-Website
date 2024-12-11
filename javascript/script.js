window.onload = function(){
    document.querySelector(".loader").style.display = "none";
    document.querySelector(".content").style.display = "block";
}


function showResume(){
    let flag = document.querySelector(".resumeDiv");
    if(flag.style.display == 'none'){
        flag.style.display = 'block';
    }else{
        flag.style.display = 'none';
    }
}
