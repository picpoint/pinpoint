let pinid = document.querySelector('.pinspage__pinid');
let sharebtn = document.querySelectorAll('.sharebtn');


// console.log(pinid);
// console.log(sharebtn);



class SharePinId {

    constructor(pinid, sharebtn) {
        this.pinid = pinid;
        this.sharebtn = sharebtn;
    }


    sharePin() {
        for (let i = 0; i < this.sharebtn.length; i++) {
            // console.log(this.sharebtn[i]);
            
            this.sharebtn[i].addEventListener('click', () => {
                console.log(this.sharebtn[i]);
            });

        }
    }


}


let shareCurrentPin = new SharePinId(pinid, sharebtn);
shareCurrentPin.sharePin();