<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><SCRIPT type=text/javascript>
  $(document).ready(function(){ 
  SexyLightbox.initialize({ color:'white', dir: 'http://www.iaviva.com/<?php echo SKIN_PATH;?>/theme/bg'});
 });
</SCRIPT>

</script>

<!--[if lte IE 6]>

<script type="text/javascript" src="<?php echo SKIN_PATH;?>/js/PNG.js"></script>

<script>

PNG.fix('.png');

</script>

<![endif]-->
<script>

function checkbrowse() { 

    var ua = navigator.userAgent.toLowerCase();

    var is = (ua.match(/\b(chrome|opera|safari|msie|firefox)\b/) || ['', 'mozilla'])[1];

    var r = '(?:' + is + '|version)[\\/: ]([\\d.]+)';

    var v = (ua.match(new RegExp(r)) || [])[1];

    jQuery.browser.is = is;

    jQuery.browser.ver = v;

    return { 

        'is': jQuery.browser.is,

        'ver': jQuery.browser.ver

    }

}





var public = checkbrowse();

var showeffect = "";

if ((public['is'] == 'msie' && public['ver'] < 8.0)) { 

  showeffect = "show"

} else { 

  showeffect = "fadeIn"

}

jQuery(document).ready(function($) { 

$("img").not($("h2 img")).not($("h1 img")).lazyload({ 

  placeholder : "<?php echo SKIN_PATH;?>/theme/bg/grey.gif", 

  effect: showeffect,

  failurelimit: 10

  })

});
</script>
<link href="<?php echo SKIN_PATH;?>/css/uecms.css" rel="stylesheet" type="text/css" />