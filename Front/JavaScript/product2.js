var navImages=['https://cdn.gamer-network.net/2020/usgamer/XBOX-SERIES-X-DF-GLAMOUR-LEAD.png/EG11/thumbnail/1920x1080/format/jpg/quality/75/sorry-folks-xbox-series-x-is-not-releasing-on-thanksgiving-2020.jpg',
               'https://hips.hearstapps.com/digitalspyuk.cdnds.net/17/23/1497215779-one-x.png?crop=1.00xw:0.892xh;0,0&resize=1200:*',
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



