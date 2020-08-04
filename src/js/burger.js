let burger = document.querySelector('.wrp__burger');
let list = document.querySelector('.wrp__list');
let link = document.querySelector('.wrp__link');
let enterblock = document.querySelector('.wrp__enter');
let lineone = document.querySelector('.wrp__lineone');
let linetwo = document.querySelector('.wrp__linetwo');
let linethree = document.querySelector('.wrp__linethree');




class Burger {
	constructor(burger, list, link, enterblock, lineone, linetwo, linethree) {
		this.burger = burger;
		this.list = list;
		this.link = link;
		this.enterblock = enterblock;
		this.lineone = lineone;
		this.linetwo = linetwo;
		this.linethree = linethree;
	}


	showHide() {
		this.burger.addEventListener('click', () => {									
			this.list.classList.toggle('listhght');
			this.enterblock.classList.toggle('menutgl');
			this.lineone.classList.toggle('linerotate');
			this.linetwo.classList.toggle('hideelem');
			this.linethree.classList.toggle('linerotate2');
			

			for(let i = 0; i < this.list.children.length; i++) {
				console.log(this.list.children[i]);
				this.list.children[i].classList.toggle('menutgl');
			}
			
		});
	}


}


let act = new Burger(burger, list, link, enterblock, lineone, linetwo, linethree);
act.showHide();