var lis = document.querySelectorAll(".container > li");
document.querySelector('body').style.height=(screen.height-'10px');
document.querySelector('body').style.width=(screen.width-'10px');
var menuIndex;
for (var i = 0; i < lis.length; i++) {
    lis[i].addEventListener("click", onclick2);
}
function onclick2() {
    lis.forEach(func);
    function func(item, index) {
        item.classList.remove('active');
    }
    this.classList.add('active');
    for (menuIndex = 0; menuIndex < lis.length; menuIndex++) {
        if(lis[menuIndex].classList.contains("active")) {
            break;
        }
    }
    set();
    switch(menuIndex) {
        case 0:
            document.getElementsByClassName('que')[0].textContent="Question for 1st letter";
            break;
        case 1:
            document.getElementsByClassName('que')[0].textContent="Question for 2nd letter";
            break;
        case 2:
            document.getElementsByClassName('que')[0].textContent="Question for 3rd letter";
            break;
        case 3:
            document.getElementsByClassName('que')[0].textContent="Question for 4th letter";
            break;
        case 4:
            document.getElementsByClassName('que')[0].textContent="Question for 5th letter";
            break;
        case 5:
            document.getElementsByClassName('que')[0].textContent="Question for 6th letter";
            break;
        case 6:
            document.getElementsByClassName('que')[0].textContent="Question for 7th letter";
            break;
        case 7:
            document.getElementsByClassName('que')[0].textContent="Question for 8th letter";
            break;
        case 8:
            document.getElementsByClassName('que')[0].textContent="Question for 9th letter";
            break;
    }

}
function hint () {
    var x = document.getElementsByClassName('hint')[0];
    document.querySelector('.hint').style.display='block';
    if( x.textContent === '') {
        switch(menuIndex) {
            case 0:
                x.textContent="Hint for 1st question";
                break;
            case 1:
                x.textContent="Hint for 2nd question";
                break;
            case 2:
                x.textContent="Hint for 3rd question";
                break;
            case 3:
                x.textContent="Hint for 4th question";
                break;
            case 4:
                x.textContent="Hint for 5th question";
                break;
            case 5:
                x.textContent="Hint for 6th question";
                break;
            case 6:
                x.textContent="Hint for 7th question";
                break;
            case 7:
                x.textContent="Hint for 8th question";
                break;
            case 8:
                x.textContent="Hint for 9th question";
                break;
        }
        x.style.fontSize='16px';
    } else {
        x.textContent = '';
        x.style.fontSize='0px';
    }
}
function set() {
    document.querySelector('.result').textContent="";
    document.querySelector('.result').style.display="none";
    document.querySelector('.video').style.display="none";
    document.querySelector('.video').src="";
    document.querySelector('.que-container').style.display='block';
    document.querySelector('.ans-container').style.display='block';
    document.querySelector('.ans').value="";
    document.querySelector('.hint').textContent='';
    document.querySelector('.hint').style.display='none';
}
function verify() {
    var ans = document.querySelector('.ans').value;

    var packet = {
        menuIndex: menuIndex,
        ans: ans
    }

    var fd = new FormData();
    fd.append('packet', JSON.stringify(packet));

    axios.post("anschk.php", fd)
    .then (res => {
        var obj = res.data;
        if (obj.contentType == 'text') {
            document.querySelector('.result').textContent = obj.content;
            document.querySelector('.result').style.display='block';
        } else if ( obj.contentType == 'link') {
            document.querySelector('.video').src = obj.content;
            document.querySelector('.video').style.display = 'block';
        } else {
            document.querySelector('.result').textContent = obj;
            document.querySelector('.result').style.display='block';
        }
    })
    .catch (err => {
        console.log("Error : " + err);
    })
}