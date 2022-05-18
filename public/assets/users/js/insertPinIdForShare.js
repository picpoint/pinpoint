let pinid = document.querySelector('.pinspage__pinid');
let sharebtn = document.querySelectorAll('.sharebtn');


/**
 * Класс для получения id пина и передаче id в форму при репосте
 */


class SharePinId {

    constructor(pinid, sharebtn) {
        this.pinid = pinid;
        this.sharebtn = sharebtn;
    }


    /**
     * Метод перебирает кнопки "поделиться", получает id и передаёт в форму
     */
    sharePin() {
        for (let i = 0; i < this.sharebtn.length; i++) {
            
            this.sharebtn[i].addEventListener('click', () => {
                this.pinid.firstElementChild.value = this.sharebtn[i].id;
            });

        }
    }


}


let shareCurrentPin = new SharePinId(pinid, sharebtn);
shareCurrentPin.sharePin();