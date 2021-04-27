const header=document.querySelector("header");
const cobrir=document.querySelector(".cobrir")

const cobriroptions={
     rootMargin: "-140px 0px 0px 0px"
}  
const observador= new IntersectionObserver
(function(
    entries,observador
){
    entries.forEach(entry =>{
        console.log(entry.target);
        if(!entry.isIntersecting){
            header.classList.add("scrollheader")
            
        }else{
            header.classList.remove("scrollheader")
        }
        })
},cobriroptions
)
observador.observe(cobrir)