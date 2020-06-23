<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(() => {
  removingPaddingFromMenuItem();
   ChangingUiOfLoginButtonOnScroll();
   ChangingUiOfFreeDemoButtonOnScroll();
  jQuery(document).scroll(() => {
   /* if(jQuery(document).scrollTop() > 100){
      
    }else {
      console.log('revert to normal');
    } 
    */
  });
});

function removingPaddingFromMenuItem() {
  jQuery('.et_header_style_left #et-top-navigation nav>ul>li>a').css({ 
  	padding : "10px"
  })
}

function ChangingUiOfLoginButtonOnScroll() {
  	
   	jQuery('#top-menu > #menu-item-270 > a').css({
          "background": "#ff4d54",
          "border-radius": "5px",
      	  "color": "#fff"
      });
 
}
function ChangingUiOfFreeDemoButtonOnScroll() {
   	jQuery('#menu-item-349').css({
          outline: "1px solid #ff4d54",
      });
}</script>
<!-- end Simple Custom CSS and JS -->
