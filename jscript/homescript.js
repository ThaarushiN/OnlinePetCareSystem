const carouselContainer=document.querySelector('.prod');
const carouselImage=document.querySelectorAll('.prod img');

const prevButton=document.querySelector('#btnprev');
const nextButton=document.querySelector('#btnnext');

let counter=1;
const size=carouselImage[0].clientWidth;

carouselContainer.style.transform= 'translateX('+(-size*counter)+ 'px)';

nextButton.addEventListener('click,()=>'{
	/*if(counter<=0) {return};*/
	carouselImage.style.transition="transform 0.4s ease-in-out";
	counter++;
	carouselContainer.style.transform= 'translateX('+(-size*counter)+ 'px)';
});

prevButton.addEventListener('click,()=>'{
	if(counter<=0) {return};
	carouselImage.style.transition="transform 0.4s ease-in-out";
	counter--;
	carouselContainer.style.transform= 'translateX('+(-size*counter)+ 'px)';
});

carouselImage.addEventListener('transitionend',()=>{
	if(carouselImage[counter].id==='last')
	{
		carouselImage.style.transition="none";
		counter=carouselImage.length-2;
		carouselContainer.style.transform= 'translateX('+(-size*counter)+ 'px)';
	}
	if(carouselImage[counter].id==='first')
	{
		carouselImage.style.transition="none";
		counter=carouselImage.length-counter;
		carouselContainer.style.transform= 'translateX('+(-size*counter)+ 'px)';
	}
});