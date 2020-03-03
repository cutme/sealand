import InView from 'inview';

document.addEventListener('DOMContentLoaded',function() {
            
    const anims = document.getElementsByClassName('anim'),
          split = document.getElementsByClassName('js-split');
    
    window.animsInit = function() {        

        for (let i = 0; i < anims.length; i++) {

            if (cutme.Helpers.isInView(anims[i])) {
                anims[i].classList.add('anim--visible');
                
            }

            const inview = InView(anims[i], function(isInView) {
                if (isInView) {

                    anims[i].classList.add('anim--visible');
                    this.destroy();
    
                }
            });
        }
        
/*
        
        for (let j = 0; j < split.length; j++) {

            const inview = InView(split[j], function(isInView) {
                if (isInView) {

                    split[j].classList.add('startsplit');
                    this.destroy();
    
                }
            });
        }
*/
    };

}, false);
