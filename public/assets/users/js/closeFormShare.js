let shareWindow = document.querySelector('.pinspage__share');
let closeBtn = document.querySelector('.pinspage__close');
let shareBtn = document.querySelectorAll('.sharebtn');
let hideid = document.querySelector('.hideid');




class CloseFormShare {

    constructor(shareWindow, closeBtn, shareBtn, hideid) {
        this.shareWindow = shareWindow;
        this.closeBtn = closeBtn;
        this.shareBtn = shareBtn;
        this.hideid = hideid;
    }


    closeForm() {
        this.closeBtn.addEventListener('click', () => {
            this.shareWindow.style.display = 'none';
        });


        for (let i = 0; i < this.shareBtn.length; i++) {
            this.shareBtn[i].addEventListener('click', () => {
               this.shareWindow.style.display = 'flex';
               this.hideid.innerText = this.shareBtn[i].id;
            });
        }

    }


}


let closeShareForm = new CloseFormShare(shareWindow, closeBtn, shareBtn, hideid);
closeShareForm.closeForm();