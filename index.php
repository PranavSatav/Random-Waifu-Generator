<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

<style>
img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {display: none;}
.box{
    width:100%;
   
}
.button{
      background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
</head>
<body>
      
    
    
  
  

 <!--  <input type="submit" name="button1"
                class="button" value="Waifu" />
         
        <input type="submit" name="button2"
                   class="button"   value="NSFW" />
-->
     
                       
        

                   
                

<form method="post">
<section class="pt-24 bg-white">
    <div class="px-12 mx-auto max-w-7xl">
        <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
            <h1 class="mb-8 text-4xl font-extrabold leading-none tracking-normal text-gray-900 md:text-8xl md:tracking-tight">
                <span>Generate</span><br/> <span class="block w-full py-2 text-transparent bg-clip-text leading-12 bg-gradient-to-r from-green-400 to-purple-500 lg:inline">Anime Characters</span> <span><br/></span>
            </h1>
            <p class="px-0 mb-8 text-lg text-gray-600 md:text-4xl lg:px-24">
                Start by tapping the buttons below to randomly generate an anime image, this even includes <b>NSFW</b> images, proceed with caution!
            </p><br/>
            <div  class="mb-4 space-x-0 md:space-x-2 md:mb-8">
                
                    
                   <input type="submit" class="inline-flex font-mono items-center justify-center w-full px-6 py-3 mb-2 text-4xl text-white bg-green-400 rounded-2xl sm:w-auto sm:mb-0" name="button1"
                 value="Waifu" />
         
        
                
                <input type="submit" class="inline-flex items-center font-mono justify-center w-full px-6 py-3 mb-2 text-4xl bg-gray-100 rounded-2xl sm:w-auto sm:mb-0" name="button3"
                 value="Yeet" />
                 
                 <input type="submit" class="inline-flex items-center font-mono justify-center w-full px-6 py-3 mb-2 text-4xl text-white bg-red-400 rounded-2xl sm:w-auto sm:mb-0" name="button4"
                 value="Cuddle" />
               
              
                     <!--<input type="submit" class="inline-flex items-center justify-center w-full px-6 py-3 mb-2 text-lg bg-gray-100 rounded-2xl sm:w-auto sm:mb-0" name="button2"
                 value="NSFW" /> -->
                 
            </div>
        </div>
        <div class="w-full mx-auto mt-20 text-center ">
            <div class="relative z-0 w-full  mt-8">
                <div class="relative overflow-hidden rounded-b-full shadow-2xl">
                    <div class="flex items-center flex-none px-4 bg-green-400 rounded-b-none h-11 rounded-xl">
                        <div class="flex pl-8 space-x-2.5">
                            <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                            <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                            <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                        </div>
                    </div>
                      <?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        else if(array_key_exists('button2', $_POST)) {
            button2();
        }
        else if(array_key_exists('button3', $_POST)) {
            button3();
        }
        else if(array_key_exists('button4', $_POST)) {
            button4();
        }
        
        
        
        function button1() {
$data = json_decode(file_get_contents('https://api.waifu.pics/sfw/waifu'), true);
$pic = $data['url'];
echo '<img class="box" src="'.$pic.'">';

        }
        
        
        
        function button2() {
$data = json_decode(file_get_contents('https://api.waifu.pics/nsfw/waifu'), true);
$pic = $data['url'];
echo '<img class="box" src="'.$pic.'">';
        }
        
        
        
        function button3() {
$data = json_decode(file_get_contents('https://api.waifu.pics/sfw/yeet'), true);
$pic = $data['url'];
echo '<img class="box" src="'.$pic.'">';
        }
        
        
        
        function button4() {
$data = json_decode(file_get_contents('https://api.waifu.pics/sfw/cuddle'), true);
$pic = $data['url'];
echo '<img class="box" src="'.$pic.'">';
        }
    ?>
 
                </div>
            </div>
        </div>
    </div>
</section>
    </form>
<br/><br/>

</body>
</html>












