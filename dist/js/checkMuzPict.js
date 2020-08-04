const listen = document.querySelector('.listen');
const galery = document.querySelector('.galery');
const musicBlock = document.querySelector('.lk__music');
const photoBlock = document.querySelector('.lk__photo');




class ShowHidesBlocks {
  constructor(listen, galery, musicBlock, photoBlock) {
    this.listen = listen;
    this.galery = galery;
    this.musicBlock = musicBlock;
    this.photoBlock = photoBlock;
  }  


  showHidesMeth() {    
    listen.addEventListener('click', () => {      
      musicBlock.style.height = '100%';
      musicBlock.style.width = '100%';
      
      photoBlock.style.height = '0%';      
      photoBlock.style.width = '0%';      
    });

    galery.addEventListener('click', () => {      
      photoBlock.style.height = '100%';
      photoBlock.style.width = '100%';      

      musicBlock.style.height = '0%';
      musicBlock.style.width = '0%';      
    });

  }


}


let res = new ShowHidesBlocks(listen, galery, musicBlock, photoBlock);
res.showHidesMeth();
