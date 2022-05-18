let shareWindow = document.querySelector('.pinspage__share');
let closeBtn = document.querySelector('.pinspage__close');
let shareBtn = document.querySelectorAll('.sharebtn');


/**
 * Класс закрытия формы "Поделиться пином с другом"
 */
class CloseFormShare {

    constructor(shareWindow, closeBtn, shareBtn) {
        this.shareWindow = shareWindow;
        this.closeBtn = closeBtn;
        this.shareBtn = shareBtn;
    }


    /**
     * Метод закрытия окна "Поделиться"
     *
     * for - перебирает все кнопки-значки "поделиться" во всех пинах(новостях) и вешает событие
     * которое при клике показывет форму "поделиться"
     */
    closeForm() {
        this.closeBtn.addEventListener('click', () => {
            this.shareWindow.style.display = 'none';
        });


        for (let i = 0; i < this.shareBtn.length; i++) {
            this.shareBtn[i].addEventListener('click', () => {
               this.shareWindow.style.display = 'flex';
            });
        }

    }


}


let closeShareForm = new CloseFormShare(shareWindow, closeBtn, shareBtn);
closeShareForm.closeForm();