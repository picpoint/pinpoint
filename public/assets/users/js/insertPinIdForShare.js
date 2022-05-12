let pinid = document.querySelector('.pinspage__pinid');
let sharebtn = document.querySelectorAll('.sharebtn');




class SharePinId {

    constructor(pinid, sharebtn) {
        this.pinid = pinid;
        this.sharebtn = sharebtn;
    }


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