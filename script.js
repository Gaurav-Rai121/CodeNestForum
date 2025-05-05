function articleCard(title,desc,url,comments_count, public_reactions_count,cover_image){
    let mainDiv= document.body.querySelector('.mainDiv')
    let divOne= document.createElement('div');
    divOne.setAttribute('class',"bg-white shadow-lg rounded-lg overflow-hidden transition transform hover:scale-105 hover:shadow-xl");
    mainDiv.appendChild(divOne);

    let img= document.createElement('img');
    img.setAttribute('class','w-full h-48 object-cover');
    img.setAttribute('src',cover_image);
    img.setAttribute('alt','this is the img');
    divOne.appendChild(img);

    let divTwo= document.createElement('div');
    divTwo.setAttribute('class','p-6');
    divOne.appendChild(divTwo);

    let heading= document.createElement('h3');
    heading.setAttribute('class','font-bold text-xl mb-2');
    heading.innerHTML=`${title}...`;
    divTwo.appendChild(heading);

    let paragraph= document.createElement('p');
    paragraph.setAttribute('class','text-gray-600 mb-4');
    paragraph.innerHTML=`${desc}...`
    divTwo.appendChild(paragraph);

   


    let divThree= document.createElement('div');
    divThree.setAttribute('class','flex items-center justify-between mt-4 text-gray-600');
    divTwo.appendChild(divThree);

    let divFour= document.createElement('div');
    divFour.setAttribute('class','flex items-center space-x-2');
    divThree.appendChild(divFour);

    divFour.innerHTML=` <span class="flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 18s-5-3.39-8-6c-3-3 0-8 4-8 2 0 3 2 4 3 1-1 2-3 4-3 4 0 7 5 4 8-3 2.61-8 6-8 6z" /></svg>
    <span class="ml-1">${public_reactions_count}</span>
    </span><span class="flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
    <path d="M17 1H3a2 2 0 00-2 2v14l4-4h12a2 2 0 002-2V3a2 2 0 00-2-2zm-1 10H4.5L2 15v-2H17V3H3v14h12l2-2v2a1 1 0 01-1 1H3.5l1.5-1.5H16a1 1 0 001-1v-1z" /></svg>
     <span class="ml-1">${comments_count}</span>
    </span>`;

 let readMore= document.createElement('a');
    readMore.setAttribute('href',url);
    readMore.setAttribute('class','text-blue-500 underline');
    readMore.innerHTML='Read More';
    divThree.appendChild(readMore);

    
}

let tags=['javascript','html','css','tailwind','bootstrap','shadcn','react','nextjs','node','angular','vue','java','c','c++','python','php','django','laravel','mysql'];

// Generate a random number between 0 and 20
const randomNumber = Math.floor(Math.random() * 18);
console.log(randomNumber);
console.log(tags[randomNumber]);


let api=fetch(`https://dev.to/api/articles?tag=${tags[randomNumber]}`)
.then((resolve)=>{
   let data=resolve.json();
   return data;
})
.then((data)=>{
    let articles=data;
    console.log(articles['0']);
   
     for(let i=0;i<=2;i++){
        let title= String(articles[i].title)
       let newTitle= title.substring(0,38); 
       let coverImage=articles[i].cover_image;
       let socialImage=articles[i].social_image;
       let Image= coverImage=null?socialImage:coverImage
       articleCard(newTitle,articles[i].description,articles[i].url,articles[i].comments_count, articles[i].public_reactions_count,Image);
     }
    
})

// let codesnippt=document.getElementById("codeSnippet").classList
// if(localStorage.getItem('theme', 'dark')){
//     document.body.querySelector('.mycard').classList.replace('bg-white','bg-blue-500');
    
// }

// if(localStorage.getItem('theme', 'light')){
//     document.body.querySelector('.mycard').classList.replace('bg-blue-500','bg-gray-500')
    
// }

