carousel({id:'Logos', //Enter arbitrary but unique ID of this slideshow instance
          border:'',
          size_mode:'image', //Enter "carousel" or "image". Affects the width and height parameters below.
          width:99, //Enter width of image or entire carousel, depending on above value
          height:100, //Enter height of image or entire carousel, depending on above value
          sides:6, //# of sides of the carousel. What's shown = sides/2. Even integer with sides/2< total images is best
          steps:23, //# of animation steps. More = smoother, but more CPU intensive
          speed:3, //Speed of slideshow. Larger = faster.
          direction:'left', //Direction of slideshow. Enter "top", "bottom", "left", or "right"
          images:['client_logo/abhyas.png',
                  'client_logo/ACDA logo.png',
                  'client_logo/jvslogo.png',
									'client_logo/vishwabharti.png'],
          links: [ //enter link URLs, or for no links, empty array instead (links :[])
									],
          titles:['logo',
									'logo',
									'logo',
									'logo'],
          image_border_width:0,
          image_border_color:'blue'
          });