var navImages=['https://cdn.mos.cms.futurecdn.net/qkttBKRkkQbaEcPphdgmoZ-1200-80.jpeg',
               'https://static2.srcdn.com/wordpress/wp-content/uploads/2020/06/PS5-On-Its-Side.jpg?q=50&fit=crop&w=960&h=500',
               // 'https://www.neptun-ks.com/2020/03/13/ultra.b1.jpg',
                // 'https://www.neptun-ks.com/2020/03/13/ultra.b3.jpg' 
				];
   
$(function(){
    $('.nav li').mouseover(function(e){
        e.preventDefault();
       
        $('.main-image img').attr('src',navImages[$(this).index()]);
        
    });
    $('.nav').mouseleave((e)=>{
        e.preventDefault();
        $('.main-image img').attr('src',navImages[0]);
    });
});

var product={
    name: 'ex',
    company: 'Samsung',
    desc: 'lorem ipsum ',
    price:1000
}



