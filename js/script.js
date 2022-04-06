function validateEmail() {
    let email = document.getElementById('id_email').value;
    let re = /\S+@\S+\.\S+/;
    let result = re.test(email);
    if (result) {
        document.getElementById('email-error').style.display = "none";
        document.getElementById('submitbutton').disabled = false;
       // document.getElementById("email-form").submit();
    }
    else {
        document.getElementById('email-error').style.display = "block";
        document.getElementById('submitbutton').disabled = true;
    }
}

var faq = document.getElementsByClassName("faq-page");
var i;
for (i = 0; i < faq.length; i++) {
    faq[i].addEventListener("click", function () {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");
        /* Toggle between hiding and showing the active panel */
        var body = this.nextElementSibling;
        if (body.style.display === "block") {
            body.style.display = "none";
        } else {
            body.style.display = "block";
        }
    });
}


const users = ['Lucas', 'Mischa', 'Ruben'];

const memberDiv = document.querySelector('.memberDiv');
const addIcon = document.querySelector('.addIcon');

const userIcons = () => {
    users.reverse();
    users.map((curElem) => {
        memberDiv.insertAdjacentHTML('afterbegin', `
        <button type="reset" onclick="location.href='inlog.php'" class="btn"><span>${curElem}</span></button>
        `);
    })
};

addIcon.addEventListener('click', () => {
    let userName = prompt('please enter your name');

    if(userName != null && !users.includes(userName)){
        users.push(userName);
        console.log(users);
        memberDiv.insertAdjacentHTML('afterbegin', `
        <button type="reset" onclick="location.href='inlog.php'" class="btn"><span>${userName}</span></button>
        `);
    }else{
        alert('username already exist');
    }
})


userIcons();
