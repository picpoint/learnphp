let burger = document.querySelector('.wrp__burger');
let list = document.querySelector('.wrp__list');
let link = document.querySelector('.wrp__link');
let enterblock = document.querySelector('.wrp__enter');




class Burger {
	constructor(burger, list, link, enterblock) {
		this.burger = burger;
		this.list = list;
		this.link = link;
		this.enterblock = enterblock;
	}


	showHide() {
		this.burger.addEventListener('click', () => {									
			this.list.classList.toggle('listhght');
			this.enterblock.classList.toggle('menutgl');

			for(let i = 0; i < this.list.children.length; i++) {
				console.log(this.list.children[i]);
				this.list.children[i].classList.toggle('menutgl');
			}
			
		});
	}

}


let act = new Burger(burger, list, link, enterblock);
act.showHide();