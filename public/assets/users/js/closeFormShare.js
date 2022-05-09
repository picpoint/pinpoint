let shareWindow = document.querySelector('.pinspage__share');
let closeBtn = document.querySelector('.pinspage__close');
let shareBtn = document.querySelectorAll('.sharebtn');




class CloseFormShare {

    constructor(shareWindow, closeBtn, shareBtn) {
        this.shareWindow = shareWindow;
        this.closeBtn = closeBtn;
        this.shareBtn = shareBtn;
    }


    closeForm() {
        closeBtn.addEventListener('click', () => {
            shareWindow.style.display = 'none';
        });


        for (let i = 0; i < shareBtn.length; i++) {
            shareBtn[i].addEventListener('click', () => {
               console.log(shareBtn[i]);
               shareWindow.style.display = 'flex';
            });
        }

    }


}


let closeShareForm = new CloseFormShare(shareWindow, closeBtn, shareBtn);
closeShareForm.closeForm();